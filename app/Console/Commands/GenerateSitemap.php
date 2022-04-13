<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (! app()->environment('production')) {
            return 0;
        }

        // modify this to your own needs
        SitemapGenerator::create(config('app.url'))
            ->writeToFile(public_path('sitemap.xml'));

        // ping search engines
        $sitemapUrl = config('app.url').'/sitemap.xml';
        Http::get('https://www.google.com/ping?sitemap='.$sitemapUrl);
        Http::get('https://www.bing.com/ping?siteMap='.$sitemapUrl);

        return 0;
    }
}
