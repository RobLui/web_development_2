<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class DetailController extends Controller
{

    public function index() {
        return view('detail');
    }

}
