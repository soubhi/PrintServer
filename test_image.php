<!DOCTYPE html>

<html lang="en-US">
<head>
<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width" />


<title>JavaScript Image Scroller |  Responsive jQuery Carousel, WordPress Image Scroller</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="https://amazingcarousel.com/wp-content/themes/twentyeleven/style.css" />
<!--[if lt IE 9]>
<script src="https://amazingcarousel.com/wp-content/themes/twentyeleven/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Amazing Carousel &raquo; Feed" href="https://amazingcarousel.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Amazing Carousel &raquo; Comments Feed" href="https://amazingcarousel.com/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/amazingcarousel.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='wonderplugin-popup-engine-css-css'  href='https://amazingcarousel.com/wp-content/plugins/wonderplugin-popup/engine/wonderplugin-popup-engine.css?ver=4.9.8' type='text/css' media='all' />
<!-- This site uses the Google Analytics by Yoast plugin v5.4.6 - Universal disabled - https://yoast.com/wordpress/plugins/google-analytics/ -->
<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-42549293-1']);
	_gaq.push(['_gat._forceSSL']);
	_gaq.push(['_trackPageview']);

	(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();

</script>
<!-- / Google Analytics by Yoast -->
<script type='text/javascript' src='https://amazingcarousel.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://amazingcarousel.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://amazingcarousel.com/wp-content/uploads/amazingcarousel/sharedengine/amazingcarousel.js?ver=1.2'></script>
<script type='text/javascript' src='https://amazingcarousel.com/wp-content/plugins/wonderplugin-lightbox/engine/wonderpluginlightbox.js?ver=2.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wonderpluginpopup_ajaxobject = {"ajaxurl":"https:\/\/amazingcarousel.com\/wp-admin\/admin-ajax.php","nonce":"1f176817fd"};
/* ]]> */
</script>
<script type='text/javascript' src='https://amazingcarousel.com/wp-content/plugins/wonderplugin-popup/engine/wonderplugin-popup-engine.js?ver=4.6C'></script>
<link rel='https://api.w.org/' href='https://amazingcarousel.com/wp-json/' />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://amazingcarousel.com/wp-includes/wlwmanifest.xml" /> 

<link rel="canonical" href="https://amazingcarousel.com/examples/javascript-image-scroller-id9/" />
<link rel='shortlink' href='https://amazingcarousel.com/?p=2197' />
<link rel="alternate" type="application/json+oembed" href="https://amazingcarousel.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Famazingcarousel.com%2Fexamples%2Fjavascript-image-scroller-id9%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://amazingcarousel.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Famazingcarousel.com%2Fexamples%2Fjavascript-image-scroller-id9%2F&#038;format=xml" />
<style type="text/css" id="syntaxhighlighteranchor"></style>

</head>

<body class="page-template page-template-demopage page-template-demopage-php page page-id-2197 page-child parent-pageid-2039 single-author singular two-column right-sidebar">

<div id="page" class="hfeed">
	<header id="branding" role="banner">

	</header><!-- #branding -->


	<div id="main">
		<div id="primary">
			<div class="demo-title">
				<h1>JavaScript Image Scroller</h1>
			</div>
                        
			<div class="demo-slider"><link rel="stylesheet" type="text/css" media="all" href="https://amazingcarousel.com/wp-content/uploads/amazingcarousel/9/carouselengine/initcarousel.css" />

<div id="amazingcarousel-container-9">
    <div id="amazingcarousel-9" style="display:block;position:relative;width:100%;max-width:240px;margin:0px auto 0px;">
        <div class="amazingcarousel-list-container" style="overflow:hidden;">
            <ul class="amazingcarousel-list">
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="media/ailab_2013.png" title="Golden Wheat Field"  class="html5lightbox" data-group="amazingcarousel-9"><img src="media/ailab_2013.png"  alt="Golden Wheat Field" /></a></div>
<div class="amazingcarousel-text">
	<div class="amazingcarousel-title">Golden Wheat Field</div>
	<div class="amazingcarousel-description">Waving in the sunlight all day</div>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="media/ailab_2013.png" title="Autumn"  class="html5lightbox" data-group="amazingcarousel-9"><img src="media/ailab_2013.png"  alt="Autumn" /></a></div>
<div class="amazingcarousel-text">
	<div class="amazingcarousel-title">Autumn</div>
	<div class="amazingcarousel-description">Autumn, a season  full of great things</div>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="media/ailab_2013.png" title="Big Buck Bunny"  class="html5lightbox" data-group="amazingcarousel-9"><img src="media/ailab_2013.png"  alt="Big Buck Bunny" /></a></div>
<div class="amazingcarousel-text">
	<div class="amazingcarousel-title">Big Buck Bunny</div>
	<div class="amazingcarousel-description">An animated film by the Blender Institute</div>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="media/ailab_2013.png" title="Night In The City"  class="html5lightbox" data-group="amazingcarousel-9"><img src="media/ailab_2013.png"  alt="Night In The City" /></a></div>
<div class="amazingcarousel-text">
	<div class="amazingcarousel-title">Night In The City</div>
	<div class="amazingcarousel-description">Silent and beautiful night in the city</div>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="media/ailab_1990s.jpg" title="Sintel"  class="html5lightbox" data-group="amazingcarousel-9"><img src="media/ailab_1990s.jpg"  alt="Sintel" /></a></div>
<div class="amazingcarousel-text">
	<div class="amazingcarousel-title">Sintel</div>
	<div class="amazingcarousel-description">Third open movie by Blender Foundation</div>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="media/ailab_1990s.jpg" title="Daffodil Flowers"  class="html5lightbox" data-group="amazingcarousel-9"><img src="media/ailab_1990s.jpg"  alt="Daffodil Flowers" /></a></div>
<div class="amazingcarousel-text">
	<div class="amazingcarousel-title">Daffodil Flowers</div>
	<div class="amazingcarousel-description">Beside the lake, beneath the trees</div>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="media/ailab_1990s.jpg" title="Dandelion"  class="html5lightbox" data-group="amazingcarousel-9"><img src="media/ailab_1990s.jpg"  alt="Dandelion" /></a></div>
<div class="amazingcarousel-text">
	<div class="amazingcarousel-title">Dandelion</div>
	<div class="amazingcarousel-description">Bright little dandelion, lights up the meads</div>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="media/ailab_1990s.jpg" title="Sakura Trees"  class="html5lightbox" data-group="amazingcarousel-9"><img src="media/ailab_1990s.jpg"  alt="Sakura Trees" /></a></div>
<div class="amazingcarousel-text">
	<div class="amazingcarousel-title">Sakura Trees</div>
	<div class="amazingcarousel-description">A sweet aroma around the trees</div>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="https://amazingcarousel.com/wp-content/uploads/amazingcarousel/9/images/lightbox/tulips-lightbox.jpg" title="Red Tulips"  class="html5lightbox" data-group="amazingcarousel-9"><img src="https://amazingcarousel.com/wp-content/uploads/amazingcarousel/9/images/tulips.jpg"  alt="Red Tulips" /></a></div>
<div class="amazingcarousel-text">
	<div class="amazingcarousel-title">Red Tulips</div>
	<div class="amazingcarousel-description">Beautiful tulips under the sun</div>
</div>                    </div>
                </li>
            </ul>
        </div>
        <div class="amazingcarousel-prev"></div>
        <div class="amazingcarousel-next"></div>
        <div class="amazingcarousel-nav"></div>
        <div class="amazingcarousel-engine" style="display:none;"><a href="https://amazingcarousel.com">JavaScript Scroller</a></div>
        <div class="amazingcarousel-engine" style="display:none;"><a href="https://amazingcarousel.com">WordPress Scroller</a></div>
    </div>
</div>
<script src="https://amazingcarousel.com/wp-content/uploads/amazingcarousel/9/carouselengine/initcarousel.js"></script>
</div>			


</body>
</html>
