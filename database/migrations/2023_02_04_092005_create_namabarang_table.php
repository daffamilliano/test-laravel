<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamabarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nama_barangs', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('jenis_barang_id')->unsigned();
            $table->string('nama_barang');
            $table->foreign('jenis_barang_id')->references('id')->on('jenis_barangs');
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
        Schema::dropIfExists('nama_barangs');
    }
}
