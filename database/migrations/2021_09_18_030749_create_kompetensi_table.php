<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKompetensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensi', function (Blueprint $table) {
            $table->id();
            $table->string('f17a')->nullable();
            $table->string('f17a_1')->nullable();
            $table->string('f17a_3')->nullable();
            $table->string('f17a_5')->nullable();
            $table->string('f17a_5a')->nullable();
            $table->string('f17a_7')->nullable();
            $table->string('f17a_9')->nullable();
            $table->string('f17a_11')->nullable();
            $table->string('f17a_13')->nullable();
            $table->string('f17a_15')->nullable();
            $table->string('f17a_17')->nullable();
            $table->string('f17a_19')->nullable();
            $table->string('f17a_21')->nullable();
            $table->string('f17a_23')->nullable();
            $table->string('f17a_25')->nullable();
            $table->string('f17a_27')->nullable();
            $table->string('f17a_29')->nullable();
            $table->string('f17a_31')->nullable();
            $table->string('f17a_33')->nullable();
            $table->string('f17a_35')->nullable();
            $table->string('f17b')->nullable();
            $table->string('f17b_2b')->nullable();
            $table->string('f17b_4b')->nullable();
            $table->string('f17b_6b')->nullable();
            $table->string('f17b_6ba')->nullable();
            $table->string('f17b_8b')->nullable();
            $table->string('f17b_10b')->nullable();
            $table->string('f17b_12b')->nullable();
            $table->string('f17b_14b')->nullable();
            $table->string('f17b_16b')->nullable();
            $table->string('f17b_18b')->nullable();
            $table->string('f17b_20b')->nullable();
            $table->string('f17b_22b')->nullable();
            $table->string('f17b_24b')->nullable();
            $table->string('f17b_26b')->nullable();
            $table->string('f17b_28b')->nullable();
            $table->string('f17b_30b')->nullable();
            $table->string('f17b_32b')->nullable();
            $table->string('f17b_34b')->nullable();
            $table->string('f17b_36b')->nullable();
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
        Schema::dropIfExists('kompetensi');
    }
}
