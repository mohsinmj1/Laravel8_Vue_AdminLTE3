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
          <h2>Search Timesheets</h2>
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
                >Main Filters</a
              >
            </li>
            <li class="nav-item" style="width: 20%">
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
            <li class="nav-item" style="width: 20%">
              <a
                class="nav-link"
                id="custom-content-below-reference-tab"
                data-toggle="pill"
                href="#custom-content-below-reference"
                role="tab"
                aria-controls="custom-content-below-reference"
                aria-selected="false"
                >ID/Ref Ranges</a
              >
            </li>
          </ul>
          <div class="tab-content" id="custom-content-below-tabContent">
            <div
              class="tab-pane fade active show"
              id="custom-content-below-main"
              role="tabpanel"
              aria-labelledby="custom-content-below-main-tab"
            >
              <div class="card card-primary card-outline card-tabs">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-2 pl-4">
                      <div class="timesheet_create_tit">
                        <h2 class="pb-2">Filters</h2>
                      </div>
                      <div class="row">
                        <div class="col-lg-3">
                          <label for="client" class="d-block mb-1"
                            >Status</label
                          >
                          <select
                            class="form-control select2"
                            style="width: 100%"
                          >
                            <option value="ALL">All</option>
                            <option value="DRAFT">Draft</option>
                            <option value="REJECTED">Rejected</option>
                            <option value="SUBMITTED">Unauthorised</option>
                            <option value="APPROVED">Approved</option>
                            <option value="EXPORTED">Exported</option>
                            <option value="APPROVED_OR_EXPORTED">
                              Approved/Exported
                            </option>
                            <option value="MISSING">Missing</option>
                          </select>
                        </div>
                        <div class="col-lg-3">
                          <label for="client" class="d-block mb-1"
                            >Timesheet ID Range</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control form-control-sm"
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
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Client</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              placeholder="Search"
                            />
                            <div class="input-group-append">
                              <button
                                class="btn btn-primary fa-icon"
                                type="button"
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Manager</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              placeholder="Search"
                            />
                            <div class="input-group-append">
                              <button
                                class="btn btn-primary fa-icon"
                                type="button"
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Provider</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              placeholder="Search"
                            />
                            <div class="input-group-append">
                              <button
                                class="btn btn-primary fa-icon"
                                type="button"
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Worker</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              placeholder="Search"
                            />
                            <div class="input-group-append">
                              <button
                                class="btn btn-primary fa-icon"
                                type="button"
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Consultant</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              placeholder="Search"
                            />
                            <div class="input-group-append">
                              <button
                                class="btn btn-primary fa-icon"
                                type="button"
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <label for="client" class="d-block mb-1"
                            >Worker Type</label
                          >
                          <select
                            class="form-control select2"
                            style="width: 100%"
                          >
                            <option value="LTD">Ltd</option>
                          </select>
                        </div>
                        <div class="col-lg-3">
                          <label for="client" class="d-block mb-1"
                            >Payment Run Day</label
                          >
                          <select
                            class="form-control select2"
                            style="width: 100%"
                          >
                            <option value="ANY">Any</option>
                            <option value="MONDAY">Monday</option>
                            <option value="TUESDAY">Tuesday</option>
                            <option value="WEDNESDAY">Wednesday</option>
                            <option value="THURSDAY">Thursday</option>
                            <option value="FRIDAY">Friday</option>
                            <option value="SATURDAY">Saturday</option>
                            <option value="SUNDAY">Sunday</option>
                            <option value="MONDAY_OR_ANY">
                              Monday or Not Specified
                            </option>
                            <option value="TUESDAY_OR_ANY">
                              Tuesday or Not Specified
                            </option>
                            <option value="WEDNESDAY_OR_ANY">
                              Wednesday or Not Specified
                            </option>
                            <option value="THURSDAY_OR_ANY">
                              Thursday or Not Specified
                            </option>
                            <option value="FRIDAY_OR_ANY">
                              Friday or Not Specified
                            </option>
                            <option value="SATURDAY_OR_ANY">
                              Saturday or Not Specified
                            </option>
                            <option value="SUNDAY_OR_ANY">
                              Sunday or Not Specified
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3">
                          <label for="client" class="d-block mb-1"
                            >Timesheet Frequency</label
                          >
                          <select
                            class="form-control select2"
                            style="width: 100%"
                          >
                            <option value="ALL">All</option>
                            <option value="WEEKLY">weekly</option>
                            <option value="WEEKLY_TUE_MON">
                              weekly_tue-mon
                            </option>
                            <option value="WEEKLY_WED_TUE">
                              weekly_wed-tue
                            </option>
                            <option value="WEEKLY_THURS_WED">
                              weekly_thurs-wed
                            </option>
                            <option value="WEEKLY_FRI_THURS">
                              weekly_fri-thurs
                            </option>
                            <option value="WEEKLY_SAT_FRI">
                              weekly_sat-fri
                            </option>
                            <option value="WEEKLY_SUN_SAT">
                              weekly_sun-sat
                            </option>
                            <option value="TWO_WEEKLY">two-weekly</option>
                            <option value="FOUR_WEEKLY">four-weekly</option>
                            <option value="MONTHLY">monthly</option>
                            <option value="HALF_MONTHLY_16TH">
                              half-monthly-16th
                            </option>
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
                        <div class="col-lg-3">
                          <label for="client" class="d-block mb-1"
                            >Timesheet Entry Method</label
                          >
                          <select
                            class="form-control select2"
                            style="width: 100%"
                          >
                            <option value="ALL">All</option>
                            <option value="STANDARD">Standard</option>
                            <option value="BULK">Bulk Entry</option>
                          </select>
                        </div>
                        <div class="col-lg-6 row">
                          <div class="col-lg-5">
                            <label for="client" class="d-block mb-1"
                              >Payroll Payment Frequency</label
                            >
                            <div class="input-group">
                              <select
                                name="altManager_from[]"
                                id="altManager"
                                class="form-control input-sm"
                                size="8"
                                multiple="multiple"
                              ></select>
                            </div>
                          </div>
                          <div class="col-lg-2" style="padding-top: 35px">
                            <button
                              type="button"
                              id="altManager_rightAll"
                              class="btn btn-block btn-primary btn-sm"
                            >
                              <i class="fa fa-forward" aria-hidden="true"></i>
                            </button>
                            <button
                              type="button"
                              id="altManager_rightSelected"
                              class="btn btn-block btn-light btn-xs"
                            >
                              <i
                                class="fa fa-angle-right"
                                aria-hidden="true"
                              ></i>
                            </button>
                            <button
                              type="button"
                              id="altManager_leftSelected"
                              class="btn btn-block btn-light btn-xs"
                            >
                              <i
                                class="fa fa-angle-left"
                                aria-hidden="true"
                              ></i>
                            </button>
                            <button
                              type="button"
                              id="altManager_leftAll"
                              class="btn btn-block btn-primary btn-sm"
                            >
                              <i class="fa fa-backward" aria-hidden="true"></i>
                            </button>
                          </div>
                          <div class="col-lg-5">
                            <div class="row">
                              <label for="client" class="d-block mb-1"
                                >Payroll Payment Frequency</label
                              >
                              <div class="input-group">
                                <select
                                  name="altManager_from[]"
                                  id="altManager"
                                  class="form-control input-sm"
                                  size="8"
                                  multiple="multiple"
                                ></select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-5">
                                <button
                                  type="button"
                                  style="padding: 0px; width: 70px"
                                  id="altManager_move_up"
                                  class="btn btn-block btn-light"
                                >
                                  <i class="fa fa-arrow-up"></i>
                                </button>
                              </div>
                              <div class="col-sm-5">
                                <button
                                  type="button"
                                  style="padding: 0px; width: 70px"
                                  id="altManager_move_down"
                                  class="btn btn-block btn-light"
                                >
                                  <i class="fa fa-arrow-down"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin-top: 20px">
                        <div style="margin-left: 30px">
                          <button class="btn btn-success" type="submit">
                            Search
                          </button>
                        </div>
                        <div style="margin-left: 10px">
                          <button class="btn btn-primary" type="submit">
                            Reset All
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="custom-content-below-date-ranges"
              role="tabpanel"
              aria-labelledby="custom-content-below-date-ranges-tab"
            >
              <div class="card card-primary card-outline card-tabs">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-2 pl-4">
                      <div class="timesheet_create_tit">
                        <h2 class="pb-2">Sheet Dates</h2>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Period End / Receipt Date</label
                          >
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <span
                                class="input-group-text to"
                                id="validationTooltipUsernamePrepend"
                                >to</span
                              >
                            </div>
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <div class="dropdown">
                                <button
                                  class="
                                    btn btn-primary btn-size
                                    dropdown-toggle
                                  "
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
                                  <a class="dropdown-item" href="#"
                                    >Yesterday</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >Last 7 Days</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last 30 Days</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >This Week</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last Week</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Submitted Date</label
                          >
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <span
                                class="input-group-text to"
                                id="validationTooltipUsernamePrepend"
                                >to</span
                              >
                            </div>
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <div class="dropdown">
                                <button
                                  class="
                                    btn btn-primary btn-size
                                    dropdown-toggle
                                  "
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
                                  <a class="dropdown-item" href="#"
                                    >Yesterday</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >Last 7 Days</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last 30 Days</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >This Week</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last Week</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Approved Date</label
                          >
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <span
                                class="input-group-text to"
                                id="validationTooltipUsernamePrepend"
                                >to</span
                              >
                            </div>
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <div class="dropdown">
                                <button
                                  class="
                                    btn btn-primary btn-size
                                    dropdown-toggle
                                  "
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
                                  <a class="dropdown-item" href="#"
                                    >Yesterday</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >Last 7 Days</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last 30 Days</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >This Week</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last Week</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Exported Date</label
                          >
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <span
                                class="input-group-text to"
                                id="validationTooltipUsernamePrepend"
                                >to</span
                              >
                            </div>
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <div class="dropdown">
                                <button
                                  class="
                                    btn btn-primary btn-size
                                    dropdown-toggle
                                  "
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
                                  <a class="dropdown-item" href="#"
                                    >Yesterday</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >Last 7 Days</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last 30 Days</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >This Week</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last Week</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Created Date</label
                          >
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <span
                                class="input-group-text to"
                                id="validationTooltipUsernamePrepend"
                                >to</span
                              >
                            </div>
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <div class="dropdown">
                                <button
                                  class="
                                    btn btn-primary btn-size
                                    dropdown-toggle
                                  "
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
                                  <a class="dropdown-item" href="#"
                                    >Yesterday</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >Last 7 Days</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last 30 Days</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >This Week</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last Week</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Placement Created Date</label
                          >
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <span
                                class="input-group-text to"
                                id="validationTooltipUsernamePrepend"
                                >to</span
                              >
                            </div>
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <div class="dropdown">
                                <button
                                  class="
                                    btn btn-primary btn-size
                                    dropdown-toggle
                                  "
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
                                  <a class="dropdown-item" href="#"
                                    >Yesterday</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >Last 7 Days</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last 30 Days</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >This Week</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last Week</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Placement Modified Date</label
                          >
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <span
                                class="input-group-text to"
                                id="validationTooltipUsernamePrepend"
                                >to</span
                              >
                            </div>
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <div class="dropdown">
                                <button
                                  class="
                                    btn btn-primary btn-size
                                    dropdown-toggle
                                  "
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
                                  <a class="dropdown-item" href="#"
                                    >Yesterday</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >Last 7 Days</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last 30 Days</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >This Week</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last Week</a
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
              <div class="card card-primary card-outline card-tabs">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-2 pl-4">
                      <div class="timesheet_create_tit">
                        <h2 class="pb-2">Invoice Dates</h2>
                      </div>
                      <div class="row">
                        <div class="col-lg-2" style="padding-top: 32px">
                          <div class="custom-control custom-checkbox">
                            <input
                              type="checkbox"
                              class="custom-control-input"
                              id="customCheck1"
                            />
                            <label
                              class="custom-control-label"
                              for="customCheck1"
                              >Client Invoices</label
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
                            <label
                              class="custom-control-label"
                              for="customCheck1"
                              >Client Credit Notes</label
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
                            <label
                              class="custom-control-label"
                              for="customCheck1"
                              >Self Bill Invoices</label
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
                            <label
                              class="custom-control-label"
                              for="customCheck1"
                              >Self Bill Credit Notes</label
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
                            <label
                              class="custom-control-label"
                              for="customCheck1"
                              >Non Self Bill Invoices</label
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
                            <label
                              class="custom-control-label"
                              for="customCheck1"
                              >Non Self Bill Credit Notes</label
                            >
                          </div>
                        </div>
                      </div>
                      <div class="row"></div>
                      <br />
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Invoice Date Sent</label
                          >
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <span
                                class="input-group-text to"
                                id="validationTooltipUsernamePrepend"
                                >to</span
                              >
                            </div>
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <div class="dropdown">
                                <button
                                  class="
                                    btn btn-primary btn-size
                                    dropdown-toggle
                                  "
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
                                  <a class="dropdown-item" href="#"
                                    >Yesterday</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >Last 7 Days</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last 30 Days</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >This Week</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last Week</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Invoice Date Generated</label
                          >
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <span
                                class="input-group-text to"
                                id="validationTooltipUsernamePrepend"
                                >to</span
                              >
                            </div>
                            <input
                              type="date"
                              class="form-control form-control-sm"
                            />
                            <div class="input-group-append">
                              <div class="dropdown">
                                <button
                                  class="
                                    btn btn-primary btn-size
                                    dropdown-toggle
                                  "
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
                                  <a class="dropdown-item" href="#"
                                    >Yesterday</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >Last 7 Days</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last 30 Days</a
                                  >
                                  <hr />
                                  <a class="dropdown-item" href="#"
                                    >This Week</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Last Week</a
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
              <div class="card card-primary card-outline card-tabs">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-2 pl-4">
                      <div class="timesheet_create_tit">
                        <h2 class="pb-2">Invoice Status</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 20px">
                <div style="margin-left: 30px">
                  <button class="btn btn-success" type="submit">Search</button>
                </div>
                <div style="margin-left: 10px">
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
              <div class="card card-primary card-outline card-tabs">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-2 pl-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Placement Ref Range</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control form-control-sm"
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
                            />
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Project Code Range</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control form-control-sm"
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
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Invoice Number</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control form-control-sm"
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
                            />
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <label for="client" class="d-block mb-1"
                            >Client Invoice Town</label
                          >
                          <input
                            type="text"
                            class="form-control form-control-sm"
                          />
                        </div>
                        <div class="col-lg-3">
                          <label for="client" class="d-block mb-1"
                            >Client Invoice Country</label
                          >
                          <input
                            type="text"
                            class="form-control form-control-sm"
                          />
                        </div>
                        <div class="row" style="margin-top: 20px">
                          <div style="margin-left: 30px">
                            <button class="btn btn-success" type="submit">
                              Search
                            </button>
                          </div>
                          <div style="margin-left: 10px">
                            <button class="btn btn-primary" type="submit">
                              Reset All
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

      <div class="card">
        <div class="card-header" style="background-color: white">
          <div class="row">
            <div class="col-sm-10 mb-3">
              <div class="d-flex align-items-center">
                <label class="mb-0 mr-2 search-label">Search:</label>
                <form class="form-inline">
                  <div class="input-group input-group-sm">
                    <input
                      type="search"
                      placeholder="Search"
                      aria-label="Search"
                      class="form-control color-light"
                    />
                    <div class="input-group-append">
                      <button type="submit" class="btn color-light">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
                <button type="submit" class="btn btn-sm color-light mx-1">
                  Choose Columns
                </button>
              </div>
            </div>
            <div class="col-sm-2 mb-3">
              <div class="d-flex align-items-center justify-content-end">
                <label class="mb-0">Show</label>
                <select class="form-control w-auto ml-2 mr-2 pt-0 pb-0 h-100">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                  <option value="250">250</option>
                  <option value="500">500</option>
                </select>
                <label class="mb-0">entries</label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>Worker</th>
                <th>Worker Type</th>
                <th>Worker Ref</th>
                <th>Worker Ext Ref</th>
                <th>Ltd Company Name</th>
                <th>Worker Invoice Period</th>
                <th>Timesheet Start</th>
                <th>Payroll/Frequency</th>
                <th>Provider</th>
                <th>Consultant</th>
                <th>Description</th>
                <th>Client</th>
                <th>Manager</th>
                <th>Placement</th>
                <th>Project Code</th>
                <th>Placement Start</th>
                <th>Placement End</th>
                <th>Freehand Ref</th>
                <th>Payroll Ref</th>
                <th>Worker First Name</th>
                <th>Worker Last Name</th>
                <th>Agency Name</th>
                <th>Job Title</th>
                <th>Job Description</th>
                <th>Pending Approvers</th>
                <th>Period Ending</th>
                <th>Status</th>
                <th>Hours</th>
                <th>Chargeable Hours</th>
                <th>Payable Hours</th>
                <th>Units</th>
                <th>Chargeable Units</th>
                <th>Payable Units</th>
                <th>Pay</th>
                <th>Pay Currency</th>
                <th>Client Acc Ref</th>
                <th>Exported Date</th>
                <th>Invoiced Pay Net</th>
                <th>Invoiced Pay Gross</th>
                <th>Invoiced Pay VAT</th>
                <th>Total Cost(GBP)</th>
                <th>Worker Accounts Ref</th>
                <th>Worker Gender</th>
                <th>Invoiced Pay Net (GBP)</th>
                <th>Invoiced Charge Net (GBP)</th>
                <th>Charge</th>
                <th>Charge Currency</th>
                <th>Invoiced Charge Net</th>
                <th>Invoiced Charge Gross</th>
                <th>Invoiced Charge VAT</th>
                <th>Charge(GBP)</th>
                <th>Type</th>
                <th>Approved</th>
                <th>Approved By</th>
                <th>Submitted</th>
                <th>Submitted By</th>
                <th>Client Country</th>
                <th>Client Ref</th>
                <th>Client Site</th>
                <th>Internal Comment</th>
                <th>Contracted Hours</th>
                <th>Rate Reference</th>
                <th>Rate Name</th>
                <th>Charge Rate</th>
                <th>Comment</th>
                <th>Shift Date</th>
                <th>Hours Worked</th>
                <th>Paid Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a href="#">1</a>
                </td>
                <td><a href="#">Robert</a></td>
                <td>LTD</td>
                <td>Wkr65</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#">Robert</a></td>
                <td><a href="#">Robert</a></td>
                <td></td>
                <td><a href="#">Wight Shipyard Company Limited</a></td>
                <td><a href="#">Robert</a></td>
                <td><a href="#">Pmt215</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>No</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="row mb-3">
            <div class="col-md-5 align-self-center">
              <div>Showing 1 to 10 of 12 entries - 0 rows selected</div>
            </div>
            <div class="col-md-7 d-flex justify-content-end">
              <nav aria-label="...">
                <ul class="pagination mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#"
                      >2 <span class="sr-only">(current)</span></a
                    >
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <button type="submit" class="btn btn-danger btn-sm">
            Print Report
          </button>
          <button type="submit" class="btn btn-primary btn-sm">CSV</button>
          <button type="submit" class="btn btn-primary btn-sm">
            Default CSV
          </button>
          <button type="submit" class="btn btn-primary btn-sm">
            Reset Column
          </button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {};
</script>
