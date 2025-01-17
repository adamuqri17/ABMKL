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
        Schema::create('payment_allocation', function (Blueprint $table) {
            $table->increments('payment_allocation_id');
            $table->string('payment_allocation_name', 50)->collation('utf8mb4_unicode_ci')->default('0');
            $table->double('amount', 8, 2)->default(0.00);
            $table->date('allocation_date');
            $table->unsignedInteger('admin_id');
            $table->integer('session');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_allocation');
    }
};
