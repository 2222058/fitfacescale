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
        Schema::create('pesagems', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('data_pesagem');
            $table->float('peso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesagems');
    }
};
