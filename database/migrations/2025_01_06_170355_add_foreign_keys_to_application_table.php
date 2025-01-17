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
        Schema::table('application', function (Blueprint $table) {
            $table->foreign('admin_id')->references('admin_id')->on('admin')->onDelete('cascade');
            $table->foreign('login_id')->references('login_id')->on('login')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application', function (Blueprint $table) {
            //
        });
    }
};
