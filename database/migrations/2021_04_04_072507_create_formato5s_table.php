<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormato5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formato5s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('formato5_id');
            $table->timestamps();

            $table->foreign('formato5_id')->references('id')->on('formato1s')
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
        Schema::dropIfExists('formato5s');
    }
}
