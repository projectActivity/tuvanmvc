<?php

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Education::truncate();

        $data = [
        	['name' => 'Đại học'],
        	['name' => 'Tiến sĩ'],
        	['name' => 'Thạc sĩ'],
        	['name' => 'Giáo sư']
        ];

        DB::table('educations')->insert($data);
    }
}
