module.exports = function (store, router) {
    return {
        template: "#share",
        data: function () {
            return {
                store: store
            }
        },
        ready: function () {
            var input = this.$els.url;
            input.focus();
            input.setSelectionRange(0, input.value.length);
        },
    }
}