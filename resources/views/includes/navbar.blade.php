<div class="page-main-header">
    <div class="main-header-right row m-0">
        <div class="main-header-left">
            <a href="#"
                class="navbar-brand navbar-brand-title">{{ config('minar.site_title_acronym') }}</a>
            @if (auth()->user()->role_id != 5)
                <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                        id="sidebar-toggle"></i>
                </div>
            @endif
        </div>
        <div class="left-menu-header col">
            <ul class="navbar-nav-party">
                <li class="nav-item active"><a href="{{ route('pihak.dashboard') }}"
                        class="nav-link">{{ __('lang.home') }}</a></li>
                <li class="nav-item"><a href="{{ route('pihak.profile') }}"
                        class="nav-link">{{ __('lang.profile') }}</a>
                </li>
            </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li>
                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button"><a href="{{ route('logout') }}"><i
                                data-feather="log-out"></i>{{ __('lang.logout') }}</a></button>
                </li>
            </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>
