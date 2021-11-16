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
</style>

<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2>System Configuration</h2>
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
                <div class="col-lg-4">
                  <div class="card card-primary card-outline card-tabs">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-2 pl-4">
                          <div class="timesheet_create_tit">
                            <h2 class="pb-2">General</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <router-link
                                to="/configuration/apprenticeshipLevy"
                                class="list-group-item"
                              >
                                <p class="mb-0">Apprenticeship Levy</p>
                              </router-link>
                              <router-link
                                to="/configuration/deliveryInvoice"
                                class="list-group-item"
                              >
                                <p class="mb-0">
                                  Manage Types of Delivery for Invoice
                                </p>
                              </router-link>
                              <router-link
                                to="/configuration/InvoicePeriod"
                                class="list-group-item"
                              >
                                <p class="mb-0">Manage Invoice Periods</p>
                              </router-link>
                              <router-link
                                to="/configuration/taxrate"
                                class="list-group-item"
                              >
                                <p class="mb-0">Manage Tax Rates</p>
                              </router-link>
                              <router-link
                                to="/configuration/InvoiceType"
                                class="list-group-item"
                              >
                                <p class="mb-0">Manage Invoice Types</p>
                              </router-link>
                              <router-link
                                to="/configuration/payroll"
                                class="list-group-item"
                              >
                                <p class="mb-0">
                                  Manage payroll/pay Frequencies
                                </p>
                              </router-link>
                              <router-link
                                to="/product/category"
                                class="list-group-item"
                              >
                                <p class="mb-0">Expense Category</p>
                              </router-link>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-primary card-outline card-tabs">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-2 pl-4">
                          <div class="timesheet_create_tit">
                            <h2 class="pb-2">Timesheets</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div
                                class="list-group"
                                style="margin-right: 13px"
                              >
                                <!-- <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/apprenticeshipLevy"
                                  >Rate Templates</a
                                > -->
                                <router-link to="/rates/view">
                                  <p>Rate Template</p>
                                </router-link>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-primary card-outline card-tabs">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-2 pl-4">
                          <div class="timesheet_create_tit">
                            <h2 class="pb-2">System</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div
                                class="list-group"
                                style="margin-right: 13px"
                              >
                                <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/email"
                                  >Email Server Settings</a
                                >
                                <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/menuGenerator/fieldSettings"
                                  >Entity Field Permissions</a
                                >
                                <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/smsOptions"
                                  >SMS Settings</a
                                >
                                 
                                <!--<a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/ssl"
                                  >SSL Certificate</a
                                >-->
                                <!--<a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/security"
                                  >Security Settings</a
                                >-->
                                <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/splitCommissionOptions"
                                  >Split Commission Settings</a
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