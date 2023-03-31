<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('includes.header')
  </head>
  <body>
    {{-- LOADER --}}
    <x-loader class="loader-p" />
    <!-- page-wrapper Start-->
    <section>         
      <div class="container-fluid p-0"> 
        <div class="row m-0">
          <div class="col-12 p-0">    
            <div class="login-card">
                @yield('content')
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->
   {{-- INCLUDE SCRIPTS --}}
   @include('includes.scripts')
  </body>
</html>
