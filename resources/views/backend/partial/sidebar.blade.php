<ul class="py-1 menu-inner">
    <!-- Dashboard -->
    <li class="menu-item active">
        <a href="{{ route('dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <!-- Layouts -->

    <li class="menu-header small text-uppercase"><span class="menu-header-text">BLOG</span></li>
    <!-- Cards -->
    <li class="menu-item">
        <a href="{{ route('blog.create') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Add Blog</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase"><span class="menu-header-text">Score Card</span></li>
    <!-- Cards -->
    <li class="menu-item">
        <a href="{{ route('score.create') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Create Score Card</div>
        </a>
    </li>



</ul>
