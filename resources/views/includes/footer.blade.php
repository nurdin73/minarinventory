<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0">{!! '&copy; ' .config('minar.site_title'). ' - ' . now()->year !!}</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right mb-0">{!! config('minar.site_name').' <span class="badge bg-secondary">v'.config('minar.version').'</span>' !!}</p>
            </div>
        </div>
    </div>
</footer>