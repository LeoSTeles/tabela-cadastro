<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\ModelRaca;

class RacasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelRaca::create([
        	'id_raca' => '1',
        	'nome_raca' => 'Rottweiller',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);

        ModelRaca::create([
        	'id_raca' => '2',
        	'nome_raca' => 'Poodle',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '3',
        	'nome_raca' => 'Labrador',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '4',
        	'nome_raca' => 'Akita',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '5',
        	'nome_raca' => 'Basset',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '6',
        	'nome_raca' => 'Beagle',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '7',
        	'nome_raca' => 'Bichon',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '8',
        	'nome_raca' => 'Terrier',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '9',
        	'nome_raca' => 'Boxer',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '10',
        	'nome_raca' => 'Buldogue Francês',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '11',
        	'nome_raca' => 'Buldogue Inglês',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '12',
        	'nome_raca' => 'Bull Terrier',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '13',
        	'nome_raca' => 'Chihuahua',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '14',
        	'nome_raca' => 'Chow Chow',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '15',
        	'nome_raca' => 'Dachshund',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '16',
        	'nome_raca' => 'Dálmata',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '17',
        	'nome_raca' => 'Doberman',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '18',
        	'nome_raca' => 'Dogue Alemão',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '19',
        	'nome_raca' => 'Fila',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '20',
        	'nome_raca' => 'Golden Retriever',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '21',
        	'nome_raca' => 'Husky Siberiano',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '22',
        	'nome_raca' => 'Maltês',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '23',
        	'nome_raca' => 'Pastor Alemão',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '24',
        	'nome_raca' => 'Pequinês',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
        ModelRaca::create([
        	'id_raca' => '25',
        	'nome_raca' => 'Pinscher',
        	'created_at' => now(),
        	'updated_at' => '2021-11-04',
        ]);
    }
}
