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
=======
    function insert_data($post)
    {
        $sql = "SELECT * FROM tbl_users WHERE username=?";
        $params = array($post['username']);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) == 0) {
            if($post['password']!=$post['confirm_password']){
                echo "error";
            }
            $sql = "INSERT INTO tbl_users (username,password,register_date) VALUES (?,?,?)";
            $params = array($post['username'], md5($post['password']), self::jalali_date("Y/m/d"));
            $this->doQuery($sql, $params);

            echo "ok";
        } else {
            echo "error";
        }
    }

}
>>>>>>> d681531b2d83c682e208a6083c89acb2e9199b95
