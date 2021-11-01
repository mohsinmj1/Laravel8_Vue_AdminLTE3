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
label {
    font-size:12px;
}
</style>

<template>

<section class="content">
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <h2>Create Client </h2>
                </div>
        </div>
        <div class="bg-white pb-4">
            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item" style="width:25%">
                        <a class="nav-link active" id="custom-content-below-main-tab" data-toggle="pill" href="#custom-content-below-main" role="tab" aria-controls="custom-content-below-main" aria-selected="true">Main</a>
                    </li>
                    <li class="nav-item" style="width:25%">
                        <a class="nav-link" id="custom-content-below-date-ranges-tab" data-toggle="pill" href="#custom-content-below-date-ranges" role="tab" aria-controls="custom-content-below-date-ranges" aria-selected="false">Invoicing</a>
                    </li>
                    <li class="nav-item" style="width:25%">
                        <a class="nav-link" id="custom-content-below-reference-tab" data-toggle="pill" href="#custom-content-below-reference" role="tab" aria-controls="custom-content-below-reference" aria-selected="false">Advanced</a>
                    </li>
                    <!-- <li class="nav-item" style="width:25%">
                        <a class="nav-link" id="custom-content-below-financials-tab" data-toggle="pill" href="#custom-content-below-financials" role="tab" aria-controls="custom-content-below-financials" aria-selected="false">Financials</a>
                    </li> -->
                    <li class="nav-item" style="width:25%">
                        <a class="nav-link" id="custom-content-below-advance-tab" data-toggle="pill" href="#custom-content-below-advance" role="tab" aria-controls="custom-content-below-advance" aria-selected="false">History</a>
                    </li>
                </ul><br>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade active show" id="custom-content-below-main" role="tabpanel" aria-labelledby="custom-content-below-main-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        Company Details
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Company Name *</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div> 
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Company Number </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Company Sales VAT Number </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">VAT Code </label>
                                                        <select class="form-control select2" style="width:100%">                                    
                                                            <option value="T0">None (T0)</option>
                                                            <option value="T1" selected="selected">Standard (T1)</option>
                                                        </select>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Default Currency </label>
                                                        <select class="form-control select2" style="width:100%">                                    
                                                            <option value=""></option>
                                                            <option value="GBP" selected="selected">GBP</option>
                                                        </select>
                                                    </div>                                       
                                                </div>                                                                                                                                                                   
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        Main Address
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Firstname </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>       
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Lastname </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Email </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Department</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Telephone </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Mobile </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Address Line 1 </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Address Line 2 </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Town/City </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Company Sales VAT Number </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">County </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Postcode </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Country Code</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>                                                                                                               
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        Default Values
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Default Timesheet Duration </label>
                                                        <select class="form-control select2">                                    
                                                            <option value=""></option>
                                                            <option value="weekly">weekly</option>
                                                            <option value="weekly_tue-mon">weekly_tue-mon</option>
                                                            <option value="weekly_wed-tue">weekly_wed-tue</option>
                                                            <option value="weekly_thurs-wed">weekly_thurs-wed</option>
                                                            <option value="weekly_fri-thurs">weekly_fri-thurs</option>
                                                            <option value="weekly_sat-fri">weekly_sat-fri</option>
                                                            <option value="weekly_sun-sat">weekly_sun-sat</option>
                                                            <option value="two-weekly">two-weekly</option>
                                                            <option value="four-weekly">four-weekly</option>
                                                            <option value="monthly">monthly</option>
                                                            <option value="half-monthly-16th">half-monthly-16th</option>
                                                            <option value="monthly2nd">monthly2nd</option>
                                                            <option value="monthly3rd">monthly3rd</option>
                                                            <option value="monthly4th">monthly4th</option>
                                                            <option value="monthly5th">monthly5th</option>
                                                            <option value="monthly6th">monthly6th</option>
                                                            <option value="monthly7th">monthly7th</option>
                                                            <option value="monthly8th">monthly8th</option>
                                                            <option value="monthly9th">monthly9th</option>
                                                            <option value="monthly10th">monthly10th</option>
                                                            <option value="monthly11th">monthly11th</option>
                                                            <option value="monthly12th">monthly12th</option>
                                                            <option value="monthly13th">monthly13th</option>
                                                            <option value="monthly14th">monthly14th</option>
                                                            <option value="monthly15th">monthly15th</option>
                                                            <option value="monthly16th">monthly16th</option>
                                                            <option value="monthly17th">monthly17th</option>
                                                            <option value="monthly18th">monthly18th</option>
                                                            <option value="monthly19th">monthly19th</option>
                                                            <option value="monthly20th">monthly20th</option>
                                                            <option value="monthly21st">monthly21st</option>
                                                            <option value="monthly22th">monthly22th</option>
                                                            <option value="monthly23th">monthly23th</option>
                                                            <option value="monthly24th">monthly24th</option>
                                                            <option value="monthly25th">monthly25th</option>
                                                            <option value="monthly26th">monthly26th</option>
                                                            <option value="monthly27th">monthly27th</option>
                                                            <option value="monthly28th">monthly28th</option>
                                                        </select>
                                                    </div>  
                                                     <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Default Expense Template </label>
                                                        <select class="form-control select2">   
                                                                <option value="">Agency Default</option>
                                                                <option value="495">Adjustment Invoice</option>
                                                                <option value="494">Default</option>                                                            
                                                        </select>
                                                    </div>                                       
                                                </div>    
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Default Timesheet Approval Route</label>
                                                        <select class="form-control select2">                                    
                                                            <option value="">Agency Default</option>
                                                            <option value="2372">Agency Consultant Approval</option>
                                                            <option value="2376">Auto Approval Route</option>
                                                            <option value="2368">Client Manager Approval</option>
                                                            <option value="2467">SMS Ltd</option>
                                                            <option value="2377">Select Manager</option>
                                                            <option value="2454">Wights Approval (Katie)</option>
                                                        </select>
                                                    </div>                                                                                          
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Default Chargeable Expense Approval Route</label>
                                                        <select class="form-control select2">                                    
                                                           <option value="">Agency Default</option>
                                                            <option value="2372">Agency Consultant Approval</option>
                                                            <option value="2376">Auto Approval Route</option>
                                                            <option value="2368">Client Manager Approval</option>
                                                            <option value="2467">SMS Ltd</option>
                                                            <option value="2377">Select Manager</option>
                                                            <option value="2454">Wights Approval (Katie)</option>
                                                        </select>
                                                    </div>                                                                                          
                                                </div>  
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Default Non Chargeable Expense Approval Route</label>
                                                        <select class="form-control select2">                                    
                                                            <option value="">Agency Default</option>
                                                            <option value="2372">Agency Consultant Approval</option>
                                                            <option value="2376">Auto Approval Route</option>
                                                            <option value="2368">Client Manager Approval</option>
                                                            <option value="2467">SMS Ltd</option>
                                                            <option value="2377">Select Manager</option>
                                                            <option value="2454">Wights Approval (Katie)</option>
                                                        </select>
                                                    </div>                                                                                          
                                                </div>                                                                                                               
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        References
                                                    </h2>
                                                    <p>A reference will be allocated for this Client</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Client Accounts Ref</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div> 
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Debtor Number </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
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
                    <div class="tab-pane fade" id="custom-content-below-date-ranges" role="tabpanel" aria-labelledby="custom-content-below-date-ranges-tab">
                        <div class="row">                            
                            <div class="col-lg-4">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        Invoicing Address
                                                    </h2>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Firstname </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>       
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Lastname </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Email </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Department</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Telephone </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Mobile </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Address Line 1 </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Address Line 2 </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Town/City </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Company Sales VAT Number </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">County </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Postcode </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Country Code</label>
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
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        Invoicing Details
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Invoice Period </label>
                                                        <select class="form-control select2" style="width:100%">                                    
                                                            <option value="0" selected="selected">Weekly</option>
                                                            <option value="1">Two Weekly</option>
                                                            <option value="2">Four Weekly</option>
                                                            <option value="3">Calendar Monthly</option>
                                                            <option value="4">4-4-5</option>
                                                            <option value="5">Other</option>
                                                        </select>
                                                    </div>                                                                                         
                                                </div>    
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Deliver Invoices By</label>
                                                        <select class="form-control select2" style="width:100%">     
                                                            <option value="0">Post</option>
                                                            <option value="1" selected="selected">Email</option>
                                                            <option value="3">Delivery Not Required</option>
                                                        </select>
                                                    </div>                                                                                          
                                                </div>   
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">Send Invoices Individually</label>
                                                        </div>
                                                    </div>                                                     
                                                </div>
                                                <div class="row">
                                                    <div class="p-2 pl-4">
                                                        <div class="timesheet_create_tit">
                                                            <h2 class="pb-2" style="font-size:12px">                                                                
                                                                Payment Terms
                                                            </h2>
                                                        </div>
                                                    </div>                                                                                                
                                                </div>                                               
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for="client" class="d-block mb-1">Days </label>
                                                        <div class="input-group">
                                                            <input type="text" value="30" class="form-control form-control-sm">                                                           
                                                        </div>
                                                    </div>  
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Type</label>
                                                        <select class="form-control select2" style="width:100%">     
                                                            <option value="As Per Agreed Terms and Conditions">As Per Agreed Terms and Conditions</option>
                                                            <option value="Days From Invoice Date" selected="selected">Days From Invoice Date</option>
                                                            <option value="Working Days From Invoice Date">Working Days From Invoice Date</option>
                                                            <option value="Days from Month End">Days from Month End</option>
                                                            <option value="Days from End of Next Month">Days from End of Next Month</option>
                                                            <option value="Days from End of Month After Next">Days from End of Month After Next</option>
                                                            <option value="Days from Sheet End Date">Days from Sheet End Date</option>
                                                        </select>
                                                    </div>                                       
                                                </div>    
                                                <div class="row">                                                    
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Template </label>
                                                        <select class="form-control select2" style="width:100%">     
                                                            <option value="462655">Default Charge Terms</option>
                                                        </select>
                                                    </div>                                       
                                                </div>     
                                                 <div class="row">                                                    
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Additional Text To Include on Invoice </label>
                                                        <textarea name="termsExtraText" id="termsExtraText" class="form-control" rows="10" style="line-height: 1; font-size: 12px; margin: 0; padding: 0;" onkeyup=""></textarea>
                                                    </div>                                       
                                                </div>                                                                                                           
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        Accounting Details
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Nominal Code </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">                                                           
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
                    <div class="tab-pane fade" id="custom-content-below-reference" role="tabpanel" aria-labelledby="custom-content-below-reference-tab">
                        <div class="row">
                            <div class="col-lg-6">                                
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        Allocation of Items To Invoices (Consolidation)
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="goeson">What goes on each invoice?</label>
                                                            <select  class="form-control select2" style="width:100%">
                                                                <option value="everything">Everything Goes On One Invoice</option>
                                                                <option value="separate">Expenses Go On One Invoice And Timesheets Go On Another</option>
                                                                <option value="placement">Each Placement Is Invoiced Separately</option>
                                                                <option value="sheet">Each Timesheet Or Expense Item Is Invoiced Separately</option>
                                                                <option value="worker">Each Worker Is Invoiced </option>
                                                            </select>
                                                        </div>                     
                                                    </div>                                                                                         
                                                </div>  
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <p align="justify" style="line-height: 1.429;">Use the list below to determine which
                                                        items go on separate invoices. For example, if you tick
                                                        Placement this means that you get one invoice for every
                                                        different placement. The options are added together so if you
                                                        were to tick Manager and Rate Name then items would be
                                                        allocated to invoices based on both the Manager and the Rate
                                                        Name. For example, if you have two timesheets for different
                                                        managers and each timesheet contained Standard and Overtime
                                                        rates, then you would get 4 invoices.</p>
                                                    </div>
                                                </div>  
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <b>Common</b>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sheet-type" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Separate Expenses and Timesheets</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sheet" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Each Timesheet or Expense Item is invoiced separately</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="placement" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Placement</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="client-manager" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Manager</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="purchase-order" name="consolidation" checked="" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Purchase Order</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="worker" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Worker</label></div>
                                                    </div>   
                                                    <div class="col-lg-6">
                                                        <b>Purchase</b>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="purchase-branch" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Purchase Branch</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="purchase-cost-centre" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Purchase Cost Centre</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="purchase-department" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Purchase Dept</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="purchase-division" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Purchase Division</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="purchase-location" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Purchase Location</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="purchase-sector" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Purchase Sector</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="purchase-project" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Purchase Project</label></div>
                                                    </div>                                                                                    
                                                </div>   
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <b>Sales</b>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sales-branch" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Sales Branch</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sales-cost-centre" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Sales Cost Centre</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sales-department" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Sales Department</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sales-division" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Sales Division</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sales-location" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Sales Location</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sales-sector" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Sales Sector</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sales-project" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Sales Project</label></div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <b>Advanced</b>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="client-site" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Client Site</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="job-title" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Job Title</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="job-description" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Job Description</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sheet-end-date" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Items with Different Dates</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="rate-name" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Rate Name</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="pay-element" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Pay Element</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="sheet-rate" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Rate</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="payroll-ref" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Payroll Reference</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="freehand-ref" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Freehand Reference</label></div>
                                                        <div class="checkbox checkbox-primary"><input type="checkbox" value="perm" name="consolidation" data-parsley-multiple="consolidation">	<label style="font-weight: normal;" for="checkbox2">Perm</label></div>
                                                    </div>
                                                </div>
                                                                                                                                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>                                 
                            </div>
                            <div class="col-lg-6 ">
                                <div class="card card-primary card-outline card-tabs">
                                    sadasd
                                </div> 
                            </div>
                            <div class="col-lg-6 ">
                                <div class="card card-primary card-outline card-tabs">
                                    sadsa
                                </div> 
                            </div>
                            <div class="col-lg-6 ">
                                <div class="card card-primary card-outline card-tabs">
                                    sadsaasd
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-content-below-financials" role="tabpanel" aria-labelledby="custom-content-below-financials-tab">
                       
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