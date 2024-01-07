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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->integer('id_user');
            $table->integer('id_produk');
            $table->integer('jumlah');
            $table->boolean('status')->default(false);
            $table->decimal('totalharga',10,2);
            $table->string('foto');
            $table->timestamps();

            $table->foreign('id_user')
                  ->references('id_user')->on('pelanggans')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->foreign('id_produk')
                  ->references('id_produk')->on('produks')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
