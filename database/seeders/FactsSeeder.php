<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            'fact_icon1' => 'fas fa-laptop-code',
            'fact_name1' => 'Projects Completed',
            'fact_count1' => 50,
            'fact_icon2' => 'fas fa-users',
            'fact_name2' => 'Happy Clients',
            'fact_count2' => 52,
            'fact_icon3' => 'fas fa-terminal',
            'fact_name3' => 'Lines Of Code',
            'fact_count3' => 156,
            'fact_icon4' => 'fas fa-trophy',
            'fact_name4' => 'Awards',
            'fact_count4' => 28,
            'created_at' => Carbon::now()
        ]);
    }
}
