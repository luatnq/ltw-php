<div class="modal fade" id="createCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm mới người dùng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="formCreateCustomer">
                <div class="modal-body">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="">Họ và tên</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="">Số điện thoại</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="">Địa chỉ</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="address" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" onclick="saveCustomer()" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>