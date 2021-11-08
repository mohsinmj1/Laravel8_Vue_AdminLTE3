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
                    <h2>Notification Settings  </h2>
                </div>
        </div>
        <div class="bg-white pb-4">
            <div class="card-body">               
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade active show" id="custom-content-below-main" role="tabpanel" aria-labelledby="custom-content-below-main-tab">
                        <div class="card card-primary card-outline card-tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-2 pl-4">
                                        <div class="timesheet_create_tit">
                                            <h2 class="pb-2">
                                                Send me a notification when: 
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label">A worker submits a timesheet</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked>
                                                    <label class="custom-control-label">A supplier invoice is uploaded</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label">Contractor/Worker registers in TMS</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked>
                                                    <label class="custom-control-label">Worker submits a timesheet</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label">Worker submits a expense sheet</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked>
                                                    <label class="custom-control-label">Timesheet is approved / rejected</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label">Expense sheet is approved / rejected</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked>
                                                    <label class="custom-control-label">If worker doesnt submit timesheet before cut-off date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label">If manager doesnt approve timesheet before cut-off date</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked>
                                                    <label class="custom-control-label"> If admin doesnt generate invoices for the approved timesheets</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div style="padding-right:10px;margin-left:14px;margin-top:10px">
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
</section>
</template>

<script>   

    export default {
        
        mounted() {
            //Initialize Select2 Elements
            $('.select2').select2();
            $('[data-toggle="tooltip"]').tooltip();
            console.log('Creat Timesheet mounted.');
        }
    }
</script>