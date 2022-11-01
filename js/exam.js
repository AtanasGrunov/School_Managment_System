$(document).ready(function () {
 
  function loadExamCount() {
    $.ajax({
      url: "controllers/ajax/exam_ajax/exam_count.php",
      type: "POST",
      success: function (fetchExam) {
        $("#examCount").html(fetchExam);
      },
    });
  }
  loadExamCount();
  $(document).on("click", "#e_save_btn", function (e) {
    e.preventDefault();
    var exam_name = $("#e_name").val();
    var exam_type = $("#s_type").val();
    var exam_class = $("#s_classes").val();
    var exam_section = $("#s_section").val();
    var exam_time = $("#s_time").val();
    var exam_date = $("#s_date").val();
    if (
      exam_name == "" ||
      exam_type == "" ||
      exam_class == "" ||
      exam_section == "" ||
      exam_time == "" ||
      exam_date == ""
    ) {
      alert("Попълнете всички полета.");
    } else {
      $.ajax({
        url: "controllers/ajax/exam_ajax/insert_exam_schedule.php",
        type: "POST",
        data: {
          e_name: exam_name,
          s_type: exam_type,
          s_class: exam_class,
          s_section: exam_section,
          s_time: exam_time,
          s_date: exam_date,
        },
        success: function (response) {
          alert(response);
          loadExamData();
          loadExamCount();
          $("#exam_schedule_form").trigger("reset");
        },
      });
    }
  });


  function loadExamData(page) {
    $.ajax({
      url: "controllers/ajax/exam_ajax/fetch_exam_schedule_data.php",
      method: "POST",
      data: {
        page: page,
      },
      success: function (data) {
        $("#showExamData").html(data);
      },
    });
  }
  loadExamData();
  $(document).on("click", ".e_page-item", function (e) {
    e.preventDefault();
    var page = $(this).attr("id");
    loadExamData(page);
  });

  $(document).on("click", "#exam_action_icon", function () {
    var parentID = $(this).data("e_action");
    $("#e_action_content").toggle("e_action_btn");
    $.ajax({
      url: "controllers/ajax/exam_ajax/exam_action.php",
      type: "POST",
      data: {
        id: parentID,
      },
      success: function (response) {
        $("#e_action_content").html(response);
      },
    });
  });
  $(document).on("click", "#e_action_btn_hide", function () {
    $("#e_action_content").hide();
  });

  $("#delete_all_exam_schedule").on("click", function () {
    if (confirm("Сигурни ли сте че желаете да изтриете всички данни?")) {
      var action = "deleteAll";
      $.ajax({
        url: "controllers/ajax/exam_ajax/delete_all_schedule.php",
        type: "POST",
        data: {
          action: action,
        },
        success: function (response) {
          if (response == 1) {
            alert("Данните са изтрити успешно!");
            loadExamData();
            loadExamCount();
          } else {
            alert("Данните НЕ са изтрити");
          }
        },
      });
    }
  });
});
