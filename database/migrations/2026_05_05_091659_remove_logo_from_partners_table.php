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
        Schema::table('partners', function (Blueprint $table) {
            // This removes the column
            $table->dropColumn('logo');
        });
    }

    public function down(): void
    {
        Schema::table('partners', function (Blueprint $table) {
            // This allows you to "undo" the migration if needed
            $table->string('logo')->nullable();
        });
    }
};
