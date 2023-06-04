(()=>{var e={5954:e=>{(()=>{"use strict";var t={23835:(e,t,r)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.isWebauthnResult=t.WebauthnOperationType=t.WebauthnErrorName=t.WebAuthnStatus=t.WebAuthnCallTypes=void 0;var n,o,a,i=r(38945);Object.defineProperty(t,"WebAuthnCallTypes",{enumerable:!0,get:function(){return i.WebAuthnCallTypes}}),(a=t.WebAuthnStatus||(t.WebAuthnStatus={})).Success="Success",a.Error="Error",(o=t.WebauthnErrorName||(t.WebauthnErrorName={})).NotSupportedError="NotSupportedError",o.SecurityError="SecurityError",o.NotAllowedError="NotAllowedError",o.InvalidStateError="InvalidStateError",o.UnknownError="UnknownError",(n=t.WebauthnOperationType||(t.WebauthnOperationType={})).Create="create",n.Get="get",t.isWebauthnResult=function(e){return function(e){return"object"==typeof e&&null!==e&&"status"in e&&"success"===e.status&&"value"in e&&"object"==typeof e.value&&null!==e.value}(e)||function(e){return"object"==typeof e&&null!==e&&"status"in e&&"useFallback"===e.status}(e)||function(e){return"object"==typeof e&&null!==e&&"status"in e&&"error"===e.status&&"errorName"in e&&"string"==typeof e.errorName}(e)}},11303:function(e,t,r){var n=this&&this.__createBinding||(Object.create?function(e,t,r,n){void 0===n&&(n=r);var o=Object.getOwnPropertyDescriptor(t,r);o&&!("get"in o?!t.__esModule:o.writable||o.configurable)||(o={enumerable:!0,get:function(){return t[r]}}),Object.defineProperty(e,n,o)}:function(e,t,r,n){void 0===n&&(n=r),e[n]=t[r]}),o=this&&this.__exportStar||function(e,t){for(var r in e)"default"===r||Object.prototype.hasOwnProperty.call(t,r)||n(t,e,r)};Object.defineProperty(t,"__esModule",{value:!0}),o(r(23835),t)},38945:(e,t)=>{var r,n,o,a,i,u,s,l;Object.defineProperty(t,"__esModule",{value:!0}),t.RemoveWebAuthnAuthenticatorError=t.DisableWebAuthnAuthenticationError=t.OpenSessionWithWebAuthnAuthenticatorError=t.InitOpenSessionWithWebAuthnAuthenticatorError=t.RefreshAvailableWebAuthnAuthenticatorsError=t.RefreshWebAuthnAuthenticatorsError=t.RegisterWebAuthnAuthenticatorError=t.InitRegisterWebAuthnAuthenticatorError=t.EnableWebAuthnAuthenticationError=t.InitEnableWebAuthnAuthenticationError=t.WebAuthnCallTypes=void 0,(l=t.WebAuthnCallTypes||(t.WebAuthnCallTypes={})).CREATE="webauthn.create",l.GET="webauthn.get",(t.InitEnableWebAuthnAuthenticationError||(t.InitEnableWebAuthnAuthenticationError={})).UNKNOWN_ERROR="UNKNOWN_ERROR",(s=t.EnableWebAuthnAuthenticationError||(t.EnableWebAuthnAuthenticationError={})).UNKNOWN_ERROR="UNKNOWN_ERROR",s.USER_HAS_OTP="USER_HAS_OTP",s.WEBAUTHN_SERVICE_INIT_FAILED="WEBAUTHN_SERVICE_INIT_FAILED",(t.InitRegisterWebAuthnAuthenticatorError||(t.InitRegisterWebAuthnAuthenticatorError={})).UNKNOWN_ERROR="UNKNOWN_ERROR",(u=t.RegisterWebAuthnAuthenticatorError||(t.RegisterWebAuthnAuthenticatorError={})).USER_HAS_OTP="USER_HAS_OTP",u.UNKNOWN_ERROR="UNKNOWN_ERROR",(t.RefreshWebAuthnAuthenticatorsError||(t.RefreshWebAuthnAuthenticatorsError={})).UNKNOWN_ERROR="UNKNOWN_ERROR",(i=t.RefreshAvailableWebAuthnAuthenticatorsError||(t.RefreshAvailableWebAuthnAuthenticatorsError={})).UNKNOWN_ERROR="UNKNOWN_ERROR",i.MISSING_SESSION_KEYS_IN_STORE="MISSING_SESSION_KEYS_IN_STORE",(a=t.InitOpenSessionWithWebAuthnAuthenticatorError||(t.InitOpenSessionWithWebAuthnAuthenticatorError={})).UNKNOWN_ERROR="UNKNOWN_ERROR",a.UNAVAILABLE_AUTHENTICATORS="UNAVAILABLE_AUTHENTICATORS",a.CANNOT_TRIGGER_WEBAUTHN_AUTHENTICATION="CANNOT_TRIGGER_WEBAUTHN_AUTHENTICATION",(o=t.OpenSessionWithWebAuthnAuthenticatorError||(t.OpenSessionWithWebAuthnAuthenticatorError={})).UNKNOWN_ERROR="UNKNOWN_ERROR",o.MP_MISSING_IN_SESSION_ERROR="MP_MISSING_IN_SESSION_ERROR",(n=t.DisableWebAuthnAuthenticationError||(t.DisableWebAuthnAuthenticationError={})).UNKNOWN_ERROR="UNKNOWN_ERROR",n.WEBAUTHN_SERVICE_DEACTIVATE_FAILED="WEBAUTHN_SERVICE_DEACTIVATE_FAILED",n.MISSING_LOGIN="MISSING_LOGIN",(r=t.RemoveWebAuthnAuthenticatorError||(t.RemoveWebAuthnAuthenticatorError={})).UNKNOWN_ERROR="UNKNOWN_ERROR",r.CANNOT_REMOVE_WEBAUTHN_AUTHENTICATOR="CANNOT_REMOVE_WEBAUTHN_AUTHENTICATOR"}},r={},n=function e(n){var o=r[n];if(void 0!==o)return o.exports;var a=r[n]={exports:{}};return t[n].call(a.exports,a,a.exports,e),a.exports}(11303);e.exports=n})()}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var a=t[n]={exports:{}};return e[n](a,a.exports,r),a.exports}(()=>{"use strict";var e=r(5954);const t="dashlane-content-to-page",n="dashlane-content-ready";let o=0;const a=new Promise((e=>{const t=()=>{document.removeEventListener(n,t),e()};document.addEventListener(n,t)})),i=async(e,r)=>{var n;return"forward_webauthn_ready"!==(null===(n=document.getElementById("dashlane_webauthn"))||void 0===n?void 0:n.getAttribute("name"))&&await a,new Promise(((n,a)=>{const i=o+1;o=i;const u=e=>{const o=JSON.parse(e.detail);((e,t)=>"object"==typeof e&&null!==e&&"msgId"in e&&"number"==typeof e.msgId&&"response"in e&&t(e.response))(o,r)&&o.msgId===i&&(document.removeEventListener(t,u),n(o.response))};document.addEventListener(t,u);const s=new CustomEvent("dashlane-page-to-content",{detail:{msgId:i,message:e}});document.dispatchEvent(s)}))};function u(e){const t=new Uint8Array(e);let r="";for(const e of t)r+=String.fromCharCode(e);return btoa(r).replace(/\+/g,"-").replace(/\//g,"_").replace(/=/g,"")}function s(e){const t=e.replace(/-/g,"+").replace(/_/g,"/"),r=(4-t.length%4)%4,n=t.padEnd(t.length+r,"="),o=atob(n),a=new ArrayBuffer(o.length),i=new Uint8Array(a);for(let e=0;e<o.length;e++)i[e]=o.charCodeAt(e);return a}function l(e){return"buffer"in e?e.buffer:e}var c;function E(t){return"object"==typeof t&&null!==t&&"function"in t&&t.function===e.WebAuthnCallTypes.CREATE&&"result"in t&&(0,e.isWebauthnResult)(t.result)}function A(t){return"object"==typeof t&&null!==t&&"function"in t&&t.function===e.WebAuthnCallTypes.GET&&"result"in t&&(0,e.isWebauthnResult)(t.result)}function h(e){return"object"==typeof e&&null!==e&&"function"in e&&e.function===c.IS_CONDITIONAL_UI_AVAILABLE&&"result"in e&&"boolean"==typeof e.result}!function(e){e.IS_CONDITIONAL_UI_AVAILABLE="IS_CONDITIONAL_UI_AVAILABLE"}(c||(c={}));const N={[e.WebauthnErrorName.NotSupportedError]:"The operation is not supported",[e.WebauthnErrorName.SecurityError]:"The operation is insecure",[e.WebauthnErrorName.NotAllowedError]:"The request is not allowed by the user agent or the platform in the current context, possibly because the user denied permission",[e.WebauthnErrorName.InvalidStateError]:"The object is in an invalid state",[e.WebauthnErrorName.UnknownError]:"The operation failed for an unknown transient reason (e.g. out of memory)"};class b{constructor(e){this._isFallbackForConditionalUI=(e,t)=>"conditional"===e&&"otherAuthenticator"===t.reason,this._originals=e}async create(t){const r=null==t?void 0:t.publicKey;if(r){const t=function(t){var r;return{function:e.WebAuthnCallTypes.CREATE,param:{...t,challenge:u(l(t.challenge)),excludeCredentials:(null!==(r=t.excludeCredentials)&&void 0!==r?r:[]).map((e=>({...e,id:u(l(e.id))}))),user:{...t.user,id:u(l(t.user.id))}}}}(r),n=await i(t,E);if(n.function===e.WebAuthnCallTypes.CREATE&&"useFallback"!==n.result.status){if("error"===n.result.status)throw new DOMException(N[n.result.errorName],n.result.errorName);return function(e){const t={clientDataJSON:s(e.clientDataJSON),attestationObject:s(e.attestationObject),getTransports:()=>e.transports,getPublicKeyAlgorithm:()=>e.publicKeyAlgorithm,getAuthenticatorData:()=>s(e.authenticatorData),getPublicKey:()=>s(e.publicKey)};return{...e,rawId:s(e.rawId),response:t,getClientExtensionResults:()=>({})}}(n.result.value)}}return this._originals.create(t)}async get(t){const r=null==t?void 0:t.mediation,n=null==t?void 0:t.publicKey;if(n){const o=function(t,r){var n;return{function:e.WebAuthnCallTypes.GET,mediation:r,param:{...t,challenge:u(l(t.challenge)),allowCredentials:(null!==(n=t.allowCredentials)&&void 0!==n?n:[]).map((e=>({...e,id:u(l(e.id))})))}}}(n,r),a=await i(o,A);if(a.function===e.WebAuthnCallTypes.GET){if("useFallback"!==a.result.status){if("error"===a.result.status)throw new DOMException(N[a.result.errorName],a.result.errorName);return function(e){const t={clientDataJSON:s(e.response.clientDataJSON),authenticatorData:s(e.response.authenticatorData),signature:s(e.response.signature),userHandle:e.response.userHandle?s(e.response.userHandle):null};return{...e,rawId:s(e.rawId),response:t,getClientExtensionResults:()=>{var t;return null!==(t=e.clientExtensionResults)&&void 0!==t?t:{}}}}(a.result.value)}this._isFallbackForConditionalUI(r,a.result)&&delete t.mediation}}return this._originals.get(t)}preventSilentAccess(){return this._originals.preventSilentAccess()}store(e){return this._originals.store(e)}}!function(){var e;const t=null===(e=window.PublicKeyCredential)||void 0===e?void 0:e.isConditionalMediationAvailable;window.PublicKeyCredential&&Object.defineProperty(window.PublicKeyCredential,"isConditionalMediationAvailable",{value:async()=>{const e={function:c.IS_CONDITIONAL_UI_AVAILABLE};return(await i(e,h)).result||(null==t?void 0:t())}});try{Object.defineProperty(navigator,"credentials",{value:new b(navigator.credentials)})}catch(e){}}()})()})();