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
        // Update the existing contacts table
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('address_ar')->after('id'); // Add Arabic address
            $table->string('address_en')->after('address_ar'); // Add English address
            $table->string('address_link')->nullable()->after('address_en'); // Add optional address link
            $table->string('phone')->after('whatsapp'); // Add phone number
        });

        // Create the new contact_responses table
        Schema::create('contact_responses', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the person submitting the form
            $table->string('phone'); // Phone number of the person
            $table->string('email'); // Email address of the person
            $table->text('message'); // Message from the person
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the contact_responses table first
        Schema::dropIfExists('contact_responses');

        // Remove the added columns from the contacts table
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['address_ar', 'address_en', 'address_link', 'phone']);
        });
    }
};

