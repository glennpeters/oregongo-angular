// Contact Controller

(function() {

	console.log("ContactController.js ... loaded ");

	var app = angular.module('oregonGoApp');

	// Parameters match controller delcaration below.
    var ContactController = function($scope, $routeParams, goData) {

		var onContacts = function( contactData ) {
			console.log("ContactController :: onContacts; contactData = ", contactData );

			$scope.contacts = contactData;
		};

		var onError = function(reason) {
			$scope.error = "Error fetching data. ";

			if ( reason.message ) {
				$scope.error += ("(" + reason.message + ")");
			}
		};

		goData.getContacts().then( onContacts, onError );

	};

	app.controller("ContactController", ["$scope", "$routeParams", "goData", ContactController]);

})(); // end closure
