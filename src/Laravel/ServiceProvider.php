<?php

declare(strict_types=1);

namespace Upmind\ProvisionExample\Category\Cloudflare\Laravel;

use Upmind\ProvisionBase\Laravel\ProvisionServiceProvider;
use Upmind\ProvisionExample\Category\Cloudflare\Cloudflare;
use Upmind\ProvisionExample\Category\Cloudflare\ProviderFoo;
use Upmind\ProvisionExample\Category\Cloudflare\ProviderBar;

class ServiceProvider extends ProvisionServiceProvider
{
    /**
     * Bind Cloudflare Category and its Providers.
     */
    public function boot()
    {
        $this->bindCategory('cloudflare', Cloudflare::class);
    }
}
