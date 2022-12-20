<div class="student_section">
               <div class="student_tab">
                  <h1>Информация относно учениците</h1>
                  <div class="student_tab_inner">
                    <button
                      class="s_btn_tablinks"
                      onclick="studentFunc(event, 'see_student')"
                      id="s_defaultOpen"
                    >
                      <i class="fas fa-info-circle"></i>
                    </button>
                    <button class="s_btn_tablinks" onclick="studentFunc(event, 'add_student')">
                      <i class="fas fa-plus-circle"></i>
                    </button>
                  </div>
              </div>

              <div class="student_tabcontent_data">
                <div id="see_student" class="student_tabcontent">
                     <div class="student_search">
                       <form action="#" id="student_data_search">
                         <input type="text" class="search_input" placeholder="Напишете името тук">
                       </form>
                     </div>
                     <div class="row" id="student_row">

                      </div>

                      <div class="student_details_modal" id="view_student_detail_modal">
                        <div class="student_details_modal_body">
                            <div id="hide_student_details_modal">X</div>
                            <div class="student_details_modal_body_inner">

                            </div>
                        </div>
                      </div>
                </div>
                
                <div id="add_student" class="student_tabcontent">
                <form enctype="multipart/form-data" id="student_formData" >
                    <h2>Формуляр за регистрация на ученик</h2>
                    <div class="first_last_name">
                      <span class="f_left">
                        <label for="s_fname">Име</label>
                        <input type="text" id="s_fname" name="f_name" required />
                        <br />
                      </span>
                      <span class="l_right">
                        <label for="s_lname">Фамилия</label>
                        <input type="text" id="s_lname" name="l_name" required />
                        <br />
                      </span>
                    </div>
                    <label for="s_father">Бащино име</label>
                    <input type="text" id="s_father" name="s_father" required />
                    <br />
                    <label for="s_enroll_year">Година на записване</label>
                    <input
                      type="text"
                      id="s_enroll_year"
                      name="s_enroll_year"
                      required
                    />
                    <br />
                    <div class="s_class">
                      <span class="s_class_left">
                        <label for="s_dob">Дата на раждане</label>
                        <input type="date" id="s_dob" name="s_dob" required />
                        <br />
                      </span>
                      <span class="s_class_right">
                        <label for="s_class">Клас</label>
                        <input type="text" id="s_class" name="s_class" required />
                        <br />
                      </span>
                   </div>
                    <label for="s_gender">Пол</label>
                    <select name="s_gender" id="s_gender" required>
                      <option value="">Изберете един</option>
                      <option value="Жена">Жена</option>
                      <option value="Мъж">Мъж</option>
                      <option value="Друг">Друг</option>
                    </select>
                    <br />
                    <label for="s_academic_year">Академична година</label>
                    <input
                      type="text"
                      id="s_academic_year"
                      name="s_academic_year"
                      required
                    />
                    <br />
                    <label for="s_image">Профилна снимка</label>
                    <input
                      type="file"
                      id="s_image"
                      name="file"
                      required
                    />
                    <br>
                    <input type="submit" name="s_submit" id="s_student_btn"></input>
                </form>
                </div>
              </div>
            </div>