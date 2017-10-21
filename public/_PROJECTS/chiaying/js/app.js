/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);

$(document).ready(function () {
	setTimeout(function () {
		$('#overlay div').children().fadeOut('fast', function () {
			$('#overlay').delay(600).fadeOut('slow');
		});
	}, 2400);
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

(function ($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing

  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 48
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function () {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 54
  });

  // Collapse the navbar when page is scrolled
  $(window).scroll(function () {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  });
})(jQuery); // End of use strict

// // Google Maps Scripts
// var map = null;
// // When the window has finished loading create our google map below
// google.maps.event.addDomListener(window, 'load', init);
// google.maps.event.addDomListener(window, 'resize', function() {
//   map.setCenter(new google.maps.LatLng(40.6700, -73.9400));
// });

// function init() {
//   // Basic options for a simple Google Map
//   // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
//   var mapOptions = {
//     // How zoomed in you want the map to start at (always required)
//     zoom: 15,

//     // The latitude and longitude to center the map (always required)
//     center: new google.maps.LatLng(40.6700, -73.9400), // New York

//     // Disables the default Google Maps UI components
//     disableDefaultUI: true,
//     scrollwheel: false,
//     draggable: false,

//     // How you would like to style the map.
//     // This is where you would paste any style found on Snazzy Maps.
//     styles: [{
//       "featureType": "water",
//       "elementType": "geometry",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 17
//       }]
//     }, {
//       "featureType": "landscape",
//       "elementType": "geometry",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 20
//       }]
//     }, {
//       "featureType": "road.highway",
//       "elementType": "geometry.fill",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 17
//       }]
//     }, {
//       "featureType": "road.highway",
//       "elementType": "geometry.stroke",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 29
//       }, {
//         "weight": 0.2
//       }]
//     }, {
//       "featureType": "road.arterial",
//       "elementType": "geometry",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 18
//       }]
//     }, {
//       "featureType": "road.local",
//       "elementType": "geometry",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 16
//       }]
//     }, {
//       "featureType": "poi",
//       "elementType": "geometry",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 21
//       }]
//     }, {
//       "elementType": "labels.text.stroke",
//       "stylers": [{
//         "visibility": "on"
//       }, {
//         "color": "#000000"
//       }, {
//         "lightness": 16
//       }]
//     }, {
//       "elementType": "labels.text.fill",
//       "stylers": [{
//         "saturation": 36
//       }, {
//         "color": "#000000"
//       }, {
//         "lightness": 40
//       }]
//     }, {
//       "elementType": "labels.icon",
//       "stylers": [{
//         "visibility": "off"
//       }]
//     }, {
//       "featureType": "transit",
//       "elementType": "geometry",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 19
//       }]
//     }, {
//       "featureType": "administrative",
//       "elementType": "geometry.fill",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 20
//       }]
//     }, {
//       "featureType": "administrative",
//       "elementType": "geometry.stroke",
//       "stylers": [{
//         "color": "#000000"
//       }, {
//         "lightness": 17
//       }, {
//         "weight": 1.2
//       }]
//     }]
//   };

//   // Get the HTML DOM element that will contain your map
//   // We are using a div with id="map" seen below in the <body>
//   var mapElement = document.getElementById('map');

//   // Create the Google Map using out element and options defined above
//   map = new google.maps.Map(mapElement, mapOptions);

//   // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
//   var image = 'img/map-marker.svg';
//   var myLatLng = new google.maps.LatLng(40.6700, -73.9400);
//   var beachMarker = new google.maps.Marker({
//     position: myLatLng,
//     map: map,
//     icon: image
//   });
// }

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);