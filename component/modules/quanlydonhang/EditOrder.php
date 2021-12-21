<div class="modal fade" id="editOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa đơn hàng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="formEditOrder">
                <div class="modal-body">
                    <div class="row mt-3">
                        <input type="text" name="id" id="id" style="display: none;">
                        <div class="col-md-4">
                            <label for="">Khách hàng</label>
                        </div>
                        <div class="col-md-8">
                            <select name="eCustomer" id="eCustomer" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="">Sản phẩm</label>
                        </div>
                        <div class="col-md-8">
                            <select name="eProduct" id="eProduct" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="">Số lượng</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="quantity" id = "quantity" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" onclick="updateOrder()" class="btn btn-primary">Lưu</button>
                    </div>
            </form>
        </div>
    </div>
</div>