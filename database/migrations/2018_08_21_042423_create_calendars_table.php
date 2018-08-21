<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 500)->comment('Ho ten');
            $table->string('email', 250)->nullable();
            $table->string('phone', 13)->nullable()->comment('Dien thoai');
            $table->date('appointment_date')->nullable()->comment('Ngay hen');
            $table->integer('service_id')->nullable()->comment('Loai tu van');
            $table->text('content')->nullable()->comment('Noi dung');
            $table->string('file', 500)->nullable()->comment('Tep dinh kem');
            $table->boolean('is_done')->default(0)->comment('? Hoan thanh');
            $table->boolean('is_office')->default(0)->comment('? Van phong');
            $table->string('title', 500)->default(0)->comment('Tieu de');
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
        Schema::dropIfExists('calendars');
    }
}
