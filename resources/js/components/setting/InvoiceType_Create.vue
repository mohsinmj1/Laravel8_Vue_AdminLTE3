<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2>Create Invoices Type</h2>
        </div>
      </div>
      <div class="col-lg-12 px-0 mt-3">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <form action="#" method="post">
              <div class="panel panel-border panel-primary">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label" for="name">Name *</label
                        ><input
                          type="text"
                          class="form-control control-from-sm"
                        />
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Status</label>
                        <select class="form-control control-from-sm">
                           <option>Disable</option>
                            <option>Enable</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Order *</label
                        ><select class="form-control control-from-sm">
                          <option value="">Choose...</option>
                          <option value="">1</option>
                          <option value="">
                            2
                          </option>
                          <option value="">
                            3
                          </option>
                        </select>
                      </div>
                    </div>


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Description</label
                        ><input
                          type="text"
                          class="form-control control-from-sm"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </form>
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
    console.log("Creat Timesheet mounted.");
  },
};
</script>