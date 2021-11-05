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
        <div class="col-lg-6">
          <h2>Create Manager</h2>
        </div>
        <div class="col-lg-6 text-right mb-1">
          <div class="btn-group dropdown">
            <a
              href="#"
              class="btn btn-primary"
              data-content="Click the down arrow to view actions."
              title=""
              >Actions</a
            ><button
              type="button"
              class="btn btn-primary dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="caret"></i>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">View Workers</a></li>
              <li><a href="#">View Consultants</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bg-white pb-4">
        <div class="card-body">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item" style="width: 50%; border-bottom: blue">
              <a
                class="nav-link active"
                id="custom-content-below-timesheet-tab"
                data-toggle="pill"
                href="#custom-content-below-timesheet"
                role="tab"
                aria-controls="custom-content-below-timesheet"
                aria-selected="false"
                >Main</a
              >
            </li>
            <li class="nav-item" style="width: 50%">
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
            <!--TAB 01 -->
            <div
              class="tab-pane fade active show"
              id="custom-content-below-timesheet"
              role="tabpanel"
              aria-labelledby="custom-content-below-timesheet-tab"
            >
              <div
                class="panel panel-border panel-primary"
                style="border-top: 3px solid #009ada"
              >
                <div class="panel-heading">
                  <h3 class="panel-title">Entry</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label class="control-label">Title</label>
                      <select
                        name="title"
                        id="title"
                        class="form-control input-sm null"
                      >
                        <option value="" selected>Choose</option>
                        <option value="">N/A</option>
                        <option value="">Mr</option>
                        <option value="">Mrs</option>
                        <option value="">Ms</option>
                        <option value="">Miss</option>
                        <option value="">Sir</option>
                        <option value="">Dr</option>
                      </select>
                    </div>
                    <div class="col-md-3 form-group">
                      <label class="control-label">Firstname *</label>
                      <input type="text" class="form-control" />
                    </div>
                    <div class="col-md-3 form-group">
                      <label class="control-label">Middlename</label>
                      <input type="text" class="form-control" />
                    </div>
                    <div class="col-md-3 form-group">
                      <label class="control-label">Lastname *</label>
                      <input type="text" class="form-control" />
                    </div>
                    <div class="col-md-3 form-group">
                      <label class="control-label">Email *</label>
                      <input type="email" class="form-control" />
                    </div>
                    <div
                      class="custom-control custom-checkbox col-md-2"
                      style="margin-left: 10px; padding-top: 30px"
                    >
                      <div class="input-group">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customCheck1"
                        />
                        <label class="custom-control-label" for="customCheck1"
                          >Emails Disabled
                          <a
                            href="javascript:void(0);"
                            data-toggle="tooltip"
                            data-placement="top"
                            title=""
                            data-original-title="If ticked this user will not receive automated emails such as welcome emails, placement notifications and approval reminders."
                            ><span class="badge badge-primary badge-tooltip"
                              ><small>?</small></span
                            ></a
                          ></label
                        >
                      </div>
                    </div>
                    <div class="col-md-3 form-group">
                      <label class="control-label">Telephone *</label>
                      <input type="email" class="form-control" />
                    </div>
                    <div class="col-md-3 form-group">
                      <label class="control-label">Mobile *</label>
                      <input type="email" class="form-control" />
                    </div>
                    <div class="col-md-3 form-group">
                      <label class="control-label">Department</label>
                      <input type="email" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card card-primary card-outline card-tabs">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-2 pl-4">
                      <div class="timesheet_create_tit">
                        <h2 class="pb-2">Address</h2>
                      </div>
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <label class="control-label">Address Line 1</label>
                          <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                          <label class="control-label">Address Line 2</label>
                          <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                          <label class="control-label">Town/City</label>
                          <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                          <label class="control-label">Country</label>
                          <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                          <label class="control-label">Postcode</label>
                          <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                          <label class="control-label">Country</label>
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--TAB 02 -->
            <div
              class="tab-pane fade"
              id="custom-content-below-advance"
              role="tabpanel"
              aria-labelledby="custom-content-below-advance-tab"
            >
              <div
                class="panel panel-border panel-primary"
                style="border-top: 3px solid #009ada"
              >
                <a
                  data-toggle="collapse"
                  href="#tagsPanel"
                  aria-expanded="false"
                  class="collapsed"
                >
                  <div class="panel-heading">
                    <h4 class="panel-title">TAGS</h4>
                  </div>
                </a>
                <div id="tagsPanel" class="panel-collapse collapse active show">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Value</th>
                            <th>Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr id="filterRow_0">
                            <td
                              style="
                                text-align: left;
                                vertical-align: top;
                                width: 15%;
                              "
                            >
                              <input
                                type="text"
                                name=""
                                value=""
                                id=""
                                class="form-control"
                              />
                            </td>
                            <td
                              style="
                                text-align: left;
                                vertical-align: top;
                                width: 15%;
                              "
                            >
                              <input
                                type="text"
                                name=""
                                value=""
                                id=""
                                class="form-control"
                              />
                            </td>
                            <td
                              style="
                                text-align: left;
                                vertical-align: top;
                                width: 15%;
                              "
                            >
                              <input
                                type="text"
                                name=""
                                value=""
                                id=""
                                class="form-control"
                              />
                            </td>
                            <td style="width: 2%">
                              <a href="" onclick="clearFilter(0);"
                                ><i class="fa fa-trash text-danger"></i
                              ></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <button
                          name="addFilter"
                          class="btn btn-primary waves-effect waves-light"
                          type="button"
                          value="Add Filter"
                          onclick="newFilter();"
                        >
                          Add Tag
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
