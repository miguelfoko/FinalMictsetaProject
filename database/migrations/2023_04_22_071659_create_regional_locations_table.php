<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionalLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regional_locations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('region');
            $table->longText('principal');
            $table->longText('principalEmails');
            $table->longText('principalAssistant');
            $table->longText('principalAssistantEmails');
            $table->longText('address');
            $table->longText('websiteAddress');
            $table->longText('city');
            $table->longText('phone');
            $table->longText('latitude');
            $table->longText('longitude');
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
        Schema::dropIfExists('regional_locations');
    }
}
