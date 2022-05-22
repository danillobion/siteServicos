<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cidade;

class CreateCidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'nome'=>"Garanhuns",
               'uf'=>"PE",
            ],
        ];
  
        foreach ($user as $key => $value) {
            Cidade::create($value);
        }
    }
}
