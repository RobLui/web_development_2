<?php

namespace App\Http\Controllers;

use function dd;
use Illuminate\Http\Request;

class AuctionController extends Controller
{

    public function show($id) {
        return view('auctions.show');
    }

    public function create() {
        return view('auctions.create');
    }

    public function postcreate(Request $req) {

        $validator = $this->validate($req,
            [
            'category'                  => 'required|max:255|string',
            'auction_title'             => 'required|max:255|string',
            'year'                      => 'required|date|date',

            'width'                     => 'required|max:25|integer',
            'height'                    => 'required|max:255|integer',
            'depth'                     => 'required|max:255|integer',

            'description'               => 'required|max:255|',
            'condition'                 => 'required|max:255',
            'origin'                    => 'required|max:255',

            'artwork_image'             => 'required|image',
            'signature_image'           => 'required|image',
            'optional_image'            => 'image',

            'minimum_estimated_price'   => 'required|max:255|integer',
            'maximum_estimated_price'   => 'required|max:255|integer',
            'buyout_price'              => 'required|max:255|integer',

            'end_date'                  => 'required|date',
            'agreed'                    => 'accepted|boolean',
            ]
        );
        if (!$validator)
        {
            return view('auctions.show');
        }

    }

    public function edit($id) {
        return view('auctions.edit');
    }

}
