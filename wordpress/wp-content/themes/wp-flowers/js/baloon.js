function CreateBaloon(){baloon=document.createElement("DIV"),baloon.setAttribute("id","baloon"),baloonHeader=document.createElement("DIV"),baloonHeader.setAttribute("id","baloonHeader"),baloonHeader.setAttribute("class","direct"),baloonBody=document.createElement("DIV"),baloonBody.setAttribute("id","baloonBody"),baloonFooter=document.createElement("DIV"),baloonFooter.setAttribute("id","baloonFooter"),baloonBody.innerText="baloon",baloon.appendChild(baloonHeader),baloon.appendChild(baloonBody),baloon.appendChild(baloonFooter),baloon.onmouseover=function(e){this.style.filter="Alpha(Opacity='100')",this.style.cursor="pointer",this.style.MozOpacity="1"},baloon.onmouseout=function(e){this.style.filter="Alpha(Opacity='75')",this.style.cursor="auto",this.style.MozOpacity="0.75"},baloon.onselectstart=function(e){return!1},baloon.onclick=function(e){this.style.display="none"},document.body.appendChild(baloon),window.onresize=function(e){document.getElementById("baloon").style.display="none"}}function ShowBaloon(e){baloon=document.getElementById("baloon"),document.getElementById("baloonBody").innerHTML=e.getAttribute("data-notice")&&e.getAttribute("data-notice").length?e.getAttribute("data-notice"):"ERROR",baloon.style.display="block";var t=0,n=0;o=e;do t+=o.offsetLeft,n+=o.offsetTop;while(o=o.offsetParent);return xwidth=e.offsetWidth?e.offsetWidth:e.style.pixelWidth,xheight=e.offsetHeight?e.offsetHeight:e.style.pixelHeight,bwidth=baloon.offsetWidth?baloon.offsetWidth:baloon.style.pixelWidth,w=window,xbody="CSS1Compat"==document.compatMode?w.document.documentElement:w.document.body,dwidth=xbody.clientWidth?xbody.clientWidth:w.innerWidth,bwidth=baloon.offsetWidth?baloon.offsetWidth:baloon.style.pixelWidth,flip=!(xwidth-10+t+bwidth<dwidth),baloon.style.top=xheight-10+n+"px",baloon.style.left=t+xwidth-(flip?bwidth:0)-25+"px",document.getElementById("baloonHeader").className=flip?"baloonHeaderFlip":"baloonHeaderDirect",e.focus(),!1}function ValidateForms(){for(i=0;i<document.forms.length;i++)document.forms[i].onsubmit||(document.forms[i].onsubmit=function(e){for(var t=e?e.target:window.event.srcElement,o=0;o<t.elements.length;o++){var n=t.elements[o].value;switch(t.elements[o].type){case"text":case"password":case"textarea":if(pattern=t.elements[o].getAttribute("data-format"),pattern)switch(pattern){case"string":if(!n.length)return ValidateNotice(t.elements[o]);break;case"number":if(!isNumeric(n))return ValidateNotice(t.elements[o]);break;case"url":if(!isUrl(n))return ValidateNotice(t.elements[o]);break;case"email":if(!isEmail(n))return ValidateNotice(t.elements[o]);break;default:if(!isPattern(pattern,n))return ValidateNotice(t.elements[o])}break;case"radio":case"checkbox":if(min=t.elements[o].getAttribute("min")?t.elements[o].getAttribute("min"):0,max=t.elements[o].getAttribute("max")?t.elements[o].getAttribute("max"):document.getElementsByName(t.elements[o].getAttribute("name")).length,min||max){for(var a=document.getElementsByName(t.elements[o].getAttribute("name")),i=0,l=0;l<a.length;l++)a[l].checked&&i++;if(i<min||i>max)return ValidateNotice(t.elements[o])}break;case"select-one":case"select-multiple":if(selected=t.elements[o].options[t.elements[o].selectedIndex],selected&&selected.getAttribute("notselected"))return ValidateNotice(t.elements[o]);break;case"file":break;case"image":case"button":case"submit":case"reset":}}return!0})}function isUrl(e){return isPattern("^https?:\\/\\/(?:[a-z0-9_-]{1,32}(?::[a-z0-9_-]{1,32})?@)?(?:(?:[a-z0-9-]{1,128}\\.)+(?:com|net|org|mil|edu|arpa|gov|biz|info|aero|inc|name|[a-z]{2})|(?!0)(?:(?!0[^.]|255)[0-9]{1,3}\\.){3}(?!0|255)[0-9]{1,3})(?:\\/[a-z0-9.,_@%&?+=\\~\\/-]*)?(?:#[^ '\"&<>]*)?$",e.toLowerCase())}function isNumeric(e){return isPattern("^[0-9]+$",e)}function isInteger(e){return isNumeric(e)}function isFloat(e){return isPattern("^[1-9]?[0-9]+(\\.[0-9]+)?$",e)}function isEmail(e){return isPattern("^([a-z0-9_-]+)(\\.[a-z0-9_-]+)*@((([a-z0-9-]+\\.)+(com|net|org|mil|edu|gov|arpa|info|biz|inc|name|[a-z]{2}))|([0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}))$",e.toLowerCase())}function isPattern(e,t){if(t.length&&e.length){var o=new RegExp(e,"g");return o.test(t)}return!1}function ValidateNotice(e){return ShowBaloon(e),!1}function init_balloon(){ValidateForms(),CreateBaloon()}window.attachEvent?window.attachEvent("onload",init_balloon):window.addEventListener?window.addEventListener("DOMContentLoaded",init_balloon,!1):document.addEventListener("DOMContentLoaded",init_balloon,!1);
//# sourceMappingURL=maps/baloon.js.map