@extends('layout.layouts.default')

@section('default-content')
    <div class="uk-grid uk-grid-divider">
        <div class="uk-width-1-5@m">
            <div class="uk-padding-small">
                @include('docs.navigation')
            </div>
        </div>
        <div class="uk-width-4-5@m">
            <div class="uk-container-small">
                @yield('docs-content')
            </div>
        </div>
    </div>
@endsection