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
        Schema::create('invest_projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Заголовок проекта');
            $table->string('title_en')->comment('Заголовок проекта (en)');
            $table->string('img')->nullable()->comment('Изображение для карточки проекта');
            $table->string('slug')->comment('Слаг');
            $table->json('files')->nullable()->comment('Файлы');
            $table->text('description')->nullable()->comment('Текст страницы');
            $table->text('description_en')->nullable()->comment('Текст страницы (en)');
            $table->string('seo_title')->nullable()->comment('SEO заголовок');
            $table->text('seo_description')->nullable()->comment('SEO описание');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invest_projects');
    }
};
