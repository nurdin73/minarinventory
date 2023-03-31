<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.header')
</head>

<body>
    {{-- OFFLINE STATE --}}
    @livewire('offline')
    {{-- LOADER --}}
    <x-loader class="loader-p" />
    <x-loading class="d-none" />
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('includes.navbar')
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper horizontal-menu">
             <!-- Page Sidebar Start-->
             <header class="main-nav">
                <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i
                            data-feather="settings"></i></a><img class="img-90 rounded-circle"
                        src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                    <div class="badge-bottom"></div><a href="#">
                        <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6>
                    </a>
                    <p class="mb-0 font-roboto">{{ auth()->user()->role->name }}</p>
                </div>
                {{-- NAVIGATION SIDEBAR --}}
                @include('includes.navigation')
            </header>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                @yield('content')
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            @include('includes.footer')
        </div>
    </div>
    <!-- page-wrapper end-->
    {{-- INCLUDE SCRIPTS --}}
    @include('includes.scripts')
</body>

</html>
