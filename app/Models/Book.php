<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'author', 'published_year', 'section_id'];


    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}