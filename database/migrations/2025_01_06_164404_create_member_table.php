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
        Schema::create('member', function (Blueprint $table) {
            $table->increments('member_id');
            $table->unsignedInteger('application_id')->default(0);
            $table->double('total_merit', 8, 2)->default(0.00);
            $table->tinyInteger('registration_status')->default(0);
            $table->integer('intake_session')->nullable();
            $table->string('ic_number', 15)->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('age')->default(0);
            $table->char('gender', 20)->collation('utf8mb4_unicode_ci')->nullable();
            $table->char('race', 20)->collation('utf8mb4_unicode_ci')->nullable();
            $table->char('religion', 20)->collation('utf8mb4_unicode_ci')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('birthplace', 100)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('address', 100)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('phone_number', 15)->collation('utf8mb4_unicode_ci')->nullable();
            $table->char('member_status', 20)->collation('utf8mb4_unicode_ci')->nullable();
            $table->unsignedInteger('login_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member');
    }
};
