<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Page;

use App\Models\Page\Page;
use MoonShine\Fields\File;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use Illuminate\Support\Str;
use MoonShine\Fields\Field;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Position;
use Illuminate\Http\UploadedFile;
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
            Json::make('Вложенные файлы', 'files')
            ->fields([
                Position::make(),
                Text::make('Заголовок', 'title'),
                Text::make('Описание', 'description'),
                File::make('Файл', 'file')
                    ->disk('public')
                    ->dir('page_files')
                    ->removable()
                    ->customName(fn(UploadedFile $file, Field $field) =>  "pf_".Str::random(5) . "_". $file->getClientOriginalName())
                    ->allowedExtensions(['pdf', 'doc', 'docx', 'xlsx','jpg','webp']),
            ]),
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
