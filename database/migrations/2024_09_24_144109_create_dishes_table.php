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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id('id_dish');
            $table->string('name');
            $table->integer('price');

            //FK category
            $table->unsignedBigInteger('fk_category');
            $table->foreign('fk_category')
                    ->references('id_category')
                    ->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            //FK type
            $table->unsignedBigInteger('fk_type');
            $table->foreign('fk_type')
                    ->references('id_type')
                    ->on('types')
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
        Schema::dropIfExists('dishes');
    }
};
