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
        Schema::create('LinkedAccounts', function (Blueprint $table) {
            $table->id('IdLinkA');
            $table->foreignId('IdLink')->on('LinkedTypes')->onDelete('cascade');
            $table->text('data');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LinkedAccounts');
    }
};
