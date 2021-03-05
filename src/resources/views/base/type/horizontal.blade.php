<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url(config('backpack.base.home_link')) }}" class="logo logo-light text-light" title="{{ config('backpack.base.project_name') }}">{{ config('backpack.base.project_name') }}</a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">
            @include(backpack_view('inc.topbar_right_content'))
            @include(backpack_view('inc.menu_user_dropdown'))
        </div>
    </div>
</header>
