<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController; 
use App\Http\Controllers\UserController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

/*Route::get('/planet', function () {
    return ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});*/

/*Route::get('/planets/{planet?}', function ($planet = null) {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    
    if ($planet) {
        $planets = collect($planets)->filter(function ($p) use ($planet) {
            return strtolower($p['name']) == strtolower($planet);
        })->values()->all();
    }

    
    if (empty($planets)) {
        dd('No planets found', $planets, $planet);
    }

    return view('planets', compact('planets', 'planet' ));
});*/


Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']);


Route::get('/planetsdb', [UserController::class, 'index']);


Route::get('/saturn', function () {
    return view('planets.saturn');
})->name('saturn');

Route::get('/earth', function () {
    return view('planets.earth');
})->name('earth');

Route::get('/venus', function () {
    return view('planets.venus');
})->name('venus');

Route::get('/mars', function () {
    return view('planets.mars');
})->name('mars');

Route::get('/jupiter', function () {
    return view('planets.jupiter');
})->name('jupiter');



Route::get('/', [UserController::class, 'index'])->name('home');

