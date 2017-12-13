<?php

namespace App\Http\Controllers;

use AdvanceSearch\AdvanceSearchProvider\Search;
use Illuminate\Http\Request;

class IsearchController extends Controller
{
    public function index() {
        return view('pages.isearch');
    }

}
