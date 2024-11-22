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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->foreignId('agent_id')->constrained();
            $table->integer('price');
            $table->string('address');
            $table->string('country');
            $table->string('beds');
            $table->string('baths');
            $table->text('description');
            $table->boolean('is_popular');
            $table->boolean('is_featured');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
