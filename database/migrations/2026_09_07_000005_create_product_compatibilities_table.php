<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_compatibilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('machine_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('spare_part_id')->constrained('products')->cascadeOnDelete();
            $table->string('notes')->nullable();
            $table->timestamps();

            $table->unique(['machine_id', 'spare_part_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_compatibilities');
    }
};
