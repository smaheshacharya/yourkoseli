<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug');
            $table->boolean('features')->default(false);
            $table->text('description');
            $table->string('sku')->unique();
            $table->decimal('price',8,3);
            $table->decimal('regular_price',8,3);
            $table->decimal('sale_price',8,3);
            $table->bigIncrements('total_sale')->nullable();
            $table->bigIncrements('stock_quantity');
            $table->enum('stock_status',['instock','outofstock','onbackorder'])->default('instock');
            $table->boolean('review_allows')->default(true);
            $table->integer('rating_count')->default(0);
            $table->integer('related_ids')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('purchase_notes');
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
