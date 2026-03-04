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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            // Creator / Owner
            $table->foreignId('creator_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // Basic Info
            $table->string('title')->nullable(); // Mr, Mrs, Dr, etc.
            $table->string('first_name');
            $table->string('last_name');

            $table->string('email')->nullable()->index();
            $table->string('phone', 20)->nullable()->index(); // UK numbers up to 15 digits (E.164)

            // Professional Info
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable()->index();

            // Social Media Handle 
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable()->index();
            $table->string('linkedin')->nullable()->index();

            // UK Address Structure
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('town_city')->nullable()->index();
            $table->string('county')->nullable(); // UK uses county not state
            $table->string('posstcode', 8)->nullable()->index(); // UK postcode max 8 incl space
            $table->string('country')->default('United Kingdom');

            // Personal Info
            $table->date('date_of_birth')->nullable();
            $table->boolean('is_favourite')->default(false);

            // CRM Fields
            $table->timestamp('last_contacted_at')->nullable();
            $table->string('profile_photo')->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['first_name', 'last_name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
