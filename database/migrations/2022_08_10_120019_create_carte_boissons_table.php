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
        Schema::create('carte_alcools', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('ingredient');
            $table->integer('cl');
            $table->integer('ordre');
            $table->integer('prix');
            $table->integer('prix2');
            $table->boolean('active');
            $table->enum('biere', ['pression', 'bouteille']);
            $table->enum('section', ['signature','biere','champagne','spiritueux','gin']);
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
        Schema::dropIfExists('carte_alcools');
    }
};
