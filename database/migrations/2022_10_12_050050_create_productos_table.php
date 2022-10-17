<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('autor');
            $table->string('editorial');
            $table->string('ano_de_publicacion');
            $table->string('mes_de_publicacion')->nullable();
            $table->string('tipo_de_publicacion')->nullable();
            $table->string('pais')->nullable();
            $table->integer('paginas')->unsigned();
            $table->text('descripcion')->nullable();
            $table->decimal('precio')->unsigned();
            $table->integer('stock')->default(0)->unsigned();
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
        Schema::dropIfExists('productos');
    }
};
