<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->string('f3_01')->nullable();
            $table->string('f3_02')->nullable();
            $table->string('f3_03')->nullable();
            $table->string('f4_01')->nullable();
            $table->string('f4_02')->nullable();
            $table->string('f4_03')->nullable();
            $table->string('f4_04')->nullable();
            $table->string('f4_05')->nullable();
            $table->string('f4_06')->nullable();
            $table->string('f4_07')->nullable();
            $table->string('f4_08')->nullable();
            $table->string('f4_09')->nullable();
            $table->string('f4_10')->nullable();
            $table->string('f4_11')->nullable();
            $table->string('f4_12')->nullable();
            $table->string('f4_13')->nullable();
            $table->string('f4_14')->nullable();
            $table->string('f4_15')->nullable();
            $table->string('f4_16')->nullable();
            $table->string('f6')->nullable();
            $table->string('f7')->nullable();
            $table->string('f8')->nullable();
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
        Schema::dropIfExists('pekerjaan');
    }
}
