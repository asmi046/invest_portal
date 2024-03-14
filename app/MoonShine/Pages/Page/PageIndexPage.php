<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Page;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\IndexPage;
use App\MoonShine\Resources\PageResource;
use MoonShine\Fields\Relationships\BelongsTo;

class PageIndexPage extends IndexPage
{
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Заголовок','title'),
            BelongsTo::make(
                'Родительская',
                'parent_page',
                'title',
                resource: new PageResource()
            )->default("Выберите родительскую страницу"),
        ];
    }

    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
