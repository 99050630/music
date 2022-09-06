<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addToSession extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = session()->get('playlist');
        array_push($data, $id);
        session()->put("playlist", $data);
    }
}
