<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function movie()
    {
        return $this->hasMany('App\Models\movie', 'genre_id', 'id');
    }

}


