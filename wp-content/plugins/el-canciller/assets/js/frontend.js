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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/front/front-index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/front/components/render-posts.js":
/*!**********************************************!*\
  !*** ./src/front/components/render-posts.js ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/**\r\n * render posts frontend component.\r\n *\r\n * src/front/components/render-posts.js\r\n */\nfunction renderTemplate(data) {\n  var elements = document.querySelectorAll(\".render-posts\");\n  [].forEach.call(elements, function (el) {\n    var cat = el.getAttribute('data-category');\n    var quantity = el.getAttribute('data-quantity');\n    data.forEach(function (val, key) {\n      if (val.categories === cat) {\n        console.log(\"es la cat\");\n      }\n\n      var template = \"<p>\".concat(val.title.rendered, \"</p>\\n             <p>\").concat(val.date, \"</p><br><br>\");\n\n      while (key <= quantity) {\n        el.appendChild(template);\n      }\n\n      console.log(template);\n    });\n  });\n}\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (renderTemplate);\n\n//# sourceURL=webpack:///./src/front/components/render-posts.js?");

/***/ }),

/***/ "./src/front/front-index.js":
/*!**********************************!*\
  !*** ./src/front/front-index.js ***!
  \**********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_render_posts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/render-posts */ \"./src/front/components/render-posts.js\");\n/* harmony import */ var _service_wordpressapi__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./service/wordpressapi */ \"./src/front/service/wordpressapi.js\");\n/**\r\n * Frontend entry point.\r\n *\r\n * src/front/front-index.js\r\n */\n\n\n_service_wordpressapi__WEBPACK_IMPORTED_MODULE_1__[\"default\"].getLatestPosts.then(function (res) {\n  console.log(res);\n  Object(_components_render_posts__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(res);\n});\n\n//# sourceURL=webpack:///./src/front/front-index.js?");

/***/ }),

/***/ "./src/front/service/wordpressapi.js":
/*!*******************************************!*\
  !*** ./src/front/service/wordpressapi.js ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/**\r\n * API posts front end service\r\n *\r\n * src/front/service/wordpressapi.js\r\n */\nfunction getData(query) {\n  var url = \"http://142.93.24.13/wp-json/wp/v2\".concat(query);\n  var headers = {// tslint:disable-next-line:max-line-length\n    //'Authorization': 'Bearer BQDN8FI-G3-thKplSnuymOZA8ixIHLoEnrEg4-nvcCsN64BGpyNv1LdbM53gz0ODqo9QXYLHKtbKaG7DLl0'\n  };\n  return fetch(url, {\n    headers: headers\n  }).then(function (data) {\n    return data.json();\n  });\n}\n\nvar apiData = {\n  getLatestPosts: getData('/posts?per_page=20')\n};\n/* harmony default export */ __webpack_exports__[\"default\"] = (apiData);\n\n//# sourceURL=webpack:///./src/front/service/wordpressapi.js?");

/***/ })

/******/ });