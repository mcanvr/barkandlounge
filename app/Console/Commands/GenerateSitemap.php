<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Manually create sitemap
        $sitemap = Sitemap::create();
        $blogs = json_decode(file_get_contents(public_path('blogs.json')), true);

        // Static pages
        $sitemap->add('/');

        // Dynamic pages
        foreach ($blogs as $blog) {
            $sitemap->add("/blog/{$blog['slug']}");
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
