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
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title')->comment('Название меры поддержки');
            $table->string('slug')->comment('Слаг');
            $table->string('type')->default("Общая")->comment('Тип');
            $table->string('img')->nullable()->comment('Картинка');
            $table->text('description')->nullable()->comment('Описание меры поддержки');

            $table->string('seo_title')->nullable()->comment('SEO заголовок');
            $table->text('seo_description')->nullable()->comment('SEO описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supports');
    }
};
