<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('login', function (Blueprint $table) {
        $table->increments('login_id');
        $table->unsignedInteger('member_id')->nullable();
        $table->unsignedInteger('admin_id')->nullable();
        $table->unsignedInteger('application_id')->nullable();
        $table->char('acc_status', 20)->collation('utf8mb4_unicode_ci')->nullable();
        $table->string('username', 25)->collation('utf8mb4_unicode_ci')->nullable();
        $table->string('password', 255)->collation('utf8mb4_unicode_ci')->nullable();
        $table->string('email', 50)->collation('utf8mb4_unicode_ci')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login');
    }
};
