<style>
.dropdown-menu > li > a {
    padding: 6px 20px;
}
.dropdown-menu>li>a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
}
</style>
<template>

<section class="content" >
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6">               
                <h2>Clients  </h2>
            </div>
            <div class="col-lg-6" style="text-align:right">
                <button class="btn btn-primary"><router-link style="color:white;text-decoration: none" to="/profiles/placement/clientedit">Create</router-link></button>
            </div>
        </div>
        <div class="panel-group panel-group-joined" id="filter-panel"  style="border-top:3px solid #009ada">
            <div class="panel panel-border panel-primary">
                <a data-toggle="collapse" data-parent="#filter-panel" href="#collapseOne" class="" aria-expanded="true">
                    <div class="panel-heading">
                        <!-- <h4 class="panel-title">
                            <i class="fa fa-search"></i> Search Options
                        </h4> -->
                    </div>
                </a>
               
            </div>  
	    </div>
    </div>

     <div class="row">

          <div class="col-12">
        
            <div class="card">
              <div class="card-header" style="background-color:white;">
                    <button type="submit" class="btn btn-light">Choose Column</button>
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
                      <th>Actions</th>
                      <th>Acounts Ref</th>
                      <th>Debtor Ref</th>
                      <th>Ref</th>
                      <th>Name</th>
                      <th>Street 1</th>
                      <th>Street 2</th>
                      <th>Town City </th>
                      <th>Postcode</th>
                      <th>Telephone</th>
                      <th>Invoice Street 1</th>
                      <th>Invoice Street 2</th>
                      <th>Invoice Town/City</th>
                      <th>Invoice Postcode</th>
                      <th>Invoice Telephone</th>
                      <th>Created</th>
                      <th>Modified</th>
                    </tr>
                  </thead>
                  <tbody>
                     <tr v-for="product in products.data" :key="product.id">
                      <td>
                        <div class="input-group-append">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-size dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Yesterday</a>
                                    <hr>
                                    <a class="dropdown-item" href="#">Last 7 Days</a>
                                    <a class="dropdown-item" href="#">Last 30 Days</a>
                                    <hr>
                                    <a class="dropdown-item" href="#">This Week</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                </div>
                            </div>
                        </div>
                      </td>                      
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
                      <td>{{product.name}}</td>
                      <td>{{product.description | truncate(30, '...')}}</td>
                      <td>{{product.category.name}}</td>
                      <td>{{product.price}}</td>
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
                    <button type="submit" class="btn btn-info">Download Report</button>
                    <button type="submit" class="btn btn-info">Download Details Report</button>
                    <button type="submit" class="btn btn-info">CSV</button>

              </div>

            </div>
            <!-- /.card -->
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
