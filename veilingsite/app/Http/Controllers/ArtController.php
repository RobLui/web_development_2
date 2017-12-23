<?php

namespace App\Http\Controllers;

use AdvanceSearch\AdvanceSearchProvider\Search;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index() {
        return view('art');
    }

    public function searchFunction(Request $req) {
        if(!preg_match('#(?<=<)\w+(?=[^<]*?>)#', $req->searchtext) && !preg_match('#<#',$req->searchtext)) {
            $validator = $req->validate(
                [
                    'searchtext' => 'required|max:255',
                ]
            );
            if ($validator) {
                $i = new Search();
                // Items
                $item = $i->search(
                    'Item',
                    ['auction_title','origin','description'],
                    $req->searchtext,
                    null,
                    null,
                    true,
                    1000
                );
                return view('art',compact('item'));
            }
        }
        return view('pages.isearch');
    }
}
