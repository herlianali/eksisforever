<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->integer('id_berita')->autoIncrement();
            $table->enum('jenis_berita', ['berita rt', 'berita rw', 'berita kartar']);
            $table->string('judul_berita', 100);
            $table->text('isi_berita');
            $table->date('tanggal_posting');
            $table->string('gambar');
            $table->integer('author');
            $table->enum('status', ['aktif', 'non aktif']);
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
        Schema::dropIfExists('berita');
    }
}
