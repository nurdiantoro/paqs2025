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
        Schema::table('activity_programs', function (Blueprint $table) {
            $table->longText('image')->nullable()->change();
            $table->longText('video')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activity_programs', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
            $table->string('video')->nullable()->change();
        });
    }
};
