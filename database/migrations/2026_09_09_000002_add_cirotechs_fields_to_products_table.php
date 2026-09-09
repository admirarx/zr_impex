<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->json('key_features')->nullable()->after('description');
            $table->json('applications')->nullable()->after('key_features');
            $table->json('benefits')->nullable()->after('applications');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['key_features', 'applications', 'benefits']);
        });
    }
};
