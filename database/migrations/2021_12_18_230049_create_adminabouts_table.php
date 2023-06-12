<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminaboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminabouts', function (Blueprint $table) {
            $table->id();
            $table->string('Job_title');
            $table->string('image');
            $table->text('content')->nullable();
            $table->string('Birthday');
            $table->string('Age');
            $table->string('Websie');
            $table->string('Degree');
            $table->string('Phone');
            $table->string('City');
            $table->string('Freelance');
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
        Schema::dropIfExists('adminabouts');
    }
}
