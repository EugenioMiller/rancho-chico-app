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
            $table->id('id_order');

            //FK user
            $table->unsignedBigInteger('fk_user');
            $table->foreign('fk_user')
                    ->references('id_user')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


            //FK table
            $table->unsignedBigInteger('fk_table');
            $table->foreign('fk_table')
                    ->references('id_table')
                    ->on('tables')
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
        Schema::dropIfExists('orders');
    }
};
