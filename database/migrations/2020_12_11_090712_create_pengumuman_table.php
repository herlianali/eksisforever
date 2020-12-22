<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengumumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->integer('id_pengumuman')->autoIncrement();
            $table->string('judul_pengumuman', 100);
            $table->text('isi_pengumuman');
            $table->date('tanggal_posting');
            $table->integer('author');
            $table->timestamps();
            $table->foreign('author')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengumuman');
    }
}
