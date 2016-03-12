<template id="submission">
    

    <div class="aligner">
        <div transition="fade">
            <div class="row text-center">
                <div class="col-xs-12 text-huge" v-show="show_salutation" transition="slow-fade">
                    {{ trans('stalko.salutation', ['name' => ucwords($share->name)]) }}
                </div>
                <div class="col-xs-12 text-huge" v-show="show_message" transition="slow-fade">
                    {{ $share->message }}
                </div>

                <div  class="col-xs-12 text-huge margin-vertical-50" v-show="show_cto" transition="slow-fade">
                    <div>
                        {!! trans('stalko.call-to-action') !!}
                    </div>
                    
                    <div class="">

                        <a href="#" class="play"><span v-on:click="play()" class="glyphicon glyphicon-play-circle"></span></a>
                        <audio id="player" controls>
                          <source src="/music/a-long-wave-goodbye.mp3" type="audio/mpeg">
                          <source src="/music/a-long-wave-goodbye.ogg" type="audio/ogg">
                        Your browser does not support the audio element.
                        </audio>
                    </div>

                    <div class="text-center" v-if="show_button" transition="slow-fade-expand">
                        <button class="btn btn-primary"  v-link="{ path: '/locale' }">{{ trans('stalko.share-button-text') }}</button>
                        <button v-on:click="animate()" class="btn btn-primary">{{ trans('stalko.replay-button-text') }}</button>
                    </div>

                </div>
            </div>

            
        </div>
    </div>
</template>