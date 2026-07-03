<?php
namespace Luffyzhao\LaravelBoostTraeExtension;

use Illuminate\Support\ServiceProvider;
use Laravel\Boost\Boost;
use Laravel\Boost\Install\Agents\Trae;

class TraeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Boost::registerAgent('trae', Trae::class);
    }
}