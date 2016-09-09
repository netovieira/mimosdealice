@extends('layouts.home')

@section('content')
    @include('components.sections.inicio')

    <nav class="pin-top brown darken-2">
        <div class="nav-wrapper">
            <div class="container">
                <a href="#" data-activates="mobile-sidenav" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    @include('components.nav.left', ['items' => $settings->Pages()])
                </ul>
                <ul class="right hide-on-med-and-down">
                    @include('components.nav.right', ['items' => $settings->Contacts()])
                </ul>
            </div>
            <ul class="side-nav" id="mobile-sidenav">
                @include('components.nav.left', ['items' => $settings->Pages()])
                @include('components.nav.right', ['items' => $settings->Contacts()])
            </ul>
        </div>
    </nav>

    @foreach ($settings->Sections() as $section)
        @if($section->name != 'inicio')
            @include($section->path.'.'.$section->name)
        @endif
    @endforeach
@stop
