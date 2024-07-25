
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-account-circle-line"></i><span>User Info</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('view_user') }}">
              <i class="bi bi-circle"></i><span>User Manager</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Create_user') }}">
              <i class="bi bi-circle"></i><span>Create User</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End User Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Role</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('role.view') }}">
              <i class="bi bi-circle"></i><span>Role Manager</span>
            </a>
          </li>
          <li>
            <a href="{{ route('role.create') }}">
              <i class="bi bi-circle"></i><span>Create Role</span>
            </a>
          </li>
        </ul>
      </li><!-- End Role Nav -->

      {{-- Categories Section --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Category_View') }}">
              <i class="bi bi-circle"></i><span>Category</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Subategory_View') }}">
              <i class="bi bi-circle"></i><span>Subcategory</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      {{-- District Section --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>District</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('District_View') }}">
              <i class="bi bi-circle"></i><span>District</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Sub_district_View') }}">
              <i class="bi bi-circle"></i><span>Sub-District</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      {{-- Post Section --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-navn" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-navn" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('post.create') }}">
              <i class="bi bi-circle"></i><span>Add New Post</span>
            </a>
          </li>
          <li>
            <a href="{{ route('post.view') }}">
              <i class="bi bi-circle"></i><span>Manage Post</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->


      <li class="nav-heading">Pages</li>

      

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-settings-5-line"></i><span>Setting</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Notices</span>
            </a>
          </li>
          
        </ul>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('social.option') }}">
              <i class="bi bi-circle"></i><span>Socials</span>
            </a>
          </li>
          
        </ul>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('seo.create') }}">
              <i class="bi bi-circle"></i><span>Seo Section</span>
            </a>
          </li>
          
        </ul>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Live TV</span>
            </a>
          </li>
          
        </ul>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Website Settings</span>
            </a>
          </li>
          
        </ul>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('prayer.create') }}">
              <i class="bi bi-circle"></i><span>Prayers Time</span>
            </a>
          </li>
          
        </ul>
      </li>
      {{-- Setting Section --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.logout') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside>