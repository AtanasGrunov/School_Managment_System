$(document).ready(function () {
  // function loadParentData() {
  //   $.ajax({
  //     url: "controllers/ajax/parent_ajax/fetch_parent_data.php",
  //     type: "POST",
  //     success: function (data) {
  //       $("#showParentData").html(data);
  //     },
  //   });
  // }
  // loadParentData();

  function loadParentCount() {
    $.ajax({
      url: "controllers/ajax/parent_ajax/parent_total.php",
      type: "POST",
      success: function (data) {
        $("#parentCount").html(data);
      },
    });
  }
  loadParentCount();


  function loadParentData(page) {
    $.ajax({
      url: "controllers/ajax/parent_ajax/fetch_parent_data.php",
      method: "POST",
      data: {
        page: page,
      },
      success: function (data) {
        $("#showParentData").html(data);
      },
    });
  }
  loadParentData();
  $(document).on("click", ".page-item", function (e) {
    e.preventDefault();
    var page = $(this).attr("id");
    loadParentData(page);
  });
 
  $("#add_parent").on("click", function () {
    $("#parent_modal").show();
  });

  $(document).on("click", "#hide_parent_modal", function () {
    $("#parent_modal").hide();
  });
 
  $("#parent_formData").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "controllers/ajax/parent_ajax/insert_parent_data.php",
      type: "POST",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        alert(data);
        loadParentCount();
        loadParentData();
        $("#parent_formData").trigger("reset");
      },
      error: function () {
        alert("Something went wrong.");
      },
    });
  });
  
  $(document).on("click", "#p_action_btn_hide", function () {
    $("#p_action_content").hide();
  });
  $(document).on("click", "#parent_action_icon", function () {
    var parentID = $(this).data("p_action");
    $("#p_action_content").toggle("p_action_btn");
    $.ajax({
      url: "controllers/ajax/parent_ajax/p_action.php",
      type: "POST",
      data: {
        id: parentID,
      },
      success: function (response) {
        $("#p_action_content").html(response);
      },
    });
  });

  function fetchStudentKey() {
    $.ajax({
      url: "controllers/ajax/parent_ajax/fetchStudentKey.php",
      type: "POST",
      success: function (response) {
        $("#s_foreign_key").html(response);
      },
    });
  }
  fetchStudentKey();
});
