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
          <h2>Apprenticeship Levy</h2>
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
                <div class="col-lg-12">
                  <div class="card card-primary card-outline card-tabs">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-2 pl-4" style="height: 328px">
                          <div class="timesheet_create_tit">
                            <h2 class="pb-2">Calculation Mode</h2>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <span style="color:#E2B888">Warning: Changes will affect prevoius periods</span>
                            </div>    
                             <div class="col-lg-12" style="padding-top:10px">
                              <span style="color:black">Choose the granularity that the apprenticeship levy is applied</span>
                            </div>      
                            <div class="col-lg-12">                              
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Do not apply the apprenticeship levy
                                  </label>
                                </div>                                             
                            </div>      
                            <div class="col-lg-12">                              
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Specify a percentage value for each year
                                  </label>
                                </div>                                             
                            </div>   
                            <div class="col-lg-12">                              
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Specify a percentage value for each month
                                  </label>
                                </div>                                             
                            </div>  
                            <div class="col-lg-12">                              
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Specify a percentage value for each week
                                  </label>
                                </div>                                             
                            </div>     
                            <div class="col-lg-12" style="padding-top:10px">
                              <span style="color:black">Choose which date is used for the calculation</span>
                            </div>      
                            <div class="col-lg-12">                              
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Use the timesheet's end date
                                  </label>
                                </div>                                             
                            </div>      
                            <div class="col-lg-12">                              
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Use the timesheet's exported date
                                  </label>
                                </div>                                             
                            </div> 
                            <div class="col-lg-12" style="padding-top:8px">           
                              <button class="btn btn-success" type="submit">
                                Save
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