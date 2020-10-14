<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('dni', 255);
            $table->string('ape1', 255);
            $table->string('ape2', 255);
            $table->integer('cantidad');
            $table->string('tipoVoluntariado', 255);
            $table->string('email');
            $table->dateTime('fecha');
            $table->string('pais', 255);
            $table->string('procedencia', 255);
            $table->string('nombreProcedencia', 255);
            $table->integer('telefono');
            $table->string('detalle', 255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_volunteers');
    }
}
