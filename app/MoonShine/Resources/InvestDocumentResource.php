<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\File;

use MoonShine\UI\Fields\Text;
use App\Models\InvestDocument;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<InvestDocument>
 */
class InvestDocumentResource extends ModelResource
{
    protected string $model = InvestDocument::class;

    protected string $title = 'Документы';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make("Название документа", "title"),
            Text::make("Раздел", "subtype"),
            File::make("Файл", 'file')->dir('portal_documents')
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
                Text::make("Название документа", "title"),
                Text::make("Название документа (en)", "title_en"),

                Text::make("Раздел", "subtype"),
                Text::make("Раздел (en)", "subtype_en"),

                File::make("Файл", 'file')->dir('portal_documents')
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

            Text::make("Название документа", "title"),
            Text::make("Название документа (en)", "title_en"),

            Text::make("Раздел", "subtype"),
            Text::make("Раздел (en)", "subtype_en"),

            File::make("Файл", 'file')->dir('portal_documents')

        ];
    }



    protected function filters(): iterable
    {
        return [
            Text::make("Название документа", "title"),
            Text::make("Раздел", "subtype")
        ];
    }

    /**
     * @param InvestDocument $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'subtype' => ['required'],
            'file' => ($item->file === "")?['required']:[],
        ];
    }
}
