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
</style>

<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2>Search Expenses</h2>
        </div>
      </div>
      <div class="bg-white pb-4">
        <div class="card-body">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item" style="width: 33%">
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
            <li class="nav-item" style="width: 33%">
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
            <li class="nav-item" style="width: 33%">
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
          <br />
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
                      <!-- <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                Filters
                                            </h2>
                                        </div> -->
                      <div class="row">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-6">
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
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Payroll/Payment Frequency</label
                          >
                          <select
                            class="form-control select2"
                            style="width: 100%"
                          >
                            <option value="">All</option>
                            <option value="934">Weekly Paid (PAYE)</option>
                            <option value="0">Weekly (Limited)</option>
                            <option value="1">Monthly (Limited)</option>
                          </select>
                        </div>
                      </div>
                      <div class="row" style="margin-top: 20px">
                        <div style="margin-left: 15px">
                          <button class="btn btn-primary btn-sm" type="submit">
                            Search
                          </button>
                        </div>
                        <div style="margin-left: 10px">
                          <button class="btn btn-primary btn-sm" type="submit">
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
                      <!-- <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                Sheet Dates
                                            </h2>
                                        </div> -->
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="client" class="d-block mb-1"
                            >Expense Receipt Date Range</label
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
                                  class="btn btn-primary btn-sm dropdown-toggle"
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
                                  class="btn btn-primary btn-sm dropdown-toggle"
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
                                  class="btn btn-primary btn-sm dropdown-toggle"
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
                                  class="btn btn-primary btn-sm dropdown-toggle"
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
                      <div class="row" style="margin-top: 20px">
                        <div style="margin-left: 15px">
                          <button class="btn btn-primary btn-sm" type="submit">
                            Search
                          </button>
                        </div>
                        <div style="margin-left: 10px">
                          <button class="btn btn-primary btn-sm" type="submit">
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
              id="custom-content-below-reference"
              role="tabpanel"
              aria-labelledby="custom-content-below-reference-tab"
            >
              <div class="card card-primary card-outline card-tabs">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-2 pl-4">
                      <!-- <div class="timesheet_create_tit">
                                            <h2 class="pb-2">                                             
                                                Invoice Dates
                                            </h2>
                                        </div> -->
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
                      <div class="row" style="margin-top: 20px">
                        <div style="margin-left: 15px">
                          <button class="btn btn-primary btn-sm" type="submit">
                            Search
                          </button>
                        </div>
                        <div style="margin-left: 10px">
                          <button class="btn btn-primary btn-sm" type="submit">
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
                  Choose Column
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
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Worker</th>
                <th>Placement</th>
                <th>Client</th>
                <th>Receipt Date</th>
                <th>Description</th>
                <th>Unit</th>
                <th>Status</th>
                <th>Unit Net</th>
                <th>Net Total</th>
                <th>VAT Rate</th>
                <th>Claim Currency</th>
                <th>Pay</th>
                <th>Pay Currency</th>
                <th>Charge</th>
                <th>Charge Currency</th>
                <th>Net (GBP)</th>
                <th>Receipt</th>
                <th>Payroll/Frequency</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a href="">1</a>
                </td>
                <td><a href="">Madden,John</a></td>
                <td><a href="">Pmt149</a></td>
                <td><a href="">Madden,John</a></td>
                <td>28/01/2019</td>
                <td></td>
                <td>1</td>
                <td>Submitted</td>
                <td>25</td>
                <td>25</td>
                <td>0</td>
                <td>0</td>
                <td>GBP</td>
                <td>25</td>
                <td>GBP</td>
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
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {};
</script>