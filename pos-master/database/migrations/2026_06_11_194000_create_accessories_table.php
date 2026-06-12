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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            // Vincula com o ID do produto base
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            
            // Especificidades do POS-Master
            $table->string('compatibility');
            $table->string('color');
            $table->string('material');
            $table->boolean('has_extended_warranty')->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
