<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('penitipans', function (Blueprint $table) {
            $table->enum('gender', ['Laki-laki', 'Perempuan'])
                ->after('name');

            $table->decimal('weight', 5, 2)
                ->after('gender');

            $table->decimal('height', 5, 2)
                ->after('weight');

            $table->unsignedInteger('age')
                ->after('height');
        });
    }

    public function down(): void
    {
        Schema::table('penitipans', function (Blueprint $table) {
            $table->dropColumn([
                'gender',
                'weight',
                'height',
                'age',
            ]);
        });
    }
};