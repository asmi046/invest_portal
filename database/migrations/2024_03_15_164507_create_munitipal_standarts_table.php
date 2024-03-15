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
            $table->string('name_en')->nullable()->comment('Имя (en)');
            $table->string('type')->comment('Тип субъекта (город/район)');
            $table->string('slug')->comment('Слаг');
            $table->string('title')->comment('Заголовок');
            $table->string('title_en')->nullable()->comment('Заголовок (en)');
            $table->string('glava')->comment('Глава субъекта');
            $table->string('glava_en')->nullable()->comment('Глава субъекта (en)');
            $table->string('address')->comment('Адрес');
            $table->string('phone')->comment('Телефон');
            $table->string('site')->comment('Сайт');
            $table->string('email')->comment('e-mail');
            $table->string('folder')->comment('Папка');
            $table->string('gerb')->comment('Герб');
            $table->string('glava_photo')->comment('Фото главы субъекта');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('description_en')->nullable()->comment('Описание (en)');
            $table->text('passport_files')->nullable()->comment('Паспорт муниципального образования');
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
