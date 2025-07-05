<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Rimuovi project_id dalla tabella categories
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropColumn('project_id');
        });

        // Rimuovi category_id dalla tabella projects
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Ripristina project_id nella tabella categories
        Schema::table('categories', function (Blueprint $table) {
            $table->foreignId('project_id')->nullable()->constrained();
        });

        // Ripristina category_id nella tabella projects
        Schema::table('projects', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->constrained();
        });
    }
};
