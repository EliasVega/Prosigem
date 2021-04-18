<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoConvocatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_convocatorias', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cargo_id')
            ->references('id')
            ->on('cargos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('convocatoria_id')
            ->references('id')
            ->on('convocatorias')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('cargo_convocatorias');
    }
}
