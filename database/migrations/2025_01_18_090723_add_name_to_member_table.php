<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('member', function (Blueprint $table) {
            $table->string('name', 255)->nullable()->after('member_id');
        });
    }

    public function down()
    {
        Schema::table('member', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
};