<?php

namespace App\Http\Controllers;

use App\Item;
use function dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            'year'                      => 'required|integer',

            'width'                     => 'required|max:9999|integer',
            'height'                    => 'required|max:9999|integer',
            'depth'                     => 'max:9999',

            'description'               => 'required|max:255|',
            'condition'                 => 'required|max:255',
            'origin'                    => 'required|max:255',

            'artwork_image'             => 'required|image',
            'signature_image'           => 'required|image',
            'optional_image'            => 'image',

            'minimum_estimated_price'   => 'required|integer',
            'maximum_estimated_price'   => 'required|integer',
            'buyout_price'              => '',

            'end_date'                  => 'required|date',
            'agreed'                    => 'accepted',
            ]
        );

        if ($validator) {

            $item = new Item();
            $item->lot_id                       = 1;
            $item->category                     = $req->category;
            $item->auction_title                = $req->auction_title;
            $item->year                         = $req->year;

            $item->width                        = $req->width;
            $item->height                       = $req->height;
            !(empty($req->depth)) ? $item->depth = $req->depth : $req->depth = null;

            $item->description                  = $req->description;
            $item->condition                    = $req->condition;
            $item->origin                       = $req->origin;

            $item->artwork_image                = $req->artwork_image;
            $item->signature_image              = $req->signature_image;
            $item->optional_image               = $req->optional_image;

            $item->minimum_estimated_price      = $req->minimum_estimated_price;
            $item->maximum_estimated_price      = $req->maximum_estimated_price;
            !(empty($req->buyout_price)) ? $item->buyout_price = $req->buyout_price : null;


            $item->end_date                     = $req->end_date;
//            $item->fk_user_id                   = $req->fk_user_id;
//            $item->fk_watchlist_id              = 0;

            if ($req->agreed = 'on') {
                $item->agreed = true;
            }
            else {
                $item->agreed = false;
            }

            $item->amount_of_bids               = 0;

            $item->save();
            Session::flash('success','Auction added, good luck!');
        }
        return view('auctions.create');
    }

}
