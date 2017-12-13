<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'lot_id',
        'category',
        'auction_title',
        'year',
        'width',
        'height',
        'depth',
        'description',
        'condition',
        'origin',
        'artwork_image',
        'signature_image',
        'optional_image',
        'minimum_estimated_price',
        'maximum_estimated_price',
        'buyout_price',
        'end_date',
        'agreed',
        'amount_of_bids',
    ];
}
