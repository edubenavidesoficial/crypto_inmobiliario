<?php

namespace App\Http\Controllers;


class SiteMapController extends Controller
{
    //

    private $siteMap;

    public function index()
    {
        $this->siteMap = new SiteMapController();

        $this->addUniqueRoutes();
        $this->addArticles();
        $this->addCategories();
        $this->addDynamicPages();
        $this->addTags();
        $this->addProjects();
        $this->addProfilePages();

        return response($this->siteMap->build(), 200)
            ->header('Content-Type', 'text/xml');
    }

    private function addUniqueRoutes()
    {
        // ...
    }

    private function addProfilePages()
    {
        // ...
    }

    private function addArticles()
    {
        // ...
    }

    private function addCategories()
    {
        // ...
    }

    private function addTags()
    {
        // ...
    }

    private function addProjects()
    {
        // ...
    }

    private function addDynamicPages()
    {
        // ...
    }
}

