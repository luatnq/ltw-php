<div class="row my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active " aria-current="page">Quản lý đơn hàng</li>
        </ol>
    </nav>
</div>
<div class="row my-4">
    <div class="mx-5">
        <button class="btn btn-success" onclick="createOrder();"><i class="fa fa-plus"></i> Thêm mới</button>
        <button class="btn btn-primary" onclick="createCustomer();"><i class="fas fa-user-plus"></i> Thêm khách hàng mới</button>
    </div>

    <div class="table-responsive custom-table-responsive">
        <table class="table custom-table">
            <thead>
                <tr>
                    <th scope="col" width="50">STT</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Người order</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Giá trị</th>
                    <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody id="managerOrder">

            </tbody>
        </table>
    </div>
</div>
<div>
    <?php include("quanlydonhang/CreateOrder.php") ?>
</div>
<div>
    <?php include("quanlykhachhang/CreateCustomer.php") ?>
</div>
<div>
    <?php include("quanlydonhang/EditOrder.php") ?>
</div>