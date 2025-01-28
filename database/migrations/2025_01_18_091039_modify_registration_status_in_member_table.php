<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('member', function (Blueprint $table) {
            // Change registration_status to string type
            $table->string('registration_status', 20)->change();
            // Also change member_status to string type since it uses similar values
            $table->string('member_status', 20)->change();
        });
    }

    public function down()
    {
        Schema::table('member', function (Blueprint $table) {
            // Revert back to integer if needed
            $table->integer('registration_status')->change();
            $table->integer('member_status')->change();
        });
    }
};