<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catagories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255)->comment('Tieu de');
            $table->text('image')->nullable()->comment('Hinh anh');
            $table->text('description')->nullable()->comment('Mo ta');
            $table->boolean('is_display')->default(0)->comment('Hien thi 0 - An 1 - Hien');
            $table->boolean('is_delete')->default(0)->comment('Xoa');
            $table->integer('article_type_id')->nullable()->comment('Loai bai viet');
            $table->string('link', 255)->nullable()->comment('Lien ket');
            $table->boolean('is_top')->default(0)->comment('Noi bat');
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
        Schema::dropIfExists('catagories');
    }
}
