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
        Schema::table('abouts', function (Blueprint $table) {
            // Add new columns for Arabic and English titles
            $table->string('title_ar')->after('title');
            $table->string('title_en')->after('title_ar');

            // Add new columns for Arabic and English descriptions
            $table->text('description1_ar')->after('text');
            $table->text('description1_en')->after('description1_ar');

            // Add an optional second description
            $table->text('description2_ar')->nullable()->after('description1_en');
            $table->text('description2_en')->nullable()->after('description2_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            // Drop the columns if rolling back
            $table->dropColumn(['title_ar', 'title_en', 'description1_ar', 'description1_en', 'description2_ar', 'description2_en']);
        });
    }
};
