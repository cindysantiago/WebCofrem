<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeEstadoTableTarjetaServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tarjeta_servicios', function (Blueprint $table) {
            $table->dropColumn('estado');
        });
        Schema::table('tarjeta_servicios', function (Blueprint $table) {
            $table->enum('estado',['A','I','N'])->default('I');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tarjeta_servicios', function (Blueprint $table) {
            $table->dropColumn('estado');
        });
        Schema::table('tarjeta_servicios', function (Blueprint $table) {
            $table->enum('estado',['A','I','N'])->default('I');
        });
    }
}
