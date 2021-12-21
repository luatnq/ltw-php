<?php 
    require_once('dbconn.php');

    class UserRepository {
        public $con;
        public function __construct()
        {
            $this->con = new mysqli(DbConfig::$host, DbConfig::$username, DbConfig::$passwork , DbConfig::$db);
        }
        public function getUsers(){
            $sql = "SELECT * FROM tbl_user WHERE not role = 'admin'
                    AND is_delete = 0";
            $query = mysqli_query($this->con, $sql);
            $response = new ResponseSearch(1, 0, $query);
            return $response;
        }

        public function createUser($model){
            $manv = rand(1, 1000000);
            $sql = "INSERT INTO tbl_user(username, password, role, email, phone, ma_nv, ho_ten, is_delete)
                    values('$model->username', '$model->password','$model->role','$model->email','$model->phone','$manv', '$model->fullName', '$model->isDeleted')";
            $query = mysqli_query($this->con, $sql);
            if($query){
                return "Thêm mơi người dùng thành công";
            }
            else{
                return "Error: " . $sql . "<br>" . mysqli_error($this->con);
            }
        }
        public function getById($id){
            $sql = "SELECT * from tbl_user where id = '$id'";
            $query = mysqli_query($this->con,$sql);
            return $query;
        }
        public function deleteUser($id){
            $sql = "UPDATE tbl_user set is_delete = 1 where id = '$id' ";
            $query = mysqli_query($this->con,$sql);
            if($query){
                return "Xóa user thành công";
            }
            else{
                return "Error: " . $sql . "<br>" . mysqli_error($this->con);
            }
        }
        public function updateUser($model){
            $sql = "UPDATE tbl_user SET ho_ten = '$model->fullName', email = '$model->email', phone = '$model->phone', 
                    role = '$model->role', ma_nv = '$model->maNv' WHERE id = '$model->id'";
            $query = mysqli_query($this->con, $sql);
            if($query){
                return "Cập nhật người dùng thành công!";
            }
            else{
                return "Error: " . $sql . "<br>" . mysqli_error($this->con);
            }
        }
        public function createCustomer($model){
            $sql = "INSERT INTO tbl_customer(full_name, address, phone)
                    values('$model->fullName', '$model->address','$model->phone')";
            $query = mysqli_query($this->con, $sql);
            if($query){
                return "Thêm mới khách hàng thành công";
            }
            else{
                return "Error: " . $sql . "<br>" . mysqli_error($this->con);
            }
        }
    }
