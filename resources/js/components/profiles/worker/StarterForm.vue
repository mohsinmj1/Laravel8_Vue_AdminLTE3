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
                                        <div class="p-2 pl-4">
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
