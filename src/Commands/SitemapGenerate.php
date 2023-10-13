<?php

namespace Ezitisitis\LaravelSitemapGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Spatie\Sitemap\SitemapGenerator;

class SitemapGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SitemapGenerator::create(Config::get('app.url'))
            ->writeToFile(Config::get('sitemap-generator.save_to'));
    }
}
