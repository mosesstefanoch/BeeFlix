@extends('welcome')

@section('content')

@foreach ($genre as $genre)
    <br>
    <div class="container text-left">    
        <h3>{{$genre->name}}</h3><br>
        <div class="row">
            @foreach ($movie as $items)
            @if ($items->genre_id == $genre->id)
                <div class="col-sm-4">
                <a href="movie/{{$items->id}}">
                    <img src="{{$items->photo}}" class="img-responsive" style="width: 364px; height:536px" alt="Image">
                    <p class="font-weight-bold">{{$items->title}}</p>
                </a>
                </div>
            @endif
            @endforeach
        </div>
        </div><br> 
@endforeach

@endsection