<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('admin_assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <a href="/admin" class="nav-link active">
              <i class="nav-icon fas fa-ad"></i>
              <p>
                Dashboard
              </p>
            </a>

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Content
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('admin.contents.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-pen-square"></i>
              <p>
                Post
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.post.addPost')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.post.listPost')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.post.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Post_cates</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.post.listPostcates')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Post_cates</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-gamepad"></i>
              <p>
                Game
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.game.addgame')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Games</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.game.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Game cates</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.game.addfavorite')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Games Favorite</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.game.listcatesIndex')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cates Games Index</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Language
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.language.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.language.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Comment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.comment.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.comment.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Others</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tags
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.tags.addTags')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.tags.listTags')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.tags.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Tags Games</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.tags.listTagsIndex')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Tags Games</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MANAGER</li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-shield"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.user.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>


            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-shield"></i>
              <p>
                Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.manager.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.manager.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Admin</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
