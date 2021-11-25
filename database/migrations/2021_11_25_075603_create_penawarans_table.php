<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenawaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('t_penawaran', function (Blueprint $table) {
            $table->id();
            $table->integer('harga_tawar');
            $table->enum('pending',['0','1'])->default('0');
            $table->integer('user_id')->nullable();
            $table->integer('lelang_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('lelang_id')->references('id')->on('t_lelang')->onUpdate('CASCADE')->onDelete('RESTRICT');
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
        Schema::dropIfExists('t_penawaran');
    }
}
