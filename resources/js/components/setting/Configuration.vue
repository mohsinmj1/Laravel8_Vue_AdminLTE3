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
                        <div class="p-2 pl-4" style="height: 350px">
                          <div class="timesheet_create_tit">
                            <h2 class="pb-2">General</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">                                 
                                <a
                                  class="list-group-item"
                                  style="text-decoration: none"                                 
                                  ><router-link to="/settings/apprenticeship">
                                  <p>Apprenticeship Levy</p>
                                </router-link>  </a>                         
                        
                          
                                 <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/deliveryInvoice"
                                  >Manage types of delivery for invoice</a
                                >
                                 <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/InvoicePeriod"
                                  >Manage  invoice periods </a
                                >
                                <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/taxrate"
                                  > Manage tax rates </a
                                >
                                <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/InvoiceType"
                                  > Manage invoice types </a
                                >
                       
                                 <a
                                  class="list-group-item"
                                  style="text-decoration: none"
                                  href="/configuration/payroll"
                                  > Manage payroll/pay frequencies </a
                                >
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