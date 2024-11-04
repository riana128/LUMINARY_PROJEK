<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBuyersTable extends Migration
{
    public function up()
    {
        Schema::create('data_buyers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama
            $table->string('email')->unique(); // Email, harus unik
            $table->string('telepon');
            $table->enum('jenis_kelamin', ['Perempuan', 'Lelaki']);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_buyers');
    }
}
