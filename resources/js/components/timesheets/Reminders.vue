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
.to{
    height: 29px;
color: white;
background-color: #227DC7;
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
                <h2>Send Reminders  </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p align="justify">Daily timesheet reminders are currently disabled.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p align="justify">Approval reminders are currently disabled.</p>
            </div>
        </div>
        <div class="bg-white pb-4">
            <div class="card-body">                
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade active show" id="custom-content-below-main" role="tabpanel" aria-labelledby="custom-content-below-main-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">                                       
                                                <div class="panel panel-border panel-primary">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <p align="justify">Daily Timesheet Reminder: Any workers who have missing timesheets will be resent the Daily Timesheet Reminder email.</p>
                                                        </div>
                                                    </div>
                                                </div>                                                                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button id="Send daily timesheet reminders" value="Send daily timesheet reminders" class="btn btn-primary btn-block waves-effect w-md waves-light m-b-5" onclick="sendReminder(this)" disabled="" style="opacity: 0.4;">Send daily timesheet reminders</button>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <div class="col-lg-6">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">                                       
                                                <div class="panel panel-border panel-primary">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <p align="justify">Approval Reminder: Any approvers that have timesheets or expenses pending approval will be resent the Approval Reminder.</p>
                                                        </div>
                                                    </div>
                                                </div>                                                                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button id="Send daily timesheet reminders" value="Send daily timesheet reminders" class="btn btn-primary btn-block waves-effect w-md waves-light m-b-5" onclick="sendReminder(this)" disabled="" style="opacity: 0.4;">Send approval reminders</button>
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