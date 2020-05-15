<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodebarang', 8)->unique();
            $table->string('namabarang', 255);
            $table->enum('kategori', ['Ruang Tamu','Ruang Makan','Ruang Kerja','Kamar Tidur','Dekorasi']);
            $table->string('harga', 255);
            $table->string('stok', 11);
            $table->string('gambar', 5000);
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
        Schema::dropIfExists('barang');
    }
}
