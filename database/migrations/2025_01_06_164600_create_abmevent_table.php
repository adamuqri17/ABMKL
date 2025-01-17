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
        Schema::create('abmevent', function (Blueprint $table) {
            $table->increments('event_id'); 
            $table->unsignedInteger('admin_id')->nullable();
            $table->string('event_name', 25)->default('0'); 
            $table->string('banner', 255)->nullable(); 
            $table->string('event_description', 255)->default(''); 
            $table->integer('total_participation')->nullable(); 
            $table->string('event_category', 20)->nullable(); 
            $table->string('event_status', 20)->nullable(); 
            $table->date('event_date')->nullable(); 
            $table->integer('event_session')->nullable(); 
            $table->time('event_start_time')->nullable(); 
            $table->time('event_end_time')->nullable(); 
            $table->string('event_location', 50)->nullable(); 
            $table->double('event_price')->nullable(); 
            $table->timestamp('created_at')->nullable(); 
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abmevent');
    }
};
