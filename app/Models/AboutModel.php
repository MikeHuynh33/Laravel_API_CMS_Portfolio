<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;
    protected $table = 'About';
    protected $fillable = [
        'nickname',
        'fullname',
        'email',
        'homephone',
        'moblie',
        'address',
        'resumeUrl',
        'profileUrl',
        'listLinks',
    ];

    protected $casts = [
        'listLinks' => 'array',
    ];
}
