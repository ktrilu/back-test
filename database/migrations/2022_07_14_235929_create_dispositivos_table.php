<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->id('DSP_ID');
            $table->string('DSP_NOMBRE');

            $table->bigInteger('BDG_ID')->unsigned();
            $table->foreign('BDG_ID')->references('BDG_ID')->on('bodegas');

            $table->bigInteger('MDL_ID')->unsigned();
            $table->foreign('MDL_ID')->references('MDL_ID')->on('modelos');

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
        Schema::dropIfExists('dispositivos');
    }
};
