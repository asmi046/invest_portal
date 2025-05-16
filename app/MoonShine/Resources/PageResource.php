<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Page\Page;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Textarea;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use Illuminate\Database\Eloquent\Builder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\UI\Components\ActionButton;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;

/**
 * @extends ModelResource<Page>
 */
class PageResource extends ModelResource
{
    protected string $model = Page::class;

    protected string $title = 'Страницы';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make("Заголовок", 'title'),
            Text::make("Заголовок (en)", 'title_en'),
            BelongsTo::make("Родительская", 'parent_page', formatted: 'title', resource: PageResource::class)
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [

            Tabs::make([
                Tab::make('Основная информация', [
                    ID::make(),
                    Text::make("Заголовок", 'title'),
                    Text::make("Заголовок (en)", 'title_en'),
                    Slug::make("Ссылка", 'slug'),
                    BelongsTo::make("Родительская", 'parent_page', formatted: 'title', resource: PageResource::class),
                    Text::make("Шаблон", 'template'),
                    TinyMce::make('Описание', 'description'),
                    TinyMce::make('Описание (en)', 'description_en'),
                ]),
                Tab::make('Изображения', [
                    Image::make("Баннер", 'banner')->dir('page_banners')->removable(),
                    Image::make("Картинка", 'img')->dir('page_images')->removable(),
                    Image::make("Картинка (en)", 'img_en')->dir('page_images')->removable(),
                    Json::make('Галерея', 'images')->fields([
                        Position::make(),
                        Text::make('Название', 'title'),
                        Text::make('Название (en)', 'title_en'),
                        Image::make("Изображение", 'img')->dir('page_inner_img')->removable()
                    ]),
                ]),

                Tab::make('Файлы', [
                    Json::make('Файлы', 'files')->fields([
                        Position::make(),
                        Text::make('Название', 'title'),
                        Text::make('Название (en)', 'title_en'),
                        Textarea::make('Описание', 'description'),
                        Textarea::make('Описание (en)', 'description_en'),
                        File::make("Файл", 'file')->dir('page_files')->removable()
                    ])->removable(),
                ]),

                Tab::make('SEO', [
                    Text::make('SEO заголовок', 'seo_title'),
                    Textarea::make('SEO описание', 'seo_description'),
                ]),
            ]),

            ActionButton::make(
                label: 'Перейти к странице',
                url: route('page', ($this->getItem())?$this->getItem()['slug']:"#"),
            )
            ->success()
            ->blank()

        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make("Заголовок", 'title'),
            Text::make("Заголовок (en)", 'title_en'),
            Slug::make("Ссылка", 'slug'),
            BelongsTo::make("Родительская", 'parent_page', formatted: 'title', resource: PageResource::class)->nullable(),
            Text::make("Шаблон", 'template'),
            Image::make("Баннер", 'banner')->dir('page_banners')->removable(),
            Image::make("Картинка", 'img')->dir('page_images')->removable(),
            Image::make("Картинка (en)", 'img_en')->dir('page_images')->removable(),
            TinyMce::make('Описание', 'description'),
            TinyMce::make('Описание (en)', 'description_en'),
            Json::make('Галерея', 'images')->fields([
                Position::make(),
                Text::make('Название', 'title'),
                Text::make('Название (en)', 'title_en'),
                Image::make("Изображение", 'img')->dir('page_inner_img')
            ]),

            Json::make('Файлы', 'files')->fields([
                Position::make(),
                Text::make('Название', 'title'),
                Text::make('Название (en)', 'title_en'),
                Textarea::make('Описание', 'description'),
                Textarea::make('Описание (en)', 'description_en'),
                File::make("Файл", 'file')->dir('page_files')
            ])->removable(),

            Text::make('SEO заголовок', 'seo_title'),
            Textarea::make('SEO описание', 'seo_description'),
        ];
    }


    protected function filters(): iterable
    {
        return [
            Text::make("Заголовок", 'title'),
            Text::make("Описание", 'description'),
            // BelongsTo::make("Родительская", 'parent_page', formatted: 'title', resource: PageResource::class)
            // ->nullable()
            // ->default(0)
            // // ->onApply(function (Builder $query, mixed $value, BelongsTo $field) {
            // //     // dd($field);
            // //     // $q->where('title', $value);
            // // })
        ];
    }

    /**
     * @param Page $item
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
