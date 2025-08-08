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
            $table->string('username')->nullable()->unique();
            $table->foreignId('stakeholder_id')->nullable()->constrained('stakeholders');
            $table->boolean('is_active')->default(true);
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropForeign(['stakeholder_id']);
            $table->dropColumn('stakeholder_id');
            $table->dropColumn('is_active');
            $table->string('email')->nullable(false)->change();
        });
    }
};
