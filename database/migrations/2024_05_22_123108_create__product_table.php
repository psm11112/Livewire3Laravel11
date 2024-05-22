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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->string('name');
            $table->string('sku')->unique();
            $table->text('meta_tag_keywords')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('model')->nullable();
            $table->integer('available_stock')->default(0);
            $table->longText('seo_keywords')->nullable();
            $table->boolean('free_shipping')->default(0);
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->enum('length_class', [null, 'centimeter', 'millimeter', '’inch’'])->default(null);
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->enum('weight_class', [null, 'kilogram', 'gram', 'pound', 'ounce'])->nullable();
            $table->decimal('original_price', 8, 2);
            $table->longText('description')->nullable();
            $table->longText('details')->nullable();
            $table->float('discount_price')->nullable();
            $table->float('vat')->nullable();
            $table->integer('day_of_return')->nullable();
            $table->boolean('is_active')->default(1);
            $table->index(['name', 'sku', 'model']);
            $table->timestamps();
        });

        Schema::table('products', function ($table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
        Schema::table('products', function ($table) {
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
        });
        Schema::table('products', function ($table) {
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
