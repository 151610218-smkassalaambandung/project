<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisbajusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenisbajus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->integer('harga');
            $table->UnsignedInteger('baju_id');
            $table->timestamps();

            $table->foreign('baju_id')->references('id')->on('bajuanaks')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenisbajus');
    }
}
