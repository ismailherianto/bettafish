<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMLelangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_lelang', function (Blueprint $table) {
            $table->id();
            $table->string('brand',100);
            $table->text('keterangan');
            $table->dateTime('tgl_buka');
            $table->dateTime('tgl_tutup');
            $table->integer('harga_buka');
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
        Schema::dropIfExists('m_lelangs');
    }
}
