$(document).ready(function(){

  var annotate = RoughNotation.annotate;
  let annotation = null;

  if ($('#deck').length) {
    // FLIP
    $('#flipper').bind('click', function(){
      $('.flash-card.current').toggleClass('flip');
    });

    // CYCLE
    $('#deck').cycle({
      after:   onAfter,
      before:  onBefore,
      fx:      'shuffle',
      next:    '#next',
      prev:    '#prev',
      shuffle: {
        top:   -300,
        left:  20
      },
      speed:   'fast',
      timeout: 0,
      width: 0,
      containerResize: 0,
      slideResize: 0
    });
    function onBefore(){
      $(this).parent().find('.current').removeClass('current');
    }
    function onAfter(){
      $(this).addClass('current');

      var cardNum = $(this).data("card-number");

      $("#current-card").html( cardNum );
    }
    // Keyboard Nav
    $(document).keydown(function (e) {
      var keyCode = e.keyCode || e.which;
      key = {left: 37, up: 38, right: 39, down: 40, enter: 13, space: 32};

      if (!!annotation) {
        annotation.remove();
      }

      switch (keyCode) {
        case key.left:
          $('.current').removeClass('flip');
          $('#deck').cycle('prev');
          e.preventDefault();
          break;
        case key.right:
          $('.current').removeClass('flip');
          $('#deck').cycle('next');
          e.preventDefault();
          break;
        case key.up:
        case key.down:
        case key.enter:
        case key.space:
          $('.current').toggleClass('flip');

          if ($(".current u").length || $(".current b").length) {
            showTextEffect();
          }
          e.preventDefault();

          break;
      }
    });
  }

  function showTextEffect() {

    setTimeout(function() { 
      if ($(".current u").length) {
        annotation = annotate(document.querySelector(".current u"), { type: 'underline', color: 'red' })
      } 

      if ($(".current .side_two b").length) {
        annotation = annotate(document.querySelector(".current b"), { type: 'highlight', color: '#FFD54F' })
      }       

      annotation.show();  
    }, 800);
  }     
});

var RoughNotation=function(t){"use strict";const e="http://www.w3.org/2000/svg";class s{constructor(t){this.seed=t}next(){return this.seed?(2**31-1&(this.seed=Math.imul(48271,this.seed)))/2**31:Math.random()}}function n(t,e,s,n,i){return{type:"path",ops:u(t,e,s,n,i)}}function i(t,e){return function(t,e,s){const i=(t||[]).length;if(i>2){const n=[];for(let e=0;e<i-1;e++)n.push(...u(t[e][0],t[e][1],t[e+1][0],t[e+1][1],s));return e&&n.push(...u(t[i-1][0],t[i-1][1],t[0][0],t[0][1],s)),{type:"path",ops:n}}return 2===i?n(t[0][0],t[0][1],t[1][0],t[1][1],s):{type:"path",ops:[]}}(t,!0,e)}function o(t,e,s,n,o){return i([[t,e],[t+s,e],[t+s,e+n],[t,e+n]],o)}function h(t,e,s,n,i){return function(t,e,s,n){const[i,o]=d(n.increment,t,e,n.rx,n.ry,1,n.increment*a(.1,a(.4,1,s),s),s);let h=p(i,null,s);if(!s.disableMultiStroke){const[i]=d(n.increment,t,e,n.rx,n.ry,1.5,0,s),o=p(i,null,s);h=h.concat(o)}return{estimatedPoints:o,opset:{type:"path",ops:h}}}(t,e,i,function(t,e,s){const n=Math.sqrt(2*Math.PI*Math.sqrt((Math.pow(t/2,2)+Math.pow(e/2,2))/2)),i=Math.max(s.curveStepCount,s.curveStepCount/Math.sqrt(200)*n),o=2*Math.PI/i;let h=Math.abs(t/2),r=Math.abs(e/2);const a=1-s.curveFitting;return h+=c(h*a,s),r+=c(r*a,s),{increment:o,rx:h,ry:r}}(s,n,i)).opset}function r(t){return t.randomizer||(t.randomizer=new s(t.seed||0)),t.randomizer.next()}function a(t,e,s,n=1){return s.roughness*n*(r(s)*(e-t)+t)}function c(t,e,s=1){return a(-t,t,e,s)}function u(t,e,s,n,i,o=!1){const h=o?i.disableMultiStrokeFill:i.disableMultiStroke,r=l(t,e,s,n,i,!0,!1);if(h)return r;const a=l(t,e,s,n,i,!0,!0);return r.concat(a)}function l(t,e,s,n,i,o,h){const a=Math.pow(t-s,2)+Math.pow(e-n,2),u=Math.sqrt(a);let l=1;l=u<200?1:u>500?.4:-.0016668*u+1.233334;let p=i.maxRandomnessOffset||0;p*p*100>a&&(p=u/10);const d=p/2,f=.2+.2*r(i);let g=i.bowing*i.maxRandomnessOffset*(n-e)/200,m=i.bowing*i.maxRandomnessOffset*(t-s)/200;g=c(g,i,l),m=c(m,i,l);const _=[],w=()=>c(d,i,l),v=()=>c(p,i,l);return o&&(h?_.push({op:"move",data:[t+w(),e+w()]}):_.push({op:"move",data:[t+c(p,i,l),e+c(p,i,l)]})),h?_.push({op:"bcurveTo",data:[g+t+(s-t)*f+w(),m+e+(n-e)*f+w(),g+t+2*(s-t)*f+w(),m+e+2*(n-e)*f+w(),s+w(),n+w()]}):_.push({op:"bcurveTo",data:[g+t+(s-t)*f+v(),m+e+(n-e)*f+v(),g+t+2*(s-t)*f+v(),m+e+2*(n-e)*f+v(),s+v(),n+v()]}),_}function p(t,e,s){const n=t.length,i=[];if(n>3){const o=[],h=1-s.curveTightness;i.push({op:"move",data:[t[1][0],t[1][1]]});for(let e=1;e+2<n;e++){const s=t[e];o[0]=[s[0],s[1]],o[1]=[s[0]+(h*t[e+1][0]-h*t[e-1][0])/6,s[1]+(h*t[e+1][1]-h*t[e-1][1])/6],o[2]=[t[e+1][0]+(h*t[e][0]-h*t[e+2][0])/6,t[e+1][1]+(h*t[e][1]-h*t[e+2][1])/6],o[3]=[t[e+1][0],t[e+1][1]],i.push({op:"bcurveTo",data:[o[1][0],o[1][1],o[2][0],o[2][1],o[3][0],o[3][1]]})}if(e&&2===e.length){const t=s.maxRandomnessOffset;i.push({op:"lineTo",data:[e[0]+c(t,s),e[1]+c(t,s)]})}}else 3===n?(i.push({op:"move",data:[t[1][0],t[1][1]]}),i.push({op:"bcurveTo",data:[t[1][0],t[1][1],t[2][0],t[2][1],t[2][0],t[2][1]]})):2===n&&i.push(...u(t[0][0],t[0][1],t[1][0],t[1][1],s));return i}function d(t,e,s,n,i,o,h,r){const a=[],u=[],l=c(.5,r)-Math.PI/2;u.push([c(o,r)+e+.9*n*Math.cos(l-t),c(o,r)+s+.9*i*Math.sin(l-t)]);for(let h=l;h<2*Math.PI+l-.01;h+=t){const t=[c(o,r)+e+n*Math.cos(h),c(o,r)+s+i*Math.sin(h)];a.push(t),u.push(t)}return u.push([c(o,r)+e+n*Math.cos(l+2*Math.PI+.5*h),c(o,r)+s+i*Math.sin(l+2*Math.PI+.5*h)]),u.push([c(o,r)+e+.98*n*Math.cos(l+h),c(o,r)+s+.98*i*Math.sin(l+h)]),u.push([c(o,r)+e+.9*n*Math.cos(l+.5*h),c(o,r)+s+.9*i*Math.sin(l+.5*h)]),[u,a]}const f={maxRandomnessOffset:2,roughness:1.5,bowing:1,stroke:"#000",strokeWidth:1.5,curveTightness:0,curveFitting:.95,curveStepCount:9,fillStyle:"hachure",fillWeight:-1,hachureAngle:-41,hachureGap:-1,dashOffset:-1,dashGap:-1,zigzagOffset:-1,seed:0,combineNestedSvgPaths:!1,disableMultiStroke:!1,disableMultiStrokeFill:!1},g=JSON.parse(JSON.stringify(f));g.disableMultiStroke=!0;const m=JSON.parse(JSON.stringify(f));m.roughness=3,m.disableMultiStroke=!0;class _{constructor(t,e){this._state="unattached",this._resizing=!1,this._animationGroupDelay=0,this._resizeListener=()=>{this._resizing||(this._resizing=!0,setTimeout(()=>{if(this._resizing=!1,"showing"===this._state){const t=this.computeSize();t&&this.hasRectChanged(t)&&this.show()}},400))},this._e=t,this._config=e,this.attach()}get config(){return this._config}attach(){if("unattached"===this._state&&this._e.parentElement){!function(){if(!window.__rough_notation_keyframe_styles){const t=window.__rough_notation_keyframe_styles=document.createElement("style");t.textContent="\n    @keyframes rough-notation-dash {\n      to {\n        stroke-dashoffset: 0;\n      }\n    }\n    ",document.head.appendChild(t)}}();const t=this._svg=document.createElementNS(e,"svg"),s=t.style;s.position="absolute",s.top="0",s.left="0",s.overflow="visible",s.pointerEvents="none",s.width="100px",s.height="100px";const n="highlight"===this._config.type;if(this._e.insertAdjacentElement(n?"beforebegin":"afterend",t),this._state="not-showing",n){const t=window.getComputedStyle(this._e).position;(!t||"static"===t)&&(this._e.style.position="relative")}this.attachListeners()}}detachListeners(){window.removeEventListener("resize",this._resizeListener),this._resizeObserver&&this._resizeObserver.unobserve(this._e)}attachListeners(){this.detachListeners(),window.addEventListener("resize",this._resizeListener,{passive:!0}),!this._resizeObserver&&"ResizeObserver"in window&&(this._resizeObserver=new window.ResizeObserver(t=>{for(const e of t){let t=!0;if(e.contentRect){const s=this.computeSizeWithBounds(e.contentRect);s&&!this.hasRectChanged(s)&&(t=!1)}t&&this._resizeListener()}})),this._resizeObserver&&this._resizeObserver.observe(this._e)}sameInteger(t,e){return Math.round(t)===Math.round(e)}hasRectChanged(t){return!this._lastSize||!t||!(this.sameInteger(t.x,this._lastSize.x)&&this.sameInteger(t.y,this._lastSize.y)&&this.sameInteger(t.w,this._lastSize.w)&&this.sameInteger(t.h,this._lastSize.h))}isShowing(){return"not-showing"!==this._state}show(){switch(this._state){case"unattached":break;case"showing":this.hide(),this.show();break;case"not-showing":this.attach(),this._svg&&this.render(this._svg)}}hide(){if(this._svg)for(;this._svg.lastChild;)this._svg.removeChild(this._svg.lastChild);this._state="not-showing"}remove(){this._svg&&this._svg.parentElement&&this._svg.parentElement.removeChild(this._svg),this._svg=void 0,this._state="unattached",this.detachListeners()}render(t){const s=this.computeSize();s&&(!function(t,s,i,r){const a=[];let c=i.strokeWidth||2;const u=0===i.padding?0:i.padding||5,l=void 0===i.animate||!!i.animate;switch(i.type){case"underline":{const t=s.y+s.h+u;a.push(n(s.x,t,s.x+s.w,t,g)),a.push(n(s.x+s.w,t,s.x,t,g));break}case"strike-through":{const t=s.y+s.h/2;a.push(n(s.x,t,s.x+s.w,t,g)),a.push(n(s.x+s.w,t,s.x,t,g));break}case"box":{const t=s.x-u,e=s.y-u,n=s.w+2*u,i=s.h+2*u;a.push(o(t,e,n,i,g)),a.push(o(t,e,n,i,g));break}case"crossed-off":{const t=s.x,e=s.y,i=t+s.w,o=e+s.h;a.push(n(t,e,i,o,g)),a.push(n(i,o,t,e,g)),a.push(n(i,e,t,o,g)),a.push(n(t,o,i,e,g));break}case"circle":{const t=2*u,e=s.w+2*t,n=s.h+2*t,i=s.x-t+e/2,o=s.y-t+n/2;a.push(h(i,o,e,n,f));break}case"highlight":{c=.95*s.h;const t=s.y+s.h/2;a.push(n(s.x,t,s.x+s.w,t,m)),a.push(n(s.x+s.w,t,s.x,t,m));break}}if(a.length){const s=function(t){const e=[];for(const s of t){let t="";for(const n of s.ops){const s=n.data;switch(n.op){case"move":t.trim()&&e.push(t.trim()),t=`M${s[0]} ${s[1]} `;break;case"bcurveTo":t+=`C${s[0]} ${s[1]}, ${s[2]} ${s[3]}, ${s[4]} ${s[5]} `;break;case"lineTo":t+=`L${s[0]} ${s[1]} `}}t.trim()&&e.push(t.trim())}return e}(a),n=[],o=[];let h=0;const u=0===i.animationDuration?0:i.animationDuration||800,p=(0===i.animationDelay?0:i.animationDelay||0)+(r||0);for(const r of s){const s=document.createElementNS(e,"path");if(s.setAttribute("d",r),s.setAttribute("fill","none"),s.setAttribute("stroke",i.color||"currentColor"),s.setAttribute("stroke-width",""+c),l){const t=s.getTotalLength();n.push(t),h+=t}t.appendChild(s),o.push(s)}if(l){let t=0;for(let e=0;e<o.length;e++){const s=o[e],i=n[e],r=h?u*(i/h):0,a=p+t,c=s.style;c.strokeDashoffset=""+i,c.strokeDasharray=""+i,c.animation=`rough-notation-dash ${r}ms ease-out ${a}ms forwards`,t+=r}}}}(t,s,this._config,this._animationGroupDelay),this._lastSize=s,this._state="showing")}computeSize(){return this.computeSizeWithBounds(this._e.getBoundingClientRect())}computeSizeWithBounds(t){if(this._svg){const e=this._svg.getBoundingClientRect(),s=t;return{x:(s.x||s.left)-(e.x||e.left),y:(s.y||s.top)-(e.y||e.top),w:s.width,h:s.height}}return null}}return t.annotate=function(t,e){return new _(t,e)},t.annotationGroup=function(t){let e=0;for(const s of t){const t=s;t._animationGroupDelay=e;e+=0===t.config.animationDuration?0:t.config.animationDuration||800}const s=[...t];return{show(){for(const t of s)t.show()},hide(){for(const t of s)t.hide()}}},t}({});