<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">

                @if(Auth()->user()->role === 0)
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="fas fa-user"></i>
                        <p>
                            Пользователи
                        </p>
                    </a>
                @endif
                @if(Auth()->user()->role === 1)
                    <a href="{{ route('post.indexP') }}" class="nav-link">
                        <i class="fas fa-user"></i>
                        <p>
                            Главная
                        </p>
                    </a>
                @endif
            </li>
            <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                    <i class="fas fa-image"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tag.index') }}" class="nav-link">
                    <i class="fas fa-tag"></i>
                    <p>
                        Тэги
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                    <i class="fas fa-clipboard"></i>
                    <p>
                        Посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('main') }}" class="nav-link">
                    <i class="fas fa-table"></i>
                    <p>
                        Статистика
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
