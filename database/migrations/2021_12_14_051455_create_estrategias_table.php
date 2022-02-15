<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstrategiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estrategias', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('eje_id')->unsigned();//Variable para la relacion con la tabla user

            $table->string('name');
            $table->text('description');
            $table->boolean('state')->nullable();
            $table->timestamps();

            $table->foreign('eje_id')->references('id')->on('ejes')->onDelete("cascade");//Atributo de la relacion del atributo id de user con use_id de Estrategias
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estrategias');
    }
}
