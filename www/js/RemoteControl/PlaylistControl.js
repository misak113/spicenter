/**
 * Created by misak113 on 3.12.13.
 */

function PlaylistControl($http) {
    this.$http = $http;
    this.url = '/';
}

PlaylistControl.prototype.setIdentifier = function (url) {
    this.url = url;
};

PlaylistControl.prototype.push = function (streamUrl, callback) {
    this.$http.post(this.url, {
        streamUrl: streamUrl
    })
        .success(function (resp) {
            if (typeof resp.playlist === 'undefined') {
                callback(new Error('Odpověď neobsahuje správný stav'));
                return;
            }

            callback(null, resp.playlist);
        })
        .error(function (resp) {
            callback(new Error('Chybná odpověď serveru'))
        });
};


angular.module('remoteControl').factory('playlistControl', function ($http) {
    return new PlaylistControl($http);
});