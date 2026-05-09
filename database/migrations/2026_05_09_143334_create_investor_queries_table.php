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
        Schema::create('investor_queries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organization')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('city');
            $table->string('postal_zip')->nullable();
            $table->string('country')->nullable();
            $table->string('email');
            $table->string('telephone');
            $table->string('fax')->nullable();
            $table->string('url')->nullable();
            $table->string('interest')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investor_queries');
    }
};
