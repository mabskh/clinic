

@if(Session::has('error'))
<div class="alert alert-custom alert-light-danger fade show mb-5" id="alerts"  role="alert">

    <div class="alert-text">{{Session::get('error')}}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
@endif
