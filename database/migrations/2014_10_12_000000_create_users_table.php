<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address', 255)->nullable();
            $table->date('birthday')->nullable();
            $table->boolean('sex')->default(0)->comment('Gioi tinh 0-Nu 1-Nam');
            $table->integer('position_id')->nullable()->comment('Chuc vu');
            $table->integer('education_id')->nullable()->comment('Hoc van');
            $table->text('experience')->nullable()->comment('Kinh nghiem');
            $table->text('avatar')->nullable()->comment('Anh dai dien');
            $table->integer('post_id')->nullable();
            $table->string('phone', 13)->nullable();
            $table->text('introduction')->nullable()->comment('Gioi thieu ngan');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
