<?php

abstract class AbstractController
{
    public function getModel ($model) {
        return new $model;
    }

    public function render ($template, $data){
        $templateData = $data;
        include $template;
    }
}