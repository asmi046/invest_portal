<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Page;

use App\Models\Page\Page;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\FormPage;
use App\MoonShine\Resources\PageResource;
use MoonShine\Fields\Relationships\HasOne;
use MoonShine\Fields\Relationships\BelongsTo;

class PageFormPage extends FormPage
{
    public function fields(): array
    {
        return [
            Text::make('Заголовок', 'title'),
            BelongsTo::make(
                'Родительская',
                'parent_page',
                'title',
                resource: new PageResource()
            )->default("Выберите родительскую страницу"),
            TinyMce::make('Текст', 'description'),
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
