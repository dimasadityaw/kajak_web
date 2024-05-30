<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSastrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sastras', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('subtitle')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('parent_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sastras');
    }
}