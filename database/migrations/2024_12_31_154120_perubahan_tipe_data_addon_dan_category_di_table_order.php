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
            // $table->dropColumn('category_id');

            $table->unsignedBigInteger('category_id')->nullable()->after('email');
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');

            $table->unsignedBigInteger('addon_id')->nullable()->after('category_id');
            $table->foreign('addon_id')
                ->references('id')->on('addons')
                ->onDelete('cascade');
            // $table->foreign('addon_id')->references('id')->on('addons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');

            $table->dropForeign(['addon_id']);
            $table->dropColumn('addon_id');
        });
    }
};
