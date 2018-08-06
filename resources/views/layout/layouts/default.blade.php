@extends('laramanager::layouts.sub.default')

@section('content')
    <div class="uk-margin">
        @include('layout.navigation.primary')
    </div>

    @yield('default-content')
@endsection

@push('scripts-last')
    <script>hljs.initHighlightingOnLoad();</script>
@endpush