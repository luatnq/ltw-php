$(document).ready(function () {
  searchOrder(1);
  managerOrders(1);
  searchUser(1);
  statisticsChart();
});

function getStatus(code) {
  switch (code) {
    case "0":
      return "Chờ phê duyệt";
    case "1":
      return "Đang giao hàng";
    case "2":
      return "Đã từ chối";
    case "3":
      return "Thành công";
  }
}

function searchOrder(page = 1) {
    console.log(page);
    $("#tblOrder").children().remove();
    $.ajax({
      url: "../../service/order/ListOrder.php",
      type: "POST",
      success: function (response) {
        console.log(response);
        let res = JSON.parse(response);
        if (res.data.length > 0) {
          let count = 1;
          res.data.forEach((item, index) => {
            let div = `<tr>
                          <td>${count}</td>
                          <td>${item.madh}</td>
                          <td>${item.username}</td>
                          <td>${item.createdDate}</td>
                          <td>${item.price}</td>
                          <td>${getStatus(item.status)}</td>
                      </tr>
                      <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>
                        `;
            $("#tblOrder").append(div);
            count++;
          });
        } else {
          $("#tblUser").append(
            "<tr class='text-center' colspan='6'>Không có dữ liệu.</tr>"
          );
        }
      },
    });
}

function managerOrders(page = 1){
    console.log(page);
    $("#managerOrder").children().remove();
    let name = $("#nameSearch").val();
    $.ajax({
      url: "../../service/order/OrderManager.php",
      data: { name: name },
      type: "POST",
      success: function (response) {
        console.log(name);
        let res = JSON.parse(response);
        if (res.data.length > 0) {
          let count = 1;
          res.data.forEach((item, index) => {
            let div = `<tr>
                          <td>${count}</td>
                          <td>${item.madh}</td>
                          <td>${item.username}</td>
                          <td>${item.createdDate}</td>
                          <td>${item.price}</td>
                          <td>${getStatus(item.status)}</td>
                          <td> ${
                            item.status == 0
                              ? "<i class='fa fa-check text-success col-md-3 cusor '  data-bs-toggle='tooltip' data-bs-placement='bottom' title='Duyệt' onclick='accept(" +
                                item.id +
                                ")'></i>" +
                                "<i class='fa fa-times text-danger col-md-3 cusor' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Từ chối' onclick='cancel(" +
                                item.id +
                                ")'></i>"
                                +
                                "<i class='fa fa-edit col-md-3' onclick='editOrder(" +
                                item.id +
                                ")'>"
                              : item.status == 2 ? "<i class='fa fa-trash text-danger' onclick='deleteOrder(" +
                              item.id +
                              ")'></i>" : ""
                          }</td></tr>
                          <tr class="spacer">
                            <td colspan="100"></td>
                          </tr>`;
            $("#managerOrder").append(div);
            count++;
          });
        } else {
          $("#tblUser").append(
            "<tr class='text-center' colspan='6'>Không có dữ liệu.</tr>"
          );
        }
      },
    });
}

async function createOrder(){
  await getCustomer(0);
  await getProducts(0);
  $("#orderCreate").modal("show");
}

function saveOrder() {
  $.ajax({
    url: "../../service/order/CreateOrder.php",
    type: "POST",
    data: $("#formCreateOrder").serialize(),
    success: (response) => {
      searchOrder();
      toastr.success(response);
      managerOrders(1);
      $('#orderCreate').modal('hide');
    },
  });
}


function searchUser(page = 1) {
  $("#managerUser").children().remove();
  $.ajax({
    url: "../../service/user/ListUser.php",
    type: "POST",
    success: function (response) {
      let res = JSON.parse(response);
      if (res.data.length > 0) {
        let count = 1;
        res.data.forEach((item, index) => {
          let div =
            "<tr><td>" + count + 
            "</td><td>" +
            item.ma_nv +
            "</td><td>" +
            item.fullName +
            "</td><td>" +
            item.email +
            "</td><td>" +
            item.phone +
            "</td><td> <i class='fa fa-edit' onclick='editUser(" +
            item.id +
            ")'></i><i class='fa fa-trash text-danger' onclick='deleteUser(" +
            item.id +
            ")'></i></td>" +
            "</tr>"
            + "<tr class='spacer'><td colspan='100'></td></tr>";
          $("#managerUser").append(div);
          count++;
        });
      } else {
        $("#managerUser").append(
          "<tr class='text-center' colspan='6'>Không có dữ liệu.</tr>"
        );
      }
    },
  });
}

function editUser(id) {
  $.ajax({
    url: "../../service/user/GetUserDetail.php",
    data: { id: id },
    type: "POST",
    success: function (response) {
      let item = JSON.parse(response);
      console.log(item.ho_ten);
      $("#userId").val(item.id);
      $("#ma_nv").val(item.ma_nv);
      $("#fullName").val(item.ho_ten);
      $("#phone").val(item.phone);
      $("#email").val(item.email);
      $("#role").val(item.role);
      $('#userEdit').modal('show');
      console.log("==========");
    },
  });
}

function updateUser() {
  $.ajax({
    url: "../../service/user/UpdateUser.php",
    data: $("#formUpdateUser").serialize(),
    type: "POST",
    success: function (response) {
      toastr.success(response);
      searchUser(1);
      $('#userEdit').modal('hide');
    },
  });
}

function createUser() {
  $("#userCreate").modal("show");
}

function saveUser() {
  $.ajax({
    url: "../../service/user/CreateUser.php",
    data: $("#formCreateUser").serialize(),
    type: "POST",
    success: function (response) {
      console.log(response);
      toastr.success(response);
      $("#userCreate").modal("hide");
      searchUser();
    },
  });
}

function deleteUser(id) {
  Swal.fire({
    title: "Bạn có chắc chắn muốn xóa?",
    text: "Bạn sẽ không thể lấy lại được dữ liệu này!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Xác nhận!",
    cancelButtonText: "Hủy",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "../../service/user/DeleteUser.php",
        data: { id: id },
        type: "POST",
        success: function (response) {
          toastr.success(response);
          searchUser();
        },
      });
    }
  });
}

function accept(id){
  console.log(id);
  Swal.fire({
    title: "Bạn có chắc chắn muốn duyệt đơn hàng này?",
    text: "Đơn hàng sẽ được chuyển đến khách hàng!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Xác nhận!",
    cancelButtonText: "Hủy",
  }).then((result) => {
    console.log(id);
    if (result.isConfirmed) {
      $.ajax({
        url: "../../service/order/OrderAction.php",
        data: {id: id, accept: 'accept'},
        type: 'POST',
        success: (res)=>{
          managerOrders();
          console.log(res);
          toastr.success(res);
        }
      })
    }
  });
}

function cancel(id){
  Swal.fire({
    title: "Bạn có chắc chắn muốn từ chối đơn hàng này?",
    text: "Bạn sẽ không thể lấy lại được dữ liệu này!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Xác nhận!",
    cancelButtonText: "Hủy",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "../../service/order/OrderAction.php",
        data: {id: id, cancel: 'cancel'},
        type: 'POST',
        success: (response)=>{
          managerOrders();
          toastr.success(response);
        }
      })
    }
  });
}

function deleteOrder(id) {
  Swal.fire({
    title: "Bạn có chắc chắn muốn xóa?",
    text: "Bạn sẽ không thể lấy lại được dữ liệu này!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Xác nhận!",
    cancelButtonText: "Hủy",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "../../service/order/OrderAction.php",
        data: { id: id , delete : 'delete'},
        type: "POST",
        success: function (response) {
          toastr.success(response);
          managerOrders();
        },
      });
    }
  });
}

function editOrder(id) {
  $.ajax({
    url: "../../service/order/GetOrderDetail.php",
    data: { id: id },
    type: "POST",
    success: async (res) => {
      let item = JSON.parse(res);
      await getCustomer(item.customer_id);
      await getProducts(item.product_id);
      $("#id").val(item.id);
      $("#quantity").val(item.amount)
      console.log("amount " + item.amount);
      $("#editOrder").modal("show");
    },
  });
}

function updateOrder() {
  $.ajax({
    url: "../../service/order/UpdateOrder.php",
    data: $("#formEditOrder").serialize(),
    type: "POST",
    success: (res) => {
      managerOrders(0);
      toastr.success(res);
      $("#editOrder").modal("hide");
    },
  });
}

async function getProducts(id) {
  $("#slProduct").children().remove();
  $("#eProduct").children().remove();
  if(id == 0){
    $("#slProduct").append("<option selected disabled>Chọn sản phẩm</option>");
  }
  return $.ajax({
    url: "../../service/product/GetProducts.php",
    type: "GET",
    success: (res) => {
      let data = JSON.parse(res);
      data.forEach((item) => {
        if (id != 0) {
          if (item.id == id) {
            console.log("success");
            $("#eProduct").append(
              `<option value='${item.id}' selected>${item.name}</option>`
            );
          } else
            $("#eProduct").append(
              `<option value='${item.id}' >${item.name}</option>`
            );
        } else {
          $("#slProduct").append(
            `<option value='${item.id}'>${item.name}</option>`
          );
        }
      });
    },
  });
}

async function getCustomer(id){
  
  $("#slCustomer").children().remove();
  $("#eCustomer").children().remove();
  if(id == 0){
    $("#slCustomer").append("<option selected disabled>Chọn khách hàng</option>");
  }
  return $.ajax({
    url: "../../service/customer/GetCustomers.php",
    type: "GET",
    success: (res) => {
      let data = JSON.parse(res);
      data.forEach((item) => {
        if (id != 0) {
          if (item.id == id) {
            $("#eCustomer").append(
              `<option value='${item.id}' selected>${item.fullName + "-" + item.phone}</option>`
            );
          } else
            $("#eCustomer").append(
              `<option value='${item.id}' >${item.fullName + "-" + item.phone}</option>`
            );
        } else {
          $("#slCustomer").append(
            `<option value='${item.id}'>${item.fullName + "-" + item.phone}</option>`
          );
        }
      });
    },
  });
}


function createCustomer() {
  $("#createCustomer").modal("show");
}

function saveCustomer() {
  $.ajax({
    url: "../../service/customer/CreateCustomer.php",
    data: $("#formCreateCustomer").serialize(),
    type: "POST",
    success: function (response) {
      console.log(response);
      toastr.success(response);
      $("#createCustomer").modal("hide");
      managerOrders ();
    },
  });
}

async function statisticsChart(){
  let xValues = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
  let yValues = await getData();
  console.log(yValues);

  new Chart("myChart", {
    type: "line",
    data: {
      labels: xValues,
      datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "#d50000",
        borderColor: "#03a9f4",
        data: yValues
      }]
    },
    options: {
      legend: {display: false},
      scales: {
        yAxes: [{ticks: {min: 0, max:20}}],
      }
    }
  });
}

async function getData() {
  let yValues = [];
  await $.ajax({
    url: "../../service/order/StatisticsOrder.php",
    type: "GET",
    success: (res) => {
      let data = JSON.parse(res);
      console.log(data);
      data.forEach((item) => {
        yValues.push(parseInt(item));
      });
    },
  });
  return yValues;
}
