<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceModel extends Model
{
    use HasFactory;
    protected $table = 'Experience';
    protected $fillable = ['title', 'duration', 'Timeline', 'description'];
}
