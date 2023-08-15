<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      @if (Auth::user()->membership_id == 1 || Auth::user()->membership_id == 2)
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @else
      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endif

      <li class="nav-heading">Master</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/customer">
          <i class="bi bi-people"></i>
          <span>Customer</span>
        </a>
      </li><!-- End Customer Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="/membership">
          <i class="bi bi-shield-check"></i>
          <span>Membership</span>
        </a>
      </li><!-- End Membership Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="/valas">
          <i class="bi bi-currency-exchange"></i>
          <span>Valas</span>
        </a>
      </li><!-- End Valas Nav -->

    </ul>

  </aside><!-- End Sidebar-->