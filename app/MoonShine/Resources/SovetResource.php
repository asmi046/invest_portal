<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Sovet;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Textarea;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Sovet>
 */
class SovetResource extends ModelResource
{
    protected string $model = Sovet::class;

    protected string $title = 'Инвестиционные советы';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make("Название совета", "title"),
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
                Text::make("Название совета", "title"),
                Text::make("Название совета (en)", "title_en"),
                Text::make("Ссылка", "slug"),

                Text::make("Название положения о совете", "pologenie_title"),
                Text::make("Название положения о совете (en)", "pologenie_title_en"),

                File::make("Положение", "pologenie")->dir('sovets'),


                Json::make('Состав совета', 'sostav')
                ->fields([
                    Position::make(),
                    Text::make('Нименование', 'title')->unescape(),
                    Text::make('Нименование (en)', 'title_en')->unescape(),
                    Textarea::make('Описание', "description"),
                    Textarea::make('Описание (en)', "description_en"),
                    File::make("Файл", "lnk")->dir('sovets'),
                ]),

                Json::make('Рабочий план', 'work_planes')
                ->fields([
                    Position::make(),
                    Text::make('Нименование', 'title')->unescape(),
                    Text::make('Нименование (en)', 'title_en')->unescape(),
                    Textarea::make('Описание', "description"),
                    Textarea::make('Описание (en)', "description_en"),
                    File::make("Файл", "lnk")->dir('sovets'),
                ]),

                Json::make('Протоколы', 'protocols')
                ->fields([
                    Position::make(),
                    Text::make('Нименование', 'title')->unescape(),
                    Text::make('Нименование (en)', 'title_en')->unescape(),
                    Text::make('Год', 'year')->unescape(),
                    Textarea::make('Описание', "description"),
                    Textarea::make('Описание (en)', "description_en"),
                    File::make("Файл", "lnk")->dir('sovets'),
                ]),

                Json::make('Видео заседаний совета', 'video')
                ->fields([
                    Position::make(),
                    Text::make('Нименование', 'title')->unescape(),
                    Text::make('Нименование (en)', 'title_en')->unescape(),
                    Text::make('Год', 'year')->unescape(),
                    Textarea::make('Описание', "description"),
                    Textarea::make('Описание (en)', "description_en"),
                    File::make("Файл", "lnk")->dir('sovets'),
                ]),

                TinyMce::make('Описание проекта', "description"),
                TinyMce::make('Описание проекта  (en)', "description_en"),

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

                Text::make("Название совета", "title"),
                Text::make("Название совета (en)", "title_en"),
                Text::make("Ссылка", "slug"),

                Text::make("Название положения о совете", "pologenie_title"),
                Text::make("Название положения о совете (en)", "pologenie_title_en"),

                File::make("Положение", "pologenie")->dir('sovets'),


                Json::make('Состав совета', 'sostav')
                ->fields([
                    Position::make(),
                    Text::make('Нименование', 'title')->unescape(),
                    Text::make('Нименование (en)', 'title_en')->unescape(),
                    Textarea::make('Описание', "description"),
                    Textarea::make('Описание (en)', "description_en"),
                    File::make("Файл", "lnk")->dir('sovets'),
                ]),

                Json::make('Рабочий план', 'work_planes')
                ->fields([
                    Position::make(),
                    Text::make('Нименование', 'title')->unescape(),
                    Text::make('Нименование (en)', 'title_en')->unescape(),
                    Textarea::make('Описание', "description"),
                    Textarea::make('Описание (en)', "description_en"),
                    File::make("Файл", "lnk")->dir('sovets'),
                ]),

                Json::make('Протоколы', 'protocols')
                ->fields([
                    Position::make(),
                    Text::make('Нименование', 'title')->unescape(),
                    Text::make('Нименование (en)', 'title_en')->unescape(),
                    Text::make('Год', 'year')->unescape(),
                    Textarea::make('Описание', "description"),
                    Textarea::make('Описание (en)', "description_en"),
                    File::make("Файл", "lnk")->dir('sovets'),
                ]),

                Json::make('Видео заседаний совета', 'video')
                ->fields([
                    Position::make(),
                    Text::make('Нименование', 'title')->unescape(),
                    Text::make('Нименование (en)', 'title_en')->unescape(),
                    Text::make('Год', 'year')->unescape(),
                    Textarea::make('Описание', "description"),
                    Textarea::make('Описание (en)', "description_en"),
                    File::make("Файл", "lnk")->dir('sovets'),
                ]),

                TinyMce::make('Описание проекта', "description"),
                TinyMce::make('Описание проекта  (en)', "description_en"),

                Text::make('SEO заголовок', 'seo_title'),
                Textarea::make('SEO описание', 'seo_description'),
        ];
    }

    /**
     * @param Sovet $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'title_en' => ['required'],
            'pologenie_title' => ['required'],
            'pologenie_title_en' => ['required'],
            'pologenie' => ($item->presentation === "")?['required']:[],
        ];
    }
}
