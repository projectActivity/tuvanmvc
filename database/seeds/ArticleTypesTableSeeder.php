<?php

use Illuminate\Database\Seeder;
use App\Models\ArticleType;

class ArticleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleType::truncate();

        $data = [
        	['title' => 'Bài viết'],
        	['title' => 'Dịch vụ '],
        	['title' => 'Quá trình cung cấp dịch vụ'],
        	['title' => 'Giới thiệu - Liên hệ']
        ];

        DB::table('article_types')->insert($data);
    }
}
