<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;



class UserController extends Controller
{
    public function index()
    {
        $planets = Planet::all();

        return view('planets.dbindex', ['planets' => $planets]);
    }
}
