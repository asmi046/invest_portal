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
        Schema::create('one_win_reglaments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('number')->comment('Номер этапа');
            $table->integer('dey_to_reac')->nullable()->comment('Дней на реакцию');
            $table->text('comment')->comment('Коментарий');
            $table->text('comment_en')->nullable()->comment('Коментарий (en)');
            $table->string('snoska')->nullable()->comment('Сноска');
            $table->string('snoska_en')->nullable()->comment('Сноска (en)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('one_win_reglaments');
    }
};
