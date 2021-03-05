<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->date('date');
            $table->time('time', 0);
            $table->time('endtime', 0);
            $table->string('slot_no');
            $table->string('user_id');
           // $table->integer('user_id')->unsigned();
            //$table->integer('user_id')->auth()->id();            
            $table->string('faculty');
            $table->string('updated_by');
            $table->string('status');
            $table->timestamps();
        });
        /*Schema::table('bookings', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
