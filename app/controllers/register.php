<?php
class register extends controller{
    public $checklogin='';
 function __construct() {
    parent::__construct();
    if($this->checklogin != FALSE){
        header("Location:".URL);
    }
}

function index(){
    $this->view(viewUrl:'register/index');
}

function insert_data(){
    $this->model->insert($_POST);
}
}
?>