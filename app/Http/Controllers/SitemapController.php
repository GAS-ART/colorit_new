<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">' . PHP_EOL;

        $routes = Route::getRoutes();

        $locales = ['ru', 'es']; // Укажите все поддерживаемые языки здесь

        $url = url('/');
        $sitemap .= "\t<url>\n";
        $sitemap .= "\t\t<loc>{$url}</loc>\n";
        foreach ($locales as $locale) {
            //$sitemap .= "\t\t<xhtml:link rel=\"alternate\" hreflang=\"{$locale}\" href=\"{$url}\" />\n";
            if ($locale === 'ru') {
                $altUrl = url('/ru');
            } else {
                $altUrl = url('/');
            }
            $sitemap .= "\t\t<xhtml:link rel=\"alternate\" hreflang=\"{$locale}\" href=\"{$altUrl}\" />\n";
        }
        $sitemap .= "\t</url>\n";

        foreach ($routes as $route) {
            $controllerAction = $route->getActionName();
            $controllerNamespace = 'App\\Http\\Controllers\\Pages\\';

            if (strpos($controllerAction, $controllerNamespace) === 0) {
                foreach ($locales as $locale) {
                    $url = route($route->getName(), ['locale' => $locale]);
                    if (strpos($url, '?locale=es') !== false || strpos($url, '?locale=ru') !== false  || substr($url, -3) === '/es') {
                        continue;
                    }
                    $sitemap .= "\t<url>\n";
                    $sitemap .= "\t\t<loc>{$url}</loc>\n";
                    $sitemap .= "\t\t<xhtml:link rel=\"alternate\" hreflang=\"{$locale}\" href=\"{$url}\" />\n";
                    foreach ($locales as $altLocale) {
                        if ($altLocale !== $locale) {
                            $altUrl = route($route->getName(), ['locale' => $altLocale]);
                            if (substr($altUrl, -3) === '/es') {
                                $altUrl = rtrim($altUrl, '/es');
                            }
                            $sitemap .= "\t\t<xhtml:link rel=\"alternate\" hreflang=\"{$altLocale}\" href=\"{$altUrl}\" />\n";
                        }
                    }
                    $sitemap .= "\t</url>\n";
                }
            }
        }

        $sitemap .= '</urlset>';

        $filename = 'sitemap.xml';
        Storage::disk('public')->put($filename, $sitemap);

        return view('sitemap', ['sitemap' => $sitemap]);

       /*  return Response::make($sitemap, 200, [
            'Content-Type' => 'application/xml',
        ]); */
    }
}
