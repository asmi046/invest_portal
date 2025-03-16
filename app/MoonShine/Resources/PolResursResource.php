<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\PolResurs;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Url;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<PolResurs>
 */
class PolResursResource extends ModelResource
{
    protected string $model = PolResurs::class;

    protected string $title = 'Полезные ресурсы';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make("Название рсурса", "title"),
            Url::make("Ссылка", "lnk"),
            Image::make("Картинка", "img")->dir('pol_recurses'),
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
                Text::make("Название рсурса", "title"),
                Url::make("Ссылка", "lnk"),
                Image::make("Картинка", "img")->dir('pol_recurses'),
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
            Text::make("Название рсурса", "title"),
            Url::make("Ссылка", "lnk"),
            Image::make("Картинка", "img")->dir('pol_recurses'),
        ];
    }

    /**
     * @param PolResurs $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'lnk' => ['required'],
            'img' =>($item->img === "")?['required']:[],
        ];
    }
}
