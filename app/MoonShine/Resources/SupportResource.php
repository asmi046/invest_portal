<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Support;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Textarea;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Support>
 */
class SupportResource extends ModelResource
{
    protected string $model = Support::class;

    protected string $title = 'Меры поддержки';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение', 'img')->dir('support_m'),
            Text::make('Название', 'title'),
            Text::make('Тип', 'type'),
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
                Text::make('Тип', 'type'),
                Image::make('Изображение', 'img')->dir('support_m'),
                Image::make('Презентация', 'inner_img')->dir('support_m'),
                Image::make('Изображение (en)', 'inner_img_en')->dir('support_m'),
                TinyMce::make('Краткое описание', 'short_description'),
                TinyMce::make('Краткое описание (en)', 'short_description_en'),
                TinyMce::make('Описание', 'description'),
                TinyMce::make('Описание (en)', 'description_en'),

            ]),

            Box::make([
                Text::make('SEO заголовок', 'seo_title'),
                Textarea::make('SEO описание', 'seo_description'),
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
        ];
    }


    protected function filters(): iterable
    {
        return [
            Text::make('Название', 'title'),
            Text::make('Тип', 'type'),
        ];
    }

    /**
     * @param Support $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'type' => ['required'],
            'short_description' => ['required'],
        ];
    }
}
