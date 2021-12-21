<!-- <div class = "overflow-auto"> -->
<div class= "row my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active " aria-current="page">Quản lý nhân viên</li>
        </ol>
    </nav>
</div>
<div class="row my-4">
    <div class="mx-5">
        <button class="btn btn-success" onclick="createUser();"><i class="fa fa-plus"></i> Thêm mới</button>
    </div>
    <div class="table-responsive custom-table-responsive">
        <table class="table custom-table">
            <thead>
                <tr>
                    <th scope="col" width="50">STT</th>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                </tr>
            </thead>
            <tbody id="managerUser">

            </tbody>
        </table>
    </div>
</div>
<!-- </div> -->
<?php include "quanlynhanvien/EditUser.php" ?>
<?php include "quanlynhanvien/CreateUser.php" ?>