
<div class="teacher_section">
      <div class="teacher_tab">
        <h1>Информация относно учителите</h1>
        <div class="teacher_tab_inner">
          <button
            class="t_btn_tablinks"
            onclick="teacherFunc(event, 'see_teacher')"
            id="t_defaultOpen"
          >
            <i class="fas fa-info-circle"></i>
          </button>
          <button class="t_btn_tablinks" onclick="teacherFunc(event, 'add_teacher')">
            <i class="fas fa-plus-circle"></i>
          </button>
        </div>
      </div>

      <div id="see_teacher" class="teacher_tabcontent">
        <div class="teacher_search">
            <input type="text" class="search_input" placeholder="Напишете името тук">
        </div>
        <table>
          <tr>
            <th width="50px">ID</th>
            <th width="150px">Име</th>
            <th width="100px">Фамилия</th>
            <th>Адрес</th>
            <th>Квалификация</th>
            <th>Телефонен номер</th>
            <th width="100px">Пол</th>
            <th width="100px">Опции</th>
          </tr>
          <tbody id="t_table_body">

          </tbody>
        </table>
      </div>

      <div id="add_teacher" class="teacher_tabcontent">
        <form autocomplete="off" id="formData">
          <h2>Формуляр за регистрация на учител</h2>
          <div class="first_last_name">
            <span class="f_left">
              <label for="fname">Име</label>
              <input type="text" id="fname" name="f_name" required />
              <br />
            </span>
            <span class="l_right">
              <label for="lname">Фамилия</label>
              <input type="text" id="lname" name="l_name" required />
              <br />
            </span>
          </div>
          <label for="t_address">Адрес</label>
          <input type="text" id="t_address" name="address" required />
          <br />
          <label for="t_qualification">Квалификация</label>
          <input
            type="text"
            id="t_qualification"
            name="t_qualification"
            required
          />
          <br />
          <div class="t_city">
            <span class="t_city_left">
              <label for="t_city">Град</label>
              <input type="text" id="t_city" name="t_city" required />
              <br />
            </span>
            <span class="t_city_right">
              <label for="t_state">Област</label>
              <input type="text" id="t_state" name="t_state" required />
              <br />
            </span>
          </div>
          <label for="t_zipcode">Пощенски код</label>
          <input
            type="text"
            id="t_zipcode"
            name="t_zipcode"
            placeholder="пощенски код"
            required
          />
          <br />
          <label for="t_gender">Пол</label>
          <select name="gender" id="t_gender" required>
            <option value="">Моля изберете пол</option>
            <option value="Жена">Жена</option>
            <option value="Мъж">Мъж</option>
            <option value="Друг">Друг</option>
          </select>
          <br />
          <label for="t_phone">Телефонен номер</label>
          <input
		  min="0" maxlength="10"
            type="text"
            id="t_phone"
            name="t_phone"
            placeholder="08********"
            required
          />
          <br />
          <label for="t_email">E-mail</label>
          <input
            type="text"
            id="t_email"
            name="t_email"
            placeholder="E-mail..."
            required
          />
          <br />
          <input type="submit" id="sub_teacher_btn"></input>
        </form>
      </div>
    
      <div id="errorMessage"></div>
      <div id="successMessage"></div>
    </div>

    <div class="modal" id="edit_modal">
        <div class="modal_body">
            <div id="hide_edit_modal">X</div>
            <form id="t_edit_table">
              
            </form>
        </div>
      </div>

      <div class="details_modal" id="view_detail_modal">
        <div class="details_modal_body">
            <div id="hide_details_modal">X</div>
            <div class="details_modal_body_inner">
              
            </div>
        </div>
      </div>