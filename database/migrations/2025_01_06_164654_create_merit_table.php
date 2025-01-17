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
        Schema::create('merit', function (Blueprint $table) {
            $table->increments('merit_id');
            $table->unsignedInteger('event_id')->default(0);
            $table->double('merit_point', 8, 2)->default(0.00);
            $table->unsignedInteger('admin_id');
            $table->date('allocation_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merit');
    }
};
