<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    protected $fillable = [
        'fk_user_id'
    ];

    public function items() {
        return $this->hasMany('App\Item');
    }

}
