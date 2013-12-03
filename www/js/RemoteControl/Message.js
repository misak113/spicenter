/**
 * Created by misak113 on 3.12.13.
 */

function Message(text, type) {
    this.text = text;
    this.type = type;
}

angular.module('remoteControl').factory('Message', function () {
    return Message;
});