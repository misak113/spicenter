/**
 * Created by misak113 on 3.12.13.
 */

function MediaPlaylistCtrl($scope, playlistLoader, Message) {
    $scope.playlist = [];
    $scope.message = null;

    $scope.bindPlaylist = function (identifier) {
        playlistLoader.bind(identifier, loadedPlaylist);
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