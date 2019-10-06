// Contact Controller

(function() {

	console.log("FaqController.js ... loaded ");

	var app = angular.module('oregonGoApp');

    var FaqController = function($scope, $routeParams, goData) {

		var onFAQ = function(responseData) {
			$scope.faqs = responseData;
		};

		var onError = function(reason) {
			_self.error = "Error fetching the FAQ data. ";

			if ( reason.message ) {
				_self.error += ("(" + reason.message + ")");
			}
		};

		goData.getFAQs().then( onFAQ, onError );

	};

	app.controller("FaqController", ["$scope", "$routeParams", "goData", FaqController]);

})(); // end closure
