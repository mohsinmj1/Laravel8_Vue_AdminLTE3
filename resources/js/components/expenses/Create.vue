<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2>Create Expenses</h2>
        </div>
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="panel-heading">
              <h3 class="panel-title">entering expense instructions</h3>
            </div>

            <div class="panel-body">
              <strong>VAT Registered Contractors</strong> - Please enter the
              <strong>NET</strong> value on your receipts.&nbsp; VAT will be
              added to your claim when your payment is generated.<br />
              <br />
              <strong>Non VAT Registered Contractors</strong> - Please enter the
              <strong>GROSS</strong> value on your receipts in to the
              <strong>NET</strong> field.
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="panel-heading">
              <h3 class="panel-title">Select Placement</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                  <label for="placementRef" class="control-label"
                    >Placement</label
                  >
                  <select class="form-control form-control-sm">
                    <option>Select a placement</option>
                    <option>
                      Pmt257 - Test Role (Client: Wight Shipyard Company
                      Limited) (Manager: Test Account Manager)
                    </option>
                  </select>
                </div>
                <div class="col-sm-6 d-flex">
                  <div class="ml-auto">
                    <label class="control-label">Period:</label>
                    <select class="form-control form-control-sm">
                      <option>Select a Period</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="panel-heading">
              <h3 class="panel-title">Expense Claim</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-8 mb-3">
                  <label class="control-label">Description</label>
                  <input class="form-control form-control-sm" />
                </div>
              </div>
              <div class="row m-0">
                <form v-on:submit.prevent="onSubmit">
                  <table class="table table-responsive table-hover">
                    <thead>
                      <tr>
                        <th>Category</th>
                        <th>Receipt Date</th>
                        <th>Description</th>
                        <th>Units</th>
                        <th>Unit Net Rate</th>
                        <th>Net</th>
                        <th>Sales Tax Rate</th>
                        <th>Sales Tax</th>
                        <th>Gross</th>
                        <th>Currency</th>
                        <th>Receipt</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <select class="form-control form-control-sm">
                            <option>Select a Category</option>
                          </select>
                        </td>
                        <td>
                          <input
                            class="form-control form-control-sm"
                            type="date"
                          />
                        </td>
                        <td>
                          <input
                            class="form-control form-control-sm"
                            type="text"
                          />
                        </td>
                        <td>
                          <input
                            class="form-control form-control-sm"
                            type="text"
                          />
                        </td>
                        <td>
                          <input
                            class="form-control form-control-sm"
                            type="text"
                          />
                        </td>
                        <td>
                          <input
                            class="form-control form-control-sm"
                            type="text"
                          />
                        </td>
                        <td>
                          <input
                            class="form-control form-control-sm"
                            type="text"
                          />
                        </td>
                        <td>
                          <input
                            class="form-control form-control-sm"
                            type="text"
                          />
                        </td>
                        <td>
                          <input
                            class="form-control form-control-sm"
                            type="text"
                          />
                        </td>
                        <td>
                          <select class="form-control form-control-sm">
                            <option>GBP</option>
                          </select>
                        </td>
                        <td>
                          <div class="fileupload btn btn-sm btn-primary">
                            <span class="d-flex align-items-center text-light">
                              <i class="fa fa-file-upload"></i>Upload</span
                            >
                            <input type="file" class="upload" />
                          </div>
                        </td>
                        <td><i class="fa fa-copy fa-lg text-primary"></i></td>
                        <td><i class="fa fa-trash fa-lg text-danger"></i></td>
                      </tr>
                    </tbody>
                    <div class="mt-2">
                      <input
                        type="submit"
                        value="Add Row"
                        class="btn btn-primary btn-sm mx-2"
                      />
                    </div>
                  </table>
                  <div class="d-flex">
                    <input
                      type="submit"
                      value="Cancel"
                      class="btn btn-danger btn-sm mx-2"
                    />

                    <input
                      type="submit"
                      value="Save"
                      class="btn btn-primary btn-sm mx-2"
                    />

                    <div class="ml-auto">
                      <button class="btn btn-sm btn-dark">
                        Copy a previous expense claim
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="card card-primary card-outline">
            <div class="panel-heading">
              <h3 class="panel-title">Paper Upload</h3>
            </div>
            <div class="panel-body">
              <div class="section group">
                <div class="col">
                  <div class="form-group">
                    <label class="control-label">Upload</label>
                    <div class="input-group mb-3">
                      <div class="fileupload btn btn-primary btn-sm">
                        <span class="text-light">
                          <i class="fa fa-file-upload"></i>Upload</span
                        >
                        <input class="upload" type="file" />
                      </div>
                      <div class="fileupload btn btn-danger btn-sm mx-2">
                        <span class="text-ligt">
                          <i class="fa fa-trash"></i>Delete</span
                        >
                        <input class="upload" type="" />
                      </div>
                    </div>
                    <!-- The global progress bar -->
                    <div id="paper_progress" class="progress progress-md">
                      <div class="progress-bar progress-bar-purple"></div>
                    </div>
                    <!-- The container for the uploaded files -->
                    <div class="files"><p></p></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div
            id="mileage"
            class="panel panel-border panel-primary"
            style="display: none"
          >
            <div class="panel-heading">
              <h3 class="panel-title">Mileage</h3>
            </div>
            <div class="panel-body">
              <table class="table table-condensed">
                <tbody>
                  <tr>
                    <td>Standard Rate Mileage Limit:</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>Standard Rate Miles Claimed:</td>
                    <td id="milesClaimed"></td>
                  </tr>
                  <tr>
                    <td>Standard Rate Miles Remaining:</td>
                    <td id="milesRemaining"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>


<style>
.fileupload {
  overflow: hidden;
  position: relative;
}
.fileupload input.upload {
  cursor: pointer;
  filter: alpha(opacity=0);
  font-size: 20px;
  margin: 0;
  opacity: 0;
  padding: 0;
  position: absolute;
  right: 0;
  top: 0;
}
.btn-purple {
  background-color: #7266ba !important;
  border: 1px solid #7266ba !important;
}
</style>