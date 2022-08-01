<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'skill_01',
        'skill_02',
        'skill_03',
        'skill_04',
        'skill_05',
        'profile_img',
        'bg_img'
    ];

}
