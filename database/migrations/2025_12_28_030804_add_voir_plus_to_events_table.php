<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
        if (!Schema::hasColumn('events', 'voir_plus')) {
            $table->string('voir_plus')->nullable()->after('message');
        }
            // nullable car ce champ est optionnel
        });
    }

    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('voir_plus');
        });
    }
};
