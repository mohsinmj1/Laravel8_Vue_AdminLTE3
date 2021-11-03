<style>
.control-label {
  font-size: 12px;
}
</style>


<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2>Margin Report</h2>
        </div>
      </div>
      <div class="bg-white mb-4">
        <div class="card-body">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item" style="width: 12.5%">
              <a
                class="nav-link active"
                id="custom-content-below-filters-tab"
                data-toggle="pill"
                href="#custom-content-below-filters"
                role="tab"
                aria-controls="custom-content-below-filters"
                aria-selected="true"
                >Main Filters</a
              >
            </li>
            <li class="nav-item" style="width: 12.5%; border-bottom: blue">
              <a
                class="nav-link"
                id="custom-content-below-ranges-tab"
                data-toggle="pill"
                href="#custom-content-below-ranges"
                role="tab"
                aria-controls="custom-content-below-ranges"
                aria-selected="false"
                >Data Ranges</a
              >
            </li>
            <li class="nav-item" style="width: 12.5%">
              <a
                class="nav-link"
                id="custom-content-below-ref-tab"
                data-toggle="pill"
                href="#custom-content-below-ref"
                role="tab"
                aria-controls="custom-content-below-ref"
                aria-selected="false"
                >ID/Ref Ranges</a
              >
            </li>
            <li class="nav-item" style="width: 12.5%">
              <a
                class="nav-link"
                id="custom-content-below-financial-tab"
                data-toggle="pill"
                href="#custom-content-below-financial"
                role="tab"
                aria-controls="custom-content-below-financial"
                aria-selected="false"
                >Financial</a
              >
            </li>
            <li class="nav-item" style="width: 12.5%">
              <a
                class="nav-link"
                id="custom-content-below-pay-tab"
                data-toggle="pill"
                href="#custom-content-below-pay"
                role="tab"
                aria-controls="custom-content-below-pay"
                aria-selected="false"
                >Pay Elements</a
              >
            </li>
            <li class="nav-item" style="width: 12.5%">
              <a
                class="nav-link"
                id="custom-content-below-grouping-tab"
                data-toggle="pill"
                href="#custom-content-below-grouping"
                role="tab"
                aria-controls="custom-content-below-grouping"
                aria-selected="false"
                >Grouping</a
              >
            </li>
            <li class="nav-item" style="width: 12.5%">
              <a
                class="nav-link"
                id="custom-content-below-column-tab"
                data-toggle="pill"
                href="#custom-content-below-column"
                role="tab"
                aria-controls="custom-content-below-column"
                aria-selected="false"
                >Column</a
              >
            </li>
            <li class="nav-item" style="width: 12.5%">
              <a
                class="nav-link"
                id="custom-content-below-saved-tab"
                data-toggle="pill"
                href="#custom-content-below-saved"
                role="tab"
                aria-controls="custom-content-below-saved"
                aria-selected="false"
                >Saved Reports</a
              >
            </li>
          </ul>
          <br />
          <div class="tab-content" id="custom-content-below-tabContent">
            <div
              class="tab-pane fade active show"
              id="custom-content-below-filters"
              role="tabpanel"
              aria-labelledby="custom-content-below-filters-tab"
            >
              <div
                class="panel panel-border panel-primary"
                style="border-top: 3px solid #009ada"
              >
                <div class="panel-heading">
                  <h3 class="panel-title">OPTIONS</h3>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="control-label" for="outputType"
                        >Output By</label
                      >
                      <select
                        name="outputType"
                        id="outputType"
                        class="form-control input-sm"
                      >
                        <option value="BY_SHEET">Timesheet/Expense Item</option>
                        <option value="BY_SHEET_CLAIM">
                          Timesheet/Expense Claim
                        </option>
                        <option value="BY_SHIFT">Shift</option>
                        <option value="BY_RATE">Rate</option>
                      </select>
                    </div>
                  </div>
                  <div
                    class="custom-control custom-checkbox col-lg-2"
                    style="padding-top: 30px"
                  >
                    <div class="input-group">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customCheck1"
                      />
                      <label class="custom-control-label" for="customCheck1"
                        >Include Reverted</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label" for=""
                        >Show Invoiced Pay From</label
                      >
                      <select
                        name="valuesFromAdvice"
                        id="valuesFromAdvice"
                        class="form-control input-sm null"
                        onchange=""
                      >
                        <option value="false">Supplier Invoices</option>
                        <option value="true">Advice Notes</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <br />
              <div
                class="panel panel-border panel-primary"
                style="border-top: 3px solid #009ada"
              >
                <div class="panel-heading">
                  <h3 class="panel-title">Filters</h3>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="control-label" for="outputType"
                        >Status</label
                      >
                      <select
                        name="outputType"
                        id="outputType"
                        class="form-control input-sm"
                      >
                        <option value="ALL">All</option>
                        <option value="WEEKLY">weekly</option>
                        <option value="WEEKLY_TUE_MON">weekly_tue-mon</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label
                        style="font-size: 12px"
                        class="control-label"
                        for=""
                        >Timesheet Entry Method</label
                      >
                      <select
                        name=""
                        id=""
                        class="form-control input-sm"
                        onchange=""
                      >
                        <option value="ALL">All</option>
                        <option value="STANDARD">Standard</option>
                        <option value="PAPER">Paper Entry</option>
                        <option value="BULK">Bulk Entry</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label style="font-size: 12px" class="control-label"
                        >Timesheet ID Range</label
                      >
                      <div class="input-daterange input-group">
                        <input
                          id="timesheetIdRanges_from"
                          name="fromTimesheetId"
                          value=""
                          type="text"
                          class="form-control input-sm"
                          placeholder=""
                        />
                        <span
                          class="input-group-addon bg-primary b-0 text-white"
                          >to</span
                        >
                        <input
                          id="timesheetIdRanges_to"
                          name="toTimesheetId"
                          value=""
                          type="text"
                          class="form-control input-sm"
                          placeholder=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label style="font-size: 12px" class="control-label"
                        >Expense ID Range</label
                      >
                      <div class="input-daterange input-group">
                        <input
                          id="expenseItemId_from"
                          name="fromExpenseItemId"
                          value=""
                          type="text"
                          class="form-control input-sm"
                          placeholder=""
                        />
                        <span
                          class="input-group-addon bg-primary b-0 text-white"
                          >to</span
                        >
                        <input
                          id="expenseItemId_to"
                          name="toExpenseItemId"
                          value=""
                          type="text"
                          class="form-control input-sm"
                          placeholder=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label style="font-size: 12px" class="control-label"
                        >Expense Claim ID Range</label
                      >
                      <div class="input-daterange input-group">
                        <input
                          id="expenseItemGroupId_from"
                          name="fromExpenseItemGroupId"
                          value=""
                          type="text"
                          class="form-control input-sm"
                          placeholder=""
                        />
                        <span
                          class="input-group-addon bg-primary b-0 text-white"
                          >to</span
                        >
                        <input
                          id="expenseItemGroupId_to"
                          name="toExpenseItemGroupId"
                          value=""
                          type="text"
                          class="form-control input-sm"
                          placeholder=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="client" class="d-block mb-1">Client </label>
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
                  <div class="col-sm-6">
                    <label for="client" class="d-block mb-1">Manager </label>
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
                  <div class="col-sm-6">
                    <label for="client" class="d-block mb-1">Provider </label>
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
                  <div class="col-sm-6">
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
                </div>
                <!------card start ---->
                <div class="card" style="border-top: 3px solid #009ada">
                  <h3 class="panel-title">Participants</h3>
                  <div class="row">
                    <div class="col-lg-3" style="padding-right: 0px">
                      <div class="col-sm-12">
                        <label class="control-label" for="placementFrequency"
                          >Timesheet Frequency</label
                        >
                        <div class="input-group">
                          <select
                            name="placementFrequency"
                            id="placementFrequency"
                            class="form-control form-control-sm null"
                            onchange=""
                          >
                            <option value="ALL">All</option>
                            <option value="WEEKLY">weekly</option>
                          </select>
                        </div>
                        <label class="control-label" for="placementFrequency"
                          >Perm Placement</label
                        >
                        <div class="input-group">
                          <select
                            name="placementFrequency"
                            id="placementFrequency"
                            class="form-control form-control-sm null"
                            onchange=""
                          >
                            <option value="ALL">All</option>
                            <option value="WEEKLY">weekly</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2" style="padding-left: 5px">
                      <div class="row">
                        <label class="control-label" for="placementFrequency"
                          >Timesheet Entry Method</label
                        >
                        <div class="input-group">
                          <select
                            name="placementFrequency"
                            id="placementFrequency"
                            class="form-control form-control-sm"
                            onchange=""
                          >
                            <option value="ALL">All</option>
                            <option value="WEEKLY">weekly</option>
                          </select>
                        </div>
                        <label class="control-label" for="placementFrequency"
                          >PO Required</label
                        >
                        <div class="input-group">
                          <select
                            name="placementFrequency"
                            id="placementFrequency"
                            class="form-control form-control-sm null"
                            onchange=""
                          >
                            <option value="ALL">All</option>
                            <option value="WEEKLY">weekly</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-7" style="padding-left: 0px">
                      <div class="col-lg-12 row">
                        <div class="col-lg-5">
                          <label for="client" class="d-block mb-1"
                            >Job Description</label
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
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                          </button>
                          <button
                            type="button"
                            id="altManager_leftSelected"
                            class="btn btn-block btn-light btn-xs"
                          >
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
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
                              >Job Description</label
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

                    <div class="col-sm-12">
                      <input
                        type="button"
                        class="btn btn-primary"
                        name="splitComm"
                        value="Split Commission"
                        onclick="return submitSplitCommission();"
                      />
                      <input
                        type="button"
                        class="btn btn-primary"
                        name="grossMar"
                        value="Gross Margin"
                        onclick="return submitGrossMargin();"
                      />
                      <input
                        type="button"
                        class="btn btn-primary"
                        name="resetFilter"
                        value="Reset All"
                        onclick="javascript:resetAll();"
                      />
                    </div>
                  </div>
                  <br />
                </div>
                <!----- card end-------->
              </div>
            </div>
            <!------first tab end -->
            <div
              class="tab-pane fade"
              id="custom-content-below-ranges"
              role="tabpanel"
              aria-labelledby="custom-content-below-ranges-tab"
            >
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label"
                      >Period End / Receipt Date</label
                    >
                    <div class="input-daterange input-group">
                      <input
                        id="startDate_start_X"
                        name="fromStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="startDate_end_X"
                        name="toStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="startDate_start"
                        name="fromStartDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="startDate_end"
                        name="toStartDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dr-today"
                              id="startDate_todayRange"
                              href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="startDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-last7"
                              id="startDate_7daysRange"
                              href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="startDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="startDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="startDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="startDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="startDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Submitted Date</label>
                    <div class="input-daterange input-group">
                      <input
                        id="endDate_start_X"
                        name="fromEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="endDate_end_X"
                        name="toEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="endDate_start"
                        name="fromEndDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="endDate_end"
                        name="toEndDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dr-today" id="endDate_todayRange" href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="endDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a class="dr-last7" id="endDate_7daysRange" href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="endDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="endDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="endDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="endDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="endDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Approved Date</label>
                    <div class="input-daterange input-group">
                      <input
                        id="startDate_start_X"
                        name="fromStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="startDate_end_X"
                        name="toStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="startDate_start"
                        name="fromStartDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="startDate_end"
                        name="toStartDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dr-today"
                              id="startDate_todayRange"
                              href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="startDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-last7"
                              id="startDate_7daysRange"
                              href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="startDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="startDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="startDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="startDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="startDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Exported Date</label>
                    <div class="input-daterange input-group">
                      <input
                        id="endDate_start_X"
                        name="fromEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="endDate_end_X"
                        name="toEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="endDate_start"
                        name="fromEndDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="endDate_end"
                        name="toEndDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dr-today" id="endDate_todayRange" href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="endDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a class="dr-last7" id="endDate_7daysRange" href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="endDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="endDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="endDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="endDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="endDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Shift Date</label>
                    <div class="input-daterange input-group">
                      <input
                        id="startDate_start_X"
                        name="fromStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="startDate_end_X"
                        name="toStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="startDate_start"
                        name="fromStartDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="startDate_end"
                        name="toStartDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dr-today"
                              id="startDate_todayRange"
                              href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="startDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-last7"
                              id="startDate_7daysRange"
                              href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="startDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="startDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="startDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="startDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="startDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Created Date</label>
                    <div class="input-daterange input-group">
                      <input
                        id="endDate_start_X"
                        name="fromEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="endDate_end_X"
                        name="toEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="endDate_start"
                        name="fromEndDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="endDate_end"
                        name="toEndDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dr-today" id="endDate_todayRange" href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="endDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a class="dr-last7" id="endDate_7daysRange" href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="endDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="endDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="endDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="endDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="endDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Placement Created Date</label>
                    <div class="input-daterange input-group">
                      <input
                        id="startDate_start_X"
                        name="fromStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="startDate_end_X"
                        name="toStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="startDate_start"
                        name="fromStartDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="startDate_end"
                        name="toStartDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dr-today"
                              id="startDate_todayRange"
                              href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="startDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-last7"
                              id="startDate_7daysRange"
                              href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="startDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="startDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="startDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="startDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="startDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Placement Modified Date</label>
                    <div class="input-daterange input-group">
                      <input
                        id="endDate_start_X"
                        name="fromEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="endDate_end_X"
                        name="toEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="endDate_start"
                        name="fromEndDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="endDate_end"
                        name="toEndDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dr-today" id="endDate_todayRange" href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="endDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a class="dr-last7" id="endDate_7daysRange" href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="endDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="endDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="endDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="endDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="endDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!---1st card end----->

              <div class="col-md-12">
                <div class="row">
                  <div class="col-sm-2">
                    <br />
                    <div class="checkbox checkbox-primary m-t-0">
                      <input type="hidden" name="_includeClientInvoice" /><input
                        type="checkbox"
                        name="includeClientInvoice"
                        id="includeClientInvoice"
                        onclick="invoiceFilterSelected();"
                      /><label
                        for="includeClientInvoice"
                        class="control-label"
                        style="font-weight: 700 !important"
                        >Client Invoices</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <br />
                    <div class="checkbox checkbox-primary m-t-0">
                      <input
                        type="hidden"
                        name="_includeClientCreditNote"
                      /><input
                        type="checkbox"
                        name="includeClientCreditNote"
                        id="includeClientCreditNote"
                        onclick="invoiceFilterSelected();"
                      /><label
                        for="includeClientCreditNote"
                        class="control-label"
                        style="font-weight: 700 !important"
                        >Client Credit Notes</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <br />
                    <div class="checkbox checkbox-primary m-t-0">
                      <input
                        type="hidden"
                        name="_includeSelfBillInvoice"
                      /><input
                        type="checkbox"
                        name="includeSelfBillInvoice"
                        id="includeSelfBillInvoice"
                        onclick="invoiceFilterSelected();"
                      /><label
                        for="includeSelfBillInvoice"
                        class="control-label"
                        style="font-weight: 700 !important"
                        >Self Bill Invoices</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <br />
                    <div class="checkbox checkbox-primary m-t-0">
                      <input
                        type="hidden"
                        name="_includeSelfBillCreditNote"
                      /><input
                        type="checkbox"
                        name="includeSelfBillCreditNote"
                        id="includeSelfBillCreditNote"
                        onclick="invoiceFilterSelected();"
                      /><label
                        for="includeSelfBillCreditNote"
                        class="control-label"
                        style="font-weight: 700 !important"
                        >Self Bill Credit Notes</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <br />
                    <div class="checkbox checkbox-primary m-t-0">
                      <input
                        type="hidden"
                        name="_includeSupplierInvoice"
                      /><input
                        type="checkbox"
                        name="includeSupplierInvoice"
                        id="includeSupplierInvoice"
                        onclick="invoiceFilterSelected();"
                      /><label
                        for="includeSupplierInvoice"
                        class="control-label"
                        style="font-weight: 700 !important"
                        >Non Self Bill Invoices</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <br />
                    <div class="checkbox checkbox-primary m-t-0">
                      <input
                        type="hidden"
                        name="_includeSupplierCreditNote"
                      /><input
                        type="checkbox"
                        name="includeSupplierCreditNote"
                        id="includeSupplierCreditNote"
                        onclick="invoiceFilterSelected();"
                      /><label
                        for="includeSupplierCreditNote"
                        class="control-label"
                        style="font-weight: 700 !important"
                        >Non Self Bill Credit Notes</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <br />
                    <div class="checkbox checkbox-primary m-t-0">
                      <input type="hidden" name="_includeAdviceNote" /><input
                        type="checkbox"
                        name="includeAdviceNote"
                        id="includeAdviceNote"
                        onclick="invoiceFilterSelected();"
                      /><label
                        for="includeAdviceNote"
                        class="control-label"
                        style="font-weight: 700 !important"
                        >Advice Notes</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <br />
                    <div class="checkbox checkbox-primary m-t-0">
                      <input type="hidden" name="_includePAYE" /><input
                        type="checkbox"
                        name="includePAYE"
                        id="includePAYE"
                        onclick="invoiceFilterSelected();"
                      /><label
                        for="includePAYE"
                        class="control-label"
                        style="font-weight: 700 !important"
                        >PAYE</label
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label"
                      >Invoice Date Range / PAYE Export</label
                    >
                    <div class="input-daterange input-group">
                      <input
                        id="startDate_start_X"
                        name="fromStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="startDate_end_X"
                        name="toStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="startDate_start"
                        name="fromStartDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="startDate_end"
                        name="toStartDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dr-today"
                              id="startDate_todayRange"
                              href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="startDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-last7"
                              id="startDate_7daysRange"
                              href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="startDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="startDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="startDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="startDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="startDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Invoice Date Generated</label>
                    <div class="input-daterange input-group">
                      <input
                        id="endDate_start_X"
                        name="fromEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="endDate_end_X"
                        name="toEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="endDate_start"
                        name="fromEndDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="endDate_end"
                        name="toEndDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dr-today" id="endDate_todayRange" href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="endDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a class="dr-last7" id="endDate_7daysRange" href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="endDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="endDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="endDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="endDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="endDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Invoice Date Sent</label>
                    <div class="input-daterange input-group">
                      <input
                        id="startDate_start_X"
                        name="fromStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="startDate_end_X"
                        name="toStartDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="startDate_start"
                        name="fromStartDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="startDate_end"
                        name="toStartDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dr-today"
                              id="startDate_todayRange"
                              href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="startDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-last7"
                              id="startDate_7daysRange"
                              href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="startDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="startDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="startDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="startDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="startDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label"
                      >Invoice Date Paid / PAYE Export</label
                    >
                    <div class="input-daterange input-group">
                      <input
                        id="endDate_start_X"
                        name="fromEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />
                      <span class="input-group-addon bg-primary b-0 text-white"
                        >to</span
                      >
                      <input
                        id="endDate_end_X"
                        name="toEndDate_X"
                        value=""
                        type="text"
                        class="bsDP form-control input-sm"
                        data-date-start-date=""
                        data-date-end-date=""
                        placeholder="dd/MM/yyyy"
                      />

                      <input
                        id="endDate_start"
                        name="fromEndDate"
                        value=""
                        type="hidden"
                      />
                      <input
                        id="endDate_end"
                        name="toEndDate"
                        value=""
                        type="hidden"
                      />

                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="
                            btn
                            waves-effect waves-light
                            btn-primary
                            dropdown-toggle
                            input-sm
                          "
                          data-toggle="dropdown"
                          style="overflow: hidden; position: relative"
                          aria-expanded="false"
                        >
                          Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dr-today" id="endDate_todayRange" href="#"
                              >Today</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-yesterday"
                              id="endDate_yesterdayRange"
                              href="#"
                              >Yesterday</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a class="dr-last7" id="endDate_7daysRange" href="#"
                              >Last 7 Days</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-last30"
                              id="endDate_30daysRange"
                              href="#"
                              >Last 30 Days</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thisweek"
                              id="endDate_thisWeekRange"
                              href="#"
                              >This Week</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastweek"
                              id="endDate_lastWeekRange"
                              href="#"
                              >Last Week</a
                            >
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a
                              class="dr-thismonth"
                              id="endDate_thisMonthRange"
                              href="#"
                              >This Month</a
                            >
                          </li>
                          <li>
                            <a
                              class="dr-lastmonth"
                              id="endDate_lastMonthRange"
                              href="#"
                              >Last Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label class="control-label" for="outputType"
                      >Purchase Invoiced</label
                    >
                    <select
                      name="includeNotInvoicedPurchase"
                      id="includeNotInvoicedPurchase"
                      class="form-control input-sm null"
                      onchange="invoicedFilterChange();"
                    >
                      <option value="ALL">All</option>
                      <option value="INVOICED">Invoiced / Not Payable</option>
                      <option value="NOT_INVOICED">Not Invoiced</option>
                      <option value="WRITTEN_OFF">Written Off</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="control-label" for="">ales Invoiced</label>
                    <select
                      name="includeNotInvoicedSales"
                      id="includeNotInvoicedSales"
                      class="form-control input-sm null"
                      onchange="invoicedFilterChange();"
                    >
                      <option value="ALL">All</option>
                      <option value="INVOICED">
                        Invoiced / Not Chargeable
                      </option>
                      <option value="NOT_INVOICED">Not Invoiced</option>
                      <option value="WRITTEN_OFF">Written Off</option>
                    </select>
                  </div>
                </div>
              </div>
              <br />
              <div class="col-sm-12">
                <div class="" id="button-panel">
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="splitComm"
                    value="Split Commission"
                    onclick="return submitSplitCommission();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="grossMar"
                    value="Gross Margin"
                    onclick="return submitGrossMargin();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="resetFilter"
                    value="Reset All"
                    onclick="javascript:resetAll();"
                  />
                </div>
              </div>
            </div>
            <!------2nd tab end -->
            <div
              class="tab-pane fade"
              id="custom-content-below-ref"
              role="tabpanel"
              aria-labelledby="custom-content-below-ref-tab"
            >
              <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >Placement Ref Range</label
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
                    >Project Code Range</label
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
                <div class="col-sm-3">
                  <div class="form-group">
                    <label class="control-label" for="clientInvoiceTown"
                      >Client Invoice Town</label
                    >
                    <input
                      type="text"
                      label="Client Invoice Town"
                      id="clientInvoiceTown"
                      name="clientInvoiceTown"
                      grid="3"
                      class="form-control form-control-sm"
                      value=""
                    />
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label class="control-label" for="clientInvoiceTown"
                      >Client Invoice Country</label
                    >
                    <input
                      type="text"
                      label="Client Invoice Town"
                      id="clientInvoiceTown"
                      name="clientInvoiceTown"
                      grid="3"
                      class="form-control form-control-sm"
                      value=""
                    />
                  </div>
                </div>
                <br />
                <div class="col-sm-12">
                  <div class="" id="button-panel">
                    <input
                      type="button"
                      class="btn btn-primary"
                      name="splitComm"
                      value="Split Commission"
                      onclick="return submitSplitCommission();"
                    />
                    <input
                      type="button"
                      class="btn btn-primary"
                      name="grossMar"
                      value="Gross Margin"
                      onclick="return submitGrossMargin();"
                    />
                    <input
                      type="button"
                      class="btn btn-primary"
                      name="resetFilter"
                      value="Reset All"
                      onclick="javascript:resetAll();"
                    />
                  </div>
                </div>
              </div>
            </div>
            <!------third ref tab end -->
            <div
              class="tab-pane fade"
              id="custom-content-below-financial"
              role="tabpanel"
              aria-labelledby="custom-content-below-financial-tab"
            >
              <div class="row">
                <div class="col-sm-6">
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
                      <option value="Active">Choose</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
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
                      <option value="Active">Choose</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1">Sales Branch </label>
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Branch
                  </label>
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Location
                  </label>
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Location</label
                  >
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Division
                  </label>
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Division</label
                  >
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Department
                  </label>
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1">Purchase Dept</label>
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Project
                  </label>
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Project</label
                  >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      placeholder="Search"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Sales Cost Centre</label
                  >
                  <div class="input-group">
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
                <div class="col-sm-6">
                  <label for="client" class="d-block mb-1"
                    >Purchase Cost Centre</label
                  >
                  <div class="input-group">
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
                <div class="" id="button-panel">
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="splitComm"
                    value="Split Commission"
                    onclick="return submitSplitCommission();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="grossMar"
                    value="Gross Margin"
                    onclick="return submitGrossMargin();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="resetFilter"
                    value="Reset All"
                    onclick="javascript:resetAll();"
                  />
                </div>
              </div>
            </div>
            <!----- financial tab end ----->
            <div
              class="tab-pane fade"
              id="custom-content-below-pay"
              role="tabpanel"
              aria-labelledby="custom-content-below-pay-tab"
            >
              <div class="col-lg-10" style="padding-left: 0px">
                <div class="col-lg-12 row">
                  <div class="col-lg-5">
                    <label for="client" class="d-block mb-1"
                      >Job Description</label
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
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </button>
                    <button
                      type="button"
                      id="altManager_leftSelected"
                      class="btn btn-block btn-light btn-xs"
                    >
                      <i class="fa fa-angle-left" aria-hidden="true"></i>
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
                        >Job Description</label
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
              <br />
              <div class="col-sm-12">
                <div class="" id="button-panel">
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="splitComm"
                    value="Split Commission"
                    onclick="return submitSplitCommission();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="grossMar"
                    value="Gross Margin"
                    onclick="return submitGrossMargin();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="resetFilter"
                    value="Reset All"
                    onclick="javascript:resetAll();"
                  />
                </div>
              </div>
            </div>
            <!------fourth tab end -->
            <div
              class="tab-pane fade"
              id="custom-content-below-grouping"
              role="tabpanel"
              aria-labelledby="custom-content-below-grouping-tab"
            >
              <div class="col-lg-10" style="padding-left: 0px">
                <div class="col-lg-12 row">
                  <div class="col-lg-5">
                    <label for="client" class="d-block mb-1"
                      >Job Description</label
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
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </button>
                    <button
                      type="button"
                      id="altManager_leftSelected"
                      class="btn btn-block btn-light btn-xs"
                    >
                      <i class="fa fa-angle-left" aria-hidden="true"></i>
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
                        >Job Description</label
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
              <div class="row">
                <div
                  class="custom-control custom-checkbox col-lg-3"
                  style="padding-top: 30px"
                >
                  <div class="input-group">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Show Charge By Month</label
                    >
                  </div>
                </div>
                <div
                  class="custom-control custom-checkbox col-lg-3"
                  style="padding-top: 30px"
                >
                  <div class="input-group">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                      >Do Forecast</label
                    >
                  </div>
                </div>
              </div>
              <br />
              <div class="col-sm-12">
                <div class="" id="button-panel">
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="splitComm"
                    value="Split Commission"
                    onclick="return submitSplitCommission();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="grossMar"
                    value="Gross Margin"
                    onclick="return submitGrossMargin();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="resetFilter"
                    value="Reset All"
                    onclick="javascript:resetAll();"
                  />
                </div>
              </div>
            </div>
            <!------fivth tab end -->
            <div
              class="tab-pane fade"
              id="custom-content-below-column"
              role="tabpanel"
              aria-labelledby="custom-content-below-column-tab"
            >
              <div class="col-lg-10" style="padding-left: 0px">
                <div class="col-lg-12 row">
                  <div class="col-lg-5">
                    <label for="client" class="d-block mb-1"
                      >Job Description</label
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
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </button>
                    <button
                      type="button"
                      id="altManager_leftSelected"
                      class="btn btn-block btn-light btn-xs"
                    >
                      <i class="fa fa-angle-left" aria-hidden="true"></i>
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
                        >Job Description</label
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
              <br />
              <div class="col-sm-12">
                <div class="" id="button-panel">
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="splitComm"
                    value="Split Commission"
                    onclick="return submitSplitCommission();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="grossMar"
                    value="Gross Margin"
                    onclick="return submitGrossMargin();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="resetFilter"
                    value="Reset All"
                    onclick="javascript:resetAll();"
                  />
                </div>
              </div>
            </div>
            <!------fivth tab end -->
            <div
              class="tab-pane fade"
              id="custom-content-below-saved"
              role="tabpanel"
              aria-labelledby="custom-content-below-saved-tab"
            >
              <div class="row">
                <div>
                  <input type="hidden" name="reportId" id="reportId" />
                  <div class="row">
                    <div id="reportsDiv" class="col-sm-6">
                      <table
                        class="
                          table table-condensed table-bordered table-striped
                        "
                      >
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Created by</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="report_1659">
                            <td nowrap="">
                              <a href="javascript:loadReport(1659);"
                                >Group Reconciliation Report</a
                              >
                            </td>
                            <td nowrap="">(Miss Gillian Thomson)</td>
                            <td></td>
                          </tr>

                          <tr class="report_1666">
                            <td nowrap="">
                              <a href="javascript:loadReport(1666);"
                                >Group Bacs check - Off-Payroll</a
                              >
                            </td>
                            <td nowrap="">( Kara Mitchell)</td>
                            <td></td>
                          </tr>

                          <tr class="report_1712">
                            <td nowrap="">
                              <a href="javascript:loadReport(1712);"
                                >Wight Shipyard Company Limited</a
                              >
                            </td>
                            <td nowrap="">(Mr Stuart McKay)</td>
                            <td></td>
                          </tr>

                          <tr class="report_1726">
                            <td nowrap="">
                              <a href="javascript:loadReport(1726);"
                                >Wight Shipyard Weekly Report</a
                              >
                            </td>
                            <td nowrap="">( Gemma Whitelaw)</td>
                            <td></td>
                          </tr>

                          <tr class="report_1765">
                            <td nowrap="">
                              <a href="javascript:loadReport(1765);"
                                >Commission Report</a
                              >
                            </td>
                            <td nowrap="">(Mr Lee Turvey)</td>
                            <td></td>
                          </tr>

                          <tr class="report_1829">
                            <td nowrap="">
                              <a href="javascript:loadReport(1829);"
                                >Group - BACS and 3K Check</a
                              >
                            </td>
                            <td nowrap="">(Ms Claire King)</td>
                            <td></td>
                          </tr>

                          <tr class="report_1900">
                            <td nowrap="">
                              <a href="javascript:loadReport(1900);"
                                >ATECA - Comments</a
                              >
                            </td>
                            <td nowrap="">(Mr Stuart McKay)</td>
                            <td></td>
                          </tr>

                          <tr class="report_1942">
                            <td nowrap="">
                              <a href="javascript:loadReport(1942);"
                                >Group Reconciliation Report (select all
                                option)</a
                              >
                            </td>
                            <td nowrap="">(Miss Gillian Thomson)</td>
                            <td></td>
                          </tr>

                          <tr class="report_1971">
                            <td nowrap="">
                              <a href="javascript:loadReport(1971);"
                                >Ateca Platform Report</a
                              >
                            </td>
                            <td nowrap="">(Mr Jordan Cooke)</td>
                            <td></td>
                          </tr>

                          <tr class="report_1976">
                            <td nowrap="">
                              <a href="javascript:loadReport(1976);"
                                >Group - BACS and 3K Check - Off Payroll</a
                              >
                            </td>
                            <td nowrap="">( Kara Mitchell)</td>
                            <td></td>
                          </tr>

                          <tr class="report_2043">
                            <td nowrap="">
                              <a href="javascript:loadReport(2043);"
                                >Group - Generic - Umbrella Report</a
                              >
                            </td>
                            <td nowrap="">( User Reports)</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label class="control-label" for="reportName"
                          >Report Name</label
                        ><input
                          type="text"
                          label="Report Name"
                          grid="2"
                          name="reportName"
                          id="reportName"
                          class="form-control input-sm"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <br />
                      <div class="checkbox checkbox-primary m-t-0">
                        <input
                          type="hidden"
                          name="_visibleByConsultant"
                        /><input
                          type="checkbox"
                          name="visibleByConsultant"
                          id="visibleByConsultant"
                        /><label
                          for="visibleByConsultant"
                          class="control-label"
                          style="font-weight: 700 !important"
                          >Viewable by Consultants</label
                        >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <br />
                      <div class="checkbox checkbox-primary m-t-0">
                        <input
                          type="hidden"
                          name="_visibleByAdministrator"
                        /><input
                          type="checkbox"
                          name="visibleByAdministrator"
                          id="visibleByAdministrator"
                        /><label
                          for="visibleByAdministrator"
                          class="control-label"
                          style="font-weight: 700 !important"
                          >Viewable by Admins</label
                        >
                      </div>
                    </div>
                    <input
                      type="button"
                      class="btn btn-purple saveReport"
                      name="saveReport"
                      value="Save Report"
                    />
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="" id="button-panel">
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="splitComm"
                    value="Split Commission"
                    onclick="return submitSplitCommission();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="grossMar"
                    value="Gross Margin"
                    onclick="return submitGrossMargin();"
                  />
                  <input
                    type="button"
                    class="btn btn-primary"
                    name="resetFilter"
                    value="Reset All"
                    onclick="javascript:resetAll();"
                  />
                </div>
              </div>
            </div>
            <!------fivth tab end -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="background-color: white">
              <div class="row">
                <div class="col-lg-9">
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
                  </div>
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
                    <th>id</th>
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
                    <th>Consultant Ref</th>
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
                    <th>Sales Division</th>
                    <th>Sales Department</th>
                    <th>Sales Cost Centre</th>
                    <th>Sales Sector</th>
                    <th>Sales Branch</th>
                    <th>Sales Location</th>
                    <th>Purchase Division</th>
                    <th>Purchase Dept</th>
                    <th>Purchase Cost Centre</th>
                    <th>Purchase Sector</th>
                    <th>Purchase Branch</th>
                    <th>Purchase Location</th>
                    <th>Purchase Project</th>
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
                    <th>Purchase Invoices</th>
                    <th>Last Purchase Invoice Date</th>
                    <th>Client Acc Ref</th>
                    <th>Exported Date</th>
                    <th>Invoiced Pay Net</th>
                    <th>Invoiced Pay Gross</th>
                    <th>Invoiced Pay VAT</th>
                    <th>Total Cost(GBP)</th>
                    <th>Purchase Nominal</th>
                    <th>Sales Nominal</th>
                    <th>Supplier Accounts Ref</th>
                    <th>Worker Accounts Ref</th>
                    <th>Worker Gender</th>
                    <th>Invoiced Pay Net (GBP)</th>
                    <th>Invoiced Charge Net (GBP)</th>
                    <th>Exchange Rate Pay</th>
                    <th>Exchange Rate Charge</th>
                    <th>Charge</th>
                    <th>Charge Currency</th>
                    <th>Funds Received</th>
                    <th>Sales Invoices</th>
                    <th>Last Sales Invoice Date</th>
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
                    <th>Margin(GBP)</th>
                    <th>Margin%</th>
                    <th>Invoiced Margin(GBP)</th>
                    <th>Commission</th>
                    <th>Commission %</th>
                    <th>Commission Consultant</th>
                    <th>Consultant Department</th>
                    <th>Commission Consultant Department</th>
                    <th>Commission Consultant Ref</th>
                    <th>Commission Consultant Name</th>
                    <th>Commission Consultant Team</th>
                    <th>ERNI</th>
                    <th>Employers Pension</th>
                    <th>Holiday</th>
                    <th>Apprenticeship Levy</th>
                    <th>Total Cost</th>
                    <th>Daily Pay</th>
                    <th>Daily Charge</th>
                    <th>Daily Margin</th>
                    <th>Internal Comment</th>
                    <th>Paper</th>
                    <th>Sales Project</th>
                    <th>Contracted Hours</th>
                    <th>Rate Reference</th>
                    <th>Rate Name</th>
                    <th>Pay Rate</th>
                    <th>NMW</th>
                    <th>Charge Rate</th>
                    <th>Comment</th>
                    <th>Shift Date</th>
                    <th>Pay Element</th>
                    <th>Expense Group</th>
                    <th>Expense Type</th>
                    <th>Template Name</th>
                    <th>Template Group</th>
                    <th>Hours Worked</th>
                    <th>Paid Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="product in products.data" :key="product.id">
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
                    Print Report
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Print Detail Report
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    CSV
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Default CSV
                  </button>
                  <button type="submit" class="btn btn-dark btn-sm">
                    Reset Columns
                  </button>
                </div>
              </div>
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
