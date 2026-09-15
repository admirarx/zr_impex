<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('certificate_path')->nullable()->after('brochure_path');
            $table->text('manual_path')->nullable()->after('certificate_path');
        });

        Schema::table('product_images', function (Blueprint $table) {
            $table->string('caption')->nullable()->after('alt_text');
            $table->string('material')->nullable()->after('caption');
            $table->boolean('is_sample')->default(false)->after('is_primary');
            $table->index(['product_id', 'is_sample', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::table('product_images', function (Blueprint $table) {
            $table->dropIndex(['product_id', 'is_sample', 'sort_order']);
            $table->dropColumn(['caption', 'material', 'is_sample']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['certificate_path', 'manual_path']);
        });
    }
};
