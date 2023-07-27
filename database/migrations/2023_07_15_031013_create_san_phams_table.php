<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->increments('id_sanpham');
            $table->string('ten_sanpham');
            $table->longText('mo_ta')->nullable();
            $table->string('don_gia');
            $table->string('so_luong')->nullable();
            $table->string('hinh_anh_1')->nullable();
            $table->string('hinh_anh_2')->nullable();
            $table->string('hinh_anh_3')->nullable();
            $table->string('hinh_anh_4')->nullable();
            $table->unsignedInteger('id_gian_hang');
            $table->unsignedInteger('id_loai');
            $table->timestamps();
            $table->foreign('id_gian_hang')->references('id_gian_hang')->on('gian_hangs')->onDelete('cascade');
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
        Schema::dropIfExists('san_phams');
    }
}
