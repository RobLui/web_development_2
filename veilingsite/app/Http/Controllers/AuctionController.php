<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionController extends Controller
{

    public function show($id) {
        return view('auctions.show');
    }

    public function create() {
        return view('auctions.create');
    }

    public function edit($id) {
        return view('auctions.edit');
    }

}
