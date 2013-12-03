/**
 * Created by misak113 on 3.12.13.
 */


function PlaylistLoader($http) {
    this.$http = $http;
}

PlaylistLoader.prototype.bind = function (url, callback) {
    this.$http.get(url)
        .success(function (resp) {
            if (typeof resp.playlist === 'undefined') {
                callback(new Error('Odpověď neobsahuje playlist'));
                return;
            }

            callback(null, resp.playlist);
        });
};

angular.module('remoteControl').factory('playlistLoader', function ($http) {
    return new PlaylistLoader($http);
});