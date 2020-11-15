<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'email' => 'hr@triangel.com',
            'phone_one' => '+8801904654712',
            'phone_two' => '+8801810536303',
            'address' => 'Plot #02, Road #12, Sector #10, Uttara Dhaka 1230',
            'facebook_link' => '#',
            'github_link' => '#',
            'linkedin_link' => '#',
            'created_at' => Carbon::now()
        ]);
    }
}
