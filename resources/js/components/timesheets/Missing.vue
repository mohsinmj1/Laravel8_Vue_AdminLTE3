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
                    <h2>Missing Timesheets </h2>
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
                                                Filters
                                            </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label for="client" class="d-block mb-1">Status</label>
                                                <select class="form-control select2" style="width:100%">                                    
                                                    <option value="ALL">All</option>
                                                    <option value="DRAFT">Draft</option>
                                                    <option value="REJECTED">Rejected</option>
                                                    <option value="SUBMITTED">Unauthorised</option>
                                                    <option value="APPROVED">Approved</option>
                                                    <option value="EXPORTED">Exported</option>
                                                    <option value="APPROVED_OR_EXPORTED">Approved/Exported</option>
                                                    <option value="MISSING">Missing</option>
                                                </select>
                                            </div>                                                                                    
                                        </div>   
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="client" class="d-block mb-1">Period End / Receipt Date</label>
                                                <div class="input-group">
                                                    <input type="date" class="form-control form-control-sm ">
                                                    <div class="input-group-append">
                                                        <span  class="input-group-text to" id="validationTooltipUsernamePrepend">to</span>
                                                    </div>
                                                    <input type="date" class="form-control form-control-sm">
                                                    <div class="input-group-append">
                                                    <div class="dropdown">
                                                            <button class="btn btn-primary btn-size dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Others
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Today</a>
                                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                                <hr>
                                                                <a class="dropdown-item" href="#">Last 7 Days</a>
                                                                <a class="dropdown-item" href="#">Last 30 Days</a>
                                                                <hr>
                                                                <a class="dropdown-item" href="#">This Week</a>
                                                                <a class="dropdown-item" href="#">Last Week</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                           
                                            </div>  
                                            <div class="col-lg-4">
                                                <label for="client" class="d-block mb-1">Submitted Date</label>
                                                <div class="input-group">
                                                    <input type="date" class="form-control form-control-sm ">
                                                    <div class="input-group-append">
                                                        <span  class="input-group-text to" id="validationTooltipUsernamePrepend">to</span>
                                                    </div>
                                                    <input type="date" class="form-control form-control-sm">
                                                    <div class="input-group-append">
                                                    <div class="dropdown">
                                                            <button class="btn btn-primary btn-size dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Others
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Today</a>
                                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                                <hr>
                                                                <a class="dropdown-item" href="#">Last 7 Days</a>
                                                                <a class="dropdown-item" href="#">Last 30 Days</a>
                                                                <hr>
                                                                <a class="dropdown-item" href="#">This Week</a>
                                                                <a class="dropdown-item" href="#">Last Week</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                           
                                            </div>  
                                            <div class="col-lg-4">
                                                <label for="client" class="d-block mb-1">Approved Date</label>
                                                <div class="input-group">
                                                    <input type="date" class="form-control form-control-sm ">
                                                    <div class="input-group-append">
                                                        <span  class="input-group-text to" id="validationTooltipUsernamePrepend">to</span>
                                                    </div>
                                                    <input type="date" class="form-control form-control-sm">
                                                    <div class="input-group-append">
                                                    <div class="dropdown">
                                                            <button class="btn btn-primary btn-size dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Others
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Today</a>
                                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                                <hr>
                                                                <a class="dropdown-item" href="#">Last 7 Days</a>
                                                                <a class="dropdown-item" href="#">Last 30 Days</a>
                                                                <hr>
                                                                <a class="dropdown-item" href="#">This Week</a>
                                                                <a class="dropdown-item" href="#">Last Week</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                           
                                            </div>  
                                        </div>   
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="client" class="d-block mb-1">Client</label>                                
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                    <div class="input-group-append">
                                                    <button class="btn btn-primary fa-icon" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="client" class="d-block mb-1">Manager</label>                                
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                    <div class="input-group-append">
                                                    <button class="btn btn-primary fa-icon" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="client" class="d-block mb-1">Provider</label>                                
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                    <div class="input-group-append">
                                                    <button class="btn btn-primary fa-icon" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="client" class="d-block mb-1">Worker</label>                                
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                    <div class="input-group-append">
                                                    <button class="btn btn-primary fa-icon" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>   
                                        <div class="row">
                                             <div class="col-lg-6">
                                                <label for="client" class="d-block mb-1">Consultant</label>                                
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                    <div class="input-group-append">
                                                    <button class="btn btn-primary fa-icon" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>                                                                                       
                                        </div>     
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="client" class="d-block mb-1">Placement Ref Range</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm ">
                                                    <div class="input-group-append">
                                                        <span  class="input-group-text to" id="validationTooltipUsernamePrepend">to</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm">                                                      
                                                </div>                                           
                                            </div>  
                                            <div class="col-lg-4">
                                                <label for="client" class="d-block mb-1">Project Reference</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm ">
                                                    <div class="input-group-append">
                                                        <span  class="input-group-text to" id="validationTooltipUsernamePrepend">to</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm">                                                      
                                                </div>                                           
                                            </div> 
                                            <div class="col-lg-4">
                                                <label for="client" class="d-block mb-1">Invoice Number</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm ">
                                                    <div class="input-group-append">
                                                        <span  class="input-group-text to" id="validationTooltipUsernamePrepend">to</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm">                                                      
                                                </div>                                           
                                            </div>                                             
                                        </div>
                                        <div class="row" style="margin-top:20px">
                                            <div style="margin-left:30px">
                                                <button class="btn btn-success" type="submit">
                                                    Search
                                                </button>
                                            </div>     
                                            <div style="margin-left:10px">
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