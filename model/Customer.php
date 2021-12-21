<?php
    class Customer{
        public $id;
        public $fullName;
        public $phone;
        public $address;
        
        public function __construct($id ,$fullName, $phone, $address)
        {
            $this->id = $id;
            $this->fullName = $fullName;
            $this->phone = $phone;
            $this->address = $address;
        }
    }
?>