@extends('layout')

@section('content')

<div class="container-fluid">

    <router-view></router-view>

    @include('partials.vue-submission')
    @include('partials.vue-locale')
    @include('partials.vue-name')
    @include('partials.vue-message')
    @include('partials.vue-review')
    @include('partials.vue-share')

    <audio id="player" controls>
        <source src="/music/a-long-wave-goodbye.mp3" type="audio/mpeg">
        <source src="/music/a-long-wave-goodbye.ogg" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>
    
</div>
<footer>
    <div class="text-center">
        <a href="https://shop.trackagescheme.com/event/stalko-album-launch-palace-theatre-april-9/" target="_blank" class="padding-vertical-20">{{ trans('stalko.buy-ticket-bar-text') }}<a/>
    </div>
</footer>
@endsection