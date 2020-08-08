<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comentarios', function (Blueprint $table) {
           
           $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('usuario');
            $table->string('comentario');
          
         $table->unsignedBigInteger('produto_id');
         $table->foreign('produto_id')->references('id')->on('produtos');
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
        Schema::dropIfExists('comentarios');
    }
}
