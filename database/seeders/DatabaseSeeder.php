<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Prestador::factory(10)->create();
        \App\Models\Tomador::factory(10)->create();

        //$user = new User();
        //$user->name = "Messias Martins";
        //$user->email = "messiasmartins@outlook.com";
        //$user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        //$user->save();

        //$prestador = new Prestador();
        //$prestador-> nome;
        //$prestador-> endereco;
        //$prestador-> cnpj;
        //$prestador-> telefone;
        //$prestador-> email
    }
}
