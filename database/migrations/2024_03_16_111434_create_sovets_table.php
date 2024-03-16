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
        Schema::create('sovets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Название совета');
            $table->string('title_en')->comment('Название совета (en)');
            $table->string('pologenie')->comment('Положение о совете');
            $table->json('sostav')->nullable()->comment('Состав совета');
            $table->json('work_planes')->nullable()->comment('Планы работы');
            $table->json('protocols')->nullable()->comment('Протоколы работы');
            $table->json('video')->nullable()->comment('Видео заседаний совета');

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
        Schema::dropIfExists('sovets');
    }
};
