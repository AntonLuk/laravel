<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { php artisam make:model Worker
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('FIO');
            $table->text('Phone');

            $table->integer('positions_id')->unsigned();
            //$table->foreign('positions_id')->references('id')->on('Positions');
            $table->timestamps();
        });

        Schema::table('workers', function($table) {
            $table->foreign('position_id')->references('id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
