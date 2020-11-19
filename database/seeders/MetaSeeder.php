<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site_logo' => null,
            'meta_title' => 'Triangle Technologies Ltd',
            'meta_keywords' => 'Graphics Design, Web Design, Web Development, Software Company',
            'meta_description' => 'Triangle Technologies Ltd is a well known software company in Bangladesh which is provide dynamic technological product to the clients before deadline.',
            'meta_image' => null,
            'created_at' => Carbon::now()
        ]);
    }
}
