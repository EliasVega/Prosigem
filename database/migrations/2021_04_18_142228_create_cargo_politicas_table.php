<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoPoliticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_politicas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cargo_id')
            ->references('id')
            ->on('cargos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('politica_id')
            ->references('id')
            ->on('politicas')
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
        Schema::dropIfExists('cargo_politicas');
    }
}
