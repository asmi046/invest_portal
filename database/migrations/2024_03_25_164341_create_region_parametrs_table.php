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
        Schema::create('region_parametrs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("type")->comment("Тип параметра");
            $table->string("type_en")->nullable()->comment("Тип параметра (en)");

            $table->string("parametr")->comment("Значение параметра");
            $table->string("parametr_en")->nullable()->comment("Значение параметра (en)");

            $table->string("data_param")->comment("На какую дату параметр");
            $table->string("data_param_en")->nullable()->comment("На какую дату параметр (en)");

            $table->string("parametr_name")->comment("Название параметра");
            $table->string("parametr_name_en")->nullable()->comment("Название параметра (en)");

            $table->boolean("direction")->default(1)->comment("Направление изменения");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region_parametrs');
    }
};
