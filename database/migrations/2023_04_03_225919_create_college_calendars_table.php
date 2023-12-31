<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_calendars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('eventtitle');
            $table->longText('startdate');
            $table->longText('enddate');
            $table->foreignId('user_id')
            ->constrained('users')
            ->onUpdate('cascade') 
            ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('college_calendars');
    }
}
