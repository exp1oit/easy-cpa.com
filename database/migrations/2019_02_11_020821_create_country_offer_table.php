<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_offer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->integer('offer_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('country_offer', function (Blueprint $table) {
            $table->foreign('country_id')->references("id")->on('countries')->onDelete('cascade');
            $table->foreign('offer_id')->references("id")->on('offers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('country_offer', function ($table) {
            $table->dropForeign(['country_id']);
            $table->dropForeign(['offer_id']);
        });
        Schema::dropIfExists('country_offer');
    }
}
