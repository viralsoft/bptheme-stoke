{{--            <div class="dropdown d-inline-block">--}}
{{--                <button type="button" class="btn header-item waves-effect"--}}
{{--                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    @switch(Session::get('lang'))--}}
{{--                        @case('ru')--}}
{{--                            <img src="{{ URL::asset('/assets/images/flags/russia.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">Russian</span>--}}
{{--                        @break--}}
{{--                        @case('it')--}}
{{--                            <img src="{{ URL::asset('/assets/images/flags/italy.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">Italian</span>--}}
{{--                        @break--}}
{{--                        @case('de')--}}
{{--                            <img src="{{ URL::asset('/assets/images/flags/germany.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">German</span>--}}
{{--                        @break--}}
{{--                        @case('es')--}}
{{--                            <img src="{{ URL::asset('/assets/images/flags/spain.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">Spanish</span>--}}
{{--                        @break--}}
{{--                        @default--}}
{{--                            <img src="{{ URL::asset('/assets/images/flags/us.jpg')}}" alt="Header Language" height="16"> <span class="align-middle">English</span>--}}
{{--                    @endswitch--}}
{{--                </button>--}}
{{--                <div class="dropdown-menu dropdown-menu-end">--}}

{{--                    <!-- item-->--}}
{{--                    <a href="{{ url('index/en') }}" class="dropdown-item notify-item language" data-lang="eng">--}}
{{--                        <img src="{{ URL::asset ('/assets/images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>--}}
{{--                    </a>--}}
{{--                    <!-- item-->--}}
{{--                    <a href="{{ url('index/es') }}" class="dropdown-item notify-item language" data-lang="sp">--}}
{{--                        <img src="{{ URL::asset ('/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>--}}
{{--                    </a>--}}

{{--                    <!-- item-->--}}
{{--                    <a href="{{ url('index/de') }}" class="dropdown-item notify-item language" data-lang="gr">--}}
{{--                        <img src="{{ URL::asset ('/assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>--}}
{{--                    </a>--}}

{{--                    <!-- item-->--}}
{{--                    <a href="{{ url('index/it') }}" class="dropdown-item notify-item language" data-lang="it">--}}
{{--                        <img src="{{ URL::asset ('/assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>--}}
{{--                    </a>--}}

{{--                    <!-- item-->--}}
{{--                    <a href="{{ url('index/ru') }}" class="dropdown-item notify-item language" data-lang="ru">--}}
{{--                        <img src="{{ URL::asset ('/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

<div class="dropdown d-none d-lg-inline-block ml-1">
    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
        <i class="bx bx-fullscreen"></i>
    </button>
</div>

<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-bell bx-tada"></i>
        <span class="badge bg-danger rounded-pill">3</span>
    </button>
    {{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"--}}
    {{--                     aria-labelledby="page-header-notifications-dropdown">--}}
    {{--                    <div class="p-3">--}}
    {{--                        <div class="row align-items-center">--}}
    {{--                            <div class="col">--}}
    {{--                                <h6 class="m-0" key="t-notifications"> @lang('translation.Notifications') </h6>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-auto">--}}
    {{--                                <a href="#!" class="small" key="t-view-all"> @lang('translation.View_All')</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div data-simplebar style="max-height: 230px;">--}}
    {{--                        <a href="" class="text-reset notification-item">--}}
    {{--                            <div class="media">--}}
    {{--                                <div class="avatar-xs me-3">--}}
    {{--                                    <span class="avatar-title bg-primary rounded-circle font-size-16">--}}
    {{--                                        <i class="bx bx-cart"></i>--}}
    {{--                                    </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="media-body">--}}
    {{--                                    <h6 class="mt-0 mb-1" key="t-your-order">@lang('translation.Your_order_is_placed')</h6>--}}
    {{--                                    <div class="font-size-12 text-muted">--}}
    {{--                                        <p class="mb-1" key="t-grammer">@lang('translation.If_several_languages_coalesce_the_grammar')</p>--}}
    {{--                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">@lang('translation.3_min_ago')</span></p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                        <a href="" class="text-reset notification-item">--}}
    {{--                            <div class="media">--}}
    {{--                                <img src="{{ URL::asset ('/assets/images/users/avatar-3.jpg') }}"--}}
    {{--                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">--}}
    {{--                                <div class="media-body">--}}
    {{--                                    <h6 class="mt-0 mb-1">@lang('translation.James_Lemire')</h6>--}}
    {{--                                    <div class="font-size-12 text-muted">--}}
    {{--                                        <p class="mb-1" key="t-simplified">@lang('translation.It_will_seem_like_simplified_English')</p>--}}
    {{--                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">@lang('translation.1_hours_ago')</span></p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                        <a href="" class="text-reset notification-item">--}}
    {{--                            <div class="media">--}}
    {{--                                <div class="avatar-xs me-3">--}}
    {{--                                    <span class="avatar-title bg-success rounded-circle font-size-16">--}}
    {{--                                        <i class="bx bx-badge-check"></i>--}}
    {{--                                    </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="media-body">--}}
    {{--                                    <h6 class="mt-0 mb-1" key="t-shipped">@lang('translation.Your_item_is_shipped')</h6>--}}
    {{--                                    <div class="font-size-12 text-muted">--}}
    {{--                                        <p class="mb-1" key="t-grammer">@lang('translation.If_several_languages_coalesce_the_grammar')</p>--}}
    {{--                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">@lang('translation.3_min_ago')</span></p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}

    {{--                        <a href="" class="text-reset notification-item">--}}
    {{--                            <div class="media">--}}
    {{--                                <img src="{{ URL::asset ('/assets/images/users/avatar-4.jpg') }}"--}}
    {{--                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">--}}
    {{--                                <div class="media-body">--}}
    {{--                                    <h6 class="mt-0 mb-1">@lang('translation.Salena_Layfield')</h6>--}}
    {{--                                    <div class="font-size-12 text-muted">--}}
    {{--                                        <p class="mb-1" key="t-occidental">@lang('translation.As_a_skeptical_Cambridge_friend_of_mine_occidental')</p>--}}
    {{--                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">@lang('translation.1_hours_ago')</span></p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <div class="p-2 border-top d-grid">--}}
    {{--                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">--}}
    {{--                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">@lang('translation.View_More')</span>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
</div>
