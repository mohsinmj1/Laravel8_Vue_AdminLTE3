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
          <h2>Missing Timesheets</h2>
        </div>
      </div>
      <div class="bg-white pb-4">
        <div class="card-body">
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
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                  Select All
                </button>
                <button type="submit" class="btn btn-sm color-light mx-1">
                  Select None
                </button>
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
                <th>id</th>
                <th>Submit</th>
                <th>Placement</th>
                <th>Job Title</th>
                <th>Placement Start</th>
                <th>Placement End</th>
                <th>Period Ending</th>
                <th>Worker</th>
                <th>Worker ref</th>
                <th>Worker Ext Ref</th>
                <th>Consultant</th>
                <th>Consultant Ref</th>
                <th>Client</th>
                <th>Manager</th>
                <th>Status</th>
                <th>Duration</th>
                <th>Contacted Pay</th>
                <th>Pay Currency</th>
                <th>Contacted Charge</th>
                <th>Charge Currency</th>
                <th>Hours Worked</th>
                <th>Paid Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a href="#">1</a>
                </td>
                <td><input type="checkbox" name="" id="" /></td>
                <td><a href="">LTD</a></td>
                <td>Wkr65</td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#">Robert</a></td>
                <td></td>
                <td></td>
                <td><a href="#">Robert</a></td>
                <td></td>
                <td><a href="#">Pmt215</a></td>
                <td><a href="#">Pmt215</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>No</td>
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
            Submit Timesheet
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
export default {
  mounted() {
    //Initialize Select2 Elements
    $(".select2").select2();
    $('[data-toggle="tooltip"]').tooltip();
    console.log("Creat Timesheet mounted.");
  },
};
</script>