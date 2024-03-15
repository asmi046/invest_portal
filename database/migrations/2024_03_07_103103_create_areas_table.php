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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->comment('Имя участка');
            $table->string('name_en')->nullable()->comment('Имя участка (en)');
            $table->string('cadastral')->comment('Кадастровый №');
            $table->text('description')->comment('Описание');
            $table->text('description_en')->nullable()->comment('Описание (en)');
            $table->string('lnk')->comment('Ссылка на карту');
            $table->string('img')->nullable()->comment('Картинка карты');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
