<template>
  <section class="content">
    <div class="container-fluid">
        <div class="row">

          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background-color:white;">
                <h3 class="card-title" style="padding-top:10px;">Approved List</h3>
                    <button style="margin-left:20px;" type="submit" class="btn btn-light">Choose Column</button>
                    <div class="card-tools">
                  <!-- <button type="button" class="btn btn-sm btn-primary" @click="newModal">
                      <i class="fa fa-plus-square"></i>
                      Add New
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Worker</th>
                        <th>Worker Type</th>
                        <th>Worker Ref</th>
                        <th>Worker Wxt Ref</th>
                        <th>Ltd Company Name</th>
                        <th>Worker Invoice Period </th>
                        <th>Timesheet Start</th>
                        <th>Paroll/Frequency</th>
                        <th>Provider</th>
                        <th>Consultant</th>
                        <th>Description</th>
                        <th>Client</th>
                        <th>Manager</th>
                        <th>Placement</th>
                        <th>Project Code</th>
                        <th>Placement Start</th>
                        <th>Placement End</th>
                        <th>Freehand Ref</th>
                        <th>Payroll Ref</th>
                        <th>Worker First Name</th>
                        <th>Worker Last Name</th>
                        <th>Agency Name</th>
                        <th>Job Title</th>
                        <th>Job Description</th>
                        <th>Pending Approvers</th>
                        <th>Period Ending</th>
                        <th>Status</th>
                        <th>Hours</th>
                        <th>Chargeable Hours</th>
                        <th>Payable Hours</th>
                        <th>Units</th>
                        <th>Chargeable  Units</th>
                        <th>Payable  Unit</th>
                        <th>Pay</th>
                        <th>Pay Currency</th>
                        <th>Client Acc Ref</th>
                        <th>Exported Date</th>
                        <th>Total Cost</th>
                        <th>Purchase Nominal</th>
                        <th>Sales Nominal</th>
                        <th>Supplier Accounts Ref</th>
                        <th>Workers Accounts Ref</th>
                        <th>Supplier Gender</th>
                        <th>Exchange rate Pay</th>
                        <th>Exchange rate Charge</th>
                        <th>Charge</th>
                        <th>Charge Currency</th>
                        <th>Funds Received</th>
                        <th>Charge GBP</th>
                        <th>Type</th>
                        <th>Approved By</th>
                        <th>Submitted</th>
                        <th>Submitted By</th>
                        <th>Client Country</th>
                        <th>Client Invoice Street1</th>
                        <th>Client Invoice Street2	</th>
                        <th>Client Invoice Town</th>
                        <th>Client Invoice Postcode</th>
                        <th>Client Invoice Country</th>
                        <th>Client Ref</th>
                        <th>Client Site</th>
                        <th>Paper</th>
                        <th>Sales Project</th>
                        <th>Hours Worked</th>
                        <th>Paid Date</th>
                    </tr>
                  </thead>
                  <tbody>
                     <tr v-for="product in products.data" :key="product.id">
                      <td>{{product.id}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                       <td>{{product.id}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                       <td>{{product.id}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                       <td>{{product.id}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                       <td>{{product.id}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.id}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
                      <td>{{product.category.name}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <pagination :data="products" @pagination-change-page="getResults"></pagination>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-info">Print Report</button>
                    <button type="submit" class="btn btn-info">Print Details Report</button>
                    <button type="submit" class="btn btn-info">CSV</button>
                    <button type="submit" class="btn btn-info">Default CSV</button>
                    <button type="submit" class="btn btn-info">Reset Column</button>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
  </section>
</template>

<script>
    import VueTagsInput from '@johmun/vue-tags-input';

    export default {
      components: {
          VueTagsInput,
        },
        data () {
            return {
                editmode: false,
                products : {},
                form: new Form({
                    id : '',
                    category : '',
                    name: '',
                    description: '',
                    tags:  [],
                    photo: '',
                    category_id: '',
                    price: '',
                    photoUrl: '',
                }),
                categories: [],
              
                tag:  '',
                autocompleteItems: [],
            }
        },
        methods: {

          getResults(page = 1) {

              this.$Progress.start();
              
              axios.get('/api/draft?page=' + page).then(({ data }) => (this.products = data.data));

              this.$Progress.finish();
          },
          loadProducts(){

            // if(this.$gate.isAdmin()){
              axios.get("/api/draft").then(({ data }) => (this.products = data.data));
            // }
          },
          loadCategories(){
              axios.get("/api/category/list").then(({ data }) => (this.categories = data.data));
          },
          loadTags(){
              axios.get("/api/tag/list").then(response => {
                  this.autocompleteItems = response.data.data.map(a => {
                      return { text: a.name, id: a.id };
                  });
              }).catch(() => console.warn('Oh. Something went wrong'));
          },
          editModal(product){
              this.editmode = true;
              this.form.reset();
              $('#addNew').modal('show');
              this.form.fill(product);
          },
          newModal(){
              this.editmode = false;
              this.form.reset();
              $('#addNew').modal('show');
          },
          createProduct(){
              this.$Progress.start();

              this.form.post('api/product')
              .then((data)=>{
                if(data.data.success){
                  $('#addNew').modal('hide');

                  Toast.fire({
                        icon: 'success',
                        title: data.data.message
                    });
                  this.$Progress.finish();
                  this.loadProducts();

                } else {
                  Toast.fire({
                      icon: 'error',
                      title: 'Some error occured! Please try again'
                  });

                  this.$Progress.failed();
                }
              })
              .catch(()=>{

                  Toast.fire({
                      icon: 'error',
                      title: 'Some error occured! Please try again'
                  });
              })
          },
          updateProduct(){
              this.$Progress.start();
              this.form.put('api/product/'+this.form.id)
              .then((response) => {
                  // success
                  $('#addNew').modal('hide');
                  Toast.fire({
                    icon: 'success',
                    title: response.data.message
                  });
                  this.$Progress.finish();
                      //  Fire.$emit('AfterCreate');

                  this.loadProducts();
              })
              .catch(() => {
                  this.$Progress.fail();
              });

          },
          deleteProduct(id){
              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  showCancelButton: true,
                  confirmButtonColor: '#d33',
                  cancelButtonColor: '#3085d6',
                  confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {

                      // Send request to the server
                        if (result.value) {
                              this.form.delete('api/product/'+id).then(()=>{
                                      Swal.fire(
                                      'Deleted!',
                                      'Your file has been deleted.',
                                      'success'
                                      );
                                  // Fire.$emit('AfterCreate');
                                  this.loadProducts();
                              }).catch((data)=> {
                                  Swal.fire("Failed!", data.message, "warning");
                              });
                        }
                  })
          },

        },
        mounted() {
            
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
            return this.autocompleteItems.filter(i => {
              return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
            });
          },
        },
    }
</script>
