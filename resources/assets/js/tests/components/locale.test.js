describe("locale component", function() {
    var store, router = null;

    beforeEach(function() {
        store = {
            setLocale: function(locale) {}
        }
        spyOn(store, 'setLocale');
    });



    var locale = require('../../components/locale.js');
 
    it("should allow locale to be set", function() {

        locale = locale(store, router);
        expect(locale.methods.setLocale).toBeDefined();

        // console.log(locale.methods.setLocale);
        locale.methods.setLocale('en');

        // expect(store.setLocale).toHaveBeenCalled();
        // myfunc.init();
        // expect(myfunc.init).toHaveBeenCalled();
    });

});
