<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSEOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_e_os', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keywords', 250)->nullable()->comment('Keyword');
            $table->string('slug', 500)->nullable()->comment('Slug');
            $table->string('description', 500)->nullable()->comment('Description');
            $table->string('title', 500)->nullable();
            $table->integer('item_id')->nullable();
            $table->string('type_item')->nullable();
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
        Schema::dropIfExists('s_e_os');
    }
}
