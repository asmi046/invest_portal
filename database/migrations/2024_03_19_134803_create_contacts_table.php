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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('selector')->nullable()->comment('Обединяющий признак');
            $table->string('text_id')->nullable()->comment('Текстовый ID');
            $table->string('organ')->nullable()->comment('Организация');
            $table->string('organ_en')->nullable()->comment('Организация (en)');
            $table->string('adres')->nullable()->comment('Адрес');
            $table->string('adres_en')->nullable()->comment('Адрес (en)');
            $table->string('person')->nullable()->comment('Контактное лицо');
            $table->string('person_en')->nullable()->comment('Контактное лицо (en)');
            $table->string('dolg')->nullable()->comment('Должность');
            $table->string('dolg_en')->nullable()->comment('Должность (en)');
            $table->string('phone')->comment('Телефон');
            $table->string('phone_dob')->nullable()->comment('Телефон добавочный');
            $table->string('email')->nullable()->comment('e-mail');
            $table->string('vk_lnk')->nullable()->comment('Ссылка на VK');
            $table->string('tg_lnk')->nullable()->comment('Ссылка на Telegram');
            $table->string('ok_lnk')->nullable()->comment('Ссылка на Однокласники');
            $table->string('web')->nullable()->comment('Адрес сайта');
            $table->string('img')->nullable()->comment('Фото или лого');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
