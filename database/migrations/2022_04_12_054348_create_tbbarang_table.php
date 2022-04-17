<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbbarang', function (Blueprint $table) {
            $table->string('kodebarang')->primary();
            $table->string('nama');
            $table->string('jenis');
            $table->string('merk');
            $table->string('satuan');
            $table->integer('jumlah_stock');
            $table->double('harga_jual');
            $table->double('harga_beli');
            $table->text('ket');
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
        Schema::dropIfExists('tbbarang');
    }
};
