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
        Schema::create('farm_element_types', function (Blueprint $table) {
            $table->id();
            $table->string('element_type_name')->unique();
            $table->timestamps();
        });

        // Add initial data
        DB::table('farm_element_types')->insert([
            ['element_type_name' => 'Plant'],
            ['element_type_name' => 'Animal'],
            ['element_type_name' => 'Insect'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm_element_types');
    }
};
