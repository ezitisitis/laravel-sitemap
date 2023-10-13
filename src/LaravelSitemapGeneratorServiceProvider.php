<?php

namespace Ezitisitis\LaravelSitemapGenerator;

use Ezitisitis\LaravelSitemapGenerator\Commands\SitemapGenerate;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSitemapGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-sitemap-generator')
            ->hasConfigFile()
            ->hasCommands([
                SitemapGenerate::class
            ]);
    }
}
