<?php

namespace Noah\Http\Controllers;

use Noah\Documentation;
use Symfony\Component\DomCrawler\Crawler;

class DocsController extends Controller {

    /**
     * Documentation repository.
     * 
     * @var Documentation
     */
    protected $docs;

    /**
     * DocsController constructor.
     *
     * @param Documentation $docs
     */
    public function __construct(Documentation $docs)
    {
        $this->docs = $docs;
    }

    /**
     * Show documentation page.
     * 
     * @param string $page
     * @return mixed
     */
    public function show($page = 'installation')
    {
        $content = $this->docs->get($page);
        
        if (is_null($content)) {
            abort(404);
        }
        
        $title = (new Crawler($content))->filter('h1');
        $title = count($title) ? $title->text() : null;
        
        $index = $this->docs->getIndex();
        
        return view('docs', compact('title', 'content', 'index'));
    }
}
