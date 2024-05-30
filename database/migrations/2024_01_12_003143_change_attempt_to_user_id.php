<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAttemptToUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attempts', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('absen');
            $table->dropColumn('kelas');
            $table->foreignId('user_id');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attempts', function (Blueprint $table) {
            $table->string('name');
            $table->string('absen');
            $table->string('kelas');
            $table->dropColumn('user_id');
            $table->dropColumn('password');
        });
    }
}
