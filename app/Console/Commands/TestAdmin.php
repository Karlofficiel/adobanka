<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class TestAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Teste les mots de passe des admins présents dans la base de données';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $admins = Admin::all();

        if ($admins->isEmpty()) {
            $this->error('Aucun admin trouvé dans la base de données.');
            return;
        }

        foreach ($admins as $admin) {
            // Ici, on met le mot de passe que tu sais être celui du seeder
            // Si tu veux tester chaque admin séparément, tu peux adapter
            $passwords = [
                'adobanka_admin' => 'adobanka1234',
                'ngounou_admin'  => 'ngounou1234',
                'karl_admin'    => 'karl1234',
            ];

            $expectedPassword = $passwords[$admin->nom_utilisateur] ?? null;

            if (!$expectedPassword) {
                $this->warn("Aucun mot de passe de test défini pour {$admin->nom_utilisateur}");
                continue;
            }

            if (Hash::check($expectedPassword, $admin->password)) {
                $this->info("{$admin->nom_utilisateur} : Mot de passe correct");
            } else {
                $this->error("{$admin->nom_utilisateur} : Mot de passe incorrect");
            }
        }
    }
}
