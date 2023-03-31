{{-- MODAL --}}
<div id="load-modal"></div>
<div id="load-second-modal"></div>
{{-- FLASH MESSAGE LARAVEL --}}
@if ($message = Session::get('success'))
<div class="flash-data" data-flashdata="success" data-message="{{ $message }}"></div>
@endif
@if ($message = Session::get('info'))
<div class="flash-data" data-flashdata="info" data-message="{{ $message }}"></div>
@endif
@if ($message = Session::get('warning'))
<div class="flash-data" data-flashdata="warning" data-message="{{ $message }}"></div>
@endif
@if ($message = Session::get('error'))
<div class="flash-data" data-flashdata="error" data-message="{{ $message }}"></div>
@endif
@if ($message = Session::get('welcome'))
<div class="flash-data" data-flashdata="welcome" data-message="{{ $message }}"></div>
@endif
@if ($message = Session::get('failed'))
<div class="flash-data" data-flashdata="failed" data-message="{{ $message }}"></div>
@endif

{{-- LOCALIZATION --}}
<input type="hidden" id="dt_lang" value='{!! $datatable_lang !!}'>
<input type="hidden" id="parsley_lang" value='{!! $parsley_lang !!}'>
<input type="hidden" id="module_lang" value='{!! $module_lang !!}'>

{{-- LIVEWIRE SCRIPT --}}
@livewireScripts
{{-- INCLUDESALPINE PLUGINS --}}
@stack('alpine-script')
{{-- ALPINE JS --}} 
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
{{-- COMPONENT SCRIPTS --}}
<script src="{{ assetVersion('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ assetVersion('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
{{-- SIDEBAR MENU --}}
<script src="{{ assetVersion('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ assetVersion('assets/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ assetVersion('assets/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ assetVersion('assets/js/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ assetVersion('assets/js/notify/bootstrap-notify.min.js') }}"></script>
{{-- INCLUDES ADDONS JAVASCRIPT --}}
@stack('addons-script')
{{-- APPLICATION SCRIPTS --}}
<script src="{{ assetVersion('assets/js/script.js') }}"></script>
{{-- CUSTOM SCRIPTS --}}
<script src="{{ assetVersion('js/custom.js') }}"></script>
{{-- INCLUDES CUSTOM JAVASCRIPT --}}
@stack('custom-script')
