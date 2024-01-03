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
        Schema::create('virtual_machines', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('environment')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('server_migration')->nullable();
            $table->text('notes')->nullable();
            $table->foreign('app_id')->references('id')->on('applications')->onDelete('cascade');
            $table->unsignedBigInteger('app_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('virtual_machines');
    }
};
