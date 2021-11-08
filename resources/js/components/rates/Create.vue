<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2>Create Rate Template</h2>
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
                        <label class="control-label">Pay Currency</label>
                        <select class="form-control control-from-sm">
                          <option>GBP</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Client *</label
                        ><select class="form-control control-from-sm">
                          <option value="">Choose...</option>
                          <option value="">Dell Technologies</option>
                          <option value="">
                            Southampton Marine Services Ltd
                          </option>
                          <option value="">
                            Wight Shipyard Company Limited
                          </option>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Charge Currency</label>
                        <select class="form-control control-from-sm">
                          <option value="">GBP</option>
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

              <div class="card-box">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="table-responsive">
                      <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                            <th>Rate Name</th>
                            <th>Pay</th>

                            <th>Charge</th>
                            <th>Frontend Ref</th>
                            <th>Backend Ref</th>
                            <th>Pay Element</th>
                            <th>Time Pattern</th>
                            <th>Time Period</th>
                            <th>Duration (mins)</th>
                            <th>Timesheet Fields</th>

                            <th>Comment Enabled</th>
                            <th>Selectable by workers</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a href="#">
                                <i class="fa fa-trash text-danger"></i>
                              </a>
                            </td>
                            <td>
                              <a href="#">
                                <i class="fa fa-arrow-down text-success"></i>
                              </a>
                            </td>

                            <td>
                              <input
                                class="form-control form-control-sm"
                                type="text"
                                style="min-width: 170px"
                              />
                            </td>
                            <td>
                              <input
                                class="numeric form-control control-form-sm"
                                id="ratePay0"
                                tabindex="5"
                                type="text"
                                style="min-width: 65px"
                                name="pay"
                                value=""
                              />
                            </td>

                            <td>
                              <input
                                class="numeric form-control control-form-sm"
                                id="rateCharge0"
                                tabindex="6"
                                type="text"
                                style="min-width: 65px"
                                name="charge"
                                value=""
                              />
                            </td>
                            <td>
                              <input
                                class="text form-control control-form-sm"
                                id="ratefRef0"
                                tabindex="7"
                                type="text"
                                style="width: 40px"
                                name="fRef"
                                value=""
                              />
                            </td>
                            <td>
                              <input
                                class="text form-control control-form-sm"
                                id="ratebRef0"
                                tabindex="8"
                                type="text"
                                style="width: 40px"
                                name="bRef"
                              />
                            </td>
                            <td>
                              <select
                                name="payElement"
                                class="form-control control-form-sm"
                                id="ratePayElement0"
                                tabindex="9"
                                style="min-width: 200px"
                                label="No Group"
                              >
                                <option id="payElementIdx1" value="1140292">
                                  Default
                                </option>

                                <option id="payElementIdx2" value="1140293">
                                  Overtime
                                </option>

                                <option id="payElementIdx3" value="1140299">
                                  Placement
                                </option>

                                <optgroup
                                  id="6304"
                                  label=" (Ateca&nbsp;Marine Limited)"
                                >
                                  <option id="payElementIdx4" value="1140323">
                                    Overtime
                                  </option>

                                  <option id="payElementIdx5" value="1140324">
                                    Standard Rate
                                  </option>

                                  <option id="payElementIdx6" value="1205153">
                                    Standard Rate - Night
                                  </option>
                                </optgroup>
                              </select>
                            </td>
                            <td>
                              <select
                                name="timePattern"
                                class="form-control control-form-sm"
                                id="rateTimePattern0"
                                tabindex="10"
                                style="min-width: 150px"
                              >
                                <optgroup label="No Group">
                                  <option value="DEFAULT">Default</option>
                                </optgroup>
                              </select>
                            </td>
                            <td>
                              <select
                                name="timePeriod"
                                id="timePeriod0"
                                class="form-control control-form-sm"
                                style="min-width: 150px"
                                tabindex="11"
                                onchange="changedPeriod(0);"
                              >
                                <option value="60" selected="">Hourly</option>
                                <option value="1440">Fixed</option>
                              </select>
                            </td>
                            <td>
                              <input
                                class="numeric form-control control-form-sm"
                                type="text"
                                style="width: 50px"
                                tabindex="12"
                                name="periodDuration"
                                id="periodDuration0"
                                value="60"
                                disabled="disabled"
                              />
                            </td>
                            <td>
                              <select
                                name="fields"
                                id="fields0"
                                tabindex="13"
                                class="form-control control-form-sm"
                                style="min-width: 110px"
                              >
                                <option value="hours" selected="">
                                  Time &amp; Hours
                                </option>
                                <option value="hoursOnly">Hours Only</option>
                                <option value="decimal" disabled="disabled">
                                  Decimal
                                </option>
                                <option value="tickbox" disabled="disabled">
                                  TickBox
                                </option>
                              </select>
                            </td>

                            <td class="center">
                              <input
                                type="checkbox"
                                tabindex="14"
                                id="commentSelect0"
                                name="commentSelect0"
                                checked="checked"
                              />
                            </td>
                            <td class="center">
                              <input
                                type="checkbox"
                                tabindex="15"
                                id="workerSelect0"
                                name="workerSelect0"
                                checked="checked"
                              />
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <a href="#">
                                <i class="fa fa-trash text-danger"></i
                              ></a>
                            </td>
                            <td>
                              <div class="d-flex">
                                <a class="mx-2" href="#">
                                  <i class="fa fa-arrow-up text-success"></i
                                ></a>
                                <a href="#">
                                  <i class="fa fa-arrow-down text-success"></i
                                ></a>
                              </div>
                            </td>
                            <td>
                              <input
                                class="form-control form-control-sm"
                                type="text"
                                style="min-width: 170px"
                              />
                            </td>
                            <td>
                              <input
                                class="form-control control-form-sm"
                                type="text"
                                style="min-width: 65px"
                              />
                            </td>

                            <td>
                              <input
                                class="form-control control-form-sm"
                                type="text"
                                style="min-width: 65px"
                              />
                            </td>
                            <td>
                              <input
                                class="form-control control-form-sm"
                                type="text"
                                style="width: 40px"
                              />
                            </td>
                            <td>
                              <input
                                class="form-control control-form-sm"
                                type="text"
                                style="width: 40px"
                              />
                            </td>
                            <td>
                              <select
                                class="form-control control-form-sm"
                                style="min-width: 200px"
                              >
                                <option>Default</option>
                                <option>Overtime</option>
                                <option>Placement</option>
                                <optgroup>
                                  <option>Overtime</option>
                                  <option>Standard Rate</option>
                                  <option>Standard Rate - Night</option>
                                </optgroup>
                              </select>
                            </td>
                            <td>
                              <select
                                class="form-control control-form-sm"
                                style="min-width: 150px"
                              >
                                <optgroup>
                                  <option>Default</option>
                                </optgroup>
                              </select>
                            </td>
                            <td>
                              <select
                                class="form-control control-form-sm"
                                style="min-width: 150px"
                              >
                                <option>Hourly</option>
                                <option>Fixed</option>
                              </select>
                            </td>
                            <td>
                              <input
                                class="form-control control-form-sm"
                                type="text"
                                style="width: 50px"
                              />
                            </td>
                            <td>
                              <select
                                class="form-control control-form-sm"
                                style="min-width: 110px"
                              >
                                <option>Time &amp; Hours</option>
                                <option>Hours Only</option>
                                <option>Decimal</option>
                                <option>TickBox</option>
                              </select>
                            </td>

                            <td class="center">
                              <input type="checkbox" checked="checked" />
                            </td>
                            <td class="center">
                              <input type="checkbox" />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-sm-12">
                    <button type="button" class="btn btn-primary btn-sm">
                      Add Rate
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm">
                      Save
                    </button>
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