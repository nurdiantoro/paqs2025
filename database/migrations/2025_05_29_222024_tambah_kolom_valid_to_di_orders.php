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
            $table->timestamp('valid_to')->nullable()->after('payment_method');
            $table->string('va_number')->nullable()->after('valid_to');
            $table->unsignedInteger('admin_fee')->nullable()->after('va_number');
            $table->unsignedInteger('total_amount')->nullable()->after('admin_fee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('valid_to');
            $table->dropColumn('va_number');
            $table->dropColumn('admin_fee');
            $table->dropColumn('total_amount');
        });
    }
};
