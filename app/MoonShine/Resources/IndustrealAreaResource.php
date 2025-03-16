<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\IndustrealArea;
use App\MoonShine\Pages\IndustrealArea\IndustrealAreaIndexPage;
use App\MoonShine\Pages\IndustrealArea\IndustrealAreaFormPage;
use App\MoonShine\Pages\IndustrealArea\IndustrealAreaDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Pages\Page;

/**
 * @extends ModelResource<IndustrealArea, IndustrealAreaIndexPage, IndustrealAreaFormPage, IndustrealAreaDetailPage>
 */
class IndustrealAreaResource extends ModelResource
{
    protected string $model = IndustrealArea::class;

    protected string $title = 'Индустриальные парки';

    protected string $column = 'title';

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [
            IndustrealAreaIndexPage::class,
            IndustrealAreaFormPage::class,
            IndustrealAreaDetailPage::class,
        ];
    }

    /**
     * @param IndustrealArea $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'title_en' => ['required'],
            'img' => ($item->img === "")?['required']:[],
            'uk_lnk' => ['required'],
            'uk_name' => ['required'],
            'uk_name_en' => ['required'],
            'btn_lnk' => ['required'],
        ];
    }
}
