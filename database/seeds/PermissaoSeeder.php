<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios1 = Permissao::firstOrCreate([
            'nome' => 'usuario-view',
            'descricao' => 'Acesso a lista de usuários'
        ]);

        $usuarios2 = Permissao::firstOrCreate([
            'nome' => 'usuario-create',
            'descricao' => 'Adicionar usuários'
        ]);

        $usuarios3 = Permissao::firstOrCreate([
            'nome' => 'usuario-edit',
            'descricao' => 'Editar usuários'
        ]);

        $usuarios4 = Permissao::firstOrCreate([
            'nome' => 'usuario-delete',
            'descricao' => 'Deletar usuários'
        ]);

        $papeis1 = Permissao::firstOrCreate([
            'nome' => 'papel-view',
            'descricao' => 'Acesso a lista de papéis'
        ]);

        $papeis2 = Permissao::firstOrCreate([
            'nome' => 'papel-create',
            'descricao' => 'Adicionar papéis'
        ]);

        $papeis3 = Permissao::firstOrCreate([
            'nome' => 'papel-edit',
            'descricao' => 'Editar papéis'
        ]);

        $papeis4 = Permissao::firstOrCreate([
            'nome' => 'papel-delete',
            'descricao' => 'Deletar papéis'
        ]);

        $favoritos1 = Permissao::firstOrCreate([
            'nome' => 'favoritos-view',
            'descricao' => 'Acesso aos favoritos'
        ]);

        $perfil1 = Permissao::firstOrCreate([
            'nome' => 'perfil-view',
            'descricao' => 'Acesso ao perfil'
        ]);

        $chamados1 = Permissao::firstOrCreate([
            'nome' => 'chamados-view',
            'descricao' => 'Acesso aos chamados'
        ]);

        $chamados2 = Permissao::firstOrCreate([
            'nome' => 'chamados-create',
            'descricao' => 'Adicionar chamados'
        ]);

        $chamados3 = Permissao::firstOrCreate([
            'nome' => 'chamados-edit',
            'descricao' => 'Editar chamados'
        ]);

        $chamados4 = Permissao::firstOrCreate([
            'nome' => 'chamados-delete',
            'descricao' => 'Deletar chamados'
        ]);

    }
}
