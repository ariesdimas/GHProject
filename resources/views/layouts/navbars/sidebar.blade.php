<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-3.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Garis Harmoni') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">save</i>
          <p>{{ __('Master Data') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'employees' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('employees.index') }}">
                <span class="sidebar-mini"> EM </span>
                <span class="sidebar-normal"> {{ __('Employees') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'customer' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('customer.index') }}">
                <span class="sidebar-mini"> CO </span>
                <span class="sidebar-normal"> {{ __('Customers') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'catalogue' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('catalogue.index') }}">
                <span class="sidebar-mini"> CT </span>
                <span class="sidebar-normal"> {{ __('Catalogue') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'vehicle' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('vehicle.index') }}">
                <span class="sidebar-mini"> VH </span>
                <span class="sidebar-normal"> {{ __('Vehicle') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'bom' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('bom.index') }}">
                <span class="sidebar-mini"> BM </span>
                <span class="sidebar-normal"> {{ __('Build of Material') }} </span>
              </a>
            </li>
            
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('vehicle.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Sales Order') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('vehicle.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Production') }}</p>
        </a>
      </li>
      
      
    </ul>
  </div>
</div>
