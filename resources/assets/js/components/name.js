module.exports = function (store, router) {
    return {
        template: "#name",
        data: function () {
            return {
                store: store,
                name: ''
            }
        },
        ready: function () {
            this.$els.name.focus()
        },
        methods: {
            setName() {
                if (this.name.length == 0) {
                    if (window.locale == "mt") {
                        return this.store.setNameError("Insejt tikteb l-isem. Jaqaw xrobt hafna?");
                    }

                    return this.store.setNameError("You must know someone!");
                }
                this.store.setName(this.name);
                router.go('/message');
            }
        }
    }
};