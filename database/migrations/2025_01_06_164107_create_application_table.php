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
        Schema::create('application', function (Blueprint $table) {
            $table->increments('application_id');
            $table->string('prove_letter', 255)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('applicant_status', 20)->collation('utf8mb4_unicode_ci')->nullable();
            $table->date('date_application')->nullable();
            $table->unsignedInteger('admin_id')->nullable();
            $table->unsignedInteger('login_id')->nullable();
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application');
    }
};
