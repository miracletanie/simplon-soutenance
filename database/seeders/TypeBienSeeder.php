<?php

namespace Database\Seeders;

use App\Models\TypeBien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeBienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeBien::create([
            'name'=> 'Appartement'
        ]);
        TypeBien::create([
            'name'=> 'Maison'
        ]);
        TypeBien::create([
            'name'=> 'Villa'
        ]);


    }
}
