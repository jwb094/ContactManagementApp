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

            // $table->foreignId('user_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->string('first_name');
            $table->string('last_name')->nullable();

            $table->string('email')->nullable()->index();
            $table->string('phone', 30)->nullable()->index();

            $table->date('birthday')->nullable();

            $table->string('address')->nullable();
            $table->string('city')->nullable()->index();
            $table->string('state')->nullable();
            $table->string('country')->nullable()->index();

            $table->boolean('is_favorite')->default(false);

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
