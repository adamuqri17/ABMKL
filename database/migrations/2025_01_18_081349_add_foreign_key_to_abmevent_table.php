<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('abmevent', function (Blueprint $table) {
            // Add foreign key for admin_id
            $table->foreign('admin_id')
                ->references('admin_id')
                ->on('admin')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('abmevent', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
        });
    }
};