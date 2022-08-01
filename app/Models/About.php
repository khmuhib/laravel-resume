<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $filable = [
        'title',
        'subtitle',
        'short_description',
        'birth',
        'link',
        'degree',
        'phone',
        'email',
        'city',
        'freelance',
        'long_description',
    ];
}
