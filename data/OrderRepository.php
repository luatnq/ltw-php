<?php
    require_once('dbconn.php');
    
    class OrderRepository{
        public $con;
        public function __construct()
        {
            $this->con = new mysqli(DbConfig::$host, DbConfig::$username, DbConfig::$passwork , DbConfig::$db);
        }
        public function getCustomers(){
            $sql = "SELECT * from tbl_customer";
            $query = mysqli_query($this->con, $sql);
            return $query;
        }

        public function getProducts(){
            $sql = "SELECT * from tbl_product";
            $query = mysqli_query($this->con, $sql);
            return $query;
        }

        public function getPriceProduct($id){
            $sql = "SELECT price FROM tbl_product WHERE id = '$id'";
            $query = mysqli_query($this->con, $sql);
            return $query;
        }
    
        public function createOrder($model){
            $sql = "INSERT INTO tbl_donhang(ma_don_hang, created_date, user_id, price, status, is_delete, product_id, customer_id)
                    values('$model->maDh', NOW(), $model->user_id, $model->price, $model->status, $model->isDeleted, $model->product_id, $model->customer_id)";
            $query = mysqli_query($this->con, $sql);
            if($query){
                return "Thêm mới đơn hàng thành công";
            }
            else{
                return "Error: " . $sql . "<br>" . mysqli_error($this->con);
            }
        }
        public function getAll(){
            $sql = "SELECT o.ma_don_hang, u.username, o.created_date, o.price, o.status 
                        FROM tbl_donhang as o 
                        LEFT JOIN tbl_user as u on o.user_id = u.id
                        WHERE o.is_delete = 0 
                        ORDER BY o.created_date DESC";
            $query = mysqli_query($this->con, $sql);
            $response = new ResponseSearch(1, 0, $query);
            return $response;
        }

        public function handleOrder($id, $type){
            if($type == 1){
                $sql = "UPDATE tbl_donhang 
                        SET status = 1
                        WHERE id = $id ";
                $query = mysqli_query($this->con, $sql);
                if($query){
                    return "Duyệt đơn hàng thành công!";
                }
                else{
                    return "Error: " . $sql . "<br>" . mysqli_error($this->con);
                }
            }else if($type == 2){
                $sql = "UPDATE tbl_donhang 
                        SET is_delete = 1
                        WHERE id = $id ";
                $query = mysqli_query($this->con, $sql);
                if($query){
                    return "Xóa đơn hàng thành công!";
                }
                else{
                    return "Error: " . $sql . "<br>" . mysqli_error($this->con);
                }
            }
            else {
                $sql = "UPDATE tbl_donhang
                        SET status = 2
                        WHERE id = $id";
                $query = mysqli_query($this->con, $sql);
                if($query){
                    return "Từ chối đơn hàng thành công!";
                }
                else{
                    return "Error: " . $sql . "<br>" . mysqli_error($this->con);
                }
            }
        }

        public function getOrderManger($name){
            $sql = "SELECT o.ma_don_hang, u.full_name, o.created_date, o.price, o.status, o.id 
                        FROM tbl_donhang as o 
                        LEFT JOIN tbl_customer as u on o.customer_id = u.id
                        WHERE NOT (o.status = 3 or o.status = 1)
                        AND o.is_delete = 0
                        AND ('$name' is null or u.full_name like '%$name%')
                        ORDER BY o.status, o.created_date DESC ";

            $query = mysqli_query($this->con, $sql);
            $response = new ResponseSearch(1, 0, $query);
            return $response;
        }

        public function getNumberOrderByMonth($month){
            $sql = "SELECT * FROM `tbl_donhang` WHERE MONTH(created_date) = '$month' ";
            $query = mysqli_query($this->con, $sql);
            return $query;
        }

        public function getOrderDetail($id){
            $sql = "SELECT * FROM tbl_donhang as o WHERE o.id = '$id'  ";
            $query = mysqli_query($this->con, $sql);
            return $query; 

        }

        public function updateOrder($id, $customer_id, $product_id, $quantity, $price){
            $sql = "UPDATE tbl_donhang 
                    set customer_id = '$customer_id' , product_id = '$product_id', price = '$price', amount = '$quantity'
                    where id = '$id' ";
            $query = mysqli_query($this->con, $sql);
            if($query){
                return "Cập nhật đơn hàng thành công!";
            }
            else{
                return "Error: " . $sql . "<br>" . mysqli_error($this->con);
            }
        }
    }
?>