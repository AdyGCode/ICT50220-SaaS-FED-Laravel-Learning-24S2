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
        Schema::create('states', function (Blueprint $table) {
            $table->id(); // Big Integer, Unsigned, Primary Key, Auto Increment
            $table->string('name', 64);
            $table->string('state_code', 5);
            $table->string('country_name')->nullable();
            $table->string("country_code",3)->nullable();
            $table->string('type')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->timestamps(); // created_at, updated_at - date time

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
