<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string("name");
        $table->foreignId("state_id")->nullable();
        $table->string("state_code")->nullable();
        $table->string("state_name")->nullable();
        $table->foreignId("country_id")->nullable();
        $table->string("country_code")->nullable();
        $table->string("country_name")->nullable();
        $table->float("latitude")->nullable();
        $table->float("longitude")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
