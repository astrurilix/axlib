  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == '' ? '' : 'collapsed' }}" href="/">
          <i class="bi bi-search"></i>
          <span>Discover</span>
        </a>
      </li> <!-- End Discover -->

      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'category' ? '' : 'collapsed' }}" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        <ul id="category-nav" class="nav-content {{ Request::segment(1) == 'category' ? 'collapse show' : 'collapse' }}" data-bs-parent="#sidebar-nav">
            <li>
                <a href="/category?filter=biographies-and-memoirs" class="{{ request()->fullUrlIs('*/category?filter=biographies-and-memoirs') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Biographies and Memoirs</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=business-books" class = "{{ request()->fullUrlIs('*/category?filter=business-books') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Business Books</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=dystopian" class="{{ request()->fullUrlIs('*/category?filter=dystopian') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Dystopian</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=fantasy" class="{{ request()->fullUrlIs('*/category?filter=fantasy"') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Fantasy</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=fitness-books" class="{{ request()->fullUrlIs('*/category?filter=fitness-books') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Fitness Books</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=history-books" class="{{ request()->fullUrlIs('*/category?filter=history-books') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>History Books</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=philosophy-books" class="{{ request()->fullUrlIs('*/category?filter=philosophy-books') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Philosophy Books</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=psychology-books" class="{{ request()->fullUrlIs('*/category?filter=psychology-books') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Psychology Books</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=science-books" class="{{ request()->fullUrlIs('*/category?filter=science-books') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Science Books</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=science-fiction" class="{{ request()->fullUrlIs('*/category?filter=science-fiction') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Science Fiction</span>
                </a>
            </li>
            <li>
                <a href="/category?filter=others" class="{{ request()->fullUrlIs('*/category?filter=others') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Others...</span>
                </a>
            </li>
            
        </ul>
      </li> <!-- End Category -->
      @if ((auth()->user())!= null)
      
      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'my-library' ? '' : 'collapsed' }}" href="/my-library">
          <i class="bi bi-collection"></i>
          <span>My Library</span>
        </a>
      </li> <!-- End My Library -->

      <li class="nav-heading">Book Management</li>

      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'books' ? '' : 'collapsed' }}" href="/books">
          <i class="bi bi-book"></i>
          <span>Books</span>
        </a>
      </li> <!-- End Books -->

      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'categories' ? '' : 'collapsed' }}" href="/categories">
          <i class="bi bi-collection-fill"></i>
          <span>Categories</span>
        </a>
      </li> <!-- End Category -->

      <li class="nav-heading">User Management</li>

      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'users' ? '' : 'collapsed' }}" href="/users">
          <i class="bi bi-people"></i>
          <span>Users</span>
        </a>
      </li> <!-- End Users -->

      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'roles' ? '' : 'collapsed' }}" href="/roles">
          <i class="bi bi-grid"></i>
          <span>Roles</span>
        </a>
      </li> <!-- End Roles -->
    </ul>
    @endif

  </aside><!-- End Sidebar-->