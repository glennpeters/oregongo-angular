/**
 * Protect window.console method calls, e.g. console is not defined on IE
 * unless dev tools are open, and IE doesn't define console.debug
 * 
 * Chrome 41.0.2272.118: debug,error,info,log,warn,dir,dirxml,table,trace,assert,count,markTimeline,profile,profileEnd,time,timeEnd,timeStamp,timeline,timelineEnd,group,groupCollapsed,groupEnd,clear
 * Firefox 37.0.1: log,info,warn,error,exception,debug,table,trace,dir,group,groupCollapsed,groupEnd,time,timeEnd,profile,profileEnd,assert,count
 * Internet Explorer 11: select,log,info,warn,error,debug,assert,time,timeEnd,timeStamp,group,groupCollapsed,groupEnd,trace,clear,dir,dirxml,count,countReset,cd
 * Safari 6.2.4: debug,error,log,info,warn,clear,dir,dirxml,table,trace,assert,count,profile,profileEnd,time,timeEnd,timeStamp,group,groupCollapsed,groupEnd
 * Opera 28.0.1750.48: debug,error,info,log,warn,dir,dirxml,table,trace,assert,count,markTimeline,profile,profileEnd,time,timeEnd,timeStamp,timeline,timelineEnd,group,groupCollapsed,groupEnd,clear
 */
(function() {
  // Union of Chrome, Firefox, IE, Opera, and Safari console methods
  var methods = ["assert", "assert", "cd", "clear", "count", "countReset",
    "debug", "dir", "dirxml", "dirxml", "dirxml", "error", "error", "exception",
    "group", "group", "groupCollapsed", "groupCollapsed", "groupEnd", "info",
    "info", "log", "log", "markTimeline", "profile", "profileEnd", "profileEnd",
    "select", "table", "table", "time", "time", "timeEnd", "timeEnd", "timeEnd",
    "timeEnd", "timeEnd", "timeStamp", "timeline", "timelineEnd", "trace",
    "trace", "trace", "trace", "trace", "warn"];
  var length = methods.length;
  var console = (window.console = window.console || {});
  var method;
  var noop = function() {};
  while (length--) {
    method = methods[length];
    // define undefined methods as noops to prevent errors
    if (!console[method]) {
      console[method] = noop;
    }
  }
})();


// Fix weird codekit issue
// var console = window.console,
// 	alert = window.alert;


function log( msg ) {

	if ( window.console ) {
		window.console.log( msg );
	}
}

// function initLity() {

// 	var lightbox = lity();
// 	// lightbox is now function which can be both used directly to open links in a 
// 	// lightbox or as an event handler:

// 	// Open a URL in a lightbox
// 	lightbox('https://farm9.staticflickr.com/8642/16455005578_0fdfc6c3da_b.jpg');

// 	// Bind as an event handler
// 	$(document).on('click', '[data-lightbox]', lightbox);
// }


function init() {

	// // Mobile menu
	// $('button.navbar-toggle').click(function() {

	// 	log('Nav bar menu!');

	// 	return false;
	// });

	// $('.main-nav li > a').on('mouseover', function() {
	// 	var $li = $this();

	// 	alert('foo');
	// });

	log('oregongo init');

	// initLity();

	$('.main-nav > li').hover(
		// Nouseover
		function() {
			var $li = $( this ),
				$sub = $li.find('.submenu');

			$sub.addClass('active');
			log('main-nav mouseover');

		// Mouseout
		}, function() {
			var $li = $( this ),
				$sub = $li.find('.submenu');

			$sub.removeClass('active');

			log('main-nav mouseout');

		}
	);

	$('a[href=#]').click(function() {

		log('Nullified');

		return false;
	});

	$('a[data-nav]').click(function() {

		var $link = $(this),
			nav = $link.data('nav');

		log('Data-nav found, nav = ' + nav );

		return false;
	});
}


// Call init

$( init );



// {
//   title: "All about <p> Tags",
//   body: "<p>This is a post about &lt;p&gt; tags</p>"
// }

// var source   = $("#entry-template").html();
// var template = Handlebars.compile(source);

// var context = {title: "My New Post", body: "This is my first post!"}
// var html    = template(context);
