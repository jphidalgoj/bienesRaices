<?php

namespace Database\Seeders;

use App\Models\Cuidad;
use App\Models\Provincia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EcuadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provincias = [  
            'Azuay' => ['Cuenca', 'Gualaceo', 'Paute'],  
            'Bolívar' => ['Guaranda', 'Chimbo', 'San Miguel'],  
            'Cañar' => ['Azogues', 'Biblián', 'La Troncal'],  
            'Carchi' => ['Tulcán', 'Montúfar', 'Espejo'],  
            'Chimborazo' => ['Riobamba', 'Alausí', 'Guano'],  
            'Cotopaxi' => ['Latacunga', 'La Maná', 'Salcedo'],  
            'El Oro' => ['Machala', 'Pasaje', 'Santa Rosa'],  
            'Esmeraldas' => ['Esmeraldas', 'Quinindé', 'San Lorenzo'],  
            'Galápagos' => ['Puerto Baquerizo Moreno', 'Puerto Ayora', 'Puerto Villamil'],  
            'Guayas' => ['Guayaquil', 'Durán', 'Milagro'],  
            'Imbabura' => ['Ibarra', 'Otavalo', 'Cotacachi', 'Pimampiro', 'San Miguel de Urcuquí','Antonio Ante'],  
            'Loja' => ['Loja', 'Catamayo', 'Macará'],  
            'Los Ríos' => ['Babahoyo', 'Quevedo', 'Ventanas'],  
            'Manabí' => ['Portoviejo', 'Manta', 'Chone'],  
            'Morona Santiago' => ['Macas', 'Sucúa', 'Gualaquiza'],  
            'Napo' => ['Tena', 'Archidona', 'El Chaco'],  
            'Orellana' => ['Francisco de Orellana', 'La Joya de los Sachas', 'Loreto'],  
            'Pastaza' => ['Puyo', 'Mera', 'Santa Clara'],  
            'Pichincha' => ['Quito', 'Cayambe', 'Mejía'],  
            'Santa Elena' => ['Santa Elena', 'La Libertad', 'Salinas'],  
            'Santo Domingo de los Tsáchilas' => ['Santo Domingo'],  
            'Sucumbíos' => ['Nueva Loja', 'Shushufindi', 'Cascales'],  
            'Tungurahua' => ['Ambato', 'Baños', 'Pelileo'],  
            'Zamora Chinchipe' => ['Zamora', 'Yantzaza', 'Centinela del Cóndor'],  
        ];  

        foreach ($provincias as $nombreProvincia => $ciudades) {  
            $provincia = Provincia::create(['nombre' => $nombreProvincia]);  
            
            foreach ($ciudades as $nombreCiudad) {  
                Cuidad::create([  
                    'provincia_id' => $provincia->id,  
                    'nombre' => $nombreCiudad  
                ]);  
            }  
        }  
    }
}
