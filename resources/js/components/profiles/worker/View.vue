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
        <div class="col-md-8">
          <h2>Workers</h2>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
          <div class="card-tools">
            <router-link to="/profiles/workers/create">
              <button type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-plus-square mr-1"></i>Create
              </button>
            </router-link>
          </div>
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
            <div class="row">
              <div class="col-md-10 panel-heading">
                <h4 class="panel-title">
                  <i class="fa fa-search"></i> Search Options
                </h4>
              </div>
              <div
                class="col-md-2 d-flex justify-content-end align-items-center"
              >
                <i class="fa fa-plus-square"></i>
              </div>
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
                        id="worker-search-date-range-tab"
                        data-toggle="pill"
                        href="#worker-search-date-range"
                        role="tab"
                        aria-controls="worker-search-date-range"
                        aria-selected="false"
                        >Date Ranges</a
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
                            <label class="control-label">Firstname</label>
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
                            <label class="control-label">Lastname</label>
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
                            <label class="control-label"
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
                            <label class="control-label">NI Number</label>
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
                            <label class="control-label">Worker Type</label>
                            <select class="form-control form-control-sm">
                              <option value="">
                                Please Select Worker Type
                              </option>
                              <option value="">LTD</option>
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
                            <label class="control-label" for="jobTitle"
                              >Currency</label
                            >
                            <select class="form-control form-control-sm">
                              <option value="">Please Select Currency</option>
                              <option value="GBP">GBP</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Account Status</label>
                            <select class="form-control form-control-sm">
                              <option value="">Please Slect</option>
                              <option value="0">Active</option>
                              <option value="1">Locked</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="form-group">
                            <label class="control-label"
                              >Missing Bank Details</label
                            >
                            <select class="form-control form-control-sm">
                              <option value="0">All</option>
                              <option value="1">Yes</option>
                              <option value="2">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-group">
                            <label class="control-label">Created Date</label>
                            <div class="input-group-sm input-group">
                              <input
                                type="date"
                                class="form-control form-control-sm"
                              />
                              <button
                                class="input-group-addon btn btn-primary btn-sm"
                              >
                                to
                              </button>
                              <input
                                type="date"
                                class="form-control form-control-sm"
                              />
                              <div class="input-group-btn">
                                <button
                                  type="button"
                                  class="
                                    btn btn-sm btn-primary
                                    dropdown-toggle
                                    form-control-sm
                                  "
                                  data-toggle="dropdown"
                                >
                                  Options
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Today</a></li>
                                  <li><a href="#">Yesterday</a></li>
                                  <li><a href="#">Last 7 Days</a></li>
                                  <li><a href="#">Last 30 Days</a></li>
                                  <li><a href="#">This Week</a></li>
                                  <li><a href="#">Last Week</a></li>
                                  <li><a href="#">This Month</a></li>
                                  <li><a href="#">Last Month</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-group">
                            <label class="control-label">Modified Date</label>
                            <div class="input-group-sm input-group">
                              <input
                                type="date"
                                class="form-control form-control-sm"
                                data-date-start-date=""
                                data-date-end-date=""
                                placeholder="dd/MM/yyyy"
                              />
                              <button
                                class="input-group-addon btn btn-primary btn-sm"
                              >
                                to
                              </button>
                              <input
                                type="date"
                                class="form-control form-control-sm"
                                data-date-start-date=""
                                data-date-end-date=""
                                placeholder="dd/MM/yyyy"
                              />

                              <div class="input-group-btn">
                                <button
                                  type="button"
                                  class="btn btn-primary btn-sm dropdown-toggle"
                                  data-toggle="dropdown"
                                >
                                  Options
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Today</a></li>
                                  <li><a href="#">Yesterday</a></li>
                                  <li><a href="#">Last 7 Days</a></li>
                                  <li><a href="#">Last 30 Days</a></li>
                                  <li><a href="#">This Week</a></li>
                                  <li><a href="#">Last Week</a></li>
                                  <li><a href="#">This Month</a></li>
                                  <li><a href="#">Last Month</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <button
                          type="submit"
                          class="btn btn-primary btn-sm ml-3 mr-2"
                        >
                          Search
                        </button>
                        <button
                          type="submit"
                          class="btn btn-default btn-sm mx-2"
                        >
                          Clear
                        </button>
                      </div>
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
                            <label class="control-label">Umbrella</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                              />

                              <button
                                class="
                                  input-group-addon
                                  btn btn-sm btn-primary
                                  rounded-0
                                "
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input
                              type="text"
                              class="form-control form-control-sm"
                            />
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Company Email</label>
                            <input
                              type="text"
                              class="form-control form-control-sm"
                            />
                          </div>
                        </div>
                        <!-- <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Nominal Code</label>
                            <input
                              type="text"
                              class="form-control form-control-sm"
                            />
                          </div>
                        </div> -->
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Self Billing</label>
                            <select class="form-control form-control-sm">
                              <option value="">please select</option>
                              <option value="">Yes</option>
                              <option value="">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">VAT Code</label>
                            <select class="form-control form-control-sm">
                              <option value="Active">please select</option>
                              <option value="Active">None (T0)</option>
                              <option value="Active">Standard (T1)</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Invoice Period</label>
                            <select class="form-control form-control-sm">
                              <option value="">please select</option>
                              <option value="0">Weekly</option>
                              <option value="1">Two Weekly</option>
                              <option value="2">Four Weekly</option>
                              <option value="3">Calendar Monthly</option>
                              <option value="4">4-4-5</option>
                              <option value="5">Other</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label"
                              >Invoice Delivery</label
                            >
                            <select class="form-control form-control-sm">
                              <option value="">please select</option>
                              <option value="0">Post</option>
                              <option value="1">Email</option>
                              <option value="3">Delivery Not Required</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <button
                          type="submit"
                          class="btn btn-primary btn-sm ml-3 mr-2"
                        >
                          Search
                        </button>
                        <button type="submit" class="btn btn-default btn-sm">
                          Clear
                        </button>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="worker-search-date-range"
                      role="tabpanel"
                      aria-labelledby="worker-search-date-range-tab"
                    >
                      <div class="row">
                        <div class="col-lg-4">
                          <label>Joined After</label>
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
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

                        <div class="col-lg-4">
                          <label>Hasn't Worked Since</label>
                          <div class="input-group">
                            <input
                              type="date"
                              class="form-control form-control-sm"
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
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary btn-sm">
                            Search
                          </button>
                          <button type="submit" class="btn btn-default btn-sm">
                            Clear
                          </button>
                        </div>
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
                            <label class="control-label">Client</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                              />

                              <button
                                class="
                                  input-group-addon
                                  btn btn-sm
                                  bg-primary
                                  rounded-0
                                "
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Manager</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                              />

                              <button
                                class="
                                  input-group-addon
                                  btn btn-sm
                                  bg-primary
                                  rounded-0
                                "
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Consultant</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                              />

                              <button
                                class="
                                  input-group-addon
                                  btn btn-sm
                                  bg-primary
                                  rounded-0
                                "
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label"
                              >Timesheet Entry Method</label
                            ><select class="form-control form-control-sm">
                              <option value="">All</option>
                              <option value="">Standard</option>
                              <option value="">Bulk Entry</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label"
                              >Status (Date filters will overide this)</label
                            >
                            <select class="form-control form-control-sm">
                              <option value="">All</option>
                              <option value="">Active</option>
                              <option value="">Inactive</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Project Code</label>
                           <select class="form-control form-control-sm">
                              <option value="">Choose</option>
                             
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Client Site</label>
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary btn-sm">
                            Search
                          </button>
                          <button
                            type="submit"
                            class="btn btn-default btn-sm mx-2"
                          >
                            Clear
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

    <div class="row">
      <div class="col-12">
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
                  <button type="submit" class="btn btn-sm color-light mx-1">
                    Select Page
                  </button>
                  <button type="submit" class="btn btn-sm color-light mx-1">
                    Deselect Page
                  </button>
                  <button type="submit" class="btn btn-sm color-light mx-1">
                    Select All Pages
                  </button>
                  <button type="submit" class="btn btn-sm color-light mx-1">
                    Select None
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
          <div class="card-body p-0">
            <table class="table table-responsive table-hover">
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
                  <td>
                    <input type="checkbox" name="" id="" />
                  </td>
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
                        <li>
                          <a href="#">View Summary</a>
                        </li>
                        <li>
                          <a href="#">Messages</a>
                        </li>
                        <li>
                          <a href="#">Create Expense</a>
                        </li>
                        <li>
                          <a href="#">Notifications</a>
                        </li>
                        <li>
                          <a href="#">Change Roles</a>
                        </li>
                        <li>
                          <a href="#">Switch To</a>
                        </li>
                        <li>
                          <a href="#">Managers</a>
                        </li>
                        <li>
                          <a href="#">Consultants</a>
                        </li>
                         <li>
                          <a href="#">Clients</a>
                        </li>
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
                  <td>
                    <input type="checkbox" name="" id="" />
                  </td>
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
                        <li>
                          <a href="#">View Summary</a>
                        </li>
                        <li>
                          <a href="#">Messages</a>
                        </li>
                        <li>
                          <a href="#">Create Expense</a>
                        </li>
                        <li>
                          <a href="#">Notifications</a>
                        </li>
                        <li>
                          <a href="#">Change Roles</a>
                        </li>
                        <li>
                          <a href="#">Switch To</a>
                        </li>
                        <li>
                          <a href="#">Managers</a>
                        </li>
                        <li>
                          <a href="#">Consultants</a>
                        </li>
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
                  <td>
                    <input type="checkbox" name="" id="" />
                  </td>
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
                        <li>
                          <a href="#">View Summary</a>
                        </li>
                        <li>
                          <a href="#">Messages</a>
                        </li>
                        <li>
                          <a href="#">Create Expense</a>
                        </li>
                        <li>
                          <a href="#">Notifications</a>
                        </li>
                        <li>
                          <a href="#">Change Roles</a>
                        </li>
                        <li>
                          <a href="#">Switch To</a>
                        </li>
                        <li>
                          <a href="#">Managers</a>
                        </li>
                        <li>
                          <a href="#">Consultants</a>
                        </li>
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
                  <td>
                    <input type="checkbox" name="" id="" />
                  </td>
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
                        <li>
                          <a href="#">View Summary</a>
                        </li>
                        <li>
                          <a href="#">Messages</a>
                        </li>
                        <li>
                          <a href="#">Create Expense</a>
                        </li>
                        <li>
                          <a href="#">Notifications</a>
                        </li>
                        <li>
                          <a href="#">Change Roles</a>
                        </li>
                        <li>
                          <a href="#">Switch To</a>
                        </li>
                        <li>
                          <a href="#">Managers</a>
                        </li>
                        <li>
                          <a href="#">Consultants</a>
                        </li>
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
