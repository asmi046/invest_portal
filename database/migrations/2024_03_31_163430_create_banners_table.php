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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('order')->default(1)->comment('Порядок');
            $table->string('img')->comment('Изображение');
            $table->string('title')->comment('Заголовок баннера');
            $table->string('title_en')->nullable()->comment('Заголовок баннера (en)');
            $table->json('params')->comment('Параметры');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
