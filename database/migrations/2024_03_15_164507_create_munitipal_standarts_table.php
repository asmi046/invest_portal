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
        Schema::create('munitipal_standarts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->comment('Имя');
            $table->string('name_en')->comment('Имя (en)');
            $table->string('type')->comment('Тип субъекта (город/район)');
            $table->string('slug')->comment('Слаг');
            $table->string('title')->comment('Заголовок');
            $table->string('title_en')->comment('Заголовок (en)');
            $table->string('glava')->comment('Глава субъекта');
            $table->string('glava_en')->comment('Глава субъекта (en)');
            $table->string('phone')->comment('Телефон');
            $table->string('site')->comment('Сайт');
            $table->string('email')->comment('e-mail');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('description_en')->nullable()->comment('Описание (en)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('munitipal_standarts');
    }
};
