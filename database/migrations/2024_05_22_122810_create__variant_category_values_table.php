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
        Schema::create('variant_category_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('variant_category_id')->nullable();
            $table->string('name');
            $table->string('variant_value');
            $table->string('color_code')->nullable(true);
            $table->boolean('is_active')->default(1);
            $table->longText('description')->nullable(true);
            $table->timestamps();
        });

        Schema::table('variant_category_values', function($table) {
            $table->foreign('variant_category_id')->references('id')->on('variant_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant_category_values');
    }
};
