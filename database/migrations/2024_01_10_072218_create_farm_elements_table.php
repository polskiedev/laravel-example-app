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
        Schema::create('farm_elements', function (Blueprint $table) {
            $table->id();
            $table->string('element_name')->unique()->required();
            $table->foreignId('type_id')->constrained('farm_element_types', 'id');
            $table->string('variant')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm_elements');
        
    }
};
