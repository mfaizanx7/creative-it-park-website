<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Industry;
use Illuminate\Support\Str;

class SitemapController extends Controller
{
    public function index()
    {
        $blogs = Blog::select('title', 'updated_at')->get()->map(function ($blog) {
            $blog->slug = Str::slug($blog->title);
            return $blog;
        });

        $industries = Industry::select('slug', 'updated_at')->get();

        return response()
            ->view('sitemap', compact('blogs', 'industries'))
            ->header('Content-Type', 'application/xml');
    }
}
