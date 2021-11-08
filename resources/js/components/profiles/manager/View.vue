
<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <h2>Managers</h2>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
          <div class="card-tools">
            <button
              type="button"
              class="btn btn-sm btn-primary"
              data-toggle="modal"
              data-target="#createmanagermodal"
            >
              <i class="fa fa-plus-square mr-1"></i>Create
            </button>
          </div>
        </div>
      </div>
      <div
        class="panel-group panel-group-joined"
        id="filter-panel"
        style="border-top: 3px solid #009ada"
      >
        <div class="panel panel-border panel-primary">
          <a
            data-toggle="collapse"
            data-parent="#filter-panel"
            href="#collapseOne"
            class=""
            aria-expanded="true"
          >
            <div class="row">
              <div class="col-md-10 panel-heading">
                <h4 class="panel-title">
                  <i class="fa fa-search"></i> Search Options
                </h4>
              </div>
              <div
                class="col-md-2 d-flex justify-content-end align-items-center"
              >
                <i class="fa fa-plus-square"></i>
              </div>
            </div>
          </a>
          <div
            id="collapseOne"
            class="panel-collapse collapse in"
            aria-expanded="true"
            style=""
          >
            <div class="panel-body">
              <div class="bg-white pb-4">
                <div class="card-body">
                  <ul
                    class="nav nav-tabs"
                    id="custom-content-below-tab"
                    role="tablist"
                  >
                    <li class="nav-item" style="width: 50%">
                      <a
                        class="nav-link active"
                        id="custom-content-below-home-tab"
                        data-toggle="pill"
                        href="#custom-content-below-home"
                        role="tab"
                        aria-controls="custom-content-below-home"
                        aria-selected="true"
                        >Main</a
                      >
                    </li>
                    <li class="nav-item" style="width: 50%">
                      <a
                        class="nav-link"
                        id="custom-content-below-placement-tab"
                        data-toggle="pill"
                        href="#custom-content-below-placement"
                        role="tab"
                        aria-controls="custom-content-below-placement"
                        aria-selected="false"
                        >Placement</a
                      >
                    </li>
                  </ul>
                  <br />
                  <div class="tab-content" id="custom-content-below-tabContent">
                    <div
                      class="tab-pane fade active show"
                      id="custom-content-below-home"
                      role="tabpanel"
                      aria-labelledby="custom-content-below-home-tab"
                    >
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label" for="placementItrisId"
                              >Firstname</label
                            >
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Lastname</label
                            >
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label class="control-label" for="jobTitle"
                              >Reference</label
                            >
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label class="control-label">Client</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                              />

                              <button
                                class="
                                  input-group-addon
                                  btn btn-sm
                                  bg-primary
                                  rounded-0
                                "
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label class="control-label">Account Status</label>
                            <select class="form-control form-control-sm">
                              <option value="Active">Active</option>
                              <option value="Inactive">Locked</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group input-group-sm">
                            <label class="control-label">Created Date</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="date"
                                class="form-control"
                                placeholder="dd/MM/yyyy"
                              />
                              <button
                                class="btn btn-sm rounded-0 bg-primary px-2"
                              >
                                to
                              </button>
                              <input
                                type="date"
                                class="form-control"
                                placeholder="dd/MM/yyyy"
                              />
                              <div class="input-group-btn">
                                <button
                                  type="button"
                                  class="btn btn-primary btn-sm dropdown-toggle"
                                  data-toggle="dropdown"
                                >
                                  Options <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Today</a></li>
                                  <li><a href="#">Yesterday</a></li>
                                  <li><a href="#">Last 7 Days</a></li>
                                  <li><a href="#">Last 30 Days</a></li>
                                  <li><a href="#">This Week</a></li>
                                  <li><a href="#">Last Week</a></li>
                                  <li><a href="#">This Month</a></li>
                                  <li><a href="#">Last Month</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Modified Date</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="date"
                                class="form-control input-sm"
                                placeholder="dd/MM/yyyy"
                              />
                              <button
                                class="btn btn-sm rounded-0 bg-primary px-2"
                              >
                                to
                              </button>
                              <input
                                type="date"
                                class="form-control input-sm"
                                placeholder="dd/MM/yyyy"
                              />
                              <div class="input-group-btn">
                                <button
                                  type="button"
                                  class="btn btn-primary btn-sm dropdown-toggle"
                                  data-toggle="dropdown"
                                >
                                  Options <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Today</a></li>
                                  <li><a href="#">Yesterday</a></li>
                                  <li><a href="#">Last 7 Days</a></li>
                                  <li><a href="#">Last 30 Days</a></li>
                                  <li><a href="#">This Week</a></li>
                                  <li><a href="#">Last Week</a></li>
                                  <li><a href="#">This Month</a></li>
                                  <li><a href="#">Last Month</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row m-0">
                        <button
                          type="submit"
                          class="btn btn-primary btn-sm mx-2"
                        >
                          Search
                        </button>
                        <button
                          type="submit"
                          class="btn btn-secondary btn-sm mx-2"
                        >
                          Clear
                        </button>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="custom-content-below-placement"
                      role="tabpanel"
                      aria-labelledby="custom-content-below-placement-tab"
                    >
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Worker</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                              />

                              <button
                                class="
                                  input-group-addon
                                  btn btn-sm
                                  bg-primary
                                  rounded-0
                                "
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Umbrella</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                              />

                              <button
                                class="
                                  input-group-addon
                                  btn btn-sm
                                  bg-primary
                                  rounded-0
                                "
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Consultant</label>
                            <div class="input-group input-group-sm">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                              />

                              <button
                                class="
                                  input-group-addon
                                  btn btn-sm
                                  bg-primary
                                  rounded-0
                                "
                              >
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label"
                              >Timesheet Entry Method</label
                            ><select class="form-control form-control-sm">
                              <option value="">All</option>
                              <option value="">Standard</option>
                              <option value="">Bulk Entry</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label"
                              >Status (Date filters will overide this)</label
                            >
                            <select class="form-control form-control-sm">
                              <option value="">All</option>
                              <option value="">Active</option>
                              <option value="">Inactive</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Project Code</label>
                            <select class="form-control form-control-sm">
                              <option value="">Choose</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="control-label">Client Site</label>
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary btn-sm">
                            Search
                          </button>
                          <button
                            type="submit"
                            class="btn btn-secondary btn-sm mx-2"
                          >
                            Clear
                          </button>
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

    <div class="row">
      <div class="col-12">
        <div class="card">
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
                  <button type="submit" class="btn btn-sm color-light mx-1">
                    Select Page
                  </button>
                  <button type="submit" class="btn btn-sm color-light mx-1">
                    Deselect Page
                  </button>
                  <button type="submit" class="btn btn-sm color-light mx-1">
                    Select All Pages
                  </button>
                  <button type="submit" class="btn btn-sm color-light mx-1">
                    Select None
                  </button>
                  <button type="submit" class="btn btn-sm color-light mx-1">
                    Choose Columns
                  </button>
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
            <!-- Create Modal-->
            <div
              class="modal fade"
              id="createmanagermodal"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalCenterTitle"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                      Client
                    </h5>
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
                    <p>Please select a client...</p>
                    <div class="form-group">
                      <label class="control-label">Client</label>
                      <div class="input-group input-group-sm">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search"
                        />

                        <button
                          class="
                            input-group-addon
                            btn btn-sm btn-primary
                            rounded-0
                          "
                        >
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary btn-sm"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button class="btn btn-primary btn-sm" data-dismiss="modal">
                      <router-link
                        style="color: white; text-decoration: none"
                        to="/profiles/manager/create"
                        >OK</router-link
                      >
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!--End Create buttton modal-->
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Select</th>
                  <th>Actions</th>
                  <th>Ref</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Street 1</th>
                  <th>Street 2</th>
                  <th>Town</th>
                  <th>Country</th>
                  <th>Client</th>
                  <th>Client Ref</th>
                  <th>Last Login</th>
                  <th>Account Status</th>
                  <th>Created</th>
                  <th>Modified</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="product in products.data" :key="product.id">
                  <td><input type="checkbox" name="" id="" /></td>
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
                      <ul id="" class="dropdown-menu">
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Change Roles</a></li>
                        <li><a href="#">Switch To</a></li>
                        <li><a href="#">Workers</a></li>
                        <li><a href="#">Consultants</a></li>
                         <li><a href="#">Clients</a></li>
                      </ul>
                    </div>
                  </td>
                  <td>{{ product.id }}</td>
                  <td>{{ product.name }}</td>
                  <td>{{ product.category.name }}</td>
                  <td>{{ product.description | truncate(20, "...") }}</td>
                  <td>{{ product.name }}</td>
                  <td>{{ product.category.name }}</td>
                  <td>{{ product.name }}</td>
                  <td>{{ product.description | truncate(20, "...") }}</td>
                  <td>{{ product.name }}</td>
                  <td>{{ product.category.name }}</td>
                  <td>{{ product.name }}</td>
                  <td>{{ product.name }}</td>
                  <td>{{ product.description | truncate(20, "...") }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
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
                    <li class="page-item active">
                      <a class="page-link" href="#"
                        >2 <span class="sr-only">(current)</span></a
                      >
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">
              Send Welcome Emails
            </button>
            <button type="submit" class="btn btn-sm btn-danger">
              Reset and Send Passwords
            </button>
            <button type="submit" class="btn btn-sm btn-primary">
              Send Timesheet Reminders
            </button>
            <button type="submit" class="btn btn-sm btn-primary">
              Send Approval Reminders
            </button>
            <button type="submit" class="btn btn-sm btn-primary">CSV</button>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
</template>

<script>
import VueTagsInput from "@johmun/vue-tags-input";

export default {
  components: {
    VueTagsInput,
  },
  data() {
    return {
      editmode: false,
      products: {},
      form: new Form({
        id: "",
        category: "",
        name: "",
        description: "",
        tags: [],
        photo: "",
        category_id: "",
        price: "",
        photoUrl: "",
      }),
      categories: [],

      tag: "",
      autocompleteItems: [],
    };
  },
  methods: {
    getResults(page = 1) {
      this.$Progress.start();

      axios
        .get("/api/draft?page=" + page)
        .then(({ data }) => (this.products = data.data));

      this.$Progress.finish();
    },
    loadProducts() {
      // if(this.$gate.isAdmin()){
      axios.get("/api/draft").then(({ data }) => (this.products = data.data));
      // }
    },
    loadCategories() {
      axios
        .get("/api/category/list")
        .then(({ data }) => (this.categories = data.data));
    },
    loadTags() {
      axios
        .get("/api/tag/list")
        .then((response) => {
          this.autocompleteItems = response.data.data.map((a) => {
            return { text: a.name, id: a.id };
          });
        })
        .catch(() => console.warn("Oh. Something went wrong"));
    },
    editModal(product) {
      this.editmode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(product);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#addNew").modal("show");
    },
    createProduct() {
      this.$Progress.start();

      this.form
        .post("api/product")
        .then((data) => {
          if (data.data.success) {
            $("#addNew").modal("hide");

            Toast.fire({
              icon: "success",
              title: data.data.message,
            });
            this.$Progress.finish();
            this.loadProducts();
          } else {
            Toast.fire({
              icon: "error",
              title: "Some error occured! Please try again",
            });

            this.$Progress.failed();
          }
        })
        .catch(() => {
          Toast.fire({
            icon: "error",
            title: "Some error occured! Please try again",
          });
        });
    },
    updateProduct() {
      this.$Progress.start();
      this.form
        .put("api/product/" + this.form.id)
        .then((response) => {
          // success
          $("#addNew").modal("hide");
          Toast.fire({
            icon: "success",
            title: response.data.message,
          });
          this.$Progress.finish();
          //  Fire.$emit('AfterCreate');

          this.loadProducts();
        })
        .catch(() => {
          this.$Progress.fail();
        });
    },
    deleteProduct(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        // Send request to the server
        if (result.value) {
          this.form
            .delete("api/product/" + id)
            .then(() => {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              // Fire.$emit('AfterCreate');
              this.loadProducts();
            })
            .catch((data) => {
              Swal.fire("Failed!", data.message, "warning");
            });
        }
      });
    },
  },
  mounted() {},
  created() {
    this.$Progress.start();

    this.loadProducts();
    this.loadCategories();
    this.loadTags();

    this.$Progress.finish();
  },
  filters: {
    truncate: function (text, length, suffix) {
      return text.substring(0, length) + suffix;
    },
  },
  computed: {
    filteredItems() {
      return this.autocompleteItems.filter((i) => {
        return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
      });
    },
  },
};
</script>


<style>
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