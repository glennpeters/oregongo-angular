(function(){

	console.log("goData.js ... loaded ");

    var goData = function($http) {

        var getClubs = function(){
            return $http.get("js/data/clubs.json" )
                        .then(function (response) {
							// console.log("goData :: getClubs; response = ", response );

                            return response.data;
                        });
        };

        var getContacts = function(){
            return $http.get("js/data/contacts.json" )
                        .then(function (response) {
							// console.log("goData :: getContacts; response = ", response );

                            return response.data;
                        });
        };

        var getEvents = function(){
          return $http.get("js/data/events.json" )
                        .then(function (response) {
							console.log("goData :: getEvents; response = ", response );

                            return response.data;
                        });
        };

        var getFAQs = function(){
          return $http.get("js/data/faq.json" )
                        .then(function (response) {
							// console.log("goData :: getFAQs; response = ", response );

                            return response.data;
                        });
        };

        return {
            getClubs: getClubs,
            getContacts: getContacts,
            getEvents: getEvents,
            getFAQs: getFAQs
        };
    };

    var module = angular.module("oregonGoApp");

    // Module name, module object
    module.factory( "goData", goData );

}());
