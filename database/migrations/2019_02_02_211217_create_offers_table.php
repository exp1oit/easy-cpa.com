<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title');
            //$table->integer('category_id')->nullable()->unsigned();
            //$table->integer('subcategory_is')->nullable()->unsigned();
            $table->integer('status_id')->nullable()->unsigned();
            $table->float('rating',5,4)->nullable()->default(0);
            $table->text('description')->nullable();
            $table->text('promo')->nullable();
            $table->text('condition')->nullable();
            $table->timestamps();
        });

        Schema::table('offers', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('category_id')->references('id')->on('categories');
            //$table->foreign('subcategory_is')->references('id')->on('subcategories');
            $table->foreign('status_id')->references('id')->on('offer_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            //$table->dropForeign(['category_id']);
            //$table->dropForeign(['subcategory_is']);
            $table->dropForeign(['status_id']);
        });
        Schema::dropIfExists('offers');
    }
}
