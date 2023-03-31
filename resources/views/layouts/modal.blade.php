<div class="modal fade" id="app-modal" tabindex="-1" role="dialog" aria-labelledby="app-modal" aria-hidden="true">
    <div {{ $attributes->merge(['class' => 'modal-dialog']); }} role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="app-modal-title"></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="app-modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer" id="app-modal-footer">
                {{ $footer }}
            </div>
        </div>
    </div>
</div>