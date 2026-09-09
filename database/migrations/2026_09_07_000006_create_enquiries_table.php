<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable()->constrained('products')->nullOnDelete();
            $table->string('source')->default('contact_form'); // contact_form | quote_form | whatsapp_click
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('company_name')->nullable();
            $table->string('city')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->default('new'); // new | contacted | in_discussion | converted | closed
            $table->timestamps();

            $table->index(['status', 'created_at']);
            $table->index('source');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
