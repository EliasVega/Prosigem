<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departamento_id')
                ->references('id')
                ->on('departamentos')
                ->onUpdate('restrict')
                ->onDelete('restrict');

            $table->foreignId('municipio_id')
                ->references('id')
                ->on('municipios')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('empresa_id')
                ->references('id')
                ->on('empresas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('actividadEconomica_id')
                ->references('id')
                ->on('actividad_economicas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('arl_id')
                ->references('id')
                ->on('arls')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('nombre', 50);
            $table->string('nit', 20)->unique();
            $table->string('direccion', 50);
            $table->string('telefono', 15);
            $table->string('celular', 15);
            $table->integer('nivel_riesgo');
            $table->string('gerente', 50);
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
        Schema::dropIfExists('sedes');
    }
}
