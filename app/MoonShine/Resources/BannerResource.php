<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Banner;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use Illuminate\Validation\Rule;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Position;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Banner>
 */
class BannerResource extends ModelResource
{
    protected string $model = Banner::class;

    protected string $title = 'Баннер';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Картинка', 'img')->dir('slider'),
            Text::make('Заголовок', 'title'),
            Text::make('Заголовок (en)', 'title_en'),
            Number::make('Порядок', 'order'),
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
                Number::make('Порядок', 'order'),
                Image::make('Картинка', 'img')->dir('slider'),
                Text::make('Заголовок', 'title')->unescape()->required(),
                Text::make('Заголовок (en)', 'title_en')->unescape(),
                Json::make('Цыфры', 'params')
                ->fields([
                    Position::make(),
                    Text::make('Значение', 'cerrecter')->unescape(),
                    Text::make('Значение (en)', 'cerrecter_en')->unescape(),
                    Text::make('Название', 'title')->unescape(),
                    Text::make('Название (en)', 'title_en')->unescape(),
                ])
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
        ];
    }

    /**
     * @param Banner $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        // dd($item->img);
        return [
            'title' => ['required'],
            'img' =>($item->img === "")?['required']:[],
            //  [

            //     // 'required',
            //     // Rule::required()->ignore($item->id)
            // ],

            'json' => ['json'],
        ];
    }
}
