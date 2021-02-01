@extends('welcome')

@section('content')

<br>

<div class="container">
  <div class="row">
    <div class="col">
        <img src="{{$movie->photo}}" class="img-responsive" style="width: 364px; height:536px" alt="Image">
    </div>
    <div class="col-5">
        <h3>{{$movie->title}}</h3>
        <p>{{$movie->description}}</p>
        
        @for ($i = 0; $i < 5; ++$i)
            <i class="fa fa-star{{$movie->rating<=$i?'-o':'' }}" aria-hidden="true"></i>
        @endfor
    @foreach ($genre as $item)
    @if ($item->id == $movie->genre_id)
        <a href="/genre/{{$item->id}}"><p>Category: {{$item->name}}</p></a>
    @endif
    @endforeach
    
        <br>
    </div>
    <div class="col">
     
          <h3>Episode</h3>
          <table class="table table-striped">
            
            <thead>
              <tr>
                <th scope="col">Episode</th>
                <th scope="col">Title</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($episode as $episodes)
              <tr>
                <th scope="row">{{$episodes->episode}}</th>
                <td>{{$episodes->title}}</td>
                @endforeach
              </tr>
            </tbody>
          </table>
          {{$episode->links()}}
        
    </div>
    </div>
 </div>
</div>
    
@endsection