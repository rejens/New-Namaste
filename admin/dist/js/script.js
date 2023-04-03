let url = window.location.href;
url = url.split("/").pop().split(".")[0] || "index";

let list = document.querySelector(`.${url}`);
if (list) {
  list.classList.add("active");
}

//tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

//sidebar toggle
$(document).on("click", "[data-widget='pushmenu']", function () {
  if (document.querySelector("body").classList.contains("sidebar-collapse")) {
    document.querySelector("body").classList.remove("sidebar-collapse");
  } else {
    document.querySelector("body").classList.add("sidebar-collapse");
  }
});

//light box for image
$(function () {
  $(document).on("click", '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox({
      alwaysShowClose: true,
    });
  });
});

//toast
var Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
});

const success = function (status, message) {
  Toast.fire({
    icon: status,
    title: message,
  });
};

//show delete confirmation
async function deleteConfirmation() {
  return await Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Delete",
  });
}

// delete product
const deleteProduct = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/product.php?id=${id}`);
  }
};

const deleteOrganizationMember = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/organization_members.php?id=${id}`);
  }
};



//delete department
const deleteDepartment = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/department.php?id=${id}`);
  }
};

//delete message
const deleteMessage = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/message.php?id=${id}`);
  }
};


//delete category
const deleteCategory = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/category.php?id=${id}`);
  }
};

//delete event
const deleteEvent = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/event.php?id=${id}`);
  }
};

//delete member
const deleteMember = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/member.php?id=${id}`);
  }
};

//delete report
const deleteReport = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/report.php?id=${id}`);
  }
};

//delete branch
const deleteBranch = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/branch.php?id=${id}`);
  }
};

//delete notice
const deleteNotice = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/notice.php?id=${id}`);
  }
};

//delete application
const deleteApplication = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/application.php?id=${id}`);
  }
};

//delete vacancy
const deleteVacancy = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/vacancy.php?id=${id}`);
  }
};

//delete user
const deleteUser = async function (id) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    location.replace(`pages/delete/user.php?id=${id}`);
  }
};

//delete image
async function deleteProductImage(id, name) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    $.ajax({
      type: "post",
      url: "../../ajax/delete_product_image.php",
      data: { id: id, name: name },
      success: function (response) {
        location.reload();
      },
    });
  }
}

//delete report
async function deleteReportFile(id, name) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    $.ajax({
      type: "post",
      url: "../../ajax/delete_report_pdf.php",
      data: { id: id, name: name },
      success: function (response) {
        location.reload();
      },
    });
  }
}

async function deleteEventImage(id, name) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    $.ajax({
      type: "post",
      url: "../../ajax/delete_event_image.php",
      data: { id: id, name: name },
      success: function (response) {
        location.reload();
      },
    });
  }
}

//notice image

async function deleteNoticeImage(id, name) {
  const result = await deleteConfirmation();
  if (result.isConfirmed) {
    $.ajax({
      type: "post",
      url: "../../ajax/delete_notice_image.php",
      data: { id: id, name: name },
      success: function (response) {
        location.reload();
      },
    });
  }
}

//data tables
$("table#example1")
  .DataTable({
    responsive: true,
    lengthChange: false,
    autoWidth: false,
    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
    scrollY: 600,
  })
  .buttons()
  .container()
  .appendTo("#example1_wrapper .col-md-6:eq(0)");

//summernote
// $("#summernote").summernote({ minHeight: 150, maxHeight: 500 });
$("#summernote").summernote({
  minHeight: 150,
  maxHeight: 500,
  toolbar: [
    ["style", ["style"]],
    ["font", ["bold", "italic", "underline"]],
    ["fontname", ["fontname"]],
    ["fontsize", ["fontsize"]],
    ["color", ["color"]],
    ["insert", ["link"]],
    ["para", ["ul", "ol", "paragraph"]],
    ["view", ["fullscreen", "codeview", "help"]],
  ],
});

////////////////////////////////////
//date range picker
const datePickerdata = {
  locale: {
    format: "YYYY/MM/DD",
  },
};

//setting starting and ending date in date range picker
function changeDatePickerData(startDate, endDate, whatFor = "datepicker") {
  datePickerdata.startDate = startDate;
  datePickerdata.endDate = endDate;
  if (whatFor == "datepicker") {
    datePicker();
  } else if (whatFor == "vacancy") {
    vacancyPopup();
  }
}

const datePicker = function () {
  $("#reservation").daterangepicker(datePickerdata);
};
const vacancyPopup = function () {
  $("#vacancy-popup").daterangepicker(datePickerdata);
};
datePicker();
vacancyPopup();
////////////////////////////////////

//file upload
$(".custom-file-input").on("change", function () {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

$(".file-collection").hover(
  function () {
    // over
    $(".del-button").removeClass("hide_del_button");
  },
  function () {
    // out
    $(".del-button").addClass("hide_del_button");
  }
);
