<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsReading extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_reading', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('std_id')->unsigned();
            $table->foreign('std_id')->references('std_id')->on('student')->onDelete('cascade');
            $table->text('browser');
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
        Schema::dropIfExists('logs_reading');
    }
}
