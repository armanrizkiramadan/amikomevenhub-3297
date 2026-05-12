<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            // Menambah kolom poster, tipenya string, boleh kosong (nullable)
            // diletakkan setelah kolom stock agar urutannya rapi
            $table->string('poster')->nullable()->after('stock');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            // Perintah untuk menghapus kolom jika migrasi di-rollback
            $table->dropColumn('poster');
        });
    }
};