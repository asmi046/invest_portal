<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\UI\Fields\ID;
use App\Models\InvestProject;

use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Position;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<InvestProject>
 */
class InvestProjectResource extends ModelResource
{
    protected string $model = InvestProject::class;

    protected string $title = 'Инвестиционные проекты';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение', 'img')->dir('invest-project'),
            Text::make('Название', 'title'),
            Slug::make('Ссылка', 'slug')->from('title'),
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
                Text::make('Название', 'title'),
                Text::make('Название (en)', 'title_en'),
                Slug::make('Ссылка', 'slug')->from('title'),
                Image::make('Изображение', 'img')->dir('invest-project'),
                Json::make('Файлы', 'files')->fields([
                    Position::make(),
                    Text::make('Название', 'title'),
                    Text::make('Название (en)', 'title_en'),
                    File::make("Файл", 'file')->dir('invest-project')
                ]),
                TinyMce::make('Описание', "description"),
                TinyMce::make('Описание (en)', "description_en"),
            ]),
            Box::make([
                Text::make('SEO заголовок', 'seo_title'),
                Text::make('SEO описание', 'seo_description'),
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
            Text::make('Название', 'title'),
            Text::make('Название (en)', 'title_en'),
            Slug::make('Ссылка', 'slug')->from('title'),
            Image::make('Изображение', 'img')->dir('invest-project'),
            Json::make('Файлы', 'files')->fields([
                Position::make(),
                Text::make('Название', 'title'),
                Text::make('Название (en)', 'title_en'),
                File::make("Файл", 'file')->dir('invest-project')
            ]),
            TinyMce::make('Описание', "description"),
            TinyMce::make('Описание (en)', "description_en"),
            Text::make('SEO заголовок', 'seo_title'),
            Text::make('SEO описание', 'seo_description')
        ];
    }


    protected function filters(): iterable
    {
        return [
            Text::make('Название', 'title'),
            Text::make('Описание', "description"),
        ];
    }

    /**
     * @param InvestProject $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'title_en' => ['required'],
        ];
    }
}
