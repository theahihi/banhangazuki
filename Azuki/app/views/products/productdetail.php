<?php  
if (isset($_SESSION['dacosp'])) {
    echo "<script>alert('" . $_SESSION['dacosp'] . "');</script>";
    unset($_SESSION['dacosp']); // Xóa thông báo sau khi hiển thị
}
?>
<!doctype html>
<html lang="vi">
	<head>
		


<link rel="preload" as="image" fetchpriority="low" href="//theme.hstatic.net/200000065946/1001264503/14/logo.png?v=482">

<!--+++++++++++++++++++++++++  CSS ++++++++++++++++++++++++-->
<link rel="preload stylesheet" as="style" fetchpriority="low" href="//theme.hstatic.net/200000065946/1001264503/14/plugins.css?v=482">
<style>
/*! Flickity v2.1.0 https://flickity.metafizzy.co ---------------------------------------------- */
.flickity-enabled{position:relative}.flickity-enabled:focus{outline:0}.flickity-viewport{overflow:hidden;position:relative;height:100%}.flickity-slider{position:absolute;width:100%;height:100%}.flickity-enabled.is-draggable{-webkit-tap-highlight-color:transparent;tap-highlight-color:transparent;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.flickity-enabled.is-draggable .flickity-viewport{cursor:move;cursor:-webkit-grab;cursor:grab}.flickity-enabled.is-draggable .flickity-viewport.is-pointer-down{cursor:-webkit-grabbing;cursor:grabbing}.flickity-button{position:absolute;background:#fff;background:hsla(0,0%,100%,.75);border:none;color:#333}.flickity-button:hover{background:#fff;cursor:pointer}.flickity-button:focus{outline:0;box-shadow:0 0 0 5px #19f}.flickity-button:active{opacity:.6}.flickity-button:disabled{opacity:.3;cursor:auto;pointer-events:none}.flickity-button-icon{fill:#333}.flickity-prev-next-button{top:50%;width:44px;height:44px;border-radius:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.flickity-prev-next-button.previous{left:10px}.flickity-prev-next-button.next{right:10px}.flickity-rtl .flickity-prev-next-button.previous{left:auto;right:10px}.flickity-rtl .flickity-prev-next-button.next{right:auto;left:10px}.flickity-prev-next-button .flickity-button-icon{position:absolute;left:20%;top:20%;width:60%;height:60%}.flickity-page-dots{position:absolute;width:100%;bottom:-25px;padding:0;margin:0;list-style:none;text-align:center;line-height:1}.flickity-rtl .flickity-page-dots{direction:rtl}.flickity-page-dots .dot{display:inline-block;width:10px;height:10px;margin:0 8px;background:#333;border-radius:50%;opacity:.25;cursor:pointer}.flickity-page-dots .dot.is-selected{opacity:1}
.flickity-viewport {height: 100% !important}


</style>

<!--+++++++++++++++++++++++++  JS ++++++++++++++++++++++++-->
<script>
	/* jquery.min.1.11.0 */
	!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=c.slice,e=c.concat,f=c.push,g=c.indexOf,h={},i=h.toString,j=h.hasOwnProperty,k="".trim,l={},m="1.11.0",n=function(a,b){return new n.fn.init(a,b)},o=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,q=/-([\da-z])/gi,r=function(a,b){return b.toUpperCase()};n.fn=n.prototype={jquery:m,constructor:n,selector:"",length:0,toArray:function(){return d.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:d.call(this)},pushStack:function(a){var b=n.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a,b){return n.each(this,a,b)},map:function(a){return this.pushStack(n.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(d.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor(null)},push:f,sort:c.sort,splice:c.splice},n.extend=n.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||n.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(e=arguments[h]))for(d in e)a=g[d],c=e[d],g!==c&&(j&&c&&(n.isPlainObject(c)||(b=n.isArray(c)))?(b?(b=!1,f=a&&n.isArray(a)?a:[]):f=a&&n.isPlainObject(a)?a:{},g[d]=n.extend(j,f,c)):void 0!==c&&(g[d]=c));return g},n.extend({expando:"jQuery"+(m+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===n.type(a)},isArray:Array.isArray||function(a){return"array"===n.type(a)},isWindow:function(a){return null!=a&&a==a.window},isNumeric:function(a){return a-parseFloat(a)>=0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},isPlainObject:function(a){var b;if(!a||"object"!==n.type(a)||a.nodeType||n.isWindow(a))return!1;try{if(a.constructor&&!j.call(a,"constructor")&&!j.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}if(l.ownLast)for(b in a)return j.call(a,b);for(b in a);return void 0===b||j.call(a,b)},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?h[i.call(a)]||"object":typeof a},globalEval:function(b){b&&n.trim(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(p,"ms-").replace(q,r)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b,c){var d,e=0,f=a.length,g=s(a);if(c){if(g){for(;f>e;e++)if(d=b.apply(a[e],c),d===!1)break}else for(e in a)if(d=b.apply(a[e],c),d===!1)break}else if(g){for(;f>e;e++)if(d=b.call(a[e],e,a[e]),d===!1)break}else for(e in a)if(d=b.call(a[e],e,a[e]),d===!1)break;return a},trim:k&&!k.call("\ufeff\xa0")?function(a){return null==a?"":k.call(a)}:function(a){return null==a?"":(a+"").replace(o,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(s(Object(a))?n.merge(c,"string"==typeof a?[a]:a):f.call(c,a)),c},inArray:function(a,b,c){var d;if(b){if(g)return g.call(b,a,c);for(d=b.length,c=c?0>c?Math.max(0,d+c):c:0;d>c;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,b){var c=+b.length,d=0,e=a.length;while(c>d)a[e++]=b[d++];if(c!==c)while(void 0!==b[d])a[e++]=b[d++];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,f=0,g=a.length,h=s(a),i=[];if(h)for(;g>f;f++)d=b(a[f],f,c),null!=d&&i.push(d);else for(f in a)d=b(a[f],f,c),null!=d&&i.push(d);return e.apply([],i)},guid:1,proxy:function(a,b){var c,e,f;return"string"==typeof b&&(f=a[b],b=a,a=f),n.isFunction(a)?(c=d.call(arguments,2),e=function(){return a.apply(b||this,c.concat(d.call(arguments)))},e.guid=a.guid=a.guid||n.guid++,e):void 0},now:function(){return+new Date},support:l}),n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){h["[object "+b+"]"]=b.toLowerCase()});function s(a){var b=a.length,c=n.type(a);return"function"===c||n.isWindow(a)?!1:1===a.nodeType&&b?!0:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var t=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s="sizzle"+ -new Date,t=a.document,u=0,v=0,w=eb(),x=eb(),y=eb(),z=function(a,b){return a===b&&(j=!0),0},A="undefined",B=1<<31,C={}.hasOwnProperty,D=[],E=D.pop,F=D.push,G=D.push,H=D.slice,I=D.indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(this[b]===a)return b;return-1},J="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",K="[\\x20\\t\\r\\n\\f]",L="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",M=L.replace("w","w#"),N="\\["+K+"*("+L+")"+K+"*(?:([*^$|!~]?=)"+K+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+M+")|)|)"+K+"*\\]",O=":("+L+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+N.replace(3,8)+")*)|.*)\\)|)",P=new RegExp("^"+K+"+|((?:^|[^\\\\])(?:\\\\.)*)"+K+"+$","g"),Q=new RegExp("^"+K+"*,"+K+"*"),R=new RegExp("^"+K+"*([>+~]|"+K+")"+K+"*"),S=new RegExp("="+K+"*([^\\]'\"]*?)"+K+"*\\]","g"),T=new RegExp(O),U=new RegExp("^"+M+"$"),V={ID:new RegExp("^#("+L+")"),CLASS:new RegExp("^\\.("+L+")"),TAG:new RegExp("^("+L.replace("w","w*")+")"),ATTR:new RegExp("^"+N),PSEUDO:new RegExp("^"+O),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+K+"*(even|odd|(([+-]|)(\\d*)n|)"+K+"*(?:([+-]|)"+K+"*(\\d+)|))"+K+"*\\)|)","i"),bool:new RegExp("^(?:"+J+")$","i"),needsContext:new RegExp("^"+K+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+K+"*((?:-\\d)?\\d*)"+K+"*\\)|)(?=[^-]|$)","i")},W=/^(?:input|select|textarea|button)$/i,X=/^h\d$/i,Y=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,$=/[+~]/,_=/'|\\/g,ab=new RegExp("\\\\([\\da-f]{1,6}"+K+"?|("+K+")|.)","ig"),bb=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)};try{G.apply(D=H.call(t.childNodes),t.childNodes),D[t.childNodes.length].nodeType}catch(cb){G={apply:D.length?function(a,b){F.apply(a,H.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function db(a,b,d,e){var f,g,h,i,j,m,p,q,u,v;if((b?b.ownerDocument||b:t)!==l&&k(b),b=b||l,d=d||[],!a||"string"!=typeof a)return d;if(1!==(i=b.nodeType)&&9!==i)return[];if(n&&!e){if(f=Z.exec(a))if(h=f[1]){if(9===i){if(g=b.getElementById(h),!g||!g.parentNode)return d;if(g.id===h)return d.push(g),d}else if(b.ownerDocument&&(g=b.ownerDocument.getElementById(h))&&r(b,g)&&g.id===h)return d.push(g),d}else{if(f[2])return G.apply(d,b.getElementsByTagName(a)),d;if((h=f[3])&&c.getElementsByClassName&&b.getElementsByClassName)return G.apply(d,b.getElementsByClassName(h)),d}if(c.qsa&&(!o||!o.test(a))){if(q=p=s,u=b,v=9===i&&a,1===i&&"object"!==b.nodeName.toLowerCase()){m=ob(a),(p=b.getAttribute("id"))?q=p.replace(_,"\\$&"):b.setAttribute("id",q),q="[id='"+q+"'] ",j=m.length;while(j--)m[j]=q+pb(m[j]);u=$.test(a)&&mb(b.parentNode)||b,v=m.join(",")}if(v)try{return G.apply(d,u.querySelectorAll(v)),d}catch(w){}finally{p||b.removeAttribute("id")}}}return xb(a.replace(P,"$1"),b,d,e)}function eb(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function fb(a){return a[s]=!0,a}function gb(a){var b=l.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function hb(a,b){var c=a.split("|"),e=a.length;while(e--)d.attrHandle[c[e]]=b}function ib(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||B)-(~a.sourceIndex||B);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function jb(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function kb(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function lb(a){return fb(function(b){return b=+b,fb(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function mb(a){return a&&typeof a.getElementsByTagName!==A&&a}c=db.support={},f=db.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},k=db.setDocument=function(a){var b,e=a?a.ownerDocument||a:t,g=e.defaultView;return e!==l&&9===e.nodeType&&e.documentElement?(l=e,m=e.documentElement,n=!f(e),g&&g!==g.top&&(g.addEventListener?g.addEventListener("unload",function(){k()},!1):g.attachEvent&&g.attachEvent("onunload",function(){k()})),c.attributes=gb(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=gb(function(a){return a.appendChild(e.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=Y.test(e.getElementsByClassName)&&gb(function(a){return a.innerHTML="<div class='a'></div><div class='a i'></div>",a.firstChild.className="i",2===a.getElementsByClassName("i").length}),c.getById=gb(function(a){return m.appendChild(a).id=s,!e.getElementsByName||!e.getElementsByName(s).length}),c.getById?(d.find.ID=function(a,b){if(typeof b.getElementById!==A&&n){var c=b.getElementById(a);return c&&c.parentNode?[c]:[]}},d.filter.ID=function(a){var b=a.replace(ab,bb);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(ab,bb);return function(a){var c=typeof a.getAttributeNode!==A&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return typeof b.getElementsByTagName!==A?b.getElementsByTagName(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return typeof b.getElementsByClassName!==A&&n?b.getElementsByClassName(a):void 0},p=[],o=[],(c.qsa=Y.test(e.querySelectorAll))&&(gb(function(a){a.innerHTML="<select t=''><option selected=''></option></select>",a.querySelectorAll("[t^='']").length&&o.push("[*^$]="+K+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||o.push("\\["+K+"*(?:value|"+J+")"),a.querySelectorAll(":checked").length||o.push(":checked")}),gb(function(a){var b=e.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&o.push("name"+K+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||o.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),o.push(",.*:")})),(c.matchesSelector=Y.test(q=m.webkitMatchesSelector||m.mozMatchesSelector||m.oMatchesSelector||m.msMatchesSelector))&&gb(function(a){c.disconnectedMatch=q.call(a,"div"),q.call(a,"[s!='']:x"),p.push("!=",O)}),o=o.length&&new RegExp(o.join("|")),p=p.length&&new RegExp(p.join("|")),b=Y.test(m.compareDocumentPosition),r=b||Y.test(m.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},z=b?function(a,b){if(a===b)return j=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===e||a.ownerDocument===t&&r(t,a)?-1:b===e||b.ownerDocument===t&&r(t,b)?1:i?I.call(i,a)-I.call(i,b):0:4&d?-1:1)}:function(a,b){if(a===b)return j=!0,0;var c,d=0,f=a.parentNode,g=b.parentNode,h=[a],k=[b];if(!f||!g)return a===e?-1:b===e?1:f?-1:g?1:i?I.call(i,a)-I.call(i,b):0;if(f===g)return ib(a,b);c=a;while(c=c.parentNode)h.unshift(c);c=b;while(c=c.parentNode)k.unshift(c);while(h[d]===k[d])d++;return d?ib(h[d],k[d]):h[d]===t?-1:k[d]===t?1:0},e):l},db.matches=function(a,b){return db(a,null,null,b)},db.matchesSelector=function(a,b){if((a.ownerDocument||a)!==l&&k(a),b=b.replace(S,"='$1']"),!(!c.matchesSelector||!n||p&&p.test(b)||o&&o.test(b)))try{var d=q.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return db(b,l,null,[a]).length>0},db.contains=function(a,b){return(a.ownerDocument||a)!==l&&k(a),r(a,b)},db.attr=function(a,b){(a.ownerDocument||a)!==l&&k(a);var e=d.attrHandle[b.toLowerCase()],f=e&&C.call(d.attrHandle,b.toLowerCase())?e(a,b,!n):void 0;return void 0!==f?f:c.attributes||!n?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},db.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},db.uniqueSort=function(a){var b,d=[],e=0,f=0;if(j=!c.detectDuplicates,i=!c.sortStable&&a.slice(0),a.sort(z),j){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return i=null,a},e=db.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=db.selectors={cacheLength:50,createPseudo:fb,match:V,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(ab,bb),a[3]=(a[4]||a[5]||"").replace(ab,bb),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||db.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&db.error(a[0]),a},PSEUDO:function(a){var b,c=!a[5]&&a[2];return V.CHILD.test(a[0])?null:(a[3]&&void 0!==a[4]?a[2]=a[4]:c&&T.test(c)&&(b=ob(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(ab,bb).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=w[a+" "];return b||(b=new RegExp("(^|"+K+")"+a+"("+K+"|$)"))&&w(a,function(a){return b.test("string"==typeof a.className&&a.className||typeof a.getAttribute!==A&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=db.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),t=!i&&!h;if(q){if(f){while(p){l=b;while(l=l[p])if(h?l.nodeName.toLowerCase()===r:1===l.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&t){k=q[s]||(q[s]={}),j=k[a]||[],n=j[0]===u&&j[1],m=j[0]===u&&j[2],l=n&&q.childNodes[n];while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if(1===l.nodeType&&++m&&l===b){k[a]=[u,n,m];break}}else if(t&&(j=(b[s]||(b[s]={}))[a])&&j[0]===u)m=j[1];else while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if((h?l.nodeName.toLowerCase()===r:1===l.nodeType)&&++m&&(t&&((l[s]||(l[s]={}))[a]=[u,m]),l===b))break;return m-=e,m===d||m%d===0&&m/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||db.error("unsupported pseudo: "+a);return e[s]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?fb(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=I.call(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:fb(function(a){var b=[],c=[],d=g(a.replace(P,"$1"));return d[s]?fb(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),!c.pop()}}),has:fb(function(a){return function(b){return db(a,b).length>0}}),contains:fb(function(a){return function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:fb(function(a){return U.test(a||"")||db.error("unsupported lang: "+a),a=a.replace(ab,bb).toLowerCase(),function(b){var c;do if(c=n?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===m},focus:function(a){return a===l.activeElement&&(!l.hasFocus||l.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return X.test(a.nodeName)},input:function(a){return W.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:lb(function(){return[0]}),last:lb(function(a,b){return[b-1]}),eq:lb(function(a,b,c){return[0>c?c+b:c]}),even:lb(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:lb(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:lb(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:lb(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=jb(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=kb(b);function nb(){}nb.prototype=d.filters=d.pseudos,d.setFilters=new nb;function ob(a,b){var c,e,f,g,h,i,j,k=x[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){(!c||(e=Q.exec(h)))&&(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=R.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(P," ")}),h=h.slice(c.length));for(g in d.filter)!(e=V[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?db.error(a):x(a,i).slice(0)}function pb(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function qb(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=v++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j=[u,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(i=b[s]||(b[s]={}),(h=i[d])&&h[0]===u&&h[1]===f)return j[2]=h[2];if(i[d]=j,j[2]=a(b,c,g))return!0}}}function rb(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function sb(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(!c||c(f,d,e))&&(g.push(f),j&&b.push(h));return g}function tb(a,b,c,d,e,f){return d&&!d[s]&&(d=tb(d)),e&&!e[s]&&(e=tb(e,f)),fb(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||wb(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:sb(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=sb(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?I.call(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=sb(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):G.apply(g,r)})}function ub(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],i=g||d.relative[" "],j=g?1:0,k=qb(function(a){return a===b},i,!0),l=qb(function(a){return I.call(b,a)>-1},i,!0),m=[function(a,c,d){return!g&&(d||c!==h)||((b=c).nodeType?k(a,c,d):l(a,c,d))}];f>j;j++)if(c=d.relative[a[j].type])m=[qb(rb(m),c)];else{if(c=d.filter[a[j].type].apply(null,a[j].matches),c[s]){for(e=++j;f>e;e++)if(d.relative[a[e].type])break;return tb(j>1&&rb(m),j>1&&pb(a.slice(0,j-1).concat({value:" "===a[j-2].type?"*":""})).replace(P,"$1"),c,e>j&&ub(a.slice(j,e)),f>e&&ub(a=a.slice(e)),f>e&&pb(a))}m.push(c)}return rb(m)}function vb(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,i,j,k){var m,n,o,p=0,q="0",r=f&&[],s=[],t=h,v=f||e&&d.find.TAG("*",k),w=u+=null==t?1:Math.random()||.1,x=v.length;for(k&&(h=g!==l&&g);q!==x&&null!=(m=v[q]);q++){if(e&&m){n=0;while(o=a[n++])if(o(m,g,i)){j.push(m);break}k&&(u=w)}c&&((m=!o&&m)&&p--,f&&r.push(m))}if(p+=q,c&&q!==p){n=0;while(o=b[n++])o(r,s,g,i);if(f){if(p>0)while(q--)r[q]||s[q]||(s[q]=E.call(j));s=sb(s)}G.apply(j,s),k&&!f&&s.length>0&&p+b.length>1&&db.uniqueSort(j)}return k&&(u=w,h=t),r};return c?fb(f):f}g=db.compile=function(a,b){var c,d=[],e=[],f=y[a+" "];if(!f){b||(b=ob(a)),c=b.length;while(c--)f=ub(b[c]),f[s]?d.push(f):e.push(f);f=y(a,vb(e,d))}return f};function wb(a,b,c){for(var d=0,e=b.length;e>d;d++)db(a,b[d],c);return c}function xb(a,b,e,f){var h,i,j,k,l,m=ob(a);if(!f&&1===m.length){if(i=m[0]=m[0].slice(0),i.length>2&&"ID"===(j=i[0]).type&&c.getById&&9===b.nodeType&&n&&d.relative[i[1].type]){if(b=(d.find.ID(j.matches[0].replace(ab,bb),b)||[])[0],!b)return e;a=a.slice(i.shift().value.length)}h=V.needsContext.test(a)?0:i.length;while(h--){if(j=i[h],d.relative[k=j.type])break;if((l=d.find[k])&&(f=l(j.matches[0].replace(ab,bb),$.test(i[0].type)&&mb(b.parentNode)||b))){if(i.splice(h,1),a=f.length&&pb(i),!a)return G.apply(e,f),e;break}}}return g(a,m)(f,b,!n,e,$.test(a)&&mb(b.parentNode)||b),e}return c.sortStable=s.split("").sort(z).join("")===s,c.detectDuplicates=!!j,k(),c.sortDetached=gb(function(a){return 1&a.compareDocumentPosition(l.createElement("div"))}),gb(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||hb("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&gb(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||hb("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),gb(function(a){return null==a.getAttribute("disabled")})||hb(J,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),db}(a);n.find=t,n.expr=t.selectors,n.expr[":"]=n.expr.pseudos,n.unique=t.uniqueSort,n.text=t.getText,n.isXMLDoc=t.isXML,n.contains=t.contains;var u=n.expr.match.needsContext,v=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,w=/^.[^:#\[\.,]*$/;function x(a,b,c){if(n.isFunction(b))return n.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return n.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(w.test(b))return n.filter(b,a,c);b=n.filter(b,a)}return n.grep(a,function(a){return n.inArray(a,b)>=0!==c})}n.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?n.find.matchesSelector(d,a)?[d]:[]:n.find.matches(a,n.grep(b,function(a){return 1===a.nodeType}))},n.fn.extend({find:function(a){var b,c=[],d=this,e=d.length;if("string"!=typeof a)return this.pushStack(n(a).filter(function(){for(b=0;e>b;b++)if(n.contains(d[b],this))return!0}));for(b=0;e>b;b++)n.find(a,d[b],c);return c=this.pushStack(e>1?n.unique(c):c),c.selector=this.selector?this.selector+" "+a:a,c},filter:function(a){return this.pushStack(x(this,a||[],!1))},not:function(a){return this.pushStack(x(this,a||[],!0))},is:function(a){return!!x(this,"string"==typeof a&&u.test(a)?n(a):a||[],!1).length}});var y,z=a.document,A=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,B=n.fn.init=function(a,b){var c,d;if(!a)return this;if("string"==typeof a){if(c="<"===a.charAt(0)&&">"===a.charAt(a.length-1)&&a.length>=3?[null,a,null]:A.exec(a),!c||!c[1]&&b)return!b||b.jquery?(b||y).find(a):this.constructor(b).find(a);if(c[1]){if(b=b instanceof n?b[0]:b,n.merge(this,n.parseHTML(c[1],b&&b.nodeType?b.ownerDocument||b:z,!0)),v.test(c[1])&&n.isPlainObject(b))for(c in b)n.isFunction(this[c])?this[c](b[c]):this.attr(c,b[c]);return this}if(d=z.getElementById(c[2]),d&&d.parentNode){if(d.id!==c[2])return y.find(a);this.length=1,this[0]=d}return this.context=z,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):n.isFunction(a)?"undefined"!=typeof y.ready?y.ready(a):a(n):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),n.makeArray(a,this))};B.prototype=n.fn,y=n(z);var C=/^(?:parents|prev(?:Until|All))/,D={children:!0,contents:!0,next:!0,prev:!0};n.extend({dir:function(a,b,c){var d=[],e=a[b];while(e&&9!==e.nodeType&&(void 0===c||1!==e.nodeType||!n(e).is(c)))1===e.nodeType&&d.push(e),e=e[b];return d},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}}),n.fn.extend({has:function(a){var b,c=n(a,this),d=c.length;return this.filter(function(){for(b=0;d>b;b++)if(n.contains(this,c[b]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=u.test(a)||"string"!=typeof a?n(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&n.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?n.unique(f):f)},index:function(a){return a?"string"==typeof a?n.inArray(this[0],n(a)):n.inArray(a.jquery?a[0]:a,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(n.unique(n.merge(this.get(),n(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function E(a,b){do a=a[b];while(a&&1!==a.nodeType);return a}n.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return n.dir(a,"parentNode")},parentsUntil:function(a,b,c){return n.dir(a,"parentNode",c)},next:function(a){return E(a,"nextSibling")},prev:function(a){return E(a,"previousSibling")},nextAll:function(a){return n.dir(a,"nextSibling")},prevAll:function(a){return n.dir(a,"previousSibling")},nextUntil:function(a,b,c){return n.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return n.dir(a,"previousSibling",c)},siblings:function(a){return n.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return n.sibling(a.firstChild)},contents:function(a){return n.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:n.merge([],a.childNodes)}},function(a,b){n.fn[a]=function(c,d){var e=n.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=n.filter(d,e)),this.length>1&&(D[a]||(e=n.unique(e)),C.test(a)&&(e=e.reverse())),this.pushStack(e)}});var F=/\S+/g,G={};function H(a){var b=G[a]={};return n.each(a.match(F)||[],function(a,c){b[c]=!0}),b}n.Callbacks=function(a){a="string"==typeof a?G[a]||H(a):n.extend({},a);var b,c,d,e,f,g,h=[],i=!a.once&&[],j=function(l){for(c=a.memory&&l,d=!0,f=g||0,g=0,e=h.length,b=!0;h&&e>f;f++)if(h[f].apply(l[0],l[1])===!1&&a.stopOnFalse){c=!1;break}b=!1,h&&(i?i.length&&j(i.shift()):c?h=[]:k.disable())},k={add:function(){if(h){var d=h.length;!function f(b){n.each(b,function(b,c){var d=n.type(c);"function"===d?a.unique&&k.has(c)||h.push(c):c&&c.length&&"string"!==d&&f(c)})}(arguments),b?e=h.length:c&&(g=d,j(c))}return this},remove:function(){return h&&n.each(arguments,function(a,c){var d;while((d=n.inArray(c,h,d))>-1)h.splice(d,1),b&&(e>=d&&e--,f>=d&&f--)}),this},has:function(a){return a?n.inArray(a,h)>-1:!(!h||!h.length)},empty:function(){return h=[],e=0,this},disable:function(){return h=i=c=void 0,this},disabled:function(){return!h},lock:function(){return i=void 0,c||k.disable(),this},locked:function(){return!i},fireWith:function(a,c){return!h||d&&!i||(c=c||[],c=[a,c.slice?c.slice():c],b?i.push(c):j(c)),this},fire:function(){return k.fireWith(this,arguments),this},fired:function(){return!!d}};return k},n.extend({Deferred:function(a){var b=[["resolve","done",n.Callbacks("once memory"),"resolved"],["reject","fail",n.Callbacks("once memory"),"rejected"],["notify","progress",n.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return n.Deferred(function(c){n.each(b,function(b,f){var g=n.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&n.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?n.extend(a,d):d}},e={};return d.pipe=d.then,n.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=d.call(arguments),e=c.length,f=1!==e||a&&n.isFunction(a.promise)?e:0,g=1===f?a:n.Deferred(),h=function(a,b,c){return function(e){b[a]=this,c[a]=arguments.length>1?d.call(arguments):e,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(e>1)for(i=new Array(e),j=new Array(e),k=new Array(e);e>b;b++)c[b]&&n.isFunction(c[b].promise)?c[b].promise().done(h(b,k,c)).fail(g.reject).progress(h(b,j,i)):--f;return f||g.resolveWith(k,c),g.promise()}});var I;n.fn.ready=function(a){return n.ready.promise().done(a),this},n.extend({isReady:!1,readyWait:1,holdReady:function(a){a?n.readyWait++:n.ready(!0)},ready:function(a){if(a===!0?!--n.readyWait:!n.isReady){if(!z.body)return setTimeout(n.ready);n.isReady=!0,a!==!0&&--n.readyWait>0||(I.resolveWith(z,[n]),n.fn.trigger&&n(z).trigger("ready").off("ready"))}}});function J(){z.addEventListener?(z.removeEventListener("DOMContentLoaded",K,!1),a.removeEventListener("load",K,!1)):(z.detachEvent("onreadystatechange",K),a.detachEvent("onload",K))}function K(){(z.addEventListener||"load"===event.type||"complete"===z.readyState)&&(J(),n.ready())}n.ready.promise=function(b){if(!I)if(I=n.Deferred(),"complete"===z.readyState)setTimeout(n.ready);else if(z.addEventListener)z.addEventListener("DOMContentLoaded",K,!1),a.addEventListener("load",K,!1);else{z.attachEvent("onreadystatechange",K),a.attachEvent("onload",K);var c=!1;try{c=null==a.frameElement&&z.documentElement}catch(d){}c&&c.doScroll&&!function e(){if(!n.isReady){try{c.doScroll("left")}catch(a){return setTimeout(e,50)}J(),n.ready()}}()}return I.promise(b)};var L="undefined",M;for(M in n(l))break;l.ownLast="0"!==M,l.inlineBlockNeedsLayout=!1,n(function(){var a,b,c=z.getElementsByTagName("body")[0];c&&(a=z.createElement("div"),a.style.cssText="border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px",b=z.createElement("div"),c.appendChild(a).appendChild(b),typeof b.style.zoom!==L&&(b.style.cssText="border:0;margin:0;width:1px;padding:1px;display:inline;zoom:1",(l.inlineBlockNeedsLayout=3===b.offsetWidth)&&(c.style.zoom=1)),c.removeChild(a),a=b=null)}),function(){var a=z.createElement("div");if(null==l.deleteExpando){l.deleteExpando=!0;try{delete a.test}catch(b){l.deleteExpando=!1}}a=null}(),n.acceptData=function(a){var b=n.noData[(a.nodeName+" ").toLowerCase()],c=+a.nodeType||1;return 1!==c&&9!==c?!1:!b||b!==!0&&a.getAttribute("classid")===b};var N=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,O=/([A-Z])/g;function P(a,b,c){if(void 0===c&&1===a.nodeType){var d="data-"+b.replace(O,"-$1").toLowerCase();if(c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:N.test(c)?n.parseJSON(c):c}catch(e){}n.data(a,b,c)}else c=void 0}return c}function Q(a){var b;for(b in a)if(("data"!==b||!n.isEmptyObject(a[b]))&&"toJSON"!==b)return!1;return!0}function R(a,b,d,e){if(n.acceptData(a)){var f,g,h=n.expando,i=a.nodeType,j=i?n.cache:a,k=i?a[h]:a[h]&&h;if(k&&j[k]&&(e||j[k].data)||void 0!==d||"string"!=typeof b)return k||(k=i?a[h]=c.pop()||n.guid++:h),j[k]||(j[k]=i?{}:{toJSON:n.noop}),("object"==typeof b||"function"==typeof b)&&(e?j[k]=n.extend(j[k],b):j[k].data=n.extend(j[k].data,b)),g=j[k],e||(g.data||(g.data={}),g=g.data),void 0!==d&&(g[n.camelCase(b)]=d),"string"==typeof b?(f=g[b],null==f&&(f=g[n.camelCase(b)])):f=g,f}}function S(a,b,c){if(n.acceptData(a)){var d,e,f=a.nodeType,g=f?n.cache:a,h=f?a[n.expando]:n.expando;if(g[h]){if(b&&(d=c?g[h]:g[h].data)){n.isArray(b)?b=b.concat(n.map(b,n.camelCase)):b in d?b=[b]:(b=n.camelCase(b),b=b in d?[b]:b.split(" ")),e=b.length;while(e--)delete d[b[e]];if(c?!Q(d):!n.isEmptyObject(d))return}(c||(delete g[h].data,Q(g[h])))&&(f?n.cleanData([a],!0):l.deleteExpando||g!=g.window?delete g[h]:g[h]=null)}}}n.extend({cache:{},noData:{"applet ":!0,"embed ":!0,"object ":"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},hasData:function(a){return a=a.nodeType?n.cache[a[n.expando]]:a[n.expando],!!a&&!Q(a)},data:function(a,b,c){return R(a,b,c)},removeData:function(a,b){return S(a,b)},_data:function(a,b,c){return R(a,b,c,!0)},_removeData:function(a,b){return S(a,b,!0)}}),n.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=n.data(f),1===f.nodeType&&!n._data(f,"parsedAttrs"))){c=g.length;while(c--)d=g[c].name,0===d.indexOf("data-")&&(d=n.camelCase(d.slice(5)),P(f,d,e[d]));n._data(f,"parsedAttrs",!0)}return e}return"object"==typeof a?this.each(function(){n.data(this,a)}):arguments.length>1?this.each(function(){n.data(this,a,b)}):f?P(f,a,n.data(f,a)):void 0},removeData:function(a){return this.each(function(){n.removeData(this,a)})}}),n.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=n._data(a,b),c&&(!d||n.isArray(c)?d=n._data(a,b,n.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=n.queue(a,b),d=c.length,e=c.shift(),f=n._queueHooks(a,b),g=function(){n.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return n._data(a,c)||n._data(a,c,{empty:n.Callbacks("once memory").add(function(){n._removeData(a,b+"queue"),n._removeData(a,c)})})}}),n.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?n.queue(this[0],a):void 0===b?this:this.each(function(){var c=n.queue(this,a,b);n._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&n.dequeue(this,a)})},dequeue:function(a){return this.each(function(){n.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=n.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=n._data(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}});var T=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,U=["Top","Right","Bottom","Left"],V=function(a,b){return a=b||a,"none"===n.css(a,"display")||!n.contains(a.ownerDocument,a)},W=n.access=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===n.type(c)){e=!0;for(h in c)n.access(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,n.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(n(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f},X=/^(?:checkbox|radio)$/i;!function(){var a=z.createDocumentFragment(),b=z.createElement("div"),c=z.createElement("input");if(b.setAttribute("className","t"),b.innerHTML="  <link/><table></table><a href='/a'>a</a>",l.leadingWhitespace=3===b.firstChild.nodeType,l.tbody=!b.getElementsByTagName("tbody").length,l.htmlSerialize=!!b.getElementsByTagName("link").length,l.html5Clone="<:nav></:nav>"!==z.createElement("nav").cloneNode(!0).outerHTML,c.type="checkbox",c.checked=!0,a.appendChild(c),l.appendChecked=c.checked,b.innerHTML="<textarea>x</textarea>",l.noCloneChecked=!!b.cloneNode(!0).lastChild.defaultValue,a.appendChild(b),b.innerHTML="<input type='radio' checked='checked' name='t'/>",l.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,l.noCloneEvent=!0,b.attachEvent&&(b.attachEvent("onclick",function(){l.noCloneEvent=!1}),b.cloneNode(!0).click()),null==l.deleteExpando){l.deleteExpando=!0;try{delete b.test}catch(d){l.deleteExpando=!1}}a=b=c=null}(),function(){var b,c,d=z.createElement("div");for(b in{submit:!0,change:!0,focusin:!0})c="on"+b,(l[b+"Bubbles"]=c in a)||(d.setAttribute(c,"t"),l[b+"Bubbles"]=d.attributes[c].expando===!1);d=null}();var Y=/^(?:input|select|textarea)$/i,Z=/^key/,$=/^(?:mouse|contextmenu)|click/,_=/^(?:focusinfocus|focusoutblur)$/,ab=/^([^.]*)(?:\.(.+)|)$/;function bb(){return!0}function cb(){return!1}function db(){try{return z.activeElement}catch(a){}}n.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n._data(a);if(r){c.handler&&(i=c,c=i.handler,e=i.selector),c.guid||(c.guid=n.guid++),(g=r.events)||(g=r.events={}),(k=r.handle)||(k=r.handle=function(a){return typeof n===L||a&&n.event.triggered===a.type?void 0:n.event.dispatch.apply(k.elem,arguments)},k.elem=a),b=(b||"").match(F)||[""],h=b.length;while(h--)f=ab.exec(b[h])||[],o=q=f[1],p=(f[2]||"").split(".").sort(),o&&(j=n.event.special[o]||{},o=(e?j.delegateType:j.bindType)||o,j=n.event.special[o]||{},l=n.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&n.expr.match.needsContext.test(e),namespace:p.join(".")},i),(m=g[o])||(m=g[o]=[],m.delegateCount=0,j.setup&&j.setup.call(a,d,p,k)!==!1||(a.addEventListener?a.addEventListener(o,k,!1):a.attachEvent&&a.attachEvent("on"+o,k))),j.add&&(j.add.call(a,l),l.handler.guid||(l.handler.guid=c.guid)),e?m.splice(m.delegateCount++,0,l):m.push(l),n.event.global[o]=!0);a=null}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n.hasData(a)&&n._data(a);if(r&&(k=r.events)){b=(b||"").match(F)||[""],j=b.length;while(j--)if(h=ab.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=n.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,m=k[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),i=f=m.length;while(f--)g=m[f],!e&&q!==g.origType||c&&c.guid!==g.guid||h&&!h.test(g.namespace)||d&&d!==g.selector&&("**"!==d||!g.selector)||(m.splice(f,1),g.selector&&m.delegateCount--,l.remove&&l.remove.call(a,g));i&&!m.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||n.removeEvent(a,o,r.handle),delete k[o])}else for(o in k)n.event.remove(a,o+b[j],c,d,!0);n.isEmptyObject(k)&&(delete r.handle,n._removeData(a,"events"))}},trigger:function(b,c,d,e){var f,g,h,i,k,l,m,o=[d||z],p=j.call(b,"type")?b.type:b,q=j.call(b,"namespace")?b.namespace.split("."):[];if(h=l=d=d||z,3!==d.nodeType&&8!==d.nodeType&&!_.test(p+n.event.triggered)&&(p.indexOf(".")>=0&&(q=p.split("."),p=q.shift(),q.sort()),g=p.indexOf(":")<0&&"on"+p,b=b[n.expando]?b:new n.Event(p,"object"==typeof b&&b),b.isTrigger=e?2:3,b.namespace=q.join("."),b.namespace_re=b.namespace?new RegExp("(^|\\.)"+q.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=d),c=null==c?[b]:n.makeArray(c,[b]),k=n.event.special[p]||{},e||!k.trigger||k.trigger.apply(d,c)!==!1)){if(!e&&!k.noBubble&&!n.isWindow(d)){for(i=k.delegateType||p,_.test(i+p)||(h=h.parentNode);h;h=h.parentNode)o.push(h),l=h;l===(d.ownerDocument||z)&&o.push(l.defaultView||l.parentWindow||a)}m=0;while((h=o[m++])&&!b.isPropagationStopped())b.type=m>1?i:k.bindType||p,f=(n._data(h,"events")||{})[b.type]&&n._data(h,"handle"),f&&f.apply(h,c),f=g&&h[g],f&&f.apply&&n.acceptData(h)&&(b.result=f.apply(h,c),b.result===!1&&b.preventDefault());if(b.type=p,!e&&!b.isDefaultPrevented()&&(!k._default||k._default.apply(o.pop(),c)===!1)&&n.acceptData(d)&&g&&d[p]&&!n.isWindow(d)){l=d[g],l&&(d[g]=null),n.event.triggered=p;try{d[p]()}catch(r){}n.event.triggered=void 0,l&&(d[g]=l)}return b.result}},dispatch:function(a){a=n.event.fix(a);var b,c,e,f,g,h=[],i=d.call(arguments),j=(n._data(this,"events")||{})[a.type]||[],k=n.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=n.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,g=0;while((e=f.handlers[g++])&&!a.isImmediatePropagationStopped())(!a.namespace_re||a.namespace_re.test(e.namespace))&&(a.handleObj=e,a.data=e.data,c=((n.event.special[e.origType]||{}).handle||e.handler).apply(f.elem,i),void 0!==c&&(a.result=c)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&(!a.button||"click"!==a.type))for(;i!=this;i=i.parentNode||this)if(1===i.nodeType&&(i.disabled!==!0||"click"!==a.type)){for(e=[],f=0;h>f;f++)d=b[f],c=d.selector+" ",void 0===e[c]&&(e[c]=d.needsContext?n(c,this).index(i)>=0:n.find(c,this,null,[i]).length),e[c]&&e.push(d);e.length&&g.push({elem:i,handlers:e})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},fix:function(a){if(a[n.expando])return a;var b,c,d,e=a.type,f=a,g=this.fixHooks[e];g||(this.fixHooks[e]=g=$.test(e)?this.mouseHooks:Z.test(e)?this.keyHooks:{}),d=g.props?this.props.concat(g.props):this.props,a=new n.Event(f),b=d.length;while(b--)c=d[b],a[c]=f[c];return a.target||(a.target=f.srcElement||z),3===a.target.nodeType&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,g.filter?g.filter(a,f):a},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,d,e,f=b.button,g=b.fromElement;return null==a.pageX&&null!=b.clientX&&(d=a.target.ownerDocument||z,e=d.documentElement,c=d.body,a.pageX=b.clientX+(e&&e.scrollLeft||c&&c.scrollLeft||0)-(e&&e.clientLeft||c&&c.clientLeft||0),a.pageY=b.clientY+(e&&e.scrollTop||c&&c.scrollTop||0)-(e&&e.clientTop||c&&c.clientTop||0)),!a.relatedTarget&&g&&(a.relatedTarget=g===a.target?b.toElement:g),a.which||void 0===f||(a.which=1&f?1:2&f?3:4&f?2:0),a}},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==db()&&this.focus)try{return this.focus(),!1}catch(a){}},delegateType:"focusin"},blur:{trigger:function(){return this===db()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return n.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):void 0},_default:function(a){return n.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c,d){var e=n.extend(new n.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?n.event.trigger(e,null,b):n.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},n.removeEvent=z.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){var d="on"+b;a.detachEvent&&(typeof a[d]===L&&(a[d]=null),a.detachEvent(d,c))},n.Event=function(a,b){return this instanceof n.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&(a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault())?bb:cb):this.type=a,b&&n.extend(this,b),this.timeStamp=a&&a.timeStamp||n.now(),void(this[n.expando]=!0)):new n.Event(a,b)},n.Event.prototype={isDefaultPrevented:cb,isPropagationStopped:cb,isImmediatePropagationStopped:cb,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=bb,a&&(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=bb,a&&(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=bb,this.stopPropagation()}},n.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){n.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return(!e||e!==d&&!n.contains(d,e))&&(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),l.submitBubbles||(n.event.special.submit={setup:function(){return n.nodeName(this,"form")?!1:void n.event.add(this,"click._submit keypress._submit",function(a){var b=a.target,c=n.nodeName(b,"input")||n.nodeName(b,"button")?b.form:void 0;c&&!n._data(c,"submitBubbles")&&(n.event.add(c,"submit._submit",function(a){a._submit_bubble=!0}),n._data(c,"submitBubbles",!0))})},postDispatch:function(a){a._submit_bubble&&(delete a._submit_bubble,this.parentNode&&!a.isTrigger&&n.event.simulate("submit",this.parentNode,a,!0))},teardown:function(){return n.nodeName(this,"form")?!1:void n.event.remove(this,"._submit")}}),l.changeBubbles||(n.event.special.change={setup:function(){return Y.test(this.nodeName)?(("checkbox"===this.type||"radio"===this.type)&&(n.event.add(this,"propertychange._change",function(a){"checked"===a.originalEvent.propertyName&&(this._just_changed=!0)}),n.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1),n.event.simulate("change",this,a,!0)})),!1):void n.event.add(this,"beforeactivate._change",function(a){var b=a.target;Y.test(b.nodeName)&&!n._data(b,"changeBubbles")&&(n.event.add(b,"change._change",function(a){!this.parentNode||a.isSimulated||a.isTrigger||n.event.simulate("change",this.parentNode,a,!0)}),n._data(b,"changeBubbles",!0))})},handle:function(a){var b=a.target;return this!==b||a.isSimulated||a.isTrigger||"radio"!==b.type&&"checkbox"!==b.type?a.handleObj.handler.apply(this,arguments):void 0},teardown:function(){return n.event.remove(this,"._change"),!Y.test(this.nodeName)}}),l.focusinBubbles||n.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){n.event.simulate(b,a.target,n.event.fix(a),!0)};n.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=n._data(d,b);e||d.addEventListener(a,c,!0),n._data(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=n._data(d,b)-1;e?n._data(d,b,e):(d.removeEventListener(a,c,!0),n._removeData(d,b))}}}),n.fn.extend({on:function(a,b,c,d,e){var f,g;if("object"==typeof a){"string"!=typeof b&&(c=c||b,b=void 0);for(f in a)this.on(f,b,c,a[f],e);return this}if(null==c&&null==d?(d=b,c=b=void 0):null==d&&("string"==typeof b?(d=c,c=void 0):(d=c,c=b,b=void 0)),d===!1)d=cb;else if(!d)return this;return 1===e&&(g=d,d=function(a){return n().off(a),g.apply(this,arguments)},d.guid=g.guid||(g.guid=n.guid++)),this.each(function(){n.event.add(this,a,d,c,b)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,n(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return(b===!1||"function"==typeof b)&&(c=b,b=void 0),c===!1&&(c=cb),this.each(function(){n.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){n.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?n.event.trigger(a,b,c,!0):void 0}});function eb(a){var b=fb.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}var fb="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",gb=/ jQuery\d+="(?:null|\d+)"/g,hb=new RegExp("<(?:"+fb+")[\\s/>]","i"),ib=/^\s+/,jb=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,kb=/<([\w:]+)/,lb=/<tbody/i,mb=/<|&#?\w+;/,nb=/<(?:script|style|link)/i,ob=/checked\s*(?:[^=]|=\s*.checked.)/i,pb=/^$|\/(?:java|ecma)script/i,qb=/^true\/(.*)/,rb=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,sb={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:l.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]},tb=eb(z),ub=tb.appendChild(z.createElement("div"));sb.optgroup=sb.option,sb.tbody=sb.tfoot=sb.colgroup=sb.caption=sb.thead,sb.th=sb.td;function vb(a,b){var c,d,e=0,f=typeof a.getElementsByTagName!==L?a.getElementsByTagName(b||"*"):typeof a.querySelectorAll!==L?a.querySelectorAll(b||"*"):void 0;if(!f)for(f=[],c=a.childNodes||a;null!=(d=c[e]);e++)!b||n.nodeName(d,b)?f.push(d):n.merge(f,vb(d,b));return void 0===b||b&&n.nodeName(a,b)?n.merge([a],f):f}function wb(a){X.test(a.type)&&(a.defaultChecked=a.checked)}function xb(a,b){return n.nodeName(a,"table")&&n.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function yb(a){return a.type=(null!==n.find.attr(a,"type"))+"/"+a.type,a}function zb(a){var b=qb.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function Ab(a,b){for(var c,d=0;null!=(c=a[d]);d++)n._data(c,"globalEval",!b||n._data(b[d],"globalEval"))}function Bb(a,b){if(1===b.nodeType&&n.hasData(a)){var c,d,e,f=n._data(a),g=n._data(b,f),h=f.events;if(h){delete g.handle,g.events={};for(c in h)for(d=0,e=h[c].length;e>d;d++)n.event.add(b,c,h[c][d])}g.data&&(g.data=n.extend({},g.data))}}function Cb(a,b){var c,d,e;if(1===b.nodeType){if(c=b.nodeName.toLowerCase(),!l.noCloneEvent&&b[n.expando]){e=n._data(b);for(d in e.events)n.removeEvent(b,d,e.handle);b.removeAttribute(n.expando)}"script"===c&&b.text!==a.text?(yb(b).text=a.text,zb(b)):"object"===c?(b.parentNode&&(b.outerHTML=a.outerHTML),l.html5Clone&&a.innerHTML&&!n.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):"input"===c&&X.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):"option"===c?b.defaultSelected=b.selected=a.defaultSelected:("input"===c||"textarea"===c)&&(b.defaultValue=a.defaultValue)}}n.extend({clone:function(a,b,c){var d,e,f,g,h,i=n.contains(a.ownerDocument,a);if(l.html5Clone||n.isXMLDoc(a)||!hb.test("<"+a.nodeName+">")?f=a.cloneNode(!0):(ub.innerHTML=a.outerHTML,ub.removeChild(f=ub.firstChild)),!(l.noCloneEvent&&l.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||n.isXMLDoc(a)))for(d=vb(f),h=vb(a),g=0;null!=(e=h[g]);++g)d[g]&&Cb(e,d[g]);if(b)if(c)for(h=h||vb(a),d=d||vb(f),g=0;null!=(e=h[g]);g++)Bb(e,d[g]);else Bb(a,f);return d=vb(f,"script"),d.length>0&&Ab(d,!i&&vb(a,"script")),d=h=e=null,f},buildFragment:function(a,b,c,d){for(var e,f,g,h,i,j,k,m=a.length,o=eb(b),p=[],q=0;m>q;q++)if(f=a[q],f||0===f)if("object"===n.type(f))n.merge(p,f.nodeType?[f]:f);else if(mb.test(f)){h=h||o.appendChild(b.createElement("div")),i=(kb.exec(f)||["",""])[1].toLowerCase(),k=sb[i]||sb._default,h.innerHTML=k[1]+f.replace(jb,"<$1></$2>")+k[2],e=k[0];while(e--)h=h.lastChild;if(!l.leadingWhitespace&&ib.test(f)&&p.push(b.createTextNode(ib.exec(f)[0])),!l.tbody){f="table"!==i||lb.test(f)?"<table>"!==k[1]||lb.test(f)?0:h:h.firstChild,e=f&&f.childNodes.length;while(e--)n.nodeName(j=f.childNodes[e],"tbody")&&!j.childNodes.length&&f.removeChild(j)}n.merge(p,h.childNodes),h.textContent="";while(h.firstChild)h.removeChild(h.firstChild);h=o.lastChild}else p.push(b.createTextNode(f));h&&o.removeChild(h),l.appendChecked||n.grep(vb(p,"input"),wb),q=0;while(f=p[q++])if((!d||-1===n.inArray(f,d))&&(g=n.contains(f.ownerDocument,f),h=vb(o.appendChild(f),"script"),g&&Ab(h),c)){e=0;while(f=h[e++])pb.test(f.type||"")&&c.push(f)}return h=null,o},cleanData:function(a,b){for(var d,e,f,g,h=0,i=n.expando,j=n.cache,k=l.deleteExpando,m=n.event.special;null!=(d=a[h]);h++)if((b||n.acceptData(d))&&(f=d[i],g=f&&j[f])){if(g.events)for(e in g.events)m[e]?n.event.remove(d,e):n.removeEvent(d,e,g.handle);j[f]&&(delete j[f],k?delete d[i]:typeof d.removeAttribute!==L?d.removeAttribute(i):d[i]=null,c.push(f))}}}),n.fn.extend({text:function(a){return W(this,function(a){return void 0===a?n.text(this):this.empty().append((this[0]&&this[0].ownerDocument||z).createTextNode(a))},null,a,arguments.length)},append:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=xb(this,a);b.appendChild(a)}})},prepend:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=xb(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},remove:function(a,b){for(var c,d=a?n.filter(a,this):this,e=0;null!=(c=d[e]);e++)b||1!==c.nodeType||n.cleanData(vb(c)),c.parentNode&&(b&&n.contains(c.ownerDocument,c)&&Ab(vb(c,"script")),c.parentNode.removeChild(c));return this},empty:function(){for(var a,b=0;null!=(a=this[b]);b++){1===a.nodeType&&n.cleanData(vb(a,!1));while(a.firstChild)a.removeChild(a.firstChild);a.options&&n.nodeName(a,"select")&&(a.options.length=0)}return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return n.clone(this,a,b)})},html:function(a){return W(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a)return 1===b.nodeType?b.innerHTML.replace(gb,""):void 0;if(!("string"!=typeof a||nb.test(a)||!l.htmlSerialize&&hb.test(a)||!l.leadingWhitespace&&ib.test(a)||sb[(kb.exec(a)||["",""])[1].toLowerCase()])){a=a.replace(jb,"<$1></$2>");try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(n.cleanData(vb(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=arguments[0];return this.domManip(arguments,function(b){a=this.parentNode,n.cleanData(vb(this)),a&&a.replaceChild(b,this)}),a&&(a.length||a.nodeType)?this:this.remove()},detach:function(a){return this.remove(a,!0)},domManip:function(a,b){a=e.apply([],a);var c,d,f,g,h,i,j=0,k=this.length,m=this,o=k-1,p=a[0],q=n.isFunction(p);if(q||k>1&&"string"==typeof p&&!l.checkClone&&ob.test(p))return this.each(function(c){var d=m.eq(c);q&&(a[0]=p.call(this,c,d.html())),d.domManip(a,b)});if(k&&(i=n.buildFragment(a,this[0].ownerDocument,!1,this),c=i.firstChild,1===i.childNodes.length&&(i=c),c)){for(g=n.map(vb(i,"script"),yb),f=g.length;k>j;j++)d=i,j!==o&&(d=n.clone(d,!0,!0),f&&n.merge(g,vb(d,"script"))),b.call(this[j],d,j);if(f)for(h=g[g.length-1].ownerDocument,n.map(g,zb),j=0;f>j;j++)d=g[j],pb.test(d.type||"")&&!n._data(d,"globalEval")&&n.contains(h,d)&&(d.src?n._evalUrl&&n._evalUrl(d.src):n.globalEval((d.text||d.textContent||d.innerHTML||"").replace(rb,"")));i=c=null}return this}}),n.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){n.fn[a]=function(a){for(var c,d=0,e=[],g=n(a),h=g.length-1;h>=d;d++)c=d===h?this:this.clone(!0),n(g[d])[b](c),f.apply(e,c.get());return this.pushStack(e)}});var Db,Eb={};function Fb(b,c){var d=n(c.createElement(b)).appendTo(c.body),e=a.getDefaultComputedStyle?a.getDefaultComputedStyle(d[0]).display:n.css(d[0],"display");return d.detach(),e}function Gb(a){var b=z,c=Eb[a];return c||(c=Fb(a,b),"none"!==c&&c||(Db=(Db||n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=(Db[0].contentWindow||Db[0].contentDocument).document,b.write(),b.close(),c=Fb(a,b),Db.detach()),Eb[a]=c),c}!function(){var a,b,c=z.createElement("div"),d="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0";c.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=c.getElementsByTagName("a")[0],a.style.cssText="float:left;opacity:.5",l.opacity=/^0.5/.test(a.style.opacity),l.cssFloat=!!a.style.cssFloat,c.style.backgroundClip="content-box",c.cloneNode(!0).style.backgroundClip="",l.clearCloneStyle="content-box"===c.style.backgroundClip,a=c=null,l.shrinkWrapBlocks=function(){var a,c,e,f;if(null==b){if(a=z.getElementsByTagName("body")[0],!a)return;f="border:0;width:0;height:0;position:absolute;top:0;left:-9999px",c=z.createElement("div"),e=z.createElement("div"),a.appendChild(c).appendChild(e),b=!1,typeof e.style.zoom!==L&&(e.style.cssText=d+";width:1px;padding:1px;zoom:1",e.innerHTML="<div></div>",e.firstChild.style.width="5px",b=3!==e.offsetWidth),a.removeChild(c),a=c=e=null}return b}}();var Hb=/^margin/,Ib=new RegExp("^("+T+")(?!px)[a-z%]+$","i"),Jb,Kb,Lb=/^(top|right|bottom|left)$/;a.getComputedStyle?(Jb=function(a){return a.ownerDocument.defaultView.getComputedStyle(a,null)},Kb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Jb(a),g=c?c.getPropertyValue(b)||c[b]:void 0,c&&(""!==g||n.contains(a.ownerDocument,a)||(g=n.style(a,b)),Ib.test(g)&&Hb.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f)),void 0===g?g:g+""}):z.documentElement.currentStyle&&(Jb=function(a){return a.currentStyle},Kb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Jb(a),g=c?c[b]:void 0,null==g&&h&&h[b]&&(g=h[b]),Ib.test(g)&&!Lb.test(b)&&(d=h.left,e=a.runtimeStyle,f=e&&e.left,f&&(e.left=a.currentStyle.left),h.left="fontSize"===b?"1em":g,g=h.pixelLeft+"px",h.left=d,f&&(e.left=f)),void 0===g?g:g+""||"auto"});function Mb(a,b){return{get:function(){var c=a();if(null!=c)return c?void delete this.get:(this.get=b).apply(this,arguments)}}}!function(){var b,c,d,e,f,g,h=z.createElement("div"),i="border:0;width:0;height:0;position:absolute;top:0;left:-9999px",j="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0";h.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",b=h.getElementsByTagName("a")[0],b.style.cssText="float:left;opacity:.5",l.opacity=/^0.5/.test(b.style.opacity),l.cssFloat=!!b.style.cssFloat,h.style.backgroundClip="content-box",h.cloneNode(!0).style.backgroundClip="",l.clearCloneStyle="content-box"===h.style.backgroundClip,b=h=null,n.extend(l,{reliableHiddenOffsets:function(){if(null!=c)return c;var a,b,d,e=z.createElement("div"),f=z.getElementsByTagName("body")[0];if(f)return e.setAttribute("className","t"),e.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=z.createElement("div"),a.style.cssText=i,f.appendChild(a).appendChild(e),e.innerHTML="<table><tr><td></td><td>t</td></tr></table>",b=e.getElementsByTagName("td"),b[0].style.cssText="padding:0;margin:0;border:0;display:none",d=0===b[0].offsetHeight,b[0].style.display="",b[1].style.display="none",c=d&&0===b[0].offsetHeight,f.removeChild(a),e=f=null,c},boxSizing:function(){return null==d&&k(),d},boxSizingReliable:function(){return null==e&&k(),e},pixelPosition:function(){return null==f&&k(),f},reliableMarginRight:function(){var b,c,d,e;if(null==g&&a.getComputedStyle){if(b=z.getElementsByTagName("body")[0],!b)return;c=z.createElement("div"),d=z.createElement("div"),c.style.cssText=i,b.appendChild(c).appendChild(d),e=d.appendChild(z.createElement("div")),e.style.cssText=d.style.cssText=j,e.style.marginRight=e.style.width="0",d.style.width="1px",g=!parseFloat((a.getComputedStyle(e,null)||{}).marginRight),b.removeChild(c)}return g}});function k(){var b,c,h=z.getElementsByTagName("body")[0];h&&(b=z.createElement("div"),c=z.createElement("div"),b.style.cssText=i,h.appendChild(b).appendChild(c),c.style.cssText="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;display:block;padding:1px;border:1px;width:4px;margin-top:1%;top:1%",n.swap(h,null!=h.style.zoom?{zoom:1}:{},function(){d=4===c.offsetWidth}),e=!0,f=!1,g=!0,a.getComputedStyle&&(f="1%"!==(a.getComputedStyle(c,null)||{}).top,e="4px"===(a.getComputedStyle(c,null)||{width:"4px"}).width),h.removeChild(b),c=h=null)}}(),n.swap=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e};var Nb=/alpha\([^)]*\)/i,Ob=/opacity\s*=\s*([^)]*)/,Pb=/^(none|table(?!-c[ea]).+)/,Qb=new RegExp("^("+T+")(.*)$","i"),Rb=new RegExp("^([+-])=("+T+")","i"),Sb={position:"absolute",visibility:"hidden",display:"block"},Tb={letterSpacing:0,fontWeight:400},Ub=["Webkit","O","Moz","ms"];function Vb(a,b){if(b in a)return b;var c=b.charAt(0).toUpperCase()+b.slice(1),d=b,e=Ub.length;while(e--)if(b=Ub[e]+c,b in a)return b;return d}function Wb(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=n._data(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&V(d)&&(f[g]=n._data(d,"olddisplay",Gb(d.nodeName)))):f[g]||(e=V(d),(c&&"none"!==c||!e)&&n._data(d,"olddisplay",e?c:n.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}function Xb(a,b,c){var d=Qb.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function Yb(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=n.css(a,c+U[f],!0,e)),d?("content"===c&&(g-=n.css(a,"padding"+U[f],!0,e)),"margin"!==c&&(g-=n.css(a,"border"+U[f]+"Width",!0,e))):(g+=n.css(a,"padding"+U[f],!0,e),"padding"!==c&&(g+=n.css(a,"border"+U[f]+"Width",!0,e)));return g}function Zb(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=Jb(a),g=l.boxSizing()&&"border-box"===n.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=Kb(a,b,f),(0>e||null==e)&&(e=a.style[b]),Ib.test(e))return e;d=g&&(l.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+Yb(a,b,c||(g?"border":"content"),d,f)+"px"}n.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=Kb(a,"opacity");return""===c?"1":c}}}},cssNumber:{columnCount:!0,fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":l.cssFloat?"cssFloat":"styleFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=n.camelCase(b),i=a.style;if(b=n.cssProps[h]||(n.cssProps[h]=Vb(i,h)),g=n.cssHooks[b]||n.cssHooks[h],void 0===c)return g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b];if(f=typeof c,"string"===f&&(e=Rb.exec(c))&&(c=(e[1]+1)*e[2]+parseFloat(n.css(a,b)),f="number"),null!=c&&c===c&&("number"!==f||n.cssNumber[h]||(c+="px"),l.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),!(g&&"set"in g&&void 0===(c=g.set(a,c,d)))))try{i[b]="",i[b]=c}catch(j){}}},css:function(a,b,c,d){var e,f,g,h=n.camelCase(b);return b=n.cssProps[h]||(n.cssProps[h]=Vb(a.style,h)),g=n.cssHooks[b]||n.cssHooks[h],g&&"get"in g&&(f=g.get(a,!0,c)),void 0===f&&(f=Kb(a,b,d)),"normal"===f&&b in Tb&&(f=Tb[b]),""===c||c?(e=parseFloat(f),c===!0||n.isNumeric(e)?e||0:f):f}}),n.each(["height","width"],function(a,b){n.cssHooks[b]={get:function(a,c,d){return c?0===a.offsetWidth&&Pb.test(n.css(a,"display"))?n.swap(a,Sb,function(){return Zb(a,b,d)}):Zb(a,b,d):void 0},set:function(a,c,d){var e=d&&Jb(a);return Xb(a,c,d?Yb(a,b,d,l.boxSizing()&&"border-box"===n.css(a,"boxSizing",!1,e),e):0)}}}),l.opacity||(n.cssHooks.opacity={get:function(a,b){return Ob.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=n.isNumeric(b)?"alpha(opacity="+100*b+")":"",f=d&&d.filter||c.filter||"";c.zoom=1,(b>=1||""===b)&&""===n.trim(f.replace(Nb,""))&&c.removeAttribute&&(c.removeAttribute("filter"),""===b||d&&!d.filter)||(c.filter=Nb.test(f)?f.replace(Nb,e):f+" "+e)}}),n.cssHooks.marginRight=Mb(l.reliableMarginRight,function(a,b){return b?n.swap(a,{display:"inline-block"},Kb,[a,"marginRight"]):void 0}),n.each({margin:"",padding:"",border:"Width"},function(a,b){n.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+U[d]+b]=f[d]||f[d-2]||f[0];return e}},Hb.test(a)||(n.cssHooks[a+b].set=Xb)}),n.fn.extend({css:function(a,b){return W(this,function(a,b,c){var d,e,f={},g=0;if(n.isArray(b)){for(d=Jb(a),e=b.length;e>g;g++)f[b[g]]=n.css(a,b[g],!1,d);return f}return void 0!==c?n.style(a,b,c):n.css(a,b)},a,b,arguments.length>1)},show:function(){return Wb(this,!0)},hide:function(){return Wb(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){V(this)?n(this).show():n(this).hide()})}});function $b(a,b,c,d,e){return new $b.prototype.init(a,b,c,d,e)}n.Tween=$b,$b.prototype={constructor:$b,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(n.cssNumber[c]?"":"px")},cur:function(){var a=$b.propHooks[this.prop];return a&&a.get?a.get(this):$b.propHooks._default.get(this)},run:function(a){var b,c=$b.propHooks[this.prop];return this.pos=b=this.options.duration?n.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):$b.propHooks._default.set(this),this}},$b.prototype.init.prototype=$b.prototype,$b.propHooks={_default:{get:function(a){var b;return null==a.elem[a.prop]||a.elem.style&&null!=a.elem.style[a.prop]?(b=n.css(a.elem,a.prop,""),b&&"auto"!==b?b:0):a.elem[a.prop]},set:function(a){n.fx.step[a.prop]?n.fx.step[a.prop](a):a.elem.style&&(null!=a.elem.style[n.cssProps[a.prop]]||n.cssHooks[a.prop])?n.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},$b.propHooks.scrollTop=$b.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},n.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},n.fx=$b.prototype.init,n.fx.step={};var _b,ac,bc=/^(?:toggle|show|hide)$/,cc=new RegExp("^(?:([+-])=|)("+T+")([a-z%]*)$","i"),dc=/queueHooks$/,ec=[jc],fc={"*":[function(a,b){var c=this.createTween(a,b),d=c.cur(),e=cc.exec(b),f=e&&e[3]||(n.cssNumber[a]?"":"px"),g=(n.cssNumber[a]||"px"!==f&&+d)&&cc.exec(n.css(c.elem,a)),h=1,i=20;if(g&&g[3]!==f){f=f||g[3],e=e||[],g=+d||1;do h=h||".5",g/=h,n.style(c.elem,a,g+f);while(h!==(h=c.cur()/d)&&1!==h&&--i)}return e&&(g=c.start=+g||+d||0,c.unit=f,c.end=e[1]?g+(e[1]+1)*e[2]:+e[2]),c}]};function gc(){return setTimeout(function(){_b=void 0}),_b=n.now()}function hc(a,b){var c,d={height:a},e=0;for(b=b?1:0;4>e;e+=2-b)c=U[e],d["margin"+c]=d["padding"+c]=a;return b&&(d.opacity=d.width=a),d}function ic(a,b,c){for(var d,e=(fc[b]||[]).concat(fc["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function jc(a,b,c){var d,e,f,g,h,i,j,k,m=this,o={},p=a.style,q=a.nodeType&&V(a),r=n._data(a,"fxshow");c.queue||(h=n._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,m.always(function(){m.always(function(){h.unqueued--,n.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[p.overflow,p.overflowX,p.overflowY],j=n.css(a,"display"),k=Gb(a.nodeName),"none"===j&&(j=k),"inline"===j&&"none"===n.css(a,"float")&&(l.inlineBlockNeedsLayout&&"inline"!==k?p.zoom=1:p.display="inline-block")),c.overflow&&(p.overflow="hidden",l.shrinkWrapBlocks()||m.always(function(){p.overflow=c.overflow[0],p.overflowX=c.overflow[1],p.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],bc.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(q?"hide":"show")){if("show"!==e||!r||void 0===r[d])continue;q=!0}o[d]=r&&r[d]||n.style(a,d)}if(!n.isEmptyObject(o)){r?"hidden"in r&&(q=r.hidden):r=n._data(a,"fxshow",{}),f&&(r.hidden=!q),q?n(a).show():m.done(function(){n(a).hide()}),m.done(function(){var b;n._removeData(a,"fxshow");for(b in o)n.style(a,b,o[b])});for(d in o)g=ic(q?r[d]:0,d,m),d in r||(r[d]=g.start,q&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function kc(a,b){var c,d,e,f,g;for(c in a)if(d=n.camelCase(c),e=b[d],f=a[c],n.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=n.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function lc(a,b,c){var d,e,f=0,g=ec.length,h=n.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=_b||gc(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:n.extend({},b),opts:n.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:_b||gc(),duration:c.duration,tweens:[],createTween:function(b,c){var d=n.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;for(kc(k,j.opts.specialEasing);g>f;f++)if(d=ec[f].call(j,a,k,j.opts))return d;return n.map(k,ic,j),n.isFunction(j.opts.start)&&j.opts.start.call(a,j),n.fx.timer(n.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}n.Animation=n.extend(lc,{tweener:function(a,b){n.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");for(var c,d=0,e=a.length;e>d;d++)c=a[d],fc[c]=fc[c]||[],fc[c].unshift(b)},prefilter:function(a,b){b?ec.unshift(a):ec.push(a)}}),n.speed=function(a,b,c){var d=a&&"object"==typeof a?n.extend({},a):{complete:c||!c&&b||n.isFunction(a)&&a,duration:a,easing:c&&b||b&&!n.isFunction(b)&&b};return d.duration=n.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in n.fx.speeds?n.fx.speeds[d.duration]:n.fx.speeds._default,(null==d.queue||d.queue===!0)&&(d.queue="fx"),d.old=d.complete,d.complete=function(){n.isFunction(d.old)&&d.old.call(this),d.queue&&n.dequeue(this,d.queue)},d},n.fn.extend({fadeTo:function(a,b,c,d){return this.filter(V).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=n.isEmptyObject(a),f=n.speed(b,c,d),g=function(){var b=lc(this,n.extend({},a),f);(e||n._data(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=n.timers,g=n._data(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&dc.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));(b||!c)&&n.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=n._data(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=n.timers,g=d?d.length:0;for(c.finish=!0,n.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),n.each(["toggle","show","hide"],function(a,b){var c=n.fn[b];n.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(hc(b,!0),a,d,e)}}),n.each({slideDown:hc("show"),slideUp:hc("hide"),slideToggle:hc("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){n.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),n.timers=[],n.fx.tick=function(){var a,b=n.timers,c=0;for(_b=n.now();c<b.length;c++)a=b[c],a()||b[c]!==a||b.splice(c--,1);b.length||n.fx.stop(),_b=void 0},n.fx.timer=function(a){n.timers.push(a),a()?n.fx.start():n.timers.pop()},n.fx.interval=13,n.fx.start=function(){ac||(ac=setInterval(n.fx.tick,n.fx.interval))},n.fx.stop=function(){clearInterval(ac),ac=null},n.fx.speeds={slow:600,fast:200,_default:400},n.fn.delay=function(a,b){return a=n.fx?n.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},function(){var a,b,c,d,e=z.createElement("div");e.setAttribute("className","t"),e.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=e.getElementsByTagName("a")[0],c=z.createElement("select"),d=c.appendChild(z.createElement("option")),b=e.getElementsByTagName("input")[0],a.style.cssText="top:1px",l.getSetAttribute="t"!==e.className,l.style=/top/.test(a.getAttribute("style")),l.hrefNormalized="/a"===a.getAttribute("href"),l.checkOn=!!b.value,l.optSelected=d.selected,l.enctype=!!z.createElement("form").enctype,c.disabled=!0,l.optDisabled=!d.disabled,b=z.createElement("input"),b.setAttribute("value",""),l.input=""===b.getAttribute("value"),b.value="t",b.setAttribute("type","radio"),l.radioValue="t"===b.value,a=b=c=d=e=null}();var mc=/\r/g;n.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=n.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,n(this).val()):a,null==e?e="":"number"==typeof e?e+="":n.isArray(e)&&(e=n.map(e,function(a){return null==a?"":a+""})),b=n.valHooks[this.type]||n.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=n.valHooks[e.type]||n.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(mc,""):null==c?"":c)}}}),n.extend({valHooks:{option:{get:function(a){var b=n.find.attr(a,"value");return null!=b?b:n.text(a)}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],!(!c.selected&&i!==e||(l.optDisabled?c.disabled:null!==c.getAttribute("disabled"))||c.parentNode.disabled&&n.nodeName(c.parentNode,"optgroup"))){if(b=n(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=n.makeArray(b),g=e.length;while(g--)if(d=e[g],n.inArray(n.valHooks.option.get(d),f)>=0)try{d.selected=c=!0}catch(h){d.scrollHeight}else d.selected=!1;return c||(a.selectedIndex=-1),e}}}}),n.each(["radio","checkbox"],function(){n.valHooks[this]={set:function(a,b){return n.isArray(b)?a.checked=n.inArray(n(a).val(),b)>=0:void 0}},l.checkOn||(n.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})});var nc,oc,pc=n.expr.attrHandle,qc=/^(?:checked|selected)$/i,rc=l.getSetAttribute,sc=l.input;n.fn.extend({attr:function(a,b){return W(this,n.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){n.removeAttr(this,a)})}}),n.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(a&&3!==f&&8!==f&&2!==f)return typeof a.getAttribute===L?n.prop(a,b,c):(1===f&&n.isXMLDoc(a)||(b=b.toLowerCase(),d=n.attrHooks[b]||(n.expr.match.bool.test(b)?oc:nc)),void 0===c?d&&"get"in d&&null!==(e=d.get(a,b))?e:(e=n.find.attr(a,b),null==e?void 0:e):null!==c?d&&"set"in d&&void 0!==(e=d.set(a,c,b))?e:(a.setAttribute(b,c+""),c):void n.removeAttr(a,b))},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(F);if(f&&1===a.nodeType)while(c=f[e++])d=n.propFix[c]||c,n.expr.match.bool.test(c)?sc&&rc||!qc.test(c)?a[d]=!1:a[n.camelCase("default-"+c)]=a[d]=!1:n.attr(a,c,""),a.removeAttribute(rc?c:d)},attrHooks:{type:{set:function(a,b){if(!l.radioValue&&"radio"===b&&n.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}}}),oc={set:function(a,b,c){return b===!1?n.removeAttr(a,c):sc&&rc||!qc.test(c)?a.setAttribute(!rc&&n.propFix[c]||c,c):a[n.camelCase("default-"+c)]=a[c]=!0,c}},n.each(n.expr.match.bool.source.match(/\w+/g),function(a,b){var c=pc[b]||n.find.attr;pc[b]=sc&&rc||!qc.test(b)?function(a,b,d){var e,f;return d||(f=pc[b],pc[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,pc[b]=f),e}:function(a,b,c){return c?void 0:a[n.camelCase("default-"+b)]?b.toLowerCase():null}}),sc&&rc||(n.attrHooks.value={set:function(a,b,c){return n.nodeName(a,"input")?void(a.defaultValue=b):nc&&nc.set(a,b,c)}}),rc||(nc={set:function(a,b,c){var d=a.getAttributeNode(c);return d||a.setAttributeNode(d=a.ownerDocument.createAttribute(c)),d.value=b+="","value"===c||b===a.getAttribute(c)?b:void 0}},pc.id=pc.name=pc.coords=function(a,b,c){var d;return c?void 0:(d=a.getAttributeNode(b))&&""!==d.value?d.value:null},n.valHooks.button={get:function(a,b){var c=a.getAttributeNode(b);return c&&c.specified?c.value:void 0},set:nc.set},n.attrHooks.contenteditable={set:function(a,b,c){nc.set(a,""===b?!1:b,c)}},n.each(["width","height"],function(a,b){n.attrHooks[b]={set:function(a,c){return""===c?(a.setAttribute(b,"auto"),c):void 0}}})),l.style||(n.attrHooks.style={get:function(a){return a.style.cssText||void 0},set:function(a,b){return a.style.cssText=b+""}});var tc=/^(?:input|select|textarea|button|object)$/i,uc=/^(?:a|area)$/i;n.fn.extend({prop:function(a,b){return W(this,n.prop,a,b,arguments.length>1)},removeProp:function(a){return a=n.propFix[a]||a,this.each(function(){try{this[a]=void 0,delete this[a]}catch(b){}})}}),n.extend({propFix:{"for":"htmlFor","class":"className"},prop:function(a,b,c){var d,e,f,g=a.nodeType;if(a&&3!==g&&8!==g&&2!==g)return f=1!==g||!n.isXMLDoc(a),f&&(b=n.propFix[b]||b,e=n.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){var b=n.find.attr(a,"tabindex");return b?parseInt(b,10):tc.test(a.nodeName)||uc.test(a.nodeName)&&a.href?0:-1}}}}),l.hrefNormalized||n.each(["href","src"],function(a,b){n.propHooks[b]={get:function(a){return a.getAttribute(b,4)}}}),l.optSelected||(n.propHooks.selected={get:function(a){var b=a.parentNode;return b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex),null}}),n.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){n.propFix[this.toLowerCase()]=this}),l.enctype||(n.propFix.enctype="encoding");var vc=/[\t\r\n\f]/g;n.fn.extend({addClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j="string"==typeof a&&a;if(n.isFunction(a))return this.each(function(b){n(this).addClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(F)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(vc," "):" ")){f=0;while(e=b[f++])d.indexOf(" "+e+" ")<0&&(d+=e+" ");g=n.trim(d),c.className!==g&&(c.className=g)}return this},removeClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j=0===arguments.length||"string"==typeof a&&a;if(n.isFunction(a))return this.each(function(b){n(this).removeClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(F)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(vc," "):"")){f=0;while(e=b[f++])while(d.indexOf(" "+e+" ")>=0)d=d.replace(" "+e+" "," ");g=a?n.trim(d):"",c.className!==g&&(c.className=g)}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):this.each(n.isFunction(a)?function(c){n(this).toggleClass(a.call(this,c,this.className,b),b)}:function(){if("string"===c){var b,d=0,e=n(this),f=a.match(F)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else(c===L||"boolean"===c)&&(this.className&&n._data(this,"__className__",this.className),this.className=this.className||a===!1?"":n._data(this,"__className__")||"")})},hasClass:function(a){for(var b=" "+a+" ",c=0,d=this.length;d>c;c++)if(1===this[c].nodeType&&(" "+this[c].className+" ").replace(vc," ").indexOf(b)>=0)return!0;return!1}}),n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){n.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),n.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}});var wc=n.now(),xc=/\?/,yc=/(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;n.parseJSON=function(b){if(a.JSON&&a.JSON.parse)return a.JSON.parse(b+"");var c,d=null,e=n.trim(b+"");return e&&!n.trim(e.replace(yc,function(a,b,e,f){return c&&b&&(d=0),0===d?a:(c=e||b,d+=!f-!e,"")}))?Function("return "+e)():n.error("Invalid JSON: "+b)},n.parseXML=function(b){var c,d;if(!b||"string"!=typeof b)return null;try{a.DOMParser?(d=new DOMParser,c=d.parseFromString(b,"text/xml")):(c=new ActiveXObject("Microsoft.XMLDOM"),c.async="false",c.loadXML(b))}catch(e){c=void 0}return c&&c.documentElement&&!c.getElementsByTagName("parsererror").length||n.error("Invalid XML: "+b),c};var zc,Ac,Bc=/#.*$/,Cc=/([?&])_=[^&]*/,Dc=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Ec=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Fc=/^(?:GET|HEAD)$/,Gc=/^\/\//,Hc=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,Ic={},Jc={},Kc="*/".concat("*");try{Ac=location.href}catch(Lc){Ac=z.createElement("a"),Ac.href="",Ac=Ac.href}zc=Hc.exec(Ac.toLowerCase())||[];function Mc(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(F)||[];if(n.isFunction(c))while(d=f[e++])"+"===d.charAt(0)?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function Nc(a,b,c,d){var e={},f=a===Jc;function g(h){var i;return e[h]=!0,n.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function Oc(a,b){var c,d,e=n.ajaxSettings.flatOptions||{};for(d in b)void 0!==b[d]&&((e[d]?a:c||(c={}))[d]=b[d]);return c&&n.extend(!0,a,c),a}function Pc(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===e&&(e=a.mimeType||b.getResponseHeader("Content-Type"));if(e)for(g in h)if(h[g]&&h[g].test(e)){i.unshift(g);break}if(i[0]in c)f=i[0];else{for(g in c){if(!i[0]||a.converters[g+" "+i[0]]){f=g;break}d||(d=g)}f=f||d}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function Qc(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}n.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Ac,type:"GET",isLocal:Ec.test(zc[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Kc,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":n.parseJSON,"text xml":n.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?Oc(Oc(a,n.ajaxSettings),b):Oc(n.ajaxSettings,a)},ajaxPrefilter:Mc(Ic),ajaxTransport:Mc(Jc),ajax:function(a,b){"object"==typeof a&&(b=a,a=void 0),b=b||{};var c,d,e,f,g,h,i,j,k=n.ajaxSetup({},b),l=k.context||k,m=k.context&&(l.nodeType||l.jquery)?n(l):n.event,o=n.Deferred(),p=n.Callbacks("once memory"),q=k.statusCode||{},r={},s={},t=0,u="canceled",v={readyState:0,getResponseHeader:function(a){var b;if(2===t){if(!j){j={};while(b=Dc.exec(f))j[b[1].toLowerCase()]=b[2]}b=j[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===t?f:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return t||(a=s[c]=s[c]||a,r[a]=b),this},overrideMimeType:function(a){return t||(k.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>t)for(b in a)q[b]=[q[b],a[b]];else v.always(a[v.status]);return this},abort:function(a){var b=a||u;return i&&i.abort(b),x(0,b),this}};if(o.promise(v).complete=p.add,v.success=v.done,v.error=v.fail,k.url=((a||k.url||Ac)+"").replace(Bc,"").replace(Gc,zc[1]+"//"),k.type=b.method||b.type||k.method||k.type,k.dataTypes=n.trim(k.dataType||"*").toLowerCase().match(F)||[""],null==k.crossDomain&&(c=Hc.exec(k.url.toLowerCase()),k.crossDomain=!(!c||c[1]===zc[1]&&c[2]===zc[2]&&(c[3]||("http:"===c[1]?"80":"443"))===(zc[3]||("http:"===zc[1]?"80":"443")))),k.data&&k.processData&&"string"!=typeof k.data&&(k.data=n.param(k.data,k.traditional)),Nc(Ic,k,b,v),2===t)return v;h=k.global,h&&0===n.active++&&n.event.trigger("ajaxStart"),k.type=k.type.toUpperCase(),k.hasContent=!Fc.test(k.type),e=k.url,k.hasContent||(k.data&&(e=k.url+=(xc.test(e)?"&":"?")+k.data,delete k.data),k.cache===!1&&(k.url=Cc.test(e)?e.replace(Cc,"$1_="+wc++):e+(xc.test(e)?"&":"?")+"_="+wc++)),k.ifModified&&(n.lastModified[e]&&v.setRequestHeader("If-Modified-Since",n.lastModified[e]),n.etag[e]&&v.setRequestHeader("If-None-Match",n.etag[e])),(k.data&&k.hasContent&&k.contentType!==!1||b.contentType)&&v.setRequestHeader("Content-Type",k.contentType),v.setRequestHeader("Accept",k.dataTypes[0]&&k.accepts[k.dataTypes[0]]?k.accepts[k.dataTypes[0]]+("*"!==k.dataTypes[0]?", "+Kc+"; q=0.01":""):k.accepts["*"]);for(d in k.headers)v.setRequestHeader(d,k.headers[d]);if(k.beforeSend&&(k.beforeSend.call(l,v,k)===!1||2===t))return v.abort();u="abort";for(d in{success:1,error:1,complete:1})v[d](k[d]);if(i=Nc(Jc,k,b,v)){v.readyState=1,h&&m.trigger("ajaxSend",[v,k]),k.async&&k.timeout>0&&(g=setTimeout(function(){v.abort("timeout")},k.timeout));try{t=1,i.send(r,x)}catch(w){if(!(2>t))throw w;x(-1,w)}}else x(-1,"No Transport");function x(a,b,c,d){var j,r,s,u,w,x=b;2!==t&&(t=2,g&&clearTimeout(g),i=void 0,f=d||"",v.readyState=a>0?4:0,j=a>=200&&300>a||304===a,c&&(u=Pc(k,v,c)),u=Qc(k,u,v,j),j?(k.ifModified&&(w=v.getResponseHeader("Last-Modified"),w&&(n.lastModified[e]=w),w=v.getResponseHeader("etag"),w&&(n.etag[e]=w)),204===a||"HEAD"===k.type?x="nocontent":304===a?x="notmodified":(x=u.state,r=u.data,s=u.error,j=!s)):(s=x,(a||!x)&&(x="error",0>a&&(a=0))),v.status=a,v.statusText=(b||x)+"",j?o.resolveWith(l,[r,x,v]):o.rejectWith(l,[v,x,s]),v.statusCode(q),q=void 0,h&&m.trigger(j?"ajaxSuccess":"ajaxError",[v,k,j?r:s]),p.fireWith(l,[v,x]),h&&(m.trigger("ajaxComplete",[v,k]),--n.active||n.event.trigger("ajaxStop")))}return v},getJSON:function(a,b,c){return n.get(a,b,c,"json")},getScript:function(a,b){return n.get(a,void 0,b,"script")}}),n.each(["get","post"],function(a,b){n[b]=function(a,c,d,e){return n.isFunction(c)&&(e=e||d,d=c,c=void 0),n.ajax({url:a,type:b,dataType:e,data:c,success:d})}}),n.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){n.fn[b]=function(a){return this.on(b,a)}}),n._evalUrl=function(a){return n.ajax({url:a,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})},n.fn.extend({wrapAll:function(a){if(n.isFunction(a))return this.each(function(b){n(this).wrapAll(a.call(this,b))});if(this[0]){var b=n(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&1===a.firstChild.nodeType)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return this.each(n.isFunction(a)?function(b){n(this).wrapInner(a.call(this,b))}:function(){var b=n(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=n.isFunction(a);return this.each(function(c){n(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){n.nodeName(this,"body")||n(this).replaceWith(this.childNodes)}).end()}}),n.expr.filters.hidden=function(a){return a.offsetWidth<=0&&a.offsetHeight<=0||!l.reliableHiddenOffsets()&&"none"===(a.style&&a.style.display||n.css(a,"display"))},n.expr.filters.visible=function(a){return!n.expr.filters.hidden(a)};var Rc=/%20/g,Sc=/\[\]$/,Tc=/\r?\n/g,Uc=/^(?:submit|button|image|reset|file)$/i,Vc=/^(?:input|select|textarea|keygen)/i;function Wc(a,b,c,d){var e;if(n.isArray(b))n.each(b,function(b,e){c||Sc.test(a)?d(a,e):Wc(a+"["+("object"==typeof e?b:"")+"]",e,c,d)});else if(c||"object"!==n.type(b))d(a,b);else for(e in b)Wc(a+"["+e+"]",b[e],c,d)}n.param=function(a,b){var c,d=[],e=function(a,b){b=n.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=n.ajaxSettings&&n.ajaxSettings.traditional),n.isArray(a)||a.jquery&&!n.isPlainObject(a))n.each(a,function(){e(this.name,this.value)});else for(c in a)Wc(c,a[c],b,e);return d.join("&").replace(Rc,"+")},n.fn.extend({serialize:function(){return n.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=n.prop(this,"elements");return a?n.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!n(this).is(":disabled")&&Vc.test(this.nodeName)&&!Uc.test(a)&&(this.checked||!X.test(a))}).map(function(a,b){var c=n(this).val();return null==c?null:n.isArray(c)?n.map(c,function(a){return{name:b.name,value:a.replace(Tc,"\r\n")}}):{name:b.name,value:c.replace(Tc,"\r\n")}}).get()}}),n.ajaxSettings.xhr=void 0!==a.ActiveXObject?function(){return!this.isLocal&&/^(get|post|head|put|delete|options)$/i.test(this.type)&&$c()||_c()}:$c;var Xc=0,Yc={},Zc=n.ajaxSettings.xhr();a.ActiveXObject&&n(a).on("unload",function(){for(var a in Yc)Yc[a](void 0,!0)}),l.cors=!!Zc&&"withCredentials"in Zc,Zc=l.ajax=!!Zc,Zc&&n.ajaxTransport(function(a){if(!a.crossDomain||l.cors){var b;return{send:function(c,d){var e,f=a.xhr(),g=++Xc;if(f.open(a.type,a.url,a.async,a.username,a.password),a.xhrFields)for(e in a.xhrFields)f[e]=a.xhrFields[e];a.mimeType&&f.overrideMimeType&&f.overrideMimeType(a.mimeType),a.crossDomain||c["X-Requested-With"]||(c["X-Requested-With"]="XMLHttpRequest");for(e in c)void 0!==c[e]&&f.setRequestHeader(e,c[e]+"");f.send(a.hasContent&&a.data||null),b=function(c,e){var h,i,j;if(b&&(e||4===f.readyState))if(delete Yc[g],b=void 0,f.onreadystatechange=n.noop,e)4!==f.readyState&&f.abort();else{j={},h=f.status,"string"==typeof f.responseText&&(j.text=f.responseText);try{i=f.statusText}catch(k){i=""}h||!a.isLocal||a.crossDomain?1223===h&&(h=204):h=j.text?200:404}j&&d(h,i,j,f.getAllResponseHeaders())},a.async?4===f.readyState?setTimeout(b):f.onreadystatechange=Yc[g]=b:b()},abort:function(){b&&b(void 0,!0)}}}});function $c(){try{return new a.XMLHttpRequest}catch(b){}}function _c(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}n.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(a){return n.globalEval(a),a}}}),n.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),n.ajaxTransport("script",function(a){if(a.crossDomain){var b,c=z.head||n("head")[0]||z.documentElement;return{send:function(d,e){b=z.createElement("script"),b.async=!0,a.scriptCharset&&(b.charset=a.scriptCharset),b.src=a.url,b.onload=b.onreadystatechange=function(a,c){(c||!b.readyState||/loaded|complete/.test(b.readyState))&&(b.onload=b.onreadystatechange=null,b.parentNode&&b.parentNode.removeChild(b),b=null,c||e(200,"success"))},c.insertBefore(b,c.firstChild)},abort:function(){b&&b.onload(void 0,!0)}}}});var ad=[],bd=/(=)\?(?=&|$)|\?\?/;n.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=ad.pop()||n.expando+"_"+wc++;return this[a]=!0,a}}),n.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(bd.test(b.url)?"url":"string"==typeof b.data&&!(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&bd.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=n.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(bd,"$1"+e):b.jsonp!==!1&&(b.url+=(xc.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||n.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,ad.push(e)),g&&n.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),n.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||z;var d=v.exec(a),e=!c&&[];return d?[b.createElement(d[1])]:(d=n.buildFragment([a],b,e),e&&e.length&&n(e).remove(),n.merge([],d.childNodes))};var cd=n.fn.load;n.fn.load=function(a,b,c){if("string"!=typeof a&&cd)return cd.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>=0&&(d=a.slice(h,a.length),a=a.slice(0,h)),n.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(f="POST"),g.length>0&&n.ajax({url:a,type:f,dataType:"html",data:b}).done(function(a){e=arguments,g.html(d?n("<div>").append(n.parseHTML(a)).find(d):a)}).complete(c&&function(a,b){g.each(c,e||[a.responseText,b,a])}),this},n.expr.filters.animated=function(a){return n.grep(n.timers,function(b){return a===b.elem}).length};var dd=a.document.documentElement;function ed(a){return n.isWindow(a)?a:9===a.nodeType?a.defaultView||a.parentWindow:!1}n.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=n.css(a,"position"),l=n(a),m={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=n.css(a,"top"),i=n.css(a,"left"),j=("absolute"===k||"fixed"===k)&&n.inArray("auto",[f,i])>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),n.isFunction(b)&&(b=b.call(a,c,h)),null!=b.top&&(m.top=b.top-h.top+g),null!=b.left&&(m.left=b.left-h.left+e),"using"in b?b.using.call(a,m):l.css(m)}},n.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){n.offset.setOffset(this,a,b)});var b,c,d={top:0,left:0},e=this[0],f=e&&e.ownerDocument;if(f)return b=f.documentElement,n.contains(b,e)?(typeof e.getBoundingClientRect!==L&&(d=e.getBoundingClientRect()),c=ed(f),{top:d.top+(c.pageYOffset||b.scrollTop)-(b.clientTop||0),left:d.left+(c.pageXOffset||b.scrollLeft)-(b.clientLeft||0)}):d},position:function(){if(this[0]){var a,b,c={top:0,left:0},d=this[0];return"fixed"===n.css(d,"position")?b=d.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),n.nodeName(a[0],"html")||(c=a.offset()),c.top+=n.css(a[0],"borderTopWidth",!0),c.left+=n.css(a[0],"borderLeftWidth",!0)),{top:b.top-c.top-n.css(d,"marginTop",!0),left:b.left-c.left-n.css(d,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||dd;while(a&&!n.nodeName(a,"html")&&"static"===n.css(a,"position"))a=a.offsetParent;return a||dd})}}),n.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,b){var c=/Y/.test(b);n.fn[a]=function(d){return W(this,function(a,d,e){var f=ed(a);return void 0===e?f?b in f?f[b]:f.document.documentElement[d]:a[d]:void(f?f.scrollTo(c?n(f).scrollLeft():e,c?e:n(f).scrollTop()):a[d]=e)},a,d,arguments.length,null)}}),n.each(["top","left"],function(a,b){n.cssHooks[b]=Mb(l.pixelPosition,function(a,c){return c?(c=Kb(a,b),Ib.test(c)?n(a).position()[b]+"px":c):void 0})}),n.each({Height:"height",Width:"width"},function(a,b){n.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){n.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return W(this,function(b,c,d){var e;return n.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?n.css(b,c,g):n.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),n.fn.size=function(){return this.length},n.fn.andSelf=n.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return n});var fd=a.jQuery,gd=a.$;return n.noConflict=function(b){return a.$===n&&(a.$=gd),b&&a.jQuery===n&&(a.jQuery=fd),n},typeof b===L&&(a.jQuery=a.$=n),n});
</script>
<script>
	var formatMoney = '{{amount}}₫';
	var template = "product";
	let productjson = {"available":true,"compare_at_price_max":259000000.0,"compare_at_price_min":259000000.0,"compare_at_price_varies":false,"compare_at_price":259000000.0,"content":null,"description":"<p style=\"text-align: center;\"><span style=\"font-size:22px\">Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm</span></p><h2 style=\"text-align: center;\"><span style=\"font-size:18px\"><strong>1. THÔNG SỐ KỸ THUẬT</strong></span></h2><p style=\"text-align: center;\"><img alt=\"Kích thước Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm\" src=\"//file.hstatic.net/200000065946/file/noi-that-moho-kich-thuoc-ghe-don_9a7bbd972cfb433bb0cd94fb70694e78.jpg\"></p><p style=\"text-align: center;\">&nbsp;</p><h2 style=\"text-align: center;\"><span style=\"font-size:18px\"><strong>2. CHI TIẾT VẬT LIỆU</strong></span></h2><p><strong>Vải Polyester</strong></p><p>Ghế Sofa đơn VLINE sử dụng vải bọc polyester&nbsp;giúp&nbsp;chống nhăn, kháng bụi bẩn và nấm mốc, dễ dàng vệ sinh. Ghế có màu xám đậm nâng tầm thẩm mỹ và không gian nội thất phòng khách nhà bạn.</p><p><strong>Gỗ cao su tự nhiên</strong></p><p>Nội Thất MOHO sử dụng chất liệu&nbsp;<u><strong><a target=\"_blank\" href=\"https://moho.com.vn/blogs/noi-that-ung-dung/tim-hieu-ve-cac-loai-go-tu-nhien-thong-dung\">gỗ cao su</a></strong></u>&nbsp;giúp ghế sofa gỗ VLINE có khả năng chịu lực tốt và độ bền cao.</p><p style=\"text-align: center;\"><img alt=\"Ghế sofa gỗ VLINE nệm xám đậm gỗ cao su và vải bọc\" src=\"https://file.hstatic.net/200000065946/file/noi-that-moho-go-cao-su-tu-nhien-vai-boc-polyester_f989d4abc5e048988bbe985f3c343465.jpg\"></p><p><img alt=\"Mắt gỗ và vân gỗ tự nhiên\" src=\"https://file.hstatic.net/200000065946/file/noi-that-moho-van-go-tu-nhien_3883f71c3edf44d19cad4f577a48e512.jpg\"><em>* Một số sản phẩm sử dụng gỗ tự nhiên có thể xuất hiện mắt gỗ ngẫu nhiên và vân gỗ trên bề mặt mỗi sản phẩm sẽ khác nhau – điều này là hoàn toàn tự nhiên, tạo nên sự độc đáo riêng cho từng sản phẩm. Vì vậy MOHO sẽ không áp dụng các chính sách đổi trả, bảo hành và bảo trì cho các trường hợp này.</em></p><p style=\"text-align: center;\">&nbsp;</p><h2 style=\"text-align: center;\"><span style=\"font-size:18px\"><strong>3. ĐẶC ĐIỂM NỔI BẬT</strong></span></h2><p>Các thiết kế&nbsp;trong&nbsp;<strong><u><a target=\"_blank\" href=\"https://moho.com.vn/collections/vline-collection\">bộ sưu tập nội thất</a></u>&nbsp;VLINE</strong>&nbsp;mang trong mình nét đẹp đặc trưng của hồn Việt cùng vẻ đẹp năng động của thời đại. V” là viết tắt của từ “Việt” trong “Việt Nam”.&nbsp;“LINE” là các đường nét mang xu hướng hiện đại, phóng khoáng của ngày nay.&nbsp;</p><h3><span style=\"font-size:15px\"><strong>Ghế sofa đơn&nbsp;có thể kết hợp đa dạng phong cách</strong></span></h3><p>Ghế đơn có&nbsp;thiết kế tối giản, dễ dàng kết hợp với ghế sofa VLINE&nbsp;thông thường và sofa góc để tạo thành một bộ sản phẩm hoàn chỉnh cho nội thất phòng khách nhà bạn thêm hoàn thiện, nâng tầm không gian sống nhà bạn.</p><p style=\"text-align: center;\"><img alt=\"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm Nâu đẹp\" src=\"//file.hstatic.net/200000065946/file/noi-that-moho-combo-ghe-sofa-vline-nau-2_df6e7b095cb64b67a1bb9cdaceb721e2.jpg\"></p><p style=\"text-align: center;\">&nbsp;</p><h3><span style=\"font-size:15px\"><strong>Chất vải dễ dàng vệ sinh</strong></span></h3><p>Nệm sofa bằng vải polyester chống bụi, kháng nấm mốc và có thể dễ dàng&nbsp;tháo bọc nệm để vệ sinh. Đệm ghế sofa màu xám đậm tạo nên vẻ đẹp hiện đại.</p><p style=\"text-align: center;\"><img alt=\"Ghế sofa gỗ VLINE nệm xám đậm làm từ vải sợi tổng hợp\" src=\"https://file.hstatic.net/200000065946/file/nem-vai-boc-soi-tong-hop-de-dang-ve-sinh_944e49469e0649ee986a5b424df877b3.jpg\"></p><p style=\"text-align: center;\">&nbsp;</p><h3><span style=\"font-size:15px\"><strong>Ghế Sofa đơn có kích thước tiêu chuẩn</strong></span></h3><p>Ghế đôn có kích thước rộng&nbsp;rãi,&nbsp;với thiết kế tinh giản giúp chúng gọn nhẹ trong&nbsp;diện tích hẹp&nbsp;cho không gian&nbsp;<u><a target=\"_blank\" href=\"https://moho.com.vn/collections/phong-khach\"><strong>nội thất phòng khách</strong></a></u>, bạn có thể ngồi một cách thoải mái và bài trí trong nhiều không gian khác nhau.</p><p style=\"text-align: center;\"><img alt=\"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm Kích Thước Tiêu Chuẩn\" src=\"//file.hstatic.net/200000065946/file/noi-that-moho-combo-ghe-sofa-vline-nau-kich-thuoc-tieu-chuan_188ed9db3c7d4ef9a2a01b46bdfbc36f.jpg\"></p><p style=\"text-align: center;\">&nbsp;</p><h3><span style=\"font-size:15px\"><strong>Khóa dán chống trượt</strong></span></h3><p>Bên dưới ghế có&nbsp;khóa dán cố định nệm, đảm bảo bạn không còn lo lắng về nệm trượt ra khỏi&nbsp;<u><a target=\"_blank\" href=\"https://moho.com.vn/products/ghe-sofa-go-tram-moho-vline-601\"><strong>ghế sofa</strong></a></u>&nbsp;mỗi khi ngồi.</p><p style=\"text-align: center;\"><img alt=\"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm Khóa Dán Chống Trượt\" src=\"//file.hstatic.net/200000065946/file/noi-that-moho-combo-ghe-sofa-vline-nau-khoa-dan-chong-truot_601d6e45baf54446bd94b5dac3ae7e01.jpg\"></p><p style=\"text-align: center;\">&nbsp;</p><h3><span style=\"font-size:15px\"><strong>Mút nệm cao cấp, dày dặn và chống cháy</strong></span></h3><p>Độ bền cao, chống xẹp lún và đạt tiêu chuẩn của Mỹ về khả năng chống cháy.&nbsp;</p><p style=\"text-align: center;\"><img alt=\"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm Vải Polyeste\" src=\"//file.hstatic.net/200000065946/file/noi-that-moho-combo-ghe-sofa-vline-mau-tu-nhien-vai-polyeste_42483d2a05d5410983effb2940adca7f.jpg\"></p><p style=\"text-align: center;\">&nbsp;</p><h3><span style=\"font-size:15px\"><strong>Độ cao chân ghế vừa phải</strong></span></h3><p>Chân ghế có chiều cao hợp lý nên Robot hút bụi có thể lau dọn dưới sàn ghế&nbsp;một cách dễ dàng.</p><h3><span style=\"font-size:15px\"><strong>Chân ghế cao su</strong></span></h3><p>Sử dụng chất liệu&nbsp;<u><strong><a target=\"_blank\" href=\"https://moho.com.vn/blogs/noi-that-ung-dung/tim-hieu-ve-cac-loai-go-tu-nhien-thong-dung\">gỗ cao su</a></strong></u>&nbsp;tự nhiên với khả năng chịu lực cao.</p><p style=\"text-align: center;\"><img alt=\"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm Chân Ghế gỗ cao su\" src=\"//file.hstatic.net/200000065946/file/noi-that-moho-combo-ghe-sofa-vline-nau-chan-ghe-go-cao-su_43ea0527edb4462b8b3fbc2c4a67a030.jpg\"></p><p style=\"text-align: center;\">&nbsp;</p><h3><span style=\"font-size:15px\"><strong>Có 02 màu sắc lựa chọn</strong></span></h3><p>Màu tự nhiên</p><p>Màu nâu</p><p style=\"text-align: center;\"><img alt=\"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm có 2 màu\" src=\"//file.hstatic.net/200000065946/file/noi-that-moho-combo-ghe-sofa-vline-co-2-mau_96c02260960d4aa2a2644d18e5d18d96.jpg\"></p><h2 style=\"text-align: center;\">&nbsp;</h2><h2 style=\"text-align: center;\"><span style=\"font-size:18px\"><strong>4. KHÔNG GIAN SỐNG</strong></span></h2><p>Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601&nbsp;sở hữu thiết kế hiện đại nhưng vẫn mang chút dáng dấp Việt xưa, mang đến không gian&nbsp;<a target=\"_blank\" href=\"https://moho.com.vn/\">nội thất</a>&nbsp;phòng khách một màu sắc rất riêng, khó pha lẫn. Khi kết hợp cùng ghế sofa băng và ghế sofa góc, đây sẽ là bộ ghế sofa phòng khách cần thiết cho ngôi nhà của bạn.</p><p style=\"text-align: center;\"><img alt=\"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm màu tự nhiên\" src=\"//file.hstatic.net/200000065946/file/noi-that-moho-combo-ghe-sofa-vline-mau-tu-nhien_ba1ecedfaeeb4057911a74de6f9a1faa.jpg\"></p><p style=\"text-align: center;\"><img alt=\"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm màu xám đậm\" src=\"//file.hstatic.net/200000065946/file/noi-that-moho-combo-ghe-sofa-vline-nau_3c551d79c78f427a99a0d5102432ed32.jpg\"></p><div class=\"youtube-embed-wrapper\" style=\"position: relative; padding-bottom: 56.25%; height: 0px;\"><iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/HDyeOomZ0wo\" frameborder=\"0\" style=\"aspect-ratio: 16 / 9; width: 100%; height: 100%; position: absolute;\" class=\"iframe-youtube-embed\"></iframe></div>","featured_image":"https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_7_8a021c23d0694a51af7dd58a1d870c8f.jpg","handle":"ghe-don-sofa-go-cao-su-tu-nhien-moho-vline-601-mau-xam-dam","id":1041829479,"images":["https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_7_8a021c23d0694a51af7dd58a1d870c8f.jpg","https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_6_8576f26cee4642aeb4bda6fe113f721c.jpg","https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_2_0fc60aae02244bccaf0013875f3530db.jpg","https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_1_619626a0cab1476a933f281d3de92b9d.jpg","https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_3_8b3be0fbc03c471a85b2d91eee327917.jpg","https://product.hstatic.net/200000065946/product/mau_tu_nhien_ghe_don_sofa_vline_1pro_mau_tu_nhien_ghe_don_sofa_vline_5_ab6f586872b94f9593403e2602bb1342.jpg","https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_4_9d7b3d8af2464c45bfdf5abf4cf847c6.jpg","https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_6_30994d0052734d64b6cc05744934231e.jpg","https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_7_e059afd3419943ea8baeabeefa35a6e4.jpg","https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_1_9351e9bfa5cb48f39e6485e639c0bfb9.jpg","https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_2_ad65192f7bbc4cf28d4b376738efeaed.jpg","https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_3_2aff5c49b28145e98efa87b573f609b6.jpg","https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_5_81999692610a419f9b577de9bfe0ce70.jpg","https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_4_ccccce19e8ae4c9da0b50fd8dfa24629.jpg"],"options":["Màu sắc"],"price":199000000.0,"price_max":199000000.0,"price_min":199000000.0,"price_varies":false,"tags":["page","Key_Nội Thất MOHO; sofa","video_HDyeOomZ0wo","sofa","ghế sofa","sofa gỗ cao cấp","đồ gỗ nội thất","bộ ghế sofa gỗ","sofa đẹp","sofa gỗ","active1","active2","KM THƯỜNG T10"],"template_suffix":null,"title":"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm","type":"Phòng Khách","url":"/products/ghe-don-sofa-go-cao-su-tu-nhien-moho-vline-601-mau-xam-dam","pagetitle":"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm","metadescription":"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm với chất liệu vải mới chống cháy, chống thấm dầu và nước. Cực đẹp cho nội thất phòng khách.","variants":[{"id":1091287950,"barcode":"MFSSCB801.B06","available":true,"price":199000000.0,"sku":"MFSSCB801.B06","option1":"Nâu","option2":"","option3":"","options":["Nâu"],"inventory_quantity":18.0,"old_inventory_quantity":18.0,"title":"Nâu","weight":0.0,"compare_at_price":259000000.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1387727432,"created_at":"0001-01-01T00:00:00","position":9,"product_id":1041829479,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_7_e059afd3419943ea8baeabeefa35a6e4.jpg","variant_ids":[1091287950]}},{"id":1091287949,"barcode":"MFSSCB801.N06","available":true,"price":199000000.0,"sku":"MFSSCB801.N06","option1":"Màu Tự Nhiên","option2":"","option3":"","options":["Màu Tự Nhiên"],"inventory_quantity":20.0,"old_inventory_quantity":18.0,"title":"Màu Tự Nhiên","weight":0.0,"compare_at_price":259000000.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1387727385,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1041829479,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_7_8a021c23d0694a51af7dd58a1d870c8f.jpg","variant_ids":[1091287949]}}],"vendor":"Ghế Sofa","published_at":"2024-10-17T11:01:38.105Z","created_at":"2022-09-16T06:39:26.695Z","not_allow_promotion":false}
</script>

<script defer fetchpriority="low" src="//theme.hstatic.net/200000065946/1001264503/14/js.cookie.js?v=482"></script>
<script defer fetchpriority="low" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script defer fetchpriority="low" src="//hstatic.net/0/0/global/option_selection.js"></script>
<script defer fetchpriority="low" src="//hstatic.net/0/0/global/api.jquery.js"></script>
<script defer fetchpriority="low" src="//theme.hstatic.net/200000065946/1001264503/14/app-combo.js?v=482"></script>
<script defer fetchpriority="low" src="//theme.hstatic.net/200000065946/1001264503/14/scripts.js?v=482"></script>
<script defer fetchpriority="low" src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
<script defer src="https://anhnoi-haravan.s3-ap-southeast-1.amazonaws.com/static/js/mainScript.js"></script>



		<meta property="og:type" content="product" />
<meta property="og:title" content="Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm" />
<meta property="og:image" content="http://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_7_8a021c23d0694a51af7dd58a1d870c8f_grande.jpg" />
<meta property="og:image:secure_url" content="https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_7_8a021c23d0694a51af7dd58a1d870c8f_grande.jpg" />
<meta property="og:price:amount" content="1990000" />
<meta property="og:price:currency" content="VND" />
<meta property="og:description" content="Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm với chất liệu vải mới chống cháy, chống thấm dầu và nước. Cực đẹp cho nội thất phòng khách." />
<meta property="og:url" content="https://moho.com.vn/products/ghe-don-sofa-go-cao-su-tu-nhien-moho-vline-601-mau-xam-dam" />
<meta property="og:site_name" content="Nội Thất MOHO" />





		<!-- SEO META DESCRIPTION -->
<!-- END SEO META DESCRIPTION -->
<!-- SEO PAGI -->
<!-- END SEO PAGI -->
		<script type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","name":"moho.com.vn","url":"https://moho.com.vn","potentialAction":{"@type":"SearchAction","target":"https://moho.com.vn/search?&q={search_term_string}","query-input":"required name=search_term_string"},"sameAs":["https://www.youtube.com/channel/UChrgCVzBmKda-7Q8MYFnSeg","https://www.instagram.com/mohofurniture/","https://www.tiktok.com/@mohofurniture?_t=8W2zCGU9lLN&_r=1"]}</script>
		<script type="text/javascript">var _0x531f=["\x75\x73\x65\x72\x41\x67\x65\x6E\x74\x44\x61\x74\x61","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x62\x72\x61\x6E\x64\x73","\x62\x72\x61\x6E\x64","\x4C\x69\x67\x68\x74\x68\x6F\x75\x73\x65","\x66\x69\x6E\x64"];var _0x2366=[_0x531f[0],_0x531f[1],_0x531f[2],_0x531f[3],_0x531f[4],_0x531f[5]];var _0x94e8=[_0x2366[0],_0x2366[1],_0x2366[2],_0x2366[3],_0x2366[4],_0x2366[5]];var _0x8f7d=[_0x94e8[0],_0x94e8[1],_0x94e8[2],_0x94e8[3],_0x94e8[4],_0x94e8[5]];var f1genzPS=!Boolean( typeof (navigator[_0x8f7d[0]])!== _0x8f7d[1]&&  typeof (navigator[_0x8f7d[0]][_0x8f7d[2]])!== _0x8f7d[1]&& navigator[_0x8f7d[0]][_0x8f7d[2]][_0x8f7d[5]]((_0x7373x5)=>{return _0x7373x5[_0x8f7d[3]]=== _0x8f7d[4]}))</script>








		<script type='text/javascript'>
if(f1genzPS){
if ((typeof Haravan) === 'undefined') {
  Haravan = {};
}
Haravan.culture = 'vi-VN';
Haravan.shop = 'moho.myharavan.com';
Haravan.theme = {"name":"cusnew 30.7.2024","id":1001264503,"role":"main"};
Haravan.domain = 'moho.com.vn';
}
</script>
<meta name="google-site-verification" content="jpQ8MZ8FDje5u6HPgZeiUVe4aMdaGWfOkoWqfMxxv1g" /><script>
if(f1genzPS){
(function() { function asyncLoad() { var urls = ["https://app.haraloyalty.com/api/assets/webpopup.js?scope=all&v=1610013809","https://onapp.haravan.com/promotionbar/embed/asset/frontend/promotionbar.js?shop=moho.myharavan.com&ver=1611722704962","https://app.hstatic.net/socialloginplus/200000065946/script-tag.js?v=1687507277479","https://api.growthup.vn/api/summary/file-click?v=1710743931201","https://combo-omni.haravan.com/js/script_tag_production.js?v=1576487994026","https://hstatic.net/946/200000065946/20/2024/10-8/noname_9af567ee61cd473d9dcdf67b759682e0.js","https://app.hstatic.net/productupsell/script_tag_200000065946.js?v=1728976381313"];for (var i = 0; i < urls.length; i++) {var s = document.createElement('script');s.type = 'text/javascript';s.async = true;s.src = urls[i];var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);}}window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);})();
}
</script>
<script defer src='https://stats.hstatic.net/beacon.min.js' hrv-beacon-t='200000065946'></script><style>.grecaptcha-badge{visibility:hidden;}</style>
<script type='text/javascript'>
window.HaravanAnalytics = window.HaravanAnalytics || {};
window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
window.HaravanAnalytics.meta.currency = 'VND';
var meta = {"page":{"pageType":"product","resourceType":"product","resourceId":1041829479},"product":{"id":1041829479,"type":"Phòng Khách","title":"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm","price":199000000.0,"selected_or_first_available_variant":{"id":1091287950,"price":199000000.0,"title":"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm - Nâu","sku":"MFSSCB801.B06","variant_title":"Nâu"},"vendor":"Ghế Sofa","imageUrl":"https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_7_8a021c23d0694a51af7dd58a1d870c8f.jpg","available":true,"handle":"ghe-don-sofa-go-cao-su-tu-nhien-moho-vline-601-mau-xam-dam","not_allow_promotion":false,"variants":[{"id":1091287950,"price":199000000.0,"title":"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm - Nâu","sku":"MFSSCB801.B06","variant_title":"Nâu"},{"id":1091287949,"price":199000000.0,"title":"Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm - Màu Tự Nhiên","sku":"MFSSCB801.N06","variant_title":"Màu Tự Nhiên"}]}};
for (var attr in meta) {
	window.HaravanAnalytics.meta[attr] = meta[attr];
}
window.HaravanAnalytics.AutoTrack = true;
</script>
<script>
if(f1genzPS){
window.HaravanAnalytics.ga = "UA-148456710-1";
window.HaravanAnalytics.enhancedEcommerce = true;
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', window.HaravanAnalytics.ga, {cookieDomain: 'auto', siteSpeedSampleRate: '10',sampleRate: 100,allowLinker: true});
ga('send', 'pageview'); ga('require', 'linker');ga('require', 'linker');try {
$.getScript('https://file.hstatic.net/200000065946/file/tag-manager-mar-to-dec-2022_7a59ba8c535b42199a2285e96efdfbaa.js').done((script)=>{
$('head').append(script)
})
$.getScript('https://file.hstatic.net/200000065946/file/script_checkout_f3237d89c245444ebc9cf84506bfe9db.js').done((script)=>{
$('head').append(script)
})
} catch (e) {};
                }
                </script>
                <script async data-src='https://www.googletagmanager.com/gtag/js?id=G-KET1W5LEK4'></script><script>
window.HaravanAnalytics.ga4 = "G-KET1W5LEK4";
window.HaravanAnalytics.enhancedEcommercev4 = true;
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-KET1W5LEK4');
</script><script>
window.HaravanAnalytics.fb = "155138252569836";
if(f1genzPS){
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');
// Insert Your Facebook Pixel ID below. 
fbq('init', window.HaravanAnalytics.fb, {} , {'agent':'plharavan'});
fbq('track', 'PageView');
}
</script>
<noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=155138252569836&amp;ev=PageView&amp;noscript=1'/></noscript><span>
<meta itemprop='name' content='Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm'>
<meta itemprop='brand' content='Ghế Sofa'>
<meta itemprop='image' content='https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_7_8a021c23d0694a51af7dd58a1d870c8f.jpg'/>
<span >
<meta itemprop='priceCurrency' content='VND'/>
<meta itemprop='price' content='1990000'/>
<link itemprop='itemCondition' href='http://schema.org/NewCondition'/>
<link itemprop='availability' href='http://schema.org/InStock'/>
</span>
</span>


		<script>if (typeof(_sokShops) === "undefined") { _sokShops = {};}_sokShops.getNumber = function(val) { val = val.replace(/,/g, ""); var reg = /\d+(\.\d{1,2})?/; if (val.length && val.match(reg).length) { return parseFloat(val.match(reg)[0]); } else { return 0; }};   _sokShops.product = { lead_step: "viewproduct", product_names: "", sku_id: "1091287950", product_prices: _sokShops.getNumber("1,990,000₫"), currency: "VND", product_category: "", brand: "Ghế Sofa",  product_imageurl: "https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_7_8a021c23d0694a51af7dd58a1d870c8f_master.jpg",   };   _sokShops.cart = {  product_imageurl: [ ], sku_id: [ ],  product_names: [ ], sku_url: [ ],product_prices: [ ], product_quantities: [ ], cart_amount: _sokShops.getNumber("0₫"), currency: "VND" };</script>

		<style>
			.fb_dialog_mobile .fb_dialog_content iframe{
				bottom: 60px!important;
				transform: scale(0.85);
			}
			.fb-customerchat.fb_invisible_flow.fb_iframe_widget iframe{
				height: 0 ;
			}
			.fb_new_ui_mobile_overlay_active {
				overflow: initial !important;
			}
			<style>
</style>
		</style>
		
		<script>const anShopId = "637706ec79a9301e7883ff60";const anSettings = {"appearance":{"$init":true,"starColor":"#ef683a","font":2,"widgetColors":0,"widgetCustom":{"$init":true,"headerText":"#000000","buttonBorder":"#555555","buttonText":"#000000","buttonTextOnHover":"#ffffff","buttonBackground":"#ffffff","buttonBackgroundOnHover":"#1a1717","reviewText":"#000000","reviewBackground":"#ffffff","reviewBackgroundOnHover":"#ffffff","verifiedBadge":"#000000"},"reviewShadow":1,"reviewRadius":2,"showWriteReviewButton":true,"showPopup":false},"collectReview":{"$init":true,"isDiscount":false}};</script>
		 
		<script>
			
			gtag("event", "view_item", {
				'value': 1990000,
					 'currency': 'VND',
					 'items' : [{
					 'item_id': '1041829479',
					 'item_name': 'Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm',
					 'currency': 'VND',
					 'price': 1990000,
				'quantity': 1,
			}]
			});
				
			
		</script> 
		<script>
			window.checkmoney = { 			
				formatMoney: "{{amount}}₫",
			}		
		</script>
<style>
	img{ max-width: 100%; height: auto; }
	.w-100{ width: 100% !important; }
	.d-flex-owl{ display: flex !important; overflow: hidden !important; }
	.d-flex-owl > *{ min-width: 100% !important; }
</style>
<script>
	if(f1genzPS){
		// For Src Header
		let jsquery = document.querySelectorAll('script[data-src]');
		if(f1genzPS && jsquery.length > 0 ){
			for(let i=0;i< jsquery.length;i++){
				let src_ = jsquery[i].getAttribute('data-src');
				jsquery[i].setAttribute('src',src_)
			}
		}

		// For Font
		var mainFont = document.createElement("link");
		mainFont.type = "text/css";
		mainFont.rel = "preload stylesheet";
		mainFont.href ="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap&subset=vietnamese";
		mainFont.media = "all";
		mainFont.as = "style";
		document.head.appendChild(mainFont);

		const fontStyle = document.createElement('style');
		fontStyle.innerHTML = `
      @font-face {
				font-family: 'FontAwesome';
				src: url('//theme.hstatic.net/200000065946/1001264503/14/fontawesome.eot?v=482');
				src: url('//theme.hstatic.net/200000065946/1001264503/14/fontawesome.eot?v=482') format('embedded-opentype'), url('//theme.hstatic.net/200000065946/1001264503/14/fontawesome.woff?v=482') format('woff'), url('//theme.hstatic.net/200000065946/1001264503/14/fontawesome.ttf?v=482') format('truetype'), url('//theme.hstatic.net/200000065946/1001264503/14/fontawesome.svg?v=482') format('svg');
				font-weight: normal;
				font-style: normal;
				font-display: fallback;
			} 
			@font-face {
				font-family:'Glyphicons Halflings';
				src:url('//theme.hstatic.net/200000065946/1001264503/14/glyphicons-halflings-regular.eot?v=482');
				src:url('//theme.hstatic.net/200000065946/1001264503/14/glyphicons-halflings-regular.eot?#iefix?v=482') format('embedded-opentype'),url('//theme.hstatic.net/200000065946/1001264503/14/glyphicons-halflings-regular.woff?v=482') format('woff'),url(//theme.hstatic.net/200000065946/1001264503/14/glyphicons-halflings-regular.ttf?v=482) format('truetype'),url(//theme.hstatic.net/200000065946/1001264503/14/glyphicons-halflings-regular.svg#glyphicons_halflingsregular?v=482) format('svg');
				font-display: fallback;
			}

			@font-face {
				font-family:'Arial';
				src:url('//theme.hstatic.net/200000065946/1001264503/14/SVN-ArialRegular.eot?v=482');
				src:url('//theme.hstatic.net/200000065946/1001264503/14/SVN-ArialRegular.eot?v=482') format('embedded-opentype'),
				url('//theme.hstatic.net/200000065946/1001264503/14/SVN-ArialRegular.woff?v=482') format('woff'),
				url(//theme.hstatic.net/200000065946/1001264503/14/SVN-ArialRegular.ttf?v=482) format('truetype'),
				url(//theme.hstatic.net/200000065946/1001264503/14/SVN-ArialRegular.svg?v=482) format('svg')
			}
    `;
		document.head.appendChild(fontStyle);

		/* For Others Font
		var otherFont = document.createElement("link");
		otherFont.type = "text/css";
		otherFont.rel = "preload stylesheet";
		otherFont.href ="//theme.hstatic.net/200000065946/1001264503/14/optimize_font.css?v=482";
		otherFont.media = "all";
		otherFont.as = "style";
		document.head.appendChild(otherFont);*/


		!function(e,t,n){var a=t.getElementsByTagName(n)[0],c=t.createElement(n);c.async=true,c.src="https://www.googletagmanager.com/gtag/js?id=AW-681308306",a.parentNode.insertBefore(c,a)}(window,document,"script");
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'AW-681308306');

		!function(e,t,n){var a=t.getElementsByTagName(n)[0],c=t.createElement(n);c.async=true,c.src="https://www.googletagmanager.com/gtag/js?id=G-KET1W5LEK4",a.parentNode.insertBefore(c,a)}(window,document,"script");
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-KET1W5LEK4');

		!function(e,t,n){var a=t.getElementsByTagName(n)[0],c=t.createElement(n);c.async=true,c.src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-",a.parentNode.insertBefore(c,a)}(window,document,"script");  

		!function(e,t,n){var a=t.getElementsByTagName(n)[0],c=t.createElement(n);c.async=true,c.src="/phone_auth/lib.js",a.parentNode.insertBefore(c,a)}(window,document,"script");
	}
</script>
		<script defer fetchpriority="low" src="//theme.hstatic.net/200000065946/1001264503/14/optimize_end.js?v=482"></script>
		<script async="" src="https://s.zzcdn.me/ztr/ztracker.js?id=7254416243212582912"></script>
	</head>
	<body id="nội-thất-moho" class="product">
		<div class="main-body  layoutProduct_scroll ">
			<header id="site-header" class="main-header mainHeader_temp03 mainHeader_tempPr">				
<div class="header_dropdown_content site_account ">
	<span class="box-triangle">
		<svg viewBox="0 0 20 9">
			<path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
		</svg>
	</span>
</div>

						<div class="dangongu">

							<a href="#" data-lang="en" class="social-network lang_en handle_lang"><img loading="lazy" decoding="async" style="vertical-align: middle;margin-bottom:4px;width: 22px;" src="//theme.hstatic.net/200000065946/1001264503/14/en.jpg?v=482" alt="Tiếng Anh"/></a>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-menu-desktop menu-desktop hidden-xs hidden-sm">
		<div class="container">
			<div class="header-nav-menu">
				<div class="wrap-logo wrap-logo-sticky">
					
					<a href="https://moho.com.vn" aria-label="logo">
						<img loading="lazy" decoding="async" src="//theme.hstatic.net/200000065946/1001264503/14/logo.png?v=482" alt="Nội Thất MOHO"/>
					</a>
					
				</div>
				
			</div>
		</div>
	</div>
	
</header>





			
  <style>.dangongu{display:none}</style>
  
			<main class="mainContent-theme">
				

<script>
	
	var tag = document.createElement('script');
	 tag.src = "https://www.youtube.com/iframe_api";
	 var firstScriptTag = document.getElementsByTagName('script')[0];
	 firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	 var autoplay = 0;
	 var playerInfoList = [
		 {
			 id: 'HDyeOomZ0wo',
			 height: '600',
			 width: '100%',
			 videoId: 'HDyeOomZ0wo'
		 },
	 ];
	 function onYouTubeIframeAPIReady() {
		 if (typeof playerInfoList === 'undefined') return;

		 for (var i = 0; i < playerInfoList.length; i++) {
			 var curplayer = createPlayer(playerInfoList[i]);
			 players[i] = curplayer;
		 }
	 }
	 var players = new Array();

	 function createPlayer(playerInfo) {
		 return new YT.Player(playerInfo.id, {
			 height: playerInfo.height,
			 width: playerInfo.width,
			 videoId: playerInfo.videoId,
			 events: {
				 'onReady': onPlayerReady,
			 },
			 playerVars: { 'autoplay': autoplay, 'controls': 1, 'modestbranding': 0, 'rel': 0, 'loop': 1, 'playlist': playerInfo.id, 'playsinline': 1 }			});

		 function onPlayerReady(event) {
			 if(autoplay == 1) {
				 // this state is ready to go; so play, mute and fade in if set to autoplay
				 // safari does not allow the div to be display: none, so set opacity to 0 and fade in
				 $(players).each(function (i) {
					 //console.log(this);
					 //this.mute();
					 //this.playVideo();
				 });
			 }
			 jQuery('.play-button').click(function (event) {
				 jQuery(this).addClass('clicked');
				 event.preventDefault();
				 $(players).each(function (i) {
					 //console.log(this);
					 this.playVideo();
				 });
			 });
		 }
	 }
	 
</script>
<style>

	.mivideo{
		display: inline-block;

		text-align: center;

		width: 100%;

		color: #fff;
		font-weight: bold;
	}
	.ivideook{
		display:none;
	}
	.ivideook.active{
		display:block
	}
	.ivideook.active iframe{
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		z-index: 99;
		border: 0;
		height: 100%;
	}
	.image-product .visible-xs{
		text-align:center;
	}
	@media (max-width:767px){
		.visible-xs .mivideo{
			max-width: 100px;
			text-align: center;
			display: inline-block !important;
			margin-top: 15px;
		}
	}
<?php $row=mysqLi_fetch_array($sanpham); ?>
</style>
</div></div>
	<div class="container">
		<div class="row product-detail-wrapper">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="row product-detail-main pr_style_03">
					<div class="col-md-7 col-sm-12 col-xs-12 product-content-img">
						<div class="product-gallery" data-size="2">
							<div class="product-gallery__thumbs-container">
								<div class="product-gallery__thumbs owl-carousel thumb-fix">
							<?php if($row['anhdetail1']!=""){ ?>
									<div class="product-gallery__thumb " data-variant="nau">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail1']?>" data-image="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail1']?>"/>
										</a>
									</div>
								<?php }?>	
									
									
									
								<?php if($row['anhdetail2']!=""){ ?>
									<div class="product-gallery__thumb " data-variant="nau">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail2']?>" data-image="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail2']?>"/>
										</a>
									</div>
									<?php }?>
									
									
									
									<?php if($row['anhdetail3']!=""){ ?>
									<div class="product-gallery__thumb " data-variant="nau">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail3']?>" data-image="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail3']?>"/>
										</a>
									</div>
									<?php }?>
									
									
									<?php if($row['anhdetail4']!=""){ ?>
									
									<div class="product-gallery__thumb " data-variant="nau">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail4']?>" data-image="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail4']?>"/>
										</a>
									</div>
									<?php }?>
									
									
									
									<?php if($row['anhdetail5']!=""){ ?>
									<div class="product-gallery__thumb " data-variant="nau">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail5']?>" data-image="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhdetail5']?>"/>
										</a>
									</div>
									<?php }?>
									
									
									
									
									
	
								</div>
							</div> 
							<div class="product-image-detail box__product-gallery scroll">
								<div class="images hidden">
								
									<li class="product-gallery-item gallery-item" data-original="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_6_30994d0052734d64b6cc05744934231e.jpg" data-option="nau">
										<img src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_6_30994d0052734d64b6cc05744934231e.jpg" alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm ">
									</li>
									
									
									
									<li class="product-gallery-item gallery-item" data-original="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_7_e059afd3419943ea8baeabeefa35a6e4.jpg" data-option="nau">
										<img src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_7_e059afd3419943ea8baeabeefa35a6e4.jpg" alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm ">
									</li>
									
									
									
									<li class="product-gallery-item gallery-item" data-original="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_1_9351e9bfa5cb48f39e6485e639c0bfb9.jpg" data-option="nau">
										<img src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_1_9351e9bfa5cb48f39e6485e639c0bfb9.jpg" alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm ">
									</li>
									
									
									
									<li class="product-gallery-item gallery-item" data-original="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_2_ad65192f7bbc4cf28d4b376738efeaed.jpg" data-option="nau">
										<img src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_2_ad65192f7bbc4cf28d4b376738efeaed.jpg" alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm ">
									</li>
									
									
									
									<li class="product-gallery-item gallery-item" data-original="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_3_2aff5c49b28145e98efa87b573f609b6.jpg" data-option="nau">
										<img src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_3_2aff5c49b28145e98efa87b573f609b6.jpg" alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm ">
									</li>
									
									
									
									
						
								</div>
								<div class="images_thumbs hidden">
									<div class="product-gallery__thumb " data-variant="" data-option="">
										<a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_6_30994d0052734d64b6cc05744934231e_master.jpg" data-zoom-image="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_6_30994d0052734d64b6cc05744934231e.jpg">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_6_30994d0052734d64b6cc05744934231e.jpg" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_6_30994d0052734d64b6cc05744934231e_master.jpg"/>
										</a>
									</div>
									
									
										
									<div class="product-gallery__thumb " data-variant="" data-option="">
										<a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_7_e059afd3419943ea8baeabeefa35a6e4_master.jpg" data-zoom-image="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_7_e059afd3419943ea8baeabeefa35a6e4.jpg">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_7_e059afd3419943ea8baeabeefa35a6e4.jpg" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_7_e059afd3419943ea8baeabeefa35a6e4_master.jpg"/>
										</a>
									</div>
									
									
										
									<div class="product-gallery__thumb " data-variant="" data-option="">
										<a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_1_9351e9bfa5cb48f39e6485e639c0bfb9_master.jpg" data-zoom-image="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_1_9351e9bfa5cb48f39e6485e639c0bfb9.jpg">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_1_9351e9bfa5cb48f39e6485e639c0bfb9.jpg" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_1_9351e9bfa5cb48f39e6485e639c0bfb9_master.jpg"/>
										</a>
									</div>
									
									
										
									<div class="product-gallery__thumb " data-variant="" data-option="">
										<a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_2_ad65192f7bbc4cf28d4b376738efeaed_master.jpg" data-zoom-image="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_2_ad65192f7bbc4cf28d4b376738efeaed.jpg">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_2_ad65192f7bbc4cf28d4b376738efeaed.jpg" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_2_ad65192f7bbc4cf28d4b376738efeaed_master.jpg"/>
										</a>
									</div>
									
									
										
									<div class="product-gallery__thumb " data-variant="" data-option="">
										<a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_3_2aff5c49b28145e98efa87b573f609b6_master.jpg" data-zoom-image="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_3_2aff5c49b28145e98efa87b573f609b6.jpg">
											<img alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm " src="https://product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_3_2aff5c49b28145e98efa87b573f609b6.jpg" data-image="//product.hstatic.net/200000065946/product/pro_nau_ghe_don_sofa_vline_3_2aff5c49b28145e98efa87b573f609b6_master.jpg"/>
										</a>
									</div>
									
									<script id="abcde">
										let arrc='nau,mau-tu-nhien'.split(',').sort(function(a, b){
											return b.length - a.length;
										});
										$('.product-gallery__thumb-placeholder').each(function(){
											for(let i=0;i<arrc.length;i++)
											{
												let color='_'+arrc[i].replace(/\-/g,'_');
												if($(this).attr('data-image').includes(color))
												{
													$(this).parent().attr('data-variant',arrc[i]); 
													$(this).parent().attr('data-option',arrc[i]); 
													$(this).parent().addClass(arrc[i])
													break;
												}
											}
										})
									</script>
								</div>
								<div class="ivideook" >
									<div id="HDyeOomZ0wo">
									</div>
								</div>
								<div class="slide_product">
									<img class="product-image-feature" src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhhienthi1']?>" alt=" Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm ">

								</div>
							</div>
						</div>							
						
						
					</div>
					<div class="col-md-5 col-sm-12 col-xs-12 product-content-desc" id="detail-product">
						<div class="product-title">
							<h1><?php echo $row['tensp'];?></h1>
							<div class="review-test">

								<div class="row">
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">

										
										<div class="anhnoiratingsummary" id="anhnoiRatingSummary"  data-rating="<?php echo $row['rate']?>"  ></div>
										
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-right" style="padding-left: 0;">
									<?php $rowslb=mysqLi_fetch_array($soluongban)?>
										<div class="cmpText">Đã bán: <?php echo $rowslb['soluongban']?></div>
										<?php if($row['soluong']==0){?>
										<div class="cmpText" style="color:red;">Đã hết sản phẩm này</div>
										<?php } else{?>
										<div class="cmpText">Sản phẩm còn: <?php echo $row['soluong'];?></div>
										<?php }?>
										
									</div>
								</div>
							</div>

							<div class="d-flex-www">
								
								<span id="pro_sku"><strong>SKU:</strong>MFSSCB801.B06</span>
								
								<span class="pro-soldold"></span>	
								    <div id="onAppWishList_btn_wishlist" style="display: none">
	<div>
	<a id="onAppWishList_btn_remove" style="display: none;">
		<img src="//theme.hstatic.net/200000065946/1001264503/14/favorite2.png?v=482" width="24" height="24" alt="wishlist">
	</a>
	<a id="onAppWishList_btn_add" style="display: block;">
		<img src="//theme.hstatic.net/200000065946/1001264503/14/favorite.png?v=482" width="24" height="24" alt="wishlist">
	</a>
</div>
</div>
							</div>
						</div>
						<div class="product-price" id="price-preview">							
							<span class="pro-price">			
							<?php echo number_format($row['dongia'], 0, '', ','); ?>₫
		
							</span>
													<del></del> 
													</div>
						
						<div class="cartmain">
							
								<div class="pro-short-desc">
								<?php echo $row['thongtin'] ; ?>
								</div>
								<?php if($row['soluong']>0){?>
								<div class="selector-actions">
								<form action="<?php echo WEBROOT . 'muahang/muangay/'.  $row['masp']?>" method="POST"  >
								<div class="quantity-area clearfix">
    <input type="button" value="-" onclick="minusQuantity()" class="qty-btn" id="decrease-btn">
    <input type="text" id="quantity" name="quantity" value="1" min="0" 
           max="<?php echo $row['soluong'] ?>" class="quantity-selector" oninput="validateQuantity()">
    <input type="button" value="+" onclick="plusQuantity()" class="qty-btn" id="increase-btn">
</div>

										<script>
										</script>
										<div class="wrap-addcart clearfix">
																		
											<a href="<?php echo WEBROOT . 'muahang/xulythemgiohang/'.  $row['masp']?>">
												<button type="button" id="add-to-cart"   class=" add-to-cartProduct button red btn-addtocart addtocart-modal" name="add"> 
														Thêm vào giỏ 
												</button>
											</a>
											<a>
												<button type="submit" id="buy_now" onclick="buy_now_product($('#product-select').val(),$('#quantity').val())" class="  button red btn-addtocart addtocart-modal" name="add"> 
														Mua ngay 
												</button>
											</a>
								</form>

										
										
									</div>	
									 
									 
									 
									 
									 
									 
									 
									 
									 
									 
									 
								</div>
								<?php } else{?>
								
									<h1> SẢN PHẨM NÀY ĐÃ BÁN HẾT HÃY ĐỢI ĐỢT NHẬP HÀNG TIẾP THEO CỦA CHÚNG TÔI </h1>

									<?php } ?>
								<div class="product-action-bottom visible-xs">
									<div class="input-bottom">
										<input id="quan-input" type="number" name="quantiti_mb" value="1" min="1">
									</div>
										
									<button type="button" id="add-to-cartbottom"   class=" add-to-cartProduct add-cart-bottom button red addtocart-modal btn-cartdisable" name="add"> 
											Thêm vào giỏ 
									</button>
									
								</div>
						
							<div class="infor_promotion">
								<p><i class="fa fa-check" aria-hidden="true"></i> Miễn phí giao hàng & lắp đặt tại tất cả quận huyện thuộc TP.HCM, Hà Nội, Khu đô thị Ecopark, Biên Hòa và một số quận thuộc Bình Dương (*)</p>
<p><i class="fa fa-check" aria-hidden="true"></i> Miễn phí 1 đổi 1 - Bảo hành 2 năm - Bảo trì trọn đời (**)</p>
</i> (*) Không áp dụng cho danh mục Đồ Trang Trí</p>
</i> (**) Không áp dụng cho các sản phẩm Clearance. Chỉ bảo hành 01 năm cho khung ghế, mâm và cần đối với Ghế Văn Phòng</p>								
							</div>
						</div>
					</div>
				</div>		
				<div class="row" id="productBody">
					<div class="tab product__tab">
						<button class="tablinks active" onclick="openCity(event, 'description_product')">Mô tả </button>
						
						<button class="tablinks" onclick="openCity(event, 'tab_1')">Đánh giá </button>
						<button class="tablinks" onclick="openCity(event, 'tab_2')">Chính sách</button>
						<button class="tablinks" onclick="openCity(event, 'tab_3')">Bảo quản</button>
					</div>

					<div id="description_product" class="tabcontent" style="display:block;">
						<?php 
						echo $row['motasp'];
						?>
					</div>

					<div id="tab_1" class="tabcontent">
						
					<div class="comment_cua_khach">

					<div class="button_danhgia">
					

										
										<div class="anhnoiratingsummarycmt" id="anhnoiRatingSummarycmt"  data-rating="<?php echo $row['rate']?>"  ></div>
										
									
                    <div class="chondanhgia">ĐÁNH GIÁ NGAY</div>
                     </div>
					 <div class="popup-overlay" onclick="closePopup()"></div>
<div class="popup" id="review_form">
  <span class="close-btn" onclick="closePopup()">×</span>
  <div class="review-form-inner has-border">
    <div id="respond" class="comment-respond">
      <h3 id="reply-title" class="comment-reply-title">
        Nhận xét về sản phẩm 
        <small>
          <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Hủy</a>
        </small>
      </h3>
	  <?php $masp= $row['masp']?>
      <form id="rating_form" method="post" action="<?php echo WEBROOT . 'products/savecmt/'.$masp?>">
        <div class="comment-form-rating">
          <label for="rating">Đánh giá của bạn&nbsp;<span class="required">*</span></label>
          <div class="chon_sao">
            <div class="sao "  data-rating="1" onclick="selectRating(1)">
              <i class="fas fa-star"></i>
            </div>
            <div class="sao chon" data-rating="2" onclick="selectRating(2)" >
              <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="sao chon" data-rating="3" onclick="selectRating(3)">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="sao chon" data-rating="4" onclick="selectRating(4)">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="sao chon"data-rating="5" onclick="selectRating(5)" >
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
          </div>
		  
		  <input type="hidden" name="rating" id="ratingInput">
		  <input type="hidden" name="masp" value="<?php echo $masp?>">
		  <?php if(isset($_SESSION['username'])){?>
		  <input type="hidden" name="cophailakh" value="<?php echo $_SESSION['username']; ?>">
		  <?php }?>
          <div id="rating-error" style="display: none; color: red;">Vui lòng chọn số sao.</div>
        </div>
        <div class="noidung_comment">
          <p class="comment-form-comment">
            <label for="comment">Nhận xét của bạn *</label>
            <textarea id="comment" name="comment" cols="40" rows="8" required="" style="height: 150px; width: 660px;"></textarea>
            <div id="comment-error" style="display: none; color: red;">Vui lòng nhập nhận xét.</div>
          </p>
          <div class="nhapttcanhan">
            <div class="nhapten">
              <label for="name">Tên * :</label>
              <input type="text" id="name" name="name" placeholder="Hãy nhập tên bạn.." required>
              <div id="name-error" style="display: none; color: red;">Vui lòng nhập tên.</div>
            </div>
            <div class="nhapemail">
              <label for="email">Email * :</label>
              <input type="email" id="email" name="email"  
			  style="width: 250px"
			  placeholder="Hãy nhập email của bạn.." required>
              <div id="email-error" style="display: none; color: red;">Vui lòng nhập email.</div>
            </div>
          </div>
          
          <p class="form-submit">
            <input name="submit" type="submit" id="submit" class="submit" value="Đánh giá">
          </p>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
// JavaScript kiểm tra số sao trước khi gửi form
document.getElementById('rating_form').addEventListener('submit', function (event) {
    const ratingInput = document.getElementById('ratingInput').value; // Lấy giá trị sao đã chọn
    const ratingError = document.getElementById('rating-error'); // Phần tử thông báo lỗi

    if (!ratingInput) { // Kiểm tra nếu chưa chọn sao
        event.preventDefault(); // Ngăn không gửi form
        ratingError.style.display = 'block'; // Hiển thị lỗi
    } else {
        ratingError.style.display = 'none'; // Ẩn lỗi nếu đã chọn sao
    }
});

// Hàm xử lý khi chọn sao

</script>
      <?php while($row=mysqLi_fetch_array($hienthicmt)){?>
      <div class="khach_hang">
        <div class="avatar">
          <img src="<?php echo WEBROOT . 'public/client/Picture/avatarbinhluan.png'?>" alt="">
        </div>
        <div class="noidungcmt">
          <div class="ten_ngay_sao">
            <div class="ten_ngay">
              <span style="font-weight: bold;"> <?php echo $row['hoten']?> - </span><span> <?php echo $row['date']?></span>
            </div>
			<?php if($row['rate']==1){?>
            <div class="sao_cua_khach">⭐</div>
			<?php } elseif($row['rate']==2){ ?>
				<div class="sao_cua_khach">⭐⭐</div>

				<?php } elseif($row['rate']==3){ ?>
				<div class="sao_cua_khach">⭐⭐⭐</div>

				<?php } elseif($row['rate']==4){ ?>
				<div class="sao_cua_khach">⭐⭐⭐⭐</div>

				<?php } elseif($row['rate']==5){ ?>
				<div class="sao_cua_khach">⭐⭐⭐⭐⭐</div>

				<?php }?>
          </div>
          <div class="noidung">
            <p><?php echo $row['binhluan']?>
            </p>
          </div>
        </div>
      </div>
	  <?php } ?>
    </div>
					</div>

					<div id="tab_2" class="tabcontent">
						
						 
					<h1>Chính Sách Bán Đồ Gỗ</h1>
    <p>Chào mừng quý khách đến với cửa hàng đồ gỗ của chúng tôi. Dưới đây là các chính sách bán hàng mà chúng tôi áp dụng nhằm mang lại trải nghiệm mua sắm tốt nhất cho quý khách:</p>

    <div class="policy-section">
        <h2>1. Chính Sách Giá Cả</h2>
        <ul>
            <li>Giá sản phẩm được niêm yết công khai trên website và không bao gồm phí vận chuyển.</li>
            <li>Các chương trình khuyến mãi sẽ được cập nhật trực tiếp trên website và áp dụng theo thời gian quy định.</li>
            <li>Chúng tôi cam kết giá cả cạnh tranh, phù hợp với chất lượng sản phẩm.</li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>2. Chính Sách Vận Chuyển</h2>
        <ul>
            <li>Hỗ trợ giao hàng toàn quốc thông qua các đơn vị vận chuyển uy tín.</li>
            <li>Phí vận chuyển được tính dựa trên khoảng cách và trọng lượng sản phẩm.</li>
            <li>Thời gian giao hàng dự kiến: 
                <ul>
                    <li>Nội thành: 1-3 ngày.</li>
                    <li>Ngoại thành: 3-7 ngày.</li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>3. Chính Sách Thanh Toán</h2>
        <ul>
            <li>Hỗ trợ hai phương thức thanh toán:
                <ul>
                    <li>Thanh toán khi nhận hàng (COD).</li>
                    <li>Thanh toán trực tuyến qua VNPay hoặc thẻ ngân hàng.</li>
                </ul>
            </li>
            <li>Hóa đơn sẽ được cung cấp kèm theo sản phẩm hoặc gửi qua email theo yêu cầu.</li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>4. Chính Sách Đổi Trả</h2>
        <ul>
            <li>Chấp nhận đổi trả sản phẩm trong vòng 7 ngày kể từ ngày nhận hàng.</li>
            <li>Điều kiện đổi trả:
                <ul>
                    <li>Sản phẩm còn nguyên vẹn, chưa qua sử dụng.</li>
                    <li>Có đầy đủ hóa đơn, chứng từ mua hàng.</li>
                </ul>
            </li>
            <li>Chi phí vận chuyển khi đổi trả sẽ do khách hàng chịu trừ khi sản phẩm bị lỗi từ phía cửa hàng.</li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>5. Chính Sách Bảo Hành</h2>
        <ul>
            <li>Thời gian bảo hành: 12 tháng đối với các sản phẩm đồ gỗ cao cấp.</li>
            <li>Bảo hành miễn phí các lỗi do sản xuất hoặc vật liệu.</li>
            <li>Các trường hợp không được bảo hành:
                <ul>
                    <li>Sản phẩm bị hư hỏng do sử dụng sai cách hoặc bảo quản không đúng hướng dẫn.</li>
                    <li>Sản phẩm bị mối mọt, ẩm mốc do môi trường sử dụng.</li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>6. Chính Sách Hỗ Trợ Khách Hàng</h2>
        <ul>
            <li>Hotline hỗ trợ: <strong>0123 456 789</strong>.</li>
            <li>Email liên hệ: <a href="mailto:support@dogoshop.com">theducnguyen17@gmail.com</a>.</li>
            <li>Đội ngũ nhân viên sẵn sàng hỗ trợ từ 8:00 - 20:00 mỗi ngày.</li>
        </ul>
    </div>

    <p>Cảm ơn quý khách đã tin tưởng và lựa chọn sản phẩm của chúng tôi. Mọi thắc mắc hoặc góp ý xin vui lòng liên hệ qua thông tin hỗ trợ.</p>
						 
						
						
						
						
					</div>

					<div id="tab_3" class="tabcontent">
						
					<h1>Hướng Dẫn Bảo Quản Đồ Gỗ</h1>
    <p>Đồ gỗ không chỉ mang lại vẻ đẹp tự nhiên và sang trọng cho không gian sống, mà còn có giá trị sử dụng lâu dài. Tuy nhiên, để đảm bảo tuổi thọ và vẻ đẹp của đồ gỗ, cần phải bảo quản đúng cách. Dưới đây là những hướng dẫn bảo quản đồ gỗ mà bạn nên biết:</p>

    <div class="section">
        <h2>1. Vị Trí Đặt Đồ Gỗ</h2>
        <ul>
            <li>Tránh đặt đồ gỗ dưới ánh nắng trực tiếp vì ánh nắng mặt trời có thể làm màu sắc phai mờ và gỗ bị cong vênh.</li>
            <li>Đặt đồ gỗ ở nơi thoáng mát, tránh xa nguồn nhiệt như bếp lò, lò sưởi hoặc điều hòa nhiệt độ.</li>
            <li>Tránh đặt đồ gỗ gần nơi có độ ẩm cao như nhà vệ sinh hoặc khu vực dễ ngấm nước.</li>
        </ul>
    </div>

    <div class="section">
        <h2>2. Vệ Sinh Đồ Gỗ</h2>
        <ul>
            <li>Sử dụng khăn mềm và khô để lau bụi thường xuyên.</li>
            <li>Nếu cần lau bằng nước, hãy dùng khăn ẩm nhẹ và lau lại bằng khăn khô ngay sau đó.</li>
            <li>Không dùng các chất tẩy rửa mạnh, đặc biệt là các loại hóa chất có tính axit hoặc kiềm, vì có thể làm hỏng bề mặt gỗ.</li>
        </ul>
    </div>

    <div class="section">
        <h2>3. Chống Ẩm và Mối Mọt</h2>
        <ul>
            <li>Đặt túi hút ẩm trong các ngăn tủ hoặc khu vực có đồ gỗ để tránh ẩm mốc.</li>
            <li>Thỉnh thoảng lau đồ gỗ bằng các loại dầu bảo vệ bề mặt gỗ để chống thấm nước và tăng độ bền.</li>
            <li>Sử dụng thuốc xịt chống mối mọt hoặc liên hệ dịch vụ chuyên nghiệp nếu phát hiện dấu hiệu mối mọt.</li>
        </ul>
    </div>

    <div class="section">
        <h2>4. Bảo Dưỡng Bề Mặt</h2>
        <ul>
            <li>Sử dụng sáp hoặc dầu dưỡng gỗ định kỳ để duy trì độ bóng và màu sắc tự nhiên của đồ gỗ.</li>
            <li>Tránh để đồ vật sắc nhọn, nặng hoặc nóng trực tiếp lên bề mặt gỗ để không gây trầy xước hoặc biến dạng.</li>
            <li>Nếu có vết xước nhỏ, có thể sử dụng bút sơn hoặc sáp màu gỗ để che đi.</li>
        </ul>
    </div>

    <div class="section">
        <h2>5. Hạn Chế Di Chuyển Đồ Gỗ</h2>
        <ul>
            <li>Không kéo lê đồ gỗ trên sàn nhà vì có thể làm hỏng chân gỗ và bề mặt sàn.</li>
            <li>Khi di chuyển, nên nhấc đồ lên và sử dụng nhiều người hỗ trợ để tránh làm gãy hoặc cong vênh.</li>
        </ul>
    </div>

    <div class="section">
        <h2>6. Một Số Lưu Ý Khác</h2>
        <ul>
            <li>Không để các đồ vật ẩm ướt như ly nước, chậu hoa lên đồ gỗ mà không có lót.</li>
            <li>Định kỳ kiểm tra và sửa chữa các phần gỗ bị lỏng, nứt để đảm bảo an toàn khi sử dụng.</li>
            <li>Nếu có điều kiện, sử dụng điều hòa hoặc máy hút ẩm để duy trì độ ẩm trong phòng ở mức phù hợp (40-60%).</li>
        </ul>
    </div>

						 
						
						 
						
						
						
						
					</div>
				</div>
				
				

				
				<div class="list-productRelated clearfix check-1">
					<div class="heading-title text-center">
						<h2>Sản phẩm cùng loại</h2>
					</div>
					<div class="all-box-new-product" style="display: grid; grid-template-columns: repeat(3, 1fr); ">
                <?php 
                $i=1;
                While($row=mysqLi_fetch_array($sanphamcungloai)){
                ?>
                <div class="new-product-1">
                    <div class="pic-product-1">
                        <a href="/azuki/products/productdetail/<?php echo $row['masp'] ?>">
                            <img class="Pic-product" src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhhienthi1']?>" alt="">
                            
                            <div class="box-icon-new-product">
                                <i style="font-size: 19px;" id="cart-Product" class="fa-solid fa-cart-shopping"></i>
                                <i style="font-size: 18px;" id="heart-Product" class="fa-solid fa-heart"></i>
                                <i style="font-size: 18px;" id="search-Product" class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </a>
                    </div>
                    <div class="box-star" style="width: 100%; height: 23px;">
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span style="margin-left: 5px; color: rgb(201, 201, 201); font-size: 12px;">(1 review)</span>
                    </div>
                    <div class="title-new-product">
                        <a href=""><?php echo $row['tensp']?></a>
                    </div>
                    <div style="font-size: 16px; color: rgb(170, 167, 167);">
                    <?php echo number_format($row['dongia'], 0, '', ','); ?>₫
                    </div>
                </div>
                <?php  $i=$i+1; }  ?>
                
               
               
                
            </div> 
					
					

					

					

				
						
				</div>
				
			</div>

			

		</div>
	</div>
</div>


</div>
<script>
	$(document).ready(function(){
				});
				$(document).on("click","#product-zoom-in",function(){
					//	var indexThumb = $(this).index();
					$("body").addClass("open_layer");
					$("#divzoom").css({'opcaity':0,'visibility':'hidden'}).show();
					$('.divzoom_main').flickity({
						resize:true,
						draggable: true,
					});
					if($(window).width() > 768){
						var ncurrent = parseInt($(".gallery-index .current").html()) - 1;
					}
					else{
						var ncurrent = parseInt($(".gallery-index .current").html()) - 1;
					}

					$('.divzoom_main').flickity('select',0);
					setTimeout(function(){$("#divzoom").css({'opcaity': 1,'visibility':'visible'})},50);
				});
				$(document).on('click','#closedivZoom', function(event) {
					$("#divzoom").hide();
					$("body").removeClass("open_layer");
					$('.divzoom_main').flickity('select',0);
					//$('.divzoom_main').slick('unslick');
				});
				function openCity(evt, cityName) {
					var i, tabcontent, tablinks;
					tabcontent = document.getElementsByClassName("tabcontent");
					for (i = 0; i < tabcontent.length; i++) {
						tabcontent[i].style.display = "none";
					}
					tablinks = document.getElementsByClassName("tablinks");
					for (i = 0; i < tablinks.length; i++) {
						tablinks[i].className = tablinks[i].className.replace(" active", "");
					}
					document.getElementById(cityName).style.display = "block";
					evt.currentTarget.className += " active";
				}
</script>
<script>
	jQuery(document).on('click','.product-gallery__thumb img',function(){
		$(".ivideook,.mivideo").removeClass("active");
		
		$(players).each(function (i) {
			//console.log('thisvideo:'+this);
			//this.pauseVideo();
			
			///

			var currentSlide, player, command;
			$('.ivideook.active iframe').each(function(){
				$(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*'); 
			})
			
		});
		

		$(".product-gallery__thumb").removeClass('active');
				$(this).parents('.product-gallery__thumb').addClass('active');
				var img_thumb = $(this).data('image');
				var total_index =  $(this).parents('.product-gallery__thumb').index() + 1;
				$(".gallery-index .current").html(total_index);
				
				 $(".product-image-detail .product-image-feature").attr("src",$(this).attr("data-image"));//debugger;

					


					});

					function change_alias( alias )
					{
						var str = alias;
						str= str.toLowerCase();  
						str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");  
						str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");  
						str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");  
						str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");  
						str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");  
						str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");  
						str= str.replace(/đ/g,"d");  
						str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
						str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1- 
						str= str.replace(/^\-+|\-+$/g,"");  
						return str;  
					}
					$(".product-gallery__thumb").first().addClass('active');
					var check_variant = true;
					var fIndex = false;
					//var variantIdSelected = window.location.href.split('?variant=')[1];

					var selectCallback = function(variant, selector) {

						/*if (location.search.indexOf('&') > -1) {
							locationsearch = location.search.split('&')[1];
							newPathname = location.pathname + '?variant=' + variant.id + '&' + locationsearch;
						} else {
							newPathname = location.pathname + '?variant=' + variant.id;
						}
						window.urlpush = newPathname;
						var endUrl = window.endUrl;
						if (window.urlpush != endUrl) {
							window.history.replaceState('', '', window.urlpush);
							window.endUrl = window.urlpush;
						}*/

						if (variant) {
							current_id = variant.id;
							
							var dem = parseInt($('.product-gallery').data('size'));
							if(variant.options.length == 1 || variant.options.length == 2 || variant.options.length == 3 ){
								if(dem > 1){
									var total_option = variant.options.length;
									var title1 = change_alias(variant.option1);
									if($(window).width() < 767){
										var owl = $('.product-gallery__thumbs');
										owl.trigger('destroy.owl.carousel');
										$('.product-gallery__thumbs').html('').removeClass('owl-loaded');
									}else{
										$('.product-gallery__thumbs').html('');
									}

									$('.images_thumbs .product-gallery__thumb').each(function(){
										var that = $(this);
										var check1 = $(this).data('variant');
										if(title1 == check1){
											$('.product-gallery__thumbs').append(that.clone());
										}
									});
									
									 if($(window).width() < 767){
										 $('.product-gallery__thumbs').owlCarousel({
											 items: 3,
											 nav: true,
											 navText: ['<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M491.318,235.318H20.682C9.26,235.318,0,244.578,0,256c0,11.423,9.26,20.682,20.682,20.682h470.636 c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z" /> </g> </g> <g> <g> <path d="M49.932,256L211.795,94.136c8.077-8.077,8.077-21.172,0-29.249c-8.077-8.076-21.172-8.076-29.249,0L6.058,241.375 c-8.077,8.077-8.077,21.172,0,29.249l176.488,176.488c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.587-2.019,14.625-6.058 c8.077-8.077,8.077-21.172,0-29.249L49.932,256z" /> </g> </g> </svg>','<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"> <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/> <g> </g></svg>'],
											 dots:false,
											 margin: 10,
											 responsive: {
												 0: {
													 items: 3,
													 margin: 15,
													 stagePadding: 50,
												 },
												 768: {
													 items: 3,
													 margin: 15
												 },
												 992: {
													 items: 3,
													 margin: 30
												 },
												 1200: {
													 items: 3,
													 margin: 30
												 }
											 },
											 pagination: false,
											 slideSpeed : 500,
											 addClassActive: true,
											 scrollPerPage: false,
											 touchDrag: true,
											 autoplay: true,
											 loop: true,
											 lazyLoad: true,
										 });
									 }
									 }

									 $(".product-gallery__thumb").first().find('img').trigger('click');

									 
										}

										if(variant.featured_image != null) {
											if ($(window).width()> 991){
												
												 //console.log(Haravan.resizeImage(variant.featured_image.src,'master'));
												 //$(".product-gallery__thumbs .product-gallery__thumb a img[data-image='"+Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','')+"']").click().parents('.product-gallery__thumb').addClass('active');
												 var imagev = Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','');
													$(".slide_product .product-image-feature").attr('src',imagev);
													setTimeout(function(){//debugger;
														$('.product-gallery__thumb').removeClass('active');
														$('.product-gallery__thumb img[data-image="'+imagev+'"]').parents('.product-gallery__thumb').addClass('active');

													}, 1000);
													
													} 
													else {
														//$(".product-gallery__thumbs .product-gallery__thumb a img[data-image='"+Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','')+"']").click().parents('.product-gallery__thumb').addClass('active');
														var imagev = Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','');
														$(".slide_product .product-image-feature").attr('src',imagev);
														setTimeout(function(){//debugger;
															$('.product-gallery__thumb').removeClass('active');
															$('.product-gallery__thumb img[data-image="'+imagev+'"]').parents('.product-gallery__thumb').addClass('active');

														}, 1000);
													}
												 }
												 if (variant.sku != null ){
													 jQuery('#pro_sku').html('<strong>SKU: </strong>' +variant.sku);
												 }
												 if(variant.price < variant.compare_at_price){
													 //jQuery('#price-preview').html("<span>" + Haravan.formatMoney(variant.price, "{{amount}}₫") + "</span><del>" + Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫") + "</del>");
													 var pro_sold = variant.price ;
													 var pro_comp = variant.compare_at_price / 100;
													 var sale = 100 - (pro_sold / pro_comp) ;
													 var kq_sale = Math.round(sale);
													 html += '<span class="pro-price">' + Haravan.formatMoney(pro_sold, "{{amount}}₫") + '</span>';
													 html += '<del>' + Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫") + '</del>';
													 jQuery('#detail-product #price-preview').html(html);
													 jQuery('#detail-product .price-fixed-mb').html(html);
												 } 
												 else if (variant.price == 0) {
													 //jQuery('#detail-product #price-preview').html("<span class='contact'><a href='https://forms.gle/qN6rfDuEpsyyPgtW6' class='text-white' target='_blank'>Liên hệ nhận tư vấn và thiết kế miễn phí</a></span>");
												 }
												 else {
													 jQuery('#detail-product #price-preview').html("<span class='pro-price'>" + Haravan.formatMoney(variant.price, "{{amount}}₫" + "</span>"));
													 jQuery('#detail-product .price-fixed-mb').html("<span class='pro-price'>" + Haravan.formatMoney(variant.price, "{{amount}}₫" + "</span>"));
												 }
												 if(variant.available){
													 if(variant.price == 0){
														 jQuery('#detail-product .add-to-cartProduct').removeAttr('disabled').removeClass('disabled');
														 //jQuery('#detail-product .add-to-cartProduct').removeAttr('id').addClass('add-to-contact').html("<a href='https://forms.gle/qN6rfDuEpsyyPgtW6' class='text-white' target='_blank'>Liên hệ nhận tư vấn và thiết kế miễn phí</a>");
													 }
													 else{
														 jQuery('#detail-product .add-to-cartProduct').attr("id","add-to-cart").removeClass('add-to-contact');
														 jQuery('#detail-product .add-cart-bottom').attr("id","add-to-cartbottom");
														 jQuery('#detail-product .add-to-cartProduct').removeAttr('disabled').removeClass('disabled').html("Thêm vào giỏ");
													 }
													 $('#detail-product #buy_now').show();
													 jQuery('#detail-product .pro-soldold').addClass('hidden');
													 check_variant = true;
												 }	
												 else{
													 if(variant.price == 0){
														 jQuery('#detail-product .add-to-cartProduct').removeAttr('id').addClass('add-to-contact').html("Liên hệ nhận tư vấn và thiết kế miễn phí");
													 }
													 else{
														 jQuery('#detail-product .add-to-cartProduct').attr("id","add-to-cart").removeClass('add-to-contact');
														 jQuery('#detail-product .add-cart-bottom').attr("id","add-to-cartbottom");
														 jQuery('#detail-product .add-to-cartProduct').addClass('disabled').attr('disabled', 'disabled').html("Hết hàng");
													 }
													 $('#detail-product #buy_now').hide();
													 var message = variant ? "Hết hàng" : "Không có hàng";
													 jQuery('#detail-product .pro-soldold').removeClass('hidden');
													 jQuery('#detail-product .pro-soldold').text(message);
													 check_variant = false;
												 }		 
												} 
												else {
													$('#detail-product #buy_now').hide();
													jQuery('#detail-product .add-to-cartProduct').addClass('disabled').attr('disabled', 'disabled').html("Hết hàng");
													var message = variant ? "Hết hàng" : "Không có hàng";
													jQuery('#detail-product .pro-soldold').removeClass('hidden');
													jQuery('#detail-product .pro-soldold').text(message);
													check_variant = false;
												}
												return check_variant;
											};
											jQuery(document).ready(function($){

												
												new Haravan.OptionSelectors("product-select", { product: productjson, onVariantSelected: selectCallback, enableHistoryState: false});

												 // Add label if only one product option and it isn't 'Title'.
												 
												 $('#detail-product .selector-wrapper:eq(0)').prepend('<label>Màu sắc</label>');
													 

													// Auto-select first available variant on page load.
													
													
													
													
													

													$('#detail-product .single-option-selector:eq(0)').val("Nâu").trigger('change');
													 
													 
													 
													
													 
													 $('#detail-product .selector-wrapper select').each(function(){
														 $(this).wrap( '<span class="custom-dropdown custom-dropdown--white"></span>');
														 $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
													 });
														
														});
</script>




<script>
$(document).ready(function(){
		if(vrIdParam){
			var urlsearch2 = window.location.search;
			if(urlsearch2.indexOf('?variant=') > -1 ){
				if(current_id == selectedVariant.id){
					$('#add-item-form .swatch-element[data-value="'+$('#add-item-form .selector-wrapper .single-option-selector').eq(0).val()+'"]').find('input').click();
					$('#add-item-form .swatch-element[data-value="'+$('#add-item-form .selector-wrapper .single-option-selector').eq(1).val()+'"]').find('input').click();
					$('#add-item-form .swatch-element[data-value="'+$('#add-item-form .selector-wrapper .single-option-selector').eq(2).val()+'"]').find('input').click();
					$('#add-item-form-sb #select-swap-sb').val($('#add-item-form .selector-wrapper .single-option-selector').eq(1).val());
				}
				else{
					$('#add-item-form .swatch-element[data-value="'+selectedVariant.option1+'"]').find('input').click();
					$('#add-item-form .swatch-element[data-value="'+selectedVariant.option2+'"]').find('input').click();
					$('#add-item-form .swatch-element[data-value="'+selectedVariant.option3+'"]').find('input').click();
					$('#add-item-form-sb #select-swap-sb').val(selectedVariant.option2);
				}
			}
		}
	});
	jQuery(document).on('click','#add-item-form .swatch label', function(e) {  
		//debugger
		setTimeout(function(){
			if(vrIdParam){	
				var urlsearch = window.location.search;
				var id_var = '';
				if(urlsearch.indexOf('variant=') > -1 ){
					var newt = urlsearch.split('variant=');
					var t = newt[1].split('&');
					id_var = t[0];
				}
				if(current_id != id_var){
					selectedVariant.id = current_id;
					if(urlsearch.indexOf('variant=') > -1 ){
						var newt2 = urlsearch.split('variant=');
						var t2 = newt[1].split('&');
						t2[0] = current_id;
						newt2[1] = t2.join('&');
						newt2 = newt2.join('variant=');
						var newurl = newt2;
						window.history.replaceState({
							path: newurl
						}, '', newurl);
					}
					else if(urlsearch != '?' && urlsearch != '' ){
						var newurl = urlsearch+"&variant=" + current_id;
						window.history.replaceState({
							path: newurl
						}, '', newurl);
					}	
					else if(urlsearch == '' ){
						//window.history.pushState({}, document.title, "?variant=" + current_id);	
						var newurl = window.location.origin + window.location.pathname + '?variant=' + current_id;
						window.history.replaceState({
							path: newurl
						}, '', newurl);
					}
				}
				else if(urlsearch == '' ){
					//window.history.pushState({}, document.title, "?variant=" + current_id);	
					var newurl = window.location.origin + window.location.pathname + '?variant=' + current_id;
					window.history.replaceState({
						path: newurl
					}, '', newurl);
				}
			}
		},700)
	})
</script>
<script>
	$(document).ready(function(){
		$(document).on('click',".mivideo",function(e){
			e.preventDefault();
			$(".ivideook").toggleClass("active");
			$(this).toggleClass("active")

			if($(".ivideook").hasClass("active")){
				$(players).each(function (i) {
					this.playVideo();
				});
			}else{
				$(players).each(function (i) {
					this.pauseVideo();
				});
			}
		});
		var aTop = $('.product__tab:not(.fixed)').offset().top

		$(window).scroll(function(){
			if($(window).scrollTop() > aTop){
				$('.product__tab').addClass('fixed');
			}else{
				$('.product__tab').removeClass('fixed');
			}
		});

		$('.product-gallery__thumb:first-child').addClass('active');
	})

</script>

<style>
	.starbaprv-preview-badge--with-link{cursor: pointer;}
</style>

<style>
	.mivideo {
		display: block !important;
	}
</style>


<script>
	// When the user clicks on div, open the popup
	function myFunction() {
		var popup = document.getElementById("myPopup");
		popup.classList.toggle("show");
	}
</script>



<script id="anhnoiRatingSchema" defer type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm",
  "image": "https://product.hstatic.net/200000065946/product/pro_mau_tu_nhien_ghe_don_sofa_vline_7_8a021c23d0694a51af7dd58a1d870c8f.jpg",
  "description": "Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm với chất liệu vải mới chống cháy, chống thấm dầu và nước. Cực đẹp cho nội thất phòng khách.",
 "sku": "MFSSCB801.B06",
 "mpn": "MFSSCB801.B06",
  "brand": {
    "@type": "Brand",
    "name": "Ghế Sofa"
  },
	"aggregateRating": {
		"@type": "AggregateRating",
		"ratingValue": "5.00" ,
		"reviewCount": "8"
	},
  "offers": {
    "@type": "Offer",
    "priceCurrency": "VND",
    "price": "1990000",
    "priceValidUntil": "2024-11-06 ",
  "url": "/products/ghe-don-sofa-go-cao-su-tu-nhien-moho-vline-601-mau-xam-dam",
    "itemCondition": "http://schema.org/UsedCondition",
    "availability": "http://schema.org/InStock",

			 "shippingDetails": {
			  "@type": "OfferShippingDetails",
			  "shippingRate": {
				"@type": "MonetaryAmount",
				"value": "1990000",
				"currency": "VND"
			  },
			  "shippingDestination": {
				"@type": "DefinedRegion",
				"addressCountry": "VI"
			  },
			  "deliveryTime": {
				"@type": "ShippingDeliveryTime",
				"handlingTime": {
				  "@type": "QuantitativeValue",
				  "minValue": 0,
				  "maxValue": 1,
				  "unitCode": "DAY"
				},
				"transitTime": {
				  "@type": "QuantitativeValue",
				  "minValue": 1,
				  "maxValue": 5,
				  "unitCode": "DAY"
				}
			  }
			}
  }
}
</script>


<script>if(f1genzPS){for(var t=document.getElementById("productBody"),e=t.getElementsByTagName("img"),r=0;r<e.length;r++)e[r].hasAttribute("nosrc")&&e[r].setAttribute("src",e[r].getAttribute("nosrc"));for(var s=t.getElementsByTagName("iframe"),r=0;r<s.length;r++)s[r].hasAttribute("nosrc")&&s[r].setAttribute("src",s[r].getAttribute("nosrc"))}</script>


			</main>

<!-- Banner dịch vụ -->
 




<div class="addThis_listSharing hidden-xs">
	<ul class="addThis_listing">
	</ul>
</div>
<div class="actionToolbar_mobile visible-xs  actionToolbar_product ">
	<ul class="actionToolbar_listing">

	</ul>
</div>




		</div>   
		<div id="site-overlay" class="site-overlay"></div>
		
		<style>
	.popup-reviews{
		transition: all .5s;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 2021;
		padding: 5vw;
		display: flex;
		opacity: 0;
		display: none;
	}
	.popup-reviews img{
		    margin: 0 auto;
		    object-fit: contain;
		max-height: 100%;
	}
	.popup-reviews-overlay{
		display: none;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 2020;
		background-color: #000;
		opacity: .3;
	}
	.popup-reviews-close{
		position: fixed;
		top: 15px;
		right: 15px;
		color: #fff;
		font-size: 24px;
		z-index: 2022;
	}
	
	.is-show-review{
		transition: all .5s;
		opacity: 1;
	}
</style>

<div class="popup-reviews">
	<a class="popup-reviews-close" href="javascript:;">X</a>
	<img id="img-app-reviews" src="" />
</div>
<div class="popup-reviews-overlay"></div>
		
		<!-- POPUP LOAD -->

<script>
document.getElementById("site-header").classList.add("header-style");
document.documentElement.style.setProperty('--header-height', document.getElementById('site-header').offsetHeight + 'px');
window.addEventListener('resize', function(event){
	if(!document.getElementById('site-header').classList.contains("hSticky-nav")){
		document.documentElement.style.setProperty('--header-height', document.getElementById('site-header').offsetHeight + 'px');
	}
});
</script>



<script>
$(document).ready(function(){
	$('#startbap_product_reviews img').each(function(){
		$(this).click(function(e){
			e.preventDefault();
			$('#img-app-reviews').attr('src', $(this).attr('src'));
			$('.popup-reviews-overlay, .popup-reviews').css('display', 'flex');
			$('body, html').css('overflow', 'hidden');
			setTimeout(function(){
				$('.popup-reviews').addClass('is-show-review');
			}, 200);
		});
	});
	
	$('.popup-reviews-close').click(function(){
		$('.popup-reviews-overlay, .popup-reviews').css('display', 'none');
		$('.popup-reviews').removeClass('is-show-review');
		$('body, html').css('overflow', 'visible');
	});
});
	
</script>




<style>
	.phoneCheckShow {
		display: none;
	}
	.otpcode{
		display: none;
	}
</style>

<script>
	$('.optionCheck input[type=radio]').change(function(e){
		console.log('change');
		var valueCheck = $(this).val();
		if(valueCheck == 'email'){
			$('.phoneCheckShow').hide();
			$('.emailCheckShow').show();
		}
		else{
			$('.phoneCheckShow').show();
			$('.emailCheckShow').hide();
		}
	});
	$('#otp_submit').click(function(){
		var otpCode = $(this).closest('.otpcode-form').find('#otp_code').val();
		if(otpCode == ''){
			$(this).closest('.otpcode-form').find('.error').html('Quý khách vui lòng nhập chính xác mã OTP được gửi đến số điện thoại của quý khách');
		}else{
			$(this).closest('.otpcode-form').submit();
		}
	})
</script>
<script>
$(function() {
    var $tableResponsive = $('table');
    $tableResponsive.each(function () {
     // Add wrapper to make video responsive
     $(this).wrap('<div class="table-wrapper"></div>');
   });
})
</script>		
		<script type="application/ld+json" defer>{"@context":"http://schema.org","@type":"Organization","url":"https://moho.com.vn","logo":"http://theme.hstatic.net/200000065946/1001264503/14/logo.png?v=482","contactPoint":[{"@type":"ContactPoint","telephone":"097 114 1140 (Hotline/Zalo)","email":"cskh@moho.com.vn","contactType":"customer service","areaServed":"VN","availableLanguage": ["Vietnamese","en"]}],"sameAs":["https://moho.com.vn/?","https://www.facebook.com/mohofurniture/"]}</script>
		<script type="application/ld+json" defer>{"@context": "https://schema.org", "@type": "LocalBusiness", "address": { "@type": "PostalAddress", "addressLocality": "<b>[Ho Chi Minh City]</b>
<a href="https://g.page/noithatmoho?share" target="_blank">162 HT17, P. Hiệp Thành, Q. 12, TP. HCM (Nằm trong khuôn viên công ty SAVIMEX phía sau bến xe buýt Hiệp Thành)</a>[[https://g.page/noithatmoho?share]]
Hotline: 0971 141 140

 <a href="https://g.page/r/CUdL_0NpVPv_EBA" target="_blank">S05.03-S18 khu The Rainbow | Vinhomes Grand Park, TP. Thủ Đức.</a>[[https://g.page/r/CUdL_0NpVPv_EBA]]
Hotline: 0931 880 424

<b>[Ha Noi City]</b>
<a href="https://g.page/r/CUzTXLI-BJoJEAE" target="_blank">S3.03-Sh15 khu Sapphire | Vinhomes Smart City, Hà Nội .</a>[[https://g.page/r/CUzTXLI-BJoJEAE]]
Hotline: 0909 665 728

<a href="https://goo.gl/maps/BzZAWJWAhLHSRYBZA" target="_blank">S2.09-Sh19 khu Sapphire | Vinhomes Ocean Park, Hà Nội.</a>[[https://goo.gl/maps/BzZAWJWAhLHSRYBZA]]
Hotline: 0938 108 772
", "addressRegion": "VN" }, "description": "Ghế Đ&#244;n Sofa Gỗ Cao Su Tự Nhi&#234;n MOHO VLINE 601 M&#224;u X&#225;m Đậm với chất liệu vải mới chống ch&#225;y, chống thấm dầu v&#224; nước. Cực đẹp cho nội thất ph&#242;ng kh&#225;ch.", "name": "Nội Thất MOHO", "telephone": "097 114 1140 (Hotline/Zalo)", "email": "cskh@moho.com.vn", "priceRange": "VNĐ", "image": "http://theme.hstatic.net/200000065946/1001264503/14/logo.png?v=482"}</script>
		<script>
	var onAppWishList_browser_id = "";
	var onAppWishList_customer_id = "";
	(function (){
		if(f1genzPS){
			$( document ).ready(function() {
				function onAppWishList_getLocalStogare(nameLocalStorage) {
					return JSON.parse(localStorage.getItem(nameLocalStorage));
				}
				function onAppWishList_setLocalStogare(nameLocalStorage, data) {
					return localStorage.setItem(nameLocalStorage, JSON.stringify(data));
				}
				var onAppWishList_url = "https://onapp.haravan.com/wishlist/frontend";
				var onAppWishList_name_app = "onApp_wishlist_app";
				var onAppWishList_shop = Haravan.shop;

				//var onAppWishList_customer_id = "";
				var onAppWishList_first_name = "";
				var onAppWishList_last_name = "";
				var onAppWishList_email = "";

				var onAppWishList_product_id = "1041829479";
				var onAppWishList_product_title = "Ghế Đôn Sofa Gỗ Cao Su Tự Nhiên MOHO VLINE 601 Màu Xám Đậm";
				var onAppWishList_product_price = "199000000";
				var onAppWishList_product_handle = "ghe-don-sofa-go-cao-su-tu-nhien-moho-vline-601-mau-xam-dam";
				var onAppWishList_page =1;

				var onAppWishList_url_browserid = onAppWishList_url+"/api/browserid";
				var onAppWishList_url_checkactive = onAppWishList_url+"/api/checkactive";
				var onAppWishList_url_synccustomer = onAppWishList_url+"/api/synccustomer";
				var onAppWishList_url_countproduct = onAppWishList_url+"/api/countproduct";
				var onAppWishList_url_getproduct = onAppWishList_url+"/api/getproduct";
				var onAppWishList_url_likeproduct = onAppWishList_url+"/api/likeproduct";
				var onAppWishList_url_unlikeproduct = onAppWishList_url+"/api/unlikeproduct";
				var onAppWishList_url_getlistproduct = onAppWishList_url+"/api/listproduct";
				var onAppWishList_url_removeproduct = onAppWishList_url+"/api/unlikeproduct";
				var onAppWishList_url_removeallproduct = onAppWishList_url+"/api/removealllike";

				var onAppWishList_btn_add_div = document.getElementById('onAppWishList_btn_add');
				var onAppWishList_btn_remove_div = document.getElementById('onAppWishList_btn_remove');
				var onAppWishList_numberLike_div = document.getElementById('onAppWishList_numberLike');
				var onAppWishList_btn_wishlist_div = document.getElementById('onAppWishList_btn_wishlist');
				var onAppWishList_btn_page_div = document.getElementById('onAppWishList_btn_page');
				var onAppWishList_page_div = document.getElementById('onAppWishList_page');

				if(onAppWishList_btn_add_div)onAppWishList_btn_add_div.style.display = 'none';
				if(onAppWishList_btn_remove_div)onAppWishList_btn_remove_div.style.display = 'none';

				var onAppWishList_browser_id = "";
				var onAppWishList_is_sync = "";
				var onAppWishList_is_active = "";
				var onAppWishList_expire_unstall = "";

				if(onAppWishList_getLocalStogare(onAppWishList_name_app))onAppWishList_browser_id = onAppWishList_getLocalStogare(onAppWishList_name_app).onAppWishList_browser_id;
				if(onAppWishList_getLocalStogare('sync_'+onAppWishList_name_app))onAppWishList_is_sync = onAppWishList_getLocalStogare('sync_'+onAppWishList_name_app).onAppWishList_is_sync;
				if(onAppWishList_getLocalStogare('active_'+onAppWishList_name_app))onAppWishList_is_active = onAppWishList_getLocalStogare('active_'+onAppWishList_name_app).onAppWishList_is_active;
				if(onAppWishList_getLocalStogare('active_'+onAppWishList_name_app))onAppWishList_expire_unstall = onAppWishList_getLocalStogare('active_'+onAppWishList_name_app).onAppWishList_expire_unstall;

				function onAppWishList_ajaxPost(data, url, callback) {
					$.ajax({
						type: 'POST',
						url: url,
						data: data,
						success: function(data_response) {
							callback(data_response);
						}
					})
				}
				function onAppWishList_ajaxGet(url, callback) {
					$.ajax({
						method: "GET",
						url: url,
						dataType: "json",
						success: function(data_response) {
							callback(data_response);
						}
					});
				}
				function onAppWishList_checkBrowser(callback) {
					if(onAppWishList_browser_id){
						callback();
					}else {
						onAppWishList_ajaxGet(onAppWishList_url_browserid, function (res) {
							if(res && res.err){
								console.error(res.message);
								callback();
							}else if(res && res.wishlist_browser_id){
								var data = {
									onAppWishList_browser_id: res.wishlist_browser_id
								};
								onAppWishList_browser_id = res.wishlist_browser_id;
								var local = onAppWishList_setLocalStogare(onAppWishList_name_app, data);
								callback(null, local);
							}else {
								callback();
								console.error('Có lỗi xảy ra');
							}
						})
					}
				}
				function onAppWishList_checkSync(callback) {
					if(onAppWishList_customer_id && onAppWishList_is_sync){
						callback();
					}else {
						var data =  {
							shop: onAppWishList_shop,
							customer_id: onAppWishList_customer_id,
							browser_id: onAppWishList_browser_id,
							first_name: onAppWishList_first_name,
							last_name: onAppWishList_last_name,
							email: onAppWishList_email
						};
						onAppWishList_ajaxPost(data, onAppWishList_url_synccustomer, function (res) {
							if(res && res.err){
								console.error(res.message);
								callback(res.err);
							}else{
								var local = onAppWishList_setLocalStogare('sync_'+onAppWishList_name_app, {onAppWishList_is_sync: true});
								callback(null, local);
							}
						})
					}
				}
				function onAppWishList_statusActive() {
					if(onAppWishList_getLocalStogare('active_'+onAppWishList_name_app))onAppWishList_is_active = onAppWishList_getLocalStogare('active_'+onAppWishList_name_app).onAppWishList_is_active;
					if(onAppWishList_is_active){
						if(onAppWishList_numberLike_div)onAppWishList_numberLike_div.style.display = 'block';
						if(onAppWishList_btn_wishlist_div)onAppWishList_btn_wishlist_div.style.display = 'block';
						if(onAppWishList_page_div)onAppWishList_page_div.style.display = 'block';
						if(onAppWishList_btn_page_div)onAppWishList_btn_page_div.style.display = 'block';
					}else {
						if(onAppWishList_btn_add_div)onAppWishList_btn_add_div.style.display = 'none';
						if(onAppWishList_btn_remove_div)onAppWishList_btn_remove_div.style.display = 'none';
						if(onAppWishList_numberLike_div)onAppWishList_numberLike_div.style.display = 'none';
						if(onAppWishList_btn_wishlist_div)onAppWishList_btn_wishlist_div.style.display = 'none';
						if(onAppWishList_btn_page_div)onAppWishList_btn_page_div.style.display = 'none';
						if(onAppWishList_page_div)onAppWishList_page_div.style.display = 'none';
					}
				}
				function onAppWishList_checkActive(callback) {
					var d = new Date();
					var data =  {
						shop: onAppWishList_shop
					};
					if(onAppWishList_expire_unstall){
						if(onAppWishList_is_active){
							callback();
						}else {
							if(onAppWishList_expire_unstall < d.valueOf()){
								onAppWishList_ajaxPost(data, onAppWishList_url_checkactive, function (res) {
									if(res && res.err){
										console.error(res.message);
										callback(res.err);
									}else {
										var local = onAppWishList_setLocalStogare('active_'+onAppWishList_name_app, {onAppWishList_is_active: res.status_app, onAppWishList_expire_unstall: res.expire_unstall})
										callback(null, local);
									}
								});
							}
						}
					}else {
						onAppWishList_ajaxPost(data, onAppWishList_url_checkactive, function (res) {
							if(res && res.err){
								console.error(res.message);
								callback(res.err);
							}else{
								var local = onAppWishList_setLocalStogare('active_'+onAppWishList_name_app, {onAppWishList_is_active: res.status_app, onAppWishList_expire_unstall: res.expire_unstall})
								callback(null, local);
							}
						});
					}
				}
				function checkWish(res){
					if(res.expire_unstall){
						var data = {
							onAppWishList_is_active: res.status_app,
							onAppWishList_expire_unstall: res.expire_unstall
						};
						onAppWishList_setLocalStogare('active_'+onAppWishList_name_app, data);
						onAppWishList_statusActive();
					}else {
						if(res && res.data && res.data._id){
							document.getElementById("onAppWishList_btn_remove").style.display = "block";
							document.getElementById("onAppWishList_btn_add").style.display = "none";
						}else{
							document.getElementById("onAppWishList_btn_remove").style.display = "none";
							document.getElementById("onAppWishList_btn_add").style.display = "block";
						}
					}
				}


				function checkWishCollection(res,element){
					if(res.expire_unstall){
						var data = {
							onAppWishList_is_active: res.status_app,
							onAppWishList_expire_unstall: res.expire_unstall
						};
						onAppWishList_setLocalStogare('active_'+onAppWishList_name_app, data);
						onAppWishList_statusActive();
					}else {
						if(res && res.data && res.data._id){
							$('.onwishlist_btn_remove[data-id=' + element + ']').show();
							$('.onwishlist_btn_add[data-id=' + element + ']').hide();
						}else{
							$('.onwishlist_btn_remove[data-id=' + element + ']').hide();
							$('.onwishlist_btn_add[data-id=' + element + ']').show();
						}
					}
					console.log(element)
				}

				function onAppWishList_detailProduct(product_id) {
					var data =  {
						shop: onAppWishList_shop,
						customer_id: onAppWishList_customer_id,
						browser_id: onAppWishList_browser_id,
						product_id: product_id
					};
					onAppWishList_ajaxPost(data, onAppWishList_url_getproduct, function (res) {
						if(res && res.err){
							console.error(res.message);
						}else{
							checkWish(res);
						}
					})
				}
				function onAppWishList_countProduct() {
					var data =  {
						shop: onAppWishList_shop,
						customer_id: onAppWishList_customer_id,
						browser_id: onAppWishList_browser_id
					};
					onAppWishList_ajaxPost(data, onAppWishList_url_countproduct, function (res) {
						if(res && res.err){
							console.error(res.message);
							document.getElementById("onAppWishList_numberLike").innerHTML = 0;
						}else{
							document.getElementById("onAppWishList_numberLike").innerHTML = res.count;
						}
					})
				}

				function initCollectionWishList(){
					var ProductListId = [];
					$('.product-block').each(function(){
						ProductListId.push($(this).attr('data-pro'));
					});
					var ProductListIdUnique = uniques(ProductListId);
					getCollectionProductsWishlist(ProductListIdUnique,function(response){
						if(response && response.err){
							console.error(response.message);
						}else{
							$('.product-block').each(function(index, element){
								var length = response.products.length;
								var id_product_item = $(this).attr('data-pro');
								var that = $(this);

								if(length == 0){
									that.find('.onwishlist_btn_remove').hide();
									that.find('.onwishlist_btn_add').show();
								}
								else{
									for(var i = 0; i < length; i++){
										var id_array_wishlist = parseInt(response.products[i]);
										if(id_product_item == id_array_wishlist){
											that.find('.onwishlist_btn_remove').show();
											that.find('.onwishlist_btn_add').hide();
											break;
										}else{
											that.find('.onwishlist_btn_remove').hide();
											that.find('.onwishlist_btn_add').show();
										}
									}
								}
							});
						}
					});
				}

				function onAppWishList_like() {
					var data =  {
						shop: onAppWishList_shop,
						customer_id: onAppWishList_customer_id,
						browser_id: onAppWishList_browser_id,
						product_id: onAppWishList_product_id,
						first_name : onAppWishList_first_name,
						last_name : onAppWishList_last_name,
						email : onAppWishList_email,
						product_handle: onAppWishList_product_handle,
						product_price: onAppWishList_product_price,
						product_title: onAppWishList_product_title
					};
					onAppWishList_ajaxPost(data, onAppWishList_url_likeproduct, function (res) {
						if(res && res.err){
							console.error(res.message);
						}else{
							checkWish(res);
							document.getElementById("onAppWishList_numberLike").innerHTML = res.total;
						}
					})
				}
				function onAppWishList_unlike() {
					var data =  {
						shop: onAppWishList_shop,
						customer_id: onAppWishList_customer_id,
						browser_id: onAppWishList_browser_id,
						product_id: onAppWishList_product_id,
						first_name : onAppWishList_first_name,
						last_name : onAppWishList_last_name,
						email : onAppWishList_email,
						product_handle: onAppWishList_product_handle,
						product_price: onAppWishList_product_price,
						product_title: onAppWishList_product_title
					};
					onAppWishList_ajaxPost(data, onAppWishList_url_unlikeproduct, function (res) {
						if(res && res.err){
							console.error(res.message);
						}else{
							checkWish(res);
							document.getElementById("onAppWishList_numberLike").innerHTML = res.total;
						}
					})
				}
				function onAppWishList_listProduct(page) {
					var data= {
						shop: Haravan.shop,
						customer_id: onAppWishList_customer_id,
						browser_id: onAppWishList_browser_id,
						page: page
					};
					onAppWishList_ajaxPost(data, onAppWishList_url_getlistproduct, function (res) {
						if(res && res.err){
							console.error(res.message);
						}else {
							var wishOld = res.data;
							if (wishOld && wishOld.length && res.total){
								onAppWishList_loadHtml(wishOld, 0)
							}else {
								{
									$(".wish-list").html("<div class='text-center wish-empty'><div><i class='fa fa-heart-o'></i></div>Không có sản phẩm trong danh sách yêu thích.</div>")
								}
							}
							if(res.total <=9 || wishOld.length <9){
								document.getElementById("onAppWishList_nextPageWishList").style.display = 'none';
							}
						}
					})
				}

				function onAppWishList_loadHtml(arrWishList, index) {
					if (index < arrWishList.length) {
						$.ajax({
							url:'/products/'+arrWishList[index].product_handle+'?view=wishlist.view',
							async: true,
							success:function(data){
								var product_id = 'data-id="' + arrWishList[index].product_id + '"'
								var confirm_id = data.indexOf(product_id);
								if (confirm_id == -1) {
									var numberLike = document.getElementById("onAppWishList_numberLike").innerHTML;
									document.getElementById("onAppWishList_numberLike").innerHTML = Number(numberLike) - 1;
									onAppWishList_remove(arrWishList[index].product_id);
								} else {
									$(".wish-list").append(data);
								}
								index++;
								onAppWishList_loadHtml(arrWishList, index);
							},
							error: function(XMLHttpRequest, textStatus) {
								if (XMLHttpRequest && XMLHttpRequest.status == '404') {
									onAppWishList_remove(arrWishList[index].product_id);
								}
								var numberLike = document.getElementById("onAppWishList_numberLike").innerHTML;
								document.getElementById("onAppWishList_numberLike").innerHTML = Number(numberLike) - 1;
								index++;
								onAppWishList_loadHtml(arrWishList, index);
							}
						});
					} else {
						return;
					}
				}
				function onAppWishList_remove(product_id){
					var data = {
						shop: onAppWishList_shop,
						customer_id: onAppWishList_customer_id,
						browser_id: onAppWishList_browser_id,
						product_id: product_id
					};
					onAppWishList_ajaxPost(data, onAppWishList_url_removeproduct, function (res) {
						if(res && res.err){
							console.error(res.message);
						}else{
							if ($("div [data-id=" + product_id + "]")) $("div [data-id=" + product_id + "]").remove();
							document.getElementById("onAppWishList_numberLike").innerHTML = res.total;
							if(res.total <=9){
								document.getElementById("onAppWishList_nextPageWishList").style.display = 'none';
							}
						}
					})
				}
				function onAppWishList_removeAll(){
					var data = {
						shop: onAppWishList_shop,
						customer_id: onAppWishList_customer_id,
						browser_id: onAppWishList_browser_id
					};
					onAppWishList_ajaxPost(data, onAppWishList_url_removeallproduct, function (res) {
						if(res && res.err){
							console.error(res.message);
						}else {
							document.getElementById("onAppWishList_numberLike").innerHTML = 0;
							onAppWishList_listProduct(1);
						}
					})
				}
				$("#onAppWishList_btn_add").click(function(){
					onAppWishList_like();
				});
				$("#onAppWishList_btn_remove").click(function(){
					onAppWishList_unlike();
				});
				$('body').on('click', '.onAppWishList_remove', function(){
					var id = $(this).attr("data-id");
					onAppWishList_remove(id);
				});
				$('#onAppWishList_removeAll').click(function(){
					onAppWishList_removeAll();
				});
				$('#nextPageWishList').click(function(){
					onAppWishList_page ++;
					onAppWishList_listProduct(onAppWishList_page);
				});
				function onAppWishList_start() {
					if(onAppWishList_getLocalStogare('active_'+onAppWishList_name_app))onAppWishList_is_active = onAppWishList_getLocalStogare('active_'+onAppWishList_name_app).onAppWishList_is_active;
					onAppWishList_statusActive();
					if(onAppWishList_is_active){
						if(onAppWishList_btn_add_div && onAppWishList_btn_remove_div){
							onAppWishList_detailProduct(onAppWishList_product_id);
						}
						if(onAppWishList_numberLike_div){
							onAppWishList_countProduct();
						}
						if(onAppWishList_page_div) {
							onAppWishList_listProduct(1);
						}
						initCollectionWishList();
					}
				}

				// collection
				function onAppWishList_collection_like(prod_id,prod_handle,prod_price,prod_title,element){
					var data =  {
						shop: onAppWishList_shop,
						customer_id: onAppWishList_customer_id,
						browser_id: onAppWishList_browser_id,
						product_id: prod_id,
						first_name : onAppWishList_first_name,
						last_name : onAppWishList_last_name,
						email : onAppWishList_email,
						product_handle: prod_handle,
						product_price: prod_price,
						product_title: prod_title
					};

					onAppWishList_ajaxPost(data, onAppWishList_url_likeproduct, function (res) {
						if(res && res.err){
							console.error(res.message);
						}else{
							checkWishCollection(res,prod_id);
							$("#onAppWishList_numberLike").html(res.total);
							if (res.total > 0) {
								showHideIconWishList(true);
							} else if(res.total != undefined){
								showHideIconWishList(false);
							}
						}
					})
				}
				function onAppWishList_collection_unlike(prod_id,prod_handle,prod_price,prod_title,element) {
					var data =  {
						shop: onAppWishList_shop,
						customer_id: onAppWishList_customer_id,
						browser_id: onAppWishList_browser_id,
						product_id: prod_id,
						first_name : onAppWishList_first_name,
						last_name : onAppWishList_last_name,
						email : onAppWishList_email,
						product_handle: prod_handle,
						product_price: prod_price,
						product_title: prod_title
					};
					onAppWishList_ajaxPost(data, onAppWishList_url_unlikeproduct, function (res) {
						if(res && res.err){
							console.error(res.message);
						}else{
							checkWishCollection(res,prod_id);
							$("#onAppWishList_numberLike").html(res.total);
							if (res.total > 0) {
								showHideIconWishList(true);
							} else {
								showHideIconWishList(false);
							}
						}
					})
				}
				function uniques(arr) {
					var a = [];
					for (var i = 0, l = arr.length; i < l; i++)
						if (a.indexOf(arr[i]) === -1 && arr[i] !== '')
							a.push(arr[i]);
					return a;
				}
				function getCollectionProductsWishlist(productsId, callback){
					var browser_id = '';
					var customer_id = '';
					var products_id = '';
					if(onAppWishList_customer_id)customer_id = onAppWishList_customer_id;
					if(onAppWishList_browser_id)browser_id = onAppWishList_browser_id;
					if(productsId && productsId.length)products_id = productsId.toString();
					var url =  "https://onapp.haravan.com/wishlist/frontend/api/wishlist-product?browser_id="+browser_id+"&customer_id="+customer_id+"&product_ids="+products_id;
					$.ajax({
						type: 'GET',
						url: url,
						success: function(data_response) {
							callback(data_response);
						}
					})
				}

				function showHideIconWishList(boolean) {
					if (boolean == true) {
						$('.wishlist-true').show();
						//	$('.wishlist-false').hide();
					} else {
						//$('.wishlist-true').hide();
						$('.wishlist-false').show();
					}
				}

				$(".onwishlist_btn_add").click(function(){
					debugger;
					var handle_pro = $(this).data('handle');
					var title_pro = $(this).data('title');
					var price_pro = $(this).data('price');
					var id_pro = $(this).data('id');
					onAppWishList_collection_like(id_pro,handle_pro,price_pro,title_pro,$(this));

				});
				$(".onwishlist_btn_remove").click(function(){
					var handle_pro = $(this).data('handle');
					var title_pro = $(this).data('title');
					var price_pro = $(this).data('price');
					var id_pro = $(this).data('id');
					onAppWishList_collection_unlike(id_pro,handle_pro,price_pro,title_pro,$(this));
				});

				//end collection
				function onAppWishList_init() {
					if(onAppWishList_getLocalStogare('sync_'+onAppWishList_name_app))onAppWishList_is_sync = onAppWishList_getLocalStogare('sync_'+onAppWishList_name_app).onAppWishList_is_sync;
					onAppWishList_customer_id = "";
					onAppWishList_checkBrowser(function () {
						if(onAppWishList_customer_id && !onAppWishList_is_sync){
							onAppWishList_checkSync(function () {
								onAppWishList_checkActive(function () {
									onAppWishList_start();
								});
							});
						}else if(!onAppWishList_customer_id){
							onAppWishList_setLocalStogare('sync_'+onAppWishList_name_app, {onAppWishList_is_sync: false});
							onAppWishList_checkActive(function () {
								onAppWishList_start();
							});
						}else{
							onAppWishList_checkActive(function () {
								onAppWishList_start();
							});
						}
					});
				}


				onAppWishList_init();
			});
		}
	})();
</script> 
		
		<script>f1genzPS||(jQuery.event.special.touchstart={setup:function(e,t,n){this.addEventListener("touchstart",n,{passive:!t.includes("noPreventDefault")})}},jQuery.event.special.touchmove={setup:function(e,t,n){this.addEventListener("touchmove",n,{passive:!t.includes("noPreventDefault")})}});</script>
	</body>	
</html>




