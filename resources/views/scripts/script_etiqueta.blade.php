@extends('layouts.template_sujeto')

@section('content_script')
<script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
</script>
@endsection