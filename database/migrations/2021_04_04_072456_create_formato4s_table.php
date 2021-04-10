<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormato4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formato4s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('formato4_id');
            $table->timestamps();

            $table->foreign('formato4_id')->references('id')->on('formato1s')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formato4s');
    }
}
