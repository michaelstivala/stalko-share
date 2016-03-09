module.exports = function (id) {
    return {
        getPlayer() {
            return document.getElementById(id);
        },

        play() {
            this.getPlayer().play();
        }
    }
}