@extends('laramanager::layouts.sub.default')

@section('content')
    <div class="uk-margin">
        @include('layout.navigation.primary')
    </div>

    @yield('default-content')
@endsection