<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Statusdosistemas;

class CreateStatusdosistemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [
               'versao'=>1,
               'descricao'=>"Temos novidade bb!  Atualize o App e descubra!",
               'tipo'=>"alta",
               'link'=>"",
            ],
        ];
  
        foreach ($status as $key => $value) {
            Statusdosistemas::create($value);
        }
    }
}
