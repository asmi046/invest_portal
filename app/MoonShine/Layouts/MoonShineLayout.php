<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Laravel\Components\Fragment;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\OptionResource;
use App\MoonShine\Resources\PageResource;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};
use App\MoonShine\Resources\IndustrealAreaResource;
use App\MoonShine\Resources\BannerResource;
use MoonShine\MenuManager\MenuGroup;
use App\MoonShine\Resources\RegionParametrResource;
use App\MoonShine\Resources\NewsResource;
use App\MoonShine\Resources\PolResursResource;
use App\MoonShine\Resources\AreaResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\InvestDocumentResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\InvestProjectResource;
use App\MoonShine\Resources\InfrastricturPlaneResource;
use App\MoonShine\Resources\SupportResource;
use App\MoonShine\Resources\ProjectReestrResource;

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuItem::make('Меню', MenuResource::class)->icon('bars-3-bottom-left'),

            MenuGroup::make('Контент', [
                MenuItem::make('Индустриальные парки', IndustrealAreaResource::class),
                MenuItem::make('Земельные участки', AreaResource::class),
                MenuItem::make('Меры поддержки', SupportResource::class),
                MenuItem::make('Инвестиционные проекты', InvestProjectResource::class),
                MenuItem::make('Реестр инвестпроектов', ProjectReestrResource::class),
                MenuItem::make('Инфраструктурные проекты', InfrastricturPlaneResource::class),
                MenuItem::make('Документы', InvestDocumentResource::class),
                MenuItem::make('Баннеры', BannerResource::class),
                MenuItem::make('Показатели региона', RegionParametrResource::class),
                MenuItem::make('Полезные ресурсы', PolResursResource::class),
                MenuItem::make("Опции", OptionResource::class),
                MenuItem::make('Контакты', ContactResource::class),
            ])->icon('circle-stack'),

            MenuItem::make('Новости', NewsResource::class)->icon('chat-bubble-bottom-center-text'),

            MenuItem::make("Страницы", PageResource::class)->icon('document-text'),

            ...parent::menu(),

            MenuItem::make(
                static fn() => __('Сброс кеша'),
                fn() => route('cache_clear'),
            )->icon('arrow-path-rounded-square'),




            MenuItem::make('ProjectReestrs', ProjectReestrResource::class),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return Layout::make([
            Html::make([
                $this->getHeadComponent(),
                Body::make([
                    Wrapper::make([
                        // $this->getTopBarComponent(),
                        $this->getSidebarComponent(),

                        Div::make([
                            Fragment::make([
                                Flash::make(),

                                $this->getHeaderComponent(),

                                Content::make($this->getContentComponents()),

                                // $this->getFooterComponent(),
                            ])->class('layout-page')->name(self::CONTENT_FRAGMENT_NAME),
                        ])->class('flex grow overflow-auto')->customAttributes(['id' => self::CONTENT_ID]),
                    ]),
                ]),
            ])
                ->customAttributes([
                    'lang' => $this->getHeadLang(),
                ])
                ->withAlpineJs()
                ->withThemes(),
        ]);
    }
}
