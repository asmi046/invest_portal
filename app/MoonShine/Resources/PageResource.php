<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Attributes\Icon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page\Page;
use App\MoonShine\Pages\Page\PageIndexPage;
use App\MoonShine\Pages\Page\PageFormPage;
use App\MoonShine\Pages\Page\PageDetailPage;

use MoonShine\Resources\ModelResource;

#[Icon('heroicons.outline.code-bracket-square')]

/**
 * @extends ModelResource<Page>
 */
class PageResource extends ModelResource
{
    protected string $model = Page::class;

    protected string $title = 'Страницы';

    public function pages(): array
    {
        return [
            PageIndexPage::make($this->title()),
            PageFormPage::make(
                $this->getItemID()
                    ? __('moonshine::ui.edit')
                    : __('moonshine::ui.add')
            ),
            PageDetailPage::make(__('moonshine::ui.show')),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
