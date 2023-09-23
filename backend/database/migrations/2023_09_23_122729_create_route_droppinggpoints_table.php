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
        Schema::create('route_droppinggpoints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')
                ->references('id')->on('routes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('dropping_place', '150');
            $table->unsignedBigInteger('amount');
            $table->unsignedBigInteger('order')->default('0');

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
        Schema::dropIfExists('route_droppinggpoints');
    }
};
