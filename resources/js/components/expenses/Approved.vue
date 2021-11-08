<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <h2>Approved Expense</h2>
        </div>
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
                      Choose Column
                    </button>
                  </div>
                </div>
                <div class="col-sm-2 mb-3">
                  <div class="d-flex align-items-center justify-content-end">
                    <label class="mb-0">Show</label>
                    <select
                      class="form-control w-auto ml-2 mr-2 pt-0 pb-0 h-100"
                    >
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
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Worker</th>
                    <th>Placement</th>
                    <th>Client</th>
                    <th>Receipt Date</th>
                    <th>Description</th>
                    <th>Unit</th>
                    <th>Status</th>
                    <th>Unit Net</th>
                    <th>Net Total</th>
                    <th>VAT Rate</th>
                    <th>Claim Currency</th>
                    <th>Pay</th>
                    <th>Pay Currency</th>
                    <th>Charge</th>
                    <th>Charge Currency</th>
                    <th>Net (GBP)</th>
                    <th>Receipt</th>
                    <th>Payroll/Frequency</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="product in products.data" :key="product.id">
                    <td>
                      <a href="">{{ product.id }}</a>
                    </td>
                    <td><a href="">Madden,John</a></td>
                    <td><a href="">Pmt149</a></td>
                    <td>Southampton Marine Services Ltd</td>
                    <td>28/01/2019</td>
                    <td></td>
                    <td>1</td>
                    <td>Submitted</td>
                    <td>25</td>
                    <td>25</td>
                    <td>0</td>
                    <td>0</td>
                    <td>GBP</td>
                    <td>25</td>
                    <td>GBP</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
              <button type="submit" class="btn btn-danger btn-sm">
                Print Report
              </button>
              <button type="submit" class="btn btn-primary btn-sm">CSV</button>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>

      <!-- Modal -->
      <div
        class="modal fade"
        id="addNew"
        tabindex="-1"
        role="dialog"
        aria-labelledby="addNew"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" v-show="!editmode">Create New Product</h5>
              <h5 class="modal-title" v-show="editmode">Edit Product</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form
              @submit.prevent="editmode ? updateProduct() : createProduct()"
            >
              <div class="modal-body">
                <div class="form-group">
                  <label>Name</label>
                  <input
                    v-model="form.name"
                    type="text"
                    name="name"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('name') }"
                  />
                  <has-error :form="form" field="name"></has-error>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input
                    v-model="form.description"
                    type="text"
                    name="description"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('description') }"
                  />
                  <has-error :form="form" field="description"></has-error>
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input
                    v-model="form.price"
                    type="text"
                    name="price"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('price') }"
                  />
                  <has-error :form="form" field="price"></has-error>
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" v-model="form.category_id">
                    <option
                      v-for="(cat, index) in categories"
                      :key="index"
                      :value="index"
                      :selected="index == form.category_id"
                    >
                      {{ cat }}
                    </option>
                  </select>
                  <has-error :form="form" field="category_id"></has-error>
                </div>
                <div class="form-group">
                  <label>Tags</label>
                  <vue-tags-input
                    v-model="form.tag"
                    :tags="form.tags"
                    :autocomplete-items="filteredItems"
                    @tags-changed="(newTags) => (form.tags = newTags)"
                  />
                  <has-error :form="form" field="tags"></has-error>
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button v-show="editmode" type="submit" class="btn btn-success">
                  Update
                </button>
                <button
                  v-show="!editmode"
                  type="submit"
                  class="btn btn-primary"
                >
                  Create
                </button>
              </div>
            </form>
          </div>
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
