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
        Schema::create('joinevent', function (Blueprint $table) {
            $table->increments('join_event_id');
            $table->unsignedInteger('event_id')->default(0);
            $table->unsignedInteger('member_id')->nullable();
            $table->unsignedInteger('nonmember_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joinevent');
    }
};
