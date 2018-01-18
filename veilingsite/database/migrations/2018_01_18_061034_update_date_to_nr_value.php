<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class UpdateDateToNrValue extends Migration
{
    /**
     * Run the migrations.
     *<
     * @return void
     */
    public function up()
    {
        Schema::table('items', function($table)
        {
            $table->dropColumn('year');
        });
        Schema::table('items', function($table)
        {
            $table->integer('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function($table)
        {
            $table->dropColumn('year');
        });
    }
}
