<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoInspeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_inspeccions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cargo_id')
            ->references('id')
            ->on('cargos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('inspeccion_id')
            ->references('id')
            ->on('inspeccions')
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
        Schema::dropIfExists('cargo_inspeccions');
    }
}
