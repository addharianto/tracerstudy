<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWajibTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wajib', function (Blueprint $table) {
            $table->id();
            $table->string('f5_01')->nullable();
            $table->string('f5_02')->nullable();
            $table->string('f5_03')->nullable();
            $table->string('f8')->nullable();
            $table->string('f14')->nullable();
            $table->string('f15')->nullable();
            $table->string('f13_01')->nullable();
            $table->string('f13_02')->nullable();
            $table->string('f13_03')->nullable();
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
        Schema::dropIfExists('wajib');
    }
}
