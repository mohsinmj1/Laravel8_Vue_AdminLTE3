<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card" v-if="$gate.isAdmin()">
            <div class="card-header d-flex align-items-center">
              <div class="align-self-center">
                <h3 class="card-title">Tax Rates</h3>
              </div>
              <div class="ml-auto">
                <button
                  type="button"
                  class="btn btn-sm btn-primary"
                  @click="newModal"
                >
                  <i class="fa fa-plus-square"></i>
                  Add New
                </button>
              </div>
            </div>
            <div class="card-header" style="background-color: white">
              <div class="row">
                <div class="col-sm-10">
                  <div class="d-flex align-items-center">
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
                      Select All
                    </button>
                    <button type="submit" class="btn btn-sm color-light mx-1">
                      Select None
                    </button>
                  </div>
                </div>
                <div class="col-sm-2">
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
                    <th>Select</th>
                    <th>Tax Rates</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="category in categories.data" :key="category.id">
                    <td>{{ category.id }}</td>
                    <td><input type="checkbox" name="" id="" /></td>
                    <td class="text-capitalize">{{ category.name }}</td>
                    <td class="text-capitalize">{{ category.status }}</td>
                    <td>
                      <a href="#" @click="editModal(category)">
                        <i class="fa fa-edit blue"></i>
                      </a>
                    </td>
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
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm mx-1">
                    Import
                  </button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Export
                  </button>
                  <button type="submit" class="btn btn-danger btn-sm">
                    Delete
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>

      <div v-if="!$gate.isAdmin()">
        <not-found></not-found>
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
              <h5 class="modal-title" v-show="!editmode">
                Create New Tax Rates
              </h5>
              <h5 class="modal-title" v-show="editmode">Update Tax Rates</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- <form @submit.prevent="createUser"> -->

            <form
              @submit.prevent="editmode ? updateCategory() : createCategory()"
            >
              <div class="modal-body">
                <div class="form-group">
                  <label>Tax Rates</label>
                  <input
                    v-model="form.name"
                    type="text"
                    name="name"
                    class="form-control form-control-sm"
                    :class="{ 'is-invalid': form.errors.has('name') }"
                  />
                  <has-error :form="form" field="name"></has-error>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control form-control-sm">
                    <option selected>Publish</option>
                    <option>Private</option>
                  </select>
                  <has-error :form="form" field="status"></has-error>
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
                <button
                  v-show="editmode"
                  type="submit"
                  class="btn btn-primary btn-sm"
                >
                  Update
                </button>
                <button
                  v-show="!editmode"
                  type="submit"
                  class="btn btn-primary btn-sm"
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
export default {
  data() {
    return {
      editmode: false,
      categories: {},
      form: new Form({
        id: "",
        name: "",
        description: "",
      }),
    };
  },
  methods: {
    getResults(page = 1) {
      this.$Progress.start();

      axios
        .get("/api/category?page=" + page)
        .then(({ data }) => (this.categories = data.data));

      this.$Progress.finish();
    },
    updateCategory() {
      this.$Progress.start();
      this.form
        .put("/api/category/" + this.form.id)
        .then((response) => {
          // success
          $("#addNew").modal("hide");
          Toast.fire({
            icon: "success",
            title: response.data.message,
          });
          this.$Progress.finish();
          //  Fire.$emit('AfterCreate');

          this.loadCategories();
        })
        .catch(() => {
          this.$Progress.fail();
        });
    },
    editModal(category) {
      this.editmode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(category);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#addNew").modal("show");
    },

    loadCategories() {
      if (this.$gate.isAdmin()) {
        axios
          .get("/api/category")
          .then(({ data }) => (this.categories = data.data));
      }
    },

    createCategory() {
      this.form
        .post("/api/category")
        .then((response) => {
          $("#addNew").modal("hide");

          Toast.fire({
            icon: "success",
            title: response.data.message,
          });

          this.$Progress.finish();
          this.loadCategories();
        })
        .catch(() => {
          Toast.fire({
            icon: "error",
            title: "Some error occured! Please try again",
          });
        });
    },
  },
  mounted() {
    console.log("Component mounted.");
  },
  created() {
    this.$Progress.start();
    this.loadCategories();
    this.$Progress.finish();
  },
};
</script>
