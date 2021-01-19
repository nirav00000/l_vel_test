<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FruitFactory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('FruitFactory', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('fruit_name');
        //     $table->timestamps();
        // });

        Schema::rename('fruits_factory', 'FruitFactory');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
