<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;
    protected $table = 'Project';
    protected $fillable = [
        'project_name',
        'description',
        'skills',
        'image_url',
        'project_view_url',
        'project_live_url',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'description' => 'array',
        'skills' => 'array',
    ];
}