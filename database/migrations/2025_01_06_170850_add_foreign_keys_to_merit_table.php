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
    Schema::table('merit', function (Blueprint $table) {
        $table->foreign('admin_id')->references('admin_id')->on('admin')->onDelete('cascade');
        $table->foreign('event_id')->references('event_id')->on('abmevent')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('merit', function (Blueprint $table) {
            //
        });
    }
};
