// OregonGo Controllers

(function() {

	console.log("ng-directives.js ... loaded ");

	var app = angular.module('oregonGoApp');

	// Directives =======================================================

	// Navbar (Top)
	app.directive('navbarTop', ['$http', function($http) {
		return {
			restrict: 'E', // E for element
			templateUrl: 'html/widgets/navbar-top.html',
			controller: function() {
				// $scope.phones = Phone.query();
				// $scope.orderProp = 'age';
				this.navbar = [];
				var _self = this;

				// Converted via JSON.stringify
				$http.get('js/data/events.json').success(function(data){

					_self.navbar = data;
				});

			},
			controllerAs: 'navBarTop'
		};
	}]);

	// Footer
	app.directive('mainFooter', [function() {
		return {
			restrict: 'E', // E for element
			templateUrl: 'html/widgets/footer.html',
			controller: function() {

				// Access with {{ footerHome.year }}
				this.year = new Date().getFullYear();

			},
			controllerAs: 'footerMain'
		};
	}]);

	// Upcoming Events
	app.directive('upcomingEvents', ['goData', function(goData) {
		return {
			restrict: 'E', // E for element
			templateUrl: 'html/widgets/upcoming-events.html',
			controller: function() {
				// $scope.phones = Phone.query();
				// $scope.orderProp = 'age';
				this.events = [];
				var _self = this;

				// NOTE: This is better handled in a database call, but I'm testing capabilities
				// primarily as a pure Angular app right now
				this.isCurrent = function( myEvent ) {

					var today = null,
						start = null,
						end = null,
						startOK = true,
						endOK = true;

					if ( typeof myEvent !== 'object' ||
							typeof myEvent.startDate !== 'string' ||
							typeof myEvent.endDate !== 'string' ) {
						return false;
					}

					today = new Date().toISOString();

					// If empty string, short-circuit as true
					if ( !!myEvent.startDate ) {
						start = new Date( myEvent.startDate ).toISOString();

						startOK = ( today > start );
					}

					// If empty string, short-circuit as true
					if ( !!myEvent.endDate ) {
						end = new Date( myEvent.endDate ).toISOString();

						endOK = ( today < end );
					}

					return ( startOK && endOK );
				};

				var onEvents = function(responseData) {
					_self.events = responseData;
				};

				var onError = function(reason) {
					_self.error = "Error fetching the events data. ";

					if ( reason.message ) {
						_self.error += ("(" + reason.message + ")");
					}
				};

				goData.getEvents().then( onEvents, onError );

			},
			// This is the object the template file will use to access variables
			controllerAs: 'upcomingEvents'
		};
	}]);

})(); // end closure
