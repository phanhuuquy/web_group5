<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGianHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gian_hangs', function (Blueprint $table) {
            $table->increments('id_gian_hang');
            $table->string('ten_gianhang');
            $table->string('dia_chi');
            $table->integer('van_chuyen');
            $table->integer('status')->default(0);
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_loai');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_loai')->references('id')->on('loais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gian_hangs');
    }
}
