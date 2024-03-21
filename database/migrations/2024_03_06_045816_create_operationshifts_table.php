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
        Schema::create('operationshifts', function (Blueprint $table) {
            $table->id();
            $table->string('IT Agents');
            $table->enum('Shift', ['11.00 - 19.00', '07.00 - 15.00'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operationshifts');
    }
};
