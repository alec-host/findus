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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->enum('user_type', ['clinic', 'individual'])->default('individual');
            $table->string('reg_no')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('otp_code');
            $table->boolean('otp_verified')->default(false);
            $table->boolean('is_active')->default(false);
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('county');
            $table->string('town')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('clients');
    }
};
