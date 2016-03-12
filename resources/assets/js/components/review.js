module.exports = function (store, router) {
    return {
        template: "#review",
        data: function () {
            return {
                store: store,
                preview: ''
            }
        },
        ready: function () {
            this.preview = "Generating preview...";

            this.fetchPreview();
        },
        methods: {
            submit() {
                this.$http.post('/shares', this.store.getShare())
                    .then(function (response) {
                        // success callback
                        this.store.setUrl(response.data.url);
                        router.go('/share');
                    }, function (response) {
                        this.handleErrors(response.data);
                    });
            },
            fetchPreview() {
                this.$http.post('/share-previews', this.store.getShare())
                    .then(function (response) {
                        this.preview = response.data.preview;
                    }, function (response) {
                        this.handleErrors(response.data);
                    });
            },
            handleErrors(errors) {
                this.store.setErrors(errors);
                if (typeof this.store.getErrors().locale !== 'undefined') {
                    return router.go('/locale');
                }
                if (typeof this.store.getErrors().name !== 'undefined') {
                    return router.go('/name');
                }
                if (typeof this.store.getErrors().message !== 'undefined') {
                    return router.go('/message');
                }
            }
        },
        computed: {
            language: function () {
                if (store.getShare().locale == "en" ) {
                    return "English";
                }

                if (store.getShare().locale == "mt" ) {
                    return "Maltese";
                }

                return "";
            }
        }
    }
}