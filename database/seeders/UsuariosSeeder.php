<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'name' => 'Claudio',
                'email' => 'usuario1@gmail.com',
                'username' => "Usuario1",
                'password' => "adm123",
                'admin' => true
            ]
        ]);
    }
}
