@extends('layout.layouts.default')

@section('title')
    Laramanager | The Admin Tool for Laravel
@endsection

@section('description')
    Laramanager is a PHP package for use with the Laravel framework. I provides a simple and flexible admin panel for websites and applications.
@endsection

@section('default-content')
    <header class="uk-section uk-section-primary uk-text-center">
        <div class="uk-container uk-container-small">
            <h1>Laramanager</h1>
            <p>Laramanager is a admin panel for Laravel projects. It is built with <a href="http://laravel.com">Laravel</a> and
                <a href="https://vuejs.org">Vue.js</a> and offers some great features such as resource CRUD operations, image manager and content object builder. Created by <a href="https://philmareu.com">Phil Mareu.</a></p>
            <a href="https://github.com/philmareu/laramanager" class="uk-button uk-button-default"><span uk-icon="icon: github" class="uk-margin-small-right"></span>Github</a>
        </div>
    </header>

    <section class="uk-section">
        <div class="uk-container">
            <h2 class="uk-text-center uk-margin-large">Highlights</h2>

            <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="{{ url('images/original/laramanager-install-page.jpg') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Easy Installation</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="{{ url('images/original/laramanager-resources-page.jpg') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Resources</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="{{ url('images/original/dgt-flagged-tournaments-view.png') }}" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Custom Admin Pages</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="{{ url('images/original/laramanager-images-populated.jpg') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Image Manager</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="{{ url('images/original/laramanger-objects.jpg') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Build with Objects</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="{{ url('images/original/laramanager-field-types.jpg') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Class Based Field Types</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection