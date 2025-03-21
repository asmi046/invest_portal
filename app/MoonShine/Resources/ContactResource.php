<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Contact;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Url;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Contact>
 */
class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    protected string $title = 'Контакты';

    protected string $column = 'phone';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            // Image::make('Фото/лого','img')->dir('contacts'),
            Text::make('Орган', 'organ'),
            Text::make('Адрес', 'adres'),
            Text::make('Контактное лицо', 'person'),
            Text::make('Телефон', 'phone'),
            Text::make('E-mail', 'email'),

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

                Text::make('Обединяющий признак', 'selector'),
                Text::make('Текстовый ID', 'text_id'),

                Text::make('Орган', 'organ'),
                Text::make('Орган (en)', 'organ_en'),

                Text::make('Адрес', 'adres'),
                Text::make('Адрес (en)', 'adres_en'),

                Text::make('Контактное лицо', 'person'),
                Text::make('Контактное лицо (en)', 'person_en'),

                Image::make('Фото/лого','img')->dir('contacts'),

                Text::make('Должность', 'dolg'),
                Text::make('Должность (en)', 'dolg_en'),

                Text::make('Телефон', 'phone'),
                Text::make('E-mail', 'email'),

                Url::make('Ссылка на Vk', 'vk_lnk'),
                Url::make('Ссылка на Telegram', 'tg_lnk'),
                Url::make('Ссылка на Однокласники', 'ok_lnk'),

                Url::make('Адрес сайта', 'web')
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

            Text::make('Обединяющий признак', 'selector'),
            Text::make('Текстовый ID', 'text_id'),

            Text::make('Орган', 'organ'),
            Text::make('Орган (en)', 'organ_en'),

            Text::make('Адрес', 'adres'),
            Text::make('Адрес (en)', 'adres_en'),

            Text::make('Контактное лицо', 'person'),
            Text::make('Контактное лицо (en)', 'person_en'),

            Image::make('Фото/лого','img')->dir('contacts'),

            Text::make('Должность', 'dolg'),
            Text::make('Должность (en)', 'dolg_en'),

            Text::make('Телефон', 'phone'),
            Text::make('E-mail', 'email'),

            Url::make('Ссылка на Vk', 'vk_lnk'),
            Url::make('Ссылка на Telegram', 'tg_lnk'),
            Url::make('Ссылка на Однокласники', 'ok_lnk'),

            Url::make('Адрес сайта', 'web')
        ];
    }



    protected function filters(): iterable
    {
        return [
            // Text::make('Орган', 'organ'),
            Text::make('Контактное лицо', 'person'),
            // Text::make('Телефон', 'phone'),
            // Text::make('E-mail', 'email'),
        ];
    }

    /**
     * @param Contact $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'phone' => ['required']
        ];
    }
}
