<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("location:controllers/admin_login.php");
}
include "controllers/conn/conn.php";  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="shortcut icon" href="controllers/under_construction/ico/unnamed.jpg">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>School Managment System</title>
    <link rel="stylesheet" href="css/students.css">
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/teacher.css">
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="css/dashboard2.css" />
    <link rel="stylesheet" href="css/admin2.css">
    <link rel="stylesheet" href="css/student2.css">
    <link rel="stylesheet" href="css/student3.css">
    <link rel="stylesheet" href="css/parent.css">
    <link rel="stylesheet" href="css/library.css">
    <link rel="stylesheet" href="css/exam.css">
    <link rel="stylesheet" href="css/notice.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/transport.css">
    <link rel="stylesheet" href="css/hostel.css">
    <link rel="stylesheet" href="css/expenses.css">
    <link rel="stylesheet" href="css/add_admin.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/schedule.css">
	<link rel="stylesheet" href="css/button.css">
	
  </head>
  <body>
    <section class="admin-top">
      <div class="row">
        <div class="admin-left" id="slideNav">
          <div class="admin">
             <img src="<?php echo $_SESSION['image']; ?>" alt="">  
            <h1 style="text-align:center;"><?php echo $_SESSION['username']; ?></h1>
          </div>
          <div class="tab">
            <div
              class="tablinks"
              onclick="openCity(event, 'dashboard_top')"
              id="defaultOpen"
            >
              <i class="fas fa-tachometer-alt"></i>
              <span class="tooltip">Табло</span>
              <h4><b>Табло</b></h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'teacher_top')">
            <i class="fas fa-chalkboard-teacher"></i>
            <span class="tooltip">Учители</span>
              <h4>Учители</h4>
            </div>
           
            <div class="tablinks" onclick="openCity(event, 'student')">
              <i class="fas fa-users"></i>
              <span class="tooltip">Ученици</span>
              <h4>Ученици</h4>
            </div>
          
            <div class="tablinks" onclick="openCity(event, 'parent')">
              <i class="fas fa-calendar-alt"></i>
              <span class="tooltip">Родители</span>
              <h4>Родители</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'schedule')">
              <i class="fas fa-clock"></i>
              <span class="tooltip2">График на занятията</span>
              <h4>График на занятията</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'admin')">
              <i class="far fa-chart-bar"></i>
              <span class="tooltip">Добавяне на потребител</span>
              <h4>Добавяне на потребител</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'library')">
              <i class="fas fa-book"></i>
              <span class="tooltip">Библиотека</span>
              <h4>Библиотека</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'media')">
              <i class="fas fa-video"></i>
              <span class="tooltip">Медия</span>
              <h4>Медия</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'expenses')">
            <i class="fas fa-money-check-alt"></i>
              <span class="tooltip">Разходи</span>
              <h4>Разходи</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'hostel')">
            <i class="fas fa-hotel"></i>
              <span class="tooltip">Общежитие</span>
              <h4>Общежитие</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'transport')">
            <i class="fas fa-bus-alt"></i>
              <span class="tooltip">Транспорт</span>
              <h4>Транспорт</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'exam')">
              <i class="fas fa-graduation-cap"></i>
              <span class="tooltip2">Изпити</span>
              <h4>Изпити</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'events')">
              <i class="fas fa-exclamation-circle"></i>
              <span class="tooltip">Известия</span>
              <h4>Известия</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'map')">
            <i class="fas fa-map-marker-alt"></i>
              <span class="tooltip2">Карта</span>
              <h4>Карта</h4>
            </div>
          </div>
        </div>

        <div class="admin-right" id="admin-right">
          <div class="header">
            <div class="header-left">
              <i class="fas fa-bars" onclick="menuAnimation()"></i>
            </div>
            <div class="header-right">
              <div class="header-right-inner-right">
                <img src="<?php echo $_SESSION['image']; ?>" onclick="admin()" class="adminImg" alt="Profile Image" />
                <div id="admin_details" class="admin_details">
                   <div class="admin_details_inner">
                     <h3><?php echo $_SESSION['username']; ?></h3>
                     <a href="controllers/ajax/admin_ajax/logout.php" class="logoutBtn" id="logoutBtn">Logout</a>
                   </div>
                   <div class="admin_details_footer">
                     <h4>Дейности</h4>
                     <div style="cursor:pointer;" class="admin_chat">
                       <h3 style="color:#ddd;">Чат</h3>
                       <span class='admin_msg_count'>08</span>
                     </div>
					 
				
                     <h3>
					 <button onclick="myFunction()">Възстановяване на паролата</button>

								<script>
									function myFunction() {
									alert("Моля свържете се с администратора.");
									}
								</script></h3>
								
                     <h4 style="margin:15px 0px 10px 0px;">Моят профил</h4>
                   </div>
                   <div class="admin_message_section">
                       <div style='width:50%;border:1px solid #ddd;' class="admin_message_section_left">
                         <div class="admin_message_chat">
                         <i class="fas fa-comments"></i>
                              <p style="font-size: 17px;letter-spacing:4px;">Съобщения</p>
                         </div>
                       </div>
                       <div style='width:50%;border:1px solid #ddd;'  class="admin_message_section_right">
                       <div class="admin_message_support">
                              <i class="fas fa-ticket-alt"></i>
                              <p style="font-size: 17px;letter-spacing:4px;">Поддръжка</p>
                         </div>
                       </div>
                     </div>
               
		   <div class="open_message">
                       <button class="openMessage">Чат Бот</button>
                     </div>
					 
					 
						<form action="controllers/bot.php">
					<input type="submit"  center value="Чат Бот" />
				</form>



                </div>
              </div>
              <div class="header-right-inner-left">
           
              </div>
            </div>
          </div>
          
          <div id="dashboard_top" class="tabcontent">
            <?php include "controllers/dashboard.php"; ?>
          </div>
          
          <div id="teacher_top" class="tabcontent">
             <?php include "controllers/teacher.php"; ?>
          </div>
       
           <div id="student" class="tabcontent">
           <?php include 'controllers/students.php'; ?>
          </div>
    
          <div id="parent" class="tabcontent">
               <?php include 'controllers/parent.php'; ?>
          </div>
     
          <div id="schedule" class="tabcontent">
            <body>
      <header>
         <h1><center>График на занятията</center></h1>
      </header>
     <div class="container">
      <div class="calendar">
        <div class="front">
          <div class="current-date">
            <h1>8 Октомври</h1>
            <h1>Октомври 2022</h1> 
          </div>

          <div class="current-month">
            <ul class="week-days">
              <li>Понеделник</li>
              <li>Вторник</li>
              <li>Сряда</li>
              <li>Четвъртък</li>
              <li>Петък</li>
              <li>Събота</li>
              <li>Неделя</li>
            </ul>

            <div class="weeks">
              <div class="first">
                <span class="last-month">28</span>
                <span class="last-month">29</span>
                <span class="last-month">30</span>
                <span class="last-month">31</span>
                <span>01</span>
                <span>02</span>
                <span>03</span>
              </div>

              <div class="second">
                <span>04</span>
                <span>05</span>
                <span>06</span>
                <span>07</span>
                <span class="active">8</span>
                <span>09</span>
                <span>10</span>
              </div>

              <div class="third">
                <span>11</span>
                <span>12</span>
                <span class="event"> 13 </span>
                <span>14</span>
                <span>15</span>
                <span>16</span>
                <span>17</span>
              </div>

              <div class="fourth">
                <span>18</span>
                <span>19</span>
                <span>20</span>
                <span>21</span>
                <span>22</span>
                <span>23</span>
                <span>24</span>
              </div>

              <div class="fifth">
                <span>25</span>
                <span>26</span>
                <span>27</span>
                <span>28</span>
                <span>29</span>
                <span>30</span>
                <span>31</span>
              </div>
            </div>
          </div>
        </div>

        <div class="back">
          <input placeholder="Добавете събитие">
          <div class="info">
            <div class="date">
              <p class="info-date">
              Дата: <span>Октоври 13, 2022</span>
              </p>
              <p class="info-time">
                Час: <span>6:35 PM</span>
              </p>
            </div>
            <div class="address">
              <p>
                Адрес: <span>9ти Септеври, Казанлък</span>
              </p>
            </div>
            <div class="observations">
              <p>
                Бележка: <span>Ще се проведе евакуация.</span>
              </p>
            </div>
          </div>

          <div class="actions">
            <button class="save">
              Запази <i class="ion-checkmark"></i>
            </button>
            <button class="dismiss">
              Премахни <i class="ion-android-close"></i>
            </button>
          </div>
        </div>

      </div>
    </div>
   </body>

            <p><h1 style="font-size: 25px; padding:200px; ">Всички права запазени</h1></p>
          </div>

          <div id="admin" class="tabcontent">
           <?php include 'controllers/add_admin.php'; ?>
          </div>

          <div id="library" class="tabcontent">
          <?php include 'controllers/library.php'; ?>
          </div>
          <div id="media" class="tabcontent">
            <h3><span style="font-size:100px;"><center> Медия </center></span></h3>
<body>
<div class="container">

   <div class="main-video-container">
      <video src="images/vid-1.mp4" loop controls class="main-video"></video>
      <h3 class="main-vid-title">География за 10ти клас</h3>
   </div>

   <div class="video-list-container">

      <div class="list active">
         <video src="images/vid-1.mp4" class="list-video"></video>
         <h3 class="list-title">География за 10ти клас</h3>
      </div>

      <div class="list">
         <video src="images/vid-2.mp4" class="list-video"></video>
         <h3 class="list-title">Анкета с Google</h3>
      </div>

      <div class="list">
         <video src="images/vid-3.mp4" class="list-video"></video>
         <h3 class="list-title">Интерактивен учебни по Физика за 10ти клас</h3>
      </div>

      <div class="list">
         <video src="images/vid-4.mp4" class="list-video"></video>
         <h3 class="list-title">3D town animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-5.mp4" class="list-video"></video>
         <h3 class="list-title">man chasing carrot animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-6.mp4" class="list-video"></video>
         <h3 class="list-title">door hinge animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-7.mp4" class="list-video"></video>
         <h3 class="list-title">poeple walking in town animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-8.mp4" class="list-video"></video>
         <h3 class="list-title">knight chasing virus animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-9.mp4" class="list-video"></video>
         <h3 class="list-title">3D helicopter animation</h3>
      </div>

   </div>

</div>



<script src="js/media.js"></script>

</body>

            <p><h1 style="font-size: 25px; padding:100px; ">Всички права запазени</h1></p>
          </div>

          <div id="expenses" class="tabcontent">
            <?php include 'controllers/expenses.php';  ?>
          </div>
          <div id="hostel" class="tabcontent">
           <?php include 'controllers/hostel.php';  ?>
          </div>

          <div id="transport" class="tabcontent">
          <?php include 'controllers/transport.php';  ?>
          </div>
          <div id="exam" class="tabcontent">
            <?php include 'controllers/exam.php';  ?>
          </div>
          <div id="events" class="tabcontent">
          <?php include 'controllers/notices.php';  ?>
          </div>
          <div id="map" class="tabcontent">
          <?php include 'controllers/map.php';  ?>
          </div>
        </div>
      </div>
    </section>
   
       
 
    <script src="js/teacherFile.js"></script> 
    <script src="js/app.js"></script>
    <script src="js/student.js"></script>
    <script src="js/libraryFile.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/parentFile.js"></script>
    <script src="js/exam.js"></script>
    <script src="js/notice.js"></script>
    <script src="js/transport.js"></script>
    <script src="js/hostel.js"></script>
    <script src="js/expenses.js"></script>
    <script src="js/add_admin.js"></script>
	<script src="js/schedule.js"></script>
    <script>
      function admin() {
          document.getElementById("admin_details").classList.toggle("show2");
       }
   
      window.onclick = function(event) {
        if (!event.target.matches('.adminImg')) {
          var dropdowns = document.getElementsByClassName("admin_details");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show2')) {
              openDropdown.classList.remove('show2');
            }
          }
        }
      }


    </script>
    <script>
  
      function menuAnimation() {
        var element = document.getElementById("slideNav");
        var element1 = document.getElementById("admin-right");
        if (element && element1) {
          element.classList.toggle("navSlide");
          element1.classList.toggle("navSlide1");
        }
      }

    </script>
    <?php
    $sql = "SELECT COUNT(CASE WHEN UPPER(Gender) = 'Мъж' THEN 1 END) Male,
    COUNT(CASE WHEN UPPER(Gender) = 'Жена' THEN 1 END) Female
    FROM student";
    $fire = mysqli_query($conn,$sql);
 
    $json = [];
    $json2 = [];
    while($row = mysqli_fetch_assoc($fire)){
        $json[] = (int)$row['Female'];
        $json2[] =(int)$row['Male'];
    }
  
    $newArray =array_merge($json,$json2);


?>
<?php
    $sql2 = "SELECT COUNT(CASE WHEN UPPER(Gender) = 'Мъж' THEN 1 END) Male,
    COUNT(CASE WHEN UPPER(Gender) = 'Жена' THEN 1 END) Female
    FROM teacher";
    $fire2 = mysqli_query($conn,$sql2);
   
    $jsonTeacher = [];
    $jsonTeacher2 = [];
    while($row = mysqli_fetch_assoc($fire2)){
        $jsonTeacher[] = (int)$row['Female'];
        $jsonTeacher2[] =(int)$row['Male'];
    }

    $newTeacherArray = array_merge($jsonTeacher,$jsonTeacher2);
  

?>
    <script>

var ctx3 = document.getElementById("myChart3").getContext("2d");
var myChart = new Chart(ctx3, {
  type: "doughnut",
  data: {
 
    datasets: [
      {

        data: <?php echo json_encode($newArray); ?>,
        backgroundColor: ["#04aa6d", "#f79821"],
  
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: false,
  
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },
    legend: {
      display: false,
      position: "bottom", 
      align: "end", 
      labels: {
        fontColor: "red",
        fontSize: 16,
        boxWidth: 20,
      },
    },
 
  },
});

var ctx2 = document.getElementById("myChart2").getContext("2d");
var myChart = new Chart(ctx2, {
  type: "pie",
  data: {

    datasets: [
      {


        data: <?php echo json_encode($newTeacherArray); ?>,
        backgroundColor: ["#04aa6d", "#f79821"],
    
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: false,

    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },
    legend: {
      display: false,

    },

  },
});
    </script>
  </body>
</html>
