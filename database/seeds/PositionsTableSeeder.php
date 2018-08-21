<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->delete();

        $data = [
        	['name' => 'Giám đốc'],
        	['name' => 'Phó giám đốc'],
        	['name' => 'Trưởng phòng'],
        	['name' => 'Nhân viên'],
        	['name' => 'Thực tập sinh'],
        	['name' => 'Công tác viên'],
        ];

        DB::table('positions')->insert($data);
    }
}
