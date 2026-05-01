<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {

            if (Schema::hasColumn('products', 'description')) {
                $table->dropColumn('description');
            }
            if (!Schema::hasColumn('products', 'generic')) {
                $table->string('generic')->nullable()->after('slug');
            }
            if (!Schema::hasColumn('products', 'ingredients')) {
                $table->string('ingredients')->nullable()->after('generic');
            }
            if (!Schema::hasColumn('products', 'form')) {
                $table->string('form')->nullable()->after('ingredients');
            }
            if (!Schema::hasColumn('products', 'strength')) {
                $table->string('strength')->nullable()->after('form');
            }
            if (!Schema::hasColumn('products', 'presentation')) {
                $table->text('presentation')->nullable()->after('strength');
            }
            if (!Schema::hasColumn('products', 'indication')) {
                $table->text('indication')->nullable()->after('presentation');
            }
            if (!Schema::hasColumn('products', 'uses')) {
                $table->text('uses')->nullable()->after('indication');
            }
            if (!Schema::hasColumn('products', 'pdf')) {
                $table->string('pdf')->nullable()->after('image');
            }
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

            if (!Schema::hasColumn('products', 'description')) {
                $table->text('description');
            }
            if (Schema::hasColumn('products', 'generic')) {
                $table->dropColumn('generic');
            }
            if (Schema::hasColumn('products', 'ingredients')) {
                $table->dropColumn('ingredients');
            }
            if (Schema::hasColumn('products', 'form')) {
                $table->dropColumn('form');
            }
            if (Schema::hasColumn('products', 'strength')) {
                $table->dropColumn('strength');
            }
            if (Schema::hasColumn('products', 'presentation')) {
                $table->dropColumn('presentation');
            }
            if (Schema::hasColumn('products', 'indication')) {
                $table->dropColumn('indication');
            }
            if (Schema::hasColumn('products', 'uses')) {
                $table->dropColumn('uses');
            }
            if (Schema::hasColumn('products', 'pdf')) {
                $table->dropColumn('pdf');
            }
        });
    }
};
