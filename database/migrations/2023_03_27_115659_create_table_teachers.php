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
            $table->string('nome', 50)->nullable();
            $table->string('curriculo', 6000)->nullable();
            $table->string('cpf', 11)->unique();
            $table->string('telefone', 11)->unique();
            $table->string('email')->nullable();
            $table->string('vinculoProfessor')->nullable();
            $table->string('escolaridade')->nullable();

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