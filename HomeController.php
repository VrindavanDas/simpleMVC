<?php

class HomeController extends AbstractController
{
    public function home () {
        $modelData = $this->getModel(Model::class);
        $homePageData = $modelData->getHomePageData();
        $this->render('views/home.php', $homePageData);

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