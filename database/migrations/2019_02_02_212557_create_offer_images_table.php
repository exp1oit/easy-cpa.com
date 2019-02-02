<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('offer_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('offer_images', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('offer_id')->references('id')->on('offers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offer_images', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['offer_id']);
        });
        Schema::dropIfExists('offer_images');
    }
}
