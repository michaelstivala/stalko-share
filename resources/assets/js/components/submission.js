module.exports = function (audioPlayer) {
    return {
        template: "#submission",
        data: function () {
            return {
                show_salutation: false,
                show_message: false,
                show_cto: false,
                show_button: false,
                player: audioPlayer,
                paused: true,
            }
        },
        ready: function () {
            this.animate();
        },
        methods: {
            animate() {
                this.show_salutation = true;
                this.show_message = false;
                this.show_cto = false;
                this.show_button = false;

                var self = this;
                setTimeout(function () {
                    self.show_salutation = false;
                    self.show_message = true;
                }, 3000);
                setTimeout(function () {
                    self.show_message = false;
                    self.show_cto = true;
                }, 6000);
                setTimeout(function () {
                    self.show_button = true;
                }, 9000);
            },
            play() {
                this.player.play();
                this.paused = this.player.isPaused();
            }
        },
        computed: {
            playButtonClasses: function () {
                return { 
                    "glyphicon-play": this.paused,
                    "glyphicon-pause": ! this.paused
                }
            }
        }
    }
}