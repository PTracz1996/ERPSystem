/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/delete.js":
/*!********************************!*\
  !*** ./resources/js/delete.js ***!
  \********************************/
/***/ (() => {

eval("$(function () {\n  $('.delete').click(function () {\n    var _this = this;\n\n    Swal.fire({\n      title: 'Czy na pewno chcesz usunąć rekord?',\n      icon: 'warning',\n      showCancelButton: true,\n      confirmButtonText: 'Tak',\n      cancelButtonText: 'Nie'\n    }).then(function (result) {\n      if (result.value) {\n        $.ajax({\n          method: \"DELETE\",\n          url: \"client/\" + $(_this).data(\"id\"),\n          data: {\n            id: $(_this).data(\"id\")\n          }\n        }).done(function (data) {\n          window.location.reload();\n        }).fail(function (data) {\n          Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status);\n        });\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGVsZXRlLmpzP2ZlNjQiXSwibmFtZXMiOlsiJCIsImNsaWNrIiwiU3dhbCIsImZpcmUiLCJ0aXRsZSIsImljb24iLCJzaG93Q2FuY2VsQnV0dG9uIiwiY29uZmlybUJ1dHRvblRleHQiLCJjYW5jZWxCdXR0b25UZXh0IiwidGhlbiIsInJlc3VsdCIsInZhbHVlIiwiYWpheCIsIm1ldGhvZCIsInVybCIsImRhdGEiLCJpZCIsImRvbmUiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInJlbG9hZCIsImZhaWwiLCJyZXNwb25zZUpTT04iLCJtZXNzYWdlIiwic3RhdHVzIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFlBQVc7QUFDVEEsRUFBQUEsQ0FBQyxDQUFDLFNBQUQsQ0FBRCxDQUFhQyxLQUFiLENBQW1CLFlBQVc7QUFBQTs7QUFDMUJDLElBQUFBLElBQUksQ0FBQ0MsSUFBTCxDQUFVO0FBQ05DLE1BQUFBLEtBQUssRUFBRSxvQ0FERDtBQUVOQyxNQUFBQSxJQUFJLEVBQUUsU0FGQTtBQUdOQyxNQUFBQSxnQkFBZ0IsRUFBRSxJQUhaO0FBSU5DLE1BQUFBLGlCQUFpQixFQUFFLEtBSmI7QUFLTkMsTUFBQUEsZ0JBQWdCLEVBQUU7QUFMWixLQUFWLEVBTUdDLElBTkgsQ0FNUSxVQUFDQyxNQUFELEVBQVk7QUFDaEIsVUFBSUEsTUFBTSxDQUFDQyxLQUFYLEVBQWtCO0FBQ2RYLFFBQUFBLENBQUMsQ0FBQ1ksSUFBRixDQUNJO0FBQ0lDLFVBQUFBLE1BQU0sRUFBRSxRQURaO0FBRUlDLFVBQUFBLEdBQUcsRUFBRSxZQUFZZCxDQUFDLENBQUMsS0FBRCxDQUFELENBQVFlLElBQVIsQ0FBYSxJQUFiLENBRnJCO0FBR0lBLFVBQUFBLElBQUksRUFBRTtBQUFDQyxZQUFBQSxFQUFFLEVBQUVoQixDQUFDLENBQUMsS0FBRCxDQUFELENBQVFlLElBQVIsQ0FBYSxJQUFiO0FBQUw7QUFIVixTQURKLEVBT0NFLElBUEQsQ0FPTSxVQUFVRixJQUFWLEVBQWdCO0FBQ2xCRyxVQUFBQSxNQUFNLENBQUNDLFFBQVAsQ0FBZ0JDLE1BQWhCO0FBQ0gsU0FURCxFQVVDQyxJQVZELENBVU0sVUFBVU4sSUFBVixFQUFnQjtBQUNsQmIsVUFBQUEsSUFBSSxDQUFDQyxJQUFMLENBQVUsU0FBVixFQUFxQlksSUFBSSxDQUFDTyxZQUFMLENBQWtCQyxPQUF2QyxFQUFnRFIsSUFBSSxDQUFDTyxZQUFMLENBQWtCRSxNQUFsRTtBQUNILFNBWkQ7QUFhSDtBQUNKLEtBdEJEO0FBdUJILEdBeEJEO0FBeUJILENBMUJBLENBQUQiLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uKCkge1xyXG4gICAgJCgnLmRlbGV0ZScpLmNsaWNrKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgIHRpdGxlOiAnQ3p5IG5hIHBld25vIGNoY2VzeiB1c3VuxIXEhyByZWtvcmQ/JyxcclxuICAgICAgICAgICAgaWNvbjogJ3dhcm5pbmcnLFxyXG4gICAgICAgICAgICBzaG93Q2FuY2VsQnV0dG9uOiB0cnVlLFxyXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogJ1RhaycsXHJcbiAgICAgICAgICAgIGNhbmNlbEJ1dHRvblRleHQ6ICdOaWUnXHJcbiAgICAgICAgfSkudGhlbigocmVzdWx0KSA9PiB7XHJcbiAgICAgICAgICAgIGlmIChyZXN1bHQudmFsdWUpIHtcclxuICAgICAgICAgICAgICAgICQuYWpheChcclxuICAgICAgICAgICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIG1ldGhvZDogXCJERUxFVEVcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgdXJsOiBcImNsaWVudC9cIiArICQodGhpcykuZGF0YShcImlkXCIpLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBkYXRhOiB7aWQ6ICQodGhpcykuZGF0YShcImlkXCIpfVxyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICApXHJcbiAgICAgICAgICAgICAgICAuZG9uZShmdW5jdGlvbiAoZGF0YSkge1xyXG4gICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcclxuICAgICAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgICAgICAuZmFpbChmdW5jdGlvbiAoZGF0YSkge1xyXG4gICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSgnT29wcy4uLicsIGRhdGEucmVzcG9uc2VKU09OLm1lc3NhZ2UsIGRhdGEucmVzcG9uc2VKU09OLnN0YXR1cyk7XHJcbiAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pXHJcbiAgICB9KTtcclxufSk7Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9kZWxldGUuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/delete.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/delete.js"]();
/******/ 	
/******/ })()
;