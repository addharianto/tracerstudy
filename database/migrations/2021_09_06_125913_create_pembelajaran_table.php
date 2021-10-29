<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('f2_01')->nullable();
            $table->string('f2_02')->nullable();
            $table->string('f2_03')->nullable();
            $table->string('f2_04')->nullable();
            $table->string('f2_05')->nullable();
            $table->string('f2_06')->nullable();
            $table->string('f2_07')->nullable();
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
        Schema::dropIfExists('pembelajaran');
    }
}
