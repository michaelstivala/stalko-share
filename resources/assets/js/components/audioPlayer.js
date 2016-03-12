module.exports = function (id) {
    return {
        getPlayer() {
            return document.getElementById(id);
        },

        play() {
            if (this.getPlayer().paused) {
                return this.getPlayer().play();
            }

            this.getPlayer().pause();
        }
    }
}