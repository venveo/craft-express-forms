!function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=566)}({566:function(e,t,r){"use strict";r.r(t);var n=r(6),o=r.n(n);$(".action-buttons a.icon.delete").on({click:function(e){var t,r=e.target.dataset,n=r.notification,i=r.msg;confirm(i)&&$.ajax({url:Craft.getCpUrl("express-forms/settings/email-notifications/delete"),type:"post",dataType:"json",data:(t={},o()(t,Craft.csrfTokenName,Craft.csrfTokenValue),o()(t,"notification",n),t),success:function(e){e.success?window.location.href=Craft.getCpUrl("express-forms/settings/email-notifications"):e.error&&Craft.cp.displayError(e.error)}})}})},6:function(e,t){e.exports=function(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}}});