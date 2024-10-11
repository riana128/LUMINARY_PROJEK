<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->decimal('price', 10, 2); // Harga produk
            $table->integer('stock'); // Stok produk
            $table->foreignId('category_products_id'); // Foreign key column
            $table->timestamps();

            // Set foreign key constraint
            $table->foreign('category_products_id')
            ->references('id')
            ->on('category_products')
            ->onDelete('cascade');
        });

        
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
