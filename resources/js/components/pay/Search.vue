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
.to {
  height: 29px;
  color: white;
  background-color: #227dc7;
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
          <h2>Search Invoices</h2>
        </div>
      </div>
      <div class="bg-white mb-4">
        <div class="card-body">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item" style="width: 25%">
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
            <li class="nav-item" style="width: 25%">
              <a
                class="nav-link"
                id="custom-content-below-date-ranges-tab"
                data-toggle="pill"
                href="#custom-content-below-date-ranges"
                role="tab"
                aria-controls="custom-content-below-date-ranges"
                aria-selected="false"
                >Date Ranges</a
              >
            </li>
            <li class="nav-item" style="width: 25%">
              <a
                class="nav-link"
                id="custom-content-below-reference-tab"
                data-toggle="pill"
                href="#custom-content-below-reference"
                role="tab"
                aria-controls="custom-content-below-reference"
                aria-selected="false"
                >Reference</a
              >
            </li>
            <!-- <li class="nav-item" style="width:25%">
                        <a class="nav-link" id="custom-content-below-financials-tab" data-toggle="pill" href="#custom-content-below-financials" role="tab" aria-controls="custom-content-below-financials" aria-selected="false">Financials</a>
                    </li> -->
            <li class="nav-item" style="width: 25%">
              <a
                class="nav-link"
                id="custom-content-below-advance-tab"
                data-toggle="pill"
                href="#custom-content-below-advance"
                role="tab"
                aria-controls="custom-content-below-advance"
                aria-selected="false"
                >Advance</a
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
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Client</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      placeholder="Search"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary fa-icon" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="manager" class="d-block mb-1">Manager</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      placeholder="Search"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary fa-icon" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <br />
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Worker</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      placeholder="Search"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary fa-icon" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="manager" class="d-block mb-1">Provider</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      placeholder="Search"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary fa-icon" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <br />
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Consultant</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      placeholder="Search"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary fa-icon" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2" style="padding-top: 32px">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      checked
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Client Invoices</label
                    >
                  </div>
                </div>
                <div class="col-lg-2" style="padding-top: 32px">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      checked
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Client Credit Notes</label
                    >
                  </div>
                </div>
                <div class="col-lg-2" style="padding-top: 32px">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      checked
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Self Bill Invoices</label
                    >
                  </div>
                </div>
                <div class="col-lg-2" style="padding-top: 32px">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      checked
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Self Bill Credit Notes</label
                    >
                  </div>
                </div>
                <div class="col-lg-2" style="padding-top: 32px">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      checked
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Non Self Bill Invoices</label
                    >
                  </div>
                </div>
                <div class="col-lg-2" style="padding-top: 32px">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      checked
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Non Self Bill Credit Notes</label
                    >
                  </div>
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-lg-2" style="padding-top: 32px">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      checked
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Advice Notes</label
                    >
                  </div>
                </div>
                <div class="col-lg-2" style="padding-top: 32px">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Unmatched Advice Notes</label
                    >
                  </div>
                </div>
                <div class="col-lg-2" style="padding-top: 32px">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Written-off Advice Notes</label
                    >
                  </div>
                </div>
              </div> -->
              <br />
              <div class="row">
                <div class="col-lg-3">
                  <label for="client" class="d-block mb-1">Sent Status</label>
                  <select class="form-control select2">
                    <option value="1">All</option>
                    <option value="2">Yes</option>
                    <option value="3">No</option>
                  </select>
                </div>
                <div class="col-lg-3">
                  <label for="client" class="d-block mb-1">Paid Status</label>
                  <select class="form-control select2">
                    <option value="1">All</option>
                    <option value="2">Yes</option>
                    <option value="3">No</option>
                  </select>
                </div>
                <div class="col-lg-3">
                  <label for="client" class="d-block mb-1"
                    >Exported Status</label
                  >
                  <select class="form-control select2">
                    <option value="1">All</option>
                    <option value="2">Yes</option>
                    <option value="3">No</option>
                  </select>
                </div>
                <div class="col-lg-3">
                  <label for="client" class="d-block mb-1">Perm Invoice</label>
                  <select class="form-control select2">
                    <option value="1">All</option>
                    <option value="2">Perm</option>
                    <option value="3">Npt Perm</option>
                  </select>
                </div>
              </div>
              <br />
              <div class="row">
                <div class="col-lg-3">
                  <label for="client" class="d-block mb-1"
                    >Credited Status</label
                  >
                  <select class="form-control select2">
                    <option value="1">All</option>
                    <option value="2">Yes</option>
                    <option value="3">No</option>
                  </select>
                </div>
                <div class="col-lg-3">
                  <label for="client" class="d-block mb-1"
                    >Supplier Invoice Status</label
                  >
                  <select class="form-control select2">
                    <option value="ALL">All</option>
                    <option value="NOT_UPLOADED">Not Uploaded</option>
                    <option value="UPLOADED">Uploaded</option>
                    <option value="UNMATCHED">Un-matched</option>
                    <option value="ACCEPTED">Accepted</option>
                  </select>
                </div>
                <div class="col-lg-3">
                  <label for="client" class="d-block mb-1"
                    >Payment Application Status</label
                  >
                  <select class="form-control select2">
                    <option value="ALL">All</option>
                    <option value="DRAFT">Draft</option>
                    <option value="SUBMITTED">Submitted</option>
                    <option value="APPROVED">Approved</option>
                    <option value="REJECTED">Rejected</option>
                    <option value="INVOICED">Invoiced</option>
                    <option value="ACCEPTED">Accepted</option>
                  </select>
                </div>
              </div>
              <br />
              <div class="row">
                <div style="padding-right: 10px">
                  <button class="btn btn-success" type="submit">Search</button>
                </div>
                <div style="padding-right: 10px">
                  <button class="btn btn-primary" type="submit">
                    Reset All
                  </button>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="custom-content-below-date-ranges"
              role="tabpanel"
              aria-labelledby="custom-content-below-date-ranges-tab"
            >
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Timesheet End / Expense Reciept Date</label
                  >
                  <div class="input-group">
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <div class="dropdown">
                        <button
                          class="btn btn-primary btn-size dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Others
                        </button>
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Yesterday</a>
                          <hr />
                          <a class="dropdown-item" href="#">Last 7 Days</a>
                          <a class="dropdown-item" href="#">Last 30 Days</a>
                          <hr />
                          <a class="dropdown-item" href="#">This Week</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Invoice Date</label>
                  <div class="input-group">
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <div class="dropdown">
                        <button
                          class="btn btn-primary btn-size dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Others
                        </button>
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Yesterday</a>
                          <hr />
                          <a class="dropdown-item" href="#">Last 7 Days</a>
                          <a class="dropdown-item" href="#">Last 30 Days</a>
                          <hr />
                          <a class="dropdown-item" href="#">This Week</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Invoice Generated Date</label
                  >
                  <div class="input-group">
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <div class="dropdown">
                        <button
                          class="btn btn-primary btn-size dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Others
                        </button>
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Yesterday</a>
                          <hr />
                          <a class="dropdown-item" href="#">Last 7 Days</a>
                          <a class="dropdown-item" href="#">Last 30 Days</a>
                          <hr />
                          <a class="dropdown-item" href="#">This Week</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Invoice Sent Date</label
                  >
                  <div class="input-group">
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <div class="dropdown">
                        <button
                          class="btn btn-primary btn-size dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Others
                        </button>
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Yesterday</a>
                          <hr />
                          <a class="dropdown-item" href="#">Last 7 Days</a>
                          <a class="dropdown-item" href="#">Last 30 Days</a>
                          <hr />
                          <a class="dropdown-item" href="#">This Week</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Invoice Paid Date</label
                  >
                  <div class="input-group">
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <div class="dropdown">
                        <button
                          class="btn btn-primary btn-size dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Others
                        </button>
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Yesterday</a>
                          <hr />
                          <a class="dropdown-item" href="#">Last 7 Days</a>
                          <a class="dropdown-item" href="#">Last 30 Days</a>
                          <hr />
                          <a class="dropdown-item" href="#">This Week</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Invoice Exported Date</label
                  >
                  <div class="input-group">
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <div class="dropdown">
                        <button
                          class="btn btn-primary btn-size dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Others
                        </button>
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Yesterday</a>
                          <hr />
                          <a class="dropdown-item" href="#">Last 7 Days</a>
                          <a class="dropdown-item" href="#">Last 30 Days</a>
                          <hr />
                          <a class="dropdown-item" href="#">This Week</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br />
              <div class="row">
                <div style="padding-right: 10px">
                  <button class="btn btn-success" type="submit">Search</button>
                </div>
                <div style="padding-right: 10px">
                  <button class="btn btn-primary" type="submit">
                    Reset All
                  </button>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="custom-content-below-reference"
              role="tabpanel"
              aria-labelledby="custom-content-below-reference-tab"
            >
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Timesheet ID</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Expense ID</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Project Code</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Payroll Reference</label
                  >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Project Reference</label
                  >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Placement Reference</label
                  >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1"
                      >Invoice Number List
                      <a
                        href="javascript:void(0);"
                        data-toggle="tooltip"
                        data-placement="top"
                        title=""
                        data-original-title="Enter a list of invoice numbers. You can enter them one per line or separate them with commas"
                        ><span class="badge badge-primary badge-tooltip"
                          ><small>?</small></span
                        ></a
                      ></label
                    >
                    <textarea
                      class="form-control"
                      id="exampleFormControlTextarea1"
                      rows="3"
                    ></textarea>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Invoice Number</label
                  >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      style="text-align: center"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div style="padding-right: 10px">
                  <button class="btn btn-success" type="submit">Search</button>
                </div>
                <div style="padding-right: 10px">
                  <button class="btn btn-primary" type="submit">
                    Reset All
                  </button>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="custom-content-below-financials"
              role="tabpanel"
              aria-labelledby="custom-content-below-financials-tab"
            >
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Sales Sector</label>
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Sector</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Sales Branch</label>
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Branch</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Location</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Location</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Division</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Division</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Department</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Department</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Sales Project</label>
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Project</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Cost Centre</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Cost Centre</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">Choose</option>
                  </select>
                </div>
              </div>
              <br />
              <div class="row">
                <div style="padding-right: 10px">
                  <button class="btn btn-success" type="submit">Search</button>
                </div>
                <div style="padding-right: 10px">
                  <button class="btn btn-primary" type="submit">
                    Reset All
                  </button>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="custom-content-below-advance"
              role="tabpanel"
              aria-labelledby="custom-content-below-financials-tab"
            >
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Timesheet Frequency</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="ALL">All</option>
                    <option value="WEEKLY">weekly</option>
                    <option value="WEEKLY_TUE_MON">weekly_tue-mon</option>
                    <option value="WEEKLY_WED_TUE">weekly_wed-tue</option>
                    <option value="WEEKLY_THURS_WED">weekly_thurs-wed</option>
                    <option value="WEEKLY_FRI_THURS">weekly_fri-thurs</option>
                    <option value="WEEKLY_SAT_FRI">weekly_sat-fri</option>
                    <option value="WEEKLY_SUN_SAT">weekly_sun-sat</option>
                    <option value="TWO_WEEKLY">two-weekly</option>
                    <option value="FOUR_WEEKLY">four-weekly</option>
                    <option value="MONTHLY">monthly</option>
                    <option value="HALF_MONTHLY_16TH">half-monthly-16th</option>
                    <option value="MONTHLY2ND">monthly2nd</option>
                    <option value="MONTHLY3RD">monthly3rd</option>
                    <option value="MONTHLY4TH">monthly4th</option>
                    <option value="MONTHLY5TH">monthly5th</option>
                    <option value="MONTHLY6TH">monthly6th</option>
                    <option value="MONTHLY7TH">monthly7th</option>
                    <option value="MONTHLY8TH">monthly8th</option>
                    <option value="MONTHLY9TH">monthly9th</option>
                    <option value="MONTHLY10TH">monthly10th</option>
                    <option value="MONTHLY11TH">monthly11th</option>
                    <option value="MONTHLY12TH">monthly12th</option>
                    <option value="MONTHLY13TH">monthly13th</option>
                    <option value="MONTHLY14TH">monthly14th</option>
                    <option value="MONTHLY15TH">monthly15th</option>
                    <option value="MONTHLY16TH">monthly16th</option>
                    <option value="MONTHLY17TH">monthly17th</option>
                    <option value="MONTHLY18TH">monthly18th</option>
                    <option value="MONTHLY19TH">monthly19th</option>
                    <option value="MONTHLY20TH">monthly20th</option>
                    <option value="MONTHLY21ST">monthly21st</option>
                    <option value="MONTHLY22TH">monthly22th</option>
                    <option value="MONTHLY23TH">monthly23th</option>
                    <option value="MONTHLY24TH">monthly24th</option>
                    <option value="MONTHLY25TH">monthly25th</option>
                    <option value="MONTHLY26TH">monthly26th</option>
                    <option value="MONTHLY27TH">monthly27th</option>
                    <option value="MONTHLY28TH">monthly28th</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Worker Type</label>
                  <select class="form-control select2" style="width: 100%">
                    <option value="ALL">All</option>
                    <option value="PAYE">PAYE</option>
                    <option value="PAID_AS_PAYE">All Paid PAYE</option>
                    <option value="NON_PAYE">Non-PAYE</option>
                    <option value="LTD">Ltd Company</option>
                    <option value="EXTERNAL_CONTRACTOR">
                      External Contractor
                    </option>
                    <option value="NON_PAID_AS_PAYE">All Not Paid PAYE</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1">Client Site</label>
                  <input type="text" class="form-control form-control-sm" />
                </div>
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Payroll/Payment Frequency</label
                  >
                  <select class="form-control select2" style="width: 100%">
                    <option value="1">All</option>
                    <option value="2">Weekly Paid</option>
                    <option value="3">Weekly (Limited)</option>
                    <option value="4">Monthly (Limited)</option>
                  </select>
                </div>
              </div>
              <br />
              <div class="row">
                <div style="padding-right: 10px">
                  <button class="btn btn-success" type="submit">Search</button>
                </div>
                <div style="padding-right: 10px">
                  <button class="btn btn-primary" type="submit">
                    Reset All
                  </button>
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
                <div class="col-lg-9">
                  <button type="submit" class="btn btn-light">
                    Select Page
                  </button>
                  <button type="submit" class="btn btn-light">
                    Deselect Page
                  </button>
                  <button type="submit" class="btn btn-light">
                    Select All Pages
                  </button>
                  <button type="submit" class="btn btn-light">
                    Select None
                  </button>
                  <button type="submit" class="btn btn-light">
                    Choose Columns
                  </button>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                  <label class="mb-0">Show</label>
                  <select class="form-control w-auto pt-0 pb-0 h-auto mx-2">
                    <option value="">10</option>
                    <option value="">25</option>
                    <option value="">50</option>
                    <option value="">100</option>
                    <option value="">250</option>
                    <option value="">500</option>
                  </select>
                  <label class="mb-0">entries</label>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-responsive table-hover">
                <thead>
                  <tr>
                    <th>Select</th>
                    <th>Type</th>
                    <th>Invoice Number</th>
                    <th>Account Ref</th>
                    <th>Ref</th>
                    <th>Invoice Date</th>
                    <th>Client</th>
                    <th>Worker/Provider</th>
                    <th>Consolidated By</th>
                    <th>Consolidated Entity</th>
                    <th>Net</th>
                    <th>Tax Code</th>
                    <th>Tax</th>
                    <th>Gross</th>
                    <th>Currency</th>
                    <th>Net (GBP)</th>
                    <th>Exchange Rate</th>
                    <th>Primary Recipient</th>
                    <th>Additional Recipients</th>
                    <th>Sent</th>
                    <th>Exported</th>
                    <th>Due Date</th>
                    <th>Paid</th>
                    <th>Created Date</th>
                    <th>Created By</th>
                    <th>Internal Comment</th>
                    <th>Payroll/Frequency</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="product in products.data" :key="product.id">
                    <td><input type="checkbox" name="" id="" /></td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.category.name }}</td>
                    <td>{{ product.description | truncate(20, "...") }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.category.name }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.description | truncate(20, "...") }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.category.name }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.name }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row mb-4">
                <div class="col-sm-5 align-self-center">
                  <div>Showing 1 to 10 of 11482 entries - 0 rows selected</div>
                </div>
                <div class="col-sm-7 d-flex">
                  <div class="pg-ul ml-auto">
                    <pagination
                      :data="products"
                      @pagination-change-page="getResults"
                    ></pagination>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-primary btn-sm">
                    Send
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Export
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Paid
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Download As Zip
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Print Selected
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Report
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    CSV
                  </button>
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-lg-12">
                  <p>Manual Override:</p>
                </div>
                <div class="col-lg-12 mb-3">
                  <button type="submit" class="btn btn-danger btn-sm">
                    Mark as Sent
                  </button>
                  <button type="submit" class="btn btn-danger btn-sm">
                    Not Sent
                  </button>
                  <button type="submit" class="btn btn-danger btn-sm">
                    Mark Exported
                  </button>
                  <button type="submit" class="btn btn-danger btn-sm">
                    Not Exported
                  </button>
                </div>
                <div class="col-lg-12">
                  <p>
                    <b
                      >Please note: Some functions are not applicable to
                      Supplier Invoices.</b
                    >
                  </p>
                </div>
              </div> -->
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</template>


<script>
import VueTagsInput from "@johmun/vue-tags-input";

export default {
  components: {
    VueTagsInput,
  },
  data() {
    return {
      editmode: false,
      products: {},
      form: new Form({
        id: "",
        category: "",
        name: "",
        description: "",
        tags: [],
        photo: "",
        category_id: "",
        price: "",
        photoUrl: "",
      }),
      categories: [],

      tag: "",
      autocompleteItems: [],
    };
  },
  methods: {
    getResults(page = 1) {
      this.$Progress.start();

      axios
        .get("/api/draft?page=" + page)
        .then(({ data }) => (this.products = data.data));

      this.$Progress.finish();
    },
    loadProducts() {
      // if(this.$gate.isAdmin()){
      axios.get("/api/draft").then(({ data }) => (this.products = data.data));
      // }
    },
    loadCategories() {
      axios
        .get("/api/category/list")
        .then(({ data }) => (this.categories = data.data));
    },
    loadTags() {
      axios
        .get("/api/tag/list")
        .then((response) => {
          this.autocompleteItems = response.data.data.map((a) => {
            return { text: a.name, id: a.id };
          });
        })
        .catch(() => console.warn("Oh. Something went wrong"));
    },
    editModal(product) {
      this.editmode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(product);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#addNew").modal("show");
    },
    createProduct() {
      this.$Progress.start();

      this.form
        .post("api/product")
        .then((data) => {
          if (data.data.success) {
            $("#addNew").modal("hide");

            Toast.fire({
              icon: "success",
              title: data.data.message,
            });
            this.$Progress.finish();
            this.loadProducts();
          } else {
            Toast.fire({
              icon: "error",
              title: "Some error occured! Please try again",
            });

            this.$Progress.failed();
          }
        })
        .catch(() => {
          Toast.fire({
            icon: "error",
            title: "Some error occured! Please try again",
          });
        });
    },
    updateProduct() {
      this.$Progress.start();
      this.form
        .put("api/product/" + this.form.id)
        .then((response) => {
          // success
          $("#addNew").modal("hide");
          Toast.fire({
            icon: "success",
            title: response.data.message,
          });
          this.$Progress.finish();
          //  Fire.$emit('AfterCreate');

          this.loadProducts();
        })
        .catch(() => {
          this.$Progress.fail();
        });
    },
    deleteProduct(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        // Send request to the server
        if (result.value) {
          this.form
            .delete("api/product/" + id)
            .then(() => {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              // Fire.$emit('AfterCreate');
              this.loadProducts();
            })
            .catch((data) => {
              Swal.fire("Failed!", data.message, "warning");
            });
        }
      });
    },
  },
  mounted() {
    //Initialize Select2 Elements
    $(".select2").select2();
    $('[data-toggle="tooltip"]').tooltip();
    console.log("Creat Timesheet mounted.");
  },
  created() {
    this.$Progress.start();

    this.loadProducts();
    this.loadCategories();
    this.loadTags();

    this.$Progress.finish();
  },
  filters: {
    truncate: function (text, length, suffix) {
      return text.substring(0, length) + suffix;
    },
  },
  computed: {
    filteredItems() {
      return this.autocompleteItems.filter((i) => {
        return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
      });
    },
  },
};
</script>
<style>
.pg-ul ul {
  margin-bottom: 0px;
}
</style>