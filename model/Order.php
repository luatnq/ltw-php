<?php 
    class Order{
        public $id;
        public $maDh;
        public $customer_id;
        public $product_id;
        public $user_id;
        public $status;
        public $createDate;
        public $price;
        public $quantity;
        public $isDeleted;
        public function __construct($customer_id, $product_id, $user_id, $price, $quantity)
        {
            $this->customer_id = $customer_id;
            $this->product_id = $product_id;
            $this -> quantity = $quantity;
            $this->user_id = $user_id;
            $this->status = 0;
            $this->createDate = date("Y/m/d");
            $this -> maDh = rand(1, 1000000);
            $this->price = $price;
            $this->isDeleted = 0;
        }
    }
?>