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
            $table->id();
            // $table->uuid('guid');
            $table->string('name');
            $table->bigInteger('product_category_id');
            $table->text('images');
            $table->text('description');
            $table->decimal('price',18,2);
            $table->decimal('item_cost',18,2);
            $table->decimal('mrp',18,2);
            $table->timestamps();
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
