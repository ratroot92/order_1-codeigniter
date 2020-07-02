<body>
   <style>
      .custom-navbar{
      height:120px;
      /*background-color: #6c757d!important;*/
      background-color: #000;
      opacity: 0.8;
      }
      .navbar-brand {
      font-size: 30px;
      }
      .nav-link{
      color:#f84e57!important;
      font-weight: bold;
      font-size: 14px;
      }
      .nav-link:hover{
      color:#fff!important;
      font-weight: bold;
      }
      .dot{
      background-color: white!important;
      margin-right: 5px!important;
      color: white;
      }
      .logo img {
      width: 100px;
      }
      @media screen and (min-width:992px) and (max-width:1482px){
      .navbar-brand {
      font-size: 20px;
      }
      .navbar-brand{
      display: none;
      }
      .nav-link{
      color:#f84e57!important;
      font-weight: bold;
      font-size: 11px;
      }
      .custom-navbar{
      height:80px;
      }
      }
   </style>

   <style>
      .custom-banner{
      width: 100%;
      height: 400px;
      }
      label{
      font-family: jannalt_regular !important;
      }
      #form_content{
      margin-top: 130px;
      }
      input,select{
      border-radius:3px!important;
      }
   </style>
   <div class="container-fluid">
   <div class="row">
   <div class="col-md-12">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0 p-0 ">
             <img src="
<?php echo base_url("/assets/images/logo2.png")?>" style="height:90px;
;
width:125px;
%;
 " class="" alt="Mukhtar Floor Mills"/>
  <a class="navbar-brand" href="#">Mukhtar Flour Mill</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-4">
            <li class="nav-item active">
               <a class="nav-link" href="
<?php echo base_url('/home')?>">
               <span class="dot">.</span>HOME
               <span class="sr-only">(current)</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="
<?php echo base_url('/about')?>">
               <span class="dot">.</span>ABOUT US
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="
<?php echo base_url('/expertise')?>">
               <span class="dot">.</span>OUR EXPERTISE
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="
<?php echo base_url('/our_products')?>">
               <span class="dot">.</span>OUR PRODUCTS
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="
<?php echo base_url('/service')?>">
               <span class="dot">.</span>OUR SERVICES
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="
<?php echo base_url('/career')?>">
               <span class="dot">.</span>CAREERS
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ base_url('/askourexperts') }}">
               <span class="dot">.</span>ASK OUR EXPERTS
               </a>
            </li>
            <li>
               <a class="nav-link"href="
<?php echo base_url('/contact')?>">
               <span class="dot">.</span>CONTACT US
               </a>
            </li>

              <li>
               <a class="nav-link"href="
<?php echo base_url('/flourlist')?>">
               <span class="dot">.</span>ITEMS
               </a>
            </li>
            <!-- <li><a href="http://www.crownbake.co/">Crown BAKE</a></li> -->
         </ul>

  </div>
</nav>
      </div>

   <div class="col-md-12" id="form_content">

            <img class="custom-banner"src="<?php echo base_url("/assets/images/1.jpg")?>" alt="">


      <div class="row mt-5">
         <div class="col-md-2"></div>
         <div class="col-md-7 ">
            <form action="<?php echo base_url('career/index')?>" enctype="multipart/form-data" method="POST">
               <div class="form-group">
                  <label for="full_name">Name <span class="ml-3 text-danger font-weight-bold">*</span></label>
                  <input type="text" class="form-control " id="full_name" name="full_name" required="required" />
               </div>
               <div class="form-group">
                  <label for="family_name">Family Name<span class="ml-3 text-danger font-weight-bold">*</span></label>
                  <input type="text" class="form-control " id="family_name" name="family_name" required="required" />
               </div>
               <div class="form-group">
                  <label for="name">Gender <span class="ml-3 text-danger font-weight-bold">*</span></label>
                  <select name="gender" class="form-control "  id="gender">
                     <option value="">Select gender</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="email">Email<span class="ml-3 text-danger font-weight-bold">*</span></label>
                  <input type="email" class="form-control " id="email" name="email" required="required" />
               </div>
               <div class="form-group">
                  <label for="country_code">Phone<span class="ml-3 text-danger font-weight-bold">*</span></label>
               </div>
               <div class="form-group form-inline">
                  <select name="country_code" class="form-control" id=""style="width:150px; ;" required="required">
                     <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                     <option data-countryCode="US" value="1">USA (+1)</option>
                     <optgroup label="Other countries">
                        <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                        <option data-countryCode="AD" value="376">Andorra (+376)</option>
                        <option data-countryCode="AO" value="244">Angola (+244)</option>
                        <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                        <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                        <option data-countryCode="AR" value="54">Argentina (+54)</option>
                        <option data-countryCode="AM" value="374">Armenia (+374)</option>
                        <option data-countryCode="AW" value="297">Aruba (+297)</option>
                        <option data-countryCode="AU" value="61">Australia (+61)</option>
                        <option data-countryCode="AT" value="43">Austria (+43)</option>
                        <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                        <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                        <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                        <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                        <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                        <option data-countryCode="BY" value="375">Belarus (+375)</option>
                        <option data-countryCode="BE" value="32">Belgium (+32)</option>
                        <option data-countryCode="BZ" value="501">Belize (+501)</option>
                        <option data-countryCode="BJ" value="229">Benin (+229)</option>
                        <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                        <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                        <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                        <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                        <option data-countryCode="BW" value="267">Botswana (+267)</option>
                        <option data-countryCode="BR" value="55">Brazil (+55)</option>
                        <option data-countryCode="BN" value="673">Brunei (+673)</option>
                        <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                        <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                        <option data-countryCode="BI" value="257">Burundi (+257)</option>
                        <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                        <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                        <option data-countryCode="CA" value="1">Canada (+1)</option>
                        <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                        <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                        <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                        <option data-countryCode="CL" value="56">Chile (+56)</option>
                        <option data-countryCode="CN" value="86">China (+86)</option>
                        <option data-countryCode="CO" value="57">Colombia (+57)</option>
                        <option data-countryCode="KM" value="269">Comoros (+269)</option>
                        <option data-countryCode="CG" value="242">Congo (+242)</option>
                        <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                        <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                        <option data-countryCode="HR" value="385">Croatia (+385)</option>
                        <option data-countryCode="CU" value="53">Cuba (+53)</option>
                        <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                        <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                        <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                        <option data-countryCode="DK" value="45">Denmark (+45)</option>
                        <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                        <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                        <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                        <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                        <option data-countryCode="EG" value="20">Egypt (+20)</option>
                        <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                        <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                        <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                        <option data-countryCode="EE" value="372">Estonia (+372)</option>
                        <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                        <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                        <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                        <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                        <option data-countryCode="FI" value="358">Finland (+358)</option>
                        <option data-countryCode="FR" value="33">France (+33)</option>
                        <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                        <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                        <option data-countryCode="GA" value="241">Gabon (+241)</option>
                        <option data-countryCode="GM" value="220">Gambia (+220)</option>
                        <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                        <option data-countryCode="DE" value="49">Germany (+49)</option>
                        <option data-countryCode="GH" value="233">Ghana (+233)</option>
                        <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                        <option data-countryCode="GR" value="30">Greece (+30)</option>
                        <option data-countryCode="GL" value="299">Greenland (+299)</option>
                        <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                        <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                        <option data-countryCode="GU" value="671">Guam (+671)</option>
                        <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                        <option data-countryCode="GN" value="224">Guinea (+224)</option>
                        <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                        <option data-countryCode="PK" value="92">Pakistan (+92)</option>
                        <option data-countryCode="GY" value="592">Guyana (+592)</option>
                        <option data-countryCode="HT" value="509">Haiti (+509)</option>
                        <option data-countryCode="HN" value="504">Honduras (+504)</option>
                        <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                        <option data-countryCode="HU" value="36">Hungary (+36)</option>
                        <option data-countryCode="IS" value="354">Iceland (+354)</option>
                        <option data-countryCode="IN" value="91">India (+91)</option>
                        <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                        <option data-countryCode="IR" value="98">Iran (+98)</option>
                        <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                        <option data-countryCode="IE" value="353">Ireland (+353)</option>
                        <option data-countryCode="IL" value="972">Israel (+972)</option>
                        <option data-countryCode="IT" value="39">Italy (+39)</option>
                        <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                        <option data-countryCode="JP" value="81">Japan (+81)</option>
                        <option data-countryCode="JO" value="962">Jordan (+962)</option>
                        <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                        <option data-countryCode="KE" value="254">Kenya (+254)</option>
                        <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                        <option data-countryCode="KP" value="850">Korea North (+850)</option>
                        <option data-countryCode="KR" value="82">Korea South (+82)</option>
                        <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                        <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                        <option data-countryCode="LA" value="856">Laos (+856)</option>
                        <option data-countryCode="LV" value="371">Latvia (+371)</option>
                        <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                        <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                        <option data-countryCode="LR" value="231">Liberia (+231)</option>
                        <option data-countryCode="LY" value="218">Libya (+218)</option>
                        <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                        <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                        <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                        <option data-countryCode="MO" value="853">Macao (+853)</option>
                        <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                        <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                        <option data-countryCode="MW" value="265">Malawi (+265)</option>
                        <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                        <option data-countryCode="MV" value="960">Maldives (+960)</option>
                        <option data-countryCode="ML" value="223">Mali (+223)</option>
                        <option data-countryCode="MT" value="356">Malta (+356)</option>
                        <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                        <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                        <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                        <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                        <option data-countryCode="MX" value="52">Mexico (+52)</option>
                        <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                        <option data-countryCode="MD" value="373">Moldova (+373)</option>
                        <option data-countryCode="MC" value="377">Monaco (+377)</option>
                        <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                        <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                        <option data-countryCode="MA" value="212">Morocco (+212)</option>
                        <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                        <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                        <option data-countryCode="NA" value="264">Namibia (+264)</option>
                        <option data-countryCode="NR" value="674">Nauru (+674)</option>
                        <option data-countryCode="NP" value="977">Nepal (+977)</option>
                        <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                        <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                        <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                        <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                        <option data-countryCode="NE" value="227">Niger (+227)</option>
                        <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                        <option data-countryCode="NU" value="683">Niue (+683)</option>
                        <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                        <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                        <option data-countryCode="NO" value="47">Norway (+47)</option>
                        <option data-countryCode="OM" value="968">Oman (+968)</option>
                        <option data-countryCode="PW" value="680">Palau (+680)</option>
                        <option data-countryCode="PA" value="507">Panama (+507)</option>
                        <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                        <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                        <option data-countryCode="PE" value="51">Peru (+51)</option>
                        <option data-countryCode="PH" value="63">Philippines (+63)</option>
                        <option data-countryCode="PL" value="48">Poland (+48)</option>
                        <option data-countryCode="PT" value="351">Portugal (+351)</option>
                        <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                        <option data-countryCode="QA" value="974">Qatar (+974)</option>
                        <option data-countryCode="RE" value="262">Reunion (+262)</option>
                        <option data-countryCode="RO" value="40">Romania (+40)</option>
                        <option data-countryCode="RU" value="7">Russia (+7)</option>
                        <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                        <option data-countryCode="SM" value="378">San Marino (+378)</option>
                        <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                        <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                        <option data-countryCode="SN" value="221">Senegal (+221)</option>
                        <option data-countryCode="CS" value="381">Serbia (+381)</option>
                        <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                        <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                        <option data-countryCode="SG" value="65">Singapore (+65)</option>
                        <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                        <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                        <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                        <option data-countryCode="SO" value="252">Somalia (+252)</option>
                        <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                        <option data-countryCode="ES" value="34">Spain (+34)</option>
                        <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                        <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                        <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                        <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                        <option data-countryCode="SD" value="249">Sudan (+249)</option>
                        <option data-countryCode="SR" value="597">Suriname (+597)</option>
                        <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                        <option data-countryCode="SE" value="46">Sweden (+46)</option>
                        <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                        <option data-countryCode="SI" value="963">Syria (+963)</option>
                        <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                        <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                        <option data-countryCode="TH" value="66">Thailand (+66)</option>
                        <option data-countryCode="TG" value="228">Togo (+228)</option>
                        <option data-countryCode="TO" value="676">Tonga (+676)</option>
                        <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                        <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                        <option data-countryCode="TR" value="90">Turkey (+90)</option>
                        <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                        <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                        <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                        <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                        <option data-countryCode="UG" value="256">Uganda (+256)</option>
                        <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                        <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                        <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                        <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                        <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                        <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                        <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                        <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                        <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                        <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                        <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                        <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                        <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                        <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                        <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                        <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                        <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                     </optgroup>
                  </select>
                  <input type="number" class="form-control" id="phone" name="phone">
               </div>
               <div lclass="form-group">
                  <label for="DOB">
                  Date of Birth<span class="ml-3 text-danger font-weight-bold">*</span>
                  </label>
               </div>
               <div class="form-group form-inline">
                  <select name="day" id="day"class="form-control" required="reequired">
                     <option value=""selected="selected">- Day -</option>
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
                  <select name="month"id="month" class="form-control" required="reequired">
                     <option value=""selected="selected">- Month -</option>
                     <option value="January">January</option>
                     <option value="Febuary">Febuary</option>
                     <option value="March">March</option>
                     <option value="April">April</option>
                     <option value="May">May</option>
                     <option value="June">June</option>
                     <option value="July">July</option>
                     <option value="August">August</option>
                     <option value="September">September</option>
                     <option value="October">October</option>
                     <option value="November">November</option>
                     <option value="December">December</option>
                  </select>
                  <select name="year" id="year"class="form-control" required="reequired">
                     <option value=""selected="selected">- Year -</option>
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
                     <option value="1930">1930</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="address">
                  Address<span class="ml-3 text-danger font-weight-bold">*</span>
                  </label>
                  <input type="text" class="form-control" id="address" name="address" required="required"/>
               </div>
               <div class="form-group">
                  <label for="street_address">
                  Street Address<span class="ml-3 text-danger font-weight-bold">*</span>
                  </label>
                  <input type="text" class="form-control" id="street_address" name="street_address" required="required"/>
               </div>
               <!--  -->
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-6">
                        <input type="text" name="city" id="city" class="form-control" required="required" />
                        <label for="city">City</label>
                     </div>
                     <div class="col-md-6">
                        <input type="text" name="state" id="state" class="form-control" required="required" />
                        <label for="state">State</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <input type="text" name="postal_code" id="postal_code" class="form-control" required="required" />
                        <label for="postal_code">Postal Zip Code<span class="ml-3 text-danger font-weight-bold">*</span></label>
                     </div>
                     <div class="col-md-6">
                        <select name="country"  id="country" class="form-control" required="required">
                           <option value=""selected="selected">Select Country</option>
                           <option value="Afganistan">Afghanistan</option>
                           <option value="Albania">Albania</option>
                           <option value="Algeria">Algeria</option>
                           <option value="American Samoa">American Samoa</option>
                           <option value="Andorra">Andorra</option>
                           <option value="Angola">Angola</option>
                           <option value="Anguilla">Anguilla</option>
                           <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                           <option value="Argentina">Argentina</option>
                           <option value="Armenia">Armenia</option>
                           <option value="Aruba">Aruba</option>
                           <option value="Australia">Australia</option>
                           <option value="Austria">Austria</option>
                           <option value="Azerbaijan">Azerbaijan</option>
                           <option value="Bahamas">Bahamas</option>
                           <option value="Bahrain">Bahrain</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Barbados">Barbados</option>
                           <option value="Belarus">Belarus</option>
                           <option value="Belgium">Belgium</option>
                           <option value="Belize">Belize</option>
                           <option value="Benin">Benin</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Bhutan">Bhutan</option>
                           <option value="Bolivia">Bolivia</option>
                           <option value="Bonaire">Bonaire</option>
                           <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                           <option value="Botswana">Botswana</option>
                           <option value="Brazil">Brazil</option>
                           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                           <option value="Brunei">Brunei</option>
                           <option value="Bulgaria">Bulgaria</option>
                           <option value="Burkina Faso">Burkina Faso</option>
                           <option value="Burundi">Burundi</option>
                           <option value="Cambodia">Cambodia</option>
                           <option value="Cameroon">Cameroon</option>
                           <option value="Canada">Canada</option>
                           <option value="Canary Islands">Canary Islands</option>
                           <option value="Cape Verde">Cape Verde</option>
                           <option value="Cayman Islands">Cayman Islands</option>
                           <option value="Central African Republic">Central African Republic</option>
                           <option value="Chad">Chad</option>
                           <option value="Channel Islands">Channel Islands</option>
                           <option value="Chile">Chile</option>
                           <option value="China">China</option>
                           <option value="Christmas Island">Christmas Island</option>
                           <option value="Cocos Island">Cocos Island</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Comoros">Comoros</option>
                           <option value="Congo">Congo</option>
                           <option value="Cook Islands">Cook Islands</option>
                           <option value="Costa Rica">Costa Rica</option>
                           <option value="Cote DIvoire">Cote DIvoire</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cuba">Cuba</option>
                           <option value="Curaco">Curacao</option>
                           <option value="Cyprus">Cyprus</option>
                           <option value="Czech Republic">Czech Republic</option>
                           <option value="Denmark">Denmark</option>
                           <option value="Djibouti">Djibouti</option>
                           <option value="Dominica">Dominica</option>
                           <option value="Dominican Republic">Dominican Republic</option>
                           <option value="East Timor">East Timor</option>
                           <option value="Ecuador">Ecuador</option>
                           <option value="Egypt">Egypt</option>
                           <option value="El Salvador">El Salvador</option>
                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                           <option value="Eritrea">Eritrea</option>
                           <option value="Estonia">Estonia</option>
                           <option value="Ethiopia">Ethiopia</option>
                           <option value="Falkland Islands">Falkland Islands</option>
                           <option value="Faroe Islands">Faroe Islands</option>
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                           <option value="French Guiana">French Guiana</option>
                           <option value="French Polynesia">French Polynesia</option>
                           <option value="French Southern Ter">French Southern Ter</option>
                           <option value="Gabon">Gabon</option>
                           <option value="Gambia">Gambia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Ghana">Ghana</option>
                           <option value="Gibraltar">Gibraltar</option>
                           <option value="Great Britain">Great Britain</option>
                           <option value="Greece">Greece</option>
                           <option value="Greenland">Greenland</option>
                           <option value="Grenada">Grenada</option>
                           <option value="Guadeloupe">Guadeloupe</option>
                           <option value="Guam">Guam</option>
                           <option value="Guatemala">Guatemala</option>
                           <option value="Guinea">Guinea</option>
                           <option value="Guyana">Guyana</option>
                           <option value="Haiti">Haiti</option>
                           <option value="Hawaii">Hawaii</option>
                           <option value="Honduras">Honduras</option>
                           <option value="Hong Kong">Hong Kong</option>
                           <option value="Hungary">Hungary</option>
                           <option value="Iceland">Iceland</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="India">India</option>
                           <option value="Iran">Iran</option>
                           <option value="Iraq">Iraq</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Isle of Man">Isle of Man</option>
                           <option value="Israel">Israel</option>
                           <option value="Italy">Italy</option>
                           <option value="Jamaica">Jamaica</option>
                           <option value="Japan">Japan</option>
                           <option value="Jordan">Jordan</option>
                           <option value="Kazakhstan">Kazakhstan</option>
                           <option value="Kenya">Kenya</option>
                           <option value="Kiribati">Kiribati</option>
                           <option value="Korea North">Korea North</option>
                           <option value="Korea Sout">Korea South</option>
                           <option value="Kuwait">Kuwait</option>
                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                           <option value="Laos">Laos</option>
                           <option value="Latvia">Latvia</option>
                           <option value="Lebanon">Lebanon</option>
                           <option value="Lesotho">Lesotho</option>
                           <option value="Liberia">Liberia</option>
                           <option value="Libya">Libya</option>
                           <option value="Liechtenstein">Liechtenstein</option>
                           <option value="Lithuania">Lithuania</option>
                           <option value="Luxembourg">Luxembourg</option>
                           <option value="Macau">Macau</option>
                           <option value="Macedonia">Macedonia</option>
                           <option value="Madagascar">Madagascar</option>
                           <option value="Malaysia">Malaysia</option>
                           <option value="Malawi">Malawi</option>
                           <option value="Maldives">Maldives</option>
                           <option value="Mali">Mali</option>
                           <option value="Malta">Malta</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Martinique">Martinique</option>
                           <option value="Mauritania">Mauritania</option>
                           <option value="Mauritius">Mauritius</option>
                           <option value="Mayotte">Mayotte</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Midway Islands">Midway Islands</option>
                           <option value="Moldova">Moldova</option>
                           <option value="Monaco">Monaco</option>
                           <option value="Mongolia">Mongolia</option>
                           <option value="Montserrat">Montserrat</option>
                           <option value="Morocco">Morocco</option>
                           <option value="Mozambique">Mozambique</option>
                           <option value="Myanmar">Myanmar</option>
                           <option value="Nambia">Nambia</option>
                           <option value="Nauru">Nauru</option>
                           <option value="Nepal">Nepal</option>
                           <option value="Netherland Antilles">Netherland Antilles</option>
                           <option value="Netherlands">Netherlands (Holland, Europe)</option>
                           <option value="Nevis">Nevis</option>
                           <option value="New Caledonia">New Caledonia</option>
                           <option value="New Zealand">New Zealand</option>
                           <option value="Nicaragua">Nicaragua</option>
                           <option value="Niger">Niger</option>
                           <option value="Nigeria">Nigeria</option>
                           <option value="Niue">Niue</option>
                           <option value="Norfolk Island">Norfolk Island</option>
                           <option value="Norway">Norway</option>
                           <option value="Oman">Oman</option>
                           <option value="Pakistan">Pakistan</option>
                           <option value="Palau Island">Palau Island</option>
                           <option value="Palestine">Palestine</option>
                           <option value="Panama">Panama</option>
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <option value="Paraguay">Paraguay</option>
                           <option value="Peru">Peru</option>
                           <option value="Phillipines">Philippines</option>
                           <option value="Pitcairn Island">Pitcairn Island</option>
                           <option value="Poland">Poland</option>
                           <option value="Portugal">Portugal</option>
                           <option value="Puerto Rico">Puerto Rico</option>
                           <option value="Qatar">Qatar</option>
                           <option value="Republic of Montenegro">Republic of Montenegro</option>
                           <option value="Republic of Serbia">Republic of Serbia</option>
                           <option value="Reunion">Reunion</option>
                           <option value="Romania">Romania</option>
                           <option value="Russia">Russia</option>
                           <option value="Rwanda">Rwanda</option>
                           <option value="St Barthelemy">St Barthelemy</option>
                           <option value="St Eustatius">St Eustatius</option>
                           <option value="St Helena">St Helena</option>
                           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                           <option value="St Lucia">St Lucia</option>
                           <option value="St Maarten">St Maarten</option>
                           <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                           <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                           <option value="Saipan">Saipan</option>
                           <option value="Samoa">Samoa</option>
                           <option value="Samoa American">Samoa American</option>
                           <option value="San Marino">San Marino</option>
                           <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                           <option value="Saudi Arabia">Saudi Arabia</option>
                           <option value="Senegal">Senegal</option>
                           <option value="Seychelles">Seychelles</option>
                           <option value="Sierra Leone">Sierra Leone</option>
                           <option value="Singapore">Singapore</option>
                           <option value="Slovakia">Slovakia</option>
                           <option value="Slovenia">Slovenia</option>
                           <option value="Solomon Islands">Solomon Islands</option>
                           <option value="Somalia">Somalia</option>
                           <option value="South Africa">South Africa</option>
                           <option value="Spain">Spain</option>
                           <option value="Sri Lanka">Sri Lanka</option>
                           <option value="Sudan">Sudan</option>
                           <option value="Suriname">Suriname</option>
                           <option value="Swaziland">Swaziland</option>
                           <option value="Sweden">Sweden</option>
                           <option value="Switzerland">Switzerland</option>
                           <option value="Syria">Syria</option>
                           <option value="Tahiti">Tahiti</option>
                           <option value="Taiwan">Taiwan</option>
                           <option value="Tajikistan">Tajikistan</option>
                           <option value="Tanzania">Tanzania</option>
                           <option value="Thailand">Thailand</option>
                           <option value="Togo">Togo</option>
                           <option value="Tokelau">Tokelau</option>
                           <option value="Tonga">Tonga</option>
                           <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                           <option value="Tunisia">Tunisia</option>
                           <option value="Turkey">Turkey</option>
                           <option value="Turkmenistan">Turkmenistan</option>
                           <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                           <option value="Tuvalu">Tuvalu</option>
                           <option value="Uganda">Uganda</option>
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="Ukraine">Ukraine</option>
                           <option value="United Arab Erimates">United Arab Emirates</option>
                           <option value="United States of America">United States of America</option>
                           <option value="Uraguay">Uruguay</option>
                           <option value="Uzbekistan">Uzbekistan</option>
                           <option value="Vanuatu">Vanuatu</option>
                           <option value="Vatican City State">Vatican City State</option>
                           <option value="Venezuela">Venezuela</option>
                           <option value="Vietnam">Vietnam</option>
                           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                           <option value="Wake Island">Wake Island</option>
                           <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                           <option value="Yemen">Yemen</option>
                           <option value="Zaire">Zaire</option>
                           <option value="Zambia">Zambia</option>
                           <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <label for="state">State</label>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="position">Position to apply to <span class="ml-3 text-danger font-weight-bold">*</span></label>
                  <select name="position" id="position" class="form-control" required="required">
                     <option value="" selected="selected">Seelct a position</option>
                     <option value="Accounting &amp; Finance " >Accounting &amp;
                        Finance
                     </option>
                     <option value="Cashier " >Cashier </option>
                     <option value="Human Resources" >Human Resources</option>
                     <option value="Technical Sales" >Technical Sales</option>
                     <option value="Marketing" >Marketing</option>
                     <option value="Material Handeling" >Material Handeling</option>
                     <option value="Purchaser " >Purchaser </option>
                     <option value="Scale Operator" >Scale Operator</option>
                     <option value="Truck Driver/Driver" >Truck Driver/Driver</option>
                     <option value="Warehouse Keeper" >Warehouse Keeper</option>
                     <option value="Laboratory Technician " >Laboratory Technician </option>
                     <option value="Milling Technician" >Milling Technician</option>
                     <option value="Mixing Technician " >Mixing Technician </option>
                     <option value="Production " >Production </option>
                     <option value="Product Development " >Product Development </option>
                     <option value="Quality Assurance " >Quality Assurance </option>
                     <option value="Blacksmith " >Blacksmith </option>
                     <option value="Electro Mechanical Technician " >Electro Mechanical Technician </option>
                     <option value="Fluting Technician" >Fluting Technician</option>
                     <option value="Maintenance " >Maintenance </option>
                     <option value="Technical" >Technical</option>
                     <option value="Other" >Other</option>
                  </select>
               </div>
               <div clas="form-group">
                  <label for="message">Message/Comments<span class="ml-3 text-danger font-weight-bold">*</span></label>
                  <textarea class="form-control"id="message"name="message"
                     placeholder="" style="height: 100px;" required="required"
                     ></textarea>
               </div>
               <div clas="form-group">
                  <label for="message">Uplaod your CV<span class="ml-3 text-danger font-weight-bold">*</span></label>
                  <input type="file" id="file"accept=".doc,.docx, .pdf" name="file" class="form-control" required="required" />
               </div>
               <div class="form-group mt-3">
                  <input type="submit" class="btn btn-primary" id="submit" name="submit"/>
                  <button type="button" class="btn btn-primary">Reset</button>
               </div>
            </form>
         </div>
         <div class="col-md-3 "></div>
      </div>
      <div id="footer" class="row">
      <div class="grid">
         <div class="full clearfix">
            <ul class="footer-menu">
               <li class="web">
                  <a href="javascript: void(0)">MUKHAR FLOUR MILLS </a>
                  <div class="webmail">
                     <div class="holder">
                        <form action="http://www.crownflourmills.com:2095/login/" method="post" target="_blank" class="clearfix">
                           <input type="text" name="user" placeholder="User name"/>
                           <input type="password" name="pass" placeholder="Password"/>
                           <input type="submit" value="Submit" class="button"/>
                        </form>
                     </div>
                  </div>
               </li>
               <!--                <li><a href="/site/faq">FAQs</a></li>-->
               <li><a href="/site/sitemap">SITEMAP</a></li>
            </ul>
            <div class="copyrights">
             Business operating hours:  <a href="http://cleartag.com" target="_blank">Monday - Friday: 08AM-06PM</a>
            </div>
         </div>
      </div>
   </div>
   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

