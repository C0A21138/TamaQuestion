<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'title',
        'image_path',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'correct_answer_num',
        'explanation',
        'category',
    ];

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
