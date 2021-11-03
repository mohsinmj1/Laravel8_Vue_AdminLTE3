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
    color:#009ada;
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
                    <h2>Starter Form </h2>
                </div>
            </div>
            <div class="bg-white pb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary card-outline card-tabs">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="p-2 pl-4 pb-5 pt-3">
                                            <div class="timesheet_create_tit">
                                                <h2 class="pb-2">
                                                    Basic Required Info
                                                </h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8">

                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Next of Kin : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8">

                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Phone No. : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Firstname : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Lastname : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">NI Number : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">D.O.B. : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Gender :</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Marital Status : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="d-block mb-1">Address : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Post Code : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Contact Number : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Email Address : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Nationality : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="d-block mb-1">Passport No. : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="d-block mb-1">UTR Number : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="d-block mb-1">Working Hours : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="d-block mb-1">Country Code</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary card-outline card-tabs">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="p-2 pl-4 pb-5 pt-3">
                                            <div class="timesheet_create_tit">
                                                <h2 class="pb-2">Bank Details</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="d-block mb-1">Bank Name : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="d-block mb-1">Bank Address : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="d-block mb-1">Account No. : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="d-block mb-1">Sort Code : </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm">
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary card-outline card-tabs">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="p-2 pl-4 pb-5 pt-3">
                                            <div class="timesheet_create_tit">
                                                <h2 class="pb-2">Circumstances </h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <p><b>Read carefully and Tick the one box that applies to you </b></p>
                                                    <hr/>
                                                </div>
                                                <div class="col-lg-5">
                                                    <h4 class="pb-1">Student Loans (Advanced in the UK) </h4>
                                                    <p><b>Read carefully and Tick the one box that applies to you </b></p>
                                                    <hr/>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <p>A - This is my first job since April, and I have not been
                                                                receiving taxable Jobseeker’s allowance, Employment
                                                                and Support Allowance or taxable incapacity Benefit
                                                                or a state or occupational pension. </p>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="input-group">
                                                                <input type="checkbox" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <p>B - This is now my only job, but since 6 April I have
                                                                had another job, or have received taxable jobseekers
                                                                allowance, Employment and Support Allowance or
                                                                taxable incapacity Benefit or a state or occupational
                                                                pension. </p>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="input-group">
                                                                <input type="checkbox" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <p>C - I have another job or receive a state or C occupational pension. </p>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="input-group">
                                                                <input type="checkbox" class="form-control form-control-sm">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <p>Scotland or Northern Island when you took out
                                                                your loan, or you lived in England or Wales and
                                                                took out your loan before 1 September 2012,
                                                                you repay your loan according to plan 1.  </p>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="input-group">
                                                                <input type="checkbox" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <p>England or Wales when you took out your loan,
                                                                and you took it out on September 2012 or later,
                                                                you repay your loan according to plan 2</p>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="input-group">
                                                                <input type="checkbox" class="form-control form-control-sm">
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary card-outline card-tabs">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="p-2 pl-4 pb-5 pt-3">
                                            <div class="timesheet_create_tit">
                                                <h2 class="pb-2">&nbsp; </h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="input-group">
                                                        <input type="checkbox" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <p><b>I confirm that this information is correct </b></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 text-center pt-5">
                                                    <button class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp; Save &nbsp;&nbsp;&nbsp;&nbsp;</button>
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
            $('.select2').select2()   ;
//            $('[data-toggle="tooltip"]').tooltip();
            console.log('Creat Timesheet mounted.');
        }
    }
</script>
