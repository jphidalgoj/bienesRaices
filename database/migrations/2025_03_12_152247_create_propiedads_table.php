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
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->string('title');  
            $table->text('description');  
            $table->decimal('price', 12, 2);    
            $table->string('province');
            $table->string('city'); 
            $table->string('address'); 
            $table->string('zip_code')->nullable(); //codifo postal
            $table->integer('bedrooms');  
            $table->integer('bathrooms');  
            $table->integer('garage')->nullable();  
            $table->decimal('square_feet', 8, 2);  //metros cuadrados
            $table->boolean('publicado')->default(false); 
            $table->enum('operation_type', ['venta', 'alquiler']);  
            $table->boolean('featured')->default(false);  
            $table->decimal('latitude', 10, 8)->nullable();  
            $table->decimal('longitude', 11, 8)->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedads');
    }
};
