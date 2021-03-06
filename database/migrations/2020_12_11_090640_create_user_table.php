<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('username', 50);
            $table->string('password');
            $table->string('email', 100);
            $table->string('no_telp', 12);
            $table->string('alamat', 200);
            $table->enum('level', ['admin', 'user']);
            $table->string('nama_lengkap', 100);
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
        Schema::dropIfExists('user');
    }
}
