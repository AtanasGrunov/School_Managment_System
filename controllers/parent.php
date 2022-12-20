<div class="parent_header">
                <h1>Родители</h1>
              </div>
              <span class="parent_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_parent_para">Родители</p> 
              </span>
             <div class="parent_data">
               <div class="parent_data_header">
                 <h1>Всички родители</h1>
                 <button class="parent_data_btn" id="add_parent">Добави</button>
               </div>
               <div id="showParentData">
          
               </div>
   
                    <div class="parent_modal" id="parent_modal">
                        <div class="parent_modal_body">
                            <div id="hide_parent_modal">X</div>
                            <div class="parent_modal_body_inner">
   
                              <form enctype="multipart/form-data" id="parent_formData" >
                                    <h2>Формуляр за регистрация на родител</h2>
                   
                                    <label for="s_id">Име на ученика</label>
                                    <select name="s_id" id="s_foreign_key"> 
                                        <!-- show student foreign key here -->
                                    </select>
                                  
                                    <br>
                                    <br>
                                    <label for="p_image">Аватар</label>
                                    <input
                                      type="file"
                                      id="p_image"
                                      name="file"
                                      required
                                    />
                                    <br>
                                        <label for="p_name">Име на родителя</label>
                                        <input type="text" id="p_name" name="p_name" required />
                                        <br />
                                  <label for="p_gender">Пол</label>
                                    <select name="p_gender" id="p_gender" required>
                                      <option value="">Изберете един</option>
                                      <option value="Жена">Жена</option>
                                      <option value="Мъж">Мъж</option>
                                      <option value="Друг">Друг</option>
                                    </select>
                                    <br />
                                    <label for="p_occupation">Професия</label>
                                    <input type="text" id="p_occupation" name="p_occupation" required />
                                    <br />
                                    <label for="p_address">Адрес</label>
                                    <input
                                      type="text"
                                      id="p_address"
                                      name="p_address"
                                      required
                                    />
                                    <br />
                                    <label for="p_phone">Телефонен номер</label>
                                    <input
                                      type="text"
                                      id="p_phone"
                                      name="p_phone"
                                      required
                                    />
                                    <label for="p_email">Email</label>
                                    <input
                                      type="text"
                                      id="p_email"
                                      name="p_email"
                                      required
                                    />
                                    <br />
                                    <input type="submit" name="p_submit" id="p_parent_btn"></input>
                              </form>
      
                            </div>
                        </div>
                      </div>
           
</div>
<h1 style="margin:35px 0px 20px 0px;">Всички права запазени</h1>