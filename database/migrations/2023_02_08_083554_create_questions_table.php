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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->text("descriptions");
            $table->unsignedBigInteger("test_id");//R
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');

            $table->unsignedBigInteger("indicator_id");//R
            $table->foreign('indicator_id')->references('id')->on('indicators')->onDelete('cascade');

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
        Schema::dropIfExists('questions');
    }
};
