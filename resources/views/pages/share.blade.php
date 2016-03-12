@extends('layout')

@section('content')

<div class="container-fluid bg">

    <router-view></router-view>

    @include('partials.vue-submission')
    @include('partials.vue-locale')
    @include('partials.vue-name')
    @include('partials.vue-message')
    @include('partials.vue-review')
    @include('partials.vue-share')
</div>
<footer>
    <div class="text-center">
        <a href="#" class="padding-vertical-20">{{ trans('stalko.buy-ticket-bar-text') }}<a/>
    </div>
</footer>
@endsection