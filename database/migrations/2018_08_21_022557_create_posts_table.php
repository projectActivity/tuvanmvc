<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250)->comment('Tieu de');
            $table->text('summary')->nullable()->comment('Tom tat');
            $table->text('content')->nullable()->comment('Noi dung');
            $table->text('image')->nullable()->comment('Hinh anh');
            $table->integer('catagory_id')->nullable()->comment('Chu de');
            $table->boolean('is_delete')->default(0)->comment('? Xoa');
            $table->boolean('is_display')->default(0)->comment('? Hien thi');
            $table->integer('article_type_id')->nullable()->comment('Loai bai viet');
            $table->integer('created_by')->nullable()->comment('Nguoi tao');
            $table->integer('updated_by')->nullable()->comment('Nguoi cap nhat');
            $table->integer('view')->default(0)->comment('Luot xem');
            $table->date('publicshed')->nullable()->comment('Ngay dang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
