this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["stock-filter"]=function(e){function t(t){for(var n,l,s=t[0],a=t[1],i=t[2],b=0,d=[];b<s.length;b++)l=s[b],Object.prototype.hasOwnProperty.call(o,l)&&o[l]&&d.push(o[l][0]),o[l]=0;for(n in a)Object.prototype.hasOwnProperty.call(a,n)&&(e[n]=a[n]);for(u&&u(t);d.length;)d.shift()();return r.push.apply(r,i||[]),c()}function c(){for(var e,t=0;t<r.length;t++){for(var c=r[t],n=!0,s=1;s<c.length;s++){var a=c[s];0!==o[a]&&(n=!1)}n&&(r.splice(t--,1),e=l(l.s=c[0]))}return e}var n={},o={48:0,1:0},r=[];function l(t){if(n[t])return n[t].exports;var c=n[t]={i:t,l:!1,exports:{}};return e[t].call(c.exports,c,c.exports,l),c.l=!0,c.exports}l.m=e,l.c=n,l.d=function(e,t,c){l.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:c})},l.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l.t=function(e,t){if(1&t&&(e=l(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var c=Object.create(null);if(l.r(c),Object.defineProperty(c,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)l.d(c,n,function(t){return e[t]}.bind(null,n));return c},l.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return l.d(t,"a",t),t},l.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},l.p="";var s=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],a=s.push.bind(s);s.push=t,s=s.slice();for(var i=0;i<s.length;i++)t(s[i]);var u=a;return r.push([510,0]),c()}({0:function(e,t){e.exports=window.wp.element},1:function(e,t){e.exports=window.wp.i18n},10:function(e,t){e.exports=window.wp.primitives},104:function(e,t){e.exports=window.wp.warning},108:function(e,t,c){"use strict";c.d(t,"a",(function(){return n}));const n=e=>"string"==typeof e},11:function(e,t){e.exports=window.wp.compose},110:function(e,t,c){"use strict";c.d(t,"a",(function(){return r}));var n=c(0);const o=Object(n.createContext)({}),r=()=>{const{wrapper:e}=Object(n.useContext)(o);return t=>{e&&e.current&&(e.current.hidden=!t)}}},116:function(e,t,c){"use strict";c.d(t,"a",(function(){return s}));var n=c(9),o=c(7),r=c(0),l=c(46);const s=e=>{const{namespace:t,resourceName:c,resourceValues:s=[],query:a={},shouldSelect:i=!0}=e;if(!t||!c)throw new Error("The options object must have valid values for the namespace and the resource properties.");const u=Object(r.useRef)({results:[],isLoading:!0}),b=Object(l.a)(a),d=Object(l.a)(s),p=(()=>{const[,e]=Object(r.useState)();return Object(r.useCallback)(t=>{e(()=>{throw t})},[])})(),f=Object(o.useSelect)(e=>{if(!i)return null;const o=e(n.COLLECTIONS_STORE_KEY),r=[t,c,b,d],l=o.getCollectionError(...r);if(l){if(!(l instanceof Error))throw new Error("TypeError: `error` object is not an instance of Error constructor");p(l)}return{results:o.getCollection(...r),isLoading:!o.hasFinishedResolution("getCollection",r)}},[t,c,d,b,i]);return null!==f&&(u.current=f),u.current}},12:function(e,t){e.exports=window.wc.blocksCheckout},121:function(e,t,c){"use strict";var n=c(0),o=c(1),r=c(31);c(280),t.a=e=>{let{name:t,count:c}=e;return Object(n.createElement)(n.Fragment,null,t,null!==c&&Number.isFinite(c)&&Object(n.createElement)(r.a,{label:c.toString(),screenReaderLabel:Object(o.sprintf)(
/* translators: %s number of products. */
Object(o._n)("%s product","%s products",c,"woocommerce"),c),wrapperElement:"span",wrapperProps:{className:"wc-filter-element-label-list-count"}}))}},130:function(e,t,c){"use strict";c.d(t,"a",(function(){return i}));var n=c(0),o=c(1),r=c(8),l=c(7),s=c(2),a=c(5);const i=e=>{let{clientId:t,setAttributes:c,filterType:i,attributes:u}=e;const{replaceBlock:b}=Object(l.useDispatch)("core/block-editor"),{heading:d,headingLevel:p}=u;if(Object(l.useSelect)(e=>{const{getBlockParentsByBlockName:c}=e("core/block-editor");return c(t,"woocommerce/filter-wrapper").length>0},[t])||!i)return null;const f=[Object(n.createElement)(s.Button,{key:"convert",onClick:()=>{const e=[Object(r.createBlock)("woocommerce/"+i,{...u,heading:""})];d&&""!==d&&e.unshift(Object(r.createBlock)("core/heading",{content:d,level:null!=p?p:2})),b(t,Object(r.createBlock)("woocommerce/filter-wrapper",{heading:d,filterType:i},[...e])),c({heading:"",lock:{remove:!0}})},variant:"primary"},Object(o.__)("Upgrade block","woocommerce"))];return Object(n.createElement)(a.Warning,{actions:f},Object(o.__)("Filter block: We have improved this block to make styling easier. Upgrade it using the button below.","woocommerce"))}},131:function(e,t,c){"use strict";var n=c(0),o=c(5),r=c(11),l=c(1);c(181),t.a=Object(r.withInstanceId)(e=>{let{className:t,headingLevel:c,onChange:r,heading:s,instanceId:a}=e;const i="h"+c;return Object(n.createElement)(i,{className:t},Object(n.createElement)("label",{className:"screen-reader-text",htmlFor:"block-title-"+a},Object(l.__)("Block title","woocommerce")),Object(n.createElement)(o.PlainText,{id:"block-title-"+a,className:"wc-block-editor-components-title",value:s,onChange:r,style:{backgroundColor:"transparent"}}))})},132:function(e,t,c){"use strict";var n=c(0);c(182),t.a=e=>{let{children:t}=e;return Object(n.createElement)("div",{className:"wc-block-filter-title-placeholder"},t)}},134:function(e,t,c){"use strict";var n=c(0),o=c(1),r=c(4),l=c.n(r),s=c(31);c(185),t.a=e=>{let{className:t,label:
/* translators: Reset button text for filters. */
c=Object(o.__)("Reset","woocommerce"),onClick:r,screenReaderLabel:a=Object(o.__)("Reset filter","woocommerce")}=e;return Object(n.createElement)("button",{className:l()("wc-block-components-filter-reset-button",t),onClick:r},Object(n.createElement)(s.a,{label:c,screenReaderLabel:a}))}},135:function(e,t,c){"use strict";var n=c(0),o=c(1),r=c(4),l=c.n(r),s=c(31);c(186),t.a=e=>{let{className:t,isLoading:c,disabled:r,label:
/* translators: Submit button text for filters. */
a=Object(o.__)("Apply","woocommerce"),onClick:i,screenReaderLabel:u=Object(o.__)("Apply filter","woocommerce")}=e;return Object(n.createElement)("button",{type:"submit",className:l()("wp-block-button__link","wc-block-filter-submit-button","wc-block-components-filter-submit-button",{"is-loading":c},t),disabled:r,onClick:i},Object(n.createElement)(s.a,{label:a,screenReaderLabel:u}))}},15:function(e,t){e.exports=window.wp.url},16:function(e,t){e.exports=window.wp.htmlEntities},167:function(e,t,c){"use strict";var n=c(6),o=c.n(n),r=c(0),l=c(335),s=c(4),a=c.n(s);c(220),t.a=e=>{let{className:t,style:c,suggestions:n,multiple:s=!0,saveTransform:i=(e=>e.trim().replace(/\s/g,"-")),messages:u={},validateInput:b=(e=>n.includes(e)),label:d="",...p}=e;return Object(r.createElement)("div",{className:a()("wc-blocks-components-form-token-field-wrapper",t,{"single-selection":!s}),style:c},Object(r.createElement)(l.a,o()({label:d,__experimentalExpandOnFocus:!0,__experimentalShowHowTo:!1,__experimentalValidateInput:b,saveTransform:i,maxLength:s?void 0:1,suggestions:n,messages:u},p)))}},168:function(e,t,c){"use strict";var n=c(0),o=c(1),r=c(4),l=c.n(r),s=c(12);c(221),t.a=e=>{let{className:t,onChange:c,options:r=[],checked:a=[],isLoading:i=!1,isDisabled:u=!1,limit:b=10}=e;const[d,p]=Object(n.useState)(!1),f=Object(n.useMemo)(()=>[...Array(5)].map((e,t)=>Object(n.createElement)("li",{key:t,style:{width:Math.floor(75*Math.random())+25+"%"}})),[]),m=Object(n.useMemo)(()=>{const e=r.length-b;return!d&&Object(n.createElement)("li",{key:"show-more",className:"show-more"},Object(n.createElement)("button",{onClick:()=>{p(!0)},"aria-expanded":!1,"aria-label":Object(o.sprintf)(
/* translators: %s is referring the remaining count of options */
Object(o._n)("Show %s more option","Show %s more options",e,"woocommerce"),e)},Object(o.sprintf)(
/* translators: %s number of options to reveal. */
Object(o._n)("Show %s more","Show %s more",e,"woocommerce"),e)))},[r,b,d]),O=Object(n.useMemo)(()=>d&&Object(n.createElement)("li",{key:"show-less",className:"show-less"},Object(n.createElement)("button",{onClick:()=>{p(!1)},"aria-expanded":!0,"aria-label":Object(o.__)("Show less options","woocommerce")},Object(o.__)("Show less","woocommerce"))),[d]),g=Object(n.useMemo)(()=>{const e=r.length>b+5;return Object(n.createElement)(n.Fragment,null,r.map((t,o)=>Object(n.createElement)(n.Fragment,{key:t.value},Object(n.createElement)("li",e&&!d&&o>=b&&{hidden:!0},Object(n.createElement)(s.CheckboxControl,{id:t.value,className:"wc-block-checkbox-list__checkbox",label:t.label,checked:a.includes(t.value),onChange:()=>{c(t.value)},disabled:u})),e&&o===b-1&&m)),e&&O)},[r,c,a,d,b,O,m,u]),j=l()("wc-block-checkbox-list","wc-block-components-checkbox-list",{"is-loading":i},t);return Object(n.createElement)("ul",{className:j},i?f:g)}},181:function(e,t){},182:function(e,t){},185:function(e,t){},186:function(e,t){},191:function(e){e.exports=JSON.parse('{"name":"woocommerce/stock-filter","version":"1.0.0","title":"Filter by Stock Controls","description":"Enable customers to filter the product grid by stock status.","category":"woocommerce","keywords":["WooCommerce"],"supports":{"html":false,"multiple":false,"color":true,"inserter":false,"lock":false},"attributes":{"className":{"type":"string","default":""},"headingLevel":{"type":"number","default":3},"showCounts":{"type":"boolean","default":true},"showFilterButton":{"type":"boolean","default":false},"displayStyle":{"type":"string","default":"list"},"selectType":{"type":"string","default":"multiple"},"isPreview":{"type":"boolean","default":false}},"textdomain":"woocommerce","apiVersion":2,"$schema":"https://schemas.wp.org/trunk/block.json"}')},2:function(e,t){e.exports=window.wp.components},21:function(e,t,c){"use strict";c.d(t,"b",(function(){return n})),c.d(t,"c",(function(){return o})),c.d(t,"a",(function(){return r}));const n=e=>!(e=>null===e)(e)&&e instanceof Object&&e.constructor===Object;function o(e,t){return n(e)&&t in e}const r=e=>0===Object.keys(e).length},220:function(e,t){},221:function(e,t){},25:function(e,t){e.exports=window.wp.isShallowEqual},251:function(e,t,c){"use strict";c.d(t,"b",(function(){return s})),c.d(t,"a",(function(){return a})),c.d(t,"d",(function(){return i})),c.d(t,"c",(function(){return u})),c.d(t,"e",(function(){return b}));var n=c(15),o=c(3),r=c(88);const l=Object(o.getSettingWithCoercion)("is_rendering_php_template",!1,r.a),s="query_type_",a="filter_";function i(e){return window?Object(n.getQueryArg)(window.location.href,e):null}function u(e){l?window.location.href=e:window.history.replaceState({},"",e)}const b=e=>{const t=Object(n.getQueryArgs)(e);return Object(n.addQueryArgs)(e,t)}},27:function(e,t){e.exports=window.React},280:function(e,t){},281:function(e,t,c){"use strict";c.d(t,"a",(function(){return b}));var n=c(0),o=c(266),r=c(21),l=c(101),s=c(46),a=c(58),i=c(116),u=c(50);const b=e=>{let{queryAttribute:t,queryPrices:c,queryStock:b,queryRating:d,queryState:p,isEditor:f=!1}=e,m=Object(u.a)();m+="-collection-data";const[O]=Object(a.a)(m),[g,j]=Object(a.b)("calculate_attribute_counts",[],m),[w,k]=Object(a.b)("calculate_price_range",null,m),[h,_]=Object(a.b)("calculate_stock_status_counts",null,m),[v,y]=Object(a.b)("calculate_rating_counts",null,m),E=Object(s.a)(t||{}),x=Object(s.a)(c),S=Object(s.a)(b),C=Object(s.a)(d);Object(n.useEffect)(()=>{"object"==typeof E&&Object.keys(E).length&&(g.find(e=>Object(r.c)(E,"taxonomy")&&e.taxonomy===E.taxonomy)||j([...g,E]))},[E,g,j]),Object(n.useEffect)(()=>{w!==x&&void 0!==x&&k(x)},[x,k,w]),Object(n.useEffect)(()=>{h!==S&&void 0!==S&&_(S)},[S,_,h]),Object(n.useEffect)(()=>{v!==C&&void 0!==C&&y(C)},[C,y,v]);const[N,T]=Object(n.useState)(f),[R]=Object(o.a)(N,200);N||T(!0);const L=Object(n.useMemo)(()=>(e=>{const t=e;return Array.isArray(e.calculate_attribute_counts)&&(t.calculate_attribute_counts=Object(l.a)(e.calculate_attribute_counts.map(e=>{let{taxonomy:t,queryType:c}=e;return{taxonomy:t,query_type:c}})).asc(["taxonomy","query_type"])),t})(O),[O]);return Object(i.a)({namespace:"/wc/store/v1",resourceName:"products/collection-data",query:{...p,page:void 0,per_page:void 0,orderby:void 0,order:void 0,...L},shouldSelect:R})}},29:function(e,t){e.exports=window.lodash},3:function(e,t){e.exports=window.wc.wcSettings},31:function(e,t,c){"use strict";var n=c(0),o=c(4),r=c.n(o);t.a=e=>{let t,{label:c,screenReaderLabel:o,wrapperElement:l,wrapperProps:s={}}=e;const a=null!=c,i=null!=o;return!a&&i?(t=l||"span",s={...s,className:r()(s.className,"screen-reader-text")},Object(n.createElement)(t,s,o)):(t=l||n.Fragment,a&&i&&c!==o?Object(n.createElement)(t,s,Object(n.createElement)("span",{"aria-hidden":"true"},c),Object(n.createElement)("span",{className:"screen-reader-text"},o)):Object(n.createElement)(t,s,c))}},38:function(e,t){e.exports=window.wp.deprecated},45:function(e,t){e.exports=window.wp.a11y},46:function(e,t,c){"use strict";c.d(t,"a",(function(){return l}));var n=c(0),o=c(25),r=c.n(o);function l(e){const t=Object(n.useRef)(e);return r()(e,t.current)||(t.current=e),t.current}},5:function(e,t){e.exports=window.wp.blockEditor},50:function(e,t,c){"use strict";c.d(t,"a",(function(){return r}));var n=c(0);const o=Object(n.createContext)("page"),r=()=>Object(n.useContext)(o);o.Provider},510:function(e,t,c){e.exports=c(533)},511:function(e,t){},512:function(e,t){},533:function(e,t,c){"use strict";c.r(t);var n=c(6),o=c.n(n),r=c(0),l=c(8),s=c(74),a=c(579),i=c(4),u=c.n(i),b=c(5),d=c(1),p=c(131),f=c(2),m=c(45),O=c(587),g=c(46),j=c(99),w=c(58),k=c(281),h=c(3),_=c(168),v=c(135),y=c(134),E=c(132),x=c(121),S=c(167),C=c(25),N=c.n(C),T=c(16),R=c(88),L=c(21),A=c(15),F=c(251);const B=[{value:"preview-1",name:"In Stock",label:Object(r.createElement)(x.a,{name:"In Stock",count:3}),textLabel:"In Stock (3)"},{value:"preview-2",name:"Out of stock",label:Object(r.createElement)(x.a,{name:"Out of stock",count:3}),textLabel:"Out of stock (3)"},{value:"preview-3",name:"On backorder",label:Object(r.createElement)(x.a,{name:"On backorder",count:2}),textLabel:"On backorder (2)"}];c(512);var P=c(108),M=c(191);function I(){return Math.floor(Math.random()*Date.now())}const q=e=>e.trim().replace(/\s/g,"").replace(/_/g,"-").replace(/-+/g,"-").replace(/[^a-zA-Z0-9-]/g,"");var Q=c(110);const D=F.a+"stock_status";var Y=e=>{let{attributes:t,isEditor:c=!1}=e;const n=Object(Q.a)(),o=Object(h.getSettingWithCoercion)("is_rendering_php_template",!1,R.a),[l,a]=Object(r.useState)(!1),{outofstock:i,...b}=Object(h.getSetting)("stockStatusOptions",{}),p=Object(r.useRef)(Object(h.getSetting)("hideOutOfStockItems",!1)?b:{outofstock:i,...b}),f=Object(r.useMemo)(()=>function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"filter_stock_status";const c=Object(F.d)(t);if(!c)return[];const n=Object(P.a)(c)?c.split(","):c,o=Object.keys(e);return n.filter(e=>o.includes(e))}(p.current,D),[]),[C,M]=Object(r.useState)(f),[Y,W]=Object(r.useState)(t.isPreview?B:[]),[V]=Object(r.useState)(Object.entries(p.current).map(e=>{let[t,c]=e;return{slug:t,name:c}}).filter(e=>!!e.name).sort((e,t)=>e.slug.localeCompare(t.slug))),[G]=Object(w.a)(),[K,U]=Object(w.b)("stock_status",f),{results:J,isLoading:$}=Object(k.a)({queryStock:!0,queryState:G,isEditor:c}),z=Object(r.useCallback)(e=>Object(L.c)(J,"stock_status_counts")&&Array.isArray(J.stock_status_counts)?J.stock_status_counts.find(t=>{let{status:c,count:n}=t;return c===e&&0!==Number(n)}):null,[J]),[H,Z]=Object(r.useState)(I());Object(r.useEffect)(()=>{if($||t.isPreview)return;const e=V.map(e=>{const c=z(e.slug);if(!(c||C.includes(e.slug)||(n=e.slug,null!=G&&G.stock_status&&G.stock_status.some(e=>{let{status:t=[]}=e;return t.includes(n)}))))return null;var n;const o=c?Number(c.count):0;return{value:e.slug,name:Object(T.decodeEntities)(e.name),label:Object(r.createElement)(x.a,{name:Object(T.decodeEntities)(e.name),count:t.showCounts?o:null}),textLabel:t.showCounts?`${Object(T.decodeEntities)(e.name)} (${o})`:Object(T.decodeEntities)(e.name)}}).filter(e=>!!e);W(e),Z(I())},[t.showCounts,t.isPreview,$,z,C,G.stock_status,V]);const X="single"!==t.selectType,ee=Object(r.useCallback)(e=>{c||(e&&!o&&U(e),(e=>{if(!window)return;if(0===e.length){const e=Object(A.removeQueryArgs)(window.location.href,D);return void(e!==Object(F.e)(window.location.href)&&Object(F.c)(e))}const t=Object(A.addQueryArgs)(window.location.href,{[D]:e.join(",")});t!==Object(F.e)(window.location.href)&&Object(F.c)(t)})(e))},[c,U,o]);Object(r.useEffect)(()=>{t.showFilterButton||ee(C)},[t.showFilterButton,C,ee]);const te=Object(r.useMemo)(()=>K,[K]),ce=Object(g.a)(te),ne=Object(j.a)(ce);Object(r.useEffect)(()=>{N()(ne,ce)||N()(C,ce)||M(ce)},[C,ce,ne]),Object(r.useEffect)(()=>{l||(U(f),a(!0))},[U,l,a,f]);const oe=Object(r.useCallback)(e=>{const t=e=>{const t=Y.find(t=>t.value===e);return t?t.name:null},c=e=>{let{filterAdded:c,filterRemoved:n}=e;const o=c?t(c):null,r=n?t(n):null;o?Object(m.speak)(Object(d.sprintf)(
/* translators: %s stock statuses (for example: 'instock'...) */
Object(d.__)("%s filter added.","woocommerce"),o)):r&&Object(m.speak)(Object(d.sprintf)(
/* translators: %s stock statuses (for example:'instock'...) */
Object(d.__)("%s filter removed.","woocommerce"),r))},n=C.includes(e);if(!X){const t=n?[]:[e];return c(n?{filterRemoved:e}:{filterAdded:e}),void M(t)}if(n){const t=C.filter(t=>t!==e);return c({filterRemoved:e}),void M(t)}const o=[...C,e].sort();c({filterAdded:e}),M(o)},[C,X,Y]);if(!$&&0===Y.length)return n(!1),null;const re="h"+t.headingLevel,le=!t.isPreview&&!p.current||0===Y.length,se=!t.isPreview&&$;if(!Object(h.getSettingWithCoercion)("has_filterable_products",!1,R.a))return n(!1),null;const ae=X?!le&&C.length<Y.length:!le&&0===C.length,ie=Object(r.createElement)(re,{className:"wc-block-stock-filter__title"},t.heading),ue=le?Object(r.createElement)(E.a,null,ie):ie;return n(!0),Object(r.createElement)(r.Fragment,null,!c&&t.heading&&ue,Object(r.createElement)("div",{className:u()("wc-block-stock-filter","style-"+t.displayStyle,{"is-loading":le})},"dropdown"===t.displayStyle?Object(r.createElement)(r.Fragment,null,Object(r.createElement)(S.a,{key:H,className:u()({"single-selection":!X,"is-loading":le}),suggestions:Y.filter(e=>!C.includes(e.value)).map(e=>e.value),disabled:le,placeholder:Object(d.__)("Select stock status","woocommerce"),onChange:e=>{!X&&e.length>1&&(e=e.slice(-1));const t=[e=e.map(e=>{const t=Y.find(t=>t.value===e);return t?t.value:e}),C].reduce((e,t)=>e.filter(e=>!t.includes(e)));if(1===t.length)return oe(t[0]);const c=[C,e].reduce((e,t)=>e.filter(e=>!t.includes(e)));1===c.length&&oe(c[0])},value:C,displayTransform:e=>{const t=Y.find(t=>t.value===e);return t?t.textLabel:e},saveTransform:q,messages:{added:Object(d.__)("Stock filter added.","woocommerce"),removed:Object(d.__)("Stock filter removed.","woocommerce"),remove:Object(d.__)("Remove stock filter.","woocommerce"),__experimentalInvalid:Object(d.__)("Invalid stock filter.","woocommerce")}}),ae&&Object(r.createElement)(s.a,{icon:O.a,size:30})):Object(r.createElement)(_.a,{className:"wc-block-stock-filter-list",options:Y,checked:C,onChange:oe,isLoading:le,isDisabled:se})),Object(r.createElement)("div",{className:"wc-block-stock-filter__actions"},(C.length>0||c)&&!le&&Object(r.createElement)(y.a,{onClick:()=>{M([]),ee([])},screenReaderLabel:Object(d.__)("Reset stock filter","woocommerce")}),t.showFilterButton&&Object(r.createElement)(v.a,{className:"wc-block-stock-filter__button",isLoading:le,disabled:le||se,onClick:()=>ee(C)})))},W=(c(511),c(130)),V=Object(f.withSpokenMessages)(e=>{let{clientId:t,attributes:c,setAttributes:n}=e;const{className:o,heading:l,headingLevel:s,showCounts:a,showFilterButton:i,selectType:m,displayStyle:O}=c,g=Object(b.useBlockProps)({className:u()("wc-block-stock-filter",o)});return Object(r.createElement)(r.Fragment,null,Object(r.createElement)(b.InspectorControls,{key:"inspector"},Object(r.createElement)(f.PanelBody,{title:Object(d.__)("Display Settings","woocommerce")},Object(r.createElement)(f.ToggleControl,{label:Object(d.__)("Display product count","woocommerce"),checked:a,onChange:()=>n({showCounts:!a})}),Object(r.createElement)(f.__experimentalToggleGroupControl,{label:Object(d.__)("Allow selecting multiple options?","woocommerce"),value:m||"multiple",onChange:e=>n({selectType:e}),className:"wc-block-attribute-filter__multiple-toggle"},Object(r.createElement)(f.__experimentalToggleGroupControlOption,{value:"multiple",label:Object(d.__)("Multiple","woocommerce")}),Object(r.createElement)(f.__experimentalToggleGroupControlOption,{value:"single",label:Object(d.__)("Single","woocommerce")})),Object(r.createElement)(f.__experimentalToggleGroupControl,{label:Object(d.__)("Display Style","woocommerce"),value:O,onChange:e=>n({displayStyle:e}),className:"wc-block-attribute-filter__display-toggle"},Object(r.createElement)(f.__experimentalToggleGroupControlOption,{value:"list",label:Object(d.__)("List","woocommerce")}),Object(r.createElement)(f.__experimentalToggleGroupControlOption,{value:"dropdown",label:Object(d.__)("Dropdown","woocommerce")})),Object(r.createElement)(f.ToggleControl,{label:Object(d.__)("Show 'Apply filters' button","woocommerce"),help:Object(d.__)("Products will update when the button is clicked.","woocommerce"),checked:i,onChange:e=>n({showFilterButton:e})}))),Object(r.createElement)(W.a,{clientId:t,attributes:c,setAttributes:n,filterType:"stock-filter"}),Object(r.createElement)("div",g,l&&Object(r.createElement)(p.a,{className:"wc-block-stock-filter__title",headingLevel:s,heading:l,onChange:e=>n({heading:e})}),Object(r.createElement)(f.Disabled,null,Object(r.createElement)(Y,{attributes:c,isEditor:!0}))))});const G={heading:{type:"string",default:Object(d.__)("Filter by stock status","woocommerce")}};Object(l.registerBlockType)(M,{icon:{src:Object(r.createElement)(s.a,{icon:a.a,className:"wc-block-editor-components-block-icon"})},attributes:{...M.attributes,...G},edit:V,save(e){let{attributes:t}=e;const{className:c,showCounts:n,heading:l,headingLevel:s,showFilterButton:a}=t,i={"data-show-counts":n,"data-heading":l,"data-heading-level":s};return a&&(i["data-show-filter-button"]=a),Object(r.createElement)("div",o()({},b.useBlockProps.save({className:u()("is-loading",c)}),i),Object(r.createElement)("span",{"aria-hidden":!0,className:"wc-block-product-stock-filter__placeholder"}))}})},56:function(e,t){e.exports=window.wp.keycodes},58:function(e,t,c){"use strict";c.d(t,"a",(function(){return b})),c.d(t,"b",(function(){return d})),c.d(t,"c",(function(){return p}));var n=c(9),o=c(7),r=c(0),l=c(25),s=c.n(l),a=c(46),i=c(99),u=c(50);const b=e=>{const t=Object(u.a)();e=e||t;const c=Object(o.useSelect)(t=>t(n.QUERY_STATE_STORE_KEY).getValueForQueryContext(e,void 0),[e]),{setValueForQueryContext:l}=Object(o.useDispatch)(n.QUERY_STATE_STORE_KEY);return[c,Object(r.useCallback)(t=>{l(e,t)},[e,l])]},d=(e,t,c)=>{const l=Object(u.a)();c=c||l;const s=Object(o.useSelect)(o=>o(n.QUERY_STATE_STORE_KEY).getValueForQueryKey(c,e,t),[c,e]),{setQueryValue:a}=Object(o.useDispatch)(n.QUERY_STATE_STORE_KEY);return[s,Object(r.useCallback)(t=>{a(c,e,t)},[c,e,a])]},p=(e,t)=>{const c=Object(u.a)();t=t||c;const[n,o]=b(t),l=Object(a.a)(n),d=Object(a.a)(e),p=Object(i.a)(d),f=Object(r.useRef)(!1);return Object(r.useEffect)(()=>{s()(p,d)||(o(Object.assign({},l,d)),f.current=!0)},[l,d,p,o]),f.current?[n,o]:[e,o]}},7:function(e,t){e.exports=window.wp.data},75:function(e,t){e.exports=window.wp.dom},8:function(e,t){e.exports=window.wp.blocks},88:function(e,t,c){"use strict";c.d(t,"a",(function(){return n}));const n=e=>"boolean"==typeof e},9:function(e,t){e.exports=window.wc.wcBlocksData},99:function(e,t,c){"use strict";c.d(t,"a",(function(){return o}));var n=c(0);function o(e,t){const c=Object(n.useRef)();return Object(n.useEffect)(()=>{c.current===e||t&&!t(e,c.current)||(c.current=e)},[e,t]),c.current}}});