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
.fa-icon {
  font-size: 9px !important;

}
</style>

<template>

<section class="content">
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <h2>My Details </h2>
                </div>
        </div>
        <div class="bg-white pb-4">
            <div class="card-body">
                <!-- <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item" style="width:20%">
                        <a class="nav-link active" id="custom-content-below-main-tab" data-toggle="pill" href="#custom-content-below-main" role="tab" aria-controls="custom-content-below-main" aria-selected="true">Main</a>
                    </li>
                    <li class="nav-item" style="width:20%">
                        <a class="nav-link" id="custom-content-below-date-ranges-tab" data-toggle="pill" href="#custom-content-below-date-ranges" role="tab" aria-controls="custom-content-below-date-ranges" aria-selected="false">Timesheet</a>
                    </li>
                    <li class="nav-item" style="width:20%">
                        <a class="nav-link" id="custom-content-below-reference-tab" data-toggle="pill" href="#custom-content-below-reference" role="tab" aria-controls="custom-content-below-reference" aria-selected="false">Expenses</a>
                    </li>
                    <li class="nav-item" style="width:20%">
                        <a class="nav-link" id="custom-content-below-financials-tab" data-toggle="pill" href="#custom-content-below-financials" role="tab" aria-controls="custom-content-below-financials" aria-selected="false">Invoices</a>
                    </li>
                    <li class="nav-item" style="width:20%">
                        <a class="nav-link" id="custom-content-below-advance-tab" data-toggle="pill" href="#custom-content-below-advance" role="tab" aria-controls="custom-content-below-advance" aria-selected="false">Financials</a>
                    </li>
                </ul><br> -->
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade active show" id="custom-content-below-main" role="tabpanel" aria-labelledby="custom-content-below-main-tab">
                        <div class="card card-primary card-outline card-tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-2 pl-4">
                                        <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                Contact details
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="client" class="d-block mb-1">Name</label>
                                                <input type="text" value="Kayleigh Hucklebridge" disabled class="form-control form-control-sm">
                                            </div>
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Email*</label>
                                               <input type="text" value="kayleigh@ateca.co.uk" class="form-control form-control-sm">                                           
                                            </div>                                                
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="client" class="d-block mb-1">Phone</label>
                                                <input type="text"  class="form-control form-control-sm">
                                            </div>
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">Mobile</label>
                                               <input type="text"  class="form-control form-control-sm">                                           
                                            </div>                                                   
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="client" class="d-block mb-1">Time Zone</label>
                                                <select class="form-control select2" style="width:100%"> 
                                                    <option value="">Default</option>
                                                    <option value="Etc/GMT+12">(GMT-12:00) Etc/GMT+12</option>
                                                    <option value="Etc/GMT+11">(GMT-11:00) Etc/GMT+11</option>
                                                    <option value="Pacific/Midway">(GMT-11:00) Pacific/Midway</option>
                                                    <option value="Pacific/Niue">(GMT-11:00) Pacific/Niue</option>
                                                    <option value="Pacific/Pago_Pago">(GMT-11:00) Pacific/Pago_Pago</option>
                                                    <option value="Pacific/Samoa">(GMT-11:00) Pacific/Samoa</option>
                                                    <option value="US/Samoa">(GMT-11:00) US/Samoa</option>
                                                    <option value="America/Adak">(GMT-10:00) America/Adak</option>
                                                    <option value="America/Atka">(GMT-10:00) America/Atka</option>
                                                    <option value="Etc/GMT+10">(GMT-10:00) Etc/GMT+10</option>
                                                    <option value="HST">(GMT-10:00) HST</option>
                                                    <option value="Pacific/Honolulu">(GMT-10:00) Pacific/Honolulu</option>
                                                    <option value="Pacific/Johnston">(GMT-10:00) Pacific/Johnston</option>
                                                    <option value="Pacific/Rarotonga">(GMT-10:00) Pacific/Rarotonga</option>
                                                    <option value="Pacific/Tahiti">(GMT-10:00) Pacific/Tahiti</option>
                                                    <option value="SystemV/HST10">(GMT-10:00) SystemV/HST10</option>
                                                    <option value="US/Aleutian">(GMT-10:00) US/Aleutian</option>
                                                    <option value="US/Hawaii">(GMT-10:00) US/Hawaii</option>
                                                    <option value="Pacific/Marquesas">(GMT-9:-30) Pacific/Marquesas</option>
                                                    <option value="AST">(GMT-9:00) AST</option>
                                                    <option value="America/Anchorage">(GMT-9:00) America/Anchorage</option>
                                                    <option value="America/Juneau">(GMT-9:00) America/Juneau</option>
                                                    <option value="America/Nome">(GMT-9:00) America/Nome</option>
                                                    <option value="America/Sitka">(GMT-9:00) America/Sitka</option>
                                                    <option value="America/Yakutat">(GMT-9:00) America/Yakutat</option>
                                                    <option value="Etc/GMT+9">(GMT-9:00) Etc/GMT+9</option>
                                                    <option value="Pacific/Gambier">(GMT-9:00) Pacific/Gambier</option>
                                                    <option value="SystemV/YST9">(GMT-9:00) SystemV/YST9</option>
                                                    <option value="SystemV/YST9YDT">(GMT-9:00) SystemV/YST9YDT</option>
                                                    <option value="US/Alaska">(GMT-9:00) US/Alaska</option>
                                                    <option value="America/Dawson">(GMT-8:00) America/Dawson</option>
                                                    <option value="America/Ensenada">(GMT-8:00) America/Ensenada</option>
                                                    <option value="America/Los_Angeles">(GMT-8:00) America/Los_Angeles</option>
                                                    <option value="America/Metlakatla">(GMT-8:00) America/Metlakatla</option>
                                                    <option value="America/Santa_Isabel">(GMT-8:00) America/Santa_Isabel</option>
                                                    <option value="America/Tijuana">(GMT-8:00) America/Tijuana</option>
                                                    <option value="America/Vancouver">(GMT-8:00) America/Vancouver</option>
                                                    <option value="America/Whitehorse">(GMT-8:00) America/Whitehorse</option>
                                                    <option value="Canada/Pacific">(GMT-8:00) Canada/Pacific</option>
                                                    <option value="Canada/Yukon">(GMT-8:00) Canada/Yukon</option>
                                                    <option value="Etc/GMT+8">(GMT-8:00) Etc/GMT+8</option>
                                                    <option value="Mexico/BajaNorte">(GMT-8:00) Mexico/BajaNorte</option>
                                                    <option value="PST">(GMT-8:00) PST</option>
                                                    <option value="PST8PDT">(GMT-8:00) PST8PDT</option>
                                                    <option value="Pacific/Pitcairn">(GMT-8:00) Pacific/Pitcairn</option>
                                                    <option value="SystemV/PST8">(GMT-8:00) SystemV/PST8</option>
                                                    <option value="SystemV/PST8PDT">(GMT-8:00) SystemV/PST8PDT</option>
                                                    <option value="US/Pacific">(GMT-8:00) US/Pacific</option>
                                                    <option value="US/Pacific-New">(GMT-8:00) US/Pacific-New</option>
                                                    <option value="America/Boise">(GMT-7:00) America/Boise</option>
                                                    <option value="America/Cambridge_Bay">(GMT-7:00) America/Cambridge_Bay</option>
                                                    <option value="America/Chihuahua">(GMT-7:00) America/Chihuahua</option>
                                                    <option value="America/Creston">(GMT-7:00) America/Creston</option>
                                                    <option value="America/Dawson_Creek">(GMT-7:00) America/Dawson_Creek</option>
                                                    <option value="America/Denver">(GMT-7:00) America/Denver</option>
                                                    <option value="America/Edmonton">(GMT-7:00) America/Edmonton</option>
                                                    <option value="America/Hermosillo">(GMT-7:00) America/Hermosillo</option>
                                                    <option value="America/Inuvik">(GMT-7:00) America/Inuvik</option>
                                                    <option value="America/Mazatlan">(GMT-7:00) America/Mazatlan</option>
                                                    <option value="America/Ojinaga">(GMT-7:00) America/Ojinaga</option>
                                                    <option value="America/Phoenix">(GMT-7:00) America/Phoenix</option>
                                                    <option value="America/Shiprock">(GMT-7:00) America/Shiprock</option>
                                                    <option value="America/Yellowknife">(GMT-7:00) America/Yellowknife</option>
                                                    <option value="Canada/Mountain">(GMT-7:00) Canada/Mountain</option>
                                                    <option value="Etc/GMT+7">(GMT-7:00) Etc/GMT+7</option>
                                                    <option value="MST">(GMT-7:00) MST</option>
                                                    <option value="MST7MDT">(GMT-7:00) MST7MDT</option>
                                                    <option value="Mexico/BajaSur">(GMT-7:00) Mexico/BajaSur</option>
                                                    <option value="Navajo">(GMT-7:00) Navajo</option>
                                                    <option value="PNT">(GMT-7:00) PNT</option>
                                                    <option value="SystemV/MST7">(GMT-7:00) SystemV/MST7</option>
                                                    <option value="SystemV/MST7MDT">(GMT-7:00) SystemV/MST7MDT</option>
                                                    <option value="US/Arizona">(GMT-7:00) US/Arizona</option>
                                                    <option value="US/Mountain">(GMT-7:00) US/Mountain</option>
                                                    <option value="America/Bahia_Banderas">(GMT-6:00) America/Bahia_Banderas</option>
                                                    <option value="America/Belize">(GMT-6:00) America/Belize</option>
                                                    <option value="America/Cancun">(GMT-6:00) America/Cancun</option>
                                                    <option value="America/Chicago">(GMT-6:00) America/Chicago</option>
                                                    <option value="America/Costa_Rica">(GMT-6:00) America/Costa_Rica</option>
                                                    <option value="America/El_Salvador">(GMT-6:00) America/El_Salvador</option>
                                                    <option value="America/Guatemala">(GMT-6:00) America/Guatemala</option>
                                                    <option value="America/Indiana/Knox">(GMT-6:00) America/Indiana/Knox</option>
                                                    <option value="America/Indiana/Tell_City">(GMT-6:00) America/Indiana/Tell_City</option>
                                                    <option value="America/Knox_IN">(GMT-6:00) America/Knox_IN</option>
                                                    <option value="America/Managua">(GMT-6:00) America/Managua</option>
                                                    <option value="America/Matamoros">(GMT-6:00) America/Matamoros</option>
                                                    <option value="America/Menominee">(GMT-6:00) America/Menominee</option>
                                                    <option value="America/Merida">(GMT-6:00) America/Merida</option>
                                                    <option value="America/Mexico_City">(GMT-6:00) America/Mexico_City</option>
                                                    <option value="America/Monterrey">(GMT-6:00) America/Monterrey</option>
                                                    <option value="America/North_Dakota/Beulah">(GMT-6:00) America/North_Dakota/Beulah</option>
                                                    <option value="America/North_Dakota/Center">(GMT-6:00) America/North_Dakota/Center</option>
                                                    <option value="America/North_Dakota/New_Salem">(GMT-6:00) America/North_Dakota/New_Salem</option>
                                                    <option value="America/Rainy_River">(GMT-6:00) America/Rainy_River</option>
                                                    <option value="America/Rankin_Inlet">(GMT-6:00) America/Rankin_Inlet</option>
                                                    <option value="America/Regina">(GMT-6:00) America/Regina</option>
                                                    <option value="America/Resolute">(GMT-6:00) America/Resolute</option>
                                                    <option value="America/Swift_Current">(GMT-6:00) America/Swift_Current</option>
                                                    <option value="America/Tegucigalpa">(GMT-6:00) America/Tegucigalpa</option>
                                                    <option value="America/Winnipeg">(GMT-6:00) America/Winnipeg</option>
                                                    <option value="CST">(GMT-6:00) CST</option>
                                                    <option value="CST6CDT">(GMT-6:00) CST6CDT</option>
                                                    <option value="Canada/Central">(GMT-6:00) Canada/Central</option>
                                                    <option value="Canada/East-Saskatchewan">(GMT-6:00) Canada/East-Saskatchewan</option>
                                                    <option value="Canada/Saskatchewan">(GMT-6:00) Canada/Saskatchewan</option>
                                                    <option value="Chile/EasterIsland">(GMT-6:00) Chile/EasterIsland</option>
                                                    <option value="Etc/GMT+6">(GMT-6:00) Etc/GMT+6</option>
                                                    <option value="Mexico/General">(GMT-6:00) Mexico/General</option>
                                                    <option value="Pacific/Easter">(GMT-6:00) Pacific/Easter</option>
                                                    <option value="Pacific/Galapagos">(GMT-6:00) Pacific/Galapagos</option>
                                                    <option value="SystemV/CST6">(GMT-6:00) SystemV/CST6</option>
                                                    <option value="SystemV/CST6CDT">(GMT-6:00) SystemV/CST6CDT</option>
                                                    <option value="US/Central">(GMT-6:00) US/Central</option>
                                                    <option value="US/Indiana-Starke">(GMT-6:00) US/Indiana-Starke</option>
                                                    <option value="America/Atikokan">(GMT-5:00) America/Atikokan</option>
                                                    <option value="America/Bogota">(GMT-5:00) America/Bogota</option>
                                                    <option value="America/Cayman">(GMT-5:00) America/Cayman</option>
                                                    <option value="America/Coral_Harbour">(GMT-5:00) America/Coral_Harbour</option>
                                                    <option value="America/Detroit">(GMT-5:00) America/Detroit</option>
                                                    <option value="America/Fort_Wayne">(GMT-5:00) America/Fort_Wayne</option>
                                                    <option value="America/Grand_Turk">(GMT-5:00) America/Grand_Turk</option>
                                                    <option value="America/Guayaquil">(GMT-5:00) America/Guayaquil</option>
                                                    <option value="America/Havana">(GMT-5:00) America/Havana</option>
                                                    <option value="America/Indiana/Indianapolis">(GMT-5:00) America/Indiana/Indianapolis</option>
                                                    <option value="America/Indiana/Marengo">(GMT-5:00) America/Indiana/Marengo</option>
                                                    <option value="America/Indiana/Petersburg">(GMT-5:00) America/Indiana/Petersburg</option>
                                                    <option value="America/Indiana/Vevay">(GMT-5:00) America/Indiana/Vevay</option>
                                                    <option value="America/Indiana/Vincennes">(GMT-5:00) America/Indiana/Vincennes</option>
                                                    <option value="America/Indiana/Winamac">(GMT-5:00) America/Indiana/Winamac</option>
                                                    <option value="America/Indianapolis">(GMT-5:00) America/Indianapolis</option>
                                                    <option value="America/Iqaluit">(GMT-5:00) America/Iqaluit</option>
                                                    <option value="America/Jamaica">(GMT-5:00) America/Jamaica</option>
                                                    <option value="America/Kentucky/Louisville">(GMT-5:00) America/Kentucky/Louisville</option>
                                                    <option value="America/Kentucky/Monticello">(GMT-5:00) America/Kentucky/Monticello</option>
                                                    <option value="America/Lima">(GMT-5:00) America/Lima</option>
                                                    <option value="America/Louisville">(GMT-5:00) America/Louisville</option>
                                                    <option value="America/Montreal">(GMT-5:00) America/Montreal</option>
                                                    <option value="America/Nassau">(GMT-5:00) America/Nassau</option>
                                                    <option value="America/New_York">(GMT-5:00) America/New_York</option>
                                                    <option value="America/Nipigon">(GMT-5:00) America/Nipigon</option>
                                                    <option value="America/Panama">(GMT-5:00) America/Panama</option>
                                                    <option value="America/Pangnirtung">(GMT-5:00) America/Pangnirtung</option>
                                                    <option value="America/Port-au-Prince">(GMT-5:00) America/Port-au-Prince</option>
                                                    <option value="America/Thunder_Bay">(GMT-5:00) America/Thunder_Bay</option>
                                                    <option value="America/Toronto">(GMT-5:00) America/Toronto</option>
                                                    <option value="Canada/Eastern">(GMT-5:00) Canada/Eastern</option>
                                                    <option value="Cuba">(GMT-5:00) Cuba</option>
                                                    <option value="EST">(GMT-5:00) EST</option>
                                                    <option value="EST5EDT">(GMT-5:00) EST5EDT</option>
                                                    <option value="Etc/GMT+5">(GMT-5:00) Etc/GMT+5</option>
                                                    <option value="IET">(GMT-5:00) IET</option>
                                                    <option value="Jamaica">(GMT-5:00) Jamaica</option>
                                                    <option value="SystemV/EST5">(GMT-5:00) SystemV/EST5</option>
                                                    <option value="SystemV/EST5EDT">(GMT-5:00) SystemV/EST5EDT</option>
                                                    <option value="US/East-Indiana">(GMT-5:00) US/East-Indiana</option>
                                                    <option value="US/Eastern">(GMT-5:00) US/Eastern</option>
                                                    <option value="US/Michigan">(GMT-5:00) US/Michigan</option>
                                                    <option value="America/Caracas">(GMT-4:-30) America/Caracas</option>
                                                    <option value="America/Anguilla">(GMT-4:00) America/Anguilla</option>
                                                    <option value="America/Antigua">(GMT-4:00) America/Antigua</option>
                                                    <option value="America/Argentina/San_Luis">(GMT-4:00) America/Argentina/San_Luis</option>
                                                    <option value="America/Aruba">(GMT-4:00) America/Aruba</option>
                                                    <option value="America/Asuncion">(GMT-4:00) America/Asuncion</option>
                                                    <option value="America/Barbados">(GMT-4:00) America/Barbados</option>
                                                    <option value="America/Blanc-Sablon">(GMT-4:00) America/Blanc-Sablon</option>
                                                    <option value="America/Boa_Vista">(GMT-4:00) America/Boa_Vista</option>
                                                    <option value="America/Campo_Grande">(GMT-4:00) America/Campo_Grande</option>
                                                    <option value="America/Cuiaba">(GMT-4:00) America/Cuiaba</option>
                                                    <option value="America/Curacao">(GMT-4:00) America/Curacao</option>
                                                    <option value="America/Dominica">(GMT-4:00) America/Dominica</option>
                                                    <option value="America/Eirunepe">(GMT-4:00) America/Eirunepe</option>
                                                    <option value="America/Glace_Bay">(GMT-4:00) America/Glace_Bay</option>
                                                    <option value="America/Goose_Bay">(GMT-4:00) America/Goose_Bay</option>
                                                    <option value="America/Grenada">(GMT-4:00) America/Grenada</option>
                                                    <option value="America/Guadeloupe">(GMT-4:00) America/Guadeloupe</option>
                                                    <option value="America/Guyana">(GMT-4:00) America/Guyana</option>
                                                    <option value="America/Halifax">(GMT-4:00) America/Halifax</option>
                                                    <option value="America/Kralendijk">(GMT-4:00) America/Kralendijk</option>
                                                    <option value="America/La_Paz">(GMT-4:00) America/La_Paz</option>
                                                    <option value="America/Lower_Princes">(GMT-4:00) America/Lower_Princes</option>
                                                    <option value="America/Manaus">(GMT-4:00) America/Manaus</option>
                                                    <option value="America/Marigot">(GMT-4:00) America/Marigot</option>
                                                    <option value="America/Martinique">(GMT-4:00) America/Martinique</option>
                                                    <option value="America/Moncton">(GMT-4:00) America/Moncton</option>
                                                    <option value="America/Montserrat">(GMT-4:00) America/Montserrat</option>
                                                    <option value="America/Port_of_Spain">(GMT-4:00) America/Port_of_Spain</option>
                                                    <option value="America/Porto_Acre">(GMT-4:00) America/Porto_Acre</option>
                                                    <option value="America/Porto_Velho">(GMT-4:00) America/Porto_Velho</option>
                                                    <option value="America/Puerto_Rico">(GMT-4:00) America/Puerto_Rico</option>
                                                    <option value="America/Rio_Branco">(GMT-4:00) America/Rio_Branco</option>
                                                    <option value="America/Santiago">(GMT-4:00) America/Santiago</option>
                                                    <option value="America/Santo_Domingo">(GMT-4:00) America/Santo_Domingo</option>
                                                    <option value="America/St_Barthelemy">(GMT-4:00) America/St_Barthelemy</option>
                                                    <option value="America/St_Kitts">(GMT-4:00) America/St_Kitts</option>
                                                    <option value="America/St_Lucia">(GMT-4:00) America/St_Lucia</option>
                                                    <option value="America/St_Thomas">(GMT-4:00) America/St_Thomas</option>
                                                    <option value="America/St_Vincent">(GMT-4:00) America/St_Vincent</option>
                                                    <option value="America/Thule">(GMT-4:00) America/Thule</option>
                                                    <option value="America/Tortola">(GMT-4:00) America/Tortola</option>
                                                    <option value="America/Virgin">(GMT-4:00) America/Virgin</option>
                                                    <option value="Antarctica/Palmer">(GMT-4:00) Antarctica/Palmer</option>
                                                    <option value="Atlantic/Bermuda">(GMT-4:00) Atlantic/Bermuda</option>
                                                    <option value="Brazil/Acre">(GMT-4:00) Brazil/Acre</option>
                                                    <option value="Brazil/West">(GMT-4:00) Brazil/West</option>
                                                    <option value="Canada/Atlantic">(GMT-4:00) Canada/Atlantic</option>
                                                    <option value="Chile/Continental">(GMT-4:00) Chile/Continental</option>
                                                    <option value="Etc/GMT+4">(GMT-4:00) Etc/GMT+4</option>
                                                    <option value="PRT">(GMT-4:00) PRT</option>
                                                    <option value="SystemV/AST4">(GMT-4:00) SystemV/AST4</option>
                                                    <option value="SystemV/AST4ADT">(GMT-4:00) SystemV/AST4ADT</option>
                                                    <option value="America/St_Johns">(GMT-3:-30) America/St_Johns</option>
                                                    <option value="CNT">(GMT-3:-30) CNT</option>
                                                    <option value="Canada/Newfoundland">(GMT-3:-30) Canada/Newfoundland</option>
                                                    <option value="AGT">(GMT-3:00) AGT</option>
                                                    <option value="America/Araguaina">(GMT-3:00) America/Araguaina</option>
                                                    <option value="America/Argentina/Buenos_Aires">(GMT-3:00) America/Argentina/Buenos_Aires</option>
                                                    <option value="America/Argentina/Catamarca">(GMT-3:00) America/Argentina/Catamarca</option>
                                                    <option value="America/Argentina/ComodRivadavia">(GMT-3:00) America/Argentina/ComodRivadavia</option>
                                                    <option value="America/Argentina/Cordoba">(GMT-3:00) America/Argentina/Cordoba</option>
                                                    <option value="America/Argentina/Jujuy">(GMT-3:00) America/Argentina/Jujuy</option>
                                                    <option value="America/Argentina/La_Rioja">(GMT-3:00) America/Argentina/La_Rioja</option>
                                                    <option value="America/Argentina/Mendoza">(GMT-3:00) America/Argentina/Mendoza</option>
                                                    <option value="America/Argentina/Rio_Gallegos">(GMT-3:00) America/Argentina/Rio_Gallegos</option>
                                                    <option value="America/Argentina/Salta">(GMT-3:00) America/Argentina/Salta</option>
                                                    <option value="America/Argentina/San_Juan">(GMT-3:00) America/Argentina/San_Juan</option>
                                                    <option value="America/Argentina/Tucuman">(GMT-3:00) America/Argentina/Tucuman</option>
                                                    <option value="America/Argentina/Ushuaia">(GMT-3:00) America/Argentina/Ushuaia</option>
                                                    <option value="America/Bahia">(GMT-3:00) America/Bahia</option>
                                                    <option value="America/Belem">(GMT-3:00) America/Belem</option>
                                                    <option value="America/Buenos_Aires">(GMT-3:00) America/Buenos_Aires</option>
                                                    <option value="America/Catamarca">(GMT-3:00) America/Catamarca</option>
                                                    <option value="America/Cayenne">(GMT-3:00) America/Cayenne</option>
                                                    <option value="America/Cordoba">(GMT-3:00) America/Cordoba</option>
                                                    <option value="America/Fortaleza">(GMT-3:00) America/Fortaleza</option>
                                                    <option value="America/Godthab">(GMT-3:00) America/Godthab</option>
                                                    <option value="America/Jujuy">(GMT-3:00) America/Jujuy</option>
                                                    <option value="America/Maceio">(GMT-3:00) America/Maceio</option>
                                                    <option value="America/Mendoza">(GMT-3:00) America/Mendoza</option>
                                                    <option value="America/Miquelon">(GMT-3:00) America/Miquelon</option>
                                                    <option value="America/Montevideo">(GMT-3:00) America/Montevideo</option>
                                                    <option value="America/Paramaribo">(GMT-3:00) America/Paramaribo</option>
                                                    <option value="America/Recife">(GMT-3:00) America/Recife</option>
                                                    <option value="America/Rosario">(GMT-3:00) America/Rosario</option>
                                                    <option value="America/Santarem">(GMT-3:00) America/Santarem</option>
                                                    <option value="America/Sao_Paulo">(GMT-3:00) America/Sao_Paulo</option>
                                                    <option value="Antarctica/Rothera">(GMT-3:00) Antarctica/Rothera</option>
                                                    <option value="Atlantic/Stanley">(GMT-3:00) Atlantic/Stanley</option>
                                                    <option value="BET">(GMT-3:00) BET</option>
                                                    <option value="Brazil/East">(GMT-3:00) Brazil/East</option>
                                                    <option value="Etc/GMT+3">(GMT-3:00) Etc/GMT+3</option>
                                                    <option value="America/Noronha">(GMT-2:00) America/Noronha</option>
                                                    <option value="Atlantic/South_Georgia">(GMT-2:00) Atlantic/South_Georgia</option>
                                                    <option value="Brazil/DeNoronha">(GMT-2:00) Brazil/DeNoronha</option>
                                                    <option value="Etc/GMT+2">(GMT-2:00) Etc/GMT+2</option>
                                                    <option value="America/Scoresbysund">(GMT-1:00) America/Scoresbysund</option>
                                                    <option value="Atlantic/Azores">(GMT-1:00) Atlantic/Azores</option>
                                                    <option value="Atlantic/Cape_Verde">(GMT-1:00) Atlantic/Cape_Verde</option>
                                                    <option value="Etc/GMT+1">(GMT-1:00) Etc/GMT+1</option>
                                                    <option value="Africa/Abidjan">(GMT+0:00) Africa/Abidjan</option>
                                                    <option value="Africa/Accra">(GMT+0:00) Africa/Accra</option>
                                                    <option value="Africa/Bamako">(GMT+0:00) Africa/Bamako</option>
                                                    <option value="Africa/Banjul">(GMT+0:00) Africa/Banjul</option>
                                                    <option value="Africa/Bissau">(GMT+0:00) Africa/Bissau</option>
                                                    <option value="Africa/Casablanca">(GMT+0:00) Africa/Casablanca</option>
                                                    <option value="Africa/Conakry">(GMT+0:00) Africa/Conakry</option>
                                                    <option value="Africa/Dakar">(GMT+0:00) Africa/Dakar</option>
                                                    <option value="Africa/El_Aaiun">(GMT+0:00) Africa/El_Aaiun</option>
                                                    <option value="Africa/Freetown">(GMT+0:00) Africa/Freetown</option>
                                                    <option value="Africa/Lome">(GMT+0:00) Africa/Lome</option>
                                                    <option value="Africa/Monrovia">(GMT+0:00) Africa/Monrovia</option>
                                                    <option value="Africa/Nouakchott">(GMT+0:00) Africa/Nouakchott</option>
                                                    <option value="Africa/Ouagadougou">(GMT+0:00) Africa/Ouagadougou</option>
                                                    <option value="Africa/Sao_Tome">(GMT+0:00) Africa/Sao_Tome</option>
                                                    <option value="Africa/Timbuktu">(GMT+0:00) Africa/Timbuktu</option>
                                                    <option value="America/Danmarkshavn">(GMT+0:00) America/Danmarkshavn</option>
                                                    <option value="Atlantic/Canary">(GMT+0:00) Atlantic/Canary</option>
                                                    <option value="Atlantic/Faeroe">(GMT+0:00) Atlantic/Faeroe</option>
                                                    <option value="Atlantic/Faroe">(GMT+0:00) Atlantic/Faroe</option>
                                                    <option value="Atlantic/Madeira">(GMT+0:00) Atlantic/Madeira</option>
                                                    <option value="Atlantic/Reykjavik">(GMT+0:00) Atlantic/Reykjavik</option>
                                                    <option value="Atlantic/St_Helena">(GMT+0:00) Atlantic/St_Helena</option>
                                                    <option value="Eire">(GMT+0:00) Eire</option>
                                                    <option value="Etc/GMT">(GMT+0:00) Etc/GMT</option>
                                                    <option value="Etc/GMT+0">(GMT+0:00) Etc/GMT+0</option>
                                                    <option value="Etc/GMT-0">(GMT+0:00) Etc/GMT-0</option>
                                                    <option value="Etc/GMT0">(GMT+0:00) Etc/GMT0</option>
                                                    <option value="Etc/Greenwich">(GMT+0:00) Etc/Greenwich</option>
                                                    <option value="Etc/UCT">(GMT+0:00) Etc/UCT</option>
                                                    <option value="Etc/UTC">(GMT+0:00) Etc/UTC</option>
                                                    <option value="Etc/Universal">(GMT+0:00) Etc/Universal</option>
                                                    <option value="Etc/Zulu">(GMT+0:00) Etc/Zulu</option>
                                                    <option value="Europe/Belfast">(GMT+0:00) Europe/Belfast</option>
                                                    <option value="Europe/Dublin">(GMT+0:00) Europe/Dublin</option>
                                                    <option value="Europe/Guernsey">(GMT+0:00) Europe/Guernsey</option>
                                                    <option value="Europe/Isle_of_Man">(GMT+0:00) Europe/Isle_of_Man</option>
                                                    <option value="Europe/Jersey">(GMT+0:00) Europe/Jersey</option>
                                                    <option value="Europe/Lisbon">(GMT+0:00) Europe/Lisbon</option>
                                                    <option value="Europe/London">(GMT+0:00) Europe/London</option>
                                                    <option value="GB">(GMT+0:00) GB</option>
                                                    <option value="GB-Eire">(GMT+0:00) GB-Eire</option>
                                                    <option value="GMT">(GMT+0:00) GMT</option>
                                                    <option value="GMT0">(GMT+0:00) GMT0</option>
                                                    <option value="Greenwich">(GMT+0:00) Greenwich</option>
                                                    <option value="Iceland">(GMT+0:00) Iceland</option>
                                                    <option value="Portugal">(GMT+0:00) Portugal</option>
                                                    <option value="UCT">(GMT+0:00) UCT</option>
                                                    <option value="UTC">(GMT+0:00) UTC</option>
                                                    <option value="Universal">(GMT+0:00) Universal</option>
                                                    <option value="WET">(GMT+0:00) WET</option>
                                                    <option value="Zulu">(GMT+0:00) Zulu</option>
                                                    <option value="Africa/Algiers">(GMT+1:00) Africa/Algiers</option>
                                                    <option value="Africa/Bangui">(GMT+1:00) Africa/Bangui</option>
                                                    <option value="Africa/Brazzaville">(GMT+1:00) Africa/Brazzaville</option>
                                                    <option value="Africa/Ceuta">(GMT+1:00) Africa/Ceuta</option>
                                                    <option value="Africa/Douala">(GMT+1:00) Africa/Douala</option>
                                                    <option value="Africa/Kinshasa">(GMT+1:00) Africa/Kinshasa</option>
                                                    <option value="Africa/Lagos">(GMT+1:00) Africa/Lagos</option>
                                                    <option value="Africa/Libreville">(GMT+1:00) Africa/Libreville</option>
                                                    <option value="Africa/Luanda">(GMT+1:00) Africa/Luanda</option>
                                                    <option value="Africa/Malabo">(GMT+1:00) Africa/Malabo</option>
                                                    <option value="Africa/Ndjamena">(GMT+1:00) Africa/Ndjamena</option>
                                                    <option value="Africa/Niamey">(GMT+1:00) Africa/Niamey</option>
                                                    <option value="Africa/Porto-Novo">(GMT+1:00) Africa/Porto-Novo</option>
                                                    <option value="Africa/Tunis">(GMT+1:00) Africa/Tunis</option>
                                                    <option value="Africa/Windhoek">(GMT+1:00) Africa/Windhoek</option>
                                                    <option value="Arctic/Longyearbyen">(GMT+1:00) Arctic/Longyearbyen</option>
                                                    <option value="Atlantic/Jan_Mayen">(GMT+1:00) Atlantic/Jan_Mayen</option>
                                                    <option value="CET">(GMT+1:00) CET</option>
                                                    <option value="ECT">(GMT+1:00) ECT</option>
                                                    <option value="Etc/GMT-1">(GMT+1:00) Etc/GMT-1</option>
                                                    <option value="Europe/Amsterdam">(GMT+1:00) Europe/Amsterdam</option>
                                                    <option value="Europe/Andorra">(GMT+1:00) Europe/Andorra</option>
                                                    <option value="Europe/Belgrade">(GMT+1:00) Europe/Belgrade</option>
                                                    <option value="Europe/Berlin">(GMT+1:00) Europe/Berlin</option>
                                                    <option value="Europe/Bratislava">(GMT+1:00) Europe/Bratislava</option>
                                                    <option value="Europe/Brussels">(GMT+1:00) Europe/Brussels</option>
                                                    <option value="Europe/Budapest">(GMT+1:00) Europe/Budapest</option>
                                                    <option value="Europe/Copenhagen">(GMT+1:00) Europe/Copenhagen</option>
                                                    <option value="Europe/Gibraltar">(GMT+1:00) Europe/Gibraltar</option>
                                                    <option value="Europe/Ljubljana">(GMT+1:00) Europe/Ljubljana</option>
                                                    <option value="Europe/Luxembourg">(GMT+1:00) Europe/Luxembourg</option>
                                                    <option value="Europe/Madrid">(GMT+1:00) Europe/Madrid</option>
                                                    <option value="Europe/Malta">(GMT+1:00) Europe/Malta</option>
                                                    <option value="Europe/Monaco">(GMT+1:00) Europe/Monaco</option>
                                                    <option value="Europe/Oslo">(GMT+1:00) Europe/Oslo</option>
                                                    <option value="Europe/Paris">(GMT+1:00) Europe/Paris</option>
                                                    <option value="Europe/Podgorica">(GMT+1:00) Europe/Podgorica</option>
                                                    <option value="Europe/Prague">(GMT+1:00) Europe/Prague</option>
                                                    <option value="Europe/Rome">(GMT+1:00) Europe/Rome</option>
                                                    <option value="Europe/San_Marino">(GMT+1:00) Europe/San_Marino</option>
                                                    <option value="Europe/Sarajevo">(GMT+1:00) Europe/Sarajevo</option>
                                                    <option value="Europe/Skopje">(GMT+1:00) Europe/Skopje</option>
                                                    <option value="Europe/Stockholm">(GMT+1:00) Europe/Stockholm</option>
                                                    <option value="Europe/Tirane">(GMT+1:00) Europe/Tirane</option>
                                                    <option value="Europe/Vaduz">(GMT+1:00) Europe/Vaduz</option>
                                                    <option value="Europe/Vatican">(GMT+1:00) Europe/Vatican</option>
                                                    <option value="Europe/Vienna">(GMT+1:00) Europe/Vienna</option>
                                                    <option value="Europe/Warsaw">(GMT+1:00) Europe/Warsaw</option>
                                                    <option value="Europe/Zagreb">(GMT+1:00) Europe/Zagreb</option>
                                                    <option value="Europe/Zurich">(GMT+1:00) Europe/Zurich</option>
                                                    <option value="MET">(GMT+1:00) MET</option>
                                                    <option value="Poland">(GMT+1:00) Poland</option>
                                                    <option value="ART">(GMT+2:00) ART</option>
                                                    <option value="Africa/Blantyre">(GMT+2:00) Africa/Blantyre</option>
                                                    <option value="Africa/Bujumbura">(GMT+2:00) Africa/Bujumbura</option>
                                                    <option value="Africa/Cairo">(GMT+2:00) Africa/Cairo</option>
                                                    <option value="Africa/Gaborone">(GMT+2:00) Africa/Gaborone</option>
                                                    <option value="Africa/Harare">(GMT+2:00) Africa/Harare</option>
                                                    <option value="Africa/Johannesburg">(GMT+2:00) Africa/Johannesburg</option>
                                                    <option value="Africa/Kigali">(GMT+2:00) Africa/Kigali</option>
                                                    <option value="Africa/Lubumbashi">(GMT+2:00) Africa/Lubumbashi</option>
                                                    <option value="Africa/Lusaka">(GMT+2:00) Africa/Lusaka</option>
                                                    <option value="Africa/Maputo">(GMT+2:00) Africa/Maputo</option>
                                                    <option value="Africa/Maseru">(GMT+2:00) Africa/Maseru</option>
                                                    <option value="Africa/Mbabane">(GMT+2:00) Africa/Mbabane</option>
                                                    <option value="Africa/Tripoli">(GMT+2:00) Africa/Tripoli</option>
                                                    <option value="Asia/Amman">(GMT+2:00) Asia/Amman</option>
                                                    <option value="Asia/Beirut">(GMT+2:00) Asia/Beirut</option>
                                                    <option value="Asia/Damascus">(GMT+2:00) Asia/Damascus</option>
                                                    <option value="Asia/Gaza">(GMT+2:00) Asia/Gaza</option>
                                                    <option value="Asia/Hebron">(GMT+2:00) Asia/Hebron</option>
                                                    <option value="Asia/Istanbul">(GMT+2:00) Asia/Istanbul</option>
                                                    <option value="Asia/Jerusalem">(GMT+2:00) Asia/Jerusalem</option>
                                                    <option value="Asia/Nicosia">(GMT+2:00) Asia/Nicosia</option>
                                                    <option value="Asia/Tel_Aviv">(GMT+2:00) Asia/Tel_Aviv</option>
                                                    <option value="CAT">(GMT+2:00) CAT</option>
                                                    <option value="EET">(GMT+2:00) EET</option>
                                                    <option value="Egypt">(GMT+2:00) Egypt</option>
                                                    <option value="Etc/GMT-2">(GMT+2:00) Etc/GMT-2</option>
                                                    <option value="Europe/Athens">(GMT+2:00) Europe/Athens</option>
                                                    <option value="Europe/Bucharest">(GMT+2:00) Europe/Bucharest</option>
                                                    <option value="Europe/Chisinau">(GMT+2:00) Europe/Chisinau</option>
                                                    <option value="Europe/Helsinki">(GMT+2:00) Europe/Helsinki</option>
                                                    <option value="Europe/Istanbul">(GMT+2:00) Europe/Istanbul</option>
                                                    <option value="Europe/Kiev">(GMT+2:00) Europe/Kiev</option>
                                                    <option value="Europe/Mariehamn">(GMT+2:00) Europe/Mariehamn</option>
                                                    <option value="Europe/Nicosia">(GMT+2:00) Europe/Nicosia</option>
                                                    <option value="Europe/Riga">(GMT+2:00) Europe/Riga</option>
                                                    <option value="Europe/Simferopol">(GMT+2:00) Europe/Simferopol</option>
                                                    <option value="Europe/Sofia">(GMT+2:00) Europe/Sofia</option>
                                                    <option value="Europe/Tallinn">(GMT+2:00) Europe/Tallinn</option>
                                                    <option value="Europe/Tiraspol">(GMT+2:00) Europe/Tiraspol</option>
                                                    <option value="Europe/Uzhgorod">(GMT+2:00) Europe/Uzhgorod</option>
                                                    <option value="Europe/Vilnius">(GMT+2:00) Europe/Vilnius</option>
                                                    <option value="Europe/Zaporozhye">(GMT+2:00) Europe/Zaporozhye</option>
                                                    <option value="Israel">(GMT+2:00) Israel</option>
                                                    <option value="Libya">(GMT+2:00) Libya</option>
                                                    <option value="Turkey">(GMT+2:00) Turkey</option>
                                                    <option value="Africa/Addis_Ababa">(GMT+3:00) Africa/Addis_Ababa</option>
                                                    <option value="Africa/Asmara">(GMT+3:00) Africa/Asmara</option>
                                                    <option value="Africa/Asmera">(GMT+3:00) Africa/Asmera</option>
                                                    <option value="Africa/Dar_es_Salaam">(GMT+3:00) Africa/Dar_es_Salaam</option>
                                                    <option value="Africa/Djibouti">(GMT+3:00) Africa/Djibouti</option>
                                                    <option value="Africa/Juba">(GMT+3:00) Africa/Juba</option>
                                                    <option value="Africa/Kampala">(GMT+3:00) Africa/Kampala</option>
                                                    <option value="Africa/Khartoum">(GMT+3:00) Africa/Khartoum</option>
                                                    <option value="Africa/Mogadishu">(GMT+3:00) Africa/Mogadishu</option>
                                                    <option value="Africa/Nairobi">(GMT+3:00) Africa/Nairobi</option>
                                                    <option value="Antarctica/Syowa">(GMT+3:00) Antarctica/Syowa</option>
                                                    <option value="Asia/Aden">(GMT+3:00) Asia/Aden</option>
                                                    <option value="Asia/Baghdad">(GMT+3:00) Asia/Baghdad</option>
                                                    <option value="Asia/Bahrain">(GMT+3:00) Asia/Bahrain</option>
                                                    <option value="Asia/Kuwait">(GMT+3:00) Asia/Kuwait</option>
                                                    <option value="Asia/Qatar">(GMT+3:00) Asia/Qatar</option>
                                                    <option value="Asia/Riyadh">(GMT+3:00) Asia/Riyadh</option>
                                                    <option value="EAT">(GMT+3:00) EAT</option>
                                                    <option value="Etc/GMT-3">(GMT+3:00) Etc/GMT-3</option>
                                                    <option value="Europe/Kaliningrad">(GMT+3:00) Europe/Kaliningrad</option>
                                                    <option value="Europe/Minsk">(GMT+3:00) Europe/Minsk</option>
                                                    <option value="Indian/Antananarivo">(GMT+3:00) Indian/Antananarivo</option>
                                                    <option value="Indian/Comoro">(GMT+3:00) Indian/Comoro</option>
                                                    <option value="Indian/Mayotte">(GMT+3:00) Indian/Mayotte</option>
                                                    <option value="Asia/Riyadh87">(GMT+3:07) Asia/Riyadh87</option>
                                                    <option value="Asia/Riyadh88">(GMT+3:07) Asia/Riyadh88</option>
                                                    <option value="Asia/Riyadh89">(GMT+3:07) Asia/Riyadh89</option>
                                                    <option value="Mideast/Riyadh87">(GMT+3:07) Mideast/Riyadh87</option>
                                                    <option value="Mideast/Riyadh88">(GMT+3:07) Mideast/Riyadh88</option>
                                                    <option value="Mideast/Riyadh89">(GMT+3:07) Mideast/Riyadh89</option>
                                                    <option value="Asia/Tehran">(GMT+3:30) Asia/Tehran</option>
                                                    <option value="Iran">(GMT+3:30) Iran</option>
                                                    <option value="Asia/Baku">(GMT+4:00) Asia/Baku</option>
                                                    <option value="Asia/Dubai">(GMT+4:00) Asia/Dubai</option>
                                                    <option value="Asia/Muscat">(GMT+4:00) Asia/Muscat</option>
                                                    <option value="Asia/Tbilisi">(GMT+4:00) Asia/Tbilisi</option>
                                                    <option value="Asia/Yerevan">(GMT+4:00) Asia/Yerevan</option>
                                                    <option value="Etc/GMT-4">(GMT+4:00) Etc/GMT-4</option>
                                                    <option value="Europe/Moscow">(GMT+4:00) Europe/Moscow</option>
                                                    <option value="Europe/Samara">(GMT+4:00) Europe/Samara</option>
                                                    <option value="Europe/Volgograd">(GMT+4:00) Europe/Volgograd</option>
                                                    <option value="Indian/Mahe">(GMT+4:00) Indian/Mahe</option>
                                                    <option value="Indian/Mauritius">(GMT+4:00) Indian/Mauritius</option>
                                                    <option value="Indian/Reunion">(GMT+4:00) Indian/Reunion</option>
                                                    <option value="NET">(GMT+4:00) NET</option>
                                                    <option value="W-SU">(GMT+4:00) W-SU</option>
                                                    <option value="Asia/Kabul">(GMT+4:30) Asia/Kabul</option>
                                                    <option value="Antarctica/Mawson">(GMT+5:00) Antarctica/Mawson</option>
                                                    <option value="Asia/Aqtau">(GMT+5:00) Asia/Aqtau</option>
                                                    <option value="Asia/Aqtobe">(GMT+5:00) Asia/Aqtobe</option>
                                                    <option value="Asia/Ashgabat">(GMT+5:00) Asia/Ashgabat</option>
                                                    <option value="Asia/Ashkhabad">(GMT+5:00) Asia/Ashkhabad</option>
                                                    <option value="Asia/Dushanbe">(GMT+5:00) Asia/Dushanbe</option>
                                                    <option value="Asia/Karachi">(GMT+5:00) Asia/Karachi</option>
                                                    <option value="Asia/Oral">(GMT+5:00) Asia/Oral</option>
                                                    <option value="Asia/Samarkand">(GMT+5:00) Asia/Samarkand</option>
                                                    <option value="Asia/Tashkent">(GMT+5:00) Asia/Tashkent</option>
                                                    <option value="Etc/GMT-5">(GMT+5:00) Etc/GMT-5</option>
                                                    <option value="Indian/Kerguelen">(GMT+5:00) Indian/Kerguelen</option>
                                                    <option value="Indian/Maldives">(GMT+5:00) Indian/Maldives</option>
                                                    <option value="PLT">(GMT+5:00) PLT</option>
                                                    <option value="Asia/Calcutta">(GMT+5:30) Asia/Calcutta</option>
                                                    <option value="Asia/Colombo">(GMT+5:30) Asia/Colombo</option>
                                                    <option value="Asia/Kolkata">(GMT+5:30) Asia/Kolkata</option>
                                                    <option value="IST">(GMT+5:30) IST</option>
                                                    <option value="Asia/Kathmandu">(GMT+5:45) Asia/Kathmandu</option>
                                                    <option value="Asia/Katmandu">(GMT+5:45) Asia/Katmandu</option>
                                                    <option value="Antarctica/Vostok">(GMT+6:00) Antarctica/Vostok</option>
                                                    <option value="Asia/Almaty">(GMT+6:00) Asia/Almaty</option>
                                                    <option value="Asia/Bishkek">(GMT+6:00) Asia/Bishkek</option>
                                                    <option value="Asia/Dacca">(GMT+6:00) Asia/Dacca</option>
                                                    <option value="Asia/Dhaka">(GMT+6:00) Asia/Dhaka</option>
                                                    <option value="Asia/Qyzylorda">(GMT+6:00) Asia/Qyzylorda</option>
                                                    <option value="Asia/Thimbu">(GMT+6:00) Asia/Thimbu</option>
                                                    <option value="Asia/Thimphu">(GMT+6:00) Asia/Thimphu</option>
                                                    <option value="Asia/Yekaterinburg">(GMT+6:00) Asia/Yekaterinburg</option>
                                                    <option value="BST">(GMT+6:00) BST</option>
                                                    <option value="Etc/GMT-6">(GMT+6:00) Etc/GMT-6</option>
                                                    <option value="Indian/Chagos">(GMT+6:00) Indian/Chagos</option>
                                                    <option value="Asia/Rangoon">(GMT+6:30) Asia/Rangoon</option>
                                                    <option value="Indian/Cocos">(GMT+6:30) Indian/Cocos</option>
                                                    <option value="Antarctica/Davis">(GMT+7:00) Antarctica/Davis</option>
                                                    <option value="Asia/Bangkok">(GMT+7:00) Asia/Bangkok</option>
                                                    <option value="Asia/Ho_Chi_Minh">(GMT+7:00) Asia/Ho_Chi_Minh</option>
                                                    <option value="Asia/Hovd">(GMT+7:00) Asia/Hovd</option>
                                                    <option value="Asia/Jakarta">(GMT+7:00) Asia/Jakarta</option>
                                                    <option value="Asia/Novokuznetsk">(GMT+7:00) Asia/Novokuznetsk</option>
                                                    <option value="Asia/Novosibirsk">(GMT+7:00) Asia/Novosibirsk</option>
                                                    <option value="Asia/Omsk">(GMT+7:00) Asia/Omsk</option>
                                                    <option value="Asia/Phnom_Penh">(GMT+7:00) Asia/Phnom_Penh</option>
                                                    <option value="Asia/Pontianak">(GMT+7:00) Asia/Pontianak</option>
                                                    <option value="Asia/Saigon">(GMT+7:00) Asia/Saigon</option>
                                                    <option value="Asia/Vientiane">(GMT+7:00) Asia/Vientiane</option>
                                                    <option value="Etc/GMT-7">(GMT+7:00) Etc/GMT-7</option>
                                                    <option value="Indian/Christmas">(GMT+7:00) Indian/Christmas</option>
                                                    <option value="VST">(GMT+7:00) VST</option>
                                                    <option value="Antarctica/Casey">(GMT+8:00) Antarctica/Casey</option>
                                                    <option value="Asia/Brunei">(GMT+8:00) Asia/Brunei</option>
                                                    <option value="Asia/Choibalsan">(GMT+8:00) Asia/Choibalsan</option>
                                                    <option value="Asia/Chongqing">(GMT+8:00) Asia/Chongqing</option>
                                                    <option value="Asia/Chungking">(GMT+8:00) Asia/Chungking</option>
                                                    <option value="Asia/Harbin">(GMT+8:00) Asia/Harbin</option>
                                                    <option value="Asia/Hong_Kong">(GMT+8:00) Asia/Hong_Kong</option>
                                                    <option value="Asia/Kashgar">(GMT+8:00) Asia/Kashgar</option>
                                                    <option value="Asia/Krasnoyarsk">(GMT+8:00) Asia/Krasnoyarsk</option>
                                                    <option value="Asia/Kuala_Lumpur">(GMT+8:00) Asia/Kuala_Lumpur</option>
                                                    <option value="Asia/Kuching">(GMT+8:00) Asia/Kuching</option>
                                                    <option value="Asia/Macao">(GMT+8:00) Asia/Macao</option>
                                                    <option value="Asia/Macau">(GMT+8:00) Asia/Macau</option>
                                                    <option value="Asia/Makassar">(GMT+8:00) Asia/Makassar</option>
                                                    <option value="Asia/Manila">(GMT+8:00) Asia/Manila</option>
                                                    <option value="Asia/Shanghai">(GMT+8:00) Asia/Shanghai</option>
                                                    <option value="Asia/Singapore">(GMT+8:00) Asia/Singapore</option>
                                                    <option value="Asia/Taipei">(GMT+8:00) Asia/Taipei</option>
                                                    <option value="Asia/Ujung_Pandang">(GMT+8:00) Asia/Ujung_Pandang</option>
                                                    <option value="Asia/Ulaanbaatar">(GMT+8:00) Asia/Ulaanbaatar</option>
                                                    <option value="Asia/Ulan_Bator">(GMT+8:00) Asia/Ulan_Bator</option>
                                                    <option value="Asia/Urumqi">(GMT+8:00) Asia/Urumqi</option>
                                                    <option value="Australia/Perth">(GMT+8:00) Australia/Perth</option>
                                                    <option value="Australia/West">(GMT+8:00) Australia/West</option>
                                                    <option value="CTT">(GMT+8:00) CTT</option>
                                                    <option value="Etc/GMT-8">(GMT+8:00) Etc/GMT-8</option>
                                                    <option value="Hongkong">(GMT+8:00) Hongkong</option>
                                                    <option value="PRC">(GMT+8:00) PRC</option>
                                                    <option value="Singapore">(GMT+8:00) Singapore</option>
                                                    <option value="Australia/Eucla">(GMT+8:45) Australia/Eucla</option>
                                                    <option value="Asia/Dili">(GMT+9:00) Asia/Dili</option>
                                                    <option value="Asia/Irkutsk">(GMT+9:00) Asia/Irkutsk</option>
                                                    <option value="Asia/Jayapura">(GMT+9:00) Asia/Jayapura</option>
                                                    <option value="Asia/Pyongyang">(GMT+9:00) Asia/Pyongyang</option>
                                                    <option value="Asia/Seoul">(GMT+9:00) Asia/Seoul</option>
                                                    <option value="Asia/Tokyo">(GMT+9:00) Asia/Tokyo</option>
                                                    <option value="Etc/GMT-9">(GMT+9:00) Etc/GMT-9</option>
                                                    <option value="JST">(GMT+9:00) JST</option>
                                                    <option value="Japan">(GMT+9:00) Japan</option>
                                                    <option value="Pacific/Palau">(GMT+9:00) Pacific/Palau</option>
                                                    <option value="ROK">(GMT+9:00) ROK</option>
                                                    <option value="ACT">(GMT+9:30) ACT</option>
                                                    <option value="Australia/Adelaide">(GMT+9:30) Australia/Adelaide</option>
                                                    <option value="Australia/Broken_Hill">(GMT+9:30) Australia/Broken_Hill</option>
                                                    <option value="Australia/Darwin">(GMT+9:30) Australia/Darwin</option>
                                                    <option value="Australia/North">(GMT+9:30) Australia/North</option>
                                                    <option value="Australia/South">(GMT+9:30) Australia/South</option>
                                                    <option value="Australia/Yancowinna">(GMT+9:30) Australia/Yancowinna</option>
                                                    <option value="AET">(GMT+10:00) AET</option>
                                                    <option value="Antarctica/DumontDUrville">(GMT+10:00) Antarctica/DumontDUrville</option>
                                                    <option value="Asia/Yakutsk">(GMT+10:00) Asia/Yakutsk</option>
                                                    <option value="Australia/ACT">(GMT+10:00) Australia/ACT</option>
                                                    <option value="Australia/Brisbane">(GMT+10:00) Australia/Brisbane</option>
                                                    <option value="Australia/Canberra">(GMT+10:00) Australia/Canberra</option>
                                                    <option value="Australia/Currie">(GMT+10:00) Australia/Currie</option>
                                                    <option value="Australia/Hobart">(GMT+10:00) Australia/Hobart</option>
                                                    <option value="Australia/Lindeman">(GMT+10:00) Australia/Lindeman</option>
                                                    <option value="Australia/Melbourne">(GMT+10:00) Australia/Melbourne</option>
                                                    <option value="Australia/NSW">(GMT+10:00) Australia/NSW</option>
                                                    <option value="Australia/Queensland">(GMT+10:00) Australia/Queensland</option>
                                                    <option value="Australia/Sydney">(GMT+10:00) Australia/Sydney</option>
                                                    <option value="Australia/Tasmania">(GMT+10:00) Australia/Tasmania</option>
                                                    <option value="Australia/Victoria">(GMT+10:00) Australia/Victoria</option>
                                                    <option value="Etc/GMT-10">(GMT+10:00) Etc/GMT-10</option>
                                                    <option value="Pacific/Chuuk">(GMT+10:00) Pacific/Chuuk</option>
                                                    <option value="Pacific/Guam">(GMT+10:00) Pacific/Guam</option>
                                                    <option value="Pacific/Port_Moresby">(GMT+10:00) Pacific/Port_Moresby</option>
                                                    <option value="Pacific/Saipan">(GMT+10:00) Pacific/Saipan</option>
                                                    <option value="Pacific/Truk">(GMT+10:00) Pacific/Truk</option>
                                                    <option value="Pacific/Yap">(GMT+10:00) Pacific/Yap</option>
                                                    <option value="Australia/LHI">(GMT+10:30) Australia/LHI</option>
                                                    <option value="Australia/Lord_Howe">(GMT+10:30) Australia/Lord_Howe</option>
                                                    <option value="Antarctica/Macquarie">(GMT+11:00) Antarctica/Macquarie</option>
                                                    <option value="Asia/Sakhalin">(GMT+11:00) Asia/Sakhalin</option>
                                                    <option value="Asia/Vladivostok">(GMT+11:00) Asia/Vladivostok</option>
                                                    <option value="Etc/GMT-11">(GMT+11:00) Etc/GMT-11</option>
                                                    <option value="Pacific/Efate">(GMT+11:00) Pacific/Efate</option>
                                                    <option value="Pacific/Guadalcanal">(GMT+11:00) Pacific/Guadalcanal</option>
                                                    <option value="Pacific/Kosrae">(GMT+11:00) Pacific/Kosrae</option>
                                                    <option value="Pacific/Noumea">(GMT+11:00) Pacific/Noumea</option>
                                                    <option value="Pacific/Pohnpei">(GMT+11:00) Pacific/Pohnpei</option>
                                                    <option value="Pacific/Ponape">(GMT+11:00) Pacific/Ponape</option>
                                                    <option value="SST">(GMT+11:00) SST</option>
                                                    <option value="Pacific/Norfolk">(GMT+11:30) Pacific/Norfolk</option>
                                                    <option value="Antarctica/McMurdo">(GMT+12:00) Antarctica/McMurdo</option>
                                                    <option value="Antarctica/South_Pole">(GMT+12:00) Antarctica/South_Pole</option>
                                                    <option value="Asia/Anadyr">(GMT+12:00) Asia/Anadyr</option>
                                                    <option value="Asia/Kamchatka">(GMT+12:00) Asia/Kamchatka</option>
                                                    <option value="Asia/Magadan">(GMT+12:00) Asia/Magadan</option>
                                                    <option value="Etc/GMT-12">(GMT+12:00) Etc/GMT-12</option>
                                                    <option value="Kwajalein">(GMT+12:00) Kwajalein</option>
                                                    <option value="NST">(GMT+12:00) NST</option>
                                                    <option value="NZ">(GMT+12:00) NZ</option>
                                                    <option value="Pacific/Auckland">(GMT+12:00) Pacific/Auckland</option>
                                                    <option value="Pacific/Fiji">(GMT+12:00) Pacific/Fiji</option>
                                                    <option value="Pacific/Funafuti">(GMT+12:00) Pacific/Funafuti</option>
                                                    <option value="Pacific/Kwajalein">(GMT+12:00) Pacific/Kwajalein</option>
                                                    <option value="Pacific/Majuro">(GMT+12:00) Pacific/Majuro</option>
                                                    <option value="Pacific/Nauru">(GMT+12:00) Pacific/Nauru</option>
                                                    <option value="Pacific/Tarawa">(GMT+12:00) Pacific/Tarawa</option>
                                                    <option value="Pacific/Wake">(GMT+12:00) Pacific/Wake</option>
                                                    <option value="Pacific/Wallis">(GMT+12:00) Pacific/Wallis</option>
                                                    <option value="NZ-CHAT">(GMT+12:45) NZ-CHAT</option>
                                                    <option value="Pacific/Chatham">(GMT+12:45) Pacific/Chatham</option>
                                                    <option value="Etc/GMT-13">(GMT+13:00) Etc/GMT-13</option>
                                                    <option value="MIT">(GMT+13:00) MIT</option>
                                                    <option value="Pacific/Apia">(GMT+13:00) Pacific/Apia</option>
                                                    <option value="Pacific/Enderbury">(GMT+13:00) Pacific/Enderbury</option>
                                                    <option value="Pacific/Fakaofo">(GMT+13:00) Pacific/Fakaofo</option>
                                                    <option value="Pacific/Tongatapu">(GMT+13:00) Pacific/Tongatapu</option>
                                                    <option value="Etc/GMT-14">(GMT+14:00) Etc/GMT-14</option>
                                                    <option value="Pacific/Kiritimati">(GMT+14:00) Pacific/Kiritimati</option>
                                                </select>
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
                                                Other details
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <label for="client" class="d-block mb-1">PIN</label>
                                               <input type="text" value="4363" disabled  class="form-control form-control-sm">                                           
                                            </div>                                          
                                        </div>      
                                        <div class="row">
                                            <div style="padding-right:10px;margin-left:14px;margin-top:10px">
                                                <button class="btn btn-success" type="submit">
                                                    Save
                                                </button>
                                            </div>               
                                        </div>                                 
                                    </div>
                                </div>
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