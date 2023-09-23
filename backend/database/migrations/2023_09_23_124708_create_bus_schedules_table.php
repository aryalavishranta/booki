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
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')
                ->references('id')->on('routes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('bus_id')
                ->references('id')->on('buses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->boolean('sunday')->default(false);
                $table->boolean('monday')->default(false);
                $table->boolean('tuesday')->default(false);
                $table->boolean('wednesday')->default(false);
                $table->boolean('thursday')->default(false);
                $table->boolean('friday')->default(false);
                $table->boolean('saturday')->default(false);                
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
        Schema::dropIfExists('bus_schedules');
    }
};
