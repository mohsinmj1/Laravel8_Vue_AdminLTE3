<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <h2>Agencies</h2>
        </div>
        <div class="col-lg-6" style="text-align: right">
          <button class="btn btn-primary">
            <router-link
              style="color: white; text-decoration: none"
              to="/agency/create"
              >Create</router-link
            >
          </button>
        </div>
      </div>
    </div>
    <div class="umbrella-card-box">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-sm-6 mb-3">
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
            <div class="col-sm-6 mb-3">
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
          <div class="row">
            <table class="table table-hover border border-1 ml-3 mr-3">
              <thead>
                <tr>
                  <th>Agency Name</th>
                  <th>Contact Person</th>
                  <th>Email *</th>
                  <th>Phone</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ateca Consulting Ltd</td>
                  <td>Ahmed Ali</td>
                  <td>info@gmail.com</td>
                  <td>1234567891011</td>
                </tr>
                <tr>
                  <td>Ateca Consulting Ltd</td>
                  <td>Ahmed Ali</td>
                  <td>info@gmail.com</td>
                  <td>1234567891011</td>
                </tr>
                <tr>
                  <td>Ateca Consulting Ltd</td>
                  <td>Ahmed Ali</td>
                  <td>info@gmail.com</td>
                  <td>1234567891011</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-sm-5 d-flex align-items-center">
              <div>Showing 1 to 1 of 1 entries</div>
            </div>
            <div class="col-sm-7">
              <div class="pagination justify-content-end">
                <pagination
                  :data="products"
                  @pagination-change-page="getResults"
                ></pagination>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<style>
.color-light {
  background-color: #dadfe4;
  border-color: #ced4da;
}
.umbrella-card-box {
  padding: 20px;
  box-shadow: 0 2px 15px 0 rgb(0 0 0 / 6%), 0 2px 0 0 rgb(0 0 0 / 2%);
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  background-clip: padding-box;
  margin-bottom: 20px;
  background-color: #ffffff;
}
.pagination ul {
  margin-bottom: 0px;
}
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