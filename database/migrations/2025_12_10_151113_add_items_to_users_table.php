<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. Criado para acrescentar itens a tabela users
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //Como estes itens serão acrescentados após a tabelas estar criada colocamos o nullable porque...
            $table->string('address')->after('name')->nullable();
            $table->string('nif')->after('address')->default('ainda não havia nif na base de dados');
        });
    }

    /**
     * Reverse the migrations. não esquecer de criar o down() para que o rollback funcione quando for necessário usar!
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nif');
            $table->dropColumn('address');
        });
    }
};
