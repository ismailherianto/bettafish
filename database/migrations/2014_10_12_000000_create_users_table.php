<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama',100);
            $table->string('email',100)->unique();
            $table->string('password',255);
            $table->string('kontak',15);
            $table->string('foto',255);
            $table->text('alamat');
            $table->enum('status',['0','1']);
            $table->string('role');
            $table->string('instagram');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user');
    }
}
