<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;

use App\Models\RegionParametr;
use MoonShine\UI\Fields\Select;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<RegionParametr>
 */
class RegionParametrResource extends ModelResource
{
    protected string $model = RegionParametr::class;

    protected string $title = 'Показатели региона';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make("Тип параметра", "type"),
            Text::make("Название параметра", "parametr_name"),
            Text::make("Название параметра (en)", "parametr_name_en"),
            Text::make("Значение параметра", "parametr"),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Select::make("Направление изменения", "direction")->options([
                    1 => 'Ростем',
                    0 => 'Падаем',
                ]),
                Text::make("Тип параметра", "type"),
                Text::make("Тип параметра (en)", "type_en"),

                Text::make("Значение параметра", "parametr"),
                Text::make("Значение параметра (en)", "parametr_en"),

                Text::make("На какую дату парамет", "data_param"),
                Text::make("На какую дату парамет (en)", "data_param_en"),

                Text::make("Название параметра", "parametr_name"),
                Text::make("Название параметра (en)", "parametr_name_en"),

            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Select::make("Направление изменения", "direction")->options([
                1 => 'Ростем',
                0 => 'Падаем',
            ]),

            Text::make("Тип параметра", "type"),
            Text::make("Тип параметра (en)", "type_en"),

            Text::make("Значение параметра", "parametr"),
            Text::make("Значение параметра (en)", "parametr_en"),

            Text::make("На какую дату парамет", "data_param"),
            Text::make("На какую дату парамет (en)", "data_param_en"),

            Text::make("Название параметра", "parametr_name"),
            Text::make("Название параметра (en)", "parametr_name_en"),
        ];
    }

    /**
     * @param RegionParametr $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            "type" => ['required'],
            "parametr" => ['required'],
            "data_param" => ['required'],
            "parametr_name" => ['required'],
        ];
    }


    protected function filters(): iterable
    {
        return [
            Text::make('Тип параметра', 'type'),
            Text::make('Название параметра', 'parametr_name'),
        ];
    }
}
