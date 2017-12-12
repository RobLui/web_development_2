<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lot_id');

            $table->string('category');
            $table->string('auction_title');
            $table->date('year');

            $table->decimal('width',4,2);
            $table->decimal('height',4,2);
            $table->decimal('depth',4,2);

            $table->text('description');
            $table->text('condition');
            $table->string('origin');

            $table->binary('artwork_image');
            $table->binary('signature_image');
            $table->binary('optional_image');

            $table->decimal('minimum_estimated_price',12,2);
            $table->decimal('maximum_estimated_price',12,2);
            $table->decimal('buyout_price',12,2);

            $table->date('end_date');
            $table->boolean('agreed');
            $table->integer('amount_of_bids')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
