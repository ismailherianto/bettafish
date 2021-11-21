<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_barang', function (Blueprint $table) {
            $table->id();
            $table->string('brand',100);
            $table->text('keterangan');
            $table->integer('harga_barang');
            $table->string('foto',255)->nullable();
            $table->string('foto2',255)->nullable();
            $table->string('foto3',255)->nullable();
            $table->string('video',255)->nullable();
            $table->enum('status',['0','1'])->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
