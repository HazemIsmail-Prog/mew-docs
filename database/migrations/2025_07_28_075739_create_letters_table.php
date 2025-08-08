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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('code')->default(false);
            $table->boolean('internal')->default(false);
            $table->boolean('official')->default(false);
            $table->boolean('has_attachments')->default(false);
            $table->text('address')->nullable();
            $table->string('prefix');
            $table->string('sender');
            $table->string('receiver');
            $table->text('subject');
            $table->text('copy_to')->nullable();
            $table->longText('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
