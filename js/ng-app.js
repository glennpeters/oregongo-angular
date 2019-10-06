// Angular Main App (OregonGo)

(function() {

	// The second parameter [] is included when creating a new module,
	// without it, we're referencing an existing module.
	var app = angular.module('oregonGoApp', ['ngRoute']);



	app.config(['$routeProvider', // '$locationProvider',
		function($routeProvider) {

			// $locationProvider.html5Mode(true);  // .hashPrefix('!');

			var routes = {
				'home' : {
					templateUrl: 'html/views/home.html'
				},
				'todo' : {
					templateUrl: 'html/views/todo.html'
				},
				'about' : {
					templateUrl: 'html/views/about.html'
				},
				'resources' : {
					templateUrl: 'html/views/links.html'
				},
				'faq' : {
					templateUrl: 'html/views/faq.html',
					controller: 'FaqController'
				},
				'mailing' : {
					templateUrl: 'html/views/mailing.html'
				},
				'starter' : {
					templateUrl: 'html/views/starter.html'
				},
				'clubs' : {
					templateUrl: 'html/views/clubs.html',
					controller: 'ClubController'
				},
				'events' : {
					templateUrl: 'html/views/events.html',
					controller: 'EventsController'
				},
				'eventsingle' : {
					templateUrl: 'html/views/event-single.html',
					controller: 'EventsController'
				},
				'eventsall' : {
					templateUrl: 'html/views/events-all.html',
					controller: 'EventsController'
				},
				'contact': {
					templateUrl: 'html/views/contact.html',
					controller: 'ContactController'
				}
			};

			$routeProvider.
				when('/', routes.home ).
				when('/home', routes.home ).
				when('/todo', routes.todo ).  // TODO: To do.  Remove some day.

				// About
				when('/about', routes.about ).
				when('/resources', routes.resources ).
				when('/links', routes.resources ).
				when('/about/faq', routes.faq ).
				when('/faq', routes.faq ).
				when('/mailing', routes.mailing ).
				when('/starter', routes.starter ).

				// Where to Play
				when('/where', routes.clubs ).
				when('/clubs', routes.clubs ).
				when('/meetings', routes.clubs ).

				// Calendar, Events
				when('/calendar', routes.events ).
				when('/events', routes.events ).
				// Individual Event
				when('/event/:eventcode', routes.eventsingle ).
				// Event Archive
				when('/events/all', routes.eventsall ).
				when('/events/archive', routes.eventsall ).
				when('/events/full', routes.eventsall ).
				when('/calendar/archive', routes.eventsall ).
				when('/calendar/full', routes.eventsall ).

				// Contact
				when('/contact', routes.contact ).

				// Default
				otherwise({
					redirectTo: '/home'
				});
	}]);

})();
