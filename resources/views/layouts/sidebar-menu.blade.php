<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <router-link to="/dashboard" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt blue"></i>
          <p>
            Dashboard
          </p>
        </router-link>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="fas fa-edit"></i> -->
          <i class="nav-icon  fas fa-clock"></i>
          <p>
          Timesheets
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <router-link to="/timesheets/create" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Create</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/timesheets/draft" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Drafts </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/timesheets/unauthorised" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Unauthorised</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/timesheets/approved" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Approved </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/timesheets/reject" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Reject </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/timesheets/search" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Search </p>
            </router-link>
          </li>          
          <li class="nav-item">
            <router-link to="/timesheets/export" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Export </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/timesheets/missing" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Missing </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/timesheets/reminder" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Send reminders </p>
            </router-link>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="fas fa-edit"></i> -->
          <i class="nav-icon  fas fa-clock"></i>
          <p>
          Expenses
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <!-- <li class="nav-item">
            <router-link to="/expenses/create" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Create</p>
            </router-link> -->
          </li>
          <li class="nav-item">
            <router-link to="/expenses/draft" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Drafts </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/expenses/unauthorised" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Unauthorised</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/expenses/approved" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Approved </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/expenses/reject" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Reject </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/expenses/search" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Search </p>
            </router-link>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="fas fa-edit"></i> -->
          <i class="nav-icon  fas fa-clock"></i>
          <p>
          Profiles
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <router-link to="/profiles/placement/create" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Create</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/profiles/placement/view" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View </p>
            </router-link>
          </li> 
          <li class="nav-item">
            <router-link to="/profiles/placement/client" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Client </p>
            </router-link>
          </li> 
        </ul>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="fas fa-edit"></i> -->
          <i class="nav-icon  fas fa-clock"></i>
          <p>
          Sales
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <router-link to="/sales/listinvoice" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>List Invoice</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/sales/listcreditnotes" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>List Credit Notes </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/sales/purchaseorder" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Purchase Order </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/sales/search" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Search</p>
            </router-link>
          </li>          
        </ul>        
      </li>     
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="fas fa-edit"></i> -->
          <i class="nav-icon  fas fa-clock"></i>
          <p>
          Pay
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <router-link to="/pay/listinvoice" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>List Invoice</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/pay/listcreditnotes" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>List Credit Notes </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/pay/search" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Search</p>
            </router-link>
          </li>    
          <li class="nav-item">
            <router-link to="/pay/generate-invoice" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Generate Invoice</p>
            </router-link>
          </li>         
        </ul>        
      </li>      
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="fas fa-edit"></i> -->
          <i class="nav-icon  fas fa-clock"></i>
          <p>
          My Account
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <router-link to="/myaccount/personaldetails" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Personal Details</p>
            </router-link>
          </li>               
        </ul>    
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <router-link to="/myaccount/notification" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>My Notification Settings</p>
            </router-link>
          </li>               
        </ul>     
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="fas fa-edit"></i> -->
          <i class="nav-icon  fas fa-clock"></i>
          <p>
          Ateca Consulting Ltd
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <router-link to="/agency/edit" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Edit Agency</p>
            </router-link>
          </li>          
        </ul>        
      </li>
      <li class="nav-item">
        <router-link to="/setting/configuration" class="nav-link">
          <i class="nav-icon fas fa-list orange"></i>
          <p>
            Settings
          </p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link to="/products" class="nav-link">
          <i class="nav-icon fas fa-list orange"></i>
          <p>
            Product
          </p>
        </router-link>
      </li>
  
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Forms
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <router-link to="/forms/general" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>General Elements</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/forms/advanced" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Advanced Elements</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/forms/editors" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Editors</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/forms/validation" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Validation</p>
            </router-link>
          </li>
        </ul>
      </li>
    @can('isAdmin')
        <li class="nav-item">
          <router-link to="/users" class="nav-link">
            <i class="fa fa-users nav-icon blue"></i>
            <p>Users</p>
          </router-link>
        </li>
      @endcan

      

      @can('isAdmin')
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-cog green"></i>
          <p>
            Settings
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <router-link to="/product/category" class="nav-link">
              <i class="nav-icon fas fa-list-ol green"></i>
              <p>
                Category
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/product/tag" class="nav-link">
              <i class="nav-icon fas fa-tags green"></i>
              <p>
                Tags
              </p>
            </router-link>
          </li>
          
            <li class="nav-item">
              <router-link to="/developer" class="nav-link">
                  <i class="nav-icon fas fa-cogs white"></i>
                  <p>
                      Developer
                  </p>
              </router-link>
            </li>
        </ul>
      </li>

      @endcan
      
      

      <li class="nav-item">
        <a href="#" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-power-off red"></i>
          <p>
            {{ __('Logout') }}
          </p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </nav>