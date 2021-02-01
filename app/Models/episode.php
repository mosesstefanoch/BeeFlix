<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'episode',
        'title',
    ];

    public function movie()
    {
        return $this->belongsTo('App\Models\movie', 'movie_id', 'id');
    }
}