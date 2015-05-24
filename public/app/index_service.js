(function() {
    'use strict';

    var log = function(str) { console.log(str); };

    app.service('IndexService', function($http) {

        return {
            getTopics: function() {
                return $http.get('/api/topic/topiclist');
            }
        }


    });
}());
