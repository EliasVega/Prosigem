<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('sede_id')
            ->references('id')
            ->on('sedes')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('nombre', 45);
            $table->string('lider');
            $table->text('requisitos');
            $table->text('alcance');
            $table->text('obj_esp');
            $table->text('recursos');
            $table->text('salidas');
            $table->text('estrategias');
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
        Schema::dropIfExists('procesos');
    }
}
