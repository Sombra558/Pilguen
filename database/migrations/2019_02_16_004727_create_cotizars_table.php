<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad')->unsigned();
            $table->integer('medida')->unsigned();
            $table->timestamps();
        });
        Schema::table('cotizars', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('cotizars', function (Blueprint $table) {
            $table->integer('producto_id')->unsigned()->default(1);
            $table->foreign('producto_id')->references('id')->on('productos');
        });
        Schema::table('cotizars', function (Blueprint $table) {
            $table->integer('carrito_id')->unsigned()->default(1);
            $table->foreign('carrito_id')->references('id')->on('carritos');
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizars');
        Schema::table('cotizars', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
			$table->dropForeign(['producto_id']);
            $table->dropColumn('producto_id');
            $table->dropForeign(['carrito_id']);
            $table->dropColumn('carrito_id');
        });
    }
}
