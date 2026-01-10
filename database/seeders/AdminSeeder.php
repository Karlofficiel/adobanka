<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'nom' => 'adobanka',
                'nom_utilisateur' => 'adobanka_admin',
                'email' => 'admin1@adobanka.com',
                'password' => Hash::make('adobanka1234'),
                'is_admin' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'ngounou',
                'nom_utilisateur' => 'ngounou_admin',
                'email' => 'admin2@adobanka.com',
                'password' => Hash::make('ngounou1234'),
                'is_admin' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'karl',
                'nom_utilisateur' => 'karl_admin',
                'email' => 'admin3@adobanka.com',
                'password' => Hash::make('karl1234'),
                'is_admin' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
