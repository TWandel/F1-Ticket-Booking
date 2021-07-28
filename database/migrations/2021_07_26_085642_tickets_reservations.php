<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TicketsReservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketsreservations', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->primary('id');
            $table->unsignedBigInteger('race_id');
            $table->foreign('race_id')->references('id')->on('races');
            $table->unsignedBigInteger('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->unsignedBigInteger('reservation_id');
            $table->foreign('reservation_id')->references('id')->on('reservations');
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
        //
    }
}
