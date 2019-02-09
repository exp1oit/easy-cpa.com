<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offer_statuses')
        	->insert([
        	['name'=>"Новый"],
        	['name'=>"На паузе"],
			['name'=>"Выполненный"]
		]);
    }
}