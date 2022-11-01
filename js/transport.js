$(document).ready(function () {

  function loadTransportCount() {
    $.ajax({
      url: "controllers/ajax/transport_ajax/transport_total.php",
      type: "POST",
      success: function (fetchTransport) {
        $("#transportCount").html(fetchTransport);
      },
    });
  }
  loadTransportCount();

  function loadTransportData(page) {
    $.ajax({
      url: "controllers/ajax/transport_ajax/fetch_transport_data.php",
      method: "POST",
      data: {
        page: page,
      },
      success: function (data) {
        $("#showTransportData").html(data);
      },
    });
  }
  loadTransportData();
  $(document).on("click", ".t_page-item", function (e) {
    e.preventDefault();
    var page = $(this).attr("id");
    loadTransportData(page);
  });

  $(document).on("click", "#transport_action_icon", function () {
    var transportID = $(this).data("t_action");
    $("#t_action_content").toggle();
    $.ajax({
      url: "controllers/ajax/transport_ajax/transport_action.php",
      type: "POST",
      data: {
        id: transportID,
      },
      success: function (response) {
        $("#t_action_content").html(response);
      },
    });
  });
  $(document).on("click", "#t_action_btn_hide", function () {
    $("#t_action_content").hide();
  });

  $("#delete_all_transport_schedule").on("click", function () {
    if (confirm("Желаете ли да изтриете всички данни?")) {
      var action = "deleteAll";
      $.ajax({
        url: "controllers/ajax/transport_ajax/delete_all_transport_data.php",
        type: "POST",
        data: {
          action: action,
        },
        success: function (response) {
          if (response == 1) {
            alert("Данните са изтрити успешно!");
            loadTransportData();
          } else {
            alert("Something Wrong");
          }

        },
      });
    }
  });
  $(document).on("click", "#t_save_btn", function (e) {
    e.preventDefault();
    var route_name = $("#r_name").val();
    var vehicle_number = $("#v_number").val();
    var driver_name = $("#d_name").val();
    var license_number = $("#l_number").val();
    var phone_number = $("#p_number").val();
    if (
      route_name == "" ||
      vehicle_number == "" ||
      driver_name == "" ||
      license_number == "" ||
      phone_number == ""
    ) {
      alert("Попълнете всички полета.");
    } else {
      $.ajax({
        url: "controllers/ajax/transport_ajax/insert_transport_data.php",
        type: "POST",
        data: {
          route_name: route_name,
          vehicle_number: vehicle_number,
          driver_name: driver_name,
          license_number: license_number,
          phone_number: phone_number,
        },
        success: function (response) {
          loadTransportData();
          loadTransportCount();
          alert("Данните са добавени.");
          $("#transport_form").trigger("reset");
        },
      });
    }
  });
});
