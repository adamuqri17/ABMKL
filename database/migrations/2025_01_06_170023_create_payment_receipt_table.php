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
        Schema::create('payment_receipt', function (Blueprint $table) {
            $table->increments('payment_receipt_id');
            $table->string('payment_name', 50)->collation('utf8mb4_unicode_ci')->default('0');
            $table->double('payment_fee', 8, 2)->default(0.00);
            $table->time('payment_time')->default('00:00:00');
            $table->date('payment_date');
            $table->unsignedInteger('member_id')->nullable();
            $table->unsignedInteger('nonmember_id')->nullable();
            $table->unsignedInteger('event_id')->default(0);
            $table->unsignedInteger('payment_allocation_id')->default(0);
            $table->char('payment_status', 20)->collation('utf8mb4_unicode_ci');
            $table->string('transaction_id', 50)->collation('utf8mb4_unicode_ci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_receipt');
    }
};
