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
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->unsignedInteger('id_order');
            $table->decimal('totalsetelah',10,2);
            $table->enum('metode',['CASH','ATM','DEBIT'])->default('CASH');
            $table->boolean('status')->default(false);
            $table->string('id_diskon')->nullable();
            $table->integer('id_staff');
            $table->timestamps();

            $table->foreign('id_order')
                  ->references('id_order')->on('orders')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->foreign('id_diskon')
                  ->references('id_diskon')->on('diskons')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->foreign('id_staff')
                  ->references('id_staff')->on('staff')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksis');
    }
};
