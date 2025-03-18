<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MoonShine\Pages\Page\PageIndexPage;
use App\MoonShine\Resources\OptionResource;
use App\MoonShine\Resources\MoonShineUserResource;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use App\MoonShine\Resources\IndustrealAreaResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\BannerResource;
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
use App\MoonShine\Resources\SovetResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                OptionResource::class,
                IndustrealAreaResource::class,
                PageResource::class,
                BannerResource::class,
                RegionParametrResource::class,
                NewsResource::class,
                PolResursResource::class,
                AreaResource::class,
                ContactResource::class,
                InvestDocumentResource::class,
                MenuResource::class,
                InvestProjectResource::class,
                InfrastricturPlaneResource::class,
                SupportResource::class,
                ProjectReestrResource::class,
                SovetResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
