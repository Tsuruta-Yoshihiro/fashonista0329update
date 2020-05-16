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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/mypages.js":
/*!*********************************!*\
  !*** ./resources/js/mypages.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  var s = "";

  for (var i in $imgs) {
    $title = i;

    for (var j = 0; j < $imgs[i].length; j++) {
      $original = $imgs[i][j][0];
      $thumb = $imgs[i][j][1];
      $desc = $imgs[i][j][2];
      s += '<li>';
      s += '   <a class="thumb" name="leaf" href="' + $original + '" title="' + $title + '">';
      s += '      <img src="' + $thumb + '" alt="' + $desc + '" />';
      s += '   </a>';
      s += '   <div class="caption">';
      s += '      <div class="download">';
      s += '         <a href="' + $original + '">Download Original</a>';
      s += '      </div>';
      s += '      <div class="image-title">' + $title + '</div>';
      s += '      <div class="image-desc">' + $desc + '</div>';
      s += '   </div>';
      s += '</li>';
    }
  }

  $("#thumbs ul.thumbs").append(s); // We only want these styles applied when javascript is enabled

  $('div.navigation').css({
    'width': '300px',
    'float': 'left'
  });
  $('div.content').css('display', 'block'); // Initially set opacity on thumbs and add
  // additional styling for hover effect on thumbs

  var onMouseOutOpacity = 0.67;
  $('#thumbs ul.thumbs li').opacityrollover({
    mouseOutOpacity: onMouseOutOpacity,
    mouseOverOpacity: 1.0,
    fadeSpeed: 'fast',
    exemptionSelector: '.selected'
  }); // Initialize Advanced Galleriffic Gallery

  var gallery = $('#thumbs').galleriffic({
    delay: 2500,
    numThumbs: 15,
    preloadAhead: 10,
    enableTopPager: true,
    enableBottomPager: true,
    maxPagesToShow: 7,
    imageContainerSel: '#slideshow',
    controlsContainerSel: '#controls',
    captionContainerSel: '#caption',
    loadingContainerSel: '#loading',
    renderSSControls: true,
    renderNavControls: true,
    playLinkText: 'Play Slideshow',
    pauseLinkText: 'Pause Slideshow',
    prevLinkText: '&lsaquo; Previous Photo',
    nextLinkText: 'Next Photo &rsaquo;',
    nextPageLinkText: 'Next &rsaquo;',
    prevPageLinkText: '&lsaquo; Prev',
    enableHistory: false,
    autoStart: false,
    syncTransitions: true,
    defaultTransitionDuration: 900,
    onSlideChange: function onSlideChange(prevIndex, nextIndex) {
      // 'this' refers to the gallery, which is an extension of $('#thumbs')
      this.find('ul.thumbs').children().eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end().eq(nextIndex).fadeTo('fast', 1.0);
    },
    onPageTransitionOut: function onPageTransitionOut(callback) {
      this.fadeTo('fast', 0.0, callback);
    },
    onPageTransitionIn: function onPageTransitionIn() {
      this.fadeTo('fast', 1.0);
    }
  });
});

/***/ }),

/***/ 2:
/*!***************************************!*\
  !*** multi ./resources/js/mypages.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/ec2-user/environment/fashonista/resources/js/mypages.js */"./resources/js/mypages.js");


/***/ })

/******/ });