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
        Schema::create('nonmember', function (Blueprint $table) {
            $table->increments('nonmember_id');
            $table->string('name', 50)->collation('utf8mb4_unicode_ci')->default('0');
            $table->string('ic_number', 20)->collation('utf8mb4_unicode_ci')->default('0');
            $table->string('email', 50)->collation('utf8mb4_unicode_ci')->default('0');
            $table->string('phone_number', 15)->collation('utf8mb4_unicode_ci')->default('0');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nonmember');
    }
};
