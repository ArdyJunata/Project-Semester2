<?php


class Controller {

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function on()
    {
        $this->ses = 1;
    }

    public function off()
    {
        $this->ses = 0;
    }
}

?>