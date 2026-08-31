<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('penitipans', function (Blueprint $table) {
            $table->unsignedBigInteger('member_id')->nullable()->change();
        });

        Schema::table('penitipans', function (Blueprint $table) {
            $table->foreign('member_id')
                ->references('id')
                ->on('members')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('penitipans', function (Blueprint $table) {
            $table->dropForeign(['member_id']);
        });
    }
};