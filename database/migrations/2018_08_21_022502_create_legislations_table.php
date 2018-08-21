<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegislationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legislations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250)->comment('Ten van ban');
            $table->string('resolution', 250)->nullable()->comment('Nghi quyet');
            $table->text('content')->nullable()->comment('Noi dung');
            $table->date('immediately_date')->nullable()->comment('Ngay ban hanh');
            $table->date('effective_date')->nullable()->comment('Ngay hieu luc');
            $table->string('number')->nullable()->comment('So ky hieu');
            $table->string('type_document', 250)->nullable()->comment('Loai van ban');
            $table->string('limit', 250)->nullable()->comment('Pham vi');
            $table->string('agency_issued', 250)->nullable()->comment('Co quan ban hanh');
            $table->boolean('is_delete')->default(0)->comment('? Xoa');
            $table->boolean('is_display')->default(0)->comment('? Hien thi');
            $table->integer('created_by')->nullable()->comment('Nguoi tao');
            $table->integer('updated_by')->nullable()->comment('Nguoi cap nhat');
            $table->text('document')->nullable()->comment('Tai lieu');
            $table->text('pdf')->nullable();
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
        Schema::dropIfExists('legislations');
    }
}
