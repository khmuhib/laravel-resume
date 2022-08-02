<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'client',
        'project_date',
        'project_url',
        'img_1',
        'img_2',
        'img_3',
    ];
}
