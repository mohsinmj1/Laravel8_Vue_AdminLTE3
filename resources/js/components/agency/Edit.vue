<style>
.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
.to{
    height: 29px;
color: white;
background-color: #227DC7;
}
.btn-size {
  font-size: 9px !important;

}
</style>

<template>

<section class="content">
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <h2>Edit Agency: Ateca Consulting Ltd </h2>
                </div>
        </div>
        <div class="bg-white pb-4">
            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item" style="width:33%">
                        <a class="nav-link active" id="custom-content-below-main-tab" data-toggle="pill" href="#custom-content-below-main" role="tab" aria-controls="custom-content-below-main" aria-selected="true">Primary Contact</a>
                    </li>
                    <li class="nav-item" style="width:33%">
                        <a class="nav-link" id="custom-content-below-date-ranges-tab" data-toggle="pill" href="#custom-content-below-date-ranges" role="tab" aria-controls="custom-content-below-date-ranges" aria-selected="false">Invoice Contact</a>
                    </li>
                    <li class="nav-item" style="width:33%">
                        <a class="nav-link" id="custom-content-below-reference-tab" data-toggle="pill" href="#custom-content-below-reference" role="tab" aria-controls="custom-content-below-reference" aria-selected="false">History</a>
                    </li>                   
                </ul><br>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade active show" id="custom-content-below-main" role="tabpanel" aria-labelledby="custom-content-below-main-tab">
                        <div class="card card-primary card-outline card-tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-2 pl-4">
                                        <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                General Info
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="client" class="d-block mb-1">Agency Name *</label>
                                                <input type="text" value="Ateca Consulting Ltd"  class="form-control form-control-sm">
                                            </div>
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Logout URL</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>                                                
                                        </div>
                                        <div class="row"> 
                                            <div class="col-lg-3">
                                                <label for="client" class="d-block mb-1">Agency Logo</label>                                                                                                                                                                               
                                                <span>
                                                    <input  type="file" 
                                                            style="visibility:hidden; width: 1px;" 
                                                            id='${multipartFilePath}' name='${multipartFilePath}'  
                                                            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->                                                                
                                                    <input class="btn" style="background-color:#6254B2 !important;color:white" type="button" value="Upload" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
                                                    &nbsp;
                                                    <span  class="badge badge-important" ></span>
                                                </span>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="client" class="d-block mb-1">Agency Favicon</label>                                                                                                                                                                               
                                                <span>
                                                    <input  type="file" 
                                                            style="visibility:hidden; width: 1px;" 
                                                            id='${multipartFilePath}' name='${multipartFilePath}'  
                                                            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->                                                                
                                                    <input class="btn" style="background-color:#6254B2 !important;color:white" type="button" value="Upload" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
                                                    &nbsp;
                                                    <span  class="badge badge-important" ></span>
                                                </span>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline card-tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-2 pl-4">
                                        <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                Primary Contact
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Department</label>
                                               <input type="text" value="jordan.cooke@ateca.co.uk" class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Email *</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>                                         
                                        </div>      
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">First Name</label>
                                               <input type="text" value="Steve"  class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Last Name</label>
                                               <input type="text" value="Slater"  class="form-control form-control-sm">                                           
                                            </div>                                         
                                        </div>   
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Phone</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Mobile</label>
                                               <input type="text"  value="Lo07494805051don"  class="form-control form-control-sm">                                           
                                            </div>                                          
                                        </div>                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>     
                        <div class="card card-primary card-outline card-tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-2 pl-4">
                                        <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                Address Details
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Address 1 *</label>
                                               <input type="text" value="27 Old Gloucester Street"  class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">County</label>
                                               <input type="text"   class="form-control form-control-sm">                                           
                                            </div>                                         
                                        </div>      
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Address 2 *</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Country</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>                                         
                                        </div>   
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Town *</label>
                                               <input type="text" value="London"  class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Country Code *</label>
                                                    <select class="form-control select2" style="width:100%"> 
                                                    <option value=""></option>
                                                    <option value="AD">AD (Andorra)</option>
                                                    <option value="AE">AE (United Arab Emirates)</option>
                                                    <option value="AF">AF (Afghanistan)</option>
                                                    <option value="AG">AG (Antigua and Barbuda)</option>
                                                    <option value="AI">AI (Anguilla)</option>
                                                    <option value="AL">AL (Albania)</option>
                                                    <option value="AM">AM (Armenia)</option>
                                                    <option value="AN">AN (Netherlands Antilles)</option>
                                                    <option value="AO">AO (Angola)</option>
                                                    <option value="AQ">AQ (Antarctica)</option>
                                                    <option value="AR">AR (Argentina)</option>
                                                    <option value="AS">AS (American Samoa)</option>
                                                    <option value="AT">AT (Austria)</option>
                                                    <option value="AU">AU (Australia)</option>
                                                    <option value="AW">AW (Aruba)</option>
                                                    <option value="AX">AX (Åland Islands)</option>
                                                    <option value="AZ">AZ (Azerbaijan)</option>
                                                    <option value="BA">BA (Bosnia and Herzegovina)</option>
                                                    <option value="BB">BB (Barbados)</option>
                                                    <option value="BD">BD (Bangladesh)</option>
                                                    <option value="BE">BE (Belgium)</option>
                                                    <option value="BF">BF (Burkina Faso)</option>
                                                    <option value="BG">BG (Bulgaria)</option>
                                                    <option value="BH">BH (Bahrain)</option>
                                                    <option value="BI">BI (Burundi)</option>
                                                    <option value="BJ">BJ (Benin)</option>
                                                    <option value="BL">BL (Saint Barthélemy)</option>
                                                    <option value="BM">BM (Bermuda)</option>
                                                    <option value="BN">BN (Brunei)</option>
                                                    <option value="BO">BO (Bolivia)</option>
                                                    <option value="BQ">BQ (Bonaire, Sint Eustatius and Saba)</option>
                                                    <option value="BR">BR (Brazil)</option>
                                                    <option value="BS">BS (Bahamas)</option>
                                                    <option value="BT">BT (Bhutan)</option>
                                                    <option value="BV">BV (Bouvet Island)</option>
                                                    <option value="BW">BW (Botswana)</option>
                                                    <option value="BY">BY (Belarus)</option>
                                                    <option value="BZ">BZ (Belize)</option>
                                                    <option value="CA">CA (Canada)</option>
                                                    <option value="CC">CC (Cocos Islands)</option>
                                                    <option value="CD">CD (The Democratic Republic Of Congo)</option>
                                                    <option value="CF">CF (Central African Republic)</option>
                                                    <option value="CG">CG (Congo)</option>
                                                    <option value="CH">CH (Switzerland)</option>
                                                    <option value="CI">CI (Côte d'Ivoire)</option>
                                                    <option value="CK">CK (Cook Islands)</option>
                                                    <option value="CL">CL (Chile)</option>
                                                    <option value="CM">CM (Cameroon)</option>
                                                    <option value="CN">CN (China)</option>
                                                    <option value="CO">CO (Colombia)</option>
                                                    <option value="CR">CR (Costa Rica)</option>
                                                    <option value="CU">CU (Cuba)</option>
                                                    <option value="CV">CV (Cape Verde)</option>
                                                    <option value="CW">CW (Curaçao)</option>
                                                    <option value="CX">CX (Christmas Island)</option>
                                                    <option value="CY">CY (Cyprus)</option>
                                                    <option value="CZ">CZ (Czech Republic)</option>
                                                    <option value="DE">DE (Germany)</option>
                                                    <option value="DJ">DJ (Djibouti)</option>
                                                    <option value="DK">DK (Denmark)</option>
                                                    <option value="DM">DM (Dominica)</option>
                                                    <option value="DO">DO (Dominican Republic)</option>
                                                    <option value="DZ">DZ (Algeria)</option>
                                                    <option value="EC">EC (Ecuador)</option>
                                                    <option value="EE">EE (Estonia)</option>
                                                    <option value="EG">EG (Egypt)</option>
                                                    <option value="EH">EH (Western Sahara)</option>
                                                    <option value="ER">ER (Eritrea)</option>
                                                    <option value="ES">ES (Spain)</option>
                                                    <option value="ET">ET (Ethiopia)</option>
                                                    <option value="FI">FI (Finland)</option>
                                                    <option value="FJ">FJ (Fiji)</option>
                                                    <option value="FK">FK (Falkland Islands)</option>
                                                    <option value="FM">FM (Micronesia)</option>
                                                    <option value="FO">FO (Faroe Islands)</option>
                                                    <option value="FR">FR (France)</option>
                                                    <option value="GA">GA (Gabon)</option>
                                                    <option value="GB" selected="selected">GB (United Kingdom)</option>
                                                    <option value="GD">GD (Grenada)</option>
                                                    <option value="GE">GE (Georgia)</option>
                                                    <option value="GF">GF (French Guiana)</option>
                                                    <option value="GG">GG (Guernsey)</option>
                                                    <option value="GH">GH (Ghana)</option>
                                                    <option value="GI">GI (Gibraltar)</option>
                                                    <option value="GL">GL (Greenland)</option>
                                                    <option value="GM">GM (Gambia)</option>
                                                    <option value="GN">GN (Guinea)</option>
                                                    <option value="GP">GP (Guadeloupe)</option>
                                                    <option value="GQ">GQ (Equatorial Guinea)</option>
                                                    <option value="GR">GR (Greece)</option>
                                                    <option value="GS">GS (South Georgia And The South Sandwich Islands)</option>
                                                    <option value="GT">GT (Guatemala)</option>
                                                    <option value="GU">GU (Guam)</option>
                                                    <option value="GW">GW (Guinea-Bissau)</option>
                                                    <option value="GY">GY (Guyana)</option>
                                                    <option value="HK">HK (Hong Kong)</option>
                                                    <option value="HM">HM (Heard Island And McDonald Islands)</option>
                                                    <option value="HN">HN (Honduras)</option>
                                                    <option value="HR">HR (Croatia)</option>
                                                    <option value="HT">HT (Haiti)</option>
                                                    <option value="HU">HU (Hungary)</option>
                                                    <option value="ID">ID (Indonesia)</option>
                                                    <option value="IE">IE (Ireland)</option>
                                                    <option value="IL">IL (Israel)</option>
                                                    <option value="IM">IM (Isle Of Man)</option>
                                                    <option value="IN">IN (India)</option>
                                                    <option value="IO">IO (British Indian Ocean Territory)</option>
                                                    <option value="IQ">IQ (Iraq)</option>
                                                    <option value="IR">IR (Iran)</option>
                                                    <option value="IS">IS (Iceland)</option>
                                                    <option value="IT">IT (Italy)</option>
                                                    <option value="JE">JE (Jersey)</option>
                                                    <option value="JM">JM (Jamaica)</option>
                                                    <option value="JO">JO (Jordan)</option>
                                                    <option value="JP">JP (Japan)</option>
                                                    <option value="KE">KE (Kenya)</option>
                                                    <option value="KG">KG (Kyrgyzstan)</option>
                                                    <option value="KH">KH (Cambodia)</option>
                                                    <option value="KI">KI (Kiribati)</option>
                                                    <option value="KM">KM (Comoros)</option>
                                                    <option value="KN">KN (Saint Kitts And Nevis)</option>
                                                    <option value="KP">KP (North Korea)</option>
                                                    <option value="KR">KR (South Korea)</option>
                                                    <option value="KW">KW (Kuwait)</option>
                                                    <option value="KY">KY (Cayman Islands)</option>
                                                    <option value="KZ">KZ (Kazakhstan)</option>
                                                    <option value="LA">LA (Laos)</option>
                                                    <option value="LB">LB (Lebanon)</option>
                                                    <option value="LC">LC (Saint Lucia)</option>
                                                    <option value="LI">LI (Liechtenstein)</option>
                                                    <option value="LK">LK (Sri Lanka)</option>
                                                    <option value="LR">LR (Liberia)</option>
                                                    <option value="LS">LS (Lesotho)</option>
                                                    <option value="LT">LT (Lithuania)</option>
                                                    <option value="LU">LU (Luxembourg)</option>
                                                    <option value="LV">LV (Latvia)</option>
                                                    <option value="LY">LY (Libya)</option>
                                                    <option value="MA">MA (Morocco)</option>
                                                    <option value="MC">MC (Monaco)</option>
                                                    <option value="MD">MD (Moldova)</option>
                                                    <option value="ME">ME (Montenegro)</option>
                                                    <option value="MF">MF (Saint Martin)</option>
                                                    <option value="MG">MG (Madagascar)</option>
                                                    <option value="MH">MH (Marshall Islands)</option>
                                                    <option value="MK">MK (Macedonia)</option>
                                                    <option value="ML">ML (Mali)</option>
                                                    <option value="MM">MM (Myanmar)</option>
                                                    <option value="MN">MN (Mongolia)</option>
                                                    <option value="MO">MO (Macao)</option>
                                                    <option value="MP">MP (Northern Mariana Islands)</option>
                                                    <option value="MQ">MQ (Martinique)</option>
                                                    <option value="MR">MR (Mauritania)</option>
                                                    <option value="MS">MS (Montserrat)</option>
                                                    <option value="MT">MT (Malta)</option>
                                                    <option value="MU">MU (Mauritius)</option>
                                                    <option value="MV">MV (Maldives)</option>
                                                    <option value="MW">MW (Malawi)</option>
                                                    <option value="MX">MX (Mexico)</option>
                                                    <option value="MY">MY (Malaysia)</option>
                                                    <option value="MZ">MZ (Mozambique)</option>
                                                    <option value="NA">NA (Namibia)</option>
                                                    <option value="NC">NC (New Caledonia)</option>
                                                    <option value="NE">NE (Niger)</option>
                                                    <option value="NF">NF (Norfolk Island)</option>
                                                    <option value="NG">NG (Nigeria)</option>
                                                    <option value="NI">NI (Nicaragua)</option>
                                                    <option value="NL">NL (Netherlands)</option>
                                                    <option value="NO">NO (Norway)</option>
                                                    <option value="NP">NP (Nepal)</option>
                                                    <option value="NR">NR (Nauru)</option>
                                                    <option value="NU">NU (Niue)</option>
                                                    <option value="NZ">NZ (New Zealand)</option>
                                                    <option value="OM">OM (Oman)</option>
                                                    <option value="PA">PA (Panama)</option>
                                                    <option value="PE">PE (Peru)</option>
                                                    <option value="PF">PF (French Polynesia)</option>
                                                    <option value="PG">PG (Papua New Guinea)</option>
                                                    <option value="PH">PH (Philippines)</option>
                                                    <option value="PK">PK (Pakistan)</option>
                                                    <option value="PL">PL (Poland)</option>
                                                    <option value="PM">PM (Saint Pierre And Miquelon)</option>
                                                    <option value="PN">PN (Pitcairn)</option>
                                                    <option value="PR">PR (Puerto Rico)</option>
                                                    <option value="PS">PS (Palestine)</option>
                                                    <option value="PT">PT (Portugal)</option>
                                                    <option value="PW">PW (Palau)</option>
                                                    <option value="PY">PY (Paraguay)</option>
                                                    <option value="QA">QA (Qatar)</option>
                                                    <option value="RE">RE (Reunion)</option>
                                                    <option value="RO">RO (Romania)</option>
                                                    <option value="RS">RS (Serbia)</option>
                                                    <option value="RU">RU (Russia)</option>
                                                    <option value="RW">RW (Rwanda)</option>
                                                    <option value="SA">SA (Saudi Arabia)</option>
                                                    <option value="SB">SB (Solomon Islands)</option>
                                                    <option value="SC">SC (Seychelles)</option>
                                                    <option value="SD">SD (Sudan)</option>
                                                    <option value="SE">SE (Sweden)</option>
                                                    <option value="SG">SG (Singapore)</option>
                                                    <option value="SH">SH (Saint Helena)</option>
                                                    <option value="SI">SI (Slovenia)</option>
                                                    <option value="SJ">SJ (Svalbard And Jan Mayen)</option>
                                                    <option value="SK">SK (Slovakia)</option>
                                                    <option value="SL">SL (Sierra Leone)</option>
                                                    <option value="SM">SM (San Marino)</option>
                                                    <option value="SN">SN (Senegal)</option>
                                                    <option value="SO">SO (Somalia)</option>
                                                    <option value="SR">SR (Suriname)</option>
                                                    <option value="ST">ST (Sao Tome And Principe)</option>
                                                    <option value="SV">SV (El Salvador)</option>
                                                    <option value="SX">SX (Sint Maarten (Dutch part))</option>
                                                    <option value="SY">SY (Syria)</option>
                                                    <option value="SZ">SZ (Swaziland)</option>
                                                    <option value="TC">TC (Turks And Caicos Islands)</option>
                                                    <option value="TD">TD (Chad)</option>
                                                    <option value="TF">TF (French Southern Territories)</option>
                                                    <option value="TG">TG (Togo)</option>
                                                    <option value="TH">TH (Thailand)</option>
                                                    <option value="TJ">TJ (Tajikistan)</option>
                                                    <option value="TK">TK (Tokelau)</option>
                                                    <option value="TL">TL (Timor-Leste)</option>
                                                    <option value="TM">TM (Turkmenistan)</option>
                                                    <option value="TN">TN (Tunisia)</option>
                                                    <option value="TO">TO (Tonga)</option>
                                                    <option value="TR">TR (Turkey)</option>
                                                    <option value="TT">TT (Trinidad and Tobago)</option>
                                                    <option value="TV">TV (Tuvalu)</option>
                                                    <option value="TW">TW (Taiwan)</option>
                                                    <option value="TZ">TZ (Tanzania)</option>
                                                    <option value="UA">UA (Ukraine)</option>
                                                    <option value="UG">UG (Uganda)</option>
                                                    <option value="UM">UM (United States Minor Outlying Islands)</option>
                                                    <option value="US">US (United States)</option>
                                                    <option value="UY">UY (Uruguay)</option>
                                                    <option value="UZ">UZ (Uzbekistan)</option>
                                                    <option value="VA">VA (Vatican)</option>
                                                    <option value="VC">VC (Saint Vincent And The Grenadines)</option>
                                                    <option value="VE">VE (Venezuela)</option>
                                                    <option value="VG">VG (British Virgin Islands)</option>
                                                    <option value="VI">VI (U.S. Virgin Islands)</option>
                                                    <option value="VN">VN (Vietnam)</option>
                                                    <option value="VU">VU (Vanuatu)</option>
                                                    <option value="WF">WF (Wallis And Futuna)</option>
                                                    <option value="WS">WS (Samoa)</option>
                                                    <option value="YE">YE (Yemen)</option>
                                                    <option value="YT">YT (Mayotte)</option>
                                                    <option value="ZA">ZA (South Africa)</option>
                                                    <option value="ZM">ZM (Zambia)</option>
                                                    <option value="ZW">ZW (Zimbabwe)</option>
                                                    </select>                                          
                                            </div>                                         
                                        </div>    
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Postcode</label>
                                               <input type="text" value="WC1N 3AX"  class="form-control form-control-sm">                                           
                                            </div>                                                                                      
                                        </div>                              
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>      
                    <div class="tab-pane fade" id="custom-content-below-date-ranges" role="tabpanel" aria-labelledby="custom-content-below-date-ranges-tab">
                        <div class="card card-primary card-outline card-tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-2 pl-4">
                                        <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                Invoice Contact
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Department</label>
                                               <input type="text" value="Accounts Department"  class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Email *</label>
                                               <input type="text" value="jordan.cooke@ateca.co.uk"  class="form-control form-control-sm">                                           
                                            </div>                                         
                                        </div>     
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">First Name</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Last Name</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>                                         
                                        </div>   
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Phone</label>
                                               <input type="text"   class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Mobile</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>                                         
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>                           
                        <div class="card card-primary card-outline card-tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-2 pl-4">
                                        <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                Address Details
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Address 1 *</label>
                                               <input type="text" value="27 Old Gloucester Street"  class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">County</label>
                                               <input type="text"   class="form-control form-control-sm">                                           
                                            </div>                                         
                                        </div>      
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Address 2 *</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>   
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Country</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>                                         
                                        </div>   
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Town *</label>
                                               <input type="text" value="London"  class="form-control form-control-sm">                                           
                                            </div>  
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Country Code *</label>
                                                <select class="form-control select2" style="width:100%"> 
                                                <option value=""></option>
                                                <option value="AD">AD (Andorra)</option>
                                                <option value="AE">AE (United Arab Emirates)</option>
                                                <option value="AF">AF (Afghanistan)</option>
                                                <option value="AG">AG (Antigua and Barbuda)</option>
                                                <option value="AI">AI (Anguilla)</option>
                                                <option value="AL">AL (Albania)</option>
                                                <option value="AM">AM (Armenia)</option>
                                                <option value="AN">AN (Netherlands Antilles)</option>
                                                <option value="AO">AO (Angola)</option>
                                                <option value="AQ">AQ (Antarctica)</option>
                                                <option value="AR">AR (Argentina)</option>
                                                <option value="AS">AS (American Samoa)</option>
                                                <option value="AT">AT (Austria)</option>
                                                <option value="AU">AU (Australia)</option>
                                                <option value="AW">AW (Aruba)</option>
                                                <option value="AX">AX (Åland Islands)</option>
                                                <option value="AZ">AZ (Azerbaijan)</option>
                                                <option value="BA">BA (Bosnia and Herzegovina)</option>
                                                <option value="BB">BB (Barbados)</option>
                                                <option value="BD">BD (Bangladesh)</option>
                                                <option value="BE">BE (Belgium)</option>
                                                <option value="BF">BF (Burkina Faso)</option>
                                                <option value="BG">BG (Bulgaria)</option>
                                                <option value="BH">BH (Bahrain)</option>
                                                <option value="BI">BI (Burundi)</option>
                                                <option value="BJ">BJ (Benin)</option>
                                                <option value="BL">BL (Saint Barthélemy)</option>
                                                <option value="BM">BM (Bermuda)</option>
                                                <option value="BN">BN (Brunei)</option>
                                                <option value="BO">BO (Bolivia)</option>
                                                <option value="BQ">BQ (Bonaire, Sint Eustatius and Saba)</option>
                                                <option value="BR">BR (Brazil)</option>
                                                <option value="BS">BS (Bahamas)</option>
                                                <option value="BT">BT (Bhutan)</option>
                                                <option value="BV">BV (Bouvet Island)</option>
                                                <option value="BW">BW (Botswana)</option>
                                                <option value="BY">BY (Belarus)</option>
                                                <option value="BZ">BZ (Belize)</option>
                                                <option value="CA">CA (Canada)</option>
                                                <option value="CC">CC (Cocos Islands)</option>
                                                <option value="CD">CD (The Democratic Republic Of Congo)</option>
                                                <option value="CF">CF (Central African Republic)</option>
                                                <option value="CG">CG (Congo)</option>
                                                <option value="CH">CH (Switzerland)</option>
                                                <option value="CI">CI (Côte d'Ivoire)</option>
                                                <option value="CK">CK (Cook Islands)</option>
                                                <option value="CL">CL (Chile)</option>
                                                <option value="CM">CM (Cameroon)</option>
                                                <option value="CN">CN (China)</option>
                                                <option value="CO">CO (Colombia)</option>
                                                <option value="CR">CR (Costa Rica)</option>
                                                <option value="CU">CU (Cuba)</option>
                                                <option value="CV">CV (Cape Verde)</option>
                                                <option value="CW">CW (Curaçao)</option>
                                                <option value="CX">CX (Christmas Island)</option>
                                                <option value="CY">CY (Cyprus)</option>
                                                <option value="CZ">CZ (Czech Republic)</option>
                                                <option value="DE">DE (Germany)</option>
                                                <option value="DJ">DJ (Djibouti)</option>
                                                <option value="DK">DK (Denmark)</option>
                                                <option value="DM">DM (Dominica)</option>
                                                <option value="DO">DO (Dominican Republic)</option>
                                                <option value="DZ">DZ (Algeria)</option>
                                                <option value="EC">EC (Ecuador)</option>
                                                <option value="EE">EE (Estonia)</option>
                                                <option value="EG">EG (Egypt)</option>
                                                <option value="EH">EH (Western Sahara)</option>
                                                <option value="ER">ER (Eritrea)</option>
                                                <option value="ES">ES (Spain)</option>
                                                <option value="ET">ET (Ethiopia)</option>
                                                <option value="FI">FI (Finland)</option>
                                                <option value="FJ">FJ (Fiji)</option>
                                                <option value="FK">FK (Falkland Islands)</option>
                                                <option value="FM">FM (Micronesia)</option>
                                                <option value="FO">FO (Faroe Islands)</option>
                                                <option value="FR">FR (France)</option>
                                                <option value="GA">GA (Gabon)</option>
                                                <option value="GB" selected="selected">GB (United Kingdom)</option>
                                                <option value="GD">GD (Grenada)</option>
                                                <option value="GE">GE (Georgia)</option>
                                                <option value="GF">GF (French Guiana)</option>
                                                <option value="GG">GG (Guernsey)</option>
                                                <option value="GH">GH (Ghana)</option>
                                                <option value="GI">GI (Gibraltar)</option>
                                                <option value="GL">GL (Greenland)</option>
                                                <option value="GM">GM (Gambia)</option>
                                                <option value="GN">GN (Guinea)</option>
                                                <option value="GP">GP (Guadeloupe)</option>
                                                <option value="GQ">GQ (Equatorial Guinea)</option>
                                                <option value="GR">GR (Greece)</option>
                                                <option value="GS">GS (South Georgia And The South Sandwich Islands)</option>
                                                <option value="GT">GT (Guatemala)</option>
                                                <option value="GU">GU (Guam)</option>
                                                <option value="GW">GW (Guinea-Bissau)</option>
                                                <option value="GY">GY (Guyana)</option>
                                                <option value="HK">HK (Hong Kong)</option>
                                                <option value="HM">HM (Heard Island And McDonald Islands)</option>
                                                <option value="HN">HN (Honduras)</option>
                                                <option value="HR">HR (Croatia)</option>
                                                <option value="HT">HT (Haiti)</option>
                                                <option value="HU">HU (Hungary)</option>
                                                <option value="ID">ID (Indonesia)</option>
                                                <option value="IE">IE (Ireland)</option>
                                                <option value="IL">IL (Israel)</option>
                                                <option value="IM">IM (Isle Of Man)</option>
                                                <option value="IN">IN (India)</option>
                                                <option value="IO">IO (British Indian Ocean Territory)</option>
                                                <option value="IQ">IQ (Iraq)</option>
                                                <option value="IR">IR (Iran)</option>
                                                <option value="IS">IS (Iceland)</option>
                                                <option value="IT">IT (Italy)</option>
                                                <option value="JE">JE (Jersey)</option>
                                                <option value="JM">JM (Jamaica)</option>
                                                <option value="JO">JO (Jordan)</option>
                                                <option value="JP">JP (Japan)</option>
                                                <option value="KE">KE (Kenya)</option>
                                                <option value="KG">KG (Kyrgyzstan)</option>
                                                <option value="KH">KH (Cambodia)</option>
                                                <option value="KI">KI (Kiribati)</option>
                                                <option value="KM">KM (Comoros)</option>
                                                <option value="KN">KN (Saint Kitts And Nevis)</option>
                                                <option value="KP">KP (North Korea)</option>
                                                <option value="KR">KR (South Korea)</option>
                                                <option value="KW">KW (Kuwait)</option>
                                                <option value="KY">KY (Cayman Islands)</option>
                                                <option value="KZ">KZ (Kazakhstan)</option>
                                                <option value="LA">LA (Laos)</option>
                                                <option value="LB">LB (Lebanon)</option>
                                                <option value="LC">LC (Saint Lucia)</option>
                                                <option value="LI">LI (Liechtenstein)</option>
                                                <option value="LK">LK (Sri Lanka)</option>
                                                <option value="LR">LR (Liberia)</option>
                                                <option value="LS">LS (Lesotho)</option>
                                                <option value="LT">LT (Lithuania)</option>
                                                <option value="LU">LU (Luxembourg)</option>
                                                <option value="LV">LV (Latvia)</option>
                                                <option value="LY">LY (Libya)</option>
                                                <option value="MA">MA (Morocco)</option>
                                                <option value="MC">MC (Monaco)</option>
                                                <option value="MD">MD (Moldova)</option>
                                                <option value="ME">ME (Montenegro)</option>
                                                <option value="MF">MF (Saint Martin)</option>
                                                <option value="MG">MG (Madagascar)</option>
                                                <option value="MH">MH (Marshall Islands)</option>
                                                <option value="MK">MK (Macedonia)</option>
                                                <option value="ML">ML (Mali)</option>
                                                <option value="MM">MM (Myanmar)</option>
                                                <option value="MN">MN (Mongolia)</option>
                                                <option value="MO">MO (Macao)</option>
                                                <option value="MP">MP (Northern Mariana Islands)</option>
                                                <option value="MQ">MQ (Martinique)</option>
                                                <option value="MR">MR (Mauritania)</option>
                                                <option value="MS">MS (Montserrat)</option>
                                                <option value="MT">MT (Malta)</option>
                                                <option value="MU">MU (Mauritius)</option>
                                                <option value="MV">MV (Maldives)</option>
                                                <option value="MW">MW (Malawi)</option>
                                                <option value="MX">MX (Mexico)</option>
                                                <option value="MY">MY (Malaysia)</option>
                                                <option value="MZ">MZ (Mozambique)</option>
                                                <option value="NA">NA (Namibia)</option>
                                                <option value="NC">NC (New Caledonia)</option>
                                                <option value="NE">NE (Niger)</option>
                                                <option value="NF">NF (Norfolk Island)</option>
                                                <option value="NG">NG (Nigeria)</option>
                                                <option value="NI">NI (Nicaragua)</option>
                                                <option value="NL">NL (Netherlands)</option>
                                                <option value="NO">NO (Norway)</option>
                                                <option value="NP">NP (Nepal)</option>
                                                <option value="NR">NR (Nauru)</option>
                                                <option value="NU">NU (Niue)</option>
                                                <option value="NZ">NZ (New Zealand)</option>
                                                <option value="OM">OM (Oman)</option>
                                                <option value="PA">PA (Panama)</option>
                                                <option value="PE">PE (Peru)</option>
                                                <option value="PF">PF (French Polynesia)</option>
                                                <option value="PG">PG (Papua New Guinea)</option>
                                                <option value="PH">PH (Philippines)</option>
                                                <option value="PK">PK (Pakistan)</option>
                                                <option value="PL">PL (Poland)</option>
                                                <option value="PM">PM (Saint Pierre And Miquelon)</option>
                                                <option value="PN">PN (Pitcairn)</option>
                                                <option value="PR">PR (Puerto Rico)</option>
                                                <option value="PS">PS (Palestine)</option>
                                                <option value="PT">PT (Portugal)</option>
                                                <option value="PW">PW (Palau)</option>
                                                <option value="PY">PY (Paraguay)</option>
                                                <option value="QA">QA (Qatar)</option>
                                                <option value="RE">RE (Reunion)</option>
                                                <option value="RO">RO (Romania)</option>
                                                <option value="RS">RS (Serbia)</option>
                                                <option value="RU">RU (Russia)</option>
                                                <option value="RW">RW (Rwanda)</option>
                                                <option value="SA">SA (Saudi Arabia)</option>
                                                <option value="SB">SB (Solomon Islands)</option>
                                                <option value="SC">SC (Seychelles)</option>
                                                <option value="SD">SD (Sudan)</option>
                                                <option value="SE">SE (Sweden)</option>
                                                <option value="SG">SG (Singapore)</option>
                                                <option value="SH">SH (Saint Helena)</option>
                                                <option value="SI">SI (Slovenia)</option>
                                                <option value="SJ">SJ (Svalbard And Jan Mayen)</option>
                                                <option value="SK">SK (Slovakia)</option>
                                                <option value="SL">SL (Sierra Leone)</option>
                                                <option value="SM">SM (San Marino)</option>
                                                <option value="SN">SN (Senegal)</option>
                                                <option value="SO">SO (Somalia)</option>
                                                <option value="SR">SR (Suriname)</option>
                                                <option value="ST">ST (Sao Tome And Principe)</option>
                                                <option value="SV">SV (El Salvador)</option>
                                                <option value="SX">SX (Sint Maarten (Dutch part))</option>
                                                <option value="SY">SY (Syria)</option>
                                                <option value="SZ">SZ (Swaziland)</option>
                                                <option value="TC">TC (Turks And Caicos Islands)</option>
                                                <option value="TD">TD (Chad)</option>
                                                <option value="TF">TF (French Southern Territories)</option>
                                                <option value="TG">TG (Togo)</option>
                                                <option value="TH">TH (Thailand)</option>
                                                <option value="TJ">TJ (Tajikistan)</option>
                                                <option value="TK">TK (Tokelau)</option>
                                                <option value="TL">TL (Timor-Leste)</option>
                                                <option value="TM">TM (Turkmenistan)</option>
                                                <option value="TN">TN (Tunisia)</option>
                                                <option value="TO">TO (Tonga)</option>
                                                <option value="TR">TR (Turkey)</option>
                                                <option value="TT">TT (Trinidad and Tobago)</option>
                                                <option value="TV">TV (Tuvalu)</option>
                                                <option value="TW">TW (Taiwan)</option>
                                                <option value="TZ">TZ (Tanzania)</option>
                                                <option value="UA">UA (Ukraine)</option>
                                                <option value="UG">UG (Uganda)</option>
                                                <option value="UM">UM (United States Minor Outlying Islands)</option>
                                                <option value="US">US (United States)</option>
                                                <option value="UY">UY (Uruguay)</option>
                                                <option value="UZ">UZ (Uzbekistan)</option>
                                                <option value="VA">VA (Vatican)</option>
                                                <option value="VC">VC (Saint Vincent And The Grenadines)</option>
                                                <option value="VE">VE (Venezuela)</option>
                                                <option value="VG">VG (British Virgin Islands)</option>
                                                <option value="VI">VI (U.S. Virgin Islands)</option>
                                                <option value="VN">VN (Vietnam)</option>
                                                <option value="VU">VU (Vanuatu)</option>
                                                <option value="WF">WF (Wallis And Futuna)</option>
                                                <option value="WS">WS (Samoa)</option>
                                                <option value="YE">YE (Yemen)</option>
                                                <option value="YT">YT (Mayotte)</option>
                                                <option value="ZA">ZA (South Africa)</option>
                                                <option value="ZM">ZM (Zambia)</option>
                                                <option value="ZW">ZW (Zimbabwe)</option>
                                                </select>                                          
                                            </div>                                        
                                        </div>    
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Postcode</label>
                                               <input type="text" value="WC1N 3AX"  class="form-control form-control-sm">                                           
                                            </div>                                                                                      
                                        </div>                              
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>    
                    <div class="tab-pane fade" id="custom-content-below-reference" role="tabpanel" aria-labelledby="custom-content-below-reference-tab">
                        <div class="card card-primary card-outline card-tabs">
                            <div class="p-2 pl-4">
                                <div class="timesheet_create_tit">
                                    <h2 class="pb-2">
                                        Created: 23/05/2018 by Mr Jordan Cooke
                                    </h2>
                                    <p class="panel-sub-title font-13" style="color: #98a6ad;">Last Modified: 10/10/2021 by Root User</p>
                                </div>                                                                  
                            </div>
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width: 25px;">Date</th>
                                            <th style="width: 25px;">Time</th>
                                            <th style="width: 100px;">User</th>
                                            <th style="width: 150px;">Event</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    23/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:11 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Root User
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align:justify">
                                                    Created
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    23/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:12 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Root User
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    [Reporting, Dashboards, ClientManager]
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    23/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:21 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Logo  changed from '' to 'ATECA.png',Primary Contact First Name  changed from '' to 'Steve',Primary Contact Last Name  changed from '' to 'Slater',Primary Contact Email  changed from '' to 'steve@ateca.co.uk',Primary Contact Address 1  changed from '' to '4 Salisbury Way',Primary Contact Address 2  changed from '' to 'Sandown',Primary Contact Town  changed from '' to 'Isle of Wight',Primary Contact Postcode  changed from '' to 'PO36 9JG',Primary Contact Country Code  changed from '' to 'GB',Invoice Contact Department  changed from '' to 'Accounts Department',Invoice Contact Email  changed from '' to 'steve@ateca.co.uk',Invoice Contact Phone  changed from '' to '0203 637 0311',Invoice Contact Address 1  changed from '' to '4 Salisbury Way',Invoice Contact Address 2  changed from '' to 'Sandown',Invoice Contact Town  changed from '' to 'Isle of Wight',Invoice Contact Postcode  changed from '' to 'PO36 9JG',Invoice Contact Country Code  changed from '' to 'GB'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    23/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:35 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property Default.Client.consolidation changed from 'charge-payment-term,destination,source,charge-currency,sales-tax-code,client,purchase-order|sheet,rate-name' to 'charge-payment-term,destination,source,charge-currency,sales-tax-code,client,purchase-order',Added property SheetRateFieldPopulatorWorkerHeadings: Contractor, Period End, Units, Rate Type, Rate, VAT,Added property SheetRateFieldPopulatorWorkerFields: WORKER_NAME,PERIOD_END,HOURS_UNITS,RATE_NAME,PAY_RATE,TAX_CODE,Added property RateFieldPopulatorClientFields: SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE,Added property SheetLineFieldPopulatorWorkerFields: WORKER_NAME,PERIOD_END,HOURS_UNITS,RATE_NAME,PAY_RATE,TAX_CODE,Added property SheetFieldPopulatorWorkerFields: WORKER_NAME,PERIOD_END,HOURS_UNITS,RATE_NAME,PAY_RATE,TAX_CODE,Added property ClientFieldPopulatorWorkerFields: WORKER_NAME,PERIOD_END,HOURS_UNITS,RATE_NAME,PAY_RATE,TAX_CODE,Added property RateFieldPopulatorWorkerFields: WORKER_NAME,PERIOD_END,HOURS_UNITS,RATE_NAME,PAY_RATE,TAX_CODE,Added property ClientFieldPopulatorClientHeadings: ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate,Added property SheetRateFieldPopulatorClientHeadings: ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate,Added property WorkerFieldPopulatorClientFields: SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE,Added property PurchaseOrderFieldPopulatorWorkerHeadings: Contractor, Period End, Units, Rate Type, Rate, VAT,Added property PlacementFieldPopulatorClientFields: SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE,Added property SheetTypeFieldPopulatorClientFields: SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE,Added property PurchaseOrderFieldPopulatorWorkerFields: WORKER_NAME,PERIOD_END,HOURS_UNITS,RATE_NAME,PAY_RATE,TAX_CODE,Added property SheetTypeFieldPopulatorWorkerFields: WORKER_NAME,PERIOD_END,HOURS_UNITS,RATE_NAME,PAY_RATE,TAX_CODE,Added property SheetLineFieldPopulatorClientHeadings: ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate,Added property Default.Worker.consolidation: destination,source,pay-currency,purchase-tax-code,worker|sheet,sheet-rate,Added property SheetLineFieldPopulatorClientFields: SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE,Added property WorkerFieldPopulatorWorkerHeadings: Contractor, Period End, Units, Rate Type, Rate, VAT,Added property ClientFieldPopulatorClientFields: SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE,Added property SheetFieldPopulatorClientFields: SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE,Added property SheetFieldPopulatorClientHeadings: ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate,Added property PurchaseOrderFieldPopulatorClientHeadings: ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate,Added property SheetFieldPopulatorWorkerHeadings: Contractor, Period End, Units, Rate Type, Rate, VAT,Added property PlacementFieldPopulatorWorkerHeadings: Contractor, Period End, Units, Rate Type, Rate, VAT,Added property RateFieldPopulatorWorkerHeadings: Contractor, Period End, Units, Rate Type, Rate, VAT,Added property WorkerFieldPopulatorClientHeadings: ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate,Added property PurchaseOrderFieldPopulatorClientFields: SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE,Added property SheetTypeFieldPopulatorWorkerHeadings: Contractor, Period End, Units, Rate Type, Rate, VAT,Added property PlacementFieldPopulatorClientHeadings: ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate,Added property SheetRateFieldPopulatorClientFields: SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE,Added property SheetLineFieldPopulatorWorkerHeadings: Contractor, Period End, Units, Rate Type, Rate, VAT,Added property PlacementFieldPopulatorWorkerFields: WORKER_NAME,PERIOD_END,HOURS_UNITS,RATE_NAME,PAY_RATE,TAX_CODE,Added property SheetTypeFieldPopulatorClientHeadings: ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate,Added property WorkerFieldPopulatorWorkerFields: WORKER_NAME,PERIOD_END,HOURS_UNITS,RATE_NAME,PAY_RATE,TAX_CODE,Added property ClientFieldPopulatorWorkerHeadings: Contractor, Period End, Units, Rate Type, Rate, VAT,Added property Default.LtdCoProvider.consolidation: destination,source,pay-currency,purchase-tax-code,ltd-co-provider,worker|sheet,sheet-rate,Added property RateFieldPopulatorClientHeadings: ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    23/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:58 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property Default.Worker.workerType changed from '0' to '1',Property Default.Worker.gender changed from 'F' to 'M',Added property EMAIL.APPROVAL.POP3.HOST: pop.bakertillyoutsourcing.co.uk,Added property Approval.Cutoff.DayOfWeek: 1,Added property Enable.Second.Bank.For.Workers: N,Added property Default.Worker.ltdCompanyPayWorkerAs: 1,Added property EMAIL.APPROVAL.POP3.PASSWORD: P@55w0rd3!,Added property View.Timesheet.HideFixedRateTotal: 1,Added property EMAIL.DELETE.AFTER.DAYS: 90,Added property Enable.Mobile.Entry: 1,Added property EMAIL.APPROVAL.POP3.SSL.REQUIRED: Y,Added property EMAIL.APPROVAL.PROCESSEDFOLDER: INBOX.Processed,Added property PO.Tracking.amountWarnPercentage: 75.0,Added property faxback.enabled: N,Added property Clients.Use.Sheet.Groups.Default: N,Added property Enable.Timesheet.Adjustment.Wizard: Y,Added property NotesFunctionEnabled: Y,Added property Invoice.HideAgencyOnTimesheets: Y,Added property PO.Tracking.hoursOverPercentage: 100.0,Added property Form.Timesheet.AlwaysEnterTime: 0,Added property View.Timesheet.ShowApprovalBox: 1,Added property Placement.Allow3DPRates: Y,Added property Form.Worker.ItrisIdReadOnly: 1,Added property View.Timesheet.NeverShowCharge: 1,Added property EMAIL.APPROVAL.PROTOCOL: imaps,Added property EMAIL.APPROVAL.POP3.ADDRESS: ateca@inquiline.net,Added property Invoice.VatOnRoundedNetValues: 1,Added property Invoice.consolidation.monthly.aggregate: PREVIOUS,Added property faxback.enabled.default: N,Added property EMAIL.APPROVAL.ENABLED: Y,Added property Invoice.Download_PDF: 0,Added property AgencyTimesheetEntry: N,Added property Invoice.hideExchangeRatesIfNoTax: Y,Added property Enable.Rate.Template: Y,Added property View.Timesheet.AttachmentsOnApprovedEmail: 1,Added property Invoicing.UsePOTracking: Y,Added property View.Timesheet.HideHourlyRateTotal: 1,Added property Invoice.ShowCurrentClientName: 1,Added property Default.Placement.timesheetLayout: 0,Added property PO.Tracking.amountOverPercentage: 100.0,Added property Show.Workers.On.Provider.Remittances: Y,Added property Enable.Sheet.Groups: N,Added property EMAIL.APPROVAL.POP3.USERNAME: ateca@inquiline.net,Added property EMAIL.APPROVAL.POP3.PORT: 993,Added property PO.Tracking.hoursWarnPercentage: 75.0,Added property View.Timesheet.ShowAllDays: 1,Added property Form.Client.ItrisIdReadOnly: 1,Added property EXPENSE.EMAIL.APPROVAL.ENABLED: Y
                                                </p>
                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    25/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:23 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Purchase Order Colour changed. Split Commission Colour changed. Payments Colour changed. 
                                                </p>
                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    25/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:23 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Custom menu background changed. Split Commission Colour changed. 
                                                </p>
                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    25/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:41 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Jason Leishman
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Added property Form.Worker.HideStarterStatement: Y,Added property Form.Worker.RequireStarterStatement: N
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    25/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    3:01 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Steve Slater
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Invoice Contact First Name  changed from '' to 'Steve',Invoice Contact Last Name  changed from '' to 'Slater',Invoice Contact Mobile  changed from '' to '07494805051'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    25/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    3:02 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Steve Slater
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Primary Contact Mobile  changed from '' to '07494805051'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    25/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    3:41 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property Default.Client.termsDays changed from '0' to '30',Property Agency.Comms.Settings changed from 'WLMC' to 'L'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    25/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    3:44 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property Default.Client.consolidation changed from 'charge-payment-term,destination,source,charge-currency,sales-tax-code,client,purchase-order' to 'charge-payment-term,destination,source,charge-currency,sales-tax-code,client,purchase-order|sheet,rate-name'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    30/05/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:46 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property Default.Placement.noCommunications changed from 'WLMC' to 'L',Property Default.Manager.noCommunications changed from '1' to '0'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    03/07/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11:54 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Added property AvailableColumnsForManager: id,type,endDate,worker,jobTitle,status,placement,placementStart,placementEnd,duration,units,approved,
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    09/07/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:28 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MaximumNumberOfRates changed from '25' to '60'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    16/07/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:49 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property AvailableColumnsForManager changed from 'id,type,endDate,worker,jobTitle,status,placement,placementStart,placementEnd,duration,units,approved,' to 'agency,id,type,endDate,worker,jobTitle,status,placement,placementStart,placementEnd,duration,units,approved,'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    16/07/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:50 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property AvailableColumnsForManager changed from 'agency,id,type,endDate,worker,jobTitle,status,placement,placementStart,placementEnd,duration,units,approved,' to 'id,type,endDate,worker,jobTitle,status,placement,placementStart,placementEnd,duration,units,approved,'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    16/07/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:50 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property AvailableColumnsForManager changed from 'id,type,endDate,worker,jobTitle,status,placement,placementStart,placementEnd,duration,units,approved,' to 'id,type,client,endDate,worker,jobTitle,status,placement,placementStart,placementEnd,duration,units,approved,'
                                                </p>
                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    17/07/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    6:32 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Root User
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    [TimePatterns]
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    17/07/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    6:45 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Root User
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    [Tagging, CustomReport]
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    18/07/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:30 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Added property TimePatterns.MealBreakInsertionPolicy: HighestValueRate,Added property Enable.Rotations: Y
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    08/08/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    1:36 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Steven Casey
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MaximumNumberOfRates changed from '60' to '150'
                                                </p>                                                
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    08/08/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    3:16 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Steven Casey
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MaximumNumberOfRates changed from '150' to '200'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    08/08/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    3:17 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Steven Casey
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MaximumNumberOfRates changed from '200' to '250'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    15/08/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    1:27 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false',Primary Contact Email  changed from 'steve@ateca.co.uk' to 'carly.rooke@ateca.co.uk',Invoice Contact Email  changed from 'steve@ateca.co.uk' to 'carly.rooke@ateca.co.uk'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    29/08/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:00 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MaximumNumberOfRates changed from '250' to '300'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    29/08/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:50 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MaximumNumberOfRates changed from '300' to '400'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    13/09/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:03 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Ateca Global Limited SuperAdmin
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Added property ShowLegacyReports: A
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    08/11/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    4:00 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false',Primary Contact Email  changed from 'carly.rooke@ateca.co.uk' to 'lee.turvey-brown@ateca.co.uk',Invoice Contact Email  changed from 'carly.rooke@ateca.co.uk' to 'lee.turvey-brown@ateca.co.uk'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    30/11/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    12:14 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property BACS_BUREAU_ID changed from 'B80031' to 'B80031,B21110',Added property BasePaymentFileChargingStructure: ,Added property BasePaymentFilePriority: ,Added property IntlPaymentFilePriority: ,Added property IntlPaymentFileChargingStructure: 
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    30/11/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    12:16 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property BACS_BUREAU_ID changed from 'B80031,B21110' to 'B21110'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    30/11/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    12:19 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property BACS_BUREAU_ID changed from 'B21110' to 'B80031'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11/12/2018
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:37 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Lee Turvey
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Logo  changed from 'ATECA.png' to 'logo.png',Pick AWR Rates  changed from '' to 'false'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    17/01/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:22 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Added property Export.Sage50.VatOnlyNominalCode: 2201,Added property Export.InvoiceBatchJob: sage50InvoiceBySheetExportJob,Added property Export.Sage50.capitalise.trans.type: Y
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    25/01/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11:12 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Jordan Cooke
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false',Primary Contact Address 1  changed from '4 Salisbury Way' to '3 Fortis House, Cothey Way',Primary Contact Address 2  changed from 'Sandown' to 'Ryde',Primary Contact Postcode  changed from 'PO36 9JG' to 'PO30 1QT'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    25/01/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11:48 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Ms Claire King
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false',Invoice Contact Address 1  changed from '4 Salisbury Way' to '3 Fortis House',Invoice Contact Address 2  changed from 'Sandown' to 'Cothey Way',Invoice Contact Town  changed from 'Isle of Wight' to 'Ryde',Invoice Contact Postcode  changed from 'PO36 9JG' to 'PO33 1QT',Invoice Contact County  changed from '' to 'Isle of Wight'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11/02/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    5:14 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Jordan Cooke
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false',Primary Contact Email  changed from 'lee.turvey-brown@ateca.co.uk' to 'jordan.cooke@ateca.co.uk'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11/02/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    5:15 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Jordan Cooke
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    01/03/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    3:00 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Jordan Cooke
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false',Invoice Contact Email  changed from 'lee.turvey-brown@ateca.co.uk' to 'jordan.cooke@ateca.co.uk'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    05/03/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11:37 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Removed property INTERNATIONAL_BACS_FORMAT: NATWEST_INTERNATIONAL,Property BACS.SUN changed from '427756' to '999999',Removed property BACS_FORMAT: BAKERTILLY_BUREAU
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    05/03/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11:38 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Added property BACS_FORMAT: CSV
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    05/03/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    12:00 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property BACS_FORMAT changed from 'CSV' to 'BARCLAYS_BACS'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    05/06/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    3:53 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Sam Knowles
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MaximumNumberOfRates changed from '400' to '20',Added property allow.negative.expenses: Y,Added property HolidayClaim.AutoApprove: 0,Added property Attach.Email.Approval: Y,Added property Agency.EnableOnCosts: N
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    10/06/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    12:24 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Sam Knowles
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MaximumNumberOfRates changed from '20' to '100'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    24/06/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    10:01 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MaximumNumberOfRates changed from '100' to '200'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    20/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    12:44 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Name  changed from 'Ateca Global Limited' to 'Ateca Marine Ltd',Pick AWR Rates  changed from '' to 'false'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    20/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    12:49 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false',Invoice Contact First Name  changed from 'Steve' to '',Invoice Contact Last Name  changed from 'Slater' to '',Invoice Contact Phone  changed from '0203 637 0311' to '',Invoice Contact Mobile  changed from '07494805051' to ''
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    20/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    1:06 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property ClientFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate' to 'ID, Candidate,Period End,PO No.,Description,Rate, Units',Property PlacementFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS',Property SheetTypeFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS',Property SheetLineFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS',Property SheetRateFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS',Property RateFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate' to 'ID, Candidate,Period End,PO No.,Description,Rate, Units',Property RateFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS',Property SheetRateFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate' to 'ID, Candidate,Period End,PO No.,Description,Rate, Units',Property SheetLineFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate' to 'ID, Candidate,Period End,PO No.,Description,Rate, Units',Property ClientFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS',Property SheetFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS',Property SheetFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate' to 'ID, Candidate,Period End,PO No.,Description,Rate, Units',Property PurchaseOrderFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate' to 'ID, Candidate,Period End,PO No.,Description,Rate, Units',Property PurchaseOrderFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS',Property PlacementFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate' to 'ID, Candidate,Period End,PO No.,Description,Rate, Units',Property SheetTypeFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate' to 'ID, Candidate,Period End,PO No.,Description,Rate, Units'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    20/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    1:10 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property RateFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units' to 'ID, Candidate,Period End,PO No.,Description, Units',Property SheetLineFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units' to 'ID, Candidate,Period End,PO No.,Description, Units',Property SheetRateFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units' to 'ID, Candidate,Period End,PO No.,Description, Units',Property PurchaseOrderFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units' to 'ID, Candidate,Period End,PO No.,Description, Units',Property SheetFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units' to 'ID, Candidate,Period End,PO No.,Description, Units',Property ClientFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE',Property SheetTypeFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units' to 'ID, Candidate,Period End,PO No.,Description, Units',Property PlacementFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units' to 'ID, Candidate,Period End,PO No.,Description, Units'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    20/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    1:15 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property PlacementFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,HOURS_UNITS'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    20/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    1:17 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property WorkerFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units, Charge Rate' to 'ID, Candidate,Period End,PO No.,Description, Units',Property WorkerFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS,CHARGE_RATE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,RATE_NAME,HOURS_UNITS'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    20/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    1:20 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property SheetLineFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description, Units' to 'ID, Candidate,Period End,PO No.,Description,Units',Property PlacementFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description, Units' to 'ID, Candidate,Period End,PO No.,Description,Units',Property ClientFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description,Rate, Units' to 'ID, Candidate,Period End,PO No.,Description,Units',Property RateFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description, Units' to 'ID, Candidate,Period End,PO No.,Description,Units',Property SheetTypeFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description, Units' to 'ID, Candidate,Period End,PO No.,Description,Units',Property PurchaseOrderFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description, Units' to 'ID, Candidate,Period End,PO No.,Description,Units',Property SheetRateFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description, Units' to 'ID, Candidate,Period End,PO No.,Description,Units',Property SheetFieldPopulatorClientHeadings changed from 'ID, Candidate,Period End,PO No.,Description, Units' to 'ID, Candidate,Period End,PO No.,Description,Units'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    20/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    1:22 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property ClientFieldPopulatorClientFields changed from 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE' to 'SHEET_ID,WORKER_NAME,PERIOD_END,PO,JOB_TITLE,HOURS_UNITS'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    20/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    1:32 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false',Primary Contact Address 1  changed from '3 Fortis House, Cothey Way' to '27 Old Gloucester Street',Primary Contact Address 2  changed from 'Ryde' to '',Primary Contact Town  changed from 'Isle of Wight' to 'London',Primary Contact Postcode  changed from 'PO30 1QT' to 'WC1N 3AX',Invoice Contact Address 1  changed from '3 Fortis House' to '27 Old Gloucester Street',Invoice Contact Address 2  changed from 'Cothey Way' to '',Invoice Contact Town  changed from 'Ryde' to 'London',Invoice Contact Postcode  changed from 'PO33 1QT' to 'WC1N 3AX',Invoice Contact County  changed from 'Isle of Wight' to ''
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    21/08/2019
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    10:14 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Added property Invoicing.multiAdjustmentInvoice: 1
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    04/02/2020
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    4:37 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Logo  changed from 'logo.png' to 'image001.png',Pick AWR Rates  changed from '' to 'false'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    04/02/2020
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    4:37 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Pick AWR Rates  changed from '' to 'false'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    04/02/2020
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    4:37 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Custom menu background changed. 
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    05/02/2020
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11:31 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Logo  changed from 'image001.png' to 'logo.png',Pick AWR Rates  changed from '' to 'false'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    13/02/2020
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11:56 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Shannon Purdie
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property MAXIMUM.INVOICE.SIZE.AS.ATTACHMENT changed from '5000000' to '8388608',Added property Comms.SendEmailsFromDisplayName: Ateca Marine,Added property Comms.SendEmailsFrom: noreply@es.rsmuk.com
                                                </p>                                               
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    26/02/2020
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    4:07 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Shannon Purdie
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Added property InPay.StarterC.For.Deemed: Y
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    10/03/2020
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    10:45 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property Enable.Rotations changed from 'Y' to 'N'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    10/09/2020
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    9:10 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Sam Knowles
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Removed property Form.Placement.DefaultContractedHours: 37.5
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    02/02/2021
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    11:45 AM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Stuart McKay
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Added property EMAIL.APPROVAL.MAX_CONNECT_ATTEMPTS: 300
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    09/03/2021
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:23 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Sam Knowles
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Property InPay.StarterC.For.Deemed changed from 'Y' to 'N'
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    26/03/2021
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    2:35 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Ms Arielle Polonis
                                                </p>
                                            </td>
                                            <td>                                                
                                                <p style="text-align: justify;">
                                                    Removed property Default.Worker.gender: M,Added property Invoice.Disable.Additional.Recipients: N,Added property Show.Menu.Payslip.LtdPaidPAYE: Y
                                                </p>                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    10/10/2021
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    4:38 PM
                                                </p>
                                            </td>
                                            <td style="white-space: nowrap;">
                                                <p style="text-align:justify">
                                                    Mr Jordan Cooke
                                                </p>
                                            </td>
                                            <td>                                        
                                                <p style="text-align: justify;">
                                                    Name  changed from 'Ateca Marine Ltd' to 'Ateca Consulting Ltd',Pick AWR Rates  changed from '' to 'false'
                                                </p>                                                
                                            </td>
                                        </tr>                                    
                                    </tbody>
                                </table>
                            </div>    
                        </div>           
                    </div>             
                </div>  
            </div>
        </div>
    </div>
</section>
</template>

<script>   

    export default {
        
        mounted() {
            //Initialize Select2 Elements
            $('.select2').select2();
             $('[data-toggle="tooltip"]').tooltip();     
            console.log('Creat Timesheet mounted.');
        }
    }
</script>