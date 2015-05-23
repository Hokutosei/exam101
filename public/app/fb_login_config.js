(function() {
    app.config(['$facebookProvider', function($facebookProvider) {
        $facebookProvider.init({
            appId: '403019339887182',
            channel: '//path/to/channel.html'
        });
    }]);

}());
