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
        Schema::create('pages_en', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Заголовок');
            $table->string('slug')->comment('Слаг');
            $table->integer('parent')->default(0)->comment('Родительская страница');
            $table->string('template')->nullable()->comment('Имя шаблона');
            $table->string('banner')->nullable()->comment('Баннер');
            $table->string('img')->nullable()->comment('Картинка страницы');
            $table->text('description')->nullable()->comment('Текст страницы');
            $table->json('images')->nullable()->comment('Галерея изображений');
            $table->json('files')->nullable()->comment('Файлы');
            $table->string('seo_title')->nullable()->comment('SEO заголовок');
            $table->text('seo_description')->nullable()->comment('SEO описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
