<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\UI\Fields\ID;
use App\Models\ProjectReestr;

use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Textarea;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<ProjectReestr>
 */
class ProjectReestrResource extends ModelResource
{
    protected string $model = ProjectReestr::class;

    protected string $title = 'Реестр инвестиционных проектов';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make("Картинка", "img")->dir('project_reestr'),
            Text::make("Название", "title"),
            Text::make("Место расположение", "location"),
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
                Text::make("Название", "title"),
                Text::make("Название (en)", "title_en"),

                Text::make("Ссылка", "slug"),
                Image::make("Картинка", "img")->dir('project_reestr'),
                File::make("Файл презентации", "presentation")->dir('project_reestr'),
                Select::make('Состояние', 'state')
                ->options([
                    'Планируемый' => 'Планируемый',
                    'Реализуемые' => 'Реализуемые',
                    'Реализованный' => 'Реализованный',
                ]),
                Text::make("Место расположение", "location"),

                Text::make("Название инвестора", "investor"),
                Text::make("Название инвестора (en)", "investor_en"),

                Text::make("Период реализации проекта", "period"),
                Text::make("Период реализации проекта (en)", "period_en"),

                Text::make("Стоимость", "price"),
                Number::make("Рабочих мест", "work_places"),

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

            Text::make("Название", "title"),
            Text::make("Название (en)", "title_en"),

            Text::make("Ссылка", "slug"),
            Image::make("Картинка", "img")->dir('project_reestr'),
            File::make("Файл презентации", "presentation")->dir('project_reestr'),
            Select::make('Состояние', 'state')
            ->options([
                'Планируемый' => 'Планируемый',
                'Реализуемые' => 'Реализуемые',
                'Реализованный' => 'Реализованный',
            ]),
            Text::make("Место расположение", "location"),

            Text::make("Название инвестора", "investor"),
            Text::make("Название инвестора (en)", "investor_en"),

            Text::make("Период реализации проекта", "period"),
            Text::make("Период реализации проекта (en)", "period_en"),

            Text::make("Стоимость", "price"),
            Number::make("Рабочих мест", "work_places"),

            TinyMce::make('Описание проекта', "description"),
            TinyMce::make('Описание проекта  (en)', "description_en"),

            Text::make('SEO заголовок', 'seo_title'),
            Textarea::make('SEO описание', 'seo_description'),
        ];
    }

    /**
     * @param ProjectReestr $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'state' => ['required'],
            'investor' => ['required'],
            'price' => ['required'],
        ];
    }
}
