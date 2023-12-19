<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        // MassAssignmentを許可するフィールド
        'title',
        'content',
        'photo_path',
        'lat',
        'lng',
    ];
}
