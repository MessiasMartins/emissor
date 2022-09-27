<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('prestador_id')->constrained();
            $table->foreignId('tomador_id')->constrained();
            $table->string('numero',14);
            $table->string('valor');
            $table->string('tomador');
            $table->string('prestador');
            $table->string('email_prestador');
            $table->string('email_tomador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
