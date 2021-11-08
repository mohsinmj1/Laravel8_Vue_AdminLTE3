<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pending</span>
                            <span class="info-box-number">8</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-orange text-white elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">In Process</span>
                            <span class="info-box-number">3</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning text-white elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Completed</span>
                            <span class="info-box-number">6</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger text-white elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Defer</span>
                            <span class="info-box-number">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="color: white">Support Desk</h3>
                        </div>
                         <div class="card-header" style="background-color: white">
            <div class="row">
              <div class="col-sm-10 mb-3">
                <div class="d-flex align-items-center">
                  <label class="mb-0 mr-2 search-label">Search:</label>
                  <form class="form-inline">
                    <div class="input-group input-group-sm">
                      <input
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                        class="form-control color-light"
                      />
                      <div class="input-group-append">
                        <button type="submit" class="btn color-light">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-sm-2 mb-3">
                <div class="d-flex align-items-center justify-content-end">
                  <label class="mb-0">Show</label>
                  <select class="form-control w-auto ml-2 mr-2 pt-0 pb-0 h-100">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="250">250</option>
                    <option value="500">500</option>
                  </select>
                  <label class="mb-0">entries</label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-responsive-sm">
                                <thead>
                                    <tr class="text-center">
                                        <th>Sr #</th>
                                        <th>Priority</th>
                                        <th>Creator</th>
                                        <th>Assignee</th>
                                        <th>Ticket </th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">
                                            <strong>1</strong>
                                        </td>
                                        <td style="text-align: center;">
                                            high
                                        </td>
                                        <td style="text-align: center;">
                                            John
                                        </td>
                                        <td style="text-align: center;">
                                            Smith
                                        </td>
                                        <td style="text-align: center;">
                                            25633
                                        </td>
                                        <td style="text-align: center;">
                                            john@gmail.com
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                             <div class="card-footer">
                                <div class="row mb-3">
                                <div class="col-md-5 align-self-center">
                                    <div>Showing 1 to 10 of 12 entries - 0 rows selected</div>
                                </div>
                                <div class="col-md-7 d-flex justify-content-end">
                                    <nav aria-label="...">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                    </nav>
                                </div>
                                </div>
                            </div>
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
