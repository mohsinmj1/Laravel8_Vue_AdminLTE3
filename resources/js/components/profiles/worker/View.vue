<style>
.dropdown-menu > li > a {
  padding: 6px 20px;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: 400;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}
</style>
<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2>Workers Search</h2>
        </div>
      </div>
      <div
        class="panel-group panel-group-joined"
        id="filter-panel"
        style="border-top: 3px solid #009ada"
      >
        <div class="panel panel-border panel-primary">
          <a
            data-toggle="collapse"
            data-parent="#filter-panel"
            href="#collapseOne"
            class=""
            aria-expanded="true"
          >
            <div class="panel-heading">
              <h4 class="panel-title">
                <i class="fa fa-search"></i> Search Options
              </h4>
            </div>
          </a>
          <div
            id="collapseOne"
            class="panel-collapse collapse in"
            aria-expanded="true"
            style=""
          >
            <div class="panel-body">
              <div class="bg-white pb-4">
                <div class="card-body">
                  <ul
                    class="nav nav-tabs"
                    id="custom-content-below-tab"
                    role="tablist"
                  >
                    <li class="nav-item" style="width: 25%">
                      <a
                        class="nav-link active"
                        id="custom-content-below-home-tab"
                        data-toggle="pill"
                        href="#custom-content-below-home"
                        role="tab"
                        aria-controls="custom-content-below-home"
                        aria-selected="true"
                        >Main</a
                      >
                    </li>
                    <li class="nav-item" style="width: 25%">
                      <a
                        class="nav-link"
                        id="custom-content-below-profile-tab"
                        data-toggle="pill"
                        href="#custom-content-below-profile"
                        role="tab"
                        aria-controls="custom-content-below-profile"
                        aria-selected="false"
                        >Limited Details</a
                      >
                    </li>
                    <li class="nav-item" style="width: 25%">
                      <a
                        class="nav-link"
                        id="custom-content-below-messages-tab"
                        data-toggle="pill"
                        href="#custom-content-below-messages"
                        role="tab"
                        aria-controls="custom-content-below-messages"
                        aria-selected="false"
                        >Data Ranges</a
                      >
                    </li>
                    <li class="nav-item" style="width: 25%">
                      <a
                        class="nav-link"
                        id="custom-content-below-placement-tab"
                        data-toggle="pill"
                        href="#custom-content-below-placement"
                        role="tab"
                        aria-controls="custom-content-below-placement"
                        aria-selected="false"
                        >Placement</a
                      >
                    </li>
                  </ul>
                  <br />
                  <div class="tab-content" id="custom-content-below-tabContent">
                    <div
                      class="tab-pane fade active show"
                      id="custom-content-below-home"
                      role="tabpanel"
                      aria-labelledby="custom-content-below-home-tab"
                    >
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Firstname</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Placement Ref"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Lastname</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Job Title"
                              name="jobTitle"
                              size="20"
                              id="jobTitle"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Primary Reference</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Job Title"
                              name="jobTitle"
                              size="20"
                              id="jobTitle"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >NI Number</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Job Title"
                              name="jobTitle"
                              size="20"
                              id="jobTitle"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Worker Type</label
                            >
                            <select class="form-control form-control-sm">
                              <option value="">
                                Please Select Worker Type
                              </option>
                              <option value="">PAYE</option>
                              <option value="">LTD</option>
                              <option value="">External Contractor</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Payroll</label
                            >
                            <select class="form-control form-control-sm">
                              <option value="">Please Select Payroll</option>
                              <option value="">Weekly Paid</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Leaver Status</label>
                            <select class="form-control form-control-sm">
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Currency</label
                            >
                            <select class="form-control form-control-sm">
                              <option value="">Please Select Currency</option>
                              <option value="GBP">GBP</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Account Status</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Placement Ref"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Missing Bank Details</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Job Title"
                              name="jobTitle"
                              size="20"
                              id="jobTitle"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Created Date</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Job Title"
                              name="jobTitle"
                              size="20"
                              id="jobTitle"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Modified Date</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Job Title"
                              name="jobTitle"
                              size="20"
                              id="jobTitle"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Inpay Linked</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Validated</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >On Hold</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <br />
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                          Search
                        </button>
                        <a class="btn btn-default waves-light" role="button"
                          >Clear</a
                        >
                      </div>
                      <!---------1st tab end ----->
                    </div>
                    <div
                      class="tab-pane fade"
                      id="custom-content-below-profile"
                      role="tabpanel"
                      aria-labelledby="custom-content-below-profile-tab"
                    >
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Umbrella</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Company Name</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Company Email</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Nominal Code</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Job Title"
                              name="jobTitle"
                              size="20"
                              id="jobTitle"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Umbrella</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Company Name</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Company Email</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Nominal Code</label
                            >
                            <input
                              type="text"
                              format="2"
                              label="Job Title"
                              name="jobTitle"
                              size="20"
                              id="jobTitle"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Self Billing</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >VAT Code</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Invoice Period</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Invoice Delivery</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Second Tier Umbrellas</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Choose</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <br />
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                          Search
                        </button>
                        <a class="btn btn-default waves-light" role="button"
                          >Clear</a
                        >
                      </div>
                      <!-------- 2nd tab end ----->
                    </div>
                    <div
                      class="tab-pane fade"
                      id="custom-content-below-messages"
                      role="tabpanel"
                      aria-labelledby="custom-content-below-messages-tab"
                    >
                      <div class="col-lg-3">
                        <label for="client" class="d-block mb-1"
                          >Start Date*</label
                        >
                        <div class="input-group">
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            placeholder="dd/MM/yyyy"
                          />
                          <div class="input-group-append">
                            <button
                              class="btn btn-primary fa-icon"
                              type="button"
                            >
                              <i class="fa fa-calendar"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <label for="client" class="d-block mb-1"
                          >End Date*</label
                        >
                        <div class="input-group">
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            placeholder="dd/MM/yyyy"
                          />
                          <div class="input-group-append">
                            <button
                              class="btn btn-primary fa-icon"
                              type="button"
                            >
                              <i class="fa fa-calendar"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <br />
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                          Search
                        </button>
                        <a class="btn btn-default waves-light" role="button"
                          >Clear</a
                        >
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="custom-content-below-placement"
                      role="tabpanel"
                      aria-labelledby="custom-content-below-placement-tab"
                    >
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Sales Sector</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Purchase Sector</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Sales Branch</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Purchase Branch</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Sales Location</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Purchase Location</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Sales Division</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Purchase Division</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Sales Department</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Purchase Dept</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Sales Project</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Purchase Project</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Sales Cost Centre</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Purchase Cost Centre</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Project Code</label
                            >
                            <select
                              name="placementStatus"
                              id="placementStatus"
                              class="form-control input-sm null"
                              onchange=""
                            >
                              <option value="Active">Yes</option>
                              <option value="Inactive">No</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <br />
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                          Search
                        </button>
                        <a class="btn btn-default waves-light" role="button"
                          >Clear</a
                        >
                      </div>
                      <!---------1st tab end ----->
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
      <div class="col-12">
        <div class="card">
          <div class="card-header" style="background-color: white">
            <div class="row">
              <div class="col-lg-8">
                <button type="submit" class="btn btn-light">Select Page</button>
                <button type="submit" class="btn btn-light">
                  Deselect Page
                </button>
                <button type="submit" class="btn btn-light">
                  Select All Pages
                </button>
                <button type="submit" class="btn btn-light">Select None</button>
                <button type="submit" class="btn btn-light">
                  Choose Column
                </button>
              </div>
              <div class="col-lg-4 text-right">
                <button class="btn btn-primary">
                  <router-link
                    style="color: white; text-decoration: none"
                    to="/profiles/workers/create"
                    >Create</router-link
                  >
                </button>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Select</th>
                  <th>Actions</th>
                  <th>Ref</th>
                  <th>Accounts Ref</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Payroll</th>
                  <th>Umbrella</th>
                  <th>Worker Type</th>
                  <th>Street 1</th>
                  <th>Street 2</th>
                  <th>Town</th>
                  <th>County</th>
                  <th>Last Login</th>
                  <th>Account Status</th>
                  <th>Created</th>
                  <th>Modified</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" name="" id="" /></td>
                  <td>
                    <div class="btn btn-group btn-sm dropdown">
                      <a href="#" class="btn btn-primary btn-sm">Edit</a>
                      <button
                        type="button"
                        class="btn btn-primary btn-sm dropdown-toggle"
                        data-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="caret"></i>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">View Summary</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Create Expense</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="#">Change Roles</a></li>
                        <li><a href="#">Switch To</a></li>
                        <li><a href="#">Managers</a></li>
                        <li><a href="#">Consultants</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>Wkr245</td>
                  <td>1234</td>
                  <td>Jordan</td>
                  <td>Cooke</td>
                  <td>Weekly (Limited)</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>Active</td>
                  <td>10/10/2021 16:39</td>
                  <td>10/10/2021 16:39</td>
                  <td>No</td>
                  <td>No</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" id="" /></td>
                  <td>
                    <div class="btn btn-group btn-sm dropdown">
                      <a href="#" class="btn btn-primary btn-sm">Edit</a>
                      <button
                        type="button"
                        class="btn btn-primary btn-sm dropdown-toggle"
                        data-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="caret"></i>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">View Summary</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Create Expense</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="#">Change Roles</a></li>
                        <li><a href="#">Switch To</a></li>
                        <li><a href="#">Managers</a></li>
                        <li><a href="#">Consultants</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>Wkr245</td>
                  <td>1234</td>
                  <td>Jordan</td>
                  <td>Cooke</td>
                  <td>Weekly (Limited)</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>Active</td>
                  <td>10/10/2021 16:39</td>
                  <td>10/10/2021 16:39</td>
                  <td>No</td>
                  <td>No</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" id="" /></td>
                  <td>
                    <div class="btn btn-group btn-sm dropdown">
                      <a href="#" class="btn btn-primary btn-sm">Edit</a>
                      <button
                        type="button"
                        class="btn btn-primary btn-sm dropdown-toggle"
                        data-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="caret"></i>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">View Summary</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Create Expense</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="#">Change Roles</a></li>
                        <li><a href="#">Switch To</a></li>
                        <li><a href="#">Managers</a></li>
                        <li><a href="#">Consultants</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>Wkr245</td>
                  <td>1234</td>
                  <td>Jordan</td>
                  <td>Cooke</td>
                  <td>Weekly (Limited)</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>Active</td>
                  <td>10/10/2021 16:39</td>
                  <td>10/10/2021 16:39</td>
                  <td>No</td>
                  <td>No</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" id="" /></td>
                  <td>
                    <div class="btn btn-group btn-sm dropdown">
                      <a href="#" class="btn btn-primary btn-sm">Edit</a>
                      <button
                        type="button"
                        class="btn btn-primary btn-sm dropdown-toggle"
                        data-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="caret"></i>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">View Summary</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Create Expense</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="#">Change Roles</a></li>
                        <li><a href="#">Switch To</a></li>
                        <li><a href="#">Managers</a></li>
                        <li><a href="#">Consultants</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>Wkr245</td>
                  <td>1234</td>
                  <td>Jordan</td>
                  <td>Cooke</td>
                  <td>Weekly (Limited)</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>LTD</td>
                  <td>Active</td>
                  <td>10/10/2021 16:39</td>
                  <td>10/10/2021 16:39</td>
                  <td>No</td>
                  <td>No</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <pagination
              :data="products"
              @pagination-change-page="getResults"
            ></pagination>
            <button type="submit" class="btn btn-primary btn-sm">
              Send Welcome Emails
            </button>
            <button type="submit" class="btn btn-danger btn-sm">
              Reset and Send Passwords
            </button>
            <button type="submit" class="btn btn-primary btn-sm">
              Send Timesheet Reminders
            </button>
            <button type="submit" class="btn btn-primary btn-sm">
              Send Approval Reminders
            </button>
            <button type="submit" class="btn btn-primary btn-sm">CSV</button>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
</template>
