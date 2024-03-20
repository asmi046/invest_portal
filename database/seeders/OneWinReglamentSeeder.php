<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class OneWinReglamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data_regl = [
            [
                'number' => 1,
                'dey_to_reac' => 2,
                'comment' => "Заявка о реализации проекта",
                'comment_en' => "Application for the implementation of the project",
                'snoska' => "Рассмотрение в течении 2х рабочих дней",
                'snoska_en' => "Consideration within 2 working days",
            ],
            [
                'number' => 2,
                'dey_to_reac' => 15,
                'comment' => "Определение земельного участка (производственной площади)",
                'comment_en' => "Determination of the land plot (production area)",
                'snoska' => "Рассмотрение в течении 15 рабочих дней",
                'snoska_en' => "Consideration within 15 working days",
            ],
            [
                'number' => 3,
                'comment' => "Включение проекта в реестр",
                'comment_en' => "Inclusion of the project in the registry",
            ],
            [
                'number' => 4,
                'comment' => "Реализация проекта",
                'comment_en' => "Project implementation",
            ],
            [
                'number' => 5,
                'dey_to_reac' => 3,
                'comment' => "Подача документов на получение господержки",
                'comment_en' => "Submission of documents for obtaining state support",
                'snoska' => "Рассмотрения обращения составляет 3 рабочих дня",
                'snoska_en' => "Consideration of the application takes 3 working days",
            ],
            [
                'number' => 6,
                'dey_to_reac' => 3,
                'comment' => "Заключение инвестиционного соглашения",
                'comment_en' => "Conclusion of an investment agreement",
                'snoska' => "Рассмотрения обращения составляет 3 рабочих дня",
                'snoska_en' => "Consideration of the application takes 3 working days",
            ],
        ];

        foreach ($data_regl as $item) {
            DB::table("one_win_reglaments")->insert(
                $item
            );
        }

    }
}
