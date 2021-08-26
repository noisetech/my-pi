<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->foreignId('mata_kuliah_id');
            $table->foreignId('dosen_id');
            $table->foreignId('hari_id');
            $table->foreignId('tahun_id');
            $table->time('jam_mulai');
            $table->time('jam_selsai');
            $table->integer('ketersediaan');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');


            $table->foreign('mata_kuliah_id')->references('id')->on('mata_kuliah')
            ->onUpdate('cascade')
            ->onDelete('cascade');


            $table->foreign('hari_id')->references('id')->on('hari')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('tahun_id')->references('id')->on('tahun')
            ->onUpdate('cascade')
            ->onDelete('cascade');


            $table->foreign('dosen_id')->references('id')->on('dosen')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs');
    }
}
