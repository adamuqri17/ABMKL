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
    Schema::create('allocated_merit', function (Blueprint $table) {
        $table->increments('allocated_merit_id');
        $table->unsignedInteger('admin_id')->default(0);
        $table->unsignedInteger('member_id')->default(0);
        $table->unsignedInteger('event_id')->default(0);
        $table->unsignedInteger('merit_id')->default(0);
        $table->double('merit_point', 8, 2)->default(0.00);
        $table->date('allocation_date');
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allocated_merit');
    }
};
