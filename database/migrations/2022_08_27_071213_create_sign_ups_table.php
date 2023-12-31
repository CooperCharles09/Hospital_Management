<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sign_ups', function (Blueprint $table) {
            $table->id();
            $table->string('Fname')->nullable();
            $table->string('Lname')->nullable();
            $table->string('Gender')->nullable();
            $table->string('City')->nullable();
            $table->string('Contact')->nullable();
            $table->string('DOB')->nullable();
            $table->string('Email')->nullable();
            $table->string('Pswd')->nullable();
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
        Schema::dropIfExists('sign_ups');
    }
}
