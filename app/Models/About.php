<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'image',
        'name',
        'content',
        'text_1_icon',
        'text_1',
        'text_1_content',
        'tex_2_icon',
        'text_2',
        'text_2_content',
        'text_3_icon',
        'text_3',
        'text_3_content'
    ];
}
