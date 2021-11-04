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
                            <a class="nav-link active" id="custom-content-below-main-tab" data-toggle="pill" href="#custom-content-below-main" role="tab" aria-controls="custom-content-below-main" aria-selected="true">Main</a>
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
                        <div class="tab-pane fade active show" id="custom-content-below-main" role="tabpanel" aria-labelledby="custom-content-below-main-tab">
                                <div class="panel panel-border panel-primary">
	
								<div class="panel-heading">
									<h3 class="panel-title">General</h3>
								</div>
	
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-4">
                                            <div class="form-group"><label class="control-label" for="workerType">Worker Type *</label><select name="workerType" id="workerType" class="form-control input-sm compulsory null" onchange="" required="true">
                                                <option value="0">PAYE</option>
                                                <option value="1" selected="selected">LTD</option>
                                                <option value="2">External Contractor</option>
                                                <option value="3">Umbrella</option>
                                                </select></div></div>
                                                                                            
										<div class="col-sm-4">
                                            <div class="form-group"><label class="control-label" for="paymentFrequency">Payroll *</label><select name="workerDetails.paymentFrequency" id="paymentFrequency" class="form-control input-sm compulsory null" onchange="" required="true">
                                                <option value=""></option>
                                                <option value="0" selected="selected">Weekly (Limited)</option>
                                                <option value="1">Monthly (Limited)</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-sm-4"><br><div class="checkbox checkbox-primary m-t-0"><input type="hidden" name="_usesSMS"><input type="checkbox" name="usesSMS" id="usesSMS" data-parsley-multiple="usesSMS"><label for="null" class="control-label" style="font-weight: 700 !important;">SMS Opt-in</label></div></div>
									</div>
									<div class="row">
										<div class="col-sm-3"><div class="form-group"><label class="control-label" for="workerDetails.engagementType">Engagement Type <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="The classification for the HMRC intermediary report"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><select name="workerDetails.engagementType" id="workerDetails.engagementType" class="form-control input-sm null" onchange="">
                                                <option value="">None</option>
                                                <option value="A">A - Self-Employed Contractor</option>
                                                <option value="B">B - Partnership</option>
                                                <option value="C">C - Limited Liability Partnership</option>
                                                <option value="D" selected="selected">D - Limited Company</option>
                                                <option value="E">E - Non-UK Engagement</option>
                                                <option value="F">F - Another Party Operated PAYE on the Worker's Payment</option>
                                                <option value="Z">Z - Out of HMRC Employment Intermediaries Scope</option>
                                                </select></div></div>
											<div class="col-sm-4"><div class="form-group"><label class="control-label" for="null">Default Currency <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="This may be overridden on the placement if required"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><select name="workerDetails.currencyInternal" id="workerDetails.currencyInternal" class="form-control input-sm null" onchange="">
                                                <option value=""></option>
                                                <option value="GBP" selected="selected">GBP</option>
                                                </select></div></div>              
									</div>
										<div class="alert alert-warning notinpaylinked" style="display: none;">
											<strong>Information!</strong> This Worker is not currently linked to InPay
										</div>
								</div>
							</div>
                            <!-------------- bottom card end ------------->
                            <div class="row">
	
								<div class="col-sm-8">
	
									<div class="panel panel-border panel-primary">
	
										<div class="panel-heading">
											<h3 class="panel-title">Personal Details</h3>
										</div>
	
										<div class="panel-body">
	
											<div class="row">
												<div class="col-sm-2"><div class="form-group"><label class="control-label" for="null">Title</label><select name="title" id="title" class="form-control input-sm null" onchange="">
                                                    <option value="">Choose</option>
                                                    <option value="">N/A</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Miss">Miss</option>
                                                    <option value="Sir">Sir</option>
                                                    <option value="Dr">Dr</option>
                                                    </select></div></div>
												<div class="col-sm-4"><div class="form-group"> <label class="control-label" for="firstname">Firstname *</label><input type="text" grid="4" label="Firstname" id="firstname" name="firstname" value="" maxlength="50" class="form-control input-sm compulsory" required="true"></div>
	                                            </div>
    
												<div class="col-sm-3"><div class="form-group"> <label class="control-label" for="middlename">Middlename</label><input type="text" grid="3" label="Middlename" name="middlename" value="" maxlength="50" id="middlename" class="form-control input-sm"></div>
	                                                 </div>
    
												<div class="col-sm-3"><div class="form-group"> <label class="control-label" for="lastname">Lastname *</label><input type="text" grid="3" label="Lastname" id="lastname" name="lastname" value="" maxlength="50" class="form-control input-sm compulsory" required="true"></div>
	                                             </div>
											</div>
											<div class="row">
												<div class="col-sm-2"><br><div class="checkbox checkbox-primary m-t-0"><input type="hidden" name="_noCommunications"><input type="checkbox" name="noCommunications" id="noCommunications" data-parsley-multiple="noCommunications"><label for="noCommunications" class="control-label" style="font-weight: 700 !important;">Disable Email <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="If ticked this user will not receive automated emails such as welcome emails, placement notifications and timesheet reminders. They will still be able to receive invoices and remittances."><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label></div></div>
												<div class="col-sm-4"><div class="form-group"> <label class="control-label" for="email">Email *</label><input type="text" grid="4" label="Email" id="email" name="email" value="" maxlength="255" class="form-control input-sm compulsory" required="true"></div>
	                                            </div>
    
												<div class="col-sm-3"><div class="form-group"> <label class="control-label" for="primaryContact.phone">Phone</label><input type="text" grid="3" label="Phone" name="primaryContact.phone" value="" maxlength="30" id="primaryContact.phone" class="form-control input-sm"></div>
	                                                 </div>
    
												<div class="col-sm-3"><div class="form-group"> <label class="control-label" for="primaryContact.mobile">Mobile</label><input type="text" grid="3" label="Mobile" name="primaryContact.mobile" value="" maxlength="30" id="primaryContact.mobile" class="form-control input-sm"></div>
	                                                 </div>
    
											</div>
											<div class="row">
												<div class="col-sm-2"><div class="form-group"><label class="control-label" for="null">Gender *</label><select name="workerDetails.gender" id="workerDetails.gender" class="form-control input-sm compulsory null" onchange="" required="true">
                                                    <option value="">Choose</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    </select></div></div>
												<div class="col-sm-4" grid="4">&nbsp;</div>
												<div class="col-sm-3">
                                                    <div class="form-group" style="margin-bottom:0 !important;">
    
                                                         <label for="workerDetails.dateOfBirth" class="control-label" id="workerDetails.dateOfBirth_label">Date of Birth</label>
    
                                                         <div class="input-group">
                                                            <input style="min-width:80px;" type="text" value="" class="bsDP form-control input-sm " placeholder="dd/MM/yyyy" id="workerDetails.dateOfBirth_X" name="workerDetails.dateOfBirth_X" data-date-start-date="" data-date-end-date="">
        
                                                            <input id="workerDetails.dateOfBirth" name="workerDetails.dateOfBirth" value="" type="hidden">
        
                                                                 <span id="workerDetails.dateOfBirth_icon" class="bsDP-icon input-group-addon bg-primary b-0 text-white"><i class="ion-calendar"></i></span>
        
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>

												<div class="col-sm-3">
                                                    <div class="form-group" style="margin-bottom:0 !important;">
    
                                                         <label for="workerDetails.dateOfJoining" class="control-label" id="workerDetails.dateOfJoining_label">Date of Joining</label>
                                                            <div class="input-group">
                                                            
                                                                    <input style="min-width:80px;" type="text" value="" class="bsDP form-control input-sm " placeholder="dd/MM/yyyy" id="workerDetails.dateOfJoining_X" name="workerDetails.dateOfJoining_X" data-date-start-date="" data-date-end-date="">
                                                                
                                                                <input id="workerDetails.dateOfJoining" name="workerDetails.dateOfJoining" value="" type="hidden">
                                                                
                                                                    <span id="workerDetails.dateOfJoining_icon" class="bsDP-icon input-group-addon bg-primary b-0 text-white"><i class="ion-calendar"></i></span>
                                                                
                                                            </div><!-- input-group -->
                                                        </div>
                                                        </div>

											</div>
										</div>
									</div>
									<div class="panel panel-border panel-primary">
	
										<div class="panel-heading">
											<h3 class="panel-title">Reference Codes</h3>
										</div>
	
										<div class="panel-body">
											
												<div class="row">
													<p>
														A reference will be allocated for this Worker
													</p>
												</div>
											
											<div class="row">	
												<div class="col-sm-3"><div class="form-group"> <label class="control-label" for="workerDetails.externalRef">External <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Can be used if you have a different reference in your front office system"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><input type="text" grid="3" label="External" name="workerDetails.externalRef" value="" maxlength="100" tooltip="Can be used if you have a different reference in your front office system" id="workerDetails.externalRef" class="form-control input-sm"></div>
	                                              </div>

													<div class="col-sm-3"><div class="form-group"> <label class="control-label" for="workerDetails.accountNum">Accounts <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Used as the reference on invoice or timesheet exports"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><input type="text" grid="3" label="Accounts" name="workerDetails.accountNum" maxlength="8" maxlengthproperty="Form.Worker.AccountsRefLength" value="" tooltip="Used as the reference on invoice or timesheet exports" id="workerDetails.accountNum" class="form-control input-sm"></div>
	                                                </div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-border panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title">Address</h3>
										</div>
										<div class="panel-body">
											<div class="row">
												<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="primaryContact_address_street1">Address Line 1</label><input type="text" grid="12" label="Address Line 1" id="primaryContact_address_street1" name="primaryContact.address.street1" value="" maxlength="80" class="form-control input-sm"></div>
	                                        </div>
    
											</div>
											<div class="row">
												<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="primaryContact_address_street2">Address Line 2</label><input type="text" grid="12" label="Address Line 2" id="primaryContact_address_street2" name="primaryContact.address.street2" value="" maxlength="80" class="form-control input-sm"></div>
	                                        </div>
    
											</div>
											<div class="row">
												<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="primaryContact_address_town">Town/City</label><input type="text" grid="12" label="Town/City" id="primaryContact_address_town" name="primaryContact.address.town" maxlength="80" value="" class="form-control input-sm"></div>
	                                         </div>
    
											</div>
											<div class="row">
												<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="primaryContact_address_county">County</label><input type="text" grid="12" label="County" id="primaryContact_address_county" name="primaryContact.address.county" maxlength="80" value="" class="form-control input-sm"></div>
	                                         </div>
    
											</div>
											<div class="row">
												<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="primaryContact_address_postcode">Postcode</label><input type="text" grid="12" label="Postcode" id="primaryContact_address_postcode" name="primaryContact.address.postcode" maxlength="20" value="" class="form-control input-sm"></div>
	                                        </div>
    
											</div>
											<div class="row">
												<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="primaryContact_address_country">Country</label><input type="text" grid="12" label="Country" id="primaryContact_address_country" name="primaryContact.address.country" maxlength="80" value="" class="form-control input-sm"></div>
	                                         </div>

											</div>
											<div class="row">
												<div class="col-sm-12"><div class="form-group"><label class="control-label" for="countryCode">Country Code</label><select name="primaryContact.address.countryCode" id="countryCode" class="form-control input-sm null" onchange="">
                                                    <option value=""></option>
                                                    <option value="AD">AD (Andorra)</option>
                                                    <option value="AE">AE (United Arab Emirates)</option>
                                                    <option value="AF">AF (Afghanistan)</option>
                                                    <option value="AG">AG (Antigua and Barbuda)</option>
                                                    <option value="AI">AI (Anguilla)</option>
                                                    <option value="AL">AL (Albania)</option>
                                                    </select></div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
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
                          <div class="col-sm-4">
								<div class="panel panel-border panel-primary">
	
									<div class="panel-heading">
										<h3 class="panel-title">Limited Company Details</h3>
									</div>
	
									<div class="panel-body">
	
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails.ltdCompanyContact.department">Company Name <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="The name of the Worker's limited company"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><input type="text" grid="12" label="Company Name" name="workerDetails.ltdCompanyContact.department" maxlength="255" value="" tooltip="The name of the Worker's limited company" id="workerDetails.ltdCompanyContact.department" class="form-control input-sm"></div>
	                                     </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails.ltdCompanyNo">Company Number <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="The company's registration number"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><input type="text" grid="12" label="Company Number" name="workerDetails.ltdCompanyNo" maxlength="50" value="" tooltip="The company's registration number" id="workerDetails.ltdCompanyNo" class="form-control input-sm"></div>
	                                    </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails.ltdCompanyVatNo">Company Sales VAT Number <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="The company's tax regsitration number, e.g. a UK VAT code"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><input type="text" grid="12" label="Company Sales VAT Number" name="workerDetails.ltdCompanyVatNo" maxlength="50" value="" tooltip="The company's tax regsitration number, e.g. a UK VAT code" id="workerDetails.ltdCompanyVatNo" class="form-control input-sm"></div>
	                                         </div>
    
										</div>
										
										<div class="nonumbrella">
											<div class="row">
												<div class="col-sm-12"><div class="form-group"><label class="control-label" for="null">VAT Code <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="The VAT code. This determines the VAT rate"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><select name="vatCode" id="vatCode" class="form-control input-sm null" onchange="">
                                                    <option value="T0" selected="selected">None (T0)</option>
                                                    <option value="T1">Standard (T1)</option>
                                                    </select></div></div>
                                                                                                </div>
											<div class="row">
												<div class="col-sm-12"><br><div class="checkbox checkbox-primary m-t-0"><input type="hidden" name="_workerDetails.ltdCompanySelfBilling"><input type="checkbox" name="workerDetails.ltdCompanySelfBilling" checked="checked" id="ltdCompanySelfBilling" data-parsley-multiple="workerDetailsltdCompanySelfBilling"><label for="ltdCompanySelfBilling" class="control-label" style="font-weight: 700 !important;">Self Billing</label></div></div>
											</div>
										</div>
										
										
										
										<div class="row">
											<div class="col-sm-12"><div class="form-group"><label class="control-label" for="null">Send Copies of Timesheets <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Timesheets will not be sent if comms are disabled"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><select name="workerDetails.sendLtdCompanyTimesheets" id="workerDetails.sendLtdCompanyTimesheets" class="form-control input-sm null" onchange="">
                                                    <option value="0" selected="selected">None</option>
                                                    <option value="1">Ltd Company Contact</option>
                                                    <option value="2">
                                                                                                Umbrella
                                                                                            </option>
                                                    <option value="3">Both</option>
                                                    </select></div></div>
										</div>
									</div>
								</div>
							</div>
                             <div class="col-sm-4">
								<div class="panel panel-border panel-primary">
	
									<div class="panel-heading">
										<h3 class="panel-title">Company Contact Details</h3>
									</div>
	
									<div class="panel-body">
	
										<div class="row">
											<a href="#" class="btn btn-primary btn-xs" role="button" onclick="copyMainDetails();">Copy from Worker's main details
											</a>
										</div>
	
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails_ltdCompanyContact_firstname">Firstname</label><input type="text" grid="12" label="Firstname" maxlength="255" id="workerDetails_ltdCompanyContact_firstname" name="workerDetails.ltdCompanyContact.firstname" value="" class="form-control input-sm"></div>
	                                    </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails_ltdCompanyContact_lastname">Lastname</label><input type="text" grid="12" label="Lastname" maxlength="255" id="workerDetails_ltdCompanyContact_lastname" name="workerDetails.ltdCompanyContact.lastname" value="" class="form-control input-sm"></div>
	                                         </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails_ltdCompanyContact_email">Email</label><input type="text" grid="12" label="Email" maxlength="255" id="workerDetails_ltdCompanyContact_email" name="workerDetails.ltdCompanyContact.email" value="" class="form-control input-sm"></div>
	                                  </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails_ltdCompanyContact_address_street1">Address Line 1</label><input type="text" grid="12" label="Address Line 1" id="workerDetails_ltdCompanyContact_address_street1" maxlength="80" name="workerDetails.ltdCompanyContact.address.street1" value="" class="form-control input-sm"></div>
	                                      </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails_ltdCompanyContact_address_street2">Address Line 2</label><input type="text" grid="12" label="Address Line 2" maxlength="80" id="workerDetails_ltdCompanyContact_address_street2" name="workerDetails.ltdCompanyContact.address.street2" value="" class="form-control input-sm"></div>
	                                     </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails_ltdCompanyContact_address_town">Town/City</label><input type="text" grid="12" label="Town/City" maxlength="80" id="workerDetails_ltdCompanyContact_address_town" name="workerDetails.ltdCompanyContact.address.town" value="" class="form-control input-sm"></div>
	                                         </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails_ltdCompanyContact_address_county">County</label><input type="text" grid="12" label="County" maxlength="80" id="workerDetails_ltdCompanyContact_address_county" name="workerDetails.ltdCompanyContact.address.county" value="" class="form-control input-sm"></div>
	                                    </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails_ltdCompanyContact_address_postcode">Postcode</label><input type="text" grid="12" label="Postcode" maxlength="20" id="workerDetails_ltdCompanyContact_address_postcode" name="workerDetails.ltdCompanyContact.address.postcode" value="" class="form-control input-sm"></div>
	                                    </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"> <label class="control-label" for="workerDetails_ltdCompanyContact_address_country">Country</label><input type="text" grid="12" label="Country" maxlength="80" id="workerDetails_ltdCompanyContact_address_country" name="workerDetails.ltdCompanyContact.address.country" value="" class="form-control input-sm"></div>
	                                    </div>
    
										</div>
										<div class="row">
											<div class="col-sm-12"><div class="form-group"><label class="control-label" for="workerDetails_ltdCompanyContact_address_countryCode">Country Code</label><select name="workerDetails.ltdCompanyContact.address.countryCode" id="workerDetails_ltdCompanyContact_address_countryCode" class="form-control input-sm null" onchange="">
                                                <option value=""></option>
                                                <option value="AD">AD (Andorra)</option>
                                                <option value="AE">AE (United Arab Emirates)</option>
                                                <option value="AF">AF (Afghanistan)</option>
                                                <option value="AG">AG (Antigua and Barbuda)</option>
                                                <option value="AI">AI (Anguilla)</option>
                                                <option value="AL">AL (Albania)</option>

                                                </select></div></div>
										</div>
	
									</div>
								</div>
							</div>
                             <div class="col-sm-4">
								<div class="panel panel-border panel-primary">
	
									<div class="panel-heading">
										<h3 class="panel-title">Invoicing Details</h3>
									</div>
	
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12"><div class="form-group"><label class="control-label" for="null">Invoice Period</label><select name="workerDetails.ltdCompanyInvoicePeriod" id="workerDetails.ltdCompanyInvoicePeriod" class="form-control input-sm null" onchange="">
                                                <option value="0" selected="selected">Weekly</option>
                                                <option value="1">Two Weekly</option>
                                                <option value="2">Four Weekly</option>
                                                <option value="3">Calendar Monthly</option>
                                                <option value="4">4-4-5</option>
                                                <option value="5">Other</option>
                                                </select></div></div>
                                                                                            <div class="col-sm-12"><div class="form-group"><label class="control-label" for="null">Deliver Invoices By</label><select name="workerDetails.ltdCompanyHowSendInvoices" id="workerDetails.ltdCompanyHowSendInvoices" class="form-control input-sm null" onchange="">
                                                <option value="0">Post</option>
                                                <option value="1" selected="selected">Email</option>
                                                <option value="3">Delivery Not Required</option>
                                                </select></div></div>
                                            
                                            <div class="col-sm-12"><br><div class="checkbox checkbox-primary m-t-0"><input type="hidden" name="_workerDetails.sendInvoicesIndividually"><input type="checkbox" name="workerDetails.sendInvoicesIndividually" id="sendInvoicesIndividually" data-parsley-multiple="workerDetailssendInvoicesIndividually"><label for="sendInvoicesIndividually" class="control-label" style="font-weight: 700 !important;">Send Invoices Individually</label></div></div>

                                        </div>
										<div class="row">
											<div class="col-sm-12">
												<h6 class="text-primary ">Payment Terms</h6>
											</div>
											<div class="col-sm-4"><div class="form-group"> <label class="control-label" for="workerDetails.ltdCompanyTermsDays">Days <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="This is used in conjunction with the type to determine the due date. This is not applicable of the chosen type is 'As Agreed Terms and Conditions'"><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><input type="text" grid="4" label="Days" name="workerDetails.ltdCompanyTermsDays" tooltip="This is used in conjunction with the type to determine the due date. This is not applicable of the chosen type is 'As Agreed Terms and Conditions'" value="0" size="20" id="workerDetails.ltdCompanyTermsDays" class="form-control input-sm"></div>
	                                         </div>
    
											<div class="col-sm-8"><div class="form-group"><label class="control-label" for="null">Type <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="This determines how the due date of the invoice is calculated."><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><select name="workerDetails.ltdCompanyTermsType" id="workerDetails.ltdCompanyTermsType" class="form-control input-sm null" onchange="">
                                                    <option value="As Per Agreed Terms and Conditions" selected="selected">As Per Agreed Terms and Conditions</option>
                                                    <option value="Days From Invoice Date">Days From Invoice Date</option>
                                                    <option value="Working Days From Invoice Date">Working Days From Invoice Date</option>
                                                    <option value="Days from Month End">Days from Month End</option>
                                                    <option value="Days from End of Next Month">Days from End of Next Month</option>
                                                    <option value="Days from End of Month After Next">Days from End of Month After Next</option>
                                                    <option value="Days from Sheet End Date">Days from Sheet End Date</option>
                                                    </select></div></div>
                                                                                                <div class="col-sm-12"><div class="form-group"><label class="control-label" for="null">Template <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="This controls information that is placed on your invoice."><span class="badge badge-primary badge-tooltip"><small>?</small></span></a></label><select name="workerDetails.ltdCompanyTermsTemplate" id="workerDetails.ltdCompanyTermsTemplate" class="form-control input-sm null" onchange="">
                                                    <option value="462656">Default Pay Terms</option>
                                                    </select></div></div>
											<div class="col-sm-12"><div class="form-group"><label class="control-label">Additional Text To Include on Limited Company Invoice</label> <textarea name="workerDetails.ltdCompanyTermsExtraText" id="null" class="form-control" rows="10" style="line-height: 1; font-size: 12px; margin: 0; padding: 0;" onkeyup=""></textarea></div></div>
										</div>

									</div>
								</div>
	
								<div class="panel panel-border panel-primary">
	
									<div class="panel-heading">
										<h3 class="panel-title">Accounting Details</h3>
									</div>
	
									<div class="panel-body">
										<div class="col-sm-6"><div class="form-group"> <label class="control-label" for="workerDetails.purchaseNominalCode">Nominal Code</label><input type="text" grid="6" label="Nominal Code" name="workerDetails.purchaseNominalCode" value="" maxlength="8" id="workerDetails.purchaseNominalCode" class="form-control input-sm"></div>
	    </div>
    
										<div class="col-sm-6"><div class="form-group"> <label class="control-label" for="workerDetails.purchaseExpensesNominalCode">Expense Nominal</label><input type="text" grid="6" label="Expense Nominal" name="workerDetails.purchaseExpensesNominalCode" value="" maxlength="8" id="workerDetails.purchaseExpensesNominalCode" class="form-control input-sm"></div>
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
               
                                    <div class="row">
                <div class="col-lg-6">
                  <div class="card card-primary card-outline card-tabs">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-2 pl-4">
                          <div class="timesheet_create_tit">
                            <h2 class="pb-2">
                              Allocation of items to innoices (consolidation)
                            </h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >What goes on each invoice?</label
                                >
                                <select
                                  class="form-control select2"
                                  style="width: 100%"
                                >
                                  <option value="everything">
                                    Everything Goes On One Invoice
                                  </option>
                                  <option value="separate">
                                    Expenses Go On One Invoice And Timesheets Go
                                    On Another
                                  </option>
                                  <option value="placement">
                                    Each Placement Is Invoiced Separately
                                  </option>
                                  <option value="sheet">
                                    Each Timesheet Or Expense Item Is Invoiced
                                    Separately
                                  </option>
                                  <option value="worker">
                                    Each Worker Is Invoiced
                                  </option>
                                </select>
                              </div>
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
                            <h2 class="pb-2">Monthly Invoicing</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <p align="justify" style="line-height: 1.429">
                                Use the list below to determine which items go
                                on separate invoices. For example, if you tick
                                Placement this means that you get one invoice
                                for every different placement. The options are
                                added together so if you were to tick Manager
                                and Rate Name then items would be allocated to
                                invoices based on both the Manager and the Rate
                                Name. For example, if you have two timesheets
                                for different managers and each timesheet
                                contained Standard and Overtime rates, then you
                                would get 4 invoices.
                              </p>
                              <div class="custom-control custom-checkbox">
                                <input
                                  type="checkbox"
                                  class="custom-control-input"
                                  id="customCheck1"
                                />
                                <label
                                  class="custom-control-label"
                                  for="customCheck1"
                                  >Invoice on a Monthly Basis?</label
                                >
                              </div>
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
                              Negative value timesheets and expenses (advanced)
                            </h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <p align="justify" style="line-height: 1.429">
                                In some situations you may have a negative value
                                timesheet or expense item along with normal
                                timesheets and expenses. The default behaviour
                                is to include the negative item on the same
                                invoice as the normal items but you can choose
                                to always create a separate credit note for
                                negative items.
                              </p>
                              <div class="custom-control custom-checkbox">
                                <input
                                  type="checkbox"
                                  class="custom-control-input"
                                  id="customCheck1"
                                />
                                <label
                                  class="custom-control-label"
                                  for="customCheck1"
                                  >Always raise negative items as credit
                                  notes</label
                                >
                              </div>
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
                            <h2 class="pb-2">TAGS</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <table class="table table-borderless">
                                <thead>
                                  <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Remove</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <button type="button" class="btn btn-primary">
                      Add Tag
                    </button>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card card-primary card-outline card-tabs">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-2 pl-4">
                          <div class="timesheet_create_tit">
                            <h2 class="pb-2">Layout of items on invoice</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <p align="justify" style="line-height: 1.429">
                                In some situations you may have a negative value
                                timesheet or expense item along with normal
                                timesheets and expenses. The default behaviour
                                is to include the negative item on the same
                                invoice as the normal items but you can choose
                                to always create a separate credit note for
                                negative items.
                              </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >What goes on each invoice?</label
                                >
                                <select
                                  class="form-control mb-3"
                                  style="width: 100%"
                                >
                                  <optgroup label="common">
                                    <option value="">Client Manager</option>
                                    <option value="">Worker</option>
                                    <option value="">Client</option>
                                    <option value="">Placement</option>
                                    <option value="">
                                      Timesheet / Expense Item
                                    </option>
                                    <option value="">
                                      Timesheet / Expense Claim
                                    </option>
                                    <option value="">Purchase Order</option>
                                  </optgroup>
                                  <optgroup label="More">
                                    <option value="">Sales Department</option>
                                    <option value="">Sales Branch</option>
                                    <option value="">Sales Location</option>
                                    <option value="">Sales Sector</option>
                                    <option value="">Sales Division</option>
                                    <option value="">Sales Cost Centre</option>
                                    <option value="">Sales Project</option>
                                    <option value="">
                                      Purchase Department
                                    </option>
                                    <option value="">Purchase Branch</option>
                                    <option value="">Purchase Location</option>
                                    <option value="">Purchase Sector</option>
                                    <option value="">Purchase Division</option>
                                    <option value="">
                                      Purchase Cost Centre
                                    </option>
                                    <option value="">Purchase Project</option>
                                  </optgroup>
                                  <optgroup label="Even more">
                                    <option value="">
                                      Shift / Expense Item
                                    </option>
                                    <option value="">Sheet Type</option>
                                    <option value="">Calendar Monthly</option>
                                    <option value="">Rate Name</option>
                                    <option value="">Sheet Rate</option>
                                    <option value="">Pay Element</option>
                                    <option value="">Client Site</option>
                                  </optgroup>
                                </select>
                                <select
                                  name="grouping"
                                  class="form-control mb-3"
                                  style="width: 93%; margin-left: 30px"
                                >
                                  <option value="">Level 2 (Not Used)</option>
                                  <optgroup label="Common">
                                    <option value="client-manager">
                                      Client Manager
                                    </option>
                                    <option value="worker">Worker</option>
                                    <option value="client">Client</option>
                                    <option value="placement">Placement</option>
                                    <option value="sheet">
                                      Timesheet / Expense Item
                                    </option>
                                    <option value="sheet-claim">
                                      Timesheet / Expense Claim
                                    </option>
                                    <option value="purchase-order">
                                      Purchase Order
                                    </option>
                                  </optgroup>
                                  <optgroup label="More">
                                    <option value="sales-department">
                                      Sales Department
                                    </option>
                                    <option value="sales-branch">
                                      Sales Branch
                                    </option>
                                    <option value="sales-location">
                                      Sales Location
                                    </option>
                                    <option value="sales-sector">
                                      Sales Sector
                                    </option>
                                    <option value="sales-division">
                                      Sales Division
                                    </option>
                                    <option value="sales-cost-centre">
                                      Sales Cost Centre
                                    </option>
                                    <option value="sales-project">
                                      Sales Project
                                    </option>
                                    <option value="purchase-department">
                                      Purchase Department
                                    </option>
                                    <option value="purchase-branch">
                                      Purchase Branch
                                    </option>
                                    <option value="purchase-location">
                                      Purchase Location
                                    </option>
                                    <option value="purchase-sector">
                                      Purchase Sector
                                    </option>
                                    <option value="purchase-division">
                                      Purchase Division
                                    </option>
                                    <option value="purchase-cost-centre">
                                      Purchase Cost Centre
                                    </option>
                                    <option value="purchase-project">
                                      Purchase Project
                                    </option>
                                  </optgroup>
                                  <optgroup label="Even More">
                                    <option value="sheet-line">
                                      Shift / Expense Item
                                    </option>
                                    <option value="sheet-type">
                                      Sheet Type
                                    </option>
                                    <option value="calendar-monthly">
                                      Calendar Monthly
                                    </option>
                                    <option value="rate-name">Rate Name</option>
                                    <option
                                      value="sheet-rate"
                                      selected="selected"
                                    >
                                      Sheet Rate
                                    </option>
                                    <option value="pay-element">
                                      Pay Element
                                    </option>
                                    <option value="client-site">
                                      Client Site
                                    </option>
                                    <option value="charge-rate">
                                      Charge Rate
                                    </option>
                                    <option value="placement-tag">Tag</option>
                                    <option value="job-title">Job Title</option>
                                    <option value="job-description">
                                      Job Description
                                    </option>
                                    <option value="sheet-end-date">
                                      Sheet End Date
                                    </option>
                                    <option value="perm">
                                      Perm Placements
                                    </option>
                                    <option value="milestone">Milestone</option>
                                  </optgroup>
                                </select>
                                <select
                                  name="grouping"
                                  class="form-control mb-3"
                                  style="width: 86%; margin-left: 62px"
                                >
                                  <option value="">Level 3 (Not Used)</option>
                                  <optgroup label="Common">
                                    <option value="client-manager">
                                      Client Manager
                                    </option>
                                    <option value="worker">Worker</option>
                                    <option value="client">Client</option>
                                    <option value="placement">Placement</option>
                                    <option value="sheet">
                                      Timesheet / Expense Item
                                    </option>
                                    <option value="sheet-claim">
                                      Timesheet / Expense Claim
                                    </option>
                                    <option value="purchase-order">
                                      Purchase Order
                                    </option>
                                  </optgroup>
                                  <optgroup label="More">
                                    <option value="sales-department">
                                      Sales Department
                                    </option>
                                    <option value="sales-branch">
                                      Sales Branch
                                    </option>
                                    <option value="sales-location">
                                      Sales Location
                                    </option>
                                    <option value="sales-sector">
                                      Sales Sector
                                    </option>
                                    <option value="sales-division">
                                      Sales Division
                                    </option>
                                    <option value="sales-cost-centre">
                                      Sales Cost Centre
                                    </option>
                                    <option value="sales-project">
                                      Sales Project
                                    </option>
                                    <option value="purchase-department">
                                      Purchase Department
                                    </option>
                                    <option value="purchase-branch">
                                      Purchase Branch
                                    </option>
                                    <option value="purchase-location">
                                      Purchase Location
                                    </option>
                                    <option value="purchase-sector">
                                      Purchase Sector
                                    </option>
                                    <option value="purchase-division">
                                      Purchase Division
                                    </option>
                                    <option value="purchase-cost-centre">
                                      Purchase Cost Centre
                                    </option>
                                    <option value="purchase-project">
                                      Purchase Project
                                    </option>
                                  </optgroup>
                                  <optgroup label="Even More">
                                    <option value="sheet-line">
                                      Shift / Expense Item
                                    </option>
                                    <option value="sheet-type">
                                      Sheet Type
                                    </option>
                                    <option value="calendar-monthly">
                                      Calendar Monthly
                                    </option>
                                    <option value="rate-name">Rate Name</option>
                                    <option value="sheet-rate">
                                      Sheet Rate
                                    </option>
                                    <option value="pay-element">
                                      Pay Element
                                    </option>
                                    <option value="client-site">
                                      Client Site
                                    </option>
                                    <option value="charge-rate">
                                      Charge Rate
                                    </option>
                                    <option value="placement-tag">Tag</option>
                                    <option value="job-title">Job Title</option>
                                    <option value="job-description">
                                      Job Description
                                    </option>
                                    <option value="sheet-end-date">
                                      Sheet End Date
                                    </option>
                                    <option value="perm">
                                      Perm Placements
                                    </option>
                                    <option value="milestone">Milestone</option>
                                  </optgroup>
                                </select>
                                <select
                                  name="grouping"
                                  class="form-control mb-3"
                                  style="width: 79%; margin-left: 94px"
                                >
                                  <option value="">Level 4 (Not Used)</option>
                                  <optgroup label="Common">
                                    <option value="client-manager">
                                      Client Manager
                                    </option>
                                    <option value="worker">Worker</option>
                                    <option value="client">Client</option>
                                    <option value="placement">Placement</option>
                                    <option value="sheet">
                                      Timesheet / Expense Item
                                    </option>
                                    <option value="sheet-claim">
                                      Timesheet / Expense Claim
                                    </option>
                                    <option value="purchase-order">
                                      Purchase Order
                                    </option>
                                  </optgroup>
                                  <optgroup label="More">
                                    <option value="sales-department">
                                      Sales Department
                                    </option>
                                    <option value="sales-branch">
                                      Sales Branch
                                    </option>
                                    <option value="sales-location">
                                      Sales Location
                                    </option>
                                    <option value="sales-sector">
                                      Sales Sector
                                    </option>
                                    <option value="sales-division">
                                      Sales Division
                                    </option>
                                    <option value="sales-cost-centre">
                                      Sales Cost Centre
                                    </option>
                                    <option value="sales-project">
                                      Sales Project
                                    </option>
                                    <option value="purchase-department">
                                      Purchase Department
                                    </option>
                                    <option value="purchase-branch">
                                      Purchase Branch
                                    </option>
                                    <option value="purchase-location">
                                      Purchase Location
                                    </option>
                                    <option value="purchase-sector">
                                      Purchase Sector
                                    </option>
                                    <option value="purchase-division">
                                      Purchase Division
                                    </option>
                                    <option value="purchase-cost-centre">
                                      Purchase Cost Centre
                                    </option>
                                    <option value="purchase-project">
                                      Purchase Project
                                    </option>
                                  </optgroup>
                                  <optgroup label="Even More">
                                    <option value="sheet-line">
                                      Shift / Expense Item
                                    </option>
                                    <option value="sheet-type">
                                      Sheet Type
                                    </option>
                                    <option value="calendar-monthly">
                                      Calendar Monthly
                                    </option>
                                    <option value="rate-name">Rate Name</option>
                                    <option value="sheet-rate">
                                      Sheet Rate
                                    </option>
                                    <option value="pay-element">
                                      Pay Element
                                    </option>
                                    <option value="client-site">
                                      Client Site
                                    </option>
                                    <option value="charge-rate">
                                      Charge Rate
                                    </option>
                                    <option value="placement-tag">Tag</option>
                                    <option value="job-title">Job Title</option>
                                    <option value="job-description">
                                      Job Description
                                    </option>
                                    <option value="sheet-end-date">
                                      Sheet End Date
                                    </option>
                                    <option value="perm">
                                      Perm Placements
                                    </option>
                                    <option value="milestone">Milestone</option>
                                  </optgroup>
                                </select>
                                <select
                                  name="grouping"
                                  class="form-control mb-3"
                                  style="width: 72%; margin-left: 126px"
                                >
                                  <option value="">Level 5 (Not Used)</option>
                                  <optgroup label="Common">
                                    <option value="client-manager">
                                      Client Manager
                                    </option>
                                    <option value="worker">Worker</option>
                                    <option value="client">Client</option>
                                    <option value="placement">Placement</option>
                                    <option value="sheet">
                                      Timesheet / Expense Item
                                    </option>
                                    <option value="sheet-claim">
                                      Timesheet / Expense Claim
                                    </option>
                                    <option value="purchase-order">
                                      Purchase Order
                                    </option>
                                  </optgroup>
                                  <optgroup label="More">
                                    <option value="sales-department">
                                      Sales Department
                                    </option>
                                    <option value="sales-branch">
                                      Sales Branch
                                    </option>
                                    <option value="sales-location">
                                      Sales Location
                                    </option>
                                    <option value="sales-sector">
                                      Sales Sector
                                    </option>
                                    <option value="sales-division">
                                      Sales Division
                                    </option>
                                    <option value="sales-cost-centre">
                                      Sales Cost Centre
                                    </option>
                                    <option value="sales-project">
                                      Sales Project
                                    </option>
                                    <option value="purchase-department">
                                      Purchase Department
                                    </option>
                                    <option value="purchase-branch">
                                      Purchase Branch
                                    </option>
                                    <option value="purchase-location">
                                      Purchase Location
                                    </option>
                                    <option value="purchase-sector">
                                      Purchase Sector
                                    </option>
                                    <option value="purchase-division">
                                      Purchase Division
                                    </option>
                                    <option value="purchase-cost-centre">
                                      Purchase Cost Centre
                                    </option>
                                    <option value="purchase-project">
                                      Purchase Project
                                    </option>
                                  </optgroup>
                                  <optgroup label="Even More">
                                    <option value="sheet-line">
                                      Shift / Expense Item
                                    </option>
                                    <option value="sheet-type">
                                      Sheet Type
                                    </option>
                                    <option value="calendar-monthly">
                                      Calendar Monthly
                                    </option>
                                    <option value="rate-name">Rate Name</option>
                                    <option value="sheet-rate">
                                      Sheet Rate
                                    </option>
                                    <option value="pay-element">
                                      Pay Element
                                    </option>
                                    <option value="client-site">
                                      Client Site
                                    </option>
                                    <option value="charge-rate">
                                      Charge Rate
                                    </option>
                                    <option value="placement-tag">Tag</option>
                                    <option value="job-title">Job Title</option>
                                    <option value="job-description">
                                      Job Description
                                    </option>
                                    <option value="sheet-end-date">
                                      Sheet End Date
                                    </option>
                                    <option value="perm">
                                      Perm Placements
                                    </option>
                                    <option value="milestone">Milestone</option>
                                  </optgroup>
                                </select>
                                <select
                                  name="grouping"
                                  class="form-control mb-3"
                                  style="width: 65%; margin-left: 158px"
                                >
                                  <option value="">Level 6 (Not Used)</option>
                                  <optgroup label="Common">
                                    <option value="client-manager">
                                      Client Manager
                                    </option>
                                    <option value="worker">Worker</option>
                                    <option value="client">Client</option>
                                    <option value="placement">Placement</option>
                                    <option value="sheet">
                                      Timesheet / Expense Item
                                    </option>
                                    <option value="sheet-claim">
                                      Timesheet / Expense Claim
                                    </option>
                                    <option value="purchase-order">
                                      Purchase Order
                                    </option>
                                  </optgroup>
                                  <optgroup label="More">
                                    <option value="sales-department">
                                      Sales Department
                                    </option>
                                    <option value="sales-branch">
                                      Sales Branch
                                    </option>
                                    <option value="sales-location">
                                      Sales Location
                                    </option>
                                    <option value="sales-sector">
                                      Sales Sector
                                    </option>
                                    <option value="sales-division">
                                      Sales Division
                                    </option>
                                    <option value="sales-cost-centre">
                                      Sales Cost Centre
                                    </option>
                                    <option value="sales-project">
                                      Sales Project
                                    </option>
                                    <option value="purchase-department">
                                      Purchase Department
                                    </option>
                                    <option value="purchase-branch">
                                      Purchase Branch
                                    </option>
                                    <option value="purchase-location">
                                      Purchase Location
                                    </option>
                                    <option value="purchase-sector">
                                      Purchase Sector
                                    </option>
                                    <option value="purchase-division">
                                      Purchase Division
                                    </option>
                                    <option value="purchase-cost-centre">
                                      Purchase Cost Centre
                                    </option>
                                    <option value="purchase-project">
                                      Purchase Project
                                    </option>
                                  </optgroup>
                                  <optgroup label="Even More">
                                    <option value="sheet-line">
                                      Shift / Expense Item
                                    </option>
                                    <option value="sheet-type">
                                      Sheet Type
                                    </option>
                                    <option value="calendar-monthly">
                                      Calendar Monthly
                                    </option>
                                    <option value="rate-name">Rate Name</option>
                                    <option value="sheet-rate">
                                      Sheet Rate
                                    </option>
                                    <option value="pay-element">
                                      Pay Element
                                    </option>
                                    <option value="client-site">
                                      Client Site
                                    </option>
                                    <option value="charge-rate">
                                      Charge Rate
                                    </option>
                                    <option value="placement-tag">Tag</option>
                                    <option value="job-title">Job Title</option>
                                    <option value="job-description">
                                      Job Description
                                    </option>
                                    <option value="sheet-end-date">
                                      Sheet End Date
                                    </option>
                                    <option value="perm">
                                      Perm Placements
                                    </option>
                                    <option value="milestone">Milestone</option>
                                  </optgroup>
                                </select>
                              </div>
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
                            <h2 class="pb-2">Attachments</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <p align="justify" style="line-height: 1.429">
                                Choose what is attached to invoices. You can
                                attach an electronic representation of the
                                timesheet or expense. Then you also choose
                                whether you want to attach any uploaded copies
                                of timesheet images or expense receipts
                              </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >Attach Timesheets/Expenses On Invoices</label
                                >
                                <select
                                  class="form-control select2"
                                  style="width: 100%"
                                >
                                  <option value="">Yes</option>
                                  <option value="">No</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="custom-control custom-checkbox">
                                <input
                                  type="checkbox"
                                  class="custom-control-input"
                                  id="customCheck1"
                                />
                                <label
                                  class="custom-control-label"
                                  for="customCheck1"
                                  >Accept agency default for paper on
                                  invoices</label
                                >
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="custom-control custom-checkbox">
                                <input
                                  type="checkbox"
                                  class="custom-control-input"
                                  id="customCheck1"
                                />
                                <label
                                  class="custom-control-label"
                                  for="customCheck1"
                                  >Include paper timesheets on invoices</label
                                >
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="custom-control custom-checkbox">
                                <input
                                  type="checkbox"
                                  class="custom-control-input"
                                  id="customCheck1"
                                />
                                <label
                                  class="custom-control-label"
                                  for="customCheck1"
                                  >Include paper expenses on invoices</label
                                >
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="custom-control custom-checkbox">
                                <input
                                  type="checkbox"
                                  class="custom-control-input"
                                  id="customCheck1"
                                />
                                <label
                                  class="custom-control-label"
                                  for="customCheck1"
                                  >Include paper expense receipts on
                                  invoices</label
                                >
                              </div>
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
                            <h2 class="pb-2">Attachments</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <p align="justify" style="line-height: 1.429">
                                Choose what is attached to invoices. You can
                                attach an electronic representation of the
                                timesheet or expense. Then you also choose
                                whether you want to attach any uploaded copies
                                of timesheet images or expense receipts
                              </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >Adjust By ?</label
                                >
                                <select
                                  class="form-control select2"
                                  style="width: 100%"
                                >
                                  <option value="">Fixed Amount</option>
                                  <option value="">Percentage</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >Adjust Per</label
                                >
                                <select
                                  class="form-control select2"
                                  style="width: 100%"
                                >
                                  <option value="">Per Worker</option>
                                  <option value="">Per Timesheet</option>
                                  <option value="">Per Invoice</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >Addition / Deduction</label
                                >
                                <select
                                  class="form-control select2"
                                  style="width: 100%"
                                >
                                  <option value="">Addition</option>
                                  <option value="">Deduction</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >Amount</label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >Tax Code Override
                                </label>
                                <select
                                  class="form-control select2"
                                  style="width: 100%"
                                >
                                  <option value="">Choose</option>
                                  <option value="">None (T0)</option>
                                  <option value="">Standard (T1)</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >Minimum</label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label class="control-label" for="goeson"
                                  >Maximum</label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="" class="control-label"
                                  >Applicable From</label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    value=""
                                    class="form-control"
                                    placeholder="dd/MM/yyyy"
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="" class="control-label"
                                  >Applicable To</label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    value=""
                                    class="form-control"
                                    placeholder="dd/MM/yyyy"
                                  />
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
