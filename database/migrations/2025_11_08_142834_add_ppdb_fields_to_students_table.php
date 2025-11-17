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
        Schema::table('students', function (Blueprint $table) {
            $table->string('email_orangtua')->nullable();
            $table->string('telepon_orangtua')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->enum('pilihan_jenjang', ['RPL', 'PG', 'TKJ', 'TJA'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['email_orangtua', 'telepon_orangtua', 'asal_sekolah', 'pilihan_jenjang']);
        });
    }
};
