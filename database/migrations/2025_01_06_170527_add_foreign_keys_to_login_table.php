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
    Schema::table('login', function (Blueprint $table) {
        $table->foreign('member_id')->references('member_id')->on('member')->onDelete('cascade');
        $table->foreign('admin_id')->references('admin_id')->on('admin')->onDelete('cascade');
        $table->foreign('application_id')->references('application_id')->on('application')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('login', function (Blueprint $table) {
            //
        });
    }
};
