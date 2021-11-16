<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <h2>Manage Invoices Period Template</h2>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
          <div class="card-tools">
            <router-link to="/configuration/manageinvoicecreate">
              <button type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-plus-square mr-1"></i>Create 
              </button>
            </router-link>
          </div>
        </div>
      </div>
      <div class="col-lg-12 px-0 mt-3">
        <div class="card card-primary">
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
            <form action="#" method="post">
              <table
                class="
                  table table-striped table-bordered table-condensed
                  compact
                  display
                  nowrap
                "
              >
                <thead>
                  <tr>
                    <th>Actions</th>
                    <th>Name</th>
                    <th>Order</th>
                    <th>Status</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <button
                          type="button"
                          class="btn btn-primary btn-sm "
                        >
                        </button>
                       
                      </div>
                    </td>
                    <td>Welder 2 - Higher Rate</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>Disable</td>
                    <td>Higher Rates</td>
                    
                  </tr>

                  <tr>
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                       <button
                          type="button"
                          class="btn btn-primary btn-sm "
                        >
                        </button>
                        
                      </div>
                    </td>
                    <td>Stores - Labourer</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>Enable</td>
                    <td>Standard Labour Rates</td>
                
                  </tr>

                  <tr>
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                       <button
                          type="button"
                          class="btn btn-primary btn-sm "
                        >
                        </button>
                      
                      </div>
                    </td>
                    <td>iNTERIORS</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>Enable</td>
                    <td></td>
                
                  </tr>

                  <tr>
                    <input type="hidden" name="id" value="22" id="id" />
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a
                          href="/rateTemplate/edit?id=22"
                          class="btn btn-primary btn-sm"
                          >Edit</a
                        >
                     <button
                          type="button"
                          class="btn btn-primary btn-sm "
                        >
                        </button>
                      
                      </div>
                    </td>
                    <td>Engineering</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>Enable</td>
                    <td></td>
                   
                  </tr>

                  <tr>
                    <input type="hidden" name="id" value="23" id="id" />
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <button
                          type="button"
                          class="btn btn-primary btn-sm "
                        >
                        </button>
                      </div>
                    </td>
                    <td>Job Rates - 05/10/18</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>Enable</td>
                    <td></td>
                
                  </tr>

                  <tr>
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                       <button
                          type="button"
                          class="btn btn-primary btn-sm "
                        >
                        </button>
                 
                      </div>
                    </td>
                    <td>Test</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>Disable</td>
                    <td>Test</td>
                
                  </tr>
                </tbody>
              </table>
            </form>
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
  </section>
</template>
<script>
export default {};
</script>