<nav>
    <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">
            <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i
                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title link-nav"
                        href="{{ route('dashboard') }}"><i data-feather="home"></i><span>{{ __('lang.home') }}</span></a>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>{{ __('lang.execution_management') }}</h6>
                    </div>
                </li>
                @canany(['superadmin-index','ketua-index','panitera-index','jurusita-index'])
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="{{ route('eksekusi.index') }}"><i data-feather="file-text"></i><span>{{ __('lang.list_executions') }}</span></a>
                </li>
                @endcanany
                @can('parties-index')
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="{{ route('permohonan-eksekusi.index') }}"><i data-feather="edit"></i><span>{{ __('lang.execution_request') }}</span></a>
                </li>
                @endcan
                @can('panitera-index')
                <li class="sidebar-main-title">
                    <div>
                        <h6>{{ __('lang.party_management') }}</h6>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="{{ route('parties.create') }}"><i data-feather="user-plus"></i><span>{{ __('lang.add_data', ['data' => __('lang.party'),]) }}</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="{{ route('parties.index') }}">
                        <i data-feather="users"></i><span>{{ __('lang.list_parties') }}</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="{{ route('parties.activation') }}">
                        <i data-feather="user-check"></i><span>{{ __('lang.activation_request') }}</span>
                    </a>
                </li>
                @endcan
                @can('superadmin-index')
                <li class="sidebar-main-title">
                    <div>
                        <h6>{{ __('lang.user_management') }}</h6>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="{{ route('roles.index') }}"><i data-feather="layers"></i><span>{{ __('lang.groups') }}</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="{{ route('users.index') }}">
                        <i data-feather="users"></i><span>{{ __('lang.users') }}</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="#">
                        <i data-feather="lock"></i><span>{{ __('lang.permissions') }}</span>
                    </a>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>{{ __('lang.settings') }}</h6>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="#"><i data-feather="settings"></i><span>{{ __('lang.configure') }}</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="#"><i data-feather="archive"></i><span>{{ __('lang.log_activity') }}</span></a>
                </li>
                @endcan
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
</nav>
