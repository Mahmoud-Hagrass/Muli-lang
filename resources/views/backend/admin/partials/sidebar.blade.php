<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" style="font-family: 'Tajawal', sans-serif;">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="font-family: 'Tajawal', sans-serif;">

            <!-- Dashboard -->
            <li class="nav-item">
                <a href="{{ route('admin.index') }}">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ __('dashboard.home') }}</span>
                </a>
            </li>

            <!-- Admins - Direct Link to Create User -->
            <li class="nav-item">
                <a href="{{ route('admin.users.create') }}">
                    <i class="ft-users"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">{{ __('dashboard.users') }}</span>
                </a>
            </li>

        </ul>
    </div>
</div>
