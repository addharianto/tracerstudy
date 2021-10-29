<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSikonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sikon', function (Blueprint $table) {
            $table->id();
            $table->string('f9_01')->nullable();
            $table->string('f9_02')->nullable();
            $table->string('f9_03')->nullable();
            $table->string('f9_04')->nullable();
            $table->string('f9_05')->nullable();
            $table->string('f9_06')->nullable();
            $table->string('f10_01')->nullable();
            $table->string('f10_01_lainnya')->nullable();
            $table->string('f11_01')->nullable();
            $table->string('f11_01_lainnya')->nullable();  
            
            $table->string('f16')->nullable();
            $table->string('f16_01')->nullable();
            $table->string('f16_02')->nullable();
            $table->string('f16_03')->nullable();
            $table->string('f16_04')->nullable();
            $table->string('f16_05')->nullable();
            $table->string('f16_06')->nullable();
            $table->string('f16_07')->nullable();
            $table->string('f16_08')->nullable();
            $table->string('f16_09')->nullable();
            $table->string('f16_10')->nullable();
            $table->string('f16_11')->nullable();
            $table->string('f16_12')->nullable();
            $table->string('f16_13')->nullable();
            $table->string('f16_14')->nullable();
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
        Schema::dropIfExists('sikon');
    }
}
