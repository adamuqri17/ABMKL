<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('application', function (Blueprint $table) {
            // First add the member_id column
            $table->integer('member_id')->unsigned();
            
            // Then add the foreign key constraint
            $table->foreign('member_id')
                ->references('member_id')
                ->on('member')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('application', function (Blueprint $table) {
            $table->dropForeign(['member_id']);
            $table->dropColumn('member_id');
        });
    }
};