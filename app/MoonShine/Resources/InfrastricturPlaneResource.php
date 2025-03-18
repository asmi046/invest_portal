<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\File;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use App\Models\InfrastricturPlane;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<InfrastricturPlane>
 */
class InfrastricturPlaneResource extends ModelResource
{
    protected string $model = InfrastricturPlane::class;

    protected string $title = 'Инфраструктурные проекты';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Название','title'),
                Text::make('Название (en)','title_en'),
                Number::make('Месяц','month'),
                Number::make('Год','year'),
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
                Text::make('Название','title'),
                Text::make('Название (en)','title_en'),
                Number::make('Месяц','month')->max(12),
                Number::make('Год','year'),
                File::make('Файл отчета', 'file')->dir('ifrastr_planes')
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
            Text::make('Название','title'),
            Text::make('Название (en)','title_en'),
            Number::make('Месяц','month')->max(12),
            Number::make('Год','year'),
            File::make('Файл отчета', 'file')->dir('ifrastr_planes')
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Название','title'),
            Number::make('Месяц','month')->max(12),
            Number::make('Год','year'),
        ];
    }

    /**
     * @param InfrastricturPlane $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'month' => ['required'],
            'year' => ['required'],
        ];
    }
}
