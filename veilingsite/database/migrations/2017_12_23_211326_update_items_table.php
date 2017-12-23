<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {

//            // USER
//            $table->foreign('fk_user_id')
//                ->references('id')->on('users')
//                ->onDelete('cascade');
//            // WATCHLIST
//            $table->foreign('fk_watchlist_id')
//                ->references('id')->on('watchlists')
//                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
