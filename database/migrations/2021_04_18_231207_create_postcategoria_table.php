<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcategoria', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_post')->unsigned();
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_post')->references('id')->on('post')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('cascade');
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
        Schema::dropIfExists('postcategoria');
    }
}
