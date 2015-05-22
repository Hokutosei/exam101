(function() {
    app.config(['$facebookProvider', function($facebookProvider) {
        $facebookProvider.init({
            appId: '',
            channel: '//path/to/channel.html'
        });
    }]);

}());
