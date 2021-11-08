<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <h2>Rate Template</h2>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
          <div class="card-tools">
            <router-link to="/rates/create">
              <button type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-plus-square mr-1"></i>Create Rate Template
              </button>
            </router-link>
          </div>
        </div>
      </div>
      <div class="col-lg-12 px-0 mt-3">
        <div class="card card-primary">
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
                    <th>Client</th>
                    <th>Pay Currency</th>
                    <th>Charge Currency</th>
                    <th>Description</th>
                    <th>Select</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <button
                          type="button"
                          class="btn btn-primary btn-sm dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i class="caret"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Clone</a></li>
                          <li><a href="#">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                    <td>Welder 2 - Higher Rate</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>GBP</td>
                    <td>GBP</td>
                    <td>Higher Rates</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm">
                        Select
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <button
                          type="button"
                          class="btn btn-primary btn-sm dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i class="caret"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Clone</a></li>
                          <li><a href="#">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                    <td>Stores - Labourer</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>GBP</td>
                    <td>GBP</td>
                    <td>Standard Labour Rates</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm">
                        Select
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <button
                          type="button"
                          class="btn btn-primary btn-sm dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i class="caret"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu" style="">
                          <li><a href="#">Clone</a></li>
                          <li><a href="#">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                    <td>iNTERIORS</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>GBP</td>
                    <td>GBP</td>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm">
                        Select
                      </button>
                    </td>
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
                          class="btn btn-primary btn-sm dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i class="caret"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu" style="">
                          <li>
                            <a href="/rateTemplate/edit?id=22&amp;cloning=true"
                              >Clone</a
                            >
                          </li>
                          <li>
                            <a href="/rateTemplate/delete?id=22">Delete</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                    <td>Engineering</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>GBP</td>
                    <td>GBP</td>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm">
                        Select
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <input type="hidden" name="id" value="23" id="id" />
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <button
                          type="button"
                          class="btn btn-primary btn-sm dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i class="caret"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu" style="">
                          <li>
                            <a href="">Clone</a>
                          </li>
                          <li>
                            <a href="">Delete</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                    <td>Job Rates - 05/10/18</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>GBP</td>
                    <td>GBP</td>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm">
                        Select
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="btn-group btn-sm dropdown">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <button
                          type="button"
                          class="btn btn-primary btn-sm dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i class="caret"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Clone</a></li>
                          <li><a href="#">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                    <td>Test</td>
                    <td>Wight Shipyard Company Limited</td>
                    <td>GBP</td>
                    <td>GBP</td>
                    <td>Test</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm">
                        Select
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {};
</script>