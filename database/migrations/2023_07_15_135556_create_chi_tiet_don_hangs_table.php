<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietDonHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_don_hangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_dh');
            $table->unsignedInteger('id_sp');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('price');
            $table->timestamps();
            $table->foreign('id_dh')->references('id_don_hang')->on('don_hang')->onDelete('cascade');
            $table->foreign('id_sp')->references('id_sanpham')->on('san_phams')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_don_hangs');
    }
}
