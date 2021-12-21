<?php
    require_once("dbconn.php");
    class AccountRepository{
        public $con;
        public function __construct()
        {
            $this->con = new mysqli(DbConfig::$host, DbConfig::$username, DbConfig::$passwork , DbConfig::$db);
        }
        public function login($username, $password){
            $sql = "select * from tbl_user where tbl_user.username = '$username' and tbl_user.password = '$password' ";
			$query = mysqli_query($this->con, $sql);
            return $query;
        }
    }
