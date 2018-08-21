<?php

use Illuminate\Database\Seeder;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('educations')->delete();

        $data = [
        	['name' => 'Đại học'],
        	['name' => 'Tiến sĩ'],
        	['name' => 'Thạc sĩ'],
        	['name' => 'Giáo sư']
        ];

        DB::table('educations')->insert($data);
    }
}
