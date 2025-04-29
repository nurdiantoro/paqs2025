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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('espay_invoice_id')->nullable()->after('proof_of_payment');
            $table->longText('espay_signature')->nullable()->after('espay_invoice_id');
            $table->string('espay_payment_url')->nullable()->after('espay_signature');
            $table->json('espay_response')->nullable()->after('espay_payment_url');
            $table->string('espay_status')->default('unpaid')->after('espay_response');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('espay_invoice_id');
            $table->dropColumn('espay_signature');
            $table->dropColumn('espay_payment_url');
            $table->dropColumn('espay_response');
            $table->dropColumn('espay_status');
        });
    }
};
