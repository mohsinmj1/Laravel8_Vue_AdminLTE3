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
        <div class="col-lg-12">
          <h2>Create Consultant</h2>
        </div>
      </div>
      <div class="bg-white pb-4">
        <div class="card-body">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item" style="width: 20%; border-bottom: blue">
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
              <form action="" method="post">
                <div class="card card-primary card-outline card-tabs">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-3 form-group">
                        <label class="control-label">Title</label>
                        <select class="form-control form-control-sm">
                          <option value="" selected>Please Select</option>
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
                        <input
                          type="text"
                          class="form-control form-control-sm"
                        />
                      </div>
                      <div class="col-md-3 form-group">
                        <label class="control-label">Middlename</label>
                        <input
                          type="text"
                          class="form-control form-control-sm"
                        />
                      </div>
                      <div class="col-md-3 form-group">
                        <label class="control-label">Lastname *</label>
                        <input
                          type="text"
                          class="form-control form-control-sm"
                        />
                      </div>
                      <div class="col-md-3 form-group">
                        <label class="control-label">Email *</label>
                        <input
                          type="email"
                          class="form-control form-control-sm"
                        />
                      </div>
                      <div class="col-md-3 align-self-center mt-3">
                        <div class="d-flex align-items-center">
                          <input class="mx-2" type="checkbox" />
                          <label class="mb-0"
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
                        <input
                          type="email"
                          class="form-control form-control-sm"
                        />
                      </div>
                      <div class="col-md-3 form-group">
                        <label class="control-label">Mobile *</label>
                        <input
                          type="email"
                          class="form-control form-control-sm"
                        />
                      </div>
                      <div class="col-md-3 form-group">
                        <label class="control-label">Department</label>
                        <input
                          type="email"
                          class="form-control form-control-sm"
                        />
                      </div>
                      <div class="col-md-3 form-group">
                        <label class="control-label">Team</label>
                        <input
                          type="email"
                          class="form-control form-control-sm"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-primary card-outline py-3">
                  <div class="row m-0">
                    <div class="col-md-12">
                      <h2>Address</h2>
                    </div>
                  </div>
                  <div class="row m-0">
                    <div class="col-md-6 form-group">
                      <label class="control-label">Address Line 1</label>
                      <input type="text" class="form-control form-control-sm" />
                    </div>
                    <div class="col-md-6 form-group">
                      <label class="control-label">Address Line 2</label>
                      <input type="text" class="form-control form-control-sm" />
                    </div>
                    <div class="col-md-6 form-group">
                      <label class="control-label">Town/City</label>
                      <input type="text" class="form-control form-control-sm" />
                    </div>
                    <div class="col-md-6 form-group">
                      <label class="control-label">Country</label>
                      <input type="text" class="form-control form-control-sm" />
                    </div>
                    <div class="col-md-6 form-group">
                      <label class="control-label">Postcode</label>
                      <input type="text" class="form-control form-control-sm" />
                    </div>
                  </div>
                </div>
                <div class="row m-0">
                  <button type="submit" class="btn btn-primary btn-sm">
                    Save
                  </button>
                </div>
              </form>
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
