<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('empresa_id')
            ->references('id')
            ->on('empresas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('sede_id')
            ->references('id')
            ->on('sedes')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('proceso_id')
            ->references('id')
            ->on('procesos')
            ->onUpate('cascade')
            ->onDelete('cascade');

            $table->string('nombre', 45);
            $table->string('jefe', 100);
            $table->text('subcargos');
            $table->text('rol');
            $table->text('func_cargo');
            $table->text('resp_cargo');
            $table->text('resp_sgi');
            $table->text('autoridad');
            $table->text('rend_ctas');
            $table->string('educacion', 20);
            $table->string('formacion', 20);
            $table->integer('experiencia');
            $table->text('habilidades');
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
        Schema::dropIfExists('cargos');
    }
}
