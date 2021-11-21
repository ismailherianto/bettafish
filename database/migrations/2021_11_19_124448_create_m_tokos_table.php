<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_tentangToko', function (Blueprint $table) {
            $table->id();
            $table->string('foto',100);
            $table->text('alamat');
            $table->string('kontak',20);
            $table->string('email',100);
            $table->string('instagram',100);
            $table->text('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_tokos');
    }
}
