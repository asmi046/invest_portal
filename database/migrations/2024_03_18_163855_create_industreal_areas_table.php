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
        Schema::create('industreal_areas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title')->comment('Название парка');
            $table->string('title_en')->comment('Название парка (en)');
            $table->string('img')->nullable()->comment('Изображение для карточки проекта');

            $table->string('uk_lnk', 800)->comment('Ссылка на управляющую компанию');
            $table->string('uk_name')->comment('Название управляющей компании');
            $table->string('uk_name_en')->comment('Название управляющей компании (en)');
            $table->string('btn_lnk', 800)->comment('Ссылка на кнопке ознакомиться');

            $table->integer('rezident_count')->comment('Количество резидентов');
            $table->string('free_area')->comment('Свободная площадь');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industreal_areas');
    }
};
