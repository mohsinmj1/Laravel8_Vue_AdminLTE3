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

.panel-title {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 0;
    margin-top: 0;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    padding: 10px;
    color:#009ada;
}
.panel {
    box-shadow: 0 6px 19px 0 rgba(0, 0, 0, 0.04), 0 1px 0 0 rgba(0, 0, 0, 0.02);
    border-radius: 0px;
    border: none;
    margin-bottom: 20px;
}
.panel-body {
     padding: 15px; 
}
</style>


<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Create Workers </h2>
                </div>
            </div>
            <div class="bg-white pb-4">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                        <li class="nav-item" style="width:20%">
                            <a class="nav-link active" id="custom-content-below-general-tab" data-toggle="pill" href="#custom-content-below-general" role="tab" aria-controls="custom-content-below-general" aria-selected="true">Main</a>
                        </li>
                        <li class="nav-item" style="width:20%;border-bottom:blue">
                            <a class="nav-link" id="custom-content-below-timesheet-tab" data-toggle="pill" href="#custom-content-below-timesheet" role="tab" aria-controls="custom-content-below-timesheet" aria-selected="false">Employement Details</a>
                        </li>
                        <li class="nav-item" style="width:20%">
                            <a class="nav-link" id="custom-content-below-expenses-tab" data-toggle="pill" href="#custom-content-below-expenses" role="tab" aria-controls="custom-content-below-expenses" aria-selected="false">Limited Company</a>
                        </li>
                        <li class="nav-item" style="width:20%">
                            <a class="nav-link" id="custom-content-below-invoicing-tab" data-toggle="pill" href="#custom-content-below-invoicing" role="tab" aria-controls="custom-content-below-invoicing" aria-selected="false">Bank Accounts</a>
                        </li>
                        <!-- <li class="nav-item" style="width:20%">
                            <a class="nav-link" id="custom-content-below-financial-tab" data-toggle="pill" href="#custom-content-below-financial" role="tab" aria-controls="custom-content-below-financial" aria-selected="false">CIS</a>
                        </li> -->
                        <li class="nav-item" style="width:20%">
                            <a class="nav-link" id="custom-content-below-advance-tab" data-toggle="pill" href="#custom-content-below-advance" role="tab" aria-controls="custom-content-below-advance" aria-selected="false">Advanced</a>
                        </li>
                    </ul><br>
                    <div class="tab-content" id="custom-content-below-tabContent">
                        <div class="tab-pane fade active show" id="custom-content-below-general" role="tabpanel" aria-labelledby="custom-content-below-general-tab">
                     <div class ="row">
                            <div class="col-lg-2">
                                <label for="client" class="d-block mb-1">References</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" readonly placeholder="Auto Generated">
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox col-lg-1" style="padding-top: 30px;">
                                <div class="input-group">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Perm</label>
                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Classify this placement as perm."><span class="badge badge-primary badge-tooltip"><small>?</small></span></a>
                                </div>
                            </div>
                              <div class="custom-control custom-checkbox col-lg-1" style="padding-top: 30px;">
                                <div class="input-group">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Bulk</label>
                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="if tiked then timesheet can be enter using the bulk entry timesheet option.No reminder email will be send.."><span class="badge badge-primary badge-tooltip"><small>?</small></span></a>
                                </div>
                            </div>
                              <div class="custom-control custom-checkbox col-lg-2" style="padding-top: 30px;">
                                <div class="input-group">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Agency</label>
                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Only Administrators and Consultants can enter timesheets for this placement if ticked."><span class="badge badge-primary badge-tooltip"><small>?</small></span></a>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <label for="client" class="d-block mb-1">Start Date*</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="dd/MM/yyyy">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary fa-icon" type="button">
                                                <i class="fa fa-calendar"></i>
                                        </button>
                                    </div>
                                 </div>
                            </div>

                              <div class="col-lg-3">
                                <label for="client" class="d-block mb-1">End Date*</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="dd/MM/yyyy">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary fa-icon" type="button">
                                                <i class="fa fa-calendar"></i>
                                        </button>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <br>
                            <div class ="row">
                                <div class="col-lg-6">
                                    <label for="client" class="d-block mb-1">Role / Job Title *</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" >
                                    </div>
                                    <div class="form-group">
                                        <label for="client" class="d-block mb-1">Client Site</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="client" class="d-block mb-1">Job Description</label>
                                    <div class="input-group">
                                        <textarea type="text" class="form-control form-control-sm"  row="7" placeholder="Auto Generated"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="border-top:3px solid #009ada">
                                <h3 class="panel-title">Participants</h3>
                                <div class ="row" >
                                    <div class="col-lg-5" style="padding-right:0px">
                                         <div class="col-sm-12" >
                                            <label for="client" class="d-block mb-1">Worker *</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary fa-icon" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <div class="col-lg-5"> -->
                                            <label for="client" class="d-block mb-1">Client *</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary fa-icon " type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <div class="col-lg-5"> -->
                                            <label for="client" class="d-block mb-1">Manager *</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary fa-icon" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- </div>
                                            <div class="col-lg-5"> -->
                                                <label for="client" class="d-block mb-1">Consultant *</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary fa-icon" type="button">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            
                                    <div class="col-lg-7" style="padding-left:0px">
                                        <div class="col-lg-12 row">
                                            <div class="col-lg-5">
                                                <label for="client" class="d-block mb-1">Job Description</label>
                                                    <div class="input-group">
                                                        <select name="altManager_from[]" id="altManager" class="form-control input-sm" size="8" multiple="multiple">
                                                        </select>                                           
                                                    </div>
                                            </div>
                                            <div class="col-lg-2" style="padding-top:35px" >
                                                <button type="button" id="altManager_rightAll" class="btn btn-block btn-primary btn-sm"><i class="fa fa-forward" aria-hidden="true"></i></button>
                                                <button type="button" id="altManager_rightSelected" class="btn btn-block btn-light btn-xs"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                                <button type="button" id="altManager_leftSelected" class="btn btn-block btn-light btn-xs"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                                                <button type="button" id="altManager_leftAll" class="btn btn-block btn-primary btn-sm"><i class="fa fa-backward" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="row" >
                                                    <label for="client" class="d-block mb-1">Job Description</label>
                                                    <div class="input-group">
                                                        <select name="altManager_from[]" id="altManager" class="form-control input-sm" size="8" multiple="multiple"> </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <button type="button" style="padding: 0px;width: 70px;" id="altManager_move_up" class="btn btn-block btn-light"><i class="fa fa-arrow-up"></i></button>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <button type="button" style="padding: 0px;width: 70px;" id="altManager_move_down" class="btn btn-block btn-light "><i class="fa fa-arrow-down"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="client" class="d-block mb-1">Internal Agency Comments</label>
                                            <div class="input-group">
                                                <textarea type="text" class="form-control form-control-sm"  row="2" placeholder="Auto Generated"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <!----- card end-------->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <input type="hidden" id="propertyTimePeriod" name="propertyTimePeriod" value="60">
                                        <input type="hidden" id="propertyTimesheetFields" name="propertyTimesheetFields" value="hours">
                                        <input type="hidden" id="propertyRateDuration" name="propertyRateDuration" value="60">
                                        <table class="table table-condensed">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th style="white-space:nowrap;">Name</th>
                                                <th class="number" style="">Pay<br>(<span id="ratePayCurr">GBP</span>)</th>
                                                <th class="number" style="">Charge<br>(<span id="rateChargeCurr">GBP</span>)</th>
                                                <th style="white-space:nowrap;">Pay Element</th>
                                                <th style="display:none;">Period</th>
                                                <th class="number" style="white-space:nowrap;">Duration<br>(mins)</th>
                                                <th style="white-space:nowrap;">Fields</th>
                                                <th style="text-align:center">Show Comment Box</th>
                                                <th style="text-align:center">Worker Can Select</th>
                                                <th style="white-space:nowrap;">Time Pattern</th>
                                                <th style="white-space:nowrap;">Frontend Ref</th>
                                                <th style="white-space:nowrap;">Backend Ref</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="rateRow_0" style="display:table-row;">
                                                    <td style="text-align:center;"><a href="#" onclick="removeRate(0);"><i class="fa fa-trash text-danger"></i></a></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" onclick="priDown(0);"><i class="fa fa-arrow-down text-success"></i></a>
                                                        <input id="ratePriority_0" type="hidden" name="priority" value="0">
                                                    </td>
                                                    <td><input type="hidden" name="rateId" id="rateId0" value="" >
                                                        <input style="min-width:170px;" class="form-control input-xs" id="rateName0" type="text" name="rateName" value=""/>
                                                    </td>
                                                    <td><input style="min-width:65px;" class="form-control input-xs" id="ratePay0" type="text" name="pay" value=""></td>
                                                    <td><input style="min-width:65px;" class="form-control input-xs" id="rateCharge0" type="text" name="charge" value=""></td>
                                                    <td>
                                                        <select name="payElement" style="min-width:200px;" id="ratePayElement0" class="form-control input-xs">
                                                            <option value="" selected="selected"></option>
                                                            <option value="1140292">Default - (Pay And Charge | TAX: true | NI: true | HOL: true)</option>
                                                            <option value="1140293">Overtime - (Pay And Charge | TAX: true | NI: true | HOL: false)</option>
                                                            <option value="1140323">Overtime - (Pay And Charge | TAX: true | NI: true | HOL: true)</option>
                                                            <option value="1140299">Placement - (Charge Only | TAX: true | NI: true | HOL: false)</option>
                                                            <option value="1140324">Standard Rate - (Pay And Charge | TAX: true | NI: true | HOL: true)</option>
                                                            <option value="1205153">Standard Rate - Night - (Pay And Charge | TAX: true | NI: true | HOL: true)</option>
                                                        </select>
                                                    </td>
                                                    <td style="display:none;"><input type="hidden" style="min-width:150px;" name="timePeriod" id="timePeriod0" class="form-control input-xs" onchange="changedPeriod(0);" value="60"></td>
                                                    <td><input class="form-control input-xs" type="text" name="periodDuration" id="periodDuration0" value="60" disabled=""></td>
                                                    <td>
                                                        <select style="min-width:110px;" name="fields" id="fields0" class="form-control input-xs" onchange="changedFields(0);">
                                                            <option value="hours" selected="">Time &amp; Hours</option>
                                                            <option value="hoursOnly">Hours Only</option>
                                                            <option value="decimal">Decimal</option>
                                                            <option value="tickbox">TickBox</option>
                                                        </select>
                                                    </td>
                                                    <td style="text-align:center"><input type="checkbox" id="commentSelect0" class="" name="commentSelect0" checked="checked"></td>
                                                    <td style="text-align:center"><input type="checkbox" id="workerSelect0" class="" name="workerSelect0" checked="checked"></td>
                                                    <td>
                                                        <select name="timePattern" style="min-width:150px;" id="rateTimePattern0" class="form-control input-xs">
                                                            <option value="Default">Default</option>
                                                        </select>
                                                    </td>
                                                    <td><input style="min-width:40px;" class="form-control input-xs" id="ratefRef0" type="text" name="fRef" value=""></td>
                                                    <td><input style="min-width:40px;" class="form-control input-xs" id="ratebRef0" type="text" name="bRef" value=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-------------- bottom card end ------------->
                        </div>
                        <!------first tab end -->
                        <div class="tab-pane fade" id="custom-content-below-timesheet" role="tabpanel" aria-labelledby="custom-content-below-timesheet-tab">
                             
                    
                        <div class="card card-primary card-outline card-tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-2 pl-4">
                                        <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                TAX & N.I. DETAILS
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="client" class="d-block mb-1">National Insurance Number ?</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="client" class="d-block mb-1">Unique Tax Reference  <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="The approver can reply to authorisation emails to authorise timesheets without the need to sign in to InTime."><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                            </div>   
                                                                                    
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!------2nd tab end -->
                        <div class="tab-pane fade" id="custom-content-below-expenses" role="tabpanel" aria-labelledby="custom-content-below-expenses-tab">
           
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
                                            <div class="p-2 pl-12">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        INVOICING DETAILS
                                                    </h2>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Invoice Period</label>
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
                                                        <label for="client" class="d-block mb-1">Deliver Invoices By</label>
                                                        <select class="form-control select2">                                    
                                                           <option value="">Agency Default</option>
                                                          
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
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Days </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm" >                                                      
                                                        </div>
                                                    </div>   
                                                     <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Type  </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm" >                                                      
                                                        </div>
                                                    </div>                                      
                                                </div>   
                                                   <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="client" class="d-block mb-1">Additional Text To Incl Company Invoice</label>
                                                        <div class="input-group">
                                                            <textarea type="text" class="form-control form-control-sm" row="7">  </textarea>                                                         
                                                        </div>
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
                        <!------third expense tab end -->
                        <div class="tab-pane fade" id="custom-content-below-invoicing" role="tabpanel" aria-labelledby="custom-content-below-invoicing-tab">
                            <!-----  first card start ------->
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
                                                        <div class="form-group"> 
                                                            <label class="control-label" for="workerDetails.buildingSocRollNum">Building Society Ref</label>
                                                            <input type="text" label="Building Society Ref" id="workerDetails.buildingSocRollNum" name="workerDetails.buildingSocRollNum" maxlength="50" value="" class="form-control form-control-sm">
                                                        </div>
                                                    </div>                                       
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                         <div class="form-group"> 
                                                            <label class="control-label" for="workerDetails.buildingSocRollNum">IBAN</label>
                                                            <input type="text" label="Building Society Ref" id="workerDetails.buildingSocRollNum" name="workerDetails.buildingSocRollNum" maxlength="50" value="" class="form-control form-control-sm">
                                                        </div>
                                                    </div>                                       
                                                </div>  
                                                 <div class="row">
                                                    <div class="col-lg-12">
                                                         <div class="form-group"> 
                                                            <label class="control-label" for="workerDetails.buildingSocRollNum">Swift</label>
                                                            <input type="text" label="Building Society Ref" id="workerDetails.buildingSocRollNum" name="workerDetails.buildingSocRollNum" maxlength="50" value="" class="form-control form-control-sm">
                                                        </div>
                                                    </div>                                       
                                                </div> 
                                                 <div class="row">
                                                    <div class="col-lg-12">
                                                         <div class="form-group"> 
                                                            <label class="control-label" for="workerDetails.buildingSocRollNum">Bank Financial Institution Number</label>
                                                            <input type="text" label="Building Society Ref" id="workerDetails.buildingSocRollNum" name="workerDetails.buildingSocRollNum" maxlength="50" value="" class="form-control form-control-sm">
                                                        </div>
                                                    </div>                                       
                                                </div>  
                                                 <div class="row">
                                                    <div class="col-lg-12">
                                                         <div class="form-group"> 
                                                            <label class="control-label" for="workerDetails.buildingSocRollNum">Agency Account to Pay From</label>
                                                            <input type="text" label="Building Society Ref" id="workerDetails.buildingSocRollNum" name="workerDetails.buildingSocRollNum" maxlength="50" value="" class="form-control form-control-sm">
                                                        </div>
                                                    </div>                                       
                                                </div>                                                                                                                                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            </div>
                        <!------third tab end ----->
                        </div>
                        <!----- invoce tab end ----->
                        <!-- <div class="tab-pane fade" id="custom-content-below-financial" role="tabpanel" aria-labelledby="custom-content-below-financial-tab">
                          <div class="row">
                            <div class="col-lg-6">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        Finanacial
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Sales Sector </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Purchase Sector</label>
                                                        <input type="text" class="form-control">
                                                    </div>  
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Sales Branch </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Purchase Branch</label>
                                                        <input type="text" class="form-control">
                                                    </div>  
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Sales Location </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Purchase Location</label>
                                                        <input type="text" class="form-control">
                                                    </div>  
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Sales Division</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Purchase Division</label>
                                                        <input type="text" class="form-control">
                                                    </div>  
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Sales Department </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Purchase Dept</label>
                                                        <input type="text" class="form-control">
                                                    </div>  
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Sales Project</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Purchase Project</label>
                                                        <input type="text" class="form-control">
                                                    </div>  
                                                </div>   
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Sales Cost Centre Sector </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Purchase Cost Centre</label>
                                                        <input type="text" class="form-control">
                                                    </div>  
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Project Code</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-link"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="client" class="d-block mb-1">Expenses PO</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-link"></i>
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
                            <div class="col-lg-6">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        Commission
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for="client" class="d-block mb-1">Comission</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-percent"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <label for="client" class="d-block mb-1">Search</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>      
                                                <div class="row" style="padding-top:5px">
                                                    <div class="col-lg-4">                                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-percent"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">                                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="row" style="padding-top:5px">
                                                    <div class="col-lg-4">                                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-percent"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">                                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>   
                                                 <div class="row" style="padding-top:5px">
                                                    <div class="col-lg-4">                                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-percent"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">                                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="row" style="padding-top:5px">
                                                    <div class="col-lg-4">                                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-percent"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">                                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="row" style="padding-top:5px">
                                                    <div class="col-lg-8"> 
                                                        0% Total
                                                    </div>
                                                </div>     
                                                <div class="row" style="padding-top:10px">
                                                    <div class="col-lg-12"> 
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">Allow non 100% Total</label>
                                                        </div>
                                                    </div>
                                                </div>                                                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div> -->
                        <!------fourth tab end -->
                        <div class="tab-pane fade" id="custom-content-below-advance" role="tabpanel" aria-labelledby="custom-content-below-advance-tab">
                            <div class="col-sm-12">
                                <div class="panel panel-border panel-primary" style="border-top:3px solid #009ada">
                                    <div class="panel-heading"><h3 class="panel-title">Disable Placement Emails</h3></div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>The selected user will not receive emails related to this placement including the new placement email, 
                                                changes to this placement and timesheet/expense approval/rejections. </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"><br><div class="checkbox checkbox-primary m-t-0"><input type="hidden" name="_workerComms"><input type="checkbox" name="workerComms" value="on" id="workerComms"><label for="workerComms" class="control-label" style="font-weight: 700 !important;">Worker</label></div></div>

                                            <div class="col-sm-3"><br><div class="checkbox checkbox-primary m-t-0"><input type="hidden" name="_managerComms"><input type="checkbox" name="managerComms" value="on" id="managerComms"><label for="managerComms" class="control-label" style="font-weight: 700 !important;">Manager</label></div></div>


                                            <div class="col-sm-3"><br><div class="checkbox checkbox-primary m-t-0"><input type="hidden" name="_consultantComms"><input type="checkbox" name="consultantComms" value="on" id="consultantComms"><label for="consultantComms" class="control-label" style="font-weight: 700 !important;">Consultant</label></div></div>


                                            <div class="col-sm-3"><br><div class="checkbox checkbox-primary m-t-0"><input type="hidden" name="_ltdComms"><input type="checkbox" name="ltdComms" checked="checked" value="on" id="ltdComms"><label for="ltdComms" class="control-label" style="font-weight: 700 !important;">Ltd User</label></div></div>

                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <!----- 1st card end ----> 
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="panel panel-border panel-primary" style="border-top:3px solid #009ada">
                                                <div class="panel-heading"><h3 class="panel-title">Tax &amp; VAT</h3></div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="clientTaxCode">Client Tax Code </label>
                                                                <select name="clientTaxCode" id="clientTaxCode" class="form-control input-sm null" onchange="" disabled="">
                                                                    <option value="768">T0 None</option>
                                                                    <option value="767" selected="selected">T1 Standard</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <br><div class="checkbox checkbox-primary m-t-0">
                                                            <input type="checkbox" name="useDefaultClientTaxCode" id="useDefaultClientTaxCode" checked="checked" onclick="clickUseDefaultClientTaxCode(this);">
                                                            <label class="control-label" style="font-weight: 700 !important;">Use Default</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6"><div class="form-group">
                                                            <label class="control-label" for="selfBillTaxCode">Self Bill Tax Code</label>
                                                                <select name="selfBillTaxCode" id="selfBillTaxCode" class="form-control input-sm null" onchange="" disabled="">
                                                                    <option value="768" selected="selected">T0 None</option>
                                                                    <option value="767">T1 Standard</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                        <div class="col-sm-6">
                                                            <br><div class="checkbox checkbox-primary m-t-0">
                                                                <input name="_useDefaultClientTaxCode" type="hidden">
                                                                <input type="checkbox" name="useDefaultSelfBillTaxCode" id="useDefaultSelfBillTaxCode" checked="checked" onclick="clickUseDefaultSelfBillTaxCode(this);">
                                                                <label class="control-label" style="font-weight: 700 !important;">Use Default</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="panel panel-border panel-primary" style="border-top:3px solid #009ada">
                                                <div class="panel-heading"><h3 class="panel-title">Holiday Accrual</h3></div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group"> 
                                                                <label class="control-label" for="holidayAccrueRate">Holiday Accrual Rate</label>
                                                                  <div class="input-group">
                                                                    <input type="text" class="form-control form-control-sm" placeholder="Holiday Accrual Rate">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-primary fa-icon" type="button">
                                                                            <i class="fa fa-percentage"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="panel panel-border panel-primary" style="border-top:3px solid #009ada">
                                                <div class="panel-heading"><h3 class="panel-title">Notice Period</h3></div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group"> 
                                                                <label class="control-label" for="salesNoticePeriod">Sales Notice</label>
                                                                <input type="text" label="Sales Notice" format="2" id="salesNoticePeriod" value="" name="noticePeriod" maxlength="250" title="" class="form-control input-sm">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="purchaseNoticePeriod">Purchase Notice</label>
                                                                <input type="text" label="Purchase Notice" format="2" id="purchaseNoticePeriod" value="" name="purchaseNoticePeriod" maxlength="250" title="" class="form-control input-sm">
                                                            </div>
                                                        </div>
                    

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-border panel-primary" style="border-top:3px solid #009ada">
                                <a data-toggle="collapse" href="#tagsPanel" aria-expanded="false" class="collapsed">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        TAGS
                                    </h4>
                                </div>
                                </a>
                                <div id="tagsPanel" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                                    <table class="table table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Description</th>
                                                                <th>Applicable When</th>
                                                                <th>Properites</th>
                                                                <th>Remove</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr id="filterRow_0" >
                                                                <td style="text-align:left;vertical-align:top;width:15%;">
                                                                    <input type="text" name="existingFilterId_0" value="" id="existingFilterId_0">
                                                                </td>
                                                                <td style="text-align:left;vertical-align:top;width:30%;"><span id="filterDesc_0"><p style="text-align: justify;"></p></span></td>

                                                                <td style="text-align:left;vertical-align:top;width:5%;"><input type="text" name="filterExpression_0" id="filterExpression_0" class="form-control input-xs" value="" style="display:none;width:150px;"></td>

                                                                <td style="width:2%">
                                                                    <a href="" onclick="clearFilter(0);"><i class="fa fa-trash text-danger"></i></a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row"><div class="col-sm-12"><button name="addFilter" class="btn btn-primary waves-effect waves-light" type="button" value="Add Filter" onclick="newFilter();">Add Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-border panel-primary" style="border-top:3px solid #009ada">
                                <a data-toggle="collapse" href="#filtersPanel" aria-expanded="false" class="collapsed">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        
                                                Filters
                                        
                                        </h4>
                                    </div>
                                </a>
                                <div id="filtersPanel" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                                    <table class="table table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Description</th>
                                                                <th>Applicable When</th>
                                                                <th>Properites</th>
                                                                <th>Remove</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                
                                                        <tr id="filterRow_0" >
                                                                <td style="text-align:left;vertical-align:top;width:15%;">
                                                                    <input type="text" name="existingFilterId_0" value="" id="existingFilterId_0">
                                                                </td>
                                                                <td style="text-align:left;vertical-align:top;width:30%;"><span id="filterDesc_0"><p style="text-align: justify;"></p></span></td>

                                                                <td style="text-align:left;vertical-align:top;width:5%;"><input type="text" name="filterExpression_0" id="filterExpression_0" class="form-control input-xs" value="" style="display:none;width:150px;"></td>

                                                                <td style="width:2%">
                                                                    <a href="" onclick="clearFilter(0);"><i class="fa fa-trash text-danger"></i></a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row"><div class="col-sm-12"><button name="addFilter" class="btn btn-primary waves-effect waves-light" type="button" value="Add Filter" onclick="newFilter();">Add Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        </div>

                        </div>
                        <!------fivth tab end -->
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
            $('.select2').select2()   ;
            $('[data-toggle="tooltip"]').tooltip();
            console.log('Creat Timesheet mounted.');
        }
    }
</script>
