<?php

class Model
{
    private $homePageData = ['title'=>'Home page title', 'content'=>'My content'];

    public function getHomePageData () {
        return $this->homePageData;
    }

    private $articlesPageData = ['title'=>'Articles', 'content'=>'My content'];

    public function getArticlesData () {
        return $this->articlesPageData;
    }

    private $notFoundPageData = ['title'=>'Page not found', 'content'=>'Sorry, something going wrong'];

    public function getNotFoundData () {
        return $this->notFoundPageData;
    }
}