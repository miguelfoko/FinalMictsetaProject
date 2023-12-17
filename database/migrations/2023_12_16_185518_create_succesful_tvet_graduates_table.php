<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuccesfulTvetGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('succesful_tvet_graduates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->longText('content');
            $table->string('picture');
            $table->timestamps();
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
        Schema::dropIfExists('succesful_tvet_graduates');
    }
}
