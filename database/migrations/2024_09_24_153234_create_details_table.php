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
        Schema::create('details', function (Blueprint $table) {
            $table->id('id_detail');
            $table->integer('amount');

            //FK user
            $table->unsignedBigInteger('fk_dish');
            $table->foreign('fk_dish')
                    ->references('id_dish')
                    ->on('dishes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            //FK user
            $table->unsignedBigInteger('fk_order');
            $table->foreign('fk_order')
                    ->references('id_order')
                    ->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
