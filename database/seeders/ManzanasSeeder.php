<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\perros;

class MascotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       //se define el numero de registros que se van a generar
            $numRegistros=20;
            // se define razas de relleno
            $tipo = ['Roja', 'Verde', 'Azul', 'Amarilla', 'Podrida'];

            //un for para generar el numero de registros definidos
            for ($i = 1; $i <= $numRegistros; $i++) {
                perros::create([
                    //se escoge un tipo de manzana  aleatoriamente de las definidas
                    'tipoManzana' => $tipo[rand(0,count($tipo)-1)],
                    //se genera una precio aleatoria de 1 a 12
                    'precioKilo' => rand(1,12),
                ]);
            }
    }
}
