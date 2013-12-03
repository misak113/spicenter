/**
 * Created by misak113 on 3.12.13.
 */


function PlaylistLoader($http) {
    this.$http = $http;
    this.url = '/';
}

PlaylistLoader.prototype.get = function (url, callback) {
    this.$http.get(url)
        .success(function (resp) {
            if (typeof resp.playlist === 'undefined') {
                callback(new Error('Odpověď neobsahuje playlist'));
                return;
            }

            callback(null, resp.playlist);
        })
        .error(function (resp) {
            callback(new Error('Chybná odpověď serveru'))
        });
};

PlaylistLoader.prototype.bind = function (url, callback) {
    this.url = url;
    this.get(this.url, callback);
};

PlaylistLoader.prototype.refresh = function (callback) {
    this.get(this.url, callback);
};

angular.module('remoteControl').factory('playlistLoader', function ($http) {
    return new PlaylistLoader($http);
});