<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lead_statuses')
        	->insert([
        	['name'=>"Новый"],
            ['name'=>"В обработке"],
            ['name'=>"Спам"],
            ['name'=>"Отказ"],
			['name'=>"Выполненный"]
		]);
    }
}