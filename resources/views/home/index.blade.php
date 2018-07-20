@extends('layout.layouts.default')

@section('title')
    Laramanager | The Admin Tool for Laravel
@endsection

@section('description')
    Laramanager is a PHP package for use with the Laravel framework. I provides a simple and flexible admin panel for websites and applications.
@endsection

@section('default-content')
    <header class="uk-text-center uk-margin-large">
        <h1>Laramanager</h1>
        <p>Laramanager is a basic admin tool for Laravel applications created by <a href="https://philmareu.com">Phil Mareu.</a></p>
        <a href="https://github.com/philmareu/laramanager" class="uk-button uk-button-default"><span uk-icon="icon: github" class="uk-margin-small-right"></span>Github</a>
    </header>
    <div class="uk-container uk-margin">
        <div class="uk-child-width-1-2" uk-grid>
            <div>
                <img src="{{ url('images/original/laramanager-install.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ url('images/original/laramanager-resources-create.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ url('images/original/laramanager-images-populated.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ url('images/original/laramanager-images-edit-image.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection