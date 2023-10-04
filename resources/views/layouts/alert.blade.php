@if ($message = Session::get('success'))
    <div class="alet alert-success alert-dismissible show fade">
        <button class="close" data-dismiss="alert">
            <span>x</span>
        </button>
        <p>{{ $message }}</p>
    </div>
@endif