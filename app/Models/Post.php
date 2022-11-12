<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'min_to_reead',
        'content',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

}
