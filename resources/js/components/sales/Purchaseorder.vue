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
            <div class="col-lg-6">               
                <h2>Purchase Orders </h2>
            </div>
            <div class="col-lg-6" style="text-align:right">
                <button class="btn btn-primary"><router-link style="color:white;text-decoration: none" to="/sales/createpurchaseorder">Create Purchase Order</router-link></button>
            </div>
        </div>
        <div class="bg-white pb-4">
            <div class="card-body">       
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade active show" id="custom-content-below-main" role="tabpanel" aria-labelledby="custom-content-below-main-tab">
                        <div class ="row">
                            <div class="col-md-12">
                                <div class="card card-primary card-outline card-tabs">
                                        <div class="p-2 pl-4">
                                            <a data-toggle="collapse" style="text-decoration: none !important;" data-parent="#accordion" href="#collapseOne">
                                                <div class="timesheet_create_tit">
                                                    <h2 class="pb-2">
                                                        <i class="fa fa-search"></i> Search Options
                                                    </h2>
                                                </div>
                                            </a>  
                                        </div>                                      
                                        <div class="card-body">
                                            <div id="accordion">                                                               
                                                <div id="collapseOne"  class="panel-collapse collapse in collapse show">
                                                    <div class="card-body">
                                                        <div class ="row">
                                                            <div class="col-lg-6">
                                                                <label for="client" class="d-block mb-1">Reference</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control form-control-sm">
                                                                    <div class="input-group-append">
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>     
                                                            <div class="col-lg-6">
                                                                <label for="client" class="d-block mb-1">Amount</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control form-control-sm" style="text-align: center;">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text to" id="validationTooltipUsernamePrepend">to</span>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-sm" style="text-align: center;">                                    
                                                                </div>                               
                                                            </div>                          
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="client" class="d-block mb-1">Description</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control form-control-sm">
                                                                    <div class="input-group-append">
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>   
                                                            <div class="col-lg-6">
                                                                <label for="client" class="d-block mb-1">Start Date</label>
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
                                                                    <input type="text" class="form-control form-control-sm" placeholder="Search this blog">
                                                                    <div class="input-group-append">
                                                                    <button class="btn btn-primary fa-icon" type="button">
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="client" class="d-block mb-1">End Date</label>
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
                                                                <label for="client" class="d-block mb-1">Status</label>
                                                                <select class="form-control select2">                                    
                                                                    <option value="1">Active</option>
                                                                    <option value="2">Inactive</option>
                                                                    <option value="3">All</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="client" class="d-block mb-1">Sheet Start Date</label>
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
                                                                <label for="client" class="d-block mb-1">Tracked By</label>
                                                                <select class="form-control select2">                                    
                                                                    <option value="1">All</option>
                                                                    <option value="2">Amount</option>
                                                                    <option value="3">Hours</option>
                                                                    <option value="4">Dates</option>
                                                                    <option value="5">None</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="client" class="d-block mb-1">Sheet End Date</label>
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
                                                        <br>
                                                        <div class="row">
                                                            <div style="padding-right:10px;padding-left:12px">
                                                                <button class="btn btn-success" type="submit">
                                                                    Search
                                                                </button>
                                                            </div>     
                                                            <div style="padding-right:10px">
                                                                <button class="btn btn-primary" type="submit">
                                                                    Reset All
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
            $('.select2').select2()   
            console.log('Creat Timesheet mounted.');
        }
    }
</script>