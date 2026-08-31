<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // owner_name belum pernah dibuat,
        // jadi tidak perlu menghapusnya.
    }

    public function down(): void
    {
        // Tidak ada yang perlu dikembalikan.
    }
};