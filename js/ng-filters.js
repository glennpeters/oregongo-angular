
/* Filters */

(function() {

	console.log("oregonGoFilters ... loaded ");

	// TODO -- clean up

	// var oregonGoFilters = angular.module('oregonGoFilters', []);

	angular.module('oregonGoFilters', []).filter('frogs', function() {
		return function(input) {

			return input + " frogs";
		};
	});


	// angular.module('oregonGoFilters', []).filter('currentEvent', function() {
	// 	return function(input) {

	// 		var today = null,
	// 			target = null;

	// 		if ( typeof input !== 'object' ||
	// 				typeof input.startDate !== 'string' ||
	// 				typeof input.endDate !== 'string' ) {
	// 			return false;
	// 		}

	// 		today = new Date().toISOString();
	// 		target = new Date('2015-06-26').toISOString();

	// 		// startDate: "2015-04-28",
	// 		// 		endDate: "2015-10-30"

	// 		return today < target;
	// 	};
	// });

})();
