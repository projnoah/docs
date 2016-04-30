<?php

namespace Noah;

use Illuminate\Cache\Repository;
use Illuminate\Filesystem\Filesystem;

class Documentation {

    /**
     * Filesystem implementation.
     *
     * @var Filesystem
     */
    private $files;

    /**
     * Cache implementation.
     *
     * @var Repository
     */
    private $cache;

    /**
     * Documentation constructor.
     *
     * @param Filesystem $files
     * @param Repository $cache
     */
    public function __construct(Filesystem $files, Repository $cache)
    {
        $this->files = $files;
        $this->cache = $cache;
    }

    /**
     * Get documentation indexes.
     * 
     * @return mixed
     */
    public function getIndex()
    {
        return $this->get('index');
    }

    /**
     * Get documentation page.
     * 
     * @param string $page
     * @return mixed
     */
    public function get($page = 'installation')
    {
        return $this->cache->remember("docs.{$page}", 30, function() use ($page) {
            $path = resource_path("docs/{$page}.md");

            if ($this->files->exists($path)) {
                return markdown($this->files->get($path));
            }

            return null;
        });
    }
}
