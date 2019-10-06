// Club Controller

(function() {

	console.log("ClubController.js ... loaded ");

	var app = angular.module('oregonGoApp');

    var ClubController = function($scope, $routeParams, goData) {

		$scope.clubs = [];

		var onClubs = function(responseData) {
			$scope.clubs = responseData;
		};

		var onError = function(reason) {
			$scope.error = "Error fetching the clubs data. ";

			if ( reason.message ) {
				$scope.error += ("(" + reason.message + ")");
			}
		};

		goData.getClubs().then( onClubs, onError );

	};

	// Make sure the order of these array elements match the order of the parameters in the function!!!
	app.controller("ClubController", ["$scope", "$routeParams", "goData", ClubController]);

})(); // end closure
