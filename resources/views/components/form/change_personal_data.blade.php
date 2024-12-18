<form name="change_personal_data" action="" method="POST" class="form_change_personal_data">
    <span class="text_800_32_black">{{__('personal_date.personal_date')}}</span>

    <div class="form_change_personal_data_box">
        <div class="input_change_data_wrapper">
            <div class="input_box_50">
                <label for="change_name" class="text_500_14_black">{{__('personal_date.your_name')}}</label>
                <input type="text" name="change_name" id="change_name"  class="input_change_data"
                       placeholder="{{__('personal_date.name')}}">
            </div>

            <div class="input_box_50">
                <label for="change_last_name" class="text_500_14_black">{{__('personal_date.your_last_name')}}</label>
                <input type="text" name="change_last_name" id="change_last_name"  class="input_change_data"
                       placeholder="{{__('personal_date.last_name')}}">
            </div>
        </div>

        <div class="input_change_data_wrapper">
            <div class="input_box_50">
                <label for="change_email" class="text_500_14_black">{{__('personal_date.email')}}</label>
                <input type="email" name="change_email" id="change_email" pattern=".+@example\.com"
                       class="input_change_data"
                       placeholder="taran.oleksanddra@gmail.com" size="30"/>
            </div>

            <div class="input_box_50">
                <label for="day" class="text_500_14_black">{{__('personal_date.date_of_birth')}}</label>
                <div class="birthdate_wrapper">
                    <select id="day" name="day" class="input_change_data select_change">
                        <option value="" disabled selected>22</option>

                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                    <select id="month" name="month" class="input_change_data select_change">
                        <option value="" disabled selected>{{__('personal_date.december')}}</option>
                        <option value="1">{{__('personal_date.january')}}</option>
                        <option value="2">{{__('personal_date.february')}}</option>
                        <option value="3">{{__('personal_date.march')}}</option>
                        <option value="4">{{__('personal_date.april')}}</option>
                        <option value="5">{{__('personal_date.may')}}</option>
                        <option value="6">{{__('personal_date.june')}}</option>
                        <option value="7">{{__('personal_date.july')}}</option>
                        <option value="8">{{__('personal_date.august')}}</option>
                        <option value="9">{{__('personal_date.september')}}</option>
                        <option value="10">{{__('personal_date.october')}}</option>
                        <option value="11">{{__('personal_date.november')}}</option>
                        <option value="12">{{__('personal_date.december')}}</option>
                    </select>

                    <select id="year" name="year" class="input_change_data select_change">
                        <option value="" disabled selected>1997</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn_change_personal_data">{{__('personal_date.save')}}</button>
    </div>
</form>
