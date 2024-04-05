<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\BrowserKit\HttpBrowser;

class ApiController extends Controller
{
    protected $browser;

    public function __construct()
    {
        $this->browser = new HttpBrowser();
    }

    public function scrape($url)
    {

        // $browser = new HttpBrowser();
        $crawler = $this->browser->request('GET', $url);

        $links = $crawler->filter('h2')->filter('a')->each(function ($node) {
            return $node->text();
        });

        return response()->json($links);
    }
}
