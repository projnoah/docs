<?php

namespace Noah\Http\Controllers;

use File;
use Symfony\Component\DomCrawler\Crawler;

class PagesController extends Controller {

    /**
     * The available pages.
     * 
     * @var array
     */
    protected $pages = [
        'about'    
    ];

    /**
     * Show pages.
     * 
     * @param $page
     * @return mixed
     */
    public function show($page)
    {
        if (! $this->isAPage($page)) {
            abort(404);
        }
        
        $content = markdown(File::get(resource_path('pages/' . $page . '.md')));

        $title = (new Crawler($content))->filterXPath('//h1');
        $title = count($title) ? $title->text() : null;
        
        return view('pages', compact('content', 'title'));
    }

    /**
     * See if it is an available page.
     * 
     * @param $page
     * @return mixed
     */
    protected function isAPage($page)
    {
        return in_array($page, $this->pages);
    }
}
