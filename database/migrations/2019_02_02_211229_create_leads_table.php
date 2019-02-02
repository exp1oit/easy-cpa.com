<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('comment')->nullable();
            $table->float('reward',8,2)->nullable()->unsigned();
            $table->integer('offer_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            //$table->integer('status_id')->nullable()->unsigned();
            $table->timestamps();
        });

        Schema::table('leads', function (Blueprint $table) {
            $table->foreign('offer_id')->references('id')->on('offers');
            $table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropForeign(['offer_id']);
            $table->dropForeign(['user_id']);
            //$table->dropForeign(['status_id']);
        });
        Schema::dropIfExists('leads');
    }
}
