<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Blog;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('title');
        });

        Blog::all()->each(function ($blog) {
            $base = Str::slug($blog->title);
            $slug = $base;
            $counter = 1;
            while (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                $slug = $base . '-' . $counter++;
            }
            $blog->slug = $slug;
            $blog->saveQuietly();
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
