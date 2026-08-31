<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaction_masters', function (Blueprint $table) {
            $table->id();

            $table->string('invoice')->unique();

            $table->foreignId('member_id')
                ->constrained('members')
                ->cascadeOnDelete();

            $table->date('date_start');
            $table->date('date_pickup');

            $table->decimal('discount', 15, 2)->default(0);
            $table->decimal('subtotal', 15, 2)->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaction_masters');
    }
};