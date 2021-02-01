<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_id',
        'title',
        'photo',
        'description',
        'rating',
    ];
    

    public function genre()
    {
        return $this->belongsTo('App\Models\genre', 'genre_id', 'id');
    }

    public function episode()
    {
        return $this->hasMany('App\Models\episode', 'movie_id', 'id');
    }
}

