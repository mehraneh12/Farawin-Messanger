<?php
class model_register extends model{
    function __construct()
    {
        parent::__construct();
    }
    
    
    function insert($post){
        $sql="SELECT * FROM register WHERE username=? ";
        $params=array($post['usernsme']);
        $result=$this->doSelect($sql,$params);
        if(sizeof($result)==0){
            $sql="INSERT INTO `register` (  `username`, `password`, `rpassword`) VALUES ( ?, ?, ?)";
            $params=array($post['username'],md5($post['password']),self::jalali_date(format :"Y/m/d"));
        }$this->doQuery($sql,$params);
    }
}
