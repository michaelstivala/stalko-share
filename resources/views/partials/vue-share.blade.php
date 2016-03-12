<template id="share">
    <div class="row text-center aligner" transition="fade">
        
        <div class="col-xs-12">
            <h2>{{ trans('stalko.share-header-text') }}<br/>{{ trans('stalko.share-instructions') }} <strong>@{{ this.store.getSubmission().name }}</strong>!</h2>
            <div class="form-group">
                <input class="margin-top-50 text-larger form-control width-300" type="text" v-bind:value="store.getUrl()" v-el:url>
            </div>
            <p class="margin-top-50" >{!! trans('stalko.share-promotional-text') !!}<br/>
            </p>
            <p><a class="underline" href="https://shop.trackagescheme.com/event/stalko-album-launch-palace-theatre-april-9/" target="_blank">{{ trans('stalko.share-tickets-link-text') }}</a> | <a class="underline" href="#" v-link="{ path: '/locale' }">{{ trans('stalko.share-again-text') }}</a></p>
        </div>
    </div>
</template>