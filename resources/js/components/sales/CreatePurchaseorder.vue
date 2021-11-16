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
#file-upload-btn {
  position: absolute;
  font-size: 50px;
  opacity: 0;
  right: 0;
  top: 0;
}
</style>

<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2>Purchase Orders</h2>
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
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class="card-body">
                      <div id="accordion">
                        <div
                          id="collapseOne"
                          class="panel-collapse collapse in collapse show"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >PO Number /Project Code
                                  <a
                                    href="javascript:void(0);"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="PO NUMBER Enter the PO number Example: PO123456"
                                    ><span
                                      class="badge badge-primary badge-tooltip"
                                      ><small>?</small></span
                                    ></a
                                  ></label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append"></div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Client *
                                  <a
                                    href="javascript:void(0);"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="CLIENT Choose the client."
                                    ><span
                                      class="badge badge-primary badge-tooltip"
                                      ><small>?</small></span
                                    ></a
                                  ></label
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
                                  >Description
                                  <a
                                    href="javascript:void(0);"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="DESCRIPTION Enter a description for the PO Example: For time and expenses."
                                    ><span
                                      class="badge badge-primary badge-tooltip"
                                      ><small>?</small></span
                                    ></a
                                  ></label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append"></div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Invoice Date</label
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
                                          btn btn-primary btn-sm
                                          dropdown-toggle
                                        "
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                      >
                                        Options
                                      </button>
                                      <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton"
                                      >
                                        <a class="dropdown-item" href="#"
                                          >Today</a
                                        >
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
                                  >Amount
                                  <a
                                    href="javascript:void(0);"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="AMOUNT Enter an amount if needed. This will limit the total invoice value that can be used on the PO."
                                    ><span
                                      class="badge badge-primary badge-tooltip"
                                      ><small>?</small></span
                                    ></a
                                  ></label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append"></div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Shift/Expense Start Date</label
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
                                          btn btn-primary btn-sm
                                          dropdown-toggle
                                        "
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                      >
                                        Options
                                      </button>
                                      <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton"
                                      >
                                        <a class="dropdown-item" href="#"
                                          >Today</a
                                        >
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
                                  >Hours
                                  <a
                                    href="javascript:void(0);"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="HOURS Enter an hours limit if needed. This will limit the total timesheet duration that can be used on the PO."
                                    ><span
                                      class="badge badge-primary badge-tooltip"
                                      ><small>?</small></span
                                    ></a
                                  ></label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append"></div>
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
                                  <label
                                    class="custom-control-label"
                                    for="customCheck1"
                                    >Active</label
                                  >
                                </div>
                              </div>
                            </div>
                            <br />
                            <div class="row">
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Paper Upload (Max size 5MB)</label
                                >
                                <span>
                                  <input
                                    type="file"
                                    style="visibility: hidden; width: 1px"
                                    id="${multipartFilePath}"
                                    name="${multipartFilePath}"
                                    onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"
                                  />
                                  <!-- Chrome security returns 'C:\fakepath\'  -->
                                  <input
                                    class="btn btn-sm"
                                    style="
                                      background-color: #6254b2 !important;
                                      color: white;
                                    "
                                    type="button"
                                    value="Upload"
                                    onclick="$(this).parent().find('input[type=file]').click();"
                                  />
                                  <!-- on button click fire the file click event -->
                                  &nbsp;
                                  <span class="badge badge-important"></span>
                                </span>
                                <button
                                  type="button"
                                  class="btn btn-danger btn-sm"
                                >
                                  Delete
                                </button>
                              </div>
                            </div>
                            <br />
                            <div class="row">
                              <div class="col-lg-6">
                                <button
                                  type="button"
                                  class="btn btn-primary btn-sm"
                                >
                                  Save
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- </div>-->
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
