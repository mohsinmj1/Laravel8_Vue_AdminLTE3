<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2>Timesheet</h2>
        </div>
        <div class="col-lg-12">
          <div class="card card-primary card-outline card-tabs">
            <div class="p-2 pb-4">
              <div class="timesheet_create_tit">
                <h2>SELECT PLACEMENT</h2>
              </div>
              <div class="row mt-2">
                <div class="col-lg-6">
                  <label for="placement" class="d-block mb-1">Placement</label>
                  <input
                    type="text"
                    placeholder="Pmt1 (Wight Shipyard Company Limited) - Alex Ockendon - Welder"
                    class="w-100"
                  />
                </div>
                <div class="col-lg-6">
                  <label for="placement" class="d-block mb-1"
                    >Timesheet Period</label
                  >
                  <input type="date" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white pb-4">
        <div class="row">
          <div class="col-lg-12 mb-2">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link timesheet_color">Placement</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-12 px-4 mt-2 mb-2">
            <div class="row">
              <div class="col-lg-6">
                <div class="card card-primary card-outline card-tabs">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-2 pl-4">
                        <div class="timesheet_create_tit">
                          <h2 class="pb-2">PLACEMENT INFORMATION</h2>
                        </div>
                        <div class="row">
                          <div class="col-lg-5">
                            <h6>Ref Code:</h6>
                            <h6>Job Title:</h6>
                            <h6>Job Description:</h6>
                            <h6>Date Placed:</h6>
                            <h6>Start Date:</h6>
                            <h6>End Date:</h6>
                          </div>
                          <div class="col-lg-7">
                            <h6 class="timesheet_color">Pmt1</h6>
                            <h6>Welder</h6>
                            <h6>Aluminium Welder</h6>
                            <h6>25/05/2018</h6>
                            <h6>21/05/2018</h6>
                            <h6>Unknown</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-primary card-outline card-tabs">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-2 pl-4">
                        <div class="timesheet_create_tit">
                          <h2 class="pb-2">PARTICIPANTS</h2>
                        </div>
                        <div class="row">
                          <div class="col-lg-5">
                            <h6>Agency:</h6>
                            <h6>Worker:</h6>
                            <h6>Payroll:</h6>
                            <h6>Client:</h6>
                            <h6>Manager:</h6>
                            <h6>Consultant:</h6>
                            <h6>Alternative Managers:</h6>
                          </div>
                          <div class="col-lg-7">
                            <h6>Ateca Marine Ltd</h6>
                            <h6 class="timesheet_color">Alex Ockendon</h6>
                            <h6>Weekly (Limited)</h6>
                            <h6 class="timesheet_color">
                              Wight Shipyard Company Limited
                            </h6>
                            <h6 class="timesheet_color">Robert Myram</h6>
                            <h6 class="timesheet_color">Steve Slater</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- toggle -->
          <div class="col-lg-12 px-4">
            <button
              class="btn btn-primary w-100 pt-1 pb-1"
              type="button"
              data-toggle="collapse"
              data-target="#collapseExample"
              aria-expanded="false"
              aria-controls="collapseExample"
            >
              <span><i class="fas fa-chevron-down"></i></span>
              Additional Details
            </button>
            <div class="collapse" id="collapseExample">
              <div class="col-lg-12 mt-1">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card card-primary card-tabs">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="p-2 pl-4">
                            <div class="row">
                              <div class="col-lg-6">
                                <h6>Project Code:</h6>
                                <h6>Client Site:</h6>
                                <h6>Timesheet Approval:</h6>
                                <h6>Chargeable Expense Approval..</h6>
                                <h6>Non-Chargeable Expense A..</h6>
                              </div>
                              <div class="col-lg-6 mt-auto">
                                <h6>Wights Approval (Katie)</h6>
                                <h6>Wights Approval (Katie)</h6>
                                <h6>Agency Consultant Approval</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card card-primary card-tabs">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="p-2 pl-4">
                            <div class="row">
                              <div class="col-lg-5">
                                <h6>Timesheet Duration:</h6>
                                <h6>Timesheet Layout:</h6>
                                <h6>Charge Currency:</h6>
                                <h6>Timesheet Pay Currency:</h6>
                                <h6>Expense Pay Currency:</h6>
                              </div>
                              <div class="col-lg-7">
                                <h6>weekly</h6>
                                <h6>Standard</h6>
                                <h6>GBP</h6>
                                <h6>GBP</h6>
                                <h6>GBP</h6>
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
          <!-- End toggle -->
        </div>
      </div>
      <div class="col-lg-12 px-0 mt-3">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">IMPORTANT TIMESHEET INFORMATION</h3>
          </div>
          <div class="card-body">
            <p class="mb-0">
              Please ensure that your timesheet is submitted by Monday 9:00am
              the following week. The following details must be checked and
              confirmed before submitting:
            </p>
            <ul class="mt-0">
              <li>Your <strong>rates</strong> are correct</li>
              <li>Your <strong>project codes </strong> are correct</li>
              <li>Your <strong> hours </strong>are correct</li>
              <li>The <strong> date range </strong> is correct</li>
              <li>
                The summary at the bottom of the page shows the
                <strong> correct total for your wages </strong>
              </li>
            </ul>
            <p>
              If something is not accurate or you are having any difficulties
              then please speak with your line manager for assistance.
            </p>
            <strong
              >Changes which need to be made after the cut-off time of 9:00am on
              Monday will result in delays in receiving your correct wages,
              please double check all details very carefully before
              submitting.</strong
            >
            <p>Thank you</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 px-0 mt-3">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Timesheet - Not Started</h3>
          </div>
          <div class="card-body">
            <div class="row mt-2">
              <div class="col-lg-6">
                <label for="placement" class="d-block mb-1">Project Code</label>
                <!-- <button class="btn btn-info"@click="showModal">show modal</button> -->

                <input type="text" placeholder="" class="w-100" />
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-lg-2">
                <label for="Date" class="d-block mb-1">Date</label>
              </div>
              <div class="col-lg-2">
                <label for="Rate" class="d-block mb-1">Rate</label>
              </div>
              <div class="col-lg-1">
                <label for="Start" class="d-block mb-1">Start</label>
              </div>
              <div class="col-lg-1">
                <label for="Break" class="d-block mb-1">Break</label>
              </div>
              <div class="col-lg-1">
                <label for="Finish" class="d-block mb-1">Finish</label>
              </div>
              <div class="col-lg-1">
                <label for="Hours" class="d-block mb-1">Hours</label>
              </div>
              <div class="col-lg-2">
                <label for="Unit" class="d-block mb-1">Units</label>
              </div>
              <div class="col-lg-1">
                <label for="Project Code" class="d-block mb-1">Code</label>
              </div>
              <div class="col-lg-1">
                <label for="Comment" class="d-block mb-1">Comment</label>
              </div>
            </div>
            <div class="row mt-2" style="border-bottom: 1px solid #d3d3d3">
              <div class="col-lg-2" style="font-size: 12px">
                <div width="80px" style="padding-top: 4px">
                  <div style="float: left">
                    <i class="fas fa-plus" style="color: green"></i>
                  </div>
                  <div style="float: left; margin-left: 30px">
                    Mon 18/10/2021
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <select class="form-control select2" style="width: 163px">
                  <option value="1">
                    02.0100 (DAY) - FABRICATION - SUPERVISION
                  </option>
                  <option value="2">
                    02.0100 (NIGHT) - FABRICATION - SUPERVISION
                  </option>
                  <option value="3">
                    02.0105 (DAY) - FABRICATION - UNPACKING CUT PARTS
                  </option>
                </select>
              </div>

              <div class="col-lg-1">
                <button
                  id="startbtn"
                  class="btn btn-primary btn-sm py-0 px-3"
                  data-toggle="modal"
                  data-target="#modal-start-time"
                  style="line-height: 26px"
                >
                  Start
                </button>
                <input
                  id="startTime"
                  type="text"
                  style="width: 79px; display: none"
                  placeholder="hh:mm"
                />
              </div>
              <div class="col-lg-1">
                <!-- <button id="breakbtn"  class="btn btn-primary btn-sm py-0 px-3"   style="display:none;line-height:26px;">Break</button> -->
                <input
                  id="breakTime"
                  type="text"
                  style="width: 79px"
                  placeholder="hh:mm"
                />
              </div>
              <div class="col-lg-1">
                <!-- <button id="finishbtn" class="btn btn-primary btn-sm py-0 px-3" style="display:none;line-height:26px;" v-on:click="startfn(3)" >Finish</button> -->
                <input
                  id="finishTime"
                  type="text"
                  style="width: 79px"
                  placeholder="hh:mm"
                />
              </div>
              <div class="col-lg-1">
                <input
                  id="totalWorkingTime"
                  type="text"
                  style="width: 79px"
                  placeholder="hh:mm"
                />
              </div>
              <div class="col-lg-1">
                <input type="text" style="width: 70px" />
              </div>
              <div class="col-lg-2">
                <select class="form-control select2" style="width: 160px">
                  <option value="IOW-006">IOW-006</option>
                  <option value="IOW-008">IOW-008</option>
                  <option value="IOW-010">IOW-010</option>
                  <option value="IOW-011">IOW-011</option>
                  <option value="IOW-012">IOW-012</option>
                  <option value="IOW-018">IOW-018</option>
                  <option value="IOW-022">IOW-022</option>
                  <option value="IOW-025">IOW-025</option>
                  <option value="IOW-055">IOW-055</option>
                </select>
              </div>

              <div class="col-lg-1">
                <input type="text" style="width: 70px" />
              </div>
            </div>
            <div class="row mt-2" style="border-bottom: 1px solid #d3d3d3">
              <div class="col-lg-2" style="font-size: 12px">
                <div width="80px" style="padding-top: 4px">
                  <div style="float: left">
                    <i class="fas fa-plus" style="color: green"></i>
                  </div>
                  <div style="float: left; margin-left: 30px">
                    Mon 18/10/2021
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <select class="form-control select2" style="width: 163px">
                  <option value="1">
                    02.0100 (DAY) - FABRICATION - SUPERVISION
                  </option>
                  <option value="2">
                    02.0100 (NIGHT) - FABRICATION - SUPERVISION
                  </option>
                  <option value="3">
                    02.0105 (DAY) - FABRICATION - UNPACKING CUT PARTS
                  </option>
                </select>
              </div>
              <div class="col-lg-1">
                <button
                  id="startbtn"
                  class="btn btn-primary btn-sm py-0 px-3"
                  style="line-height: 26px"
                >
                  Start
                </button>
                <input
                  id="startTime"
                  type="text"
                  style="width: 79px; display: none"
                  placeholder="hh:mm"
                />
              </div>
              <div class="col-lg-1">
                <button
                  id="breakbtn"
                  class="btn btn-primary btn-sm py-0 px-3"
                  data-toggle="modal"
                  data-target="#modal-start-time"
                  style="display: none; line-height: 26px"
                >
                  Break
                </button>

                <input
                  id="breakTime"
                  type="text"
                  style="width: 79px"
                  placeholder="hh:mm"
                />
              </div>
              <div class="col-lg-1">
                <button
                  id="finishbtn"
                  class="btn btn-primary btn-sm py-0 px-3"
                  style="display: none; line-height: 26px"
                  v-on:click="startfn(3)"
                >
                  Finish
                </button>
                <input
                  id="finishTime"
                  type="text"
                  style="width: 79px"
                  placeholder="hh:mm"
                />
              </div>
              <div class="col-lg-1">00:00</div>
              <div class="col-lg-1">
                <input type="text" style="width: 70px" />
              </div>
              <div class="col-lg-2">
                <select class="form-control select2" style="width: 160px">
                  <option value="IOW-006">IOW-006</option>
                  <option value="IOW-008">IOW-008</option>
                  <option value="IOW-010">IOW-010</option>
                  <option value="IOW-011">IOW-011</option>
                  <option value="IOW-012">IOW-012</option>
                  <option value="IOW-018">IOW-018</option>
                  <option value="IOW-022">IOW-022</option>
                  <option value="IOW-025">IOW-025</option>
                  <option value="IOW-055">IOW-055</option>
                </select>
              </div>

              <div class="col-lg-1">
                <input type="text" style="width: 70px" />
              </div>
            </div>
            <div class="row m-b-10">
              <div class="col-sm-6 text-left">
                <a href="#">&lt;&lt; Previous Period</a>
              </div>
              <div class="col-sm-6 text-right">
                <a href="#">Next Period &gt;&gt;</a>
              </div>
            </div>

            <div class="row mt-2">
              <div class="col-lg-6">
                <label for="placement" class="d-block mb-1"
                  >Internal Comment</label
                >
                <input type="text" placeholder="" class="w-100" />
              </div>
            </div>
            <div class="row mt-2">
              <div style="padding-right: 10px">
                <button class="btn btn-danger btn-sm" type="submit">
                  Cancel
                </button>
              </div>
              <div style="padding-right: 10px">
                <button class="btn btn-primary btn-sm" type="submit">
                  Save as Draft
                </button>
              </div>
              <div style="padding-right: 10px">
                <button class="btn btn-primary btn-sm" type="submit">
                  Save and Submit
                </button>
              </div>
              <div style="padding-right: 10px">
                <button class="btn btn-primary btn-sm" type="submit">
                  Copy from Previous
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 px-0 mt-0">
        <div class="card card-primary card-outline card-tabs">
          <div class="row">
            <div class="col-lg-12">
              <div class="p-2 pl-4">
                <div class="timesheet_create_tit">
                  <h2 class="pb-2">PAPER Upload</h2>
                  <div class="upload-btn-wrapper">
                    <button class="btn btn-sm">Upload Paper</button>
                    <input type="file" name="myfile" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 px-0 mt-0">
        <div class="card card-primary card-outline card-tabs">
          <div class="row">
            <div class="col-lg-12">
              <div class="p-2 pl-4">
                <div class="timesheet_create_tit">
                  <h2 class="pb-2">RATE INFORMATION</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <table
                class="
                  table table-responsive table
                  text-nowrap
                  rate_information
                "
              >
                <thead>
                  <tr>
                    <th></th>
                    <th>Rate</th>

                    <th>Period</th>

                    <th style="text-align: center">Pay</th>

                    <th style="text-align: center">Charge</th>

                    <th style="text-align: center">Total Units</th>

                    <th style="text-align: center">Total Pay</th>

                    <th style="text-align: center">Total Charge</th>

                    <th style="text-align: center">Margin</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- ngRepeat: rate in rates | filter:{isViewable: true} -->
                  <tr class="ng-scope">
                    <td style="height: 26px"></td>
                    <td>02.0100 - FABRICATION - SUPERVISION</td>

                    <td>Hourly</td>

                    <td style="text-align: center">GBP19.00</td>

                    <td style="text-align: center">GBP21.50</td>

                    <!-- ngIf: rate.fields.indexOf('finish') > -1 || rate.fields.indexOf('hours') > -1 -->
                    <td style="text-align: center">00:00</td>
                    <td style="text-align: center">GBP0.00</td>

                    <td style="text-align: center">GBP0.00</td>

                    <td style="text-align: center">GBP0.00 (0%)</td>
                  </tr>
                  <!-- end ngRepeat: rate in rates | filter:{isViewable: true} -->
                  <tr class="ng-scope">
                    <td style="height: 26px"></td>
                    <td>02.0105 - FABRICATION - UNPACKING CUT PARTS</td>

                    <td>Hourly</td>

                    <td style="text-align: center">GBP19.00</td>

                    <td style="text-align: center">GBP21.50</td>

                    <!-- ngIf: rate.fields.indexOf('finish') > -1 || rate.fields.indexOf('hours') > -1 -->
                    <td style="text-align: center">00:00</td>
                    <!-- end ngIf: rate.fields.indexOf('finish') > -1 || rate.fields.indexOf('hours') > -1 -->
                    <!-- ngIf: rate.fields.indexOf('finish') == -1 && rate.fields.indexOf('hours') == -1 -->

                    <td style="text-align: center">GBP0.00</td>

                    <td style="text-align: center">GBP0.00</td>

                    <td style="text-align: center">GBP0.00 (0%)</td>
                  </tr>
                  <!-- end ngRepeat: rate in rates | filter:{isViewable: true} -->
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td></td>

                    <td style="text-align: center">
                      <strong>GBP0.00</strong>
                    </td>

                    <td style="text-align: center">
                      <strong>GBP0.00</strong>
                    </td>

                    <td style="text-align: center">
                      <strong>GBP0.00 (0%)</strong>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-start-time">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Time Record</h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">Task:</div>
              <div class="col-md-4">________________________________</div>
            </div>
            <br />

            <div class="row">
              <div class="col-md-4">Start :</div>
              <div class="col-md-4">
                <input
                  type="text"
                  id="workTime"
                  val=""
                  style="border: 0px solid"
                  readonly
                />
                <input type="hidden" id="getStartTimeInBreakModal" val="" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">Break :</div>
              <div class="col-md-4">
                <input type="hidden" id="getBreakTimeInBreakModal" val="" />
                <input
                  type="text"
                  id="getBreakTime"
                  val=""
                  style="border: 0px solid"
                  readonly
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">End :</div>
              <div class="col-md-4">
                <input
                  type="text"
                  style="border: 0px solid"
                  id="getEndTime"
                  val=""
                  readonly
                />
              </div>
            </div>
          </div>
          <!-- justify-content-between -->
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-warning"
              id="modalstartBtn"
              v-on:click="startfn(1)"
            >
              Start
            </button>
            <button
              type="button"
              class="btn btn-warning"
              style="display: none"
              id="modalBreakBtn"
              v-on:click="startfn(2)"
            >
              Break
            </button>
            <button
              type="button"
              class="btn btn-warning"
              style="display: none"
              id="modalContinueBtn"
              v-on:click="startfn(1)"
            >
              Resume
            </button>
            <button
              type="button"
              class="btn btn-primary btn-sm"
              id="modalfinishBtn"
              v-on:click="startfn(3)"
            >
              Finish
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Close
            </button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </section>
</template>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment.min.js"></script>

<script>
var myTime = null;
var myTimer = null;
var total_time = null;
var total_break = null;
export default {
  mounted() {
    $(".select2").select2();
  },
  methods: {
    startfn: function (event) {
      var dt = new Date();
      // myTimer =setInterval(setTime, 1000);
      var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
      if (event == 1) {
        $("#modalstartBtn").hide();
        $("#startbtn").hide();
        $("#startTime").show();
        $("#modalBreakBtn").show();

        $("#startTime").val(time);
        $("#getStartTimeInBreakModal").val(time);
        $("#modalContinueBtn").hide();
        myTime = setInterval(setTime, 1000);
        total_break = $("#getBreakTime").val();
        clearInterval(myTimer);
      } else if (event == 2) {
        var dtb = new Date();
        var Btime =
          dtb.getHours() + ":" + dtb.getMinutes() + ":" + dtb.getSeconds();
        total_time = $("#workTime").val();
        clearInterval(myTime);
        myTimer = setInterval(setTimeBreak, 1000);
        $("#modalContinueBtn").show();
        $("#modalBreakBtn").hide();
        $("#getBreakTimeInBreakModal").val(Btime);
        // $("#getBreakTimeInBreakModal").val(Btime);
      } else if (event == 3) {
        clearInterval(myTime);
        clearInterval(myTimer);
        $("#modalBreakBtn").hide();
        $("#modalContinueBtn").hide();
        $("#modalfinishBtn").hide();
        $("#modalBreakBtn").hide();
        var dte = new Date();
        var timee =
          dte.getHours() + ":" + dte.getMinutes() + ":" + dte.getSeconds();
        total_break = $("#getBreakTime").val();
        total_time = $("#workTime").val();
        $("#breakTime").val(total_break);
        $("#getEndTime").val(timee);

        $("#totalWorkingTime").val(total_time);
        $("#finishTime").val(timee);
      }

      function setTime() {
        //var todayDate = moment(new Date()).format("MM-DD-YYYY"); //Instead of today date, We can pass whatever date
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, "0");
        var mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
        var yyyy = today.getFullYear();

        var todayDate = mm + "-" + dd + "-" + yyyy;
        var dtt = new Date();
        var time = $("#getStartTimeInBreakModal").val();
        var totalBreak = $("#getBreakTime").val();
        var Currenttime =
          dtt.getHours() + ":" + dtt.getMinutes() + ":" + dtt.getSeconds();
        var startDate = new Date(`${todayDate} ${time}`);
        var endDate = new Date(`${todayDate} ${Currenttime}`);

        var timeDiff = Math.abs(startDate.getTime() - endDate.getTime());

        var hh = Math.floor(timeDiff / 1000 / 60 / 60);
        hh = ("0" + hh).slice(-2);

        timeDiff -= hh * 1000 * 60 * 60;
        var mm = Math.floor(timeDiff / 1000 / 60);
        mm = ("0" + mm).slice(-2);

        timeDiff -= mm * 1000 * 60;
        var ss = Math.floor(timeDiff / 1000);

        ss = ("0" + ss).slice(-2);
        var counter = hh + ":" + mm + ":" + ss;
        if (total_time) {
          var parts = total_time.split(/:/);
          var timePeriodMillis =
            parseInt(parts[0], 10) * 60 * 60 * 1000 +
            parseInt(parts[1], 10) * 60 * 1000 +
            parseInt(parts[2], 10) * 1000;

          var hh1 = Math.floor(timePeriodMillis / 1000 / 60 / 60);
          hh1 = ("0" + hh1).slice(-2);

          timePeriodMillis -= hh1 * 1000 * 60 * 60;
          var mm1 = Math.floor(timePeriodMillis / 1000 / 60);
          mm1 = ("0" + mm1).slice(-2);

          timePeriodMillis -= mm1 * 1000 * 60;
          var ss1 = Math.floor(timePeriodMillis / 1000);
          ss1 = ("0" + ss1).slice(-2);

          var hh1 = parseInt(hh1 + hh);
          var mm1 = parseInt(mm + mm1);
          var tt2 = parseInt(ss1);
          var tt3 = parseInt(ss);
          var ss1 = tt3 + tt2;
          //counter=total_time+counter
          //alert("Time Diff- " + hh1 + ":" + mm1 + ":" + ss1);
          ss1 = ("0" + ss1).slice(-2);
          mm1 = ("0" + mm1).slice(-2);
          hh1 = ("0" + hh1).slice(-2);
          counter = hh1 + ":" + mm1 + ":" + ss1;
        }
        $("#workTime").val(counter);
        //alert("Time Diff- " + hh + ":" + mm + ":" + ss);
      }

      function setTimeBreak() {
        //var todayDate = moment(new Date()).format("MM-DD-YYYY"); //Instead of today date, We can pass whatever date
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, "0");
        var mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
        var yyyy = today.getFullYear();

        var todayDate = mm + "-" + dd + "-" + yyyy;
        var dtt1 = new Date();
        var time = $("#getBreakTimeInBreakModal").val();
        var Currenttime =
          dtt1.getHours() + ":" + dtt1.getMinutes() + ":" + dtt1.getSeconds();
        var startDate = new Date(`${todayDate} ${time}`);
        var endDate = new Date(`${todayDate} ${Currenttime}`);

        var timeDiff = Math.abs(startDate.getTime() - endDate.getTime());

        var hh = Math.floor(timeDiff / 1000 / 60 / 60);
        hh = ("0" + hh).slice(-2);

        timeDiff -= hh * 1000 * 60 * 60;
        var mm = Math.floor(timeDiff / 1000 / 60);
        mm = ("0" + mm).slice(-2);

        timeDiff -= mm * 1000 * 60;
        var ss = Math.floor(timeDiff / 1000);
        ss = ("0" + ss).slice(-2);
        var counter = hh + ":" + mm + ":" + ss;
        if (total_break) {
          var parts = total_break.split(/:/);
          var timePeriodMillis =
            parseInt(parts[0], 10) * 60 * 60 * 1000 +
            parseInt(parts[1], 10) * 60 * 1000 +
            parseInt(parts[2], 10) * 1000;

          var hh1 = Math.floor(timePeriodMillis / 1000 / 60 / 60);
          hh1 = ("0" + hh1).slice(-2);

          timePeriodMillis -= hh1 * 1000 * 60 * 60;
          var mm1 = Math.floor(timePeriodMillis / 1000 / 60);
          mm1 = ("0" + mm1).slice(-2);

          timePeriodMillis -= mm1 * 1000 * 60;
          var ss1 = Math.floor(timePeriodMillis / 1000);
          ss1 = ("0" + ss1).slice(-2);

          var hh1 = parseInt(hh1 + hh);
          var mm1 = parseInt(mm + mm1);
          var tt2 = parseInt(ss1);
          var tt3 = parseInt(ss);
          var ss1 = tt3 + tt2;
          //counter=total_time+counter
          //alert("Time Diff- " + hh1 + ":" + mm1 + ":" + ss1);
          ss1 = ("0" + ss1).slice(-2);
          mm1 = ("0" + mm1).slice(-2);
          hh1 = ("0" + hh1).slice(-2);
          counter = hh1 + ":" + mm1 + ":" + ss1;
        }
        $("#getBreakTime").val(counter);
        //alert("Time Diff- " + hh + ":" + mm + ":" + ss);
      }
    },

    // setInterval(setTime, 1000);

    modalBreakBtn: function () {
      var dt = new Date();
      var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
      // $('#getBreakTimeInBreakModal').val(time);
      // $('#modalBreakbtn').hide();
      // $('#modalContinuebtn').show();
    },
  },
};
</script>
