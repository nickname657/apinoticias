<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Consulta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cont = [];
        $users = User::where('name', true)->get();

        foreach($users as $usr){
            
        }
    }
}
