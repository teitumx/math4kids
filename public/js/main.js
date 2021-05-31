/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/main/app.js":
/*!**********************************!*\
  !*** ./resources/js/main/app.js ***!
  \**********************************/
/***/ (() => {

$(function () {
  // Get the form.
  var form = $('#ajax-contact'); // Get the messages div.

  var formMessages = $('#form-messages'); // Set up an event listener for the contact form.

  $(form).submit(function (e) {
    // Stop the browser from submitting the form.
    e.preventDefault(); // Serialize the form data.

    var formData = $(form).serialize(); // Submit the form using AJAX.

    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData
    }).done(function (response) {
      // Make sure that the formMessages div has the 'success' class.
      $(formMessages).removeClass('error');
      $(formMessages).addClass('success'); // Set the message text.

      $(formMessages).text(response); // Clear the form.

      $('#name').val('');
      $('#email').val('');
      $('#subject').val('');
      $('#message').val('');
    }).fail(function (data) {
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('error'); // Set the message text.

      if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
      } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
      }
    });
  });
});

/***/ }),

// /***/ "./resources/js/main/counter.js":
// /*!**************************************!*\
  // !*** ./resources/js/main/counter.js ***!
//   \**************************************/
// /***/ (() => {

// var a = 0;
// $(window).scroll(function () {
//   var oTop = $('.mu-single-counter').offset().top - window.innerHeight;

//   if (a == 0 && $(window).scrollTop() > oTop) {
//     $('.counter-value').each(function () {
//       var $this = $(this),
//           countTo = $this.attr('data-count');
//       $({
//         countNum: $this.text()
//       }).animate({
//         countNum: countTo
//       }, {
//         duration: 2000,
//         easing: 'swing',
//         step: function step() {
//           $this.text(Math.floor(this.countNum));
//         },
//         complete: function complete() {
//           $this.text(this.countNum); //alert('finished');
//         }
//       });
//     });
//     a = 1;
//   }
// });

// /***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/



})();

/******/ })()
;