{{-- META TAGS --}}
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ config('minar.site_description') }}">
<meta name="keywords" content="{{ config('minar.site_keywords') }}">
<meta name="author" content="{{ config('minar.app_author') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
{{-- TITLE --}}
<title>@yield('title', isset($title) ? $title : '') | {{ config('minar.site_title_acronym') }}</title>
{{-- INCLUDES MAIN STYLESHEET --}}
@include('includes.styles')
{{-- CONFIG FOR JAVASCRIPT --}}
<script>
    const base_url = "{{ url('/') }}";
    const locale = "{{ str_replace('_', '-', app()->getLocale()) }}";
    const _token = $('meta[name="csrf-token"]').attr('content');
</script>