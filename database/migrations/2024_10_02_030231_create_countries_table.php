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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name',128);
            $table->string('iso3',3)->nullable();
            $table->string('iso2',2)->nullable();
            $table->string('tld',16)->nullable();
            $table->integer('phone_code')->nullable();
            $table->integer('numeric_code');
            $table->string('capital')->nullable();
            $table->string('currency',3)->nullable();
            $table->string('currency_name')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->string('native')->nullable();
            $table->string('region')->nullable();
            $table->integer('region_id')->nullable();
            $table->string('subregion')->nullable();
            $table->integer('subregion_id')->nullable();
            $table->string('nationality')->nullable();
            $table->json('timezones')->nullable();
            $table->float("latitude")->nullable();
            $table->float("longitude")->nullable();
            $table->string("emoji")->nullable();
            $table->string("emojiU")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
