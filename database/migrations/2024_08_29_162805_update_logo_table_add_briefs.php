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
        Schema::table('logo', function (Blueprint $table) {
            $table->text('brief_ar')->nullable()->after('image');
            $table->text('brief_en')->nullable()->after('brief_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('logo', function (Blueprint $table) {
            $table->dropColumn(['brief_ar', 'brief_en']);
        });
    }
};
