module.exports = {
    share: {
        locale: null,
        name: null,
        message: null
    },
    errors: {
        locale: null,
        name: null,
        message: null
    },
    url: null,
    setLocale: function(locale) {
        this.share.locale = locale;
    },
    setName: function(name) {
        this.share.name = name;
    },
    setMessage: function(message) {
        this.share.message = message;
    },
    setErrors: function (errors) {
        this.errors.locale = errors.locale;
        this.errors.name = errors.name;
        this.errors.message = errors.message;
    },
    setNameError: function (error) {
        this.errors.name = error;
    },
    setMessageError: function (error) {
        this.errors.message = error;
    },
    getShare: function () {
        return this.share;
    },
    getErrors: function() {
        return this.errors;
    },
    clearErrors: function() {
        this.errors.locale = null;
        this.errors.name = null;
        this.errors.message = null;
    },
    setUrl: function(url) {
        this.url = url;
    },
    getUrl: function() {
        return this.url;
    }
}