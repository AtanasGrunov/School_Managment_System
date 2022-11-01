$(document).ready(function () {
  function loadHostelCount() {
    $.ajax({
      url: "controllers/ajax/hostel_ajax/hostel_count.php",
      type: "POST",
      success: function (fetchHostel) {
        $("#hostelCount").html(fetchHostel);
      },
    });
  }
  loadHostelCount();

  function loadHostelData(page) {
    $.ajax({
      url: "controllers/ajax/hostel_ajax/fetch_hostel_data.php",
      method: "POST",
      data: {
        page: page,
      },
      success: function (data) {
        $("#showHostelData").html(data);
      },
    });
  }
  loadHostelData();
  $(document).on("click", ".h_page-item", function (e) {
    e.preventDefault();
    var page = $(this).attr("id");
    loadHostelData(page);
  });

  $(document).on("click", "#hostel_action_icon", function () {
    var transportID = $(this).data("h_action");
    $("#r_action_content").toggle();
    $.ajax({
      url: "controllers/ajax/hostel_ajax/hostel_action.php",
      type: "POST",
      data: {
        id: transportID,
      },
      success: function (response) {
        $("#h_action_content").html(response);
      },
    });
  });
  $(document).on("click", "#h_action_btn_hide", function () {
    $("#h_action_content").hide();
  });

  $("#delete_all_hostel_schedule").on("click", function () {
    if (confirm("Желаете ли да изтриете всички данни?")) {
      var action = "deleteAll";
      $.ajax({
        url: "controllers/ajax/hostel_ajax/delete_all_hostel_data.php",
        type: "POST",
        data: {
          action: action,
        },
        success: function (response) {
          if (response == 1) {
            alert("Данните са изтрити успешно!");
            loadHostelData();
            loadHostelCount();
          } else {
            alert("Something Wrong");
          }

        },
      });
    }
  });
  $(document).on("click", "#r_save_btn", function (e) {
    e.preventDefault();
    var hostel_name = $("#h_name").val();
    var room_number = $("#r_number").val();
    var room_type = $("#r_type").val();
    var number_of_bed = $("#n_of_bed").val();
    var cost_per_bed = $("#c_per_bed").val();
    if (
      hostel_name == "" ||
      room_number == "" ||
      room_type == "" ||
      number_of_bed == "" ||
      cost_per_bed == ""
    ) {
      alert("Попълнете всички полета.");
    } else {
      $.ajax({
        url: "controllers/ajax/hostel_ajax/insert_hostel_data.php",
        type: "POST",
        data: {
          hostel_name: hostel_name,
          room_number: room_number,
          room_type: room_type,
          number_of_bed: number_of_bed,
          cost_per_bed: cost_per_bed,
        },
        success: function (response) {
          loadHostelData();
          loadHostelCount();
          alert("Данните са добавени.");
          $("#hostel_form").trigger("reset");
        },
      });
    }
  });
});
