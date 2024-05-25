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
        Schema::create('carte_vins', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->enum('section' , ['rouge','blanc','rosé','champagne']);
            $table->string('détail');
            $table->integer('prix');
            $table->boolean('active')->default(1);
            $table->integer('ordre');
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
        Schema::dropIfExists('carte_vins');
    }
};
