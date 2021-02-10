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
        <a href="/about" class="nav-link {{request()->is('about') ? 'active' : ''}}">
          <i class="nav-icon fas fa-book"></i>
          <p>
            About
          </p>
        </a>
      </li>


      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-circle"></i>
          <p>
            MULTI LEVEL EXAMPLE
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 1</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Level 2</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Level 3</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
