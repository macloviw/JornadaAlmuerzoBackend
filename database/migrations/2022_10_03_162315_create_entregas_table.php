<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->increments('IdEntrega');
            $table->string("Nombre")->nullable(false);
            $table->string("Apellidos")->nullable(false);
            $table->string("Telefono");
            $table->string("CorreoElectronico")->nullable(false);
            $table->integer("Edad")->nullable(false);
            $table->text("Direccion");
            $table->boolean("ComidaEntregada")->nullable(false);
            $table->text("Observacion");
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
        Schema::dropIfExists('entregas');
    }
}
