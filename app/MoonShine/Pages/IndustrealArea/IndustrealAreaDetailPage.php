<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\IndustrealArea;

use Throwable;
use MoonShine\UI\Fields\Url;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Contracts\UI\ComponentContract;


class IndustrealAreaDetailPage extends DetailPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Text::make("Заголовок", 'title'),
            Text::make("Заголовок (en)", 'title_en'),
            Image::make("Изображение", 'img')->dir('invest_areas'),
            Url::make('Ссылка на управляющую компанию', 'uk_lnk'),
            Text::make("Название управляющей компании", 'uk_name'),
            Text::make("Название управляющей компании (en)", 'uk_name_en'),
            Text::make("Ссылка на кнопке ознакомиться", 'btn_lnk'),
            Number::make("Количество резидентов", 'rezident_count'),
            Text::make("Свободная площадь", 'free_area'),
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
