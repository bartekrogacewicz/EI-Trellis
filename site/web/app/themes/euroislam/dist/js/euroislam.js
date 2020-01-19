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
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_index_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scss/index.scss */ "./src/scss/index.scss");
/* harmony import */ var _scss_index_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_index_scss__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _js_post_template__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/post_template */ "./src/js/post_template.js");


var ACTIVE_CLASS = 'is-active';
var site = document.getElementById('site'); // wyszukiwarka globalna

var searchForm = document.getElementById('search');
var searchInput = document.getElementById('search-input');
var searchButton = document.getElementById('search-button');
site.addEventListener('click', function () {
  searchForm.classList.remove(ACTIVE_CLASS);
});
searchButton.addEventListener('click', function (e) {
  e.stopPropagation();

  if (!searchForm.classList.contains(ACTIVE_CLASS)) {
    e.preventDefault();
    searchForm.classList.add(ACTIVE_CLASS);
    searchInput.focus();
    return;
  }
}); // wyszukiwarka faq

var faqSearch = document.getElementById('faq-search');

if (faqSearch) {
  var checkFAQForValue = function checkFAQForValue(value) {
    faqList.forEach(function (block) {
      if (value !== '' || value !== undefined) {
        if (block.textContent.toLowerCase().includes(value.toLowerCase())) {
          block.style.display = 'flex';
        } else {
          block.style.display = 'none';
        }
      } else {
        block.style.display = 'flex';
      }
    });
  };

  var faqInput = document.getElementById('faq-search-input');
  var faqList = document.querySelectorAll('.js-faq-block');
  faqSearch.addEventListener('submit', function (e) {
    e.preventDefault();
  });
  faqInput.addEventListener('input', function (e) {
    return checkFAQForValue(e.target.value);
  });
  faqInput.addEventListener('keypress', function (e) {
    if (e.key === 'Escape') {
      faqSearch.reset();
    }
  });
} // infinite scroll
// const firstPostID = window._postId;
// const categoriesIDs = window._categoriesIds;
// const articleList = document.getElementById('articles-list');
// const infiniteListener = document.getElementById('infinite-listener');
// let counter = 0;
// let postsList = [];
// if (infiniteListener) {
//     loadPostsList().then(() => {
//         const infiniteObserver = new IntersectionObserver(loadNextPost, {
//             root: document.body,
//             rootMargin: '0px',
//             threshold: 1.0
//         });
//         infiniteObserver.observe(infiniteListener);
//         function loadNextPost(entries) {
//             entries.forEach(entry => {
//                 if (entry.isIntersecting) {
//                   console.log(entry)
//                     if (postsList.length) {
//                         createPostTemplate(postsList[counter]).then(
//                             template => {
//                                 const articleElement = document.createElement(
//                                     'article'
//                                 );
//                                 articleElement.classList.add('article');
//                                 articleElement.innerHTML = template;
//                                 counter++;
//                                 articleList.insertBefore(
//                                     articleElement,
//                                     infiniteListener
//                                 );
//                             }
//                         );
//                     }
//                 } else {
//                   console.log(false)
//                 }
//             });
//         }
//     });
// }
// function loadPostsList() {
//     return new Promise((resolve, reject) => {
//         const api = 'http://localhost/klienci/euroislam/wp-json/wp/v2/posts';
//         const apiArguments = `?categories=${categoriesIDs}&exclude=${firstPostID}`;
//         fetch(`${api}${apiArguments}`)
//             .then(response => response.json())
//             .then(response => {
//                 response.forEach(post => {
//                     const {
//                         id,
//                         date,
//                         title,
//                         content,
//                         categories,
//                         _links
//                     } = post;
//                     postsList.push({
//                         id,
//                         date,
//                         title: title.rendered,
//                         content: content.rendered,
//                         categories,
//                         _links
//                     });
//                 });
//                 resolve();
//             });
//     });
// }

/***/ }),

/***/ "./src/js/post_template.js":
/*!*********************************!*\
  !*** ./src/js/post_template.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (function (_ref) {
  var date = _ref.date,
      title = _ref.title,
      content = _ref.content,
      _links = _ref._links;
  return new Promise(function (resolve, reject) {
    var imgFetchLink = _links['wp:featuredmedia'][0].href;
    fetch(imgFetchLink).then(function (response) {
      return response.json();
    }).then(function (response) {
      var imgLink = response.source_url;
      var template = "<header class=\"article__header\">\n          <div class=\"article__taxonomy\">\n            <span class=\"article__date\">\n              Publikacja: ".concat(date, "\n            </span>\n          </div>\n          <h1 class=\"article__title\">\n            ").concat(title, "\n          </h1>\n          <div class=\"article__social-media\">\n    \n          </div>\n          <figure class=\"article__image-wrapper\">\n            <img src=\"").concat(imgLink, "\" alt=\"\" class=\"article__image\">\n            <figcaption class=\"article__image-caption\">\n              ").concat(response.title.rendered, "\n            </figcaption>\n          </figure>\n        </header>\n        <div class=\"article__content\">\n          ").concat(content, "\n        </div>\n        <footer class=\"article__footer\">\n    \n        </footer>");
      resolve(template);
    });
  });
});

/***/ }),

/***/ "./src/scss/index.scss":
/*!*****************************!*\
  !*** ./src/scss/index.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

/******/ });
//# sourceMappingURL=euroislam.js.map