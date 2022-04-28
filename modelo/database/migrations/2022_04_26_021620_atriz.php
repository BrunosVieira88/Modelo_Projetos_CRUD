<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Atriz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atrizs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('idade');
            $table->double('peito');
            $table->double('bunda');
            $table->double('rosto');
            $table->string('capa')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atrizs');
    }
}
