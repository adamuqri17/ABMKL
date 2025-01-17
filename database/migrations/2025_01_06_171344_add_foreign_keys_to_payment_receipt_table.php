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
    Schema::table('payment_receipt', function (Blueprint $table) {
        $table->foreign('member_id')->references('member_id')->on('member')->onDelete('cascade');
        $table->foreign('nonmember_id')->references('nonmember_id')->on('nonmember')->onDelete('cascade');
        $table->foreign('event_id')->references('event_id')->on('abmevent')->onDelete('cascade');
        $table->foreign('payment_allocation_id')->references('payment_allocation_id')->on('payment_allocation')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payment_receipt', function (Blueprint $table) {
            //
        });
    }
};
