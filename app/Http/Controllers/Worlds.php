<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Worlds extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('worlds.index');
    }

    public function select()
    {
        return view('worlds.select');
    }

    public function show()
    {
        return view('worlds.show');
    }
}
