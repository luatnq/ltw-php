<?php
    class User{
        public $id;
        public $maNv;
        public $fullName;
        public $username;
        public $email;
        public $phone;
        public $password;
        public $role;
        public $isDeleted;
        public function __construct($id ,$fullName, $email, $phone, $role, $isDeleted, $maNv, $password, $username)
        {
            $this->id = $id;
            $this->fullName = $fullName;
            $this->email = $email;
            $this->phone = $phone;
            $this->role = $role;
            $this->isDeleted = $isDeleted;
            $this->maNv = $maNv;
            $this->password = $password;
            $this ->username = $username;
        }
    }
?>