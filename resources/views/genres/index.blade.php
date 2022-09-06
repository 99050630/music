<h1>Genres</h1>

@if(count($genres) > 1)
    @foreach($genres as $genre)
        <div class="well">
            <a href="songs/{{$genre->id}}"><h3>{{$genre->genre}}</h3></a>
        </div>
    @endforeach
@else
    <p>Geen genres beschikbaar</p>
@endif