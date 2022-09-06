<h1>Nummers</h1>

@if(count($songs) > 1)
    @foreach($songs as $song)
        <div class="well">
            <h3>{{$song->songName}}</h3>
        </div>
    @endforeach
@else
    <p>Geen songs beschikbaar</p>
@endif