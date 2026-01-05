<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();      // chemin de l’image
            $table->text('message');                  // message de l'événement
            $table->string('type');                   // fondation, étape, expansion
            $table->integer('year');                  // année
            $table->string('voir_plus')->nullable();  // lien vers plus d'informations
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
