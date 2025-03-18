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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Заголовок');
            $table->string('title_en')->default(0)->comment('Заголовок (en)');
            $table->string('slug')->comment('Слаг');
            $table->integer('parent')->nullable()->comment('Родительская страница');
            // $table->integer('parent')->default(0)->comment('Родительская страница');
            $table->string('template')->nullable()->comment('Имя шаблона');
            $table->string('banner', 800)->nullable()->comment('Баннер');
            $table->string('img', 800)->nullable()->comment('Картинка страницы');
            $table->string('img_en', 800)->nullable()->comment('Картинка страницы (en)');
            $table->text('description')->nullable()->comment('Текст страницы');
            $table->text('description_en')->nullable()->comment('Текст страницы (en)');
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
