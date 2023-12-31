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
        Schema::create('api_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('database')->nullable();
            $table->string('device_id')->nullable();
            $table->string('temperature')->nullable();
            $table->string('humidity')->nullable();
            $table->string('light')->nullable();
            $table->string('vent_status')->nullable();
            $table->string('mist_status')->nullable();
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
        Schema::dropIfExists('api_requests');
    }
};
