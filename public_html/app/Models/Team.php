<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory , SoftDeletes;

    public function roles(){
        return $this->hasOne('Spatie\Permission\Models\Role','id','roll_id');
    }
}
