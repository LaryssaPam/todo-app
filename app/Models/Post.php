<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
// $fillable pour sécurisé le droit d'ecriture
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'content',
        'author',
        'published'
    ];

    protected $casts = [
        'published' => 'boolean',
    ];
}