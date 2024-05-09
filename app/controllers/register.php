<?php
<<<<<<< HEAD
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
=======

class register extends  Controller
{
    public $checkLogin = '';

    function __construct()
    {
        parent::__construct();
        if ($this->checkLogin != FALSE) {
            header("Location:" . URL);
        }
    }

    function index()
    {
        $this->view('register/index');
    }
    function insert_data()
    {
        $this->model->insert_data($_POST);
    }

}
>>>>>>> d681531b2d83c682e208a6083c89acb2e9199b95
