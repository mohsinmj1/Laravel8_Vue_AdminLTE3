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
        <div class="row" style="border-top: 3px solid #009ada" >
    <div class="col-sm-12">
        <div class="panel panel-primary panel-border">
            <div class="panel-heading">
                <h3 class="panel-title">Main Roles</h3>
            </div>

            <div class="panel-body">
                <table id="rolesTable" class="roles table table-striped table-bordered table-condensed compact display nowrap" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="width: 400px; text-align: left;"></th>
                        <th>Create</th>
                        <th>Write</th>
                        <th>Write All</th>
                        <th>Read</th>
                        <th>Read All</th>
                        <th>Delete</th>
                        <th>Adv. Read</th>
                        <th>Adv. Write</th>
                        <th>Switch</th>
                    </tr>
                    </thead>
                    
                        <tbody><tr>
                            <td style="text-align: left;">
                                Dashboard
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_DASHBOARD_READ"><input type="checkbox" name="ROLE_DASHBOARD_READ" checked="checked" value="ROLE_DASHBOARD_READ" id="ROLE_DASHBOARD_READ">
                                            <label for="ROLE_DASHBOARD_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_DASHBOARD_READ_ALL"><input type="checkbox" name="ROLE_DASHBOARD_READ_ALL" value="ROLE_DASHBOARD_READ_ALL" id="ROLE_DASHBOARD_READ_ALL">
                                            <label for="ROLE_DASHBOARD_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Report
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_REPORT_READ"><input type="checkbox" name="ROLE_REPORT_READ" checked="checked" value="ROLE_REPORT_READ" id="ROLE_REPORT_READ">
                                            <label for="ROLE_REPORT_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_REPORT_READ_ALL"><input type="checkbox" name="ROLE_REPORT_READ_ALL" value="ROLE_REPORT_READ_ALL" id="ROLE_REPORT_READ_ALL">
                                            <label for="ROLE_REPORT_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Password
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Administrator
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_ADMINISTRATOR_CREATE"><input type="checkbox" name="ROLE_ADMINISTRATOR_CREATE" value="ROLE_ADMINISTRATOR_CREATE" id="ROLE_ADMINISTRATOR_CREATE">
                                            <label for="ROLE_ADMINISTRATOR_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_ADMINISTRATOR_WRITE"><input type="checkbox" name="ROLE_ADMINISTRATOR_WRITE" value="ROLE_ADMINISTRATOR_WRITE" id="ROLE_ADMINISTRATOR_WRITE">
                                            <label for="ROLE_ADMINISTRATOR_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_ADMINISTRATOR_WRITE_ALL"><input type="checkbox" name="ROLE_ADMINISTRATOR_WRITE_ALL" value="ROLE_ADMINISTRATOR_WRITE_ALL" id="ROLE_ADMINISTRATOR_WRITE_ALL" disabled="disabled">
                                            <label for="ROLE_ADMINISTRATOR_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_ADMINISTRATOR_READ"><input type="checkbox" name="ROLE_ADMINISTRATOR_READ" value="ROLE_ADMINISTRATOR_READ" id="ROLE_ADMINISTRATOR_READ">
                                            <label for="ROLE_ADMINISTRATOR_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_ADMINISTRATOR_READ_ALL"><input type="checkbox" name="ROLE_ADMINISTRATOR_READ_ALL" value="ROLE_ADMINISTRATOR_READ_ALL" id="ROLE_ADMINISTRATOR_READ_ALL" disabled="disabled">
                                            <label for="ROLE_ADMINISTRATOR_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_ADMINISTRATOR_DELETE"><input type="checkbox" name="ROLE_ADMINISTRATOR_DELETE" value="ROLE_ADMINISTRATOR_DELETE" id="ROLE_ADMINISTRATOR_DELETE">
                                            <label for="ROLE_ADMINISTRATOR_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_ADMINISTRATOR_GET_PASSWORD"><input type="checkbox" name="ROLE_ADMINISTRATOR_GET_PASSWORD" value="ROLE_ADMINISTRATOR_GET_PASSWORD" id="ROLE_ADMINISTRATOR_GET_PASSWORD">
                                            <label for="ROLE_ADMINISTRATOR_GET_PASSWORD"></label>
                                        </div>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Client
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CLIENT_CREATE"><input type="checkbox" name="ROLE_CLIENT_CREATE" value="ROLE_CLIENT_CREATE" id="ROLE_CLIENT_CREATE">
                                            <label for="ROLE_CLIENT_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CLIENT_WRITE"><input type="checkbox" name="ROLE_CLIENT_WRITE" value="ROLE_CLIENT_WRITE" id="ROLE_CLIENT_WRITE">
                                            <label for="ROLE_CLIENT_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CLIENT_WRITE_ALL"><input type="checkbox" name="ROLE_CLIENT_WRITE_ALL" value="ROLE_CLIENT_WRITE_ALL" id="ROLE_CLIENT_WRITE_ALL">
                                            <label for="ROLE_CLIENT_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CLIENT_READ"><input type="checkbox" name="ROLE_CLIENT_READ" checked="checked" value="ROLE_CLIENT_READ" id="ROLE_CLIENT_READ">
                                            <label for="ROLE_CLIENT_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CLIENT_READ_ALL"><input type="checkbox" name="ROLE_CLIENT_READ_ALL" value="ROLE_CLIENT_READ_ALL" id="ROLE_CLIENT_READ_ALL">
                                            <label for="ROLE_CLIENT_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CLIENT_DELETE"><input type="checkbox" name="ROLE_CLIENT_DELETE" value="ROLE_CLIENT_DELETE" id="ROLE_CLIENT_DELETE">
                                            <label for="ROLE_CLIENT_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Consultant
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CONSULTANT_CREATE"><input type="checkbox" name="ROLE_CONSULTANT_CREATE" value="ROLE_CONSULTANT_CREATE" id="ROLE_CONSULTANT_CREATE">
                                            <label for="ROLE_CONSULTANT_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CONSULTANT_WRITE"><input type="checkbox" name="ROLE_CONSULTANT_WRITE" value="ROLE_CONSULTANT_WRITE" id="ROLE_CONSULTANT_WRITE">
                                            <label for="ROLE_CONSULTANT_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CONSULTANT_WRITE_ALL"><input type="checkbox" name="ROLE_CONSULTANT_WRITE_ALL" value="ROLE_CONSULTANT_WRITE_ALL" id="ROLE_CONSULTANT_WRITE_ALL">
                                            <label for="ROLE_CONSULTANT_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CONSULTANT_READ"><input type="checkbox" name="ROLE_CONSULTANT_READ" value="ROLE_CONSULTANT_READ" id="ROLE_CONSULTANT_READ">
                                            <label for="ROLE_CONSULTANT_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CONSULTANT_READ_ALL"><input type="checkbox" name="ROLE_CONSULTANT_READ_ALL" value="ROLE_CONSULTANT_READ_ALL" id="ROLE_CONSULTANT_READ_ALL">
                                            <label for="ROLE_CONSULTANT_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CONSULTANT_DELETE"><input type="checkbox" name="ROLE_CONSULTANT_DELETE" value="ROLE_CONSULTANT_DELETE" id="ROLE_CONSULTANT_DELETE">
                                            <label for="ROLE_CONSULTANT_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_CONSULTANT_GET_PASSWORD"><input type="checkbox" name="ROLE_CONSULTANT_GET_PASSWORD" value="ROLE_CONSULTANT_GET_PASSWORD" id="ROLE_CONSULTANT_GET_PASSWORD">
                                            <label for="ROLE_CONSULTANT_GET_PASSWORD"></label>
                                        </div>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Invoice
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_INVOICE_CREATE"><input type="checkbox" name="ROLE_INVOICE_CREATE" value="ROLE_INVOICE_CREATE" id="ROLE_INVOICE_CREATE">
                                            <label for="ROLE_INVOICE_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_INVOICE_WRITE"><input type="checkbox" name="ROLE_INVOICE_WRITE" value="ROLE_INVOICE_WRITE" id="ROLE_INVOICE_WRITE">
                                            <label for="ROLE_INVOICE_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_INVOICE_READ"><input type="checkbox" name="ROLE_INVOICE_READ" checked="checked" value="ROLE_INVOICE_READ" id="ROLE_INVOICE_READ">
                                            <label for="ROLE_INVOICE_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_INVOICE_DELETE"><input type="checkbox" name="ROLE_INVOICE_DELETE" value="ROLE_INVOICE_DELETE" id="ROLE_INVOICE_DELETE">
                                            <label for="ROLE_INVOICE_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Ltd. Company Provider
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_LTD_CO_PROVIDER_CREATE"><input type="checkbox" name="ROLE_LTD_CO_PROVIDER_CREATE" value="ROLE_LTD_CO_PROVIDER_CREATE" id="ROLE_LTD_CO_PROVIDER_CREATE">
                                            <label for="ROLE_LTD_CO_PROVIDER_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_LTD_CO_PROVIDER_WRITE"><input type="checkbox" name="ROLE_LTD_CO_PROVIDER_WRITE" value="ROLE_LTD_CO_PROVIDER_WRITE" id="ROLE_LTD_CO_PROVIDER_WRITE">
                                            <label for="ROLE_LTD_CO_PROVIDER_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_LTD_CO_PROVIDER_READ"><input type="checkbox" name="ROLE_LTD_CO_PROVIDER_READ" value="ROLE_LTD_CO_PROVIDER_READ" id="ROLE_LTD_CO_PROVIDER_READ">
                                            <label for="ROLE_LTD_CO_PROVIDER_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_LTD_CO_PROVIDER_DELETE"><input type="checkbox" name="ROLE_LTD_CO_PROVIDER_DELETE" value="ROLE_LTD_CO_PROVIDER_DELETE" id="ROLE_LTD_CO_PROVIDER_DELETE">
                                            <label for="ROLE_LTD_CO_PROVIDER_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Ltd. Company User
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_LTD_CO_USER_CREATE"><input type="checkbox" name="ROLE_LTD_CO_USER_CREATE" value="ROLE_LTD_CO_USER_CREATE" id="ROLE_LTD_CO_USER_CREATE">
                                            <label for="ROLE_LTD_CO_USER_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_LTD_CO_USER_WRITE"><input type="checkbox" name="ROLE_LTD_CO_USER_WRITE" value="ROLE_LTD_CO_USER_WRITE" id="ROLE_LTD_CO_USER_WRITE">
                                            <label for="ROLE_LTD_CO_USER_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_LTD_CO_USER_READ"><input type="checkbox" name="ROLE_LTD_CO_USER_READ" value="ROLE_LTD_CO_USER_READ" id="ROLE_LTD_CO_USER_READ">
                                            <label for="ROLE_LTD_CO_USER_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_LTD_CO_USER_DELETE"><input type="checkbox" name="ROLE_LTD_CO_USER_DELETE" value="ROLE_LTD_CO_USER_DELETE" id="ROLE_LTD_CO_USER_DELETE">
                                            <label for="ROLE_LTD_CO_USER_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_LTD_CO_USER_GET_PASSWORD"><input type="checkbox" name="ROLE_LTD_CO_USER_GET_PASSWORD" value="ROLE_LTD_CO_USER_GET_PASSWORD" id="ROLE_LTD_CO_USER_GET_PASSWORD">
                                            <label for="ROLE_LTD_CO_USER_GET_PASSWORD"></label>
                                        </div>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Manager
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_MANAGER_CREATE"><input type="checkbox" name="ROLE_MANAGER_CREATE" value="ROLE_MANAGER_CREATE" id="ROLE_MANAGER_CREATE">
                                            <label for="ROLE_MANAGER_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_MANAGER_WRITE"><input type="checkbox" name="ROLE_MANAGER_WRITE" checked="checked" value="ROLE_MANAGER_WRITE" id="ROLE_MANAGER_WRITE">
                                            <label for="ROLE_MANAGER_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_MANAGER_WRITE_ALL"><input type="checkbox" name="ROLE_MANAGER_WRITE_ALL" value="ROLE_MANAGER_WRITE_ALL" id="ROLE_MANAGER_WRITE_ALL">
                                            <label for="ROLE_MANAGER_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_MANAGER_READ"><input type="checkbox" name="ROLE_MANAGER_READ" checked="checked" value="ROLE_MANAGER_READ" id="ROLE_MANAGER_READ">
                                            <label for="ROLE_MANAGER_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_MANAGER_READ_ALL"><input type="checkbox" name="ROLE_MANAGER_READ_ALL" value="ROLE_MANAGER_READ_ALL" id="ROLE_MANAGER_READ_ALL">
                                            <label for="ROLE_MANAGER_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_MANAGER_DELETE"><input type="checkbox" name="ROLE_MANAGER_DELETE" value="ROLE_MANAGER_DELETE" id="ROLE_MANAGER_DELETE">
                                            <label for="ROLE_MANAGER_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_MANAGER_GET_PASSWORD"><input type="checkbox" name="ROLE_MANAGER_GET_PASSWORD" value="ROLE_MANAGER_GET_PASSWORD" id="ROLE_MANAGER_GET_PASSWORD">
                                            <label for="ROLE_MANAGER_GET_PASSWORD"></label>
                                        </div>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Payslip
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PAYSLIP_CREATE"><input type="checkbox" name="ROLE_PAYSLIP_CREATE" value="ROLE_PAYSLIP_CREATE" id="ROLE_PAYSLIP_CREATE">
                                            <label for="ROLE_PAYSLIP_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PAYSLIP_WRITE"><input type="checkbox" name="ROLE_PAYSLIP_WRITE" value="ROLE_PAYSLIP_WRITE" id="ROLE_PAYSLIP_WRITE">
                                            <label for="ROLE_PAYSLIP_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PAYSLIP_READ"><input type="checkbox" name="ROLE_PAYSLIP_READ" value="ROLE_PAYSLIP_READ" id="ROLE_PAYSLIP_READ">
                                            <label for="ROLE_PAYSLIP_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PAYSLIP_DELETE"><input type="checkbox" name="ROLE_PAYSLIP_DELETE" value="ROLE_PAYSLIP_DELETE" id="ROLE_PAYSLIP_DELETE">
                                            <label for="ROLE_PAYSLIP_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Payment Element
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PAY_ELEMENT_CREATE"><input type="checkbox" name="ROLE_PAY_ELEMENT_CREATE" value="ROLE_PAY_ELEMENT_CREATE" id="ROLE_PAY_ELEMENT_CREATE">
                                            <label for="ROLE_PAY_ELEMENT_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PAY_ELEMENT_WRITE"><input type="checkbox" name="ROLE_PAY_ELEMENT_WRITE" value="ROLE_PAY_ELEMENT_WRITE" id="ROLE_PAY_ELEMENT_WRITE">
                                            <label for="ROLE_PAY_ELEMENT_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PAY_ELEMENT_READ"><input type="checkbox" name="ROLE_PAY_ELEMENT_READ" checked="checked" value="ROLE_PAY_ELEMENT_READ" id="ROLE_PAY_ELEMENT_READ">
                                            <label for="ROLE_PAY_ELEMENT_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PAY_ELEMENT_DELETE"><input type="checkbox" name="ROLE_PAY_ELEMENT_DELETE" value="ROLE_PAY_ELEMENT_DELETE" id="ROLE_PAY_ELEMENT_DELETE">
                                            <label for="ROLE_PAY_ELEMENT_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Placement
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PLACEMENT_CREATE"><input type="checkbox" name="ROLE_PLACEMENT_CREATE" value="ROLE_PLACEMENT_CREATE" id="ROLE_PLACEMENT_CREATE">
                                            <label for="ROLE_PLACEMENT_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PLACEMENT_WRITE"><input type="checkbox" name="ROLE_PLACEMENT_WRITE" value="ROLE_PLACEMENT_WRITE" id="ROLE_PLACEMENT_WRITE">
                                            <label for="ROLE_PLACEMENT_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PLACEMENT_WRITE_ALL"><input type="checkbox" name="ROLE_PLACEMENT_WRITE_ALL" value="ROLE_PLACEMENT_WRITE_ALL" id="ROLE_PLACEMENT_WRITE_ALL">
                                            <label for="ROLE_PLACEMENT_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PLACEMENT_READ"><input type="checkbox" name="ROLE_PLACEMENT_READ" checked="checked" value="ROLE_PLACEMENT_READ" id="ROLE_PLACEMENT_READ">
                                            <label for="ROLE_PLACEMENT_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PLACEMENT_READ_ALL"><input type="checkbox" name="ROLE_PLACEMENT_READ_ALL" value="ROLE_PLACEMENT_READ_ALL" id="ROLE_PLACEMENT_READ_ALL">
                                            <label for="ROLE_PLACEMENT_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PLACEMENT_DELETE"><input type="checkbox" name="ROLE_PLACEMENT_DELETE" value="ROLE_PLACEMENT_DELETE" id="ROLE_PLACEMENT_DELETE">
                                            <label for="ROLE_PLACEMENT_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Rating
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_RATING_CREATE"><input type="checkbox" name="ROLE_RATING_CREATE" value="ROLE_RATING_CREATE" id="ROLE_RATING_CREATE" disabled="disabled">
                                            <label for="ROLE_RATING_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_RATING_WRITE"><input type="checkbox" name="ROLE_RATING_WRITE" value="ROLE_RATING_WRITE" id="ROLE_RATING_WRITE" disabled="disabled">
                                            <label for="ROLE_RATING_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_RATING_READ"><input type="checkbox" name="ROLE_RATING_READ" value="ROLE_RATING_READ" id="ROLE_RATING_READ" disabled="disabled">
                                            <label for="ROLE_RATING_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_RATING_READ_ALL"><input type="checkbox" name="ROLE_RATING_READ_ALL" value="ROLE_RATING_READ_ALL" id="ROLE_RATING_READ_ALL" disabled="disabled">
                                            <label for="ROLE_RATING_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_RATING_DELETE"><input type="checkbox" name="ROLE_RATING_DELETE" value="ROLE_RATING_DELETE" id="ROLE_RATING_DELETE" disabled="disabled">
                                            <label for="ROLE_RATING_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Timesheet
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TIMESHEET_CREATE"><input type="checkbox" name="ROLE_TIMESHEET_CREATE" value="ROLE_TIMESHEET_CREATE" id="ROLE_TIMESHEET_CREATE">
                                            <label for="ROLE_TIMESHEET_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TIMESHEET_WRITE"><input type="checkbox" name="ROLE_TIMESHEET_WRITE" checked="checked" value="ROLE_TIMESHEET_WRITE" id="ROLE_TIMESHEET_WRITE">
                                            <label for="ROLE_TIMESHEET_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TIMESHEET_WRITE_ALL"><input type="checkbox" name="ROLE_TIMESHEET_WRITE_ALL" value="ROLE_TIMESHEET_WRITE_ALL" id="ROLE_TIMESHEET_WRITE_ALL">
                                            <label for="ROLE_TIMESHEET_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TIMESHEET_READ_ALL"><input type="checkbox" name="ROLE_TIMESHEET_READ_ALL" value="ROLE_TIMESHEET_READ_ALL" id="ROLE_TIMESHEET_READ_ALL">
                                            <label for="ROLE_TIMESHEET_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TIMESHEET_DELETE"><input type="checkbox" name="ROLE_TIMESHEET_DELETE" value="ROLE_TIMESHEET_DELETE" id="ROLE_TIMESHEET_DELETE">
                                            <label for="ROLE_TIMESHEET_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Time Pattern
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TIME_PATTERN_CREATE"><input type="checkbox" name="ROLE_TIME_PATTERN_CREATE" value="ROLE_TIME_PATTERN_CREATE" id="ROLE_TIME_PATTERN_CREATE">
                                            <label for="ROLE_TIME_PATTERN_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TIME_PATTERN_WRITE"><input type="checkbox" name="ROLE_TIME_PATTERN_WRITE" value="ROLE_TIME_PATTERN_WRITE" id="ROLE_TIME_PATTERN_WRITE">
                                            <label for="ROLE_TIME_PATTERN_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TIME_PATTERN_READ"><input type="checkbox" name="ROLE_TIME_PATTERN_READ" checked="checked" value="ROLE_TIME_PATTERN_READ" id="ROLE_TIME_PATTERN_READ">
                                            <label for="ROLE_TIME_PATTERN_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TIME_PATTERN_DELETE"><input type="checkbox" name="ROLE_TIME_PATTERN_DELETE" value="ROLE_TIME_PATTERN_DELETE" id="ROLE_TIME_PATTERN_DELETE">
                                            <label for="ROLE_TIME_PATTERN_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Worker
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_WORKER_CREATE"><input type="checkbox" name="ROLE_WORKER_CREATE" value="ROLE_WORKER_CREATE" id="ROLE_WORKER_CREATE">
                                            <label for="ROLE_WORKER_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_WORKER_WRITE"><input type="checkbox" name="ROLE_WORKER_WRITE" value="ROLE_WORKER_WRITE" id="ROLE_WORKER_WRITE">
                                            <label for="ROLE_WORKER_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_WORKER_WRITE_ALL"><input type="checkbox" name="ROLE_WORKER_WRITE_ALL" value="ROLE_WORKER_WRITE_ALL" id="ROLE_WORKER_WRITE_ALL">
                                            <label for="ROLE_WORKER_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_WORKER_READ"><input type="checkbox" name="ROLE_WORKER_READ" checked="checked" value="ROLE_WORKER_READ" id="ROLE_WORKER_READ">
                                            <label for="ROLE_WORKER_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_WORKER_READ_ALL"><input type="checkbox" name="ROLE_WORKER_READ_ALL" value="ROLE_WORKER_READ_ALL" id="ROLE_WORKER_READ_ALL">
                                            <label for="ROLE_WORKER_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_WORKER_DELETE"><input type="checkbox" name="ROLE_WORKER_DELETE" value="ROLE_WORKER_DELETE" id="ROLE_WORKER_DELETE">
                                            <label for="ROLE_WORKER_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_WORKER_ADVANCED_READ"><input type="checkbox" name="ROLE_WORKER_ADVANCED_READ" value="ROLE_WORKER_ADVANCED_READ" id="ROLE_WORKER_ADVANCED_READ">
                                            <label for="ROLE_WORKER_ADVANCED_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_WORKER_ADVANCED_WRITE"><input type="checkbox" name="ROLE_WORKER_ADVANCED_WRITE" value="ROLE_WORKER_ADVANCED_WRITE" id="ROLE_WORKER_ADVANCED_WRITE">
                                            <label for="ROLE_WORKER_ADVANCED_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_WORKER_GET_PASSWORD"><input type="checkbox" name="ROLE_WORKER_GET_PASSWORD" value="ROLE_WORKER_GET_PASSWORD" id="ROLE_WORKER_GET_PASSWORD">
                                            <label for="ROLE_WORKER_GET_PASSWORD"></label>
                                        </div>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Agency
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_AGENCY_WRITE"><input type="checkbox" name="ROLE_AGENCY_WRITE" value="ROLE_AGENCY_WRITE" id="ROLE_AGENCY_WRITE">
                                            <label for="ROLE_AGENCY_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_AGENCY_READ"><input type="checkbox" name="ROLE_AGENCY_READ" checked="checked" value="ROLE_AGENCY_READ" id="ROLE_AGENCY_READ">
                                            <label for="ROLE_AGENCY_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                View Pay Rate
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_RATE_PAY_READ"><input type="checkbox" name="ROLE_RATE_PAY_READ" value="ROLE_RATE_PAY_READ" id="ROLE_RATE_PAY_READ">
                                            <label for="ROLE_RATE_PAY_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                View Charge Rate
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_RATE_CHARGE_READ"><input type="checkbox" name="ROLE_RATE_CHARGE_READ" checked="checked" value="ROLE_RATE_CHARGE_READ" id="ROLE_RATE_CHARGE_READ">
                                            <label for="ROLE_RATE_CHARGE_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Partial Shifts
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PARTIAL_SHIFTS_WRITE"><input type="checkbox" name="ROLE_PARTIAL_SHIFTS_WRITE" value="ROLE_PARTIAL_SHIFTS_WRITE" id="ROLE_PARTIAL_SHIFTS_WRITE" disabled="disabled">
                                            <label for="ROLE_PARTIAL_SHIFTS_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_PARTIAL_SHIFTS_WRITE_ALL"><input type="checkbox" name="ROLE_PARTIAL_SHIFTS_WRITE_ALL" value="ROLE_PARTIAL_SHIFTS_WRITE_ALL" id="ROLE_PARTIAL_SHIFTS_WRITE_ALL" disabled="disabled">
                                            <label for="ROLE_PARTIAL_SHIFTS_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                View Onsite Workers
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_ONSITE_READ"><input type="checkbox" name="ROLE_ONSITE_READ" value="ROLE_ONSITE_READ" id="ROLE_ONSITE_READ" disabled="disabled">
                                            <label for="ROLE_ONSITE_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_ONSITE_READ_ALL"><input type="checkbox" name="ROLE_ONSITE_READ_ALL" value="ROLE_ONSITE_READ_ALL" id="ROLE_ONSITE_READ_ALL" disabled="disabled">
                                            <label for="ROLE_ONSITE_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Expense
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_EXPENSE_CREATE"><input type="checkbox" name="ROLE_EXPENSE_CREATE" value="ROLE_EXPENSE_CREATE" id="ROLE_EXPENSE_CREATE" disabled="disabled">
                                            <label for="ROLE_EXPENSE_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_EXPENSE_WRITE"><input type="checkbox" name="ROLE_EXPENSE_WRITE" checked="checked" value="ROLE_EXPENSE_WRITE" id="ROLE_EXPENSE_WRITE">
                                            <label for="ROLE_EXPENSE_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_EXPENSE_WRITE_ALL"><input type="checkbox" name="ROLE_EXPENSE_WRITE_ALL" value="ROLE_EXPENSE_WRITE_ALL" id="ROLE_EXPENSE_WRITE_ALL" disabled="disabled">
                                            <label for="ROLE_EXPENSE_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_EXPENSE_READ_ALL"><input type="checkbox" name="ROLE_EXPENSE_READ_ALL" value="ROLE_EXPENSE_READ_ALL" id="ROLE_EXPENSE_READ_ALL">
                                            <label for="ROLE_EXPENSE_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_EXPENSE_DELETE"><input type="checkbox" name="ROLE_EXPENSE_DELETE" value="ROLE_EXPENSE_DELETE" id="ROLE_EXPENSE_DELETE">
                                            <label for="ROLE_EXPENSE_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Tag Category
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TAG_CATEGORY_CREATE"><input type="checkbox" name="ROLE_TAG_CATEGORY_CREATE" value="ROLE_TAG_CATEGORY_CREATE" id="ROLE_TAG_CATEGORY_CREATE">
                                            <label for="ROLE_TAG_CATEGORY_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TAG_CATEGORY_WRITE"><input type="checkbox" name="ROLE_TAG_CATEGORY_WRITE" value="ROLE_TAG_CATEGORY_WRITE" id="ROLE_TAG_CATEGORY_WRITE">
                                            <label for="ROLE_TAG_CATEGORY_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_TAG_CATEGORY_READ"><input type="checkbox" name="ROLE_TAG_CATEGORY_READ" checked="checked" value="ROLE_TAG_CATEGORY_READ" id="ROLE_TAG_CATEGORY_READ">
                                            <label for="ROLE_TAG_CATEGORY_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Document Management
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_DMS_CREATE"><input type="checkbox" name="ROLE_DMS_CREATE" value="ROLE_DMS_CREATE" id="ROLE_DMS_CREATE">
                                            <label for="ROLE_DMS_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_DMS_WRITE"><input type="checkbox" name="ROLE_DMS_WRITE" value="ROLE_DMS_WRITE" id="ROLE_DMS_WRITE">
                                            <label for="ROLE_DMS_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_DMS_READ"><input type="checkbox" name="ROLE_DMS_READ" checked="checked" value="ROLE_DMS_READ" id="ROLE_DMS_READ">
                                            <label for="ROLE_DMS_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_DMS_DELETE"><input type="checkbox" name="ROLE_DMS_DELETE" value="ROLE_DMS_DELETE" id="ROLE_DMS_DELETE">
                                            <label for="ROLE_DMS_DELETE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Online Contracts
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_OLC_CREATE"><input type="checkbox" name="ROLE_OLC_CREATE" value="ROLE_OLC_CREATE" id="ROLE_OLC_CREATE" disabled="disabled">
                                            <label for="ROLE_OLC_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_OLC_WRITE"><input type="checkbox" name="ROLE_OLC_WRITE" value="ROLE_OLC_WRITE" id="ROLE_OLC_WRITE" disabled="disabled">
                                            <label for="ROLE_OLC_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_OLC_WRITE_ALL"><input type="checkbox" name="ROLE_OLC_WRITE_ALL" value="ROLE_OLC_WRITE_ALL" id="ROLE_OLC_WRITE_ALL" disabled="disabled">
                                            <label for="ROLE_OLC_WRITE_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_OLC_READ"><input type="checkbox" name="ROLE_OLC_READ" value="ROLE_OLC_READ" id="ROLE_OLC_READ" disabled="disabled">
                                            <label for="ROLE_OLC_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_OLC_READ_ALL"><input type="checkbox" name="ROLE_OLC_READ_ALL" value="ROLE_OLC_READ_ALL" id="ROLE_OLC_READ_ALL" disabled="disabled">
                                            <label for="ROLE_OLC_READ_ALL"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Contract Manager
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Exchange Rates
                            </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_EXCHANGE_RATE_CREATE"><input type="checkbox" name="ROLE_EXCHANGE_RATE_CREATE" value="ROLE_EXCHANGE_RATE_CREATE" id="ROLE_EXCHANGE_RATE_CREATE">
                                            <label for="ROLE_EXCHANGE_RATE_CREATE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_EXCHANGE_RATE_WRITE"><input type="checkbox" name="ROLE_EXCHANGE_RATE_WRITE" value="ROLE_EXCHANGE_RATE_WRITE" id="ROLE_EXCHANGE_RATE_WRITE">
                                            <label for="ROLE_EXCHANGE_RATE_WRITE"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                        <div class="checkbox checkbox-primary">
                                            <input type="hidden" name="_ROLE_EXCHANGE_RATE_READ"><input type="checkbox" name="ROLE_EXCHANGE_RATE_READ" value="ROLE_EXCHANGE_RATE_READ" id="ROLE_EXCHANGE_RATE_READ">
                                            <label for="ROLE_EXCHANGE_RATE_READ"></label>
                                        </div>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Enter AWR Comparator
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Access AWR
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Export Unpaid Timesheets
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Mark an employee as a leaver
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Export invoices
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Approve supplier invoices
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Approve user details changes
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Approve holiday claims
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Custom Report create
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Custom Report run
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Standard Report run
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Data Controller
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                        <tr>
                            <td style="text-align: left;">
                                Delete Payments
                            </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                                
                                <td>
                                    
                                </td>
                            
                        </tr>
                    
                </tbody></table>
            </div>
        </div>
    </div>
</div>
<!-- /////////////// -->
<div class="row" style="border-top: 3px solid #009ada">
    <div class="col-sm-12">
        <div class="panel panel-primary panel-border">
            <div class="panel-heading">
                <h3 class="panel-title">Additional Timesheet Roles</h3>
            </div>

            <div class="panel-body">
                <table class="roles table table-striped table-bordered table-condensed compact display nowrap" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Web Entry</th>
                        <th>Terminal</th>
                        <th>Drafts</th>
                        <th>Submitted</th>
                        <th>Approved</th>
                        <th>Rejected</th>
                        <th>Completed</th>
                        <th>Uninvoiced</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_0"><input type="checkbox" name="addTimesheetRoles_0" value="ROLE_TIMESHEET_ENTRY_WEB" id="addTimesheetRoles_0">
                                        <label for="addTimesheetRoles_0"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_1"><input type="checkbox" name="addTimesheetRoles_1" value="ROLE_TIMESHEET_ENTRY_TERMINAL" id="addTimesheetRoles_1" disabled="disabled">
                                        <label for="addTimesheetRoles_1"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_2"><input type="checkbox" name="addTimesheetRoles_2" value="ROLE_TIMESHEET_READ_DRAFT" id="addTimesheetRoles_2">
                                        <label for="addTimesheetRoles_2"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_3"><input type="checkbox" name="addTimesheetRoles_3" checked="checked" value="ROLE_TIMESHEET_READ_SUBMITTED" id="addTimesheetRoles_3">
                                        <label for="addTimesheetRoles_3"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_4"><input type="checkbox" name="addTimesheetRoles_4" checked="checked" value="ROLE_TIMESHEET_READ_APPROVED" id="addTimesheetRoles_4">
                                        <label for="addTimesheetRoles_4"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_5"><input type="checkbox" name="addTimesheetRoles_5" checked="checked" value="ROLE_TIMESHEET_READ_REJECTED" id="addTimesheetRoles_5">
                                        <label for="addTimesheetRoles_5"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_6"><input type="checkbox" name="addTimesheetRoles_6" checked="checked" value="ROLE_TIMESHEET_READ_EXPORTED" id="addTimesheetRoles_6">
                                        <label for="addTimesheetRoles_6"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_7"><input type="checkbox" name="addTimesheetRoles_7" value="ROLE_TIMESHEET_READ_UNINVOICED" id="addTimesheetRoles_7">
                                        <label for="addTimesheetRoles_7"></label>
                                    </div>
                                </td>
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th>SMS</th>
                        <th>QR Approval</th>
                        <th>Export</th>
                        <th>Bulk Entry</th>
                        <th>Approve</th>
                        <th>Bulk Approve</th>
                        <th>Paper Entry</th>
                        <th>Adjust Shifts</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_8"><input type="checkbox" name="addTimesheetRoles_8" value="ROLE_TIMESHEET_SMS" id="addTimesheetRoles_8" disabled="disabled">
                                        <label for="addTimesheetRoles_8"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_9"><input type="checkbox" name="addTimesheetRoles_9" value="ROLE_TIMESHEET_FAXBACK" id="addTimesheetRoles_9" disabled="disabled">
                                        <label for="addTimesheetRoles_9"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_10"><input type="checkbox" name="addTimesheetRoles_10" value="ROLE_TIMESHEET_EXPORT" id="addTimesheetRoles_10">
                                        <label for="addTimesheetRoles_10"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_11"><input type="checkbox" name="addTimesheetRoles_11" value="ROLE_TIMESHEET_BULK_ENTRY" id="addTimesheetRoles_11">
                                        <label for="addTimesheetRoles_11"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_12"><input type="checkbox" name="addTimesheetRoles_12" checked="checked" value="ROLE_TIMESHEET_APPROVE" id="addTimesheetRoles_12" disabled="disabled">
                                        <label for="addTimesheetRoles_12"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_13"><input type="checkbox" name="addTimesheetRoles_13" checked="checked" value="ROLE_TIMESHEET_BULK_APPROVE" id="addTimesheetRoles_13" disabled="disabled">
                                        <label for="addTimesheetRoles_13"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_14"><input type="checkbox" name="addTimesheetRoles_14" value="ROLE_TIMESHEET_PAPER_ENTRY" id="addTimesheetRoles_14" disabled="disabled">
                                        <label for="addTimesheetRoles_14"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addTimesheetRoles_15"><input type="checkbox" name="addTimesheetRoles_15" value="ROLE_TIMESHEET_ADJUST_SHIFTS" id="addTimesheetRoles_15" disabled="disabled">
                                        <label for="addTimesheetRoles_15"></label>
                                    </div>
                                </td>
                            
                        
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- ////////////// -->
<div class="row" style="border-top: 3px solid #009ada">
    <div class="col-sm-12">
        <div class="panel panel-primary panel-border">
            <div class="panel-heading">
                <h3 class="panel-title">Additional Expense Roles</h3>
            </div>

            <div class="panel-body">
                <table class="roles table table-striped table-bordered table-condensed compact display nowrap" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Web Entry</th>
                        <th>Submitted</th>
                        <th>Approved</th>
                        <th>Rejected</th>
                        <th>Completed</th>
                        <th>Uninvoiced</th>
                        <th>Export</th>
                        <th>Bulk Entry</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_0"><input type="checkbox" name="addExpenseRoles_0" value="ROLE_EXPENSE_ENTRY_WEB" id="addExpenseRoles_0">
                                        <label for="addExpenseRoles_0"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_1"><input type="checkbox" name="addExpenseRoles_1" checked="checked" value="ROLE_EXPENSE_READ_SUBMITTED" id="addExpenseRoles_1">
                                        <label for="addExpenseRoles_1"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_2"><input type="checkbox" name="addExpenseRoles_2" checked="checked" value="ROLE_EXPENSE_READ_APPROVED" id="addExpenseRoles_2">
                                        <label for="addExpenseRoles_2"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_3"><input type="checkbox" name="addExpenseRoles_3" checked="checked" value="ROLE_EXPENSE_READ_REJECTED" id="addExpenseRoles_3">
                                        <label for="addExpenseRoles_3"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_4"><input type="checkbox" name="addExpenseRoles_4" checked="checked" value="ROLE_EXPENSE_READ_EXPORTED" id="addExpenseRoles_4">
                                        <label for="addExpenseRoles_4"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_5"><input type="checkbox" name="addExpenseRoles_5" value="ROLE_EXPENSE_READ_UNINVOICED" id="addExpenseRoles_5">
                                        <label for="addExpenseRoles_5"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_6"><input type="checkbox" name="addExpenseRoles_6" value="ROLE_EXPENSE_EXPORT" id="addExpenseRoles_6">
                                        <label for="addExpenseRoles_6"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_7"><input type="checkbox" name="addExpenseRoles_7" value="ROLE_EXPENSE_BULK_ENTRY" id="addExpenseRoles_7">
                                        <label for="addExpenseRoles_7"></label>
                                    </div>
                                </td>
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th>Approve</th>
                        <th>Bulk Approve</th>
                        <th>Paper Entry</th>
                        <th>Legacy Module</th>
                        <th width="80">&nbsp;</th>
                        <th width="80">&nbsp;</th>
                        <th width="80">&nbsp;</th>
                        <th width="80">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_8"><input type="checkbox" name="addExpenseRoles_8" checked="checked" value="ROLE_EXPENSE_APPROVE" id="addExpenseRoles_8">
                                        <label for="addExpenseRoles_8"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_9"><input type="checkbox" name="addExpenseRoles_9" checked="checked" value="ROLE_EXPENSE_BULK_APPROVE" id="addExpenseRoles_9" disabled="disabled">
                                        <label for="addExpenseRoles_9"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_10"><input type="checkbox" name="addExpenseRoles_10" value="ROLE_EXPENSE_PAPER_ENTRY" id="addExpenseRoles_10" disabled="disabled">
                                        <label for="addExpenseRoles_10"></label>
                                    </div>
                                </td>
                            
                        
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_addExpenseRoles_11"><input type="checkbox" name="addExpenseRoles_11" value="ROLE_EXPENSE_LEGACY_MODULE" id="addExpenseRoles_11" disabled="disabled">
                                        <label for="addExpenseRoles_11"></label>
                                    </div>
                                </td>
                            
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ///////////////// -->
<div class="row" style="border-top: 3px solid #009ada">
        <div class="col-sm-12">
            <div class="panel panel-primary panel-border">
                <div class="panel-heading">
                    <h3 class="panel-title">Additional Client Manager Roles</h3>
                </div>

                <div class="panel-body">
                    <table class="roles table table-striped table-bordered table-condensed compact display nowrap" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Contract Manager</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr><td>
                            <div class="checkbox checkbox-primary">
                                <input type="hidden" name="_clientContractManager"><input type="checkbox" name="clientContractManager" value="ROLE_CONTRACT_MANAGER" id="clientContractManager">
                                <label for="clientContractManager"></label>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////// -->
    <div class="row" style="border-top: 3px solid #009ada">
        <div class="col-sm-12">
            <div class="panel panel-primary panel-border">
                <div class="panel-heading">
                    <h3 class="panel-title">Additional Agency Roles</h3>
                </div>

                <div class="panel-body">
                    <table class="roles table table-striped table-bordered table-condensed compact display nowrap" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            
                                <th>Switch Agency</th>
                                <th>Can Export Unpaid Timesheets</th>
                            
                            
                                <th>Make Leaver</th>

                            
                            
                                <th>Export Invoice</th>
                                <th>Approve Supplier Invoice</th>
                                <th>Approve Details Changes</th>
                            
                            
                            
                                <th>Data Controller</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_agencySwitch"><input type="checkbox" name="agencySwitch" value="ROLE_AGENCY_SWITCH" id="agencySwitch" disabled="disabled">
                                        <label for="agencySwitch"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_exportUnpaid"><input type="checkbox" name="exportUnpaid" value="ROLE_EXPORT_UNPAID" id="exportUnpaid" disabled="disabled">
                                        <label for="exportUnpaid"></label>
                                    </div>
                                </td>

                            
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_makeLeaver"><input type="checkbox" name="makeLeaver" value="ROLE_MAKE_LEAVER" id="makeLeaver" disabled="disabled">
                                        <label for="makeLeaver"></label>
                                    </div>
                                </td>

                            
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_invoiceExport"><input type="checkbox" name="invoiceExport" value="ROLE_INVOICE_EXPORT" id="invoiceExport">
                                        <label for="invoiceExport"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_approveSupplierInvoice"><input type="checkbox" name="approveSupplierInvoice" value="ROLE_APPROVE_SUPPLIER_INVOICE" id="approveSupplierInvoice">
                                        <label for="approveSupplierInvoice"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_approveDetailsChange"><input type="checkbox" name="approveDetailsChange" value="ROLE_APPROVE_DETAILS_CHANGE" id="approveDetailsChange">
                                        <label for="approveDetailsChange"></label>
                                    </div>
                                </td>
                            
                            
                            
                            
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="hidden" name="_dataSubjectRequest"><input type="checkbox" name="dataSubjectRequest" value="ROLE_DATA_SUBJECT_REQUEST" id="dataSubjectRequest" disabled="disabled">
                                        <label for="dataSubjectRequest"></label>
                                    </div>
                                </td>

                            
                            
                        </tr>
                        </tbody>
                        <thead>
                        <tr>
                            
                                <th>Delete Payments</th>
                            
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        
                            <td>
                                <div class="checkbox checkbox-primary">
                                    <input type="hidden" name="_deletePayments"><input type="checkbox" name="deletePayments" value="ROLE_DELETE_PAYMENTS" id="deletePayments">
                                    <label for="deletePayments"></label>
                                </div>
                            </td>
                        
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ///////////////////// -->
    <br>
    <div class="row">
    <div class="col-sm-12">
        <input type="hidden" name="refCode" value="17366662-ab0f-4178-9ef8-1969418dc4a9">
        <input type="submit" value="Save" name="save" class="buttonBarButton preventDoubleClick btn btn-primary" id="save">
    </div>
</div>
<br>
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
