<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Option;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use Illuminate\Validation\Rule;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Textarea;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\UI\ActionButtonContract;

/**
 * @extends ModelResource<Option>
 */
class OptionResource extends ModelResource
{
    protected string $model = Option::class;

    protected string $title = 'Опции сайта';

    protected string $column = 'title';


    protected function modifyCreateButton(ActionButtonContract $button): ActionButtonContract
    {
        return $button->canSee(fn() =>false);
    }

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make("Ключ", "name"),
            Select::make("Тип", "type")->options([
                'plan' => 'Текст',
                'rich' => 'HTML',
                'photo' => 'Фото',
            ]),
            Text::make("Название", "title"),
            Text::make("Значение", "value")->changeFill(
                function ($article, $ctx) {
                    return strip_tags(mb_strimwidth($article->value, 0, 80, "..."));
                }
            )
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        $components = [
            ID::make(),
            Text::make("Ключ", "name")->readonly(),
            Select::make("Тип", "type")->options([
                'plan' => 'Текст',
                'rich' => 'HTML',
                'photo' => 'Фото',
            ]),
            Text::make("Название", "title")
        ];

        $item = $this->getItem();

        if ($item) {
            if ( $item->type === "plan")
                $components[] = Textarea::make("Значение", "value");
            elseif ($item->type === "rich")
                $components[] = TinyMce::make("Значение", "value");
            else
                $components[] = Image::make("Значение", "value")->dir('options');

        }

        return [
            Box::make($components)
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        $components = [
            ID::make(),
            Text::make("Ключ", "name")->readonly(),
            Select::make("Тип", "type")->options([
                'plan' => 'Текст',
                'rich' => 'HTML',
                'photo' => 'Фото',
            ]),
            Text::make("Название", "title")
        ];

        $item = $this->getItem();

        if ($item) {
            if ( $item->type === "plan")
                $components[] = Textarea::make("Значение", "value");
            elseif ($item->type === "rich")
                $components[] = TinyMce::make("Значение", "value");
            else
                $components[] = Image::make("Значение", "value")->dir('options');

        }

        return $components;
    }

    /**
     * @param Option $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => [
                'required',
                Rule::unique('options')->ignore($item->id)
            ],
            'type' => ['required'],
            'title' => ['required'],
            'value' => ['required'],
        ];
    }


    protected function filters(): iterable
    {
        return [
            Text::make('Название', 'title'),
            Text::make('Значение', 'value'),
        ];
    }
}
