<template>
    <section class="content">
        <div class="container-fluid">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info" role="alert">
                        <i class="mdi mdi-alert-circle-outline mr-2"></i>
                        TMS V1.03 has been released.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="far fa-calendar-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Year</span>
                            <span class="info-box-number">
                                2021-22
                                <small></small>
                            </span>
                        </div>
                        &lt;!&ndash; /.info-box-content &ndash;&gt;
                    </div>
                    &lt;!&ndash; /.info-box &ndash;&gt;
                </div>
                &lt;!&ndash; /.col &ndash;&gt;

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">23 And Over</span>
                            <span class="info-box-number">£8.91</span>
                        </div>
                        &lt;!&ndash; /.info-box-content &ndash;&gt;
                    </div>
                    &lt;!&ndash; /.info-box &ndash;&gt;
                </div>
                &lt;!&ndash; /.col &ndash;&gt;

                &lt;!&ndash; fix for small devices only &ndash;&gt;
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-orange text-white elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">21 to 22</span>
                            <span class="info-box-number">£8.36</span>
                        </div>
                        &lt;!&ndash; /.info-box-content &ndash;&gt;
                    </div>
                    &lt;!&ndash; /.info-box &ndash;&gt;
                </div>
                &lt;!&ndash; /.col &ndash;&gt;
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning text-white elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">18 to 20</span>
                            <span class="info-box-number">£6.56</span>
                        </div>
                        &lt;!&ndash; /.info-box-content &ndash;&gt;
                    </div>
                    &lt;!&ndash; /.info-box &ndash;&gt;
                </div>
                &lt;!&ndash; /.col &ndash;&gt;

                &lt;!&ndash; fix for small devices only &ndash;&gt;
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger text-white elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Under 18</span>
                            <span class="info-box-number">£4.62</span>
                        </div>
                        &lt;!&ndash; /.info-box-content &ndash;&gt;
                    </div>
                    &lt;!&ndash; /.info-box &ndash;&gt;
                </div>
                &lt;!&ndash; /.col &ndash;&gt;
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-indigo text-white elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Apprentice</span>
                            <span class="info-box-number">£4.30</span>
                        </div>
                        &lt;!&ndash; /.info-box-content &ndash;&gt;
                    </div>
                    &lt;!&ndash; /.info-box &ndash;&gt;
                </div>
                &lt;!&ndash; /.col &ndash;&gt;
            </div>
            &lt;!&ndash; /.row &ndash;&gt;
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">NMW</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive-sm">
                                <thead>
                                    <tr class="text-center">
                                        <th>Year</th>
                                        <th>23 and over</th>
                                        <th>21 to 22</th>
                                        <th>18 to 20</th>
                                        <th>Under 18</th>
                                        <th>Apprentice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">
                                            <strong>202122</strong>
                                        </td>
                                        <td style="text-align: center;">
                                            <strong>£8.91</strong>
                                        </td>
                                        <td style="text-align: center;">
                                            <strong>£8.36</strong>
                                        </td>
                                        <td style="text-align: center;">
                                            <strong>£6.56</strong>
                                        </td>
                                        <td style="text-align: center;">
                                            <strong>£4.62</strong>
                                        </td>
                                        <td style="text-align: center;">
                                            <strong>£4.30</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-6">
                  <label for="client" class="d-block mb-1"
                    >From Date / To Date</label
                  >
                  <div class="input-group">
                    <input type="date" class="form-control form-control-sm" />
                    <div class="input-group-append">
                      <span
                        class="input-group-text to"
                        id="validationTooltipUsernamePrepend"
                        >to</span
                      >
                    </div>
                    <input type="date" class="form-control form-control-sm" />                    
                  </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Timesheet Deadlinesss</h3>
                        </div>
                        <div class="card-body">
                            <p>
                                Your weekly timesheet cut off is Tuesday 9am.
                                Any requests to process timesheets after the cut
                                off are subject to a late processing fee.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="card card-primary h-100 mb-3">
                        <div class="card-header">
                            <h3 class="card-title">
                                Timesheets (last 15 Days)
                            </h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Missing</td>
                                        <td class="text-right">&#163;795.56</td>
                                        <td>
                                            <span class="badge bg-primary"
                                                >0</span
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Unauthorised
                                        </td>
                                        <td class="text-right">&#163;0.00</td>
                                        <td>
                                            <span class="badge bg-primary"
                                                >1</span
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            To Self Bill Invoice
                                        </td>
                                        <td class="text-right">&#163;0.00</td>
                                        <td>
                                            <span class="badge bg-primary"
                                                >0</span
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Ready for PAYE
                                        </td>
                                        <td class="text-right">&#163;0.00</td>
                                        <td>
                                            <span class="badge bg-primary"
                                                >0</span
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-primary h-100 mb-3">
                        <div class="card-header">
                            <h3 class="card-title">Expenses (last 15 Days)</h3>
                        </div>
                        <div class="card-body table-responsive ">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Unauthorised</td>
                                        <td class="text-right">&#163;7.56</td>
                                        <td>
                                            <span class="badge bg-primary"
                                                >1</span
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            To Self Bill
                                        </td>
                                        <td class="text-right">&#163;0.00</td>
                                        <td>
                                            <span class="badge bg-primary"
                                                >0</span
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Ready for PAYE
                                        </td>
                                        <td class="text-right">&#163;0.00</td>
                                        <td>
                                            <span class="badge bg-primary"
                                                >0</span
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-warning h-100 mb-3">
                        <div class="card-header">
                            <h3 class="card-title text-white">
                                Margins
                            </h3>
                        </div>
                        <div class="card-body  table-responsive ">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Last Week</td>
                                        <td class="text-right">£ 300.55 </td>
                                    </tr>
                                    <tr>
                                        <td>Last Month</td>
                                        <td class="text-right">&#163;1200.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="far fa-chart-bar"></i>
                                Bar Chart
                            </h3>

                            <div class="card-tools">
                                <button
                                    type="button"
                                    class="btn btn-tool"
                                    data-card-widget="collapse"
                                >
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-tool"
                                    data-card-widget="remove"
                                >
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="bar-chart" style="height: 300px;"></div>
                        </div>
                        <!-- /.card-body-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="far fa-chart-bar"></i>
                                Donut Chart
                            </h3>

                            <div class="card-tools">
                                <button
                                    type="button"
                                    class="btn btn-tool"
                                    data-card-widget="collapse"
                                >
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-tool"
                                    data-card-widget="remove"
                                >
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="donut-chart" style="height: 300px;"></div>
                        </div>
                        <!-- /.card-body-->
                    </div>
                </div>
            </div>

        </div>
        <!--/. container-fluid -->
    </section>
</template>

<script>
export default {
    mounted() {
        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
            data: [
                [1, 10],
                [2, 8],
                [3, 4],
                [4, 13],
                [5, 17],
                [6, 9]
            ],
            bars: { show: true }
        };
        $.plot("#bar-chart", [bar_data], {
            grid: {
                borderWidth: 1,
                borderColor: "#f3f3f3",
                tickColor: "#f3f3f3"
            },
            series: {
                bars: {
                    show: true,
                    barWidth: 0.5,
                    align: "center"
                }
            },
            colors: ["#3c8dbc"],
            xaxis: {
                ticks: [
                    [1, "January"],
                    [2, "February"],
                    [3, "March"],
                    [4, "April"],
                    [5, "May"],
                    [6, "June"]
                ]
            }
        });
        /* END BAR CHART */
        console.log("Component mounted.");
    }
};
</script>
