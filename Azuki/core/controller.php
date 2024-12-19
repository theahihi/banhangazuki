<?php

class controller {
    public function model($model) {
        require_once 'app/Models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = NULL) {
    if (is_array($data)) {
        extract($data);
    }     
        require_once 'app/views/' . $view . '.php';
    }
    
}
?>