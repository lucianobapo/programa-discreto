
var modApp = angular.module('clientSideApp', ['appControllers','appFactories']);

var modControllers = angular.module('appControllers', []);

var modFactories = angular.module('appFactories', []);
modFactories.factory('GetApi', function(){
    function get_url(url){
        return $http({
            method: 'GET',
            url: url
            //params: {access_token: $rootScope.token}
            //headers: {
            //    Authorization: 'Bearer ' + $rootScope.token
            //}
        });
    };

    return {
        get_url: get_url
    };
});