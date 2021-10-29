<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('posisi')->nullable();
            $table->bigInteger('jumlah')->nullable();
            $table->text('deskripsi')->nullable();
            $table->bigInteger('perusahaan_id')->nullable();
            $table->string('tgl')->nullable();
            $table->string('tglMulai')->nullable();
            $table->string('tglBerakhir')->nullable();
            $table->string('slug')->nullable();            
            $table->bigInteger('user_id')->nullable();
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
        Schema::dropIfExists('lowongan');
    }
}
