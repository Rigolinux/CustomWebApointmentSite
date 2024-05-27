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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('IdRole')->on('Roles')->onDelete('cascade')->nullable();
            $table->foreignId('IdLinkA')->on('LinkedAccounts')->onDelete('cascade')->nullable();
            $table->text('Address')->nullable();
            $table->string('Phone', 50)->nullable();
            $table->string('ProfilePhoto', 250)->nullable();
            $table->boolean('VerifiedAccount')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
