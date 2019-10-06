// Event Controller

(function() {

	console.log("EventsController.js ... loaded ");

	var app = angular.module('oregonGoApp');

    var EventsController = function($scope, $routeParams) {

		var eventCode = $routeParams.eventcode;

		$scope.eventUrl = null;

		// TODO: Handle failed eventCode / eventUrl
		if ( eventCode ) {
			$scope.eventUrl = "html/events/" + eventCode + ".html";
		}

		console.log('EventsController: scope.events = ', $scope.events );

	};

    app.controller("EventsController", ["$scope","$routeParams", EventsController]);

})(); // end closure
