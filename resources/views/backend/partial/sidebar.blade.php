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




    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">SubsCription</span>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Subscription Category">Subscription Category</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('subscription.category.index') }}" class="menu-link">
                    <div data-i18n="Add Subscription Category">ADD Subscription Category</div>
                </a>
            </li>



        </ul>
    </li>


    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">settings</span>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Subscription Category">Settings</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('profile.index') }}" class="menu-link">
                    <div data-i18n="Update Profile">Update Profile</div>
                </a>
            </li>
    </li>
</ul>
</li>

<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Admin</span>
</li>
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="Admin">Admin</div>
    </a>
    <ul class="menu-sub">
        <li class="menu-item">
            <a href="{{ route('admin.index') }}" class="menu-link">
                <div data-i18n="Create Admin">Create Admin</div>
            </a>
        </li>




    </ul>
</li>





<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Social Media Info</span>
</li>
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="Social Media">Social Media</div>
    </a>
    <ul class="menu-sub">
        <li class="menu-item">
            <a href="{{ route('social.media.index') }}" class="menu-link">
                <div data-i18n="Add Social Media Info">Add Social Media Info</div>
            </a>
        </li>



    </ul>
</li>


</ul>
