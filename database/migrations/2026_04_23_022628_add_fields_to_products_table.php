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
        Schema::table('products', function (Blueprint $table) {
            $table->string('generic')->nullable()->after('name');
            $table->string('form')->nullable()->after('generic');
            $table->string('strength')->nullable()->after('form');
            $table->text('presentation')->nullable()->after('strength');
            $table->text('indication')->nullable()->after('presentation');
            $table->text('uses')->nullable()->after('indication');
            $table->string('pdf')->nullable()->after('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'generic',
                'form',
                'strength',
                'presentation',
                'indication',
                'uses',
                'pdf'
            ]);
        });
    }
};
