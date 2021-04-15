<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departamento_id')
            ->references('id')
            ->on('departamentos')
            ->onUpdate('cascade')
            ->ondelete('cascade');

            $table->foreignId('municipio_id')
            ->references('id')
            ->on('municipios')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('servicio_id')
            ->references('id')
            ->on('servicios')
            ->onUpdate('restrict')
            ->onDelete('restrict');

            $table->string('nombre', 45);
            $table->string('asesor', 100);
            $table->date('inicio_servicio');
            $table->date('fin_servicio');
            $table->date('fecha_facturacion');
            $table->boolean('estado');
            $table->string('logo', 255);
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
        Schema::dropIfExists('empresas');
    }
}
