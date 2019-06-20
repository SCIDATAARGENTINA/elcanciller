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
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/babel-loader/lib/index.js):\\nSyntaxError: C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\src\\\\front\\\\components\\\\render-posts.js: Unexpected token, expected \\\",\\\" (18:31)\\n\\n\\u001b[0m \\u001b[90m 16 | \\u001b[39m        data\\u001b[33m.\\u001b[39mforEach((val\\u001b[33m,\\u001b[39m key) \\u001b[33m=>\\u001b[39m {\\u001b[0m\\n\\u001b[0m \\u001b[90m 17 | \\u001b[39m            \\u001b[36mif\\u001b[39m (val\\u001b[33m.\\u001b[39mcategories \\u001b[33m===\\u001b[39m cat) {\\u001b[0m\\n\\u001b[0m\\u001b[31m\\u001b[1m>\\u001b[22m\\u001b[39m\\u001b[90m 18 | \\u001b[39m                console\\u001b[33m.\\u001b[39mlog(es la cat)\\u001b[33m;\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m    | \\u001b[39m                               \\u001b[31m\\u001b[1m^\\u001b[22m\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m 19 | \\u001b[39m            }\\u001b[0m\\n\\u001b[0m \\u001b[90m 20 | \\u001b[39m            \\u001b[36mconst\\u001b[39m template \\u001b[33m=\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m 21 | \\u001b[39m                \\u001b[32m`<p>${val.title.rendered}</p>\\u001b[39m\\u001b[0m\\n    at Parser.raise (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:6344:17)\\n    at Parser.unexpected (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:7659:16)\\n    at Parser.expect (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:7645:28)\\n    at Parser.parseCallExpressionArguments (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8605:14)\\n    at Parser.parseSubscript (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8515:29)\\n    at Parser.parseSubscripts (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8434:19)\\n    at Parser.parseExprSubscripts (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8423:17)\\n    at Parser.parseMaybeUnary (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8393:21)\\n    at Parser.parseExprOps (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8280:23)\\n    at Parser.parseMaybeConditional (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8253:23)\\n    at Parser.parseMaybeAssign (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8200:21)\\n    at Parser.parseExpression (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8148:23)\\n    at Parser.parseStatementContent (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9917:23)\\n    at Parser.parseStatement (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9788:17)\\n    at Parser.parseBlockOrModuleBlockBody (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10364:25)\\n    at Parser.parseBlockBody (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10351:10)\\n    at Parser.parseBlock (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10335:10)\\n    at Parser.parseStatementContent (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9864:21)\\n    at Parser.parseStatement (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9788:17)\\n    at Parser.parseIfStatement (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10142:28)\\n    at Parser.parseStatementContent (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9833:21)\\n    at Parser.parseStatement (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9788:17)\\n    at Parser.parseBlockOrModuleBlockBody (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10364:25)\\n    at Parser.parseBlockBody (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10351:10)\\n    at Parser.parseBlock (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10335:10)\\n    at Parser.parseFunctionBody (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9408:24)\\n    at Parser.parseArrowExpression (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9349:10)\\n    at Parser.parseParenAndDistinguishExpression (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8986:12)\\n    at Parser.parseExprAtom (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8760:21)\\n    at Parser.parseExprSubscripts (C:\\\\Users\\\\PC\\\\Desktop\\\\Proyectos\\\\Scidata\\\\elCanciller\\\\elcanciller\\\\wp-content\\\\plugins\\\\el-canciller\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8413:23)\");\n\n//# sourceURL=webpack:///./src/front/components/render-posts.js?");

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