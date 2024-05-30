<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAranansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aranans', function (Blueprint $table) {
            $table->id();
            $table->string('javanese');
            $table->string('aranan');
            $table->string('indonesian');
            $table->string('img')->nullable();
            $table->unsignedInteger('type');
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
        Schema::dropIfExists('aranans');
    }
}
