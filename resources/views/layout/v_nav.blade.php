<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/" class="nav-link {{request()->is('/') ? 'active' : ''}}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/siswa" class="nav-link {{request()->is('siswa') ? 'active' : ''}}">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Siswa
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/guru" class="nav-link {{request()->is('guru') ? 'active' : ''}}">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Guru
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/user" class="nav-link {{request()->is('user') ? 'active' : ''}}">
          <i class="nav-icon fas fa-book"></i>
          <p>
            User
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/pelanggan" class="nav-link {{request()->is('pelanggan') ? 'active' : ''}}">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Pelanggan
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/about" class="nav-link {{request()->is('about') ? 'active' : ''}}">
          <i class="nav-icon fas fa-book"></i>
          <p>
            About
          </p>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
