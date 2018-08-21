<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Ten khach hang');
            $table->string('job')->nullable()->comment('Nghe nghiep');
            $table->string('content', 500)->nullable()->comment('Noi dung');
            $table->text('avatar')->nullable()->comment('Hinh anh');
            $table->boolean('is_display')->default(0)->comment('Hien thi');
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
        Schema::dropIfExists('feedback');
    }
}
