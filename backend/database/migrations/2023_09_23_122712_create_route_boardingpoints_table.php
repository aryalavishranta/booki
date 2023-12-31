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
        Schema::create('route_boardingpoints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')
                ->references('id')->on('routes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('boarding_place', '150');
            $table->time('time');
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
        Schema::dropIfExists('route_boardingpoints');
    }
};
