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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->text("shortDescriptions");
            $table->text("longDescriptions");
            $table->tinyInteger("isActive");
            $table->unsignedBigInteger("category_id");//R
            $table->unsignedBigInteger("extradata_id");//R
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('extradata_id')->references('id')->on('extradata')->onDelete('cascade');

            
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
        Schema::dropIfExists('tests');
    }
};
