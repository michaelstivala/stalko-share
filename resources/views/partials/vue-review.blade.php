<template id="review">
    <div class="row text-center aligner" transition="fade">
        <div class="col-xs-12">
            <h2>{{ trans('stalko.review-header-text') }}</h2>
            
            <p class="text-large margin-top-50">
                @{{{ preview }}}
            <p>
            <div class="margin-top-50">
                <button class="btn btn-primary" v-on:click="submit()">{{ trans('stalko.review-confirm-button-text') }}</button>
                <button class="btn btn-primary" v-link="{path: '/locale'}">{{ trans('stalko.review-restart-button-text') }}</button>
            </div>
            
        </div>
    </div>
</template>