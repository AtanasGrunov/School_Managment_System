<section class="transport">
        <h1>Транспорт</h1>
        <span class="transport_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_transport_para">Транспорт</p> 
        </span>
      
        <div class="add_new_transport">
                <h1>Добавете транспорт</h1>
          <form id="transport_form" method="POST">
             <div class="row1">
                <div class="row1_inner1">
                   <label for="r_name">Маршрут</label><br>
                   <input type="text" id="r_name" name="r_name"><br>
                </div>
                <div class="row1_inner2">
                        <label for="v_number">Регистрационен номер</label><br>
                        <input type="text" id="v_number" name="v_number"><br>     
                </div>
                </div>
                <div class="row2">
                    <div class="row2_inner1">
                       <label for="d_name">Име на шофьора</label><br>
                       <input type="text" id="d_name" name="d_name"><br>
                    </div>
                     <div class="row2_inner2">
                        <label for="l_number">Номер на шофиорска книжка</label><br>
                        <input type="text" id="l_number" name="l_number"><br>
                     </div>
             </div>
             <div class="row3">
                <div class="row3_inner1">
                       <label for="p_number">Телефонен номер</label><br>
                       <input type="text" maxlength="10" min="0" id="p_number" name="p_number">
                </div>
             </div>
             <button class="t_save_btn" id="t_save_btn">Добави</button>
           </form>
        </div>
 
        <div class="all_transport_schedule">
                <div class="header_transport_schedule_table">
                       <h1>Всички шофьори</h1>  
                        <button id="delete_all_transport_schedule">Изтрий всички шофьори</button>
                </div>
           <div id="showTransportData">

           </div>
        </div>

        <h1 style="font-size: 25px;">Всички права запазени</h1>
</section>