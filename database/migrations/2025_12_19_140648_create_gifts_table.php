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
        Schema::create('gifts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //nome da prenda
            $table->decimal('expected_value', 10, 2); // Valor previstoobrigatório
            $table->decimal('amount_spent', 10, 2)->nullable(); //Valor gasto opcional
            $table->timestamps();
            //Criar uma chave estrangeira na parte de baixo
            $table->unsignedBigInteger('user_id'); // pessoa que vai receber
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gifts');
    }
};
