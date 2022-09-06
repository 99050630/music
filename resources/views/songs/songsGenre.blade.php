@extends('layouts.app')

@section('content')
<h1>Nummers</h1>
@if(count($songs) > 1)
    @foreach($songs as $song)
        <a href="/ajax/add-song/{{$song->id}}" data-song="{{$song->id}}"><div class="mb-3 songToSession" id="{{$song->id}}">
            <h3>{{$song->songName}}</h3>
            <h4>{{$song->artist}}</h4>
            <p>{{$song->duration}}</p>
        </div></a>
    @endforeach
@else
    <p>Geen songs beschikbaar</p>
@endif
@stop
