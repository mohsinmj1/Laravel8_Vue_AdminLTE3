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
  color: #009ada;
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
        <div class="col-lg-9">
          <h2>Create Workers</h2>
        </div>
        <div class="col-lg-3 text-right">
          <div class="btn-group dropdown">
            <a
              href="#"
              class="btn btn-primary btn-sm"
              data-toggle="popover"
              data-placement="top"
              data-content="Click the down arrow to view actions."
              data-timeout="3000"
              data-original-title=""
              title=""
              >Actions</a
            ><button
              type="button"
              class="btn btn-primary btn dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="caret"></i>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#">View Managers</a>
              </li>
              <li>
                <a href="#">View Consultants</a>
              </li>
              <li>
                <a href="#">View Clients</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bg-white pb-4">
        <div class="card-body">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item" style="width: 20%">
              <a
                class="nav-link active"
                id="custom-content-below-main-tab"
                data-toggle="pill"
                href="#custom-content-below-main"
                role="tab"
                aria-controls="custom-content-below-main"
                aria-selected="true"
                >Main</a
              >
            </li>
            <li class="nav-item" style="width: 20%; border-bottom: blue">
              <a
                class="nav-link"
                id="custom-content-below-timesheet-tab"
                data-toggle="pill"
                href="#custom-content-below-timesheet"
                role="tab"
                aria-controls="custom-content-below-timesheet"
                aria-selected="false"
                >Employment Details</a
              >
            </li>
            <li class="nav-item" style="width: 20%">
              <a
                class="nav-link"
                id="custom-content-below-expenses-tab"
                data-toggle="pill"
                href="#custom-content-below-expenses"
                role="tab"
                aria-controls="custom-content-below-expenses"
                aria-selected="false"
                >Limited Company</a
              >
            </li>
            <li class="nav-item" style="width: 20%">
              <a
                class="nav-link"
                id="custom-content-below-invoicing-tab"
                data-toggle="pill"
                href="#custom-content-below-invoicing"
                role="tab"
                aria-controls="custom-content-below-invoicing"
                aria-selected="false"
                >Bank Accounts</a
              >
            </li>
            <li class="nav-item" style="width: 20%">
              <a
                class="nav-link"
                id="custom-content-below-advance-tab"
                data-toggle="pill"
                href="#custom-content-below-advance"
                role="tab"
                aria-controls="custom-content-below-advance"
                aria-selected="false"
                >Advanced</a
              >
            </li>
          </ul>
          <br />
          <div class="tab-content" id="custom-content-below-tabContent">
            <div
              class="tab-pane fade active show"
              id="custom-content-below-main"
              role="tabpanel"
              aria-labelledby="custom-content-below-main-tab"
            >
              <div class="card card-primary card-outline">
                <div class="panel-heading">
                  <h3 class="panel-title">General</h3>
                </div>

                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label class="control-label">Worker Type *</label>
                        <select class="form-control form-control-sm">
                          <option value="1" selected="selected">LTD</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label class="control-label" for="paymentFrequency"
                          >Payroll *</label
                        ><select
                          name="workerDetails.paymentFrequency"
                          id="paymentFrequency"
                          class="form-control form-control-sm"
                          onchange=""
                          required="true"
                        >
                          <option value=""></option>
                          <option value="0" selected="selected">
                            Weekly (Limited)
                          </option>
                          <option value="1">Monthly (Limited)</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4 align-self-center">
                      <div class="d-flex align-items-center">
                        <input type="checkbox" />
                        <label class="control-label mb-0 mx-1"
                          >SMS Opt-in</label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label
                          class="control-label"
                          for="workerDetails.engagementType"
                          >Engagement Type
                          <a
                            href="javascript:void(0);"
                            data-toggle="tooltip"
                            data-placement="top"
                            title=""
                            data-original-title="The classification for the HMRC intermediary report"
                            ><span class="badge badge-primary badge-tooltip"
                              ><small>?</small></span
                            ></a
                          ></label
                        ><select
                          class="form-control form-control-sm"
                          onchange=""
                        >
                          <option value="D" selected="selected">
                            Limited Company
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label class="control-label" for="null"
                          >Default Currency
                          <a
                            href="javascript:void(0);"
                            data-toggle="tooltip"
                            data-placement="top"
                            title=""
                            data-original-title="This may be overridden on the placement if required"
                            ><span class="badge badge-primary badge-tooltip"
                              ><small>?</small></span
                            ></a
                          ></label
                        ><select
                          name="workerDetails.currencyInternal"
                          id="workerDetails.currencyInternal"
                          class="form-control form-control-sm input-sm null"
                          onchange=""
                        >
                          <option value=""></option>
                          <option value="GBP" selected="selected">GBP</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div
                    class="alert alert-warning notinpaylinked"
                    style="display: none"
                  >
                    <strong>Information!</strong> This Worker is not currently
                    linked to InPay
                  </div>
                </div>
              </div>
              <!-------------- bottom card end ------------->
              <div class="row">
                <div class="col-sm-8">
                  <div class="card card-primary card-outline">
                    <div class="panel-heading">
                      <h3 class="panel-title">Personal Details</h3>
                    </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-2">
                          <div class="form-group">
                            <label class="control-label" for="null">Title</label
                            ><select
                              name="title"
                              id="title"
                              class="form-control form-control-sm input-sm null"
                              onchange=""
                            >
                              <option value="">Choose</option>
                              <option value="">N/A</option>
                              <option value="Mr">Mr</option>
                              <option value="Mrs">Mrs</option>
                              <option value="Ms">Ms</option>
                              <option value="Miss">Miss</option>
                              <option value="Sir">Sir</option>
                              <option value="Dr">Dr</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label class="control-label" for="firstname"
                              >Firstname *</label
                            ><input
                              type="text"
                              grid="4"
                              label="Firstname"
                              id="firstname"
                              name="firstname"
                              value=""
                              maxlength="50"
                              class="
                                form-control form-control-sm
                                input-sm
                                compulsory
                              "
                              required="true"
                            />
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="middlename"
                              >Middlename</label
                            ><input
                              type="text"
                              grid="3"
                              label="Middlename"
                              name="middlename"
                              value=""
                              maxlength="50"
                              id="middlename"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="lastname"
                              >Lastname *</label
                            ><input
                              type="text"
                              grid="3"
                              label="Lastname"
                              id="lastname"
                              name="lastname"
                              value=""
                              maxlength="50"
                              class="
                                form-control form-control-sm
                                input-sm
                                compulsory
                              "
                              required="true"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <br />
                          <div class="checkbox checkbox-primary m-t-0">
                            <input
                              type="hidden"
                              name="_noCommunications"
                            /><input
                              type="checkbox"
                              name="noCommunications"
                              id="noCommunications"
                              data-parsley-multiple="noCommunications"
                            /><label
                              for="noCommunications"
                              class="control-label"
                              style="font-weight: 700 !important"
                              >Disable Email
                              <a
                                href="javascript:void(0);"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                                data-original-title="If ticked this user will not receive automated emails such as welcome emails, placement notifications and timesheet reminders. They will still be able to receive invoices and remittances."
                                ><span class="badge badge-primary badge-tooltip"
                                  ><small>?</small></span
                                ></a
                              ></label
                            >
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label class="control-label" for="email"
                              >Email *</label
                            ><input
                              type="text"
                              grid="4"
                              label="Email"
                              id="email"
                              name="email"
                              value=""
                              maxlength="255"
                              class="
                                form-control form-control-sm
                                input-sm
                                compulsory
                              "
                              required="true"
                            />
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="primaryContact.phone"
                              >Phone</label
                            ><input
                              type="text"
                              grid="3"
                              label="Phone"
                              name="primaryContact.phone"
                              value=""
                              maxlength="30"
                              id="primaryContact.phone"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="primaryContact.mobile"
                              >Mobile</label
                            ><input
                              type="text"
                              grid="3"
                              label="Mobile"
                              name="primaryContact.mobile"
                              value=""
                              maxlength="30"
                              id="primaryContact.mobile"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <div class="form-group">
                            <label class="control-label" for="null"
                              >Gender *</label
                            ><select
                              name="workerDetails.gender"
                              id="workerDetails.gender"
                              class="form-control form-control-sm"
                              onchange=""
                              required="true"
                            >
                              <option value="">Choose</option>
                              <option value="M">Male</option>
                              <option value="F">Female</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4" grid="4">&nbsp;</div>
                        <div class="col-sm-3">
                          <div
                            class="form-group"
                            style="margin-bottom: 0 !important"
                          >
                            <label
                              for="workerDetails.dateOfBirth"
                              class="control-label"
                              id="workerDetails.dateOfBirth_label"
                              >Date of Birth</label
                            >

                            <div class="input-group">
                              <input
                                style="min-width: 80px"
                                type="date"
                                value=""
                                class="bsDP form-control form-control-sm"
                                placeholder="dd/MM/yyyy"
                                id="workerDetails.dateOfBirth_X"
                                name="workerDetails.dateOfBirth_X"
                                data-date-start-date=""
                                data-date-end-date=""
                              />

                              <span
                                id="workerDetails.dateOfBirth_icon"
                                class="
                                  input-group-addon
                                  bg-primary
                                  b-0
                                  text-white
                                "
                                ><i class="ion-calendar"></i
                              ></span>
                            </div>
                            <!-- input-group -->
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div
                            class="form-group"
                            style="margin-bottom: 0 !important"
                          >
                            <label
                              for="workerDetails.dateOfJoining"
                              class="control-label"
                              id="workerDetails.dateOfJoining_label"
                              >Date of Joining</label
                            >
                            <div class="input-group">
                              <input
                                style="min-width: 80px"
                                type="date"
                                value=""
                                class="
                                  bsDP
                                  form-control form-control-sm
                                  input-sm
                                "
                                placeholder="dd/MM/yyyy"
                                id="workerDetails.dateOfJoining_X"
                                name="workerDetails.dateOfJoining_X"
                                data-date-start-date=""
                                data-date-end-date=""
                              />
                              <span
                                id="workerDetails.dateOfJoining_icon"
                                class="
                                  input-group-addon
                                  bg-primary
                                  b-0
                                  text-white
                                "
                                ><i class="ion-calendar"></i
                              ></span>
                            </div>
                            <!-- input-group -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-primary card-outline">
                    <div class="panel-heading">
                      <h3 class="panel-title">Reference Codes</h3>
                    </div>

                    <div class="panel-body">
                      <div class="row">
                        <p>A reference will be allocated for this Worker</p>
                      </div>

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails.externalRef"
                              >External
                              <a
                                href="javascript:void(0);"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                                data-original-title="Can be used if you have a different reference in your front office system"
                                ><span class="badge badge-primary badge-tooltip"
                                  ><small>?</small></span
                                ></a
                              ></label
                            ><input
                              type="text"
                              grid="3"
                              label="External"
                              name="workerDetails.externalRef"
                              value=""
                              maxlength="100"
                              tooltip="Can be used if you have a different reference in your front office system"
                              id="workerDetails.externalRef"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails.accountNum"
                              >Accounts
                              <a
                                href="javascript:void(0);"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                                data-original-title="Used as the reference on invoice or timesheet exports"
                                ><span class="badge badge-primary badge-tooltip"
                                  ><small>?</small></span
                                ></a
                              ></label
                            ><input
                              type="text"
                              grid="3"
                              label="Accounts"
                              name="workerDetails.accountNum"
                              maxlength="8"
                              maxlengthproperty="Form.Worker.AccountsRefLength"
                              value=""
                              tooltip="Used as the reference on invoice or timesheet exports"
                              id="workerDetails.accountNum"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card card-primary card-outline">
                    <div class="panel-heading">
                      <h3 class="panel-title">Address</h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="primaryContact_address_street1"
                              >Address Line 1</label
                            ><input
                              type="text"
                              grid="12"
                              label="Address Line 1"
                              id="primaryContact_address_street1"
                              name="primaryContact.address.street1"
                              value=""
                              maxlength="80"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="primaryContact_address_street2"
                              >Address Line 2</label
                            ><input
                              type="text"
                              grid="12"
                              label="Address Line 2"
                              id="primaryContact_address_street2"
                              name="primaryContact.address.street2"
                              value=""
                              maxlength="80"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="primaryContact_address_town"
                              >Town/City</label
                            ><input
                              type="text"
                              grid="12"
                              label="Town/City"
                              id="primaryContact_address_town"
                              name="primaryContact.address.town"
                              maxlength="80"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="primaryContact_address_county"
                              >County</label
                            ><input
                              type="text"
                              grid="12"
                              label="County"
                              id="primaryContact_address_county"
                              name="primaryContact.address.county"
                              maxlength="80"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="primaryContact_address_postcode"
                              >Postcode</label
                            ><input
                              type="text"
                              grid="12"
                              label="Postcode"
                              id="primaryContact_address_postcode"
                              name="primaryContact.address.postcode"
                              maxlength="20"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="primaryContact_address_country"
                              >Country</label
                            ><input
                              type="text"
                              grid="12"
                              label="Country"
                              id="primaryContact_address_country"
                              name="primaryContact.address.country"
                              maxlength="80"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label" for="countryCode"
                              >Country Code</label
                            ><select
                              name="primaryContact.address.countryCode"
                              id="countryCode"
                              class="form-control form-control-sm input-sm null"
                              onchange=""
                            >
                              <option value=""></option>
                              <option value="AD">AD (Andorra)</option>
                              <option value="AE">
                                AE (United Arab Emirates)
                              </option>
                              <option value="AF">AF (Afghanistan)</option>
                              <option value="AG">
                                AG (Antigua and Barbuda)
                              </option>
                              <option value="AI">AI (Anguilla)</option>
                              <option value="AL">AL (Albania)</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!------first tab end -->
            <div
              class="tab-pane fade"
              id="custom-content-below-timesheet"
              role="tabpanel"
              aria-labelledby="custom-content-below-timesheet-tab"
            >
              <div class="card card-primary card-outline card-tabs">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-2 pl-4">
                      <div class="timesheet_create_tit">
                        <h2 class="pb-2">TAX & N.I. DETAILS</h2>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <label for="client" class="d-block mb-1"
                            >National Insurance Number ?</label
                          >
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            placeholder="Search"
                          />
                        </div>
                        <div class="col-lg-4">
                          <label for="client" class="d-block mb-1"
                            >Unique Tax Reference
                            <a
                              href="javascript:void(0);"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="The approver can reply to authorisation emails to authorise timesheets without the need to sign in to InTime."
                              ><span class="badge badge-primary badge-tooltip"
                                ><small>?</small></span
                              ></a
                            ></label
                          >
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            placeholder="Search"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!------2nd tab end -->
            <div
              class="tab-pane fade"
              id="custom-content-below-expenses"
              role="tabpanel"
              aria-labelledby="custom-content-below-expenses-tab"
            >
              <div class="row">
                <div class="col-sm-4">
                  <div class="card card-primary card-outline">
                    <div class="panel-heading">
                      <h3 class="panel-title">Limited Company Details</h3>
                    </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails.ltdCompanyContact.department"
                              >Company Name
                              <a
                                href="javascript:void(0);"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                                data-original-title="The name of the Worker's limited company"
                                ><span class="badge badge-primary badge-tooltip"
                                  ><small>?</small></span
                                ></a
                              ></label
                            ><input
                              type="text"
                              grid="12"
                              label="Company Name"
                              name="workerDetails.ltdCompanyContact.department"
                              maxlength="255"
                              value=""
                              tooltip="The name of the Worker's limited company"
                              id="workerDetails.ltdCompanyContact.department"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails.ltdCompanyNo"
                              >Company Number
                              <a
                                href="javascript:void(0);"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                                data-original-title="The company's registration number"
                                ><span class="badge badge-primary badge-tooltip"
                                  ><small>?</small></span
                                ></a
                              ></label
                            ><input
                              type="text"
                              grid="12"
                              label="Company Number"
                              name="workerDetails.ltdCompanyNo"
                              maxlength="50"
                              value=""
                              tooltip="The company's registration number"
                              id="workerDetails.ltdCompanyNo"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails.ltdCompanyVatNo"
                              >Company Sales VAT Number
                              <a
                                href="javascript:void(0);"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                                data-original-title="The company's tax regsitration number, e.g. a UK VAT code"
                                ><span class="badge badge-primary badge-tooltip"
                                  ><small>?</small></span
                                ></a
                              ></label
                            ><input
                              type="text"
                              grid="12"
                              label="Company Sales VAT Number"
                              name="workerDetails.ltdCompanyVatNo"
                              maxlength="50"
                              value=""
                              tooltip="The company's tax regsitration number, e.g. a UK VAT code"
                              id="workerDetails.ltdCompanyVatNo"
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>

                      <div class="nonumbrella">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label class="control-label" for="null"
                                >VAT Code
                                <a
                                  href="javascript:void(0);"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title=""
                                  data-original-title="The VAT code. This determines the VAT rate"
                                  ><span
                                    class="badge badge-primary badge-tooltip"
                                    ><small>?</small></span
                                  ></a
                                ></label
                              ><select
                                name="vatCode"
                                id="vatCode"
                                class="
                                  form-control form-control-sm
                                  input-sm
                                  null
                                "
                                onchange=""
                              >
                                <option value="T0" selected="selected">
                                  None (T0)
                                </option>
                                <option value="T1">Standard (T1)</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <br />
                            <div class="checkbox checkbox-primary m-t-0">
                              <input
                                type="hidden"
                                name="_workerDetails.ltdCompanySelfBilling"
                              /><input
                                type="checkbox"
                                name="workerDetails.ltdCompanySelfBilling"
                                checked="checked"
                                id="ltdCompanySelfBilling"
                                data-parsley-multiple="workerDetailsltdCompanySelfBilling"
                              /><label
                                for="ltdCompanySelfBilling"
                                class="control-label"
                                style="font-weight: 700 !important"
                                >Self Billing</label
                              >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label" for="null"
                              >Send Copies of Timesheets
                              <a
                                href="javascript:void(0);"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                                data-original-title="Timesheets will not be sent if comms are disabled"
                                ><span class="badge badge-primary badge-tooltip"
                                  ><small>?</small></span
                                ></a
                              ></label
                            ><select
                              name="workerDetails.sendLtdCompanyTimesheets"
                              id="workerDetails.sendLtdCompanyTimesheets"
                              class="form-control form-control-sm input-sm null"
                              onchange=""
                            >
                              <option value="0" selected="selected">
                                None
                              </option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card card-primary card-outline">
                    <div class="panel-heading">
                      <h3 class="panel-title">Company Contact Details</h3>
                    </div>

                    <div class="panel-body">
                      <div class="col-lg-12">
                        <a
                          href="#"
                          class="btn btn-primary btn-xs"
                          role="button"
                          onclick="copyMainDetails();"
                          >Copy from Worker's main details
                        </a>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_firstname"
                              >Firstname</label
                            ><input
                              type="text"
                              grid="12"
                              label="Firstname"
                              maxlength="255"
                              id="workerDetails_ltdCompanyContact_firstname"
                              name="workerDetails.ltdCompanyContact.firstname"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_lastname"
                              >Lastname</label
                            ><input
                              type="text"
                              grid="12"
                              label="Lastname"
                              maxlength="255"
                              id="workerDetails_ltdCompanyContact_lastname"
                              name="workerDetails.ltdCompanyContact.lastname"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_email"
                              >Email</label
                            ><input
                              type="text"
                              grid="12"
                              label="Email"
                              maxlength="255"
                              id="workerDetails_ltdCompanyContact_email"
                              name="workerDetails.ltdCompanyContact.email"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_address_street1"
                              >Address Line 1</label
                            ><input
                              type="text"
                              grid="12"
                              label="Address Line 1"
                              id="workerDetails_ltdCompanyContact_address_street1"
                              maxlength="80"
                              name="workerDetails.ltdCompanyContact.address.street1"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_address_street2"
                              >Address Line 2</label
                            ><input
                              type="text"
                              grid="12"
                              label="Address Line 2"
                              maxlength="80"
                              id="workerDetails_ltdCompanyContact_address_street2"
                              name="workerDetails.ltdCompanyContact.address.street2"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_address_town"
                              >Town/City</label
                            ><input
                              type="text"
                              grid="12"
                              label="Town/City"
                              maxlength="80"
                              id="workerDetails_ltdCompanyContact_address_town"
                              name="workerDetails.ltdCompanyContact.address.town"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_address_county"
                              >County</label
                            ><input
                              type="text"
                              grid="12"
                              label="County"
                              maxlength="80"
                              id="workerDetails_ltdCompanyContact_address_county"
                              name="workerDetails.ltdCompanyContact.address.county"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_address_postcode"
                              >Postcode</label
                            ><input
                              type="text"
                              grid="12"
                              label="Postcode"
                              maxlength="20"
                              id="workerDetails_ltdCompanyContact_address_postcode"
                              name="workerDetails.ltdCompanyContact.address.postcode"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_address_country"
                              >Country</label
                            ><input
                              type="text"
                              grid="12"
                              label="Country"
                              maxlength="80"
                              id="workerDetails_ltdCompanyContact_address_country"
                              name="workerDetails.ltdCompanyContact.address.country"
                              value=""
                              class="form-control form-control-sm input-sm"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label
                              class="control-label"
                              for="workerDetails_ltdCompanyContact_address_countryCode"
                              >Country Code</label
                            ><select
                              name="workerDetails.ltdCompanyContact.address.countryCode"
                              id="workerDetails_ltdCompanyContact_address_countryCode"
                              class="form-control form-control-sm input-sm null"
                              onchange=""
                            >
                              <option value=""></option>
                              <option value="AD">AD (Andorra)</option>
                              <option value="AE">
                                AE (United Arab Emirates)
                              </option>
                              <option value="AF">AF (Afghanistan)</option>
                              <option value="AG">
                                AG (Antigua and Barbuda)
                              </option>
                              <option value="AI">AI (Anguilla)</option>
                              <option value="AL">AL (Albania)</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card card-primary card-outline">
                    <div class="panel-heading">
                      <h3 class="panel-title">Invoicing Details</h3>
                    </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label" for="null"
                              >Invoice Period</label
                            ><select
                              name="workerDetails.ltdCompanyInvoicePeriod"
                              id="workerDetails.ltdCompanyInvoicePeriod"
                              class="form-control form-control-sm input-sm null"
                              onchange=""
                            >
                              <option value="0" selected="selected">
                                Weekly
                              </option>
                              <option value="1">Two Weekly</option>
                              <option value="2">Four Weekly</option>
                              <option value="3">Calendar Monthly</option>
                              <option value="4">4-4-5</option>
                              <option value="5">Other</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label" for="null"
                              >Deliver Invoices By</label
                            ><select
                              name="workerDetails.ltdCompanyHowSendInvoices"
                              id="workerDetails.ltdCompanyHowSendInvoices"
                              class="form-control form-control-sm input-sm null"
                              onchange=""
                            >
                              <option value="0">Post</option>
                              <option value="1" selected="selected">
                                Email
                              </option>
                              <option value="3">Delivery Not Required</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <br />
                          <div class="checkbox checkbox-primary m-t-0">
                            <input
                              type="hidden"
                              name="_workerDetails.sendInvoicesIndividually"
                            /><input
                              type="checkbox"
                              name="workerDetails.sendInvoicesIndividually"
                              id="sendInvoicesIndividually"
                              data-parsley-multiple="workerDetailssendInvoicesIndividually"
                            /><label
                              for="sendInvoicesIndividually"
                              class="control-label"
                              style="font-weight: 700 !important"
                              >Send Invoices Individually</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!------third expense tab end -->
            <div
              class="tab-pane fade"
              id="custom-content-below-invoicing"
              role="tabpanel"
              aria-labelledby="custom-content-below-invoicing-tab"
            >
              <!-----  first card start ------->
              <div class="row">
                <div class="col-lg-4">
                  <div class="card card-primary card-outline card-tabs">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-2 pl-4">
                          <div class="timesheet_create_tit">
                            <h2 class="pb-2">Company Details</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <label for="client" class="d-block mb-1"
                                >Company Name *</label
                              >
                              <div class="input-group">
                                <input
                                  type="text"
                                  class="form-control form-control-sm"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <label for="client" class="d-block mb-1"
                                >Company Number
                              </label>
                              <div class="input-group">
                                <input
                                  type="text"
                                  class="form-control form-control-sm"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <label for="client" class="d-block mb-1"
                                >Company Sales VAT Number
                              </label>
                              <div class="input-group">
                                <input
                                  type="text"
                                  class="form-control form-control-sm"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label
                                  class="control-label"
                                  for="workerDetails.buildingSocRollNum"
                                  >Building Society Ref</label
                                >
                                <input
                                  type="text"
                                  label="Building Society Ref"
                                  id="workerDetails.buildingSocRollNum"
                                  name="workerDetails.buildingSocRollNum"
                                  maxlength="50"
                                  value=""
                                  class="form-control form-control-sm"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label
                                  class="control-label"
                                  for="workerDetails.buildingSocRollNum"
                                  >IBAN</label
                                >
                                <input
                                  type="text"
                                  label="Building Society Ref"
                                  id="workerDetails.buildingSocRollNum"
                                  name="workerDetails.buildingSocRollNum"
                                  maxlength="50"
                                  value=""
                                  class="form-control form-control-sm"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label
                                  class="control-label"
                                  for="workerDetails.buildingSocRollNum"
                                  >Swift</label
                                >
                                <input
                                  type="text"
                                  label="Building Society Ref"
                                  id="workerDetails.buildingSocRollNum"
                                  name="workerDetails.buildingSocRollNum"
                                  maxlength="50"
                                  value=""
                                  class="form-control form-control-sm"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label
                                  class="control-label"
                                  for="workerDetails.buildingSocRollNum"
                                  >Bank Financial Institution Number</label
                                >
                                <input
                                  type="text"
                                  label="Building Society Ref"
                                  id="workerDetails.buildingSocRollNum"
                                  name="workerDetails.buildingSocRollNum"
                                  maxlength="50"
                                  value=""
                                  class="form-control form-control-sm"
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
            <div
              class="tab-pane fade"
              id="custom-content-below-advance"
              role="tabpanel"
              aria-labelledby="custom-content-below-advance-tab"
            >
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
                                  class="form-control form-control-sm select2"
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
                </div>
                <div class="col-lg-6">
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
                                  class="form-control form-control-sm select2"
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
    $(".select2").select2();
    $('[data-toggle="tooltip"]').tooltip();
    console.log("Creat Timesheet mounted.");
  },
};
</script>
