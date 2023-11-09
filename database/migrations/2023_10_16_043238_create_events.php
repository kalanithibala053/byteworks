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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('Team_Name')->unique();
            $table->float('quiz')->default(0);
            $table->float('coding')->default(0);
            $table->float('debate')->default(0);
            $table->float('expo')->default(0);
            $table->float('presentation')->default(0);
            $table->float('design')->default(0);
            $table->float('techgames')->default(0);
            $table->float('codevs')->default(0);
            
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
