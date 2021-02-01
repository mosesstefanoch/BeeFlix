<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\episode;
use App\Models\genre;
use App\Models\movie;

class MovieController extends Controller
{

    public function home2()
    {
        $genre = genre::all();
        $movie = movie::all();

        return view('home',['genre'=>$genre, 'movie'=>$movie]);
    }

    public function desc($id)
    {
        $genre = genre::all();
        $movie = movie::find($id);
        $episode = episode::where('movie_id','=',$id)->simplePaginate(3);

        return view('desc',['genre'=>$genre, 'movie'=>$movie, 'episode'=>$episode]);
    }

    public function genre($id)
    {
        $genre = genre::find($id);
        $movie = movie::all();

        return view('genre',['genre'=>$genre, 'movie'=>$movie]);
    }
}
