<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <img src="{{ asset('assets/img/logo.jpg') }}" style="width: 150px;height: 61px;margin-left: 11%;">
   
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none text-black">
      <i class="bx bx-chevron-left bx-sm align-middle"></i> 
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
      <a href="{{route('dashboard')}}" class="menu-link">
        <i class="menu-icon fa fa-dashboard" aria-hidden="true"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <li class="menu-item {{ Request::routeIs('branch.*') ? 'active' : '' }}">
      <a href="{{route('branch.list')}}" class="menu-link">
        <i class="menu-icon fa fa-building-o" aria-hidden="true"></i>
        <div data-i18n="Analytics">Branch</div>
      </a>
    </li>
    <li class="menu-item {{ Request::routeIs('staff.*') ? 'active' : '' }}">
      <a href="{{route('staff.list')}}" class="menu-link">
        <i class="menu-icon fa fa-users" aria-hidden="true"></i>
        <div data-i18n="Analytics">Staff</div>
      </a>
    </li>
    <li class="menu-item {{ Request::routeIs('expenses.*') ? 'active' : '' }}">
      <a href="{{route('expenses.list')}}" class="menu-link">
        <i class="menu-icon fa fa-money" aria-hidden="true"></i>
        <div data-i18n="Analytics">Expenses</div>
      </a>
    </li>
    <li class="menu-item {{ Request::routeIs('inquiry.*') ? 'active' : '' }}">
      <a href="{{route('inquiry.list')}}" class="menu-link">
        <i class="menu-icon fa fa-user" aria-hidden="true"></i>
        <div data-i18n="Analytics">Inquiry</div>
      </a>
    </li>
    <li class="menu-item {{ Request::routeIs('customer.*') ? 'active' : '' }}">
      <a href="{{route('customer.list')}}" class="menu-link">
        <i class="menu-icon fa fa-user" aria-hidden="true"></i>
        <div data-i18n="Analytics">Customers</div>
      </a>
    </li>
    <li class="menu-item {{ Request::routeIs('invoice.*') ? 'active' : '' }}">
      <a href="{{route('invoice.Listview')}}" class="menu-link">
        <i class="menu-icon fa fa-file" aria-hidden="true"></i>
        <div data-i18n="Analytics">Invoices</div>
      </a>
    </li>
    <li class="menu-item {{ Request::routeIs('education.*') ? 'active' : '' }}">
      <a href="{{route('education.list')}}" class="menu-link">
        <i class="menu-icon fa fa-graduation-cap" aria-hidden="true"></i>
        <div data-i18n="Analytics">Educations</div>
      </a>
    </li>
   
    <li class="menu-item {{ Request::routeIs('report.*') ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon fa fa-bar-chart" aria-hidden="true"></i>
        <div data-i18n="Account Settings">Reports</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{route('report.inquiry')}}" class="menu-link">
            {{-- <i class="menu-icon fa fa-bar-chart" aria-hidden="true"></i> --}}
            <div data-i18n="Analytics">Inquiry</div>
          </a>
        </li> 
        <li class="menu-item">
          <a href="{{route('report.customer')}}" class="menu-link">
            {{-- <i class="menu-icon fa fa-bar-chart" aria-hidden="true"></i> --}}
            <div data-i18n="Analytics">Customer</div>
          </a>
        </li> 
        <li class="menu-item">
          <a href="{{route('report.staff')}}" class="menu-link">
            {{-- <i class="menu-icon fa fa-bar-chart" aria-hidden="true"></i> --}}
            <div data-i18n="Analytics">Staff</div>
          </a>
        </li> 
        <li class="menu-item">
          <a href="{{route('report.invoice')}}" class="menu-link">
            {{-- <i class="menu-icon fa fa-bar-chart" aria-hidden="true"></i> --}}
            <div data-i18n="Analytics">Invoice</div>
          </a>
        </li> 
      </ul>
    </li>
   
   
    
   
   
   
    
    
    {{-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon fa fa-cog" aria-hidden="true"></i>
        <div data-i18n="Account Settings">Settings</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{route('user.list')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Layouts">Users</div>
          </a>
        </li> 
       
      </ul>
    </li> --}}
    {{-- @endif --}}
   
    
   
  </ul>
</aside>