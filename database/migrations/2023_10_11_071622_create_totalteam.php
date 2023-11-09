<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('totalteam', function (Blueprint $table) {
        $table->id();
        $table->string('Email')->unique();
        $table->string('Phone')->unique();
        $table->string('Team_Name')->unique();
        $table->string('Team_Leader');
        $table->string('domain');
        $table->string('Team_Leader_Register_No')->unique();
        $table->string('Member_1');
        $table->string('Member_1_Register_No')->unique();
        $table->string('Member_2');
        $table->string('Member_2_Register_No')->unique();
        $table->string('Member_3');
        $table->string('Member_3_Register_No')->unique();
        $table->string('Member_4')->nullable(); 
        $table->string('Member_4_Register_No')->unique()->nullable(); 
        $table->string('Member_5')->nullable(); 
        $table->string('Member_5_Register_No')->unique()->nullable();
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
        Schema::dropIfExists('totalteam');
    }
};
