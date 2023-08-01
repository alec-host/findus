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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->integer('owner_id');
            $table->string('name');
            $table->string('photo')->nullable;
            $table->string('microchip_no');
            $table->string('coat_color');
            $table->string('age');
            $table->string('species');
            $table->string('breed');
            $table->string('clinic_registered');
            $table->string('gender');
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
        Schema::dropIfExists('pets');
    }
};
