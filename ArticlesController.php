<?php

class ArticlesController extends AbstractController
{
    public function articles () {
        $modelData = $this->getModel(Model::class);
        $articlesData = $modelData->getArticlesData();
        $this->render('views/articles.php', $articlesData);

        /*
         render ($template, $data)
           $templateData = $data;
           include $template;
        */

        /*
        $templateData =['title'=>'Home page title', 'content'=>'My content'];
         <h1><? $templateData['title'] ?></h1>
         <p><? $templateData['content'] ?></p>
        */

    }

}