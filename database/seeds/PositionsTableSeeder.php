<?php

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::truncate();

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
