<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <h3>@yield('title', isset($title) ? $title : '')</h3>
                <ol class="breadcrumb">
                    @if(isset($breadcrumbs))
                        @foreach ($breadcrumbs as $item)
                            @if ($item['link'] == '#')
                                <li class="breadcrumb-item active">{{ ucfirst($item['page']) }}</li>
                            @else
                                <li class="breadcrumb-item active"><a href="{{ $item['link'] }}">{{ ucfirst($item['page']) }}</a></li>
                            @endif
                        @endforeach
                    @endif
                </ol>
            </div>
            <div class="col-sm-6">
                <!-- Bookmark Start-->
                <div class="bookmark">
                    {{ $action ?? '' }}
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        {{ $slot }}
    </div>
</div>