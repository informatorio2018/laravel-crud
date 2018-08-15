<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categoria');
            $table->timestamps();
        });


        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codArt');
            $table->string('producto');
            $table->string('descripcion');
            $table->text('foto')->nullable();
            
            $table->unsignedInteger('categoria_id');
     
            $table->timestamps();


            $table->foreign('categoria_id')->references('id')->on('categorias');
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
}
