<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                'email' => 'trung999@gmail.com',
                'name' => 'Trung',
                'password' => bcrypt('123456'),
            ],

        ];
        DB::table('admins')->insert($data);
    }
}
