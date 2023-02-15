<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic as Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $comics = Comic::all();
        return view('comics.Guest.home', compact('comics'));
    }
}
