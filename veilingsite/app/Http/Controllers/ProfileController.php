<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class ProfileController extends Controller
{
    public function index() {
        return view('profile');
    }
}
