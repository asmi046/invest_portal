<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Area;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Url;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Area>
 */
class AreaResource extends ModelResource
{
    protected string $model = Area::class;

    protected string $title = 'Земельные участки';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Картинка карты', 'img')->dir('portal_areas'),
            Text::make('Имя участка', 'name'),
            Text::make('Имя участка (en)', 'name_en'),
            Text::make('Кадастровый №', 'cadastral'),
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
                Text::make('Имя участка', 'name'),
                Text::make('Имя участка (en)', 'name_en'),
                Text::make('Кадастровый №', 'cadastral'),
                Url::make('Ссылка на карту', 'lnk'),
                Image::make('Картинка карты', 'img')->dir('portal_areas'),
                TinyMce::make('Описание', 'description'),
                TinyMce::make('Описание (en)', 'description_en'),
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
            Text::make('Имя участка', 'name'),
            Text::make('Имя участка (en)', 'name_en'),
            Text::make('Кадастровый №', 'cadastral'),
            Url::make('Ссылка на карту', 'lnk'),
            Image::make('Картинка карты', 'img')->dir('portal_areas'),
            TinyMce::make('Описание', 'description'),
            TinyMce::make('Описание (en)', 'description_en'),
        ];
    }


    protected function filters(): iterable
    {
        return [
            Text::make('Имя участка', 'name'),
            Text::make('Кадастровый №', 'cadastral'),
        ];
    }

    /**
     * @param Area $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required'],
            'cadastral' => ['required'],
            'description' => ['required'],
            'lnk' => ['required'],
        ];
    }
}
