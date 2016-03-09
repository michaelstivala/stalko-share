<template id="locale">
    <div class="row text-center aligner" transition="fade">
        <div class="col-xs-12">
            <h2>{{ trans('stalko.language-header-text') }}</h2>
            <p class="margin-top-50">
                <button class="btn btn-primary" v-on:click="setLocale('en')">{{ trans('stalko.english') }}</button>
                <button class="btn btn-primary" v-on:click="setLocale('mt')">{{ trans('stalko.maltese') }}</button>
            </p>
            <p class="text-danger">@{{ store.getErrors().locale }}</p>
        </div>
    </div>
</template>