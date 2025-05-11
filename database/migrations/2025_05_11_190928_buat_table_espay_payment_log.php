<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('espay_payment', function (Blueprint $table) {
            $table->id();
            $table->uuid('rq_uuid')->nullable();
            $table->string('rq_datetime')->nullable();
            $table->string('password')->nullable();
            $table->string('signature')->nullable();
            $table->string('member_id')->nullable();
            $table->string('comm_code')->nullable();
            $table->string('order_id')->nullable();
            $table->string('ccy', 10)->default('IDR')->nullable();
            $table->decimal('amount', 15, 2)->nullable();
            $table->string('debit_from_bank', 10)->nullable();
            $table->string('debit_from')->nullable();
            $table->string('debit_from_name')->nullable();
            $table->string('credit_to_bank', 10)->nullable();
            $table->string('credit_to')->nullable();
            $table->string('credit_to_name')->nullable();
            $table->string('product_code')->nullable();
            $table->text('message')->nullable()->nullable();
            $table->string('payment_datetime')->nullable();
            $table->string('payment_ref')->nullable();
            $table->string('approval_code_full_bca')->nullable();
            $table->string('approval_code_installment_bca')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espay_payment');
    }
};
