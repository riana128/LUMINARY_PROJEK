<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama kategori
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_products');
    }
};
