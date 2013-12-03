/**
 * Created by misak113 on 3.12.13.
 */

function MediaPlaylistCtrl($scope, playlistLoader, playlistControl, Message) {
    $scope.playlist = [];
    $scope.message = null;
    $scope.streamUrl = '';

    $scope.bindPlaylist = function (identifier) {
        playlistLoader.bind(identifier, loadedPlaylist);
    };

    $scope.refresh = function () {
        playlistLoader.refresh(loadedPlaylist);
    };

    $scope.setPlaylistControlIdentifier = function (identifier) {
        playlistControl.setIdentifier(identifier);
    };

    $scope.pushStream = function () {
        playlistControl.push($scope.streamUrl, function () {
            $scope.streamUrl = '';
            playlistLoader.refresh(function () {});
        });
    };

    /**
     *
     * @param {Error} e
     * @param {Array} playlist
     */
    var loadedPlaylist = function (e, playlist) {
        if (e) {
            $scope.message = new Message(e.message, e.type);
            return;
        }

        $scope.playlist = playlist;
    };
}