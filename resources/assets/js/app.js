// Pull in and configure our dependencies

var Vue = require('Vue');
var VueRouter = require('vue-router');
Vue.use(VueRouter);
Vue.use(require('vue-resource'));
// Vue.config.debug = true;
var router = new VueRouter();

var store = require('./store.js');

var audioPlayer = require('./components/audioPlayer.js')('player');

router.map({
    '/': {
        component: Vue.extend(require('./components/submission.js')(audioPlayer))
    },
    '/locale': {
        component: Vue.extend(require('./components/locale.js')(store, router))
    },
    '/name': {
        component: Vue.extend(require('./components/name.js')(store, router))
    },
    '/message': {
        component: Vue.extend(require('./components/message.js')(store, router))
    },
    '/review': {
        component: Vue.extend(require('./components/review.js')(store, router))
    },
    '/share': {
        component: Vue.extend(require('./components/share.js')(store, router))
    }
})

router.start(Vue.extend({}), '#app');