<?php


use Phalcon\Mvc\Controller;

class CheckController extends Controller
{
    public function checkconfigAction(){
        $config = $this->di->get("config");
        $this->view->appName = $config->get("app")->get("name");
        $this->view->date = $config->get("app")->get("timezone");
        $this->view->timezone = $config->get("app")->get("time");
        $this->view->host = $config->get("database")->get("host");
        $this->view->username = $config->get("database")->get("username");
    }
}