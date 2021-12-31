<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nahid Islam',
            'email' => 'mdnahidislam30@gmail.com',
            'username' => 'nahidislam',
            'password' => Hash::make('nahidislam')
        ]);
    }
}
