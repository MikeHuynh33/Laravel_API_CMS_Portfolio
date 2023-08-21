<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillModel extends Model
{
    use HasFactory;
    protected $table = 'Skill';
    protected $fillable = ['title', 'description', 'listIcon'];

    protected $casts = [
        'description' => 'array',
        'listIcon' => 'array',
    ];
}
