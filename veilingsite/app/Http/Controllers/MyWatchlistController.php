<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class MyWatchlistController extends Controller
{
    public function index() {
        return view('mywatchlist');
    }
}
