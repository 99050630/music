@extends('layouts.app')

<h1>Playlist</h1>

@if(count($playlistSongs) > 0)
    @for($i = 0; $i < count($playlistSongs); $i++)
        <a href="remove/song/{{$i}}"><div class="well">
            <h3>{{$playlistSongs[$i]}}</h3>
        </div></a>
    @endfor
@else
    <p>Geen songs beschikbaar</p>
@endif
