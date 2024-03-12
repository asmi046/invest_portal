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
        Schema::create('pol_resurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('lnk')->comment('Ссылка на ресурс');
            $table->string('title')->nullable()->comment('Название рсурса');
            $table->string('img')->nullable()->comment('Лого ресурса');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pol_resurs');
    }
};
