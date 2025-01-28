<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('application', function (Blueprint $table) {
            // Modify member_id to be nullable
            $table->integer('member_id')->unsigned()->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('application', function (Blueprint $table) {
            // Revert back to non-nullable
            $table->integer('member_id')->unsigned()->nullable(false)->change();
        });
    }
};