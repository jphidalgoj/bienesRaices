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
        Schema::table('propiedads', function (Blueprint $table) {
            // Agregar columna provincia_id como clave foránea
            if (!Schema::hasColumn('propiedads', 'provincia_id')) {  
                $table->foreignId('provincia_id')->nullable()->constrained('provincias');  
            }  
            if (!Schema::hasColumn('propiedads', 'ciudad_id')) {  
                $table->foreignId('ciudad_id')->nullable()->constrained('ciudads');  
            }  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('propiedads', function (Blueprint $table) {
            $table->dropForeign(['provincia_id']);  
        $table->dropForeign(['ciudad_id']);  
        $table->dropColumn(['provincia_id', 'ciudad_id']); 
        });
    }
};
