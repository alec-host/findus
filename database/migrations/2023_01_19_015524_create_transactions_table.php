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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('txn_ref');
            $table->enum('txn_type', ['pet_registration', 'pet_transfer'])->default('pet_registration');
            $table->bigInteger('total_amount_paid');
            $table->string('payment_method');
            $table->string('payment_ref');
            $table->string('payment_status');
            $table->string('payment_type');
            $table->string('invoice_no')->nullable();
            $table->string('receipt_no')->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
