<template id="name">
    <div class="row text-center aligner" transition="fade">
        <div class="col-xs-12">
            <h2>{{ trans('stalko.name-header-text') }}</h2>
            <form v-on:submit.prevent="setName">
                <div class="form-group">
                    <input class="form-control width-200" type="text" v-model="name" v-el:name>
                </div>
            </form>

            <p class="text-danger">{{ store.getErrors().name || '<?php echo trans("stalko.continue-instructions"); ?>' }}</p>
        </div>
    </div>
</template>