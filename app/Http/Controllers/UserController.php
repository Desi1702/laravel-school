<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planets;



class UserController extends Controller
{
    public function index()
    {
        $planets = Planets::all();

        return view('planets.dbindex', ['planets' => $planets]);
    }
}
