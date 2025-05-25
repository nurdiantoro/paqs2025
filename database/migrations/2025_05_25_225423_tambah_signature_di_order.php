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
            $table->longText('x_signature')->nullable()->after('proof_of_payment');
            $table->string('x_timestamp')->nullable()->after('x_signature');
            $table->longText('additionalInfo')->nullable()->after('x_timestamp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('x_signature');
            $table->dropColumn('x_timestamp');
            $table->dropColumn('additionalInfo');
        });
    }
};
