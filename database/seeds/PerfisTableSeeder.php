<?php

use Illuminate\Database\Seeder;
use App\Models\Perfil;

class PerfisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfis')->insert([
            'id' => '1',
            'nome' => 'Administrador',
            'descricao' => 'Perfil administradores HUMAN DONATION',
        ]);

        DB::table('perfis')->insert([
            'id' => '2',
            'nome' => 'Doador',
            'descricao' => 'Perfil para doadores.',
        ]);
    
        DB::table('perfis')->insert([
            'id' => '3',
            'nome' => 'Instituição',
            'descricao' => 'Perfil para instituições, solicitantes de doações.',
        ]);
    }
}
