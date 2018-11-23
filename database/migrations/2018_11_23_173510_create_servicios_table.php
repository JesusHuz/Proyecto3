<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('telefono')->nullable();;
            $table->string('internet')->nullable();;
            $table->string('cable')->nullable();;

            $table->integer('ctelefono')->nullable();;
            $table->integer('cinternet')->nullable();;
            $table->string('ccable')->nullable();;

            $table->integer('total');
            $table->unsignedInteger('user_id');

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
        Schema::dropIfExists('servicios');
    }
}
