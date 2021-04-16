<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposAtUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function(Blueprint $table){
            $table->foreignId('role_id')
            ->references('id')
            ->on('roles')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('cargo_id')
            ->references('id')
            ->on('cargos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('proceso_id')
            ->references('id')
            ->on('procesos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('sede_id')
            ->references('id')
            ->on('sedes')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('empresa_id')
            ->references('id')
            ->on('empresas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
