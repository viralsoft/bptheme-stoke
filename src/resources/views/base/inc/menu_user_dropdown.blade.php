<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="rounded-circle header-profile-user" src="{{ backpack_avatar_url(backpack_auth()->user()) }}" alt="{{ backpack_auth()->user()->name }}">
        <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ucfirst(@backpack_auth()->user()->name)}}</span>
        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <a class="dropdown-item" href="{{ route('backpack.account.info') }}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">{{ trans('backpack::base.my_account') }}</span></a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout"> {{ trans('backpack::base.logout') }}</span></a>
        <form id="logout-form" action="{{ backpack_url('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
