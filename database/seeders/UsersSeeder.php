<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'arlos Ferreira',
            'email'=> 'carlos@especializati.ocm.br',
            'password'=> bcrypt('12345678'),
        ]);
    }
}
