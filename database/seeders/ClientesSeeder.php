<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'Euclide Marques',
                'email' => 'euclides@gmail.com',
                'endereco' => 'Alfredo Pauletti',
                'logradouro' => 'casa',
                'cep' => '17132216',
                'bairro' => 'Vienense',
            ]
        );

        Cliente::create(
            [
                'nome' => 'Teste Marques',
                'email' => 'euclides@gmail.com',
                'endereco' => 'Alfredo Pauletti',
                'logradouro' => 'casa',
                'cep' => '17132216',
                'bairro' => 'Vienense',
            ]
        );
    }
}
