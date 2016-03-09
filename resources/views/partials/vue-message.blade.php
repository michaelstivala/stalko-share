<template id="message">
    <div class="row text-center aligner" transition="fade">
        <div class="col-xs-12">
            <h2>{{ trans('stalko.message-header-text') }}</h2>
            <p>{{ trans('stalko.message-hint-text') }}</p>
            <form v-on:submit.prevent="setMessage">
                <div class="form-group">
                    <input class="form-control width-300" type="text" v-model="message" v-el:message>
                </div>
            </form>

            <p class="text-danger">@{{ store.getErrors().message }}</p>
        </div>
    </div>
</template>