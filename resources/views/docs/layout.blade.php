@extends('layout.layouts.default')

@section('default-content')
    @include('docs.navigation')

    @yield('docs-content')
@endsection