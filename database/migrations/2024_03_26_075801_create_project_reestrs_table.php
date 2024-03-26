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
        Schema::create('project_reestrs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug')->comment('Слаг');

            $table->string('img')->nullable()->comment('Картинка проекта');

            $table->string('state')->comment('Статус проекта');

            $table->string('title')->comment('Название совета');
            $table->string('title_en')->nullable()->comment('Название совета (en)');

            $table->string('investor')->comment('Название совета');
            $table->string('investor_en')->nullable()->comment('Название совета (en)');

            $table->string('period')->comment('Период реализации проекта');
            $table->string('price')->comment('Стоимость');
            $table->integer('mest')->nullable()->comment('Рабочих мест');

            $table->text('description')->nullable()->comment('Описание проекта');
            $table->text('description_en')->nullable()->comment('Описание проекта (en)');

            $table->string('seo_title')->nullable()->comment('SEO заголовок');
            $table->text('seo_description')->nullable()->comment('SEO описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_reestrs');
    }
};
