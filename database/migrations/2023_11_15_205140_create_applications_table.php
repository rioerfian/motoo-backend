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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url_prod')->nullable();
            $table->string('url_dev')->nullable();
            $table->string('pic_sisi')->nullable();
            $table->string('pic_ict')->nullable();
            $table->string('git_path')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('business_process')->nullable();
            $table->string('login_app')->nullable();
            $table->string('category')->nullable();
			$table->string('turunan')->nullable();
            $table->string('platform')->nullable();
            $table->string('frontend')->nullable();
            $table->string('backend')->nullable();
			$table->string('web_server')->nullable();
            $table->string('db_server')->nullable();
            $table->string('ip_db')->nullable();
            $table->string('group_area')->nullable();
            $table->string('group')->nullable();
            $table->string('priority')->nullable();
            $table->string('impact')->nullable();
            $table->string('ip')->nullable();
            $table->string('ip_public')->nullable();
            $table->string('database')->nullable();
            $table->string('db_host')->nullable();
            $table->string('db_connection_path')->nullable();
            $table->string('sap_connection_path')->nullable();
            $table->string('status')->nullable();
            $table->string('migration_status')->nullable();
            $table->text('user_login')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
