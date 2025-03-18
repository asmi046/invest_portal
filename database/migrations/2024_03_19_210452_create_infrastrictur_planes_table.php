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
        Schema::create('infrastrictur_planes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Название отчета');
            $table->string('title_en')->nullable()->comment('Название отчета (en)');
            $table->integer('month')->comment('Месяц');
            $table->integer('year')->comment('Год');
            $table->string('file', 800)->nullable()->comment('Файл отчета');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infrastrictur_planes');
    }
};
