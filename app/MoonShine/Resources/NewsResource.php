<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\News;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<News>
 */
class NewsResource extends ModelResource
{
    protected string $model = News::class;

    protected string $title = 'Новости';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Заголовок новости', 'title'),
            Date::make('Дата публикации', 'public_time')->format('d.m.Y H:i'),
            Image::make('Картинка', 'img')->dir('portal_news'),
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
                Text::make('Заголовок новости', 'title'),
                Slug::make('Ссылка', 'slug')->from('title'),
                Date::make('Дата публикации', 'public_time')->format('d.m.Y H:i'),
                Image::make('Картинка', 'img')->dir('portal_news'),
                TinyMce::make('Текст новости', "description"),
            ]),
            Box::make([
                Text::make('Заголовок SEO', 'seo_title'),
                Text::make('Описание SEO', 'seo_description'),
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
            Text::make('Заголовок новости', 'title'),
            Slug::make('Ссылка', 'slug')->from('title'),
            Date::make('Дата публикации', 'public_time')->format('d.m.Y H:i'),
            Image::make('Картинка', 'img')->dir('portal_news'),
            TinyMce::make('Текст новости', "description"),
            Text::make('Заголовок SEO', 'seo_title'),
            Text::make('Описание SEO', 'seo_description'),
        ];
    }

    /**
     * @param News $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'public_time' => ['required'],
            'img' =>($item->img === "")?['required']:[],
        ];
    }
}
