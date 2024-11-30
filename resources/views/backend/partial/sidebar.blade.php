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
        <a href="{{ route('blog.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Add Blog</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ route('blog.display') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Display Blog</div>
        </a>
    </li>


    <li class="menu-header small text-uppercase"><span class="menu-header-text">Score Card</span></li>
    <!-- Cards -->
    <li class="menu-item">
        <a href="{{ route('score.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Create Score Card</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ route('score.display') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Display Score Card</div>
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
                    <div data-i18n="Add Subscription Category">Add Subscription Category</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('subscription.display') }}" class="menu-link">
                    <div data-i18n="Display Subscription Category">Display Subscription Category</div>
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
    <span class="menu-header-text">User</span>
</li>
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="Admin">User Info</div>
    </a>
    <ul class="menu-sub">
        <li class="menu-item">
            <a href="{{ route('user.display') }}" class="menu-link">
                <div data-i18n="Display All Users">Display All Users</div>
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
        <li class="menu-item">
            <a href="{{ route('social.media.display') }}" class="menu-link">
                <div data-i18n="Display Social Media Info">Display Social Media Info</div>
            </a>
        </li>


    </ul>

</li>


</ul>
