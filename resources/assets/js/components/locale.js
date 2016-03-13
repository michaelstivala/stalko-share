module.exports = function (store, router) {
    return {
        template: "#locale",
        data: function () {
            return {
                store: store,
                router: router
            }
        },
        methods: {
            setLocale(locale) {
                this.store.setLocale(locale);
                router.go('/name');
            }
        }
    }
}