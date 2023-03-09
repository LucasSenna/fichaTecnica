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
        Schema::create('teachers', function (Blueprint $table){
            $table->increments('id');
            $table->string('name', 50)->nullable();
            $table->string('curriculum', 6000)->nullable();
            $table->string('email')->nullable();
            $table->string('typeTeacher', 60)->nullable();

            $table->timestamps();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};?>