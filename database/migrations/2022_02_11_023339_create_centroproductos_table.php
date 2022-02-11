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
        Schema::create('centroproductos', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->id();
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_centro');
            $table->unsignedBigInteger('id_producto');
            $table->timestamps();

            $table->foreign('id_centro')->references('id')->on('centros')->onDelete("cascade");
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centroproductos');
    }
};
