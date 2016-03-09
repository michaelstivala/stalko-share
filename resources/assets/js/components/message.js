module.exports = function (store, router) {
    return {
        template: "#message",
        data: function () {
            return {
                store: store,
                message: ''
            }
        },
        ready: function () {
            this.$els.message.focus()
        },
        methods: {
            setMessage() {
                if (this.message.length == 0) {
                    if (window.locale == "mt") {
                        return this.store.setMessageError("Insejt tikteb il-messagg. Pizella.");
                    }

                    return this.store.setMessageError("Not that short.");
                    
                }
                this.store.setMessage(this.message);
                router.go('/review');
            }
        }
    }
}