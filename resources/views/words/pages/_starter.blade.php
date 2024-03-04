@php
    $myTemplate="a"; // resources/views/...
@endphp
@extends($myTemplate.'.layouts.default')
@push('header-scripts')
    <script>

    </script>
@endpush
@push('header-styles')
    <style>

    </style>
@endpush
@section('content')
        <!-- Start of Main after </header> -->
        <main class="main [order - CHANGE THIS]">
            This is index
        </main>
        <!-- End of Main -->
@endsection
@push('footer-scripts')
    <script>

    </script>
@endpush
@push('footer-styles')
    <style>

    </style>
@endpush
