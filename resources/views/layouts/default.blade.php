<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
        <title>{{$pageTitle}}</title>
        <meta name="description" content="{{Config('app.keywords')}}">
        <meta name="keywords" content="{{Config('app.keywords')}}">
        <meta name="author" content="{{Config('app.author')}}">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton|Buenard:400,700" rel="stylesheet">

        @if($pageTitle == Config('app.name'))
        <link href="{{asset('home/css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/demo.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/style-mohe.css')}}" rel="stylesheet" type="text/css">

        @elseif($pageTitle == 'About Us | '.Config('app.name'))
        <link href="{{asset('home/css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/demo.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/style-mohe.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('about/css/base.css')}}" rel="stylesheet" type="text/css">

        @elseif($pageTitle == 'Service | '.Config('app.name'))
        <link href="{{asset('home/css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/demo.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/style-mohe.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('services/css/base.css')}}" rel="stylesheet" type="text/css">

        @elseif($pageTitle == 'Portfolio | '.Config('app.name'))
        <link href="{{asset('home/css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/demo.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/style-mohe.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('portfolio/css/base.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('portfolio/css/uncover.css')}}" rel="stylesheet" type="text/css">

        @else
        <link href="{{asset('home/css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/demo.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('menu/css/style-mohe.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('detail_post/css/base.css')}}" rel="stylesheet" type="text/css">
        @endif

        <link rel="icon" href="{{asset('favicon.ico')}}">
        <script>
    		document.documentElement.className = "js";
    		var supportsCssVars = function() { var e, t = document.createElement("style"); return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e };
    		supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    		</script>
        <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
        @yield('style')
    </head>
    <body onResize="refresh()"  class="demo-3">
          <div id="loader"></div>
            <div id="imglogo">
              <a href="{{ url('/') }}" id="imglogo" alt="{{$appName}}" title="{{$appName}}">
                <img src="{{ asset('img/workersdesign.svg') }}">
              </a>
            </div>
              <a id="imgname" href="{{ url('/') }}" alt="{{$appName}}" title="{{$appName}}">
                APP, WEB & DESIGN DEVELOPMENT SERVICES
              </a>
            <div class="content-hamburger content--demo-5">
      				<div class="hamburger hamburger--demo-5 js-hover">
      					<div class="hamburger__line hamburger__line--01">
      						<div class="hamburger__line-in hamburger__line-in--01 hamburger__line-in--demo-5"></div>
      					</div>
      					<div class="hamburger__line hamburger__line--02">
      						<div class="hamburger__line-in hamburger__line-in--02 hamburger__line-in--demo-5"></div>
      					</div>
      					<div class="hamburger__line hamburger__line--03">
      						<div class="hamburger__line-in hamburger__line-in--03 hamburger__line-in--demo-5"></div>
      					</div>
      					<div class="hamburger__line hamburger__line--cross01">
      						<div class="hamburger__line-in hamburger__line-in--cross01 hamburger__line-in--demo-5"></div>
      					</div>
      					<div class="hamburger__line hamburger__line--cross02">
      						<div class="hamburger__line-in hamburger__line-in--cross02 hamburger__line-in--demo-5"></div>
      					</div>
      				</div>
      				<div class="global-menu">
                  <nav class="menu menu--mohe">
                    <a class="global-menu__item global-menu__item--demo-5 menu__item" href="{{ url('/')}}">
          						<span class="menu__item-name">Home</span>
          						<span class="global-menu__item global-menu__item--demo-5  menu__item-label">Interactive Background</span>
          					</a>
                    <a class="global-menu__item global-menu__item--demo-5 menu__item" href="{{ url('/about.html')}}">
          						<span class="menu__item-name">About</span>
          						<span class="global-menu__item global-menu__item--demo-5  menu__item-label">Get in touch with us</span>
          					</a>
          					<a class="global-menu__item global-menu__item--demo-5 menu__item" href="{{ url('/service.html')}}">
          						<span class="menu__item-name">Service</span>
          						<span class="global-menu__item global-menu__item--demo-5  menu__item-label">View all our services</span>
          					</a>
          					<a class="global-menu__item global-menu__item--demo-5 menu__item" href="{{ url('/portfolio.html')}}">
          						<span class="menu__item-name">Portfolio</span>
          						<span class="global-menu__item global-menu__item--demo-5 menu__item-label">View all our portfolios</span>
          					</a>
          				</nav>
      				</div>
              <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
      					<defs>
      						<linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
      							<stop offset="0%"   stop-color="#000000"/>
      							<stop offset="100%" stop-color="#333333"/>
      						</linearGradient>
                  <linearGradient id="gradient2" x1="0%" y1="0%" x2="0%" y2="100%">
      							<stop offset="0%"   stop-color="#00ccff"/>
      							<stop offset="100%" stop-color="#008fb3"/>
      						</linearGradient>
                  <linearGradient id="gradient3" x1="0%" y1="0%" x2="0%" y2="100%">
      							<stop offset="0%"   stop-color="#ffffff"/>
      							<stop offset="100%" stop-color="#eeefff"/>
      						</linearGradient>
                  <linearGradient id="gradient4" x1="0%" y1="0%" x2="0%" y2="100%">
      							<stop offset="0%"   stop-color="#ffb600"/>
      							<stop offset="100%" stop-color="#ffb600"/>
      						</linearGradient>
      					</defs>
      					<path class="shape-overlays__path"></path>
      					<path class="shape-overlays__path"></path>
      					<path class="shape-overlays__path"></path>
                <path class="shape-overlays__path"></path>
      				</svg>
      			</div>
      @yield('content')
      <a href="{{ url('/about.html')}}" alt="about" title="about" id="rotate-left">ABOUT</a>
      <a href="mailto:info@workersdesign.co?subject=Hello%20Workers%20Design" alt="contact" title="contact" id="rotate-right">CONTACT</a>

      @if($pageTitle == Config('app.name'))
      <footer class="footer">
        <div class="footer-left">
          <div class="cta">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 80 80" xml:space="preserve">
                <circle cx="40" cy="40" r="36" fill="transparent" stroke="#fff" stroke-width="2"></circle>
                <circle class="another-circle" transform="rotate(-90 40 40)" cx="40" cy="40" r="36" fill="transparent" stroke="#f0f0f0" stroke-width="5"></circle>
              </svg>
          </div>
        </div>
        <div class="footer-right">
          <a class="social-media" href="https://plus.google.com/106961463281141574375" alt="Google Plus" title="Google Plus" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.37 72.37"><defs><style>.cls-1{fill:#ffb600;}</style></defs><title>Asset 10</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="google-plus-circle-icon" class="cls-1" d="M39.16,49.3c0,3.55-2.89,6.33-8.87,6.33-4.67,0-8-3-8-6.51s4-6.5,8.64-6.44C36.07,42.68,39.16,45.91,39.16,49.3ZM72.37,36.18A36.19,36.19,0,1,1,36.18,0,36.19,36.19,0,0,1,72.37,36.18ZM43.19,48.88c0-3.28-1.23-5.42-4.94-8.2s-4.68-4.3-1.09-7.07a7.88,7.88,0,0,0,3.44-6.23c0-2.8-1.14-5.35-3.3-6.58h3.06L43,18.07H31.31c-7.27,0-10.83,4.35-10.83,9.15S23.84,36,30.4,36a4,4,0,0,0,1.06,5.31c-11.21,0-13.61,4.92-13.61,8.71,0,4.91,5.64,7.82,12.41,7.82C39.51,57.81,43.19,52.91,43.19,48.88ZM58.38,24H53V18.6H50.32V24H45v2.68h5.37V32H53V26.66h5.38ZM35.93,27.56c-.55-4.12-3.23-7.51-6.37-7.6s-5.24,3.06-4.7,7.18,3.52,7,6.66,7.1S36.47,31.68,35.93,27.56Z"/></g></g></svg>
          </a>
          <a class="social-media" href="https://www.instagram.com/workersdesign/" alt="Instagram" title="Instagram" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><defs><style>.cls-1{fill:#ffb600;}</style></defs><title>Asset 9</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="instagram-circle-icon" class="cls-1" d="M53.11,20.28v4.43A1.28,1.28,0,0,1,51.82,26H47.5a1.28,1.28,0,0,1-1.29-1.28V20.28A1.28,1.28,0,0,1,47.5,19h4.32A1.28,1.28,0,0,1,53.11,20.28ZM36.52,42.08a5.9,5.9,0,1,0-5.89-5.9A5.9,5.9,0,0,0,36.52,42.08ZM72,36A36,36,0,1,1,36,0,36,36,0,0,1,72,36ZM56.77,30.19H44.94a10.36,10.36,0,1,1-16.88,0H16.28V48.34a8,8,0,0,0,8,8H48.76a8,8,0,0,0,8-8Zm-20.27,14a8,8,0,0,0,5.25-14,7.5,7.5,0,0,0-2-1.27,7.88,7.88,0,0,0-6.58,0,7.72,7.72,0,0,0-2,1.27,8,8,0,0,0,5.26,14ZM56.77,23.66a8,8,0,0,0-8-8H26.88v10.1H25.24V15.65H24.1V25.75H22.46V15.86a8.58,8.58,0,0,0-1.15.37v9.52H19.66V17.12a8,8,0,0,0-3.38,6.54v5.26H29.12a10.36,10.36,0,0,1,14.76,0H56.77V23.66Z"/></g></g></svg>
          </a>
          <a class="social-media" href="https://www.facebook.com/workersdesign/" alt="Facebook" title="Facebook" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><defs><style>.cls-1{fill:#ffb600;}</style></defs><title>Asset 11</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="facebook-circle-icon" class="cls-1" d="M36,0A36,36,0,1,0,72,36,36,36,0,0,0,36,0ZM46.66,21.18h-5c-1.77,0-2.14.73-2.14,2.56v4.44h7.18L46,36H39.48V59.26h-9.3V36.08H25.35v-7.9h4.83V22c0-5.83,3.12-8.88,10-8.88h6.44v8.09Z"/></g></g></svg>
          </a>
        </div>
      </footer>
      @endif

      <script type="text/javascript"  src="{{ asset('home/js/jquery-2.1.3.min.js') }}"></script>
      @if($pageTitle == Config('app.name'))
      <script>$("#loader").delay(600).fadeOut(1200);</script>
      <script type="text/javascript"  src="{{ asset('home/js/lib/DAT.GUI.min.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('home/js/lib/RAF.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('home/js/recursion.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('home/js/index.js') }}"></script>

      @elseif($pageTitle == 'About Us | '.Config('app.name'))
      <script>document.getElementById("loader").style.display = "none";</script>
      <script type="text/javascript"src="{{ asset('about/js/blotter.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('about/js/liquidDistortMaterial.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('about/js/index.js') }}"></script>
      <script type="text/javascript"src="{{ asset('about/js/jquery-3.1.1.slim.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('about/js/typewrite.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('about/js/imagesloaded.pkgd.min.js') }}"></script>
      <script type="text/javascript"src="{{ asset('about/js/TweenMax.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('about/js/demo.js') }}"></script>

      @elseif($pageTitle == 'Service | '.Config('app.name'))
      <script>$("#loader").delay(600).fadeOut(1200);</script>
      <script type="text/javascript"  src="{{ asset('about/js/imagesloaded.pkgd.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('about/js/TweenMax.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('services/js/demo.js') }}"></script>

      @elseif($pageTitle == 'Portfolio | '.Config('app.name'))
      <script>$("#loader").delay(600).fadeOut(1200);</script>
      <script type="text/javascript"  src="{{ asset('about/js/imagesloaded.pkgd.min.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('detail_post/js/anime.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('portfolio/js/uncover.js') }}"></script>
      <script type="text/javascript" src="{{ asset('portfolio/js/demo3.js') }}"></script>

      @else
      <script>$("#loader").delay(600).fadeOut(1200);</script>
      <script type="text/javascript"  src="{{ asset('detail_post/js/demo.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('about/js/imagesloaded.pkgd.min.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('detail_post/js/anime.min.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('detail_post/js/demo4.js') }}"></script>
      @endif

      <script type="text/javascript"  src="{{ asset('menu/js/demo5.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('menu/js/easings.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('menu/js/demo.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('menu/js/charming.min.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('menu/js/anime.min.js') }}"></script>
      <script type="text/javascript"  src="{{ asset('menu/js/demo-mohe.js') }}"></script>
      <script>
        window.onresize = function() {
          location.reload();
        }
      </script>
    </body>
</html>
