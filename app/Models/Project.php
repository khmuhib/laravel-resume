<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'category_id', 'client', 'project_date', 'project_url', 'img_01', 'img_02', 'img_03'];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}
