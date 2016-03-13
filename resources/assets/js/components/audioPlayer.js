module.exports = function (id) {
    return {
        getPlayer() {
            return document.getElementById(id);
        },

        play() {
            if (this.isPaused()) {
                return this.getPlayer().play();
            }

            this.getPlayer().pause();
        },

        isPaused() {
            if (this.getPlayer() == null) {
                return true;
            }  

            return this.getPlayer().paused;
        },

        isPlaying() {
            return ! this.isPaused();
        }
    }
}