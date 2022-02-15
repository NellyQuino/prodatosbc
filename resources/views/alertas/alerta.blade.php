@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" id="create_alert" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif(session('status_delete'))
<div class="alert alert-danger alert-dismissible fade show " id="delete_alert" role="alert">
    {{ session('status_delete') }}
    {{session_status()}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif(session('status_update'))
<div class="alert alert-primary alert-dismissible fade show" role="update_alert">
    {{ session('status_update') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


