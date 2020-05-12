<?php

use Illuminate\Database\Seeder;

use App\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate([
            'name' => 'Ver logs de todos os usuários'
        ]);

        Permission::firstOrCreate([
            'name' => 'Ver telefones'
        ]);

        Permission::firstOrCreate([
            'name' => 'Editar/deletar telefones'
        ]);
    }
}
