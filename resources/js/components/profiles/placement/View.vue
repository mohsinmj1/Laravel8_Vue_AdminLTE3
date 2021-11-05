<style>
.dropdown-menu > li > a {
    padding: 6px 20px;
}

.dropdown-menu > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
}
</style>
<template>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Placement Search </h2>
                </div>
            </div>
            <div class="panel-group panel-group-joined" id="filter-panel" style="border-top:3px solid #009ada">
                <div class="panel panel-border panel-primary">
                    <a data-toggle="collapse" data-parent="#filter-panel" href="#collapseOne" class=""
                       aria-expanded="true">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="fa fa-search"></i> Search Options
                            </h4>
                        </div>
                    </a>
                    <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" style="">
                        <div class="panel-body">
                            <div class="bg-white pb-4">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                        <li class="nav-item" style="width:33.33%">
                                            <a class="nav-link active" id="custom-content-below-home-tab"
                                               data-toggle="pill" href="#custom-content-below-home" role="tab"
                                               aria-controls="custom-content-below-home" aria-selected="true">Main</a>
                                        </li>
                                        <li class="nav-item" style="width:33.33%">
                                            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill"
                                               href="#custom-content-below-profile" role="tab"
                                               aria-controls="custom-content-below-profile" aria-selected="false">Financial</a>
                                        </li>
                                        <li class="nav-item" style="width:33.33%">
                                            <a class="nav-link" id="custom-content-below-messages-tab"
                                               data-toggle="pill" href="#custom-content-below-messages" role="tab"
                                               aria-controls="custom-content-below-messages" aria-selected="false">Data
                                                Ranges</a>
                                        </li>

                                    </ul>
                                    <br>
                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <div class="tab-pane fade active show" id="custom-content-below-home"
                                             role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="placementItrisId">Placement
                                                            Ref</label>
                                                        <input type="text" format="2" label="Placement Ref"
                                                               class="form-control form-control-sm" value="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="jobTitle">Job Title</label>
                                                        <input type="text" format="2" label="Job Title" name="jobTitle"
                                                               size="20" id="jobTitle"
                                                               class="form-control form-control-sm" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Client </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Manager </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Provider </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Worker</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Consultant </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Status (Date filters will
                                                        overide this)</label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                            <option value="All">All</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Perm Placement </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Payroll</label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Weekly paid</option>
                                                            <option value="Inactive">Weekly</option>
                                                            <option value="All">Weekly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Client Site </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Project Code</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Project Reference</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary fa-icon" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Validated</label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Weekly paid</option>
                                                            <option value="Inactive">Weekly</option>
                                                            <option value="All">Weekly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                                <a class="btn btn-default  waves-light" role="button">Clear</a>
                                            </div>
                                            <!---------1st tab end ----->
                                        </div>
                                        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel"
                                             aria-labelledby="custom-content-below-profile-tab">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label"
                                                               for="placementItrisId">Sales Sector</label>
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label"
                                                               for="jobTitle">Purchase Sector</label>
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Sales Branch </label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Purchase Branch </label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Sales Location </label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Sales Location</label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Sales Division </label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Purchase Division</label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Sales Department </label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Purchase Dept</label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Sales Project </label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Purchase Project</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                               placeholder="Search">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="client" class="d-block mb-1">Sales Cost Centre</label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="client"
                                                           class="d-block mb-1">Purchase Cost Centre</label>
                                                    <div class="input-group">
                                                        <select name="placementStatus" id="placementStatus"
                                                                class="form-control input-sm null" onchange="">
                                                            <option value="Active">Choose</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                                <a class="btn btn-default  waves-light" role="button">Clear</a>
                                            </div>
                                            <!-------- 2nd tab end ----->
                                        </div>
                                        <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel"
                                             aria-labelledby="custom-content-below-messages-tab">
                                            <div class="col-sm-">
                                                <div class="form-group">
                                                    <label class="control-label">Start Date</label>
                                                    <div class="input-daterange input-group">

                                                        <input id="startDate_start_X" name="fromStartDate_X" value=""
                                                               type="text" class="bsDP form-control input-sm"
                                                               data-date-start-date="" data-date-end-date=""
                                                               placeholder="dd/MM/yyyy">
                                                        <span
                                                            class="input-group-addon bg-primary b-0 text-white">to</span>
                                                        <input id="startDate_end_X" name="toStartDate_X" value=""
                                                               type="text" class="bsDP form-control input-sm"
                                                               data-date-start-date="" data-date-end-date=""
                                                               placeholder="dd/MM/yyyy">

                                                        <input id="startDate_start" name="fromStartDate" value=""
                                                               type="hidden">
                                                        <input id="startDate_end" name="toStartDate" value=""
                                                               type="hidden">

                                                        <div class="input-group-btn">
                                                            <button type="button"
                                                                    class="btn waves-effect waves-light btn-primary dropdown-toggle input-sm"
                                                                    data-toggle="dropdown"
                                                                    style="overflow: hidden; position: relative;"
                                                                    aria-expanded="false">Options <span
                                                                class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dr-today" id="startDate_todayRange"
                                                                       href="#">Today</a></li>
                                                                <li><a class="dr-yesterday"
                                                                       id="startDate_yesterdayRange"
                                                                       href="#">Yesterday</a></li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-last7" id="startDate_7daysRange"
                                                                       href="#">Last 7 Days</a></li>
                                                                <li><a class="dr-last30" id="startDate_30daysRange"
                                                                       href="#">Last 30 Days</a></li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-thisweek" id="startDate_thisWeekRange"
                                                                       href="#">This Week</a></li>
                                                                <li><a class="dr-lastweek" id="startDate_lastWeekRange"
                                                                       href="#">Last Week</a></li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-thismonth"
                                                                       id="startDate_thisMonthRange"
                                                                       href="#">This Month</a></li>
                                                                <li><a class="dr-lastmonth"
                                                                       id="startDate_lastMonthRange"
                                                                       href="#">Last Month</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-">
                                                <div class="form-group">
                                                    <label class="control-label">End Date</label>
                                                    <div class="input-daterange input-group">

                                                        <input id="endDate_start_X" name="fromEndDate_X" value=""
                                                               type="text" class="bsDP form-control input-sm"
                                                               data-date-start-date="" data-date-end-date=""
                                                               placeholder="dd/MM/yyyy">
                                                        <span
                                                            class="input-group-addon bg-primary b-0 text-white">to</span>
                                                        <input id="endDate_end_X" name="toEndDate_X" value=""
                                                               type="text" class="bsDP form-control input-sm"
                                                               data-date-start-date="" data-date-end-date=""
                                                               placeholder="dd/MM/yyyy">

                                                        <input id="endDate_start" name="fromEndDate" value=""
                                                               type="hidden">
                                                        <input id="endDate_end" name="toEndDate" value="" type="hidden">

                                                        <div class="input-group-btn">
                                                            <button type="button"
                                                                    class="btn waves-effect waves-light btn-primary dropdown-toggle input-sm"
                                                                    data-toggle="dropdown"
                                                                    style="overflow: hidden; position: relative;"
                                                                    aria-expanded="false">Options <span
                                                                class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dr-today" id="endDate_todayRange"
                                                                       href="#">Today</a></li>
                                                                <li><a class="dr-yesterday" id="endDate_yesterdayRange"
                                                                       href="#">Yesterday</a></li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-last7" id="endDate_7daysRange"
                                                                       href="#">Last 7 Days</a></li>
                                                                <li><a class="dr-last30" id="endDate_30daysRange"
                                                                       href="#">Last 30 Days</a></li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-thisweek" id="endDate_thisWeekRange"
                                                                       href="#">This Week</a></li>
                                                                <li><a class="dr-lastweek" id="endDate_lastWeekRange"
                                                                       href="#">Last Week</a></li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-thismonth" id="endDate_thisMonthRange"
                                                                       href="#">This Month</a></li>
                                                                <li><a class="dr-lastmonth" id="endDate_lastMonthRange"
                                                                       href="#">Last Month</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-">
                                                <div class="form-group">
                                                    <label class="control-label">Created Date</label>
                                                    <div class="input-daterange input-group">

                                                        <input id="createdDate_start_X" name="fromCreatedDate_X"
                                                               value="" type="text" class="bsDP form-control input-sm"
                                                               data-date-start-date="" data-date-end-date=""
                                                               placeholder="dd/MM/yyyy">
                                                        <span
                                                            class="input-group-addon bg-primary b-0 text-white">to</span>
                                                        <input id="createdDate_end_X" name="toCreatedDate_X" value=""
                                                               type="text" class="bsDP form-control input-sm"
                                                               data-date-start-date="" data-date-end-date=""
                                                               placeholder="dd/MM/yyyy">

                                                        <input id="createdDate_start" name="fromCreatedDate" value=""
                                                               type="hidden">
                                                        <input id="createdDate_end" name="toCreatedDate" value=""
                                                               type="hidden">

                                                        <div class="input-group-btn">
                                                            <button type="button"
                                                                    class="btn waves-effect waves-light btn-primary dropdown-toggle input-sm"
                                                                    data-toggle="dropdown"
                                                                    style="overflow: hidden; position: relative;">
                                                                Options <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dr-today" id="createdDate_todayRange"
                                                                       href="#">Today</a></li>
                                                                <li><a class="dr-yesterday"
                                                                       id="createdDate_yesterdayRange" href="#">Yesterday</a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-last7" id="createdDate_7daysRange"
                                                                       href="#">Last 7 Days</a></li>
                                                                <li><a class="dr-last30" id="createdDate_30daysRange"
                                                                       href="#">Last 30 Days</a></li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-thisweek"
                                                                       id="createdDate_thisWeekRange"
                                                                       href="#">This Week</a></li>
                                                                <li><a class="dr-lastweek"
                                                                       id="createdDate_lastWeekRange"
                                                                       href="#">Last Week</a></li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-thismonth"
                                                                       id="createdDate_thisMonthRange" href="#">This
                                                                    Month</a>
                                                                </li>
                                                                <li><a class="dr-lastmonth"
                                                                       id="createdDate_lastMonthRange" href="#">Last
                                                                    Month</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-">
                                                <div class="form-group">
                                                    <label class="control-label">Modified Date</label>
                                                    <div class="input-daterange input-group">

                                                        <input id="modifiedDate_start_X" name="fromModifiedDate_X"
                                                               value="" type="text" class="bsDP form-control input-sm"
                                                               data-date-start-date="" data-date-end-date=""
                                                               placeholder="dd/MM/yyyy">
                                                        <span
                                                            class="input-group-addon bg-primary b-0 text-white">to</span>
                                                        <input id="modifiedDate_end_X" name="toModifiedDate_X" value=""
                                                               type="text" class="bsDP form-control input-sm"
                                                               data-date-start-date="" data-date-end-date=""
                                                               placeholder="dd/MM/yyyy">

                                                        <input id="modifiedDate_start" name="fromModifiedDate" value=""
                                                               type="hidden">
                                                        <input id="modifiedDate_end" name="toModifiedDate" value=""
                                                               type="hidden">

                                                        <div class="input-group-btn">
                                                            <button type="button"
                                                                    class="btn waves-effect waves-light btn-primary dropdown-toggle input-sm"
                                                                    data-toggle="dropdown"
                                                                    style="overflow: hidden; position: relative;"
                                                                    aria-expanded="false">Options <span
                                                                class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dr-today" id="modifiedDate_todayRange"
                                                                       href="#">Today</a></li>
                                                                <li><a class="dr-yesterday"
                                                                       id="modifiedDate_yesterdayRange" href="#">Yesterday</a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-last7" id="modifiedDate_7daysRange"
                                                                       href="#">Last 7 Days</a></li>
                                                                <li><a class="dr-last30" id="modifiedDate_30daysRange"
                                                                       href="#">Last 30 Days</a></li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-thisweek"
                                                                       id="modifiedDate_thisWeekRange" href="#">This
                                                                    Week</a>
                                                                </li>
                                                                <li><a class="dr-lastweek"
                                                                       id="modifiedDate_lastWeekRange" href="#">Last
                                                                    Week</a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li><a class="dr-thismonth"
                                                                       id="modifiedDate_thisMonthRange" href="#">This
                                                                    Month</a>
                                                                </li>
                                                                <li><a class="dr-lastmonth"
                                                                       id="modifiedDate_lastMonthRange" href="#">Last
                                                                    Month</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                                <a class="btn btn-default  waves-light" role="button">Clear</a>
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

        <div class="row">

            <div class="col-12">

                <div class="card">
                    <div class="card-header" style="background-color:white;">
                        <button type="submit" class="btn btn-light">Choose Column</button>
                        <div class="card-tools">

                            <!-- <button type="button" class="btn btn-sm btn-primary" @click="newModal">
                      <i class="fa fa-plus-square"></i>
                      Add New
                  </button> -->
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Ref</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Job title</th>
                                <th>Contractor</th>
                                <th>Provider</th>
                                <th>Payroll</th>
                                <th>Consultant</th>
                                <th>Client name</th>
                                <th>Client reference ID</th>
                                <th>Manager</th>
                                <th>Created at</th>
                                <th>Modified at</th>
                                <th>Default rate</th>
                                <th>Default rate pay</th>
                                <th>Default rate charge</th>
                                <th>Default rate type</th>
                                <th>Predicted margin</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr role="row" class="odd">
                                <td>
                                    <div class="input-group-append">
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-primary btn-size dropdown-toggle"
                                                type="button"
                                                id="dropdownMenuButton"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            >
                                                Edit
                                            </button>
                                            <div
                                                class="dropdown-menu"
                                                aria-labelledby="dropdownMenuButton"
                                            >
                                                <a class="dropdown-item" href="#">View Summary </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class=" dt-left">Pmt1</td>
                                <td class=" dt-left">21/05/2018</td>
                                <td class=" dt-left">Unknown</td>
                                <td class=" dt-left">Welder</td>
                                <td class=" dt-left">
                                    <a target="_blank"
                                       href="/worker/edit?refCode=ef380a15-2445-4d76-849b-b5770b3cb01b">Alex
                                        Ockendon (Wkr2)</a>
                                </td>
                                <td class=" dt-left">-</td>
                                <td class=" dt-left">-</td>
                                <td class=" dt-left">
                                    <a target="_blank"
                                       href="/user/show/ad4683a3-5987-46a6-8440-3dd16bb85b57?returnTo=/summary/agencySum">Steve
                                        Slater (Con1)</a>
                                </td>
                                <td class=" dt-left">
                                    <a href="/summary/client?ref=12882a5b-4bf6-4fc2-a12d-3863f0454711">Wight
                                        Shipyard Company Limited</a>
                                </td>
                                <td class=" dt-left">Cli2</td>
                                <td class=" dt-left">
                                    <a target="_blank"
                                       href="/user/show/8fa68956-5941-48da-920b-86bedb7677bc?returnTo=/summary/agencySum">Robert
                                        Myram (Mgr2)</a>
                                </td>
                                <td class=" dt-left">25/05/2018 15:05</td>
                                <td class=" dt-left">02/11/2021 11:09</td>
                                <td class=" dt-left">5230 - (Day) - Fabrication &amp; Welding Re-Works Labour</td>
                                <td class=" dt-right">19.00</td>
                                <td class=" dt-right">20.50</td>
                                <td class=" dt-left">hourly</td>
                                <td class=" dt-left">Test</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <pagination :data="products" @pagination-change-page="getResults"></pagination>
                        <button type="submit" class="btn btn-info">Download Report</button>
                        <button type="submit" class="btn btn-info">Download Details Report</button>
                        <button type="submit" class="btn btn-info">CSV</button>

                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
</template>

<script>
import VueTagsInput from '@johmun/vue-tags-input';

export default {
    components: {
        VueTagsInput,
    },
    data() {
        return {
            editmode: false,
            products: {},
            form: new Form({
                id: '',
                category: '',
                name: '',
                description: '',
                tags: [],
                photo: '',
                category_id: '',
                price: '',
                photoUrl: '',
            }),
            categories: [],

            tag: '',
            autocompleteItems: [],
        }
    },
    methods: {

        getResults(page = 1) {

            this.$Progress.start();

            axios.get('/api/draft?page=' + page).then(({data}) => (this.products = data.data));

            this.$Progress.finish();
        },
        loadProducts() {

            // if(this.$gate.isAdmin()){
            axios.get("/api/draft").then(({data}) => (this.products = data.data));
            // }
        },
        loadCategories() {
            axios.get("/api/category/list").then(({data}) => (this.categories = data.data));
        },
        loadTags() {
            axios.get("/api/tag/list").then(response => {
                this.autocompleteItems = response.data.data.map(a => {
                    return {text: a.name, id: a.id};
                });
            }).catch(() => console.warn('Oh. Something went wrong'));
        },
        editModal(product) {
            this.editmode = true;
            this.form.reset();
            $('#addNew').modal('show');
            this.form.fill(product);
        },
        newModal() {
            this.editmode = false;
            this.form.reset();
            $('#addNew').modal('show');
        },
        createProduct() {
            this.$Progress.start();

            this.form.post('api/product')
                .then((data) => {
                    if (data.data.success) {
                        $('#addNew').modal('hide');

                        Toast.fire({
                            icon: 'success',
                            title: data.data.message
                        });
                        this.$Progress.finish();
                        this.loadProducts();

                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Some error occured! Please try again'
                        });

                        this.$Progress.failed();
                    }
                })
                .catch(() => {

                    Toast.fire({
                        icon: 'error',
                        title: 'Some error occured! Please try again'
                    });
                })
        },
        updateProduct() {
            this.$Progress.start();
            this.form.put('api/product/' + this.form.id)
                .then((response) => {
                    // success
                    $('#addNew').modal('hide');
                    Toast.fire({
                        icon: 'success',
                        title: response.data.message
                    });
                    this.$Progress.finish();
                    //  Fire.$emit('AfterCreate');

                    this.loadProducts();
                })
                .catch(() => {
                    this.$Progress.fail();
                });

        },
        deleteProduct(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                // Send request to the server
                if (result.value) {
                    this.form.delete('api/product/' + id).then(() => {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                        // Fire.$emit('AfterCreate');
                        this.loadProducts();
                    }).catch((data) => {
                        Swal.fire("Failed!", data.message, "warning");
                    });
                }
            })
        },

    },
    mounted() {

    },
    created() {
        this.$Progress.start();

        this.loadProducts();
        this.loadCategories();
        this.loadTags();

        this.$Progress.finish();
    },
    filters: {
        truncate: function (text, length, suffix) {
            return text.substring(0, length) + suffix;
        },
    },
    computed: {
        filteredItems() {
            return this.autocompleteItems.filter(i => {
                return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
            });
        },
    },
}
</script>
