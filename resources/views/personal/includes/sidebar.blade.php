<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('main.index') }}" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category.personal.index') }}" class="nav-link">
                    <i class="fas fa-image"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tag.personal.index') }}" class="nav-link">
                    <i class="fas fa-tag"></i>
                    <p>
                        Тэги
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('post.personal.index') }}" class="nav-link">
                    <i class="fas fa-clipboard"></i>
                    <p>
                        Посты
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
