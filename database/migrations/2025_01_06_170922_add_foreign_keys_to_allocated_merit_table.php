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
    Schema::table('allocated_merit', function (Blueprint $table) {
        $table->foreign('admin_id')->references('admin_id')->on('admin')->onDelete('cascade');
        $table->foreign('member_id')->references('member_id')->on('member')->onDelete('cascade');
        $table->foreign('event_id')->references('event_id')->on('abmevent')->onDelete('cascade');
        $table->foreign('merit_id')->references('merit_id')->on('merit')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('allocated_merit', function (Blueprint $table) {
            //
        });
    }
};
