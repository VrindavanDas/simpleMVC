<?php

class NotFoundController extends AbstractController
{
    public function pageNotFound () {
        $modelData = $this->getModel(Model::class);
        $notFoundData = $modelData->getNotFoundData();
        $this->render('views/notFound.php', $notFoundData);

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