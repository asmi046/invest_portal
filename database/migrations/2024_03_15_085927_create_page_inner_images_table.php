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
        Schema::create('page_inner_images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->nullable()->comment('Заголовок');
            $table->foreignId('page_id')->comment('ID страницы')
                                        ->constrained()
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
            $table->string('lnk')->comment('Ссылка на изображение');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_inner_images');
    }
};
