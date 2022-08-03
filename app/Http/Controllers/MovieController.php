<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function getMovie()
    {
        $movies = Movie::all();
        return view('movies', ['movies' => $movies]);
    }
    public function getAdminMovie()
    {
        $movies = Movie::all();
        return view('admin/movies', ['movies' => $movies]);
    }
}
