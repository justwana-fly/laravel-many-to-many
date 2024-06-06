<nav id="sidebar" class="bg-dark navbar-dark">
    <a href="/" class="nav-link text-white"><h2 class="p-2">
        <i class="fa-solid fa-square-rss"></i> Boolpress</h2>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i>Dasboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white {{Route::currentRouteName() == 'admin.posts.index' ? 'active' : ''}}" href="{{route('admin.posts.index')}}"> <i class="fa-solid fa-newspaper fa-lg fa-fw"></i>Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  text-white {{Route::currentRouteName() == 'admin.categories.index' ? 'active' : ''}}" href="{{route('admin.categories.index')}}"> <i class="fa-solid fa-newspaper fa-lg fa-fw"></i>Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white {{Route::currentRouteName() == 'admin.tags.index' ? 'active' : ''}}" href="{{route('admin.tags.index')}}"> <i class="fa-solid fa-tag fa-lg fa-fw"></i>Tag</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white {{Route::currentRouteName() == 'admin.projects.index' ? 'active' : ''}}" href="{{route('admin.projects.index')}}"><i class="fas fa-cogs"></i>Projects</a>
          </li>
      </ul>
    </nav>
