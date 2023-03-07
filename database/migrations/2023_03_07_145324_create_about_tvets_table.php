<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTvetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_tvets', function (Blueprint $table) {
            $table->id();
            $table->longText('whatIsTvet');
            $table->longtext('tvetOverview');
            $table->longtext('publicTvetColleges'); 
            $table->longtext('tvetCollegeAdministration');
            $table->longtext('privateTvetColleges');

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
        Schema::dropIfExists('about_tvets');
    }
}
