<style>
.has-search .form-control {
  padding-left: 2.375rem;
}

.has-search .form-control-feedback {
  position: absolute;
  z-index: 2;
  display: block;
  width: 2.375rem;
  height: 2.375rem;
  line-height: 2.375rem;
  text-align: center;
  pointer-events: none;
  color: #aaa;
}
.to {
  height: 29px;
  color: white;
  background-color: #227dc7;
}
.btn-size {
  font-size: 9px !important;
}
</style>

<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <h2>Purchase Orders</h2>
        </div>
        <div class="col-lg-6" style="text-align: right">
          <button class="btn btn-primary">
            <router-link
              style="color: white; text-decoration: none"
              to="/sales/createpurchaseorder"
              >Create Purchase Order</router-link
            >
          </button>
        </div>
      </div>
      <div class="bg-white mb-4">
        <div class="card-body">
          <div class="tab-content" id="custom-content-below-tabContent">
            <div
              class="tab-pane fade active show"
              id="custom-content-below-main"
              role="tabpanel"
              aria-labelledby="custom-content-below-main-tab"
            >
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-primary card-outline card-tabs">
                    <div class="p-2 pl-4">
                      <a
                        data-toggle="collapse"
                        style="text-decoration: none !important"
                        data-parent="#accordion"
                        href="#collapseOne"
                      >
                        <div class="timesheet_create_tit">
                          <div class="row">
                            <div class="col-md-6">
                              <h2 class="pb-2">
                                <i class="fa fa-search"></i> Search Options 
                              </h2>
                            </div>
                            <div class="col-md-6 text-right">                             
                              <i class="fa fa-plus-square"></i>                             
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="card-body">
                      <div id="accordion">
                        <div
                          id="collapseOne"
                          class="panel-collapse collapse in collapse show"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Reference</label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append"></div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Amount</label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                    style="text-align: center"
                                  />
                                  <div class="input-group-append">
                                    <span
                                      class="input-group-text to"
                                      id="validationTooltipUsernamePrepend"
                                      >to</span
                                    >
                                  </div>
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                    style="text-align: center"
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Description</label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append"></div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Start Date</label
                                >
                                <div class="input-group">
                                  <input
                                    type="date"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append">
                                    <span
                                      class="input-group-text to"
                                      id="validationTooltipUsernamePrepend"
                                      >to</span
                                    >
                                  </div>
                                  <input
                                    type="date"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append">
                                    <div class="dropdown">
                                      <button
                                        class="
                                          btn btn-primary btn-size
                                          dropdown-toggle
                                        "
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                      >
                                        Others
                                      </button>
                                      <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton"
                                      >
                                        <a class="dropdown-item" href="#"
                                          >Today</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Yesterday</a
                                        >
                                        <hr />
                                        <a class="dropdown-item" href="#"
                                          >Last 7 Days</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Last 30 Days</a
                                        >
                                        <hr />
                                        <a class="dropdown-item" href="#"
                                          >This Week</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Last Week</a
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Client</label
                                >
                                <div class="input-group">
                                  <input
                                    type="text"
                                    class="form-control form-control-sm"
                                    placeholder="Search this blog"
                                  />
                                  <div class="input-group-append">
                                    <button
                                      class="btn btn-primary fa-icon"
                                      type="button"
                                    >
                                      <i class="fa fa-search"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >End Date</label
                                >
                                <div class="input-group">
                                  <input
                                    type="date"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append">
                                    <span
                                      class="input-group-text to"
                                      id="validationTooltipUsernamePrepend"
                                      >to</span
                                    >
                                  </div>
                                  <input
                                    type="date"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append">
                                    <div class="dropdown">
                                      <button
                                        class="
                                          btn btn-primary btn-size
                                          dropdown-toggle
                                        "
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                      >
                                        Others
                                      </button>
                                      <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton"
                                      >
                                        <a class="dropdown-item" href="#"
                                          >Today</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Yesterday</a
                                        >
                                        <hr />
                                        <a class="dropdown-item" href="#"
                                          >Last 7 Days</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Last 30 Days</a
                                        >
                                        <hr />
                                        <a class="dropdown-item" href="#"
                                          >This Week</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Last Week</a
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Status</label
                                >
                                <select class="form-control select2">
                                  <option value="1">Active</option>
                                  <option value="2">Inactive</option>
                                  <option value="3">All</option>
                                </select>
                              </div>
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Sheet Start Date</label
                                >
                                <div class="input-group">
                                  <input
                                    type="date"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append">
                                    <span
                                      class="input-group-text to"
                                      id="validationTooltipUsernamePrepend"
                                      >to</span
                                    >
                                  </div>
                                  <input
                                    type="date"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append">
                                    <div class="dropdown">
                                      <button
                                        class="
                                          btn btn-primary btn-size
                                          dropdown-toggle
                                        "
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                      >
                                        Others
                                      </button>
                                      <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton"
                                      >
                                        <a class="dropdown-item" href="#"
                                          >Today</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Yesterday</a
                                        >
                                        <hr />
                                        <a class="dropdown-item" href="#"
                                          >Last 7 Days</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Last 30 Days</a
                                        >
                                        <hr />
                                        <a class="dropdown-item" href="#"
                                          >This Week</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Last Week</a
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Tracked By</label
                                >
                                <select class="form-control select2">
                                  <option value="1">All</option>
                                  <option value="2">Amount</option>
                                  <option value="3">Hours</option>
                                  <option value="4">Dates</option>
                                  <option value="5">None</option>
                                </select>
                              </div>
                              <div class="col-lg-6">
                                <label for="client" class="d-block mb-1"
                                  >Sheet End Date</label
                                >
                                <div class="input-group">
                                  <input
                                    type="date"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append">
                                    <span
                                      class="input-group-text to"
                                      id="validationTooltipUsernamePrepend"
                                      >to</span
                                    >
                                  </div>
                                  <input
                                    type="date"
                                    class="form-control form-control-sm"
                                  />
                                  <div class="input-group-append">
                                    <div class="dropdown">
                                      <button
                                        class="
                                          btn btn-primary btn-size
                                          dropdown-toggle
                                        "
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                      >
                                        Others
                                      </button>
                                      <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton"
                                      >
                                        <a class="dropdown-item" href="#"
                                          >Today</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Yesterday</a
                                        >
                                        <hr />
                                        <a class="dropdown-item" href="#"
                                          >Last 7 Days</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Last 30 Days</a
                                        >
                                        <hr />
                                        <a class="dropdown-item" href="#"
                                          >This Week</a
                                        >
                                        <a class="dropdown-item" href="#"
                                          >Last Week</a
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br />
                            <div class="row">
                              <div
                                style="padding-right: 10px; padding-left: 12px"
                              >
                                <button class="btn btn-success" type="submit">
                                  Search
                                </button>
                              </div>
                              <div style="padding-right: 10px">
                                <button class="btn btn-primary" type="submit">
                                  Reset All
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- </div>-->
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
                <div class="col-lg-9">
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
                    <button type="submit" class="btn btn-light mx-2">
                      Print
                    </button>
                    <button type="submit" class="btn btn-light mx-2">
                      CSV
                    </button>
                    <button type="submit" class="btn btn-light mx-2">
                      Choose Columns
                    </button>
                  </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                  <label class="mb-0">Show</label>
                  <select class="form-control w-auto pt-0 pb-0 h-auto mx-2">
                    <option value="">10</option>
                    <option value="">25</option>
                    <option value="">50</option>
                    <option value="">100</option>
                    <option value="">250</option>
                    <option value="">500</option>
                  </select>
                  <label class="mb-0">entries</label>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-responsive table-hover">
                <thead>
                  <tr>
                    <th>Actions</th>
                    <th>Reference</th>
                    <th>Description</th>
                    <th>Client</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Sheet Start Date</th>
                    <th>Sheet End Date</th>
                    <th>Amount</th>
                    <th>Spend</th>
                    <th>Remaining</th>
                    <th>Hours</th>
                    <th>Hours Used</th>
                    <th>Hours Remaining</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="product in products.data" :key="product.id">
                    <td>
                      <div
                        class="btn-group btn-xs dropdown dropdown-actions-table"
                      >
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                      </div>
                    </td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.id }}</td>
                    <td>{{ product.name }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row mb-4">
                <div class="col-sm-5 align-self-center">
                  <div>Showing 1 to 10 of 11482 entries - 0 rows selected</div>
                </div>
                <div class="col-sm-7 d-flex">
                  <div class="pg-ul ml-auto">
                    <pagination
                      :data="products"
                      @pagination-change-page="getResults"
                    ></pagination>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
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
  mounted() {
    //Initialize Select2 Elements
    $(".select2").select2();
    $('[data-toggle="tooltip"]').tooltip();
    console.log("Creat Timesheet mounted.");
  },
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
.pg-ul ul {
  margin-bottom: 0px;
}
</style>