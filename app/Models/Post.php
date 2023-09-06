<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected  $fillable = [
        'title', // Add any other fields that you want to allow mass assignment for
        'description',
        'tags',
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
