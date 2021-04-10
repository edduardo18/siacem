<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormato2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formato2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('formato2_id');
            $table->timestamps();

            $table->foreign('formato2_id')->references('folio')->on('formato1s')
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
        Schema::dropIfExists('formato2s');
    }
}
