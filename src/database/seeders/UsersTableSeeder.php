<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exists = DB::table('users')->where('email', '35@coach.co.jp')->exists();

        if (!$exists) {
            $param = [
                'name' => 'tony',
                'email' => '35@coach.co.jp',
                'password' => 'American'
            ];
        DB::table('users')->insert($param);
        }
    }
}
