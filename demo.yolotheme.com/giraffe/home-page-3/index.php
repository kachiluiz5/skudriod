<!DOCTYPE html>
<!-- Open HTML -->
<html lang="en-US">
	<!-- Open Head -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
				<meta charset="UTF-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="pingback" href="../xmlrpc.php"/>


            <link rel="shortcut icon" href="../wp-content/uploads/ICO.png"  style="width: 100%;"/>
    <title>Home &#8211; Skudriod</title>
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin />
<link rel="alternate" type="application/rss+xml" title="Giraffe &raquo; Feed" href="../feed/index.php" />
<link rel="alternate" type="application/rss+xml" title="Giraffe &raquo; Comments Feed" href="../comments/feed/index.php" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"wpemoji":"https:\/\/demo.yolotheme.com\/giraffe\/wp-includes\/js\/wp-emoji.js?ver=5.6.10","twemoji":"https:\/\/demo.yolotheme.com\/giraffe\/wp-includes\/js\/twemoji.js?ver=5.6.10"}};
			/**
 * @output wp-includes/js/wp-emoji-loader.js
 */

( function( window, document, settings ) {
	var src, ready, ii, tests;

	// Create a canvas element for testing native browser support of emoji.
	var canvas = document.createElement( 'canvas' );
	var context = canvas.getContext && canvas.getContext( '2d' );

	/**
	 * Checks if two sets of Emoji characters render the same visually.
	 *
	 * @since 4.9.0
	 *
	 * @private
	 *
	 * @param {number[]} set1 Set of Emoji character codes.
	 * @param {number[]} set2 Set of Emoji character codes.
	 *
	 * @return {boolean} True if the two sets render the same.
	 */
	function emojiSetsRenderIdentically( set1, set2 ) {
		var stringFromCharCode = String.fromCharCode;

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set1 ), 0, 0 );
		var rendered1 = canvas.toDataURL();

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set2 ), 0, 0 );
		var rendered2 = canvas.toDataURL();

		return rendered1 === rendered2;
	}

	/**
	 * Detects if the browser supports rendering emoji or flag emoji.
	 *
	 * Flag emoji are a single glyph made of two characters, so some browsers
	 * (notably, Firefox OS X) don't support them.
	 *
	 * @since 4.2.0
	 *
	 * @private
	 *
	 * @param {string} type Whether to test for support of "flag" or "emoji".
	 *
	 * @return {boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var isIdentical;

		if ( ! context || ! context.fillText ) {
			return false;
		}

		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		switch ( type ) {
			case 'flag':
				/*
				 * Test for Transgender flag compatibility. This flag is shortlisted for the Emoji 13 spec,
				 * but has landed in Twemoji early, so we can add support for it, too.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (white flag emoji + transgender symbol).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0x1F3F3, 0xFE0F, 0x200D, 0x26A7, 0xFE0F ],
					[ 0x1F3F3, 0xFE0F, 0x200B, 0x26A7, 0xFE0F ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for UN flag compatibility. This is the least supported of the letter locale flags,
				 * so gives us an easy test for full support.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly ([U] + [N]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0xD83C, 0xDDFA, 0xD83C, 0xDDF3 ],
					[ 0xD83C, 0xDDFA, 0x200B, 0xD83C, 0xDDF3 ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for English flag compatibility. England is a country in the United Kingdom, it
				 * does not have a two letter locale code but rather an five letter sub-division code.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0xD83C, 0xDFF4, 0xDB40, 0xDC67, 0xDB40, 0xDC62, 0xDB40, 0xDC65, 0xDB40, 0xDC6E, 0xDB40, 0xDC67, 0xDB40, 0xDC7F ],
					[ 0xD83C, 0xDFF4, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC62, 0x200B, 0xDB40, 0xDC65, 0x200B, 0xDB40, 0xDC6E, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC7F ]
				);

				return ! isIdentical;
			case 'emoji':
				/*
				 * So easy, even a baby could do it!
				 *
				 *  To test for Emoji 13 support, try to render a new emoji: Man Feeding Baby.
				 *
				 * The Man Feeding Baby emoji is a ZWJ sequence combining 👨 Man, a Zero Width Joiner and 🍼 Baby Bottle.
				 *
				 * 0xD83D, 0xDC68 == Man emoji.
				 * 0x200D == Zero-Width Joiner (ZWJ) that links the two code points for the new emoji or
				 * 0x200B == Zero-Width Space (ZWS) that is rendered for clients not supporting the new emoji.
				 * 0xD83C, 0xDF7C == Baby Bottle.
				 *
				 * When updating this test for future Emoji releases, ensure that individual emoji that make up the
				 * sequence come from older emoji standards.
				 */
				isIdentical = emojiSetsRenderIdentically(
					[0xD83D, 0xDC68, 0x200D, 0xD83C, 0xDF7C],
					[0xD83D, 0xDC68, 0x200B, 0xD83C, 0xDF7C]
				);

				return ! isIdentical;
		}

		return false;
	}

	/**
	 * Adds a script to the head of the document.
	 *
	 * @ignore
	 *
	 * @since 4.2.0
	 *
	 * @param {Object} src The url where the script is located.
	 * @return {void}
	 */
	function addScript( src ) {
		var script = document.createElement( 'script' );

		script.src = src;
		script.defer = script.type = 'text/javascript';
		document.getElementsByTagName( 'head' )[0].appendChild( script );
	}

	tests = Array( 'flag', 'emoji' );

	settings.supports = {
		everything: true,
		everythingExceptFlag: true
	};

	/*
	 * Tests the browser support for flag emojis and other emojis, and adjusts the
	 * support settings accordingly.
	 */
	for( ii = 0; ii < tests.length; ii++ ) {
		settings.supports[ tests[ ii ] ] = browserSupportsEmoji( tests[ ii ] );

		settings.supports.everything = settings.supports.everything && settings.supports[ tests[ ii ] ];

		if ( 'flag' !== tests[ ii ] ) {
			settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[ tests[ ii ] ];
		}
	}

	settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && ! settings.supports.flag;

	// Sets DOMReady to false and assigns a ready function to settings.
	settings.DOMReady = false;
	settings.readyCallback = function() {
		settings.DOMReady = true;
	};

	// When the browser can not render everything we need to load a polyfill.
	if ( ! settings.supports.everything ) {
		ready = function() {
			settings.readyCallback();
		};

		/*
		 * Cross-browser version of adding a dom ready event.
		 */
		if ( document.addEventListener ) {
			document.addEventListener( 'DOMContentLoaded', ready, false );
			window.addEventListener( 'load', ready, false );
		} else {
			window.attachEvent( 'onload', ready );
			document.attachEvent( 'onreadystatechange', function() {
				if ( 'complete' === document.readyState ) {
					settings.readyCallback();
				}
			} );
		}

		src = settings.source || {};

		if ( src.concatemoji ) {
			addScript( src.concatemoji );
		} else if ( src.wpemoji && src.twemoji ) {
			addScript( src.twemoji );
			addScript( src.wpemoji );
		}
	}

} )( window, document, window._wpemojiSettings );
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
	<link rel='stylesheet' id='wp-block-library-css'  href='../wp-includes/css/dist/block-library/styledac3.css?ver=5.6.10' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css'  href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style11d5.css?ver=1609733174' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style11d5.css?ver=1609733174' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles9dff.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/public/assets/css/rs63f21.css?ver=6.2.23' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout287d.css?ver=4.8.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen287d.css?ver=4.8.0' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce287d.css?ver=4.8.0' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='yolo-timetable-css'  href='../wp-content/plugins/yolo-timetable/assets/css/yolo-timetable.css' type='text/css' media='all' />
<link rel='stylesheet' id='yolo-timetable-schedule-css'  href='../wp-content/plugins/yolo-timetable/assets/css/yolo-timetable-schedule.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-5-shims-css'  href='../wp-content/plugins/yolo-timetable/assets/vendor/font-awesome/css/v4-shims.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-5-css'  href='../wp-content/plugins/yolo-timetable/assets/vendor/font-awesome/css/all.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-colorbox-css'  href='../wp-content/plugins/yith-woocommerce-compare/assets/css/colorboxdac3.css?ver=5.6.10' type='text/css' media='all' />
<link rel='stylesheet' id='yolo-megamenu-animate-css'  href='../wp-content/themes/yolo-giraffe/framework/core/megamenu/assets/css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/yolo-giraffe/assets/plugins/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='pe-icon-7-stroke-css'  href='../wp-content/themes/yolo-giraffe/assets/plugins/pe-icon-7-stroke/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='ionicon-font-css'  href='../wp-content/themes/yolo-giraffe/assets/plugins/ionicons/fonts/ionicons.css' type='text/css' media='all' />
<link rel='stylesheet' id='elegant-font-css'  href='../wp-content/themes/yolo-giraffe/assets/plugins/elegant-font/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='cac-champagne-font-css'  href='../wp-content/themes/yolo-giraffe/assets/plugins/cac-champagne-font/champagne.css' type='text/css' media='all' />
<link rel='stylesheet' id='prettyPhoto-css'  href='../wp-content/plugins/yolo-giraffe-framework/assets/plugins/prettyPhoto/css/prettyPhoto.mindac3.css?ver=5.6.10' type='text/css' media='all' />
<link rel='stylesheet' id='bs-select-css'  href='../wp-content/themes/yolo-giraffe/assets/plugins/bootstrap-select/css/bootstrap-select.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-scrollbar-css'  href='../wp-content/themes/yolo-giraffe/assets/plugins/customscroll/jquery.mCustomScrollbar.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='yolo-framework-style-css'  href='../wp-content/themes/yolo-giraffe/assets/css/yolo.css' type='text/css' media='all' />
<link rel='stylesheet' id='yolo-custom-style-css'  href='../wp-content/uploads/yolo-custom-css/custom-style.css' type='text/css' media='all' />
<style id='yolo-custom-style-inline-css' type='text/css'>
article.teacher-item-wrap .teacher-info .teacher-category {
    color: #1fc0ff;
}

.yolo-sc-text-info p {
    margin-top: 0;
}

.yolo-sc-activity .activity-item p {
    margin-top: 0;
}

.blog-inner.blog-style-listing article .gpi__thumbnail {
    height: 400px;
}

@media (max-width: 768px) {
    .blog-inner.blog-style-listing article .gpi__thumbnail {
        height: 300px;
    }
}

article.teacher-item-wrap.layout-2 .teacher-category {
    color: rgba(255, 255, 255, 0.8) !important;
}

article.event-item .loop-item-wrap {
        box-shadow: 0 15px 15px rgba(229, 229, 229, 0.8);
}
.yolo-class-shortcode.grid .hentry {
    padding-bottom: 30px;
}

.class-basic-info .basic-img:hover .thumbnail:first-child img {
    margin-left: 0;
}

.yolo-sc-contact-form.style2 form .wpcf7-form-control-wrap {
    display: block;
    margin-bottom: 33px;
}

.blog-inner.blog-style-listing article .post-thumbnail img {
    width: 100%;
}

.wpb_gmaps_widget .wpb_wrapper {
    padding: 0 !important;
}

.yolo-sc-experience.yolo-sc-experience .item-experience .description-item {
    background-color: #fff;
}

.yolo-sc-blog .yolo-blog-item.blog-v4 .nbi__content {
    background-color: #fff;
}

.yolo-sc-title.style3 .sc-title {
    padding-bottom: 35px;
}

.yolo-sc-title.style4 .sc-title {
    padding-bottom: 20px;
}

.yolo-sc-contact-info.style2 .info-item-content .icon-content {
    letter-spacing: 1px;
}

.yolo-show-option {
    padding-left: 0;
    padding-right: 0;
}

article.class-item-wrap .entry-meta-more {
    margin-top: 1.2em;
}
.header-customize .calling-content i {
    transform: rotateZ(-25deg);
}
article:hover .grf-post-item {
    -webkit-box-shadow: 0 0px 50px rgba(229, 229, 229, 0.8);
    box-shadow: 0 0px 50px rgba(229, 229, 229, 0.8);
}

.post-navigation span.nav-label {
    display: none;
}

.post-navigation .devider {
    height: 100%;
    background: #eee;
}

.post-navigation {
    min-height: 120px;
}

.post-navigation  i {
    color: var(--primary_color);
}
.post-navigation span.nav-title {
    word-wrap: break-word;
    font-family: inherit;
    line-height: 1.5;
    font-weight: 600;
    font-size: 18px;
}
</style>
<link rel='stylesheet' id='yolo-framework-vc-customize-css'  href='../wp-content/themes/yolo-giraffe/assets/vc-extend/css/vc-customize.css' type='text/css' media='all' />
<link rel='stylesheet' id='yolo-style-css'  href='../wp-content/themes/yolo-giraffe/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='yolo-commons-fw-css'  href='../wp-content/themes/yolo-giraffe/assets/css/commons.css' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.mine6df.css?ver=6.5.0' type='text/css' media='all' />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic%7CFredoka%20One:400%7CGloria%20Hallelujah:400&amp;subset=latin&amp;display=swap&amp;ver=1626591013" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic%7CFredoka%20One:400%7CGloria%20Hallelujah:400&amp;subset=latin&amp;display=swap&amp;ver=1626591013" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic%7CFredoka%20One:400%7CGloria%20Hallelujah:400&amp;subset=latin&amp;display=swap&amp;ver=1626591013" /></noscript><script type='text/javascript' src='../wp-includes/js/jquery/jquery9d52.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrated617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/rbtools.min3f21.js?ver=6.2.23' id='tp-tools-js'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/rs6.min3f21.js?ver=6.2.23' id='revmin-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI44fd.js?ver=2.70' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/giraffe\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/giraffe\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/demo.yolotheme.com\/giraffe\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart287d.js?ver=4.8.0' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-carte6df.js?ver=6.5.0' id='vc_woocommerce-add-to-cart-js-js'></script>
<link rel="https://api.w.org/" href="../wp-json/index.php" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/678.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.6.10" />
<meta name="generator" content="WooCommerce 4.8.0" />
<link rel="canonical" href="index.php" />
<link rel='shortlink' href='../indexc5e7.php?p=678' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embedf8c7.json?url=https%3A%2F%2Fdemo.yolotheme.com%2Fgiraffe%2Fhome-page-3%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embedb70f?url=https%3A%2F%2Fdemo.yolotheme.com%2Fgiraffe%2Fhome-page-3%2F&amp;format=xml" />
<meta name="framework" content="Redux 4.1.24" /><style data-type="vc_shortcodes-custom-css">.vc_custom_1594786041912{background: #f8f8f8 url(../wp-content/uploads/2020/07/footer-bg-229f0.jpg?id=4779) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1594972724859{padding-top: 63px !important;padding-bottom: 60px !important;}.vc_custom_1594780069426{padding-right: 15px !important;padding-left: 15px !important;}.vc_custom_1593502281735{margin-top: 30px !important;margin-bottom: 30px !important;}.vc_custom_1594969876977{margin-top: 30px !important;margin-bottom: 30px !important;}.vc_custom_1594974710294{margin-top: 30px !important;margin-bottom: 33px !important;}.vc_custom_1594780146725{border-top-width: 1px !important;padding-top: 35px !important;padding-bottom: 35px !important;border-top-color: rgba(255,255,255,0.2) !important;border-top-style: solid !important;border-radius: 1px !important;}.vc_custom_1650593824269{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}</style>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<style type="text/css" id="custom-background-css">
body.custom-background { background-color: #ffffff; }
</style>
	<meta name="generator" content="Powered by Slider Revolution 6.2.23 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}				
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>
<style id="yolo-timetable-css-inline" type="text/css">.yolo-class-schedule-shortcode .fc-month-view .fc-scroller,.yolo-class-schedule-shortcode .fc-agendaWeek-view .fc-scroller{overflow-x:visible !important;overflow-y:visible !important;}.yolo-class-schedule-shortcode.background-event .fc-view .fc-body .fc-time-grid .fc-event,.yolo-class-schedule-shortcode .fc-view .fc-body .fc-time-grid .fc-event .fc-content .fc-category,.yolo-class-schedule-shortcode .fc-month-view .fc-popover .fc-header,.yolo-responsive-schedule-wrap .res-sche-navigation .prev:focus,.yolo-responsive-schedule-wrap .res-sche-navigation .next:focus,.yolo-responsive-schedule-wrap .res-sche-navigation .prev:hover,.yolo-responsive-schedule-wrap .res-sche-navigation .next:hover,.yolo-class-schedule-shortcode .fc-month-view .fc-today.fc-day-number span,.yolo-class-schedule-shortcode .fc-toolbar .fc-button:focus,.yolo-class-schedule-shortcode .fc-toolbar .fc-button:hover,.yolo-class-schedule-shortcode .fc-view .fc-head table .fc-resource-cell,.yolo-class-schedule-shortcode .fc-view .fc-head table .fc-widget-header{background-color:#1ec0ff;}.yolo-class-schedule-shortcode.background-event .fc-view .fc-body .fc-time-grid .fc-event,.yolo-class-schedule-shortcode .fc-month-view .fc-holiday{background-color:#1ec0ff;}.yolo-responsive-schedule-wrap .res-sche-navigation .prev:focus,.yolo-responsive-schedule-wrap .res-sche-navigation .next:focus,.yolo-responsive-schedule-wrap .res-sche-navigation .prev:hover,.yolo-responsive-schedule-wrap .res-sche-navigation .next:hover{color:#fff;}.yolo-class-schedule-shortcode .fc-view .fc-head td,.yolo-class-schedule-shortcode .fc-view .fc-head table .fc-resource-cell,.yolo-class-schedule-shortcode .fc-view .fc-head table .fc-widget-header{border-color:rgba(0,150,209,0.20);}.yolo-filters ul li a:hover,.yolo-filters ul li a:focus{color:#1ec0ff;}.yolo-filters ul li a.selected{color:#1ec0ff;}.yolo-filters ul li a.selected:before{border-color:#1ec0ff;}.yolo-class-schedule-shortcode .fc-view .fc-body .fc-time-grid .fc-event .fc-ribbon,.yolo-responsive-schedule-wrap .res-sche-navigation .prev,.yolo-responsive-schedule-wrap .res-sche-navigation .next,.yolo-class-schedule-shortcode .fc-toolbar .fc-button{color:#1ec0ff;border-color:#1ec0ff;}.yolo-class-schedule-shortcode .fc-view .fc-body .fc-time-grid .fc-event.fc-yolo-class.show-icon .fc-content:before,.yolo-class-schedule-shortcode .fc-view .fc-body .fc-time-grid .fc-event.fc-yolo-event.show-icon .fc-content:before{color:#1ec0ff;}.yolo-responsive-schedule-wrap .res-sche-navigation .next:hover,.yolo-class-schedule-shortcode .fc-month-view .fc-popover .fc-header .fc-close,.yolo-class-schedule-shortcode .fc-month-view .fc-popover .fc-header,.yolo-class-schedule-shortcode .fc-toolbar .fc-button:focus,.yolo-class-schedule-shortcode .fc-toolbar .fc-button:hover,.yolo-class-schedule-shortcode .fc-month-view .fc-today.fc-day-number span,.yolo-class-schedule-shortcode .fc-view .fc-head table .fc-axis,.yolo-class-schedule-shortcode .fc-view .fc-head table .fc-resource-cell,.yolo-class-schedule-shortcode .fc-view .fc-head table .fc-day-header{color:#fff}.yolo-responsive-schedule-wrap .item-weekday.today,.yolo-class-schedule-shortcode .fc-view .fc-bg .fc-today,.yolo-class-schedule-shortcode .fc-view .fc-list-table .fc-today{background-color:#fcf8e3;}</style><style id="yolo-timetable-css-inline-color">.yolo-class-shortcode article.hentry.class_category_47b8e0 .content-meta i{color:#47b8e0;}.yolo-class-shortcode article.hentry.class_category_47b8e0 .button{background-color:#47b8e0;}.yolo-class-shortcode article.hentry.class_category_47b8e0 .button:hover{background-color:#18708f;}.class_category_47b8e0 .content-meta,.yolo-sc-class-feature  article.hentry.class_category_47b8e0 .content-meta{background-color:#47b8e0;}.yolo-class-shortcode article.hentry.class_category_56d47e .content-meta i{color:#56d47e;}.yolo-class-shortcode article.hentry.class_category_56d47e .button{background-color:#56d47e;}.yolo-class-shortcode article.hentry.class_category_56d47e .button:hover{background-color:#238843;}.class_category_56d47e .content-meta,.yolo-sc-class-feature  article.hentry.class_category_56d47e .content-meta{background-color:#56d47e;}.yolo-class-shortcode article.hentry.class_category_1ec0ff .content-meta i{color:#1ec0ff;}.yolo-class-shortcode article.hentry.class_category_1ec0ff .button{background-color:#1ec0ff;}.yolo-class-shortcode article.hentry.class_category_1ec0ff .button:hover{background-color:#00719e;}.class_category_1ec0ff .content-meta,.yolo-sc-class-feature  article.hentry.class_category_1ec0ff .content-meta{background-color:#1ec0ff;}.yolo-class-shortcode article.hentry.class_category_ffd338 .content-meta i{color:#ffd338;}.yolo-class-shortcode article.hentry.class_category_ffd338 .button{background-color:#ffd338;}.yolo-class-shortcode article.hentry.class_category_ffd338 .button:hover{background-color:#b88f00;}.class_category_ffd338 .content-meta,.yolo-sc-class-feature  article.hentry.class_category_ffd338 .content-meta{background-color:#ffd338;}.yolo-class-shortcode article.hentry.class_category_1ec0ff .content-meta i{color:#1ec0ff;}.yolo-class-shortcode article.hentry.class_category_1ec0ff .button{background-color:#1ec0ff;}.yolo-class-shortcode article.hentry.class_category_1ec0ff .button:hover{background-color:#00719e;}.class_category_1ec0ff .content-meta,.yolo-sc-class-feature  article.hentry.class_category_1ec0ff .content-meta{background-color:#1ec0ff;}.yolo-class-shortcode article.hentry.class_category_ffd338 .content-meta i{color:#ffd338;}.yolo-class-shortcode article.hentry.class_category_ffd338 .button{background-color:#ffd338;}.yolo-class-shortcode article.hentry.class_category_ffd338 .button:hover{background-color:#b88f00;}.class_category_ffd338 .content-meta,.yolo-sc-class-feature  article.hentry.class_category_ffd338 .content-meta{background-color:#ffd338;}.yolo-class-shortcode article.hentry.class_category_1ec0ff .content-meta i{color:#1ec0ff;}.yolo-class-shortcode article.hentry.class_category_1ec0ff .button{background-color:#1ec0ff;}.yolo-class-shortcode article.hentry.class_category_1ec0ff .button:hover{background-color:#00719e;}.class_category_1ec0ff .content-meta,.yolo-sc-class-feature  article.hentry.class_category_1ec0ff .content-meta{background-color:#1ec0ff;}.yolo-class-shortcode article.hentry.class_category_ffd338 .content-meta i{color:#ffd338;}.yolo-class-shortcode article.hentry.class_category_ffd338 .button{background-color:#ffd338;}.yolo-class-shortcode article.hentry.class_category_ffd338 .button:hover{background-color:#b88f00;}.class_category_ffd338 .content-meta,.yolo-sc-class-feature  article.hentry.class_category_ffd338 .content-meta{background-color:#ffd338;}.yolo-class-shortcode article.hentry.class_category_56d47e .content-meta i{color:#56d47e;}.yolo-class-shortcode article.hentry.class_category_56d47e .button{background-color:#56d47e;}.yolo-class-shortcode article.hentry.class_category_56d47e .button:hover{background-color:#238843;}.class_category_56d47e .content-meta,.yolo-sc-class-feature  article.hentry.class_category_56d47e .content-meta{background-color:#56d47e;}.yolo-class-shortcode article.hentry.class_category_f05c5c .content-meta i{color:#f05c5c;}.yolo-class-shortcode article.hentry.class_category_f05c5c .button{background-color:#f05c5c;}.yolo-class-shortcode article.hentry.class_category_f05c5c .button:hover{background-color:#bb1111;}.class_category_f05c5c .content-meta,.yolo-sc-class-feature  article.hentry.class_category_f05c5c .content-meta{background-color:#f05c5c;}.yolo-event-shortcode article.hentry.event_55967e .yolo-event-meta i{color:#55967e;}.yolo-event-shortcode article.hentry.event_55967e .button{background-color:#55967e;}.yolo-event-shortcode article.hentry.event_55967e .button:hover{background-color:#27453a;}.yolo-event-shortcode article.hentry.event_eb9f9f .yolo-event-meta i{color:#eb9f9f;}.yolo-event-shortcode article.hentry.event_eb9f9f .button{background-color:#eb9f9f;}.yolo-event-shortcode article.hentry.event_eb9f9f .button:hover{background-color:#d53535;}.yolo-event-shortcode article.hentry.event_47b8e0 .yolo-event-meta i{color:#47b8e0;}.yolo-event-shortcode article.hentry.event_47b8e0 .button{background-color:#47b8e0;}.yolo-event-shortcode article.hentry.event_47b8e0 .button:hover{background-color:#18708f;}.yolo-event-shortcode article.hentry.event_60c5ba .yolo-event-meta i{color:#60c5ba;}.yolo-event-shortcode article.hentry.event_60c5ba .button{background-color:#60c5ba;}.yolo-event-shortcode article.hentry.event_60c5ba .button:hover{background-color:#2c7971;}.yolo-event-shortcode article.hentry.event_e3e36a .yolo-event-meta i{color:#e3e36a;}.yolo-event-shortcode article.hentry.event_e3e36a .button{background-color:#e3e36a;}.yolo-event-shortcode article.hentry.event_e3e36a .button:hover{background-color:#adad21;}.yolo-event-shortcode article.hentry.event_ef5285 .yolo-event-meta i{color:#ef5285;}.yolo-event-shortcode article.hentry.event_ef5285 .button{background-color:#ef5285;}.yolo-event-shortcode article.hentry.event_ef5285 .button:hover{background-color:#b11045;}.yolo-event-shortcode article.hentry.event_f1bbba .yolo-event-meta i{color:#f1bbba;}.yolo-event-shortcode article.hentry.event_f1bbba .button{background-color:#f1bbba;}.yolo-event-shortcode article.hentry.event_f1bbba .button:hover{background-color:#db5350;}.yolo-event-shortcode article.hentry.event_55967e .yolo-event-meta i{color:#55967e;}.yolo-event-shortcode article.hentry.event_55967e .button{background-color:#55967e;}.yolo-event-shortcode article.hentry.event_55967e .button:hover{background-color:#27453a;}.yolo-event-shortcode article.hentry.event_ef5285 .yolo-event-meta i{color:#ef5285;}.yolo-event-shortcode article.hentry.event_ef5285 .button{background-color:#ef5285;}.yolo-event-shortcode article.hentry.event_ef5285 .button:hover{background-color:#b11045;}.yolo-event-shortcode article.hentry.event_60c5ba .yolo-event-meta i{color:#60c5ba;}.yolo-event-shortcode article.hentry.event_60c5ba .button{background-color:#60c5ba;}.yolo-event-shortcode article.hentry.event_60c5ba .button:hover{background-color:#2c7971;}</style><style id="yolo_giraffe_options-dynamic-css" title="dynamic-css" class="redux-options-output">body{background-repeat:no-repeat;background-attachment:fixed;background-position:center center;background-size:cover;}#yolo-wrapper{background-color:#ffffff;}.page-title-margin{margin-top:0;margin-bottom:80px;}.page-title-height{}.archive-title-height{}.single-blog-title-height{}.archive-product-title-height{}.single-product-title-height{}body{font-family:Montserrat;font-weight:500;font-style:normal;font-size:14px;font-display:swap;}h1{font-family:"Fredoka One";font-weight:400;font-style:normal;font-size:36px;font-display:swap;}h2{font-family:"Fredoka One";font-weight:400;font-style:normal;font-size:30px;font-display:swap;}h3{font-family:"Fredoka One";font-weight:400;font-style:normal;font-size:26px;font-display:swap;}h4{font-family:"Fredoka One";font-weight:400;font-style:normal;font-size:22px;font-display:swap;}h5{font-family:"Fredoka One";font-weight:400;font-style:normal;font-size:18px;font-display:swap;}h6{font-family:"Fredoka One";font-weight:400;font-style:normal;font-size:14px;font-display:swap;}.page-title-inner h1{font-family:"Fredoka One";text-transform:capitalize;font-weight:400;font-style:normal;font-size:36px;font-display:swap;}.page-title-inner .page-sub-title{font-family:Montserrat;text-transform:none;font-weight:500;font-style:normal;font-size:15px;font-display:swap;}.archive-teacher-title-height{}.single-teacher-title-height{}.archive-class-title-height{}.single-class-title-height{}.archive-event-title-height{}.single-event-title-height{}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1594286674035{padding-top: 85px !important;padding-bottom: 110px !important;background-image: url(../wp-content/uploads/2020/07/bg-040794.jpg?id=4638) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1594286698965{padding-top: 85px !important;padding-bottom: 110px !important;background-image: url(https://demo.yolotheme.com/giraffe/wp-content/uploads/2020/04/bg-05.jpg?id=4095) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1594349008847{padding-top: 85px !important;padding-bottom: 110px !important;background-image: url(https://demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/bg-01.jpg?id=4635) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1594286725554{padding-top: 110px !important;padding-bottom: 80px !important;background-image: url(https://demo.yolotheme.com/giraffe/wp-content/uploads/2020/04/bg-05.jpg?id=4095) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1594349025621{padding-top: 85px !important;padding-bottom: 110px !important;background-image: url(https://demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/bg-04.jpg?id=4638) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1594286802009{padding-top: 35px !important;padding-bottom: 40px !important;background-image: url(../newimg/m.jpg?id=4092) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1594286921835{padding-top: 80px !important;padding-bottom: 80px !important;}.vc_custom_1594092115261{padding-top: 82px !important;padding-bottom: 110px !important;background-color: #f5f7fa !important;}.vc_custom_1594092797238{padding-top: 72px !important;padding-bottom: 72px !important;}.vc_custom_1594284845791{padding-bottom: 50px !important;}.vc_custom_1594286447139{padding-bottom: 45px !important;}.vc_custom_1594285767656{padding-bottom: 50px !important;}.vc_custom_1587356582486{padding-top: 30px !important;padding-bottom: 30px !important;}.vc_custom_1595495286453{margin-top: -15px !important;padding-top: 0px !important;padding-bottom: 15px !important;}.vc_custom_1594285758645{padding-bottom: 50px !important;}.vc_custom_1594285618269{padding-bottom: 50px !important;}.vc_custom_1594285612959{padding-bottom: 50px !important;}.vc_custom_1595495325684{padding-bottom: 50px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>	</head>
	<!-- Close Head -->
	<body class="page-template-default page page-id-678 custom-background theme-yolo-giraffe woocommerce-no-js yolo-site-preload header-3 woocommerce wpb-js-composer js-comp-ver-6.5.0 vc_responsive">
		<div class="site">
						<div id="yolo-site-preload" style="background: -moz-linear-gradient(-45deg, #ffffff 0%, #ffffff 100%);background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ffffff), color-stop(100%,#ffffff));background: -webkit-linear-gradient(-45deg, #ffffff 0%,#ffffff 100%);background: -o-linear-gradient(-45deg, #ffffff 0%,#ffffff 100%);background: -ms-linear-gradient(-45deg, #ffffff 0%,#ffffff 100%);background: linear-gradient(135deg, #ffffff 0%,#ffffff 100%);" class="">
    <div class="yolo-loading-center">
        <div class="site-loading-center-absolute">
            <img class="yono-svg" src="../wp-content/themes/yolo-giraffe/assets/svg/puff.svg" width="100" alt="loading">
        </div>
    </div>
</div>		





<!-- Open yolo wrapper -->
        <div id="yolo-wrapper">
            <header id="yolo-mobile-header" class="yolo-mobile-header header-mobile-1">
                <div class="yolo-header-container-wrapper menu-drop-fly">
                    <div class="container yolo-mobile-header-wrapper">
                        <div class="yolo-mobile-header-inner">
                            <div class="toggle-icon-wrapper toggle-mobile-menu" data-ref="yolo-nav-mobile-menu" data-drop-type="fly">
                                <div class="toggle-icon"> <span></span></div>
                            </div>
                            <div class="header-customize">
                                <div class="search-button-wrapper header-customize-item">
                                    <a class="icon-search-menu" href="#" data-search-type="ajax"><i class="fas fa-search"></i></a>
                                </div>
                            </div>
                            <div class="header-logo-mobile">
                                <a href="../index.php" title="Skudriod dynamic services">
                                    <img src="../wp-content/uploads/4.png" alt="SKUDROID" />
                                </a>
                            </div>
                        </div>
                        <div id="yolo-nav-mobile-menu" class="yolo-mobile-header-nav menu-drop-fly">
                            <form class="yolo-search-form-mobile-menu" method="get" action="https://demo.yolotheme.com/giraffe">
                                <input type="search" name="s" placeholder="Search...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>


                            <ul id="main-menu" class="yolo-main-menu nav-collapse navbar-nav">
                                <li id="menu-item-2645" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../about-us/index.php">Home</a></li>
                                <li id="menu-item-2645" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../about-us/index.php">About us</a></li>
                                <li id="menu-item-3579" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type_archive menu-item-object-yolo_class menu-item-has-children level-0 "><a href="../classes/index.php">Our Program</a><b class="menu-caret"></b>
                                    <ul class="sub-menu animated rotateX">
                                        <li id="menu-item-2644" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../timetable/index.php">Timetable</a></li>
                                        <li id="menu-item-3887" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../our-classes/index.php">Our Classes</a></li>
                                        <li id="menu-item-3828" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-yolo_class level-1 "><a href="../classes/color-match-class/index.php">Class Details</a></li>

                            
                                    </ul>

                                    
                                </li>
                                <li id="menu-item-2645" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../gallery/index.php">Gallery</a></li>
                                <li id="menu-item-1430" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../contact/index.php">Contacts</a></li>
                                <li id="menu-item-2692" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-0 "><a href="../blog/index.php">Blog</a></li>

                            </ul>
                        </div>
                        <div class="yolo-mobile-menu-overlay"></div>
                    </div>
                </div>
            </header>
            <header id="yolo-header" class="yolo-main-header header-3 header-desktop-wrapper">
                <div class="yolo-header-nav-wrapper header-sticky animate sticky-scheme-inherit nav-hover-primary" data-effect="slideInDown,slideOutUp">
                    <div class="container">
                        <div class="yolo-header-wrapper">
                            <div class="header-left">
                                <div class="header-logo">
                                    <a href="../index.php" title="Giraffe - Just another WordPress site">
                                        <img src="../wp-content/uploads/4.png" alt="Giraffe - Just another WordPress site" />
                                    </a>
                                </div>
                            </div>
                            <div class="header-right">
                                <div id="primary-menu" class="menu-wrapper">
                                    <ul id="main-menu" class="yolo-main-menu nav-collapse navbar-nav">
                                        <li id="menu-item-2645" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../about-us/index.php">Home</a></li>
                                        <li id="menu-item-2645" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../about-us/index.php">About us</a></li>
                                        <li id="menu-item-3579" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type_archive menu-item-object-yolo_class menu-item-has-children level-0 "><a href="../classes/index.php">Our Program</a><b class="menu-caret"></b>
                                            <ul class="sub-menu animated rotateX">
                                                <li id="menu-item-2644" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../timetable/index.php">Timetable</a></li>
                                                <li id="menu-item-3887" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../our-classes/index.php">Our Classes</a></li>
                                                <li id="menu-item-3828" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-yolo_class level-1 "><a href="../classes/color-match-class/index.php">Class Details</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-2645" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../gallery/index.php">Gallery</a></li>
                                        <li id="menu-item-1430" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-1 "><a href="../contact/index.php">Contacts</a></li>
                                        <li id="menu-item-2692" class="yolo-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page level-0 "><a href="../blog/index.php">Blog</a></li>

                                    </ul>
                                    <div class="header-customize header-customize-nav">
                                        <div class="search-button-wrapper header-customize-item style-default">
                                            <a class="icon-search-menu" href="#" data-search-type="ajax"><i class="wicon fas fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- From theme/header.php -->
            <div id="yolo-modal-search" tabindex="-1" role="dialog" aria-hidden="false" class="modal fade">
                <div class="modal-backdrop fade in"></div>
                <div class="yolo-modal-dialog yolo-modal-search fade in">
                    <div data-dismiss="modal" class="yolo-dismiss-modal"><i class="fas fa-times"></i></div>
                    <div class="yolo-search-result">
                        <div class="yolo-search-wrapper">
                            <input id="search-ajax" type="search" placeholder="Enter keyword to search">
                            <button><i class="ajax-search-icon ion-ios-search-strong"></i></button>
                        </div>
                        <div class="ajax-search-result"></div>
                    </div>
                </div>
            </div>
            <!-- Open Yolo Content Wrapper -->
            <div id="yolo-content-wrapper" class="clearfix" style="background: #ffffff; ">
                <main class="yolo-site-content-page">

                    <div class="yolo-site-content-page-inner ">
                        <div class="page-content">
                            <div id="post-678" class="post-678 page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div class="yolo-full-width ">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="container clearfix">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <!-- START Slider04 REVOLUTION SLIDER 6.2.23 -->
                                                            <p class="rs-p-wp-fix"></p>
                                                            <rs-module-wrap id="rev_slider_21_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                                <rs-module id="rev_slider_21_1" style="" data-version="6.2.23">
                                                                    <rs-slides>
                                                                        <rs-slide data-key="rs-42" data-title="Slide" data-thumb="//demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/slide-03-50x100.jpg" data-anim="ei:d,d,d,d,d,d;eo:d,d,d,d,d,d;s:d,d,d,d,d,d;r:0,0,0,0,0,0;t:slideoverhorizontal,slideremoveleft,fadefromright,fadefromtop,boxslide,scaledownfromright;sl:d,d,d,d,d,d;">
                                                                            <img src="../wp-content/uploads/22.jpg" title="slide-03" width="1800" height="1200" data-parallax="off" data-panzoom="d:10000;ss:100%;se:120%;os:0px/0;oe:0px/0px;" class="rev-slidebg" data-no-retina>
                                                                            <!--
							-->
                                                                            <rs-layer id="slider-21-slide-42-layer-1" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,18,13,8;l:0,23,17,10;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:780;sp:1000;sR:780;"
                                                                                data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7220;" style="z-index:8;background-color:rgba(0,0,0,0.5);">
                                                                            </rs-layer>
                                                                            <!--

							-->
                                                                            <rs-layer id="slider-21-slide-42-layer-2" class="rev-btn rev-hiddenicon" data-type="button" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:156px,137px,104px,64px;" data-text="w:normal;s:20,18,13,8;l:20,18,13,8;ls:1px,0px,0px,0px;" data-dim="minh:0px,none,none,none;"
                                                                                data-padding="t:15,14,11,7;r:40,37,28,17;b:15,14,11,7;l:40,37,28,17;" data-border="bor:30px,30px,30px,30px;" data-frame_0="sX:0.8;sY:0.8;" data-frame_1="e:power4.out;st:5090;sp:1000;sR:5090;"
                                                                                data-frame_999="o:0;st:w;sR:2910;" data-frame_hover="sX:1.1;sY:1.1;c:#000;bgc:#fff;bor:30px,30px,30px,30px;sp:200;e:none;" style="z-index:12;background-color:#f05c5c;font-family:Fredoka One;">Learn More
                                                                            </rs-layer>
                                                                            <!--

							-->
                                                                            <rs-layer id="slider-21-slide-42-layer-7" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,20px,30px;y:m;yo:-66px,-60px,-45px,-27px;" data-text="w:normal;s:60,55,41,25;l:70,65,49,30;" data-dim="w:714px,664px,504px,310px;" data-frame_0="x:-175%;o:1;"
                                                                                data-frame_0_mask="u:t;x:100%;" data-frame_1="e:power3.out;st:2720;sp:1610;sR:2720;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4670;" style="z-index:10;font-family:Fredoka One;text-transform:uppercase;">Bringing out the best of you
                                                                            </rs-layer>
                                                                            <!--

							-->
                                                                            <rs-layer id="slider-21-slide-42-layer-9" data-type="text" data-color="rgba(255, 255, 255, 0.9)" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:59px,48px,36px,22px;" data-text="w:normal;s:20,18,13,8;l:30,27,20,12;" data-dim="w:727px,676px,513px,316px;"
                                                                                data-frame_0="y:50,46,34,20;" data-frame_1="st:4140;sp:1130;sR:4140;" data-frame_999="o:0;st:w;sR:3730;" style="z-index:11;font-family:Montserrat;">Help Students Learn STEM As Well As Help Teachers Manage Their Class Activities
                                                                            </rs-layer>
                                                                            <!--

							-->
                                                                            <rs-layer id="slider-21-slide-42-layer-10" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:-165px,-150px,-113px,-69px;" data-text="w:normal;s:20,18,13,8;l:25,23,17,10;ls:2px,1px,0px,0px;fw:500;" data-padding="l:5,5,4,2;" data-border="bos:solid;boc:#ff3a2d;bow:0,0,0,3px;"
                                                                                data-frame_1="e:power4.inOut;st:1640;sp:1200;sR:1640;" data-frame_1_sfx="se:blocktoright;" data-frame_999="o:0;st:w;sR:6160;" style="z-index:9;font-family:Montserrat;">The Future
                                                                            </rs-layer>
                                                                            <!--
-->
                                                                        </rs-slide>
                                                                        <rs-slide data-key="rs-43" data-title="Slide" data-thumb="//demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/slide-07-50x100.jpeg" data-anim="ei:d,d,d,d,d;eo:d,d,d,d,d;s:1000,d,d,d,d;r:0,0,0,0,0;t:fade,slideoverright,fadefromtop,scaledownfromright,blurlight;sl:0,d,d,d,d;">
                                                                            <img src="../wp-content/uploads/23.jpg" title="slide-07" width="2250" height="1500" data-parallax="off" data-panzoom="d:10000;ss:100%;se:120%;os:0px/0;oe:0px/0px;" class="rev-slidebg" data-no-retina>
                                                                            <!--
							-->
                                                                            <rs-layer id="slider-21-slide-43-layer-1" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,18,13,8;l:0,23,17,10;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_0="x:100%;" data-frame_0_mask="u:t;" data-frame_1="st:990;sp:1000;sR:990;"
                                                                                data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7010;" style="z-index:8;background-color:rgba(0,0,0,0.5);">
                                                                            </rs-layer>
                                                                            <!--

							-->
                                                                            <rs-layer id="slider-21-slide-43-layer-2" class="rev-btn rev-hiddenicon" data-type="button" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:155px,137px,104px,64px;" data-text="w:normal;s:20,18,13,8;l:20,18,13,8;ls:1px,0px,0px,0px;" data-dim="minh:0px,none,none,none;"
                                                                                data-padding="t:15,14,11,7;r:40,37,28,17;b:15,14,11,7;l:40,37,28,17;" data-border="bor:30px,30px,30px,30px;" data-frame_0="sX:0.8;sY:0.8;" data-frame_1="e:power4.out;st:4980;sp:1000;sR:4980;"
                                                                                data-frame_999="o:0;st:w;sR:3020;" data-frame_hover="sX:1.1;sY:1.1;c:#000;bgc:#fff;bor:30px,30px,30px,30px;sp:200;e:none;" style="z-index:12;background-color:#f05c5c;font-family:Fredoka One;">Read More
                                                                            </rs-layer>
                                                                            <!--

							-->
                                                                            <rs-layer id="slider-21-slide-43-layer-7" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:-66px,-61px,-46px,-28px;" data-text="w:normal;s:60,55,41,25;l:70,65,49,30;" data-dim="w:679px,632px,480px,296px;" data-frame_0="x:-175%;o:1;"
                                                                                data-frame_0_mask="u:t;x:100%;" data-frame_1="e:power3.out;st:2780;sp:1610;sR:2780;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4610;" style="z-index:10;font-family:Fredoka One;text-transform:uppercase;">Smart solution .Best solution
                                                                            </rs-layer>
                                                                            <!--

							-->
                                                                            <rs-layer id="slider-21-slide-43-layer-9" data-type="text" data-color="rgba(255, 255, 255, 0.9)" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:59px,50px,37px,22px;" data-text="w:normal;s:20,18,13,8;l:30,27,20,12;" data-dim="w:727px,676px,513px,316px;"
                                                                                data-frame_0="y:50,46,34,20;" data-frame_1="st:4140;sp:990;sR:4140;" data-frame_999="o:0;st:w;sR:3870;" style="z-index:11;font-family:Montserrat;">We Developed A Special Curriculum Called C-STEAM We Use Deep And Smart Technologies For Solve And Bring Out The Best.
                                                                            </rs-layer>
                                                                            <!--

							-->
                                                                            <rs-layer id="slider-21-slide-43-layer-10" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:-166px,-150px,-113px,-69px;" data-text="w:normal;s:20,18,13,8;l:25,23,17,10;ls:2px,1px,0px,0px;fw:500;" data-padding="l:5,5,4,2;" data-border="bos:solid;boc:#ff3a2d;bow:0,0,0,3px;"
                                                                                data-frame_1="e:power4.inOut;st:1790;sp:1200;sR:1790;" data-frame_1_sfx="se:blocktoright;" data-frame_999="o:0;st:w;sR:6010;" style="z-index:9;font-family:Montserrat;">The best
                                                                            </rs-layer>
                                                                            <!--
-->
                                                                        </rs-slide>








                                                                        <!-- NEW SLIDE>>>>>>>>>>>> -->
                                                                        <rs-slide data-key="rs-422" data-title="Slide" data-thumb="//demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/slide-03-50x100.jpg" data-anim="ei:d,d,d,d,d,d;eo:d,d,d,d,d,d;s:d,d,d,d,d,d;r:0,0,0,0,0,0;t:slideoverhorizontal,slideremoveleft,fadefromright,fadefromtop,boxslide,scaledownfromright;sl:d,d,d,d,d,d;">
                                                                            <img src="../wp-content/uploads/g.jpg" title="slide-03" width="1800" height="1200" data-parallax="off" data-panzoom="d:10000;ss:100%;se:120%;os:0px/0;oe:0px/0px;" class="rev-slidebg" data-no-retina>
                                                                            <!--
	-->
                                                                            <rs-layer id="slider-21-slide-42-layer-01" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,18,13,8;l:0,23,17,10;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:780;sp:1000;sR:780;"
                                                                                data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7220;" style="z-index:8;background-color:rgba(0,0,0,0.5);">
                                                                            </rs-layer>
                                                                            <!--

	-->
                                                                            <rs-layer id="slider-21-slide-422-layer-02" class="rev-btn rev-hiddenicon" data-type="button" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:156px,137px,104px,64px;" data-text="w:normal;s:20,18,13,8;l:20,18,13,8;ls:1px,0px,0px,0px;" data-dim="minh:0px,none,none,none;"
                                                                                data-padding="t:15,14,11,7;r:40,37,28,17;b:15,14,11,7;l:40,37,28,17;" data-border="bor:30px,30px,30px,30px;" data-frame_0="sX:0.8;sY:0.8;" data-frame_1="e:power4.out;st:5090;sp:1000;sR:5090;"
                                                                                data-frame_999="o:0;st:w;sR:2910;" data-frame_hover="sX:1.1;sY:1.1;c:#000;bgc:#fff;bor:30px,30px,30px,30px;sp:200;e:none;" style="z-index:12;background-color:#f05c5c;font-family:Fredoka One;">Learn and grow
                                                                            </rs-layer>
                                                                            <!--

	-->
                                                                            <rs-layer id="slider-21-slide-422-layer-07" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,20px,30px;y:m;yo:-66px,-60px,-45px,-27px;" data-text="w:normal;s:60,55,41,25;l:70,65,49,30;" data-dim="w:714px,664px,504px,310px;" data-frame_0="x:-175%;o:1;"
                                                                                data-frame_0_mask="u:t;x:100%;" data-frame_1="e:power3.out;st:2720;sp:1610;sR:2720;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4670;" style="z-index:10;font-family:Fredoka One;text-transform:uppercase;">Bringing out the best of youuuu
                                                                            </rs-layer>
                                                                            <!--

	-->
                                                                            <rs-layer id="slider-21-slide-422-layer-09" data-type="text" data-color="rgba(255, 255, 255, 0.9)" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:59px,48px,36px,22px;" data-text="w:normal;s:20,18,13,8;l:30,27,20,12;" data-dim="w:727px,676px,513px,316px;"
                                                                                data-frame_0="y:50,46,34,20;" data-frame_1="st:4140;sp:1130;sR:4140;" data-frame_999="o:0;st:w;sR:3730;" style="z-index:11;font-family:Montserrat;">Help Students Learn STEM As Well As Help Teachers Manage Their Class Activitiessss
                                                                            </rs-layer>
                                                                            <!--

	-->
                                                                            <rs-layer id="slider-21-slide-422-layer-00" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:-165px,-150px,-113px,-69px;" data-text="w:normal;s:20,18,13,8;l:25,23,17,10;ls:2px,1px,0px,0px;fw:500;" data-padding="l:5,5,4,2;" data-border="bos:solid;boc:#ff3a2d;bow:0,0,0,3px;"
                                                                                data-frame_1="e:power4.inOut;st:1640;sp:1200;sR:1640;" data-frame_1_sfx="se:blocktoright;" data-frame_999="o:0;st:w;sR:6160;" style="z-index:9;font-family:Montserrat;">The Futureee
                                                                            </rs-layer>
                                                                            <!--
-->
                                                                        </rs-slide>


<!-- KACHI SLIDE -->
<!-- NEW SLIDE>>>>>>>>>>>> -->
                                                                        <rs-slide data-key="rs-423" data-title="Slide" data-thumb="//demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/slide-03-50x100.jpg" data-anim="ei:d,d,d,d,d,d;eo:d,d,d,d,d,d;s:d,d,d,d,d,d;r:0,0,0,0,0,0;t:slideoverhorizontal,slideremoveleft,fadefromright,fadefromtop,boxslide,scaledownfromright;sl:d,d,d,d,d,d;">
                                                                            <img src="../wp-content/uploads/feature2.jpg" title="slide-03" width="1800" height="1200" data-parallax="off" data-panzoom="d:10000;ss:100%;se:120%;os:0px/0;oe:0px/0px;" class="rev-slidebg" data-no-retina>
                                                                            <!--
	-->
                                                                            <rs-layer id="slider-21-slide-42-layer-01" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,18,13,8;l:0,23,17,10;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:780;sp:1000;sR:780;"
                                                                                data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7220;" style="z-index:8;background-color:rgba(0,0,0,0.5);">
                                                                            </rs-layer>
                                                                            <!--

	-->
                                                                            <rs-layer id="slider-21-slide-422-layer-02" class="rev-btn rev-hiddenicon" data-type="button" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:156px,137px,104px,64px;" data-text="w:normal;s:20,18,13,8;l:20,18,13,8;ls:1px,0px,0px,0px;" data-dim="minh:0px,none,none,none;"
                                                                                data-padding="t:15,14,11,7;r:40,37,28,17;b:15,14,11,7;l:40,37,28,17;" data-border="bor:30px,30px,30px,30px;" data-frame_0="sX:0.8;sY:0.8;" data-frame_1="e:power4.out;st:5090;sp:1000;sR:5090;"
                                                                                data-frame_999="o:0;st:w;sR:2910;" data-frame_hover="sX:1.1;sY:1.1;c:#000;bgc:#fff;bor:30px,30px,30px,30px;sp:200;e:none;" style="z-index:12;background-color:#f05c5c;font-family:Fredoka One;">Learn More
                                                                            </rs-layer>
                                                                            <!--

	-->
                                                                            <rs-layer id="slider-21-slide-422-layer-07" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,20px,30px;y:m;yo:-66px,-60px,-45px,-27px;" data-text="w:normal;s:60,55,41,25;l:70,65,49,30;" data-dim="w:714px,664px,504px,310px;" data-frame_0="x:-175%;o:1;"
                                                                                data-frame_0_mask="u:t;x:100%;" data-frame_1="e:power3.out;st:2720;sp:1610;sR:2720;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4670;" style="z-index:10;font-family:Fredoka One;text-transform:uppercase;">Learn and grow
                                                                            </rs-layer>
                                                                            <!--

	-->
                                                                            <rs-layer id="slider-21-slide-422-layer-09" data-type="text" data-color="rgba(255, 255, 255, 0.9)" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:59px,48px,36px,22px;" data-text="w:normal;s:20,18,13,8;l:30,27,20,12;" data-dim="w:727px,676px,513px,316px;"
                                                                                data-frame_0="y:50,46,34,20;" data-frame_1="st:4140;sp:1130;sR:4140;" data-frame_999="o:0;st:w;sR:3730;" style="z-index:11;font-family:Montserrat;">Help Students Learn STEM As Well As Help Teachers Manage Their Class Activitiessss
                                                                            </rs-layer>
                                                                            <!--

	-->
                                                                            <rs-layer id="slider-21-slide-422-layer-00" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:-165px,-150px,-113px,-69px;" data-text="w:normal;s:20,18,13,8;l:25,23,17,10;ls:2px,1px,0px,0px;fw:500;" data-padding="l:5,5,4,2;" data-border="bos:solid;boc:#ff3a2d;bow:0,0,0,3px;"
                                                                                data-frame_1="e:power4.inOut;st:1640;sp:1200;sR:1640;" data-frame_1_sfx="se:blocktoright;" data-frame_999="o:0;st:w;sR:6160;" style="z-index:9;font-family:Montserrat;">The Future
                                                                            </rs-layer>
                                                                            <!--
-->
                                                                        </rs-slide>


<!-- KACHI SLIE 2 -->
<rs-slide data-key="rs-424" data-title="Slide" data-thumb="//demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/slide-03-50x100.jpg" data-anim="ei:d,d,d,d,d,d;eo:d,d,d,d,d,d;s:d,d,d,d,d,d;r:0,0,0,0,0,0;t:slideoverhorizontal,slideremoveleft,fadefromright,fadefromtop,boxslide,scaledownfromright;sl:d,d,d,d,d,d;">
	<img src="../wp-content/uploads/HDStockImages.com-YdkapJ.jpg" title="slide-03" width="1800" height="1200" data-parallax="off" data-panzoom="d:10000;ss:100%;se:120%;os:0px/0;oe:0px/0px;" class="rev-slidebg" data-no-retina>
	<!--
-->
	<rs-layer id="slider-21-slide-42-layer-01" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,18,13,8;l:0,23,17,10;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:780;sp:1000;sR:780;"
		data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7220;" style="z-index:8;background-color:rgba(0,0,0,0.5);">
	</rs-layer>
	<!--

-->
	<rs-layer id="slider-21-slide-422-layer-02" class="rev-btn rev-hiddenicon" data-type="button" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:156px,137px,104px,64px;" data-text="w:normal;s:20,18,13,8;l:20,18,13,8;ls:1px,0px,0px,0px;" data-dim="minh:0px,none,none,none;"
		data-padding="t:15,14,11,7;r:40,37,28,17;b:15,14,11,7;l:40,37,28,17;" data-border="bor:30px,30px,30px,30px;" data-frame_0="sX:0.8;sY:0.8;" data-frame_1="e:power4.out;st:5090;sp:1000;sR:5090;"
		data-frame_999="o:0;st:w;sR:2910;" data-frame_hover="sX:1.1;sY:1.1;c:#000;bgc:#fff;bor:30px,30px,30px,30px;sp:200;e:none;" style="z-index:12;background-color:#f05c5c;font-family:Fredoka One;">Learn More
	</rs-layer>
	<!--

-->
	<rs-layer id="slider-21-slide-422-layer-07" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,20px,30px;y:m;yo:-66px,-60px,-45px,-27px;" data-text="w:normal;s:60,55,41,25;l:70,65,49,30;" data-dim="w:714px,664px,504px,310px;" data-frame_0="x:-175%;o:1;"
		data-frame_0_mask="u:t;x:100%;" data-frame_1="e:power3.out;st:2720;sp:1610;sR:2720;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4670;" style="z-index:10;font-family:Fredoka One;text-transform:uppercase;">Become the best
	</rs-layer>
	<!--

-->
	<rs-layer id="slider-21-slide-422-layer-09" data-type="text" data-color="rgba(255, 255, 255, 0.9)" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:59px,48px,36px,22px;" data-text="w:normal;s:20,18,13,8;l:30,27,20,12;" data-dim="w:727px,676px,513px,316px;"
		data-frame_0="y:50,46,34,20;" data-frame_1="st:4140;sp:1130;sR:4140;" data-frame_999="o:0;st:w;sR:3730;" style="z-index:11;font-family:Montserrat;">INNOVATIONS for YOU
	</rs-layer>
	<!--

-->
	<rs-layer id="slider-21-slide-422-layer-00" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:-165px,-150px,-113px,-69px;" data-text="w:normal;s:20,18,13,8;l:25,23,17,10;ls:2px,1px,0px,0px;fw:500;" data-padding="l:5,5,4,2;" data-border="bos:solid;boc:#ff3a2d;bow:0,0,0,3px;"
		data-frame_1="e:power4.inOut;st:1640;sp:1200;sR:1640;" data-frame_1_sfx="se:blocktoright;" data-frame_999="o:0;st:w;sR:6160;" style="z-index:9;font-family:Montserrat;">Education
	</rs-layer>
	<!--
-->
</rs-slide>


<!-- KACHI SLIDE 3 -->

<rs-slide data-key="rs-425" data-title="Slide" data-thumb="//demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/slide-03-50x100.jpg" data-anim="ei:d,d,d,d,d,d;eo:d,d,d,d,d,d;s:d,d,d,d,d,d;r:0,0,0,0,0,0;t:slideoverhorizontal,slideremoveleft,fadefromright,fadefromtop,boxslide,scaledownfromright;sl:d,d,d,d,d,d;">
	<img src="../wp-content/uploads/Tejiri-Image_compressed.jpeg" title="slide-03" width="1800" height="1200" data-parallax="off" data-panzoom="d:10000;ss:100%;se:120%;os:0px/0;oe:0px/0px;" class="rev-slidebg" data-no-retina>
	<!--
-->
	<rs-layer id="slider-21-slide-42-layer-01" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,18,13,8;l:0,23,17,10;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:780;sp:1000;sR:780;"
		data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7220;" style="z-index:8;background-color:rgba(0,0,0,0.5);">
	</rs-layer>
	<!--

-->
	<rs-layer id="slider-21-slide-422-layer-02" class="rev-btn rev-hiddenicon" data-type="button" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:156px,137px,104px,64px;" data-text="w:normal;s:20,18,13,8;l:20,18,13,8;ls:1px,0px,0px,0px;" data-dim="minh:0px,none,none,none;"
		data-padding="t:15,14,11,7;r:40,37,28,17;b:15,14,11,7;l:40,37,28,17;" data-border="bor:30px,30px,30px,30px;" data-frame_0="sX:0.8;sY:0.8;" data-frame_1="e:power4.out;st:5090;sp:1000;sR:5090;"
		data-frame_999="o:0;st:w;sR:2910;" data-frame_hover="sX:1.1;sY:1.1;c:#000;bgc:#fff;bor:30px,30px,30px,30px;sp:200;e:none;" style="z-index:12;background-color:#f05c5c;font-family:Fredoka One;">Learn More
	</rs-layer>
	<!--

-->
	<rs-layer id="slider-21-slide-422-layer-07" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,20px,30px;y:m;yo:-66px,-60px,-45px,-27px;" data-text="w:normal;s:60,55,41,25;l:70,65,49,30;" data-dim="w:714px,664px,504px,310px;" data-frame_0="x:-175%;o:1;"
		data-frame_0_mask="u:t;x:100%;" data-frame_1="e:power3.out;st:2720;sp:1610;sR:2720;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4670;" style="z-index:10;font-family:Fredoka One;text-transform:uppercase;">Bringing out the best of you
	</rs-layer>
	<!--

-->
	<rs-layer id="slider-21-slide-422-layer-09" data-type="text" data-color="rgba(255, 255, 255, 0.9)" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:59px,48px,36px,22px;" data-text="w:normal;s:20,18,13,8;l:30,27,20,12;" data-dim="w:727px,676px,513px,316px;"
		data-frame_0="y:50,46,34,20;" data-frame_1="st:4140;sp:1130;sR:4140;" data-frame_999="o:0;st:w;sR:3730;" style="z-index:11;font-family:Montserrat;">Help Students Learn STEM As Well As Help Teachers Manage Their Class Activities
	</rs-layer>
	<!--

-->
	<rs-layer id="slider-21-slide-422-layer-00" data-type="text" data-rsp_ch="on" data-xy="xo:0,30px,30px,30px;y:m;yo:-165px,-150px,-113px,-69px;" data-text="w:normal;s:20,18,13,8;l:25,23,17,10;ls:2px,1px,0px,0px;fw:500;" data-padding="l:5,5,4,2;" data-border="bos:solid;boc:#ff3a2d;bow:0,0,0,3px;"
		data-frame_1="e:power4.inOut;st:1640;sp:1200;sR:1640;" data-frame_1_sfx="se:blocktoright;" data-frame_999="o:0;st:w;sR:6160;" style="z-index:9;font-family:Montserrat;">The Future
	</rs-layer>
	<!--
-->
</rs-slide>












                                                                    </rs-slides>
                                                                </rs-module>
                                                                <script type="text/javascript">
                                                                    setREVStartSize({
                                                                        c: 'rev_slider_21_1',
                                                                        rl: [1240, 1024, 778, 480],
                                                                        el: [650, 605, 460, 284],
                                                                        gw: [1100, 1024, 778, 480],
                                                                        gh: [650, 605, 460, 284],
                                                                        type: 'standard',
                                                                        justify: '',
                                                                        layout: 'fullwidth',
                                                                        mh: "0"
                                                                    });
                                                                    var revapi21,
                                                                        tpj;

                                                                    function revinit_revslider211() {
                                                                        jQuery(function() {
                                                                            tpj = jQuery;
                                                                            revapi21 = tpj("#rev_slider_21_1");
                                                                            if (revapi21 == undefined || revapi21.revolution == undefined) {
                                                                                revslider_showDoubleJqueryError("rev_slider_21_1");
                                                                            } else {
                                                                                revapi21.revolution({
                                                                                    sliderLayout: "fullwidth",
                                                                                    visibilityLevels: "1240,1024,778,480",
                                                                                    gridwidth: "1100,1024,778,480",
                                                                                    gridheight: "650,605,460,284",
                                                                                    spinner: "spinner2",
                                                                                    perspectiveType: "local",
                                                                                    editorheight: "650,605,460,284",
                                                                                    responsiveLevels: "1240,1024,778,480",
                                                                                    progressBar: {
                                                                                        disableProgressBar: true
                                                                                    },
                                                                                    navigation: {
                                                                                        onHoverStop: false,
                                                                                        arrows: {
                                                                                            enable: true,
                                                                                            tmp: "<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div> </div>",
                                                                                            style: "zeus",
                                                                                            hide_onmobile: true,
                                                                                            hide_under: 778,
                                                                                            hide_onleave: true,
                                                                                            left: {
                                                                                                h_offset: 30
                                                                                            },
                                                                                            right: {
                                                                                                h_offset: 30
                                                                                            }
                                                                                        }
                                                                                    },
                                                                                    parallax: {
                                                                                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 30],
                                                                                        type: "scroll",
                                                                                        origo: "slidercenter",
                                                                                        speed: 0
                                                                                    },
                                                                                    scrolleffect: {
                                                                                        set: true,
                                                                                        multiplicator: 1.3,
                                                                                        multiplicator_layers: 1.3
                                                                                    },
                                                                                    fallbacks: {
                                                                                        allowHTML5AutoPlayOnAndroid: true
                                                                                    },
                                                                                });
                                                                            }

                                                                        });
                                                                    } // End of RevInitScript
                                                                    var once_revslider211 = false;
                                                                    if (document.readyState === "loading") {
                                                                        document.addEventListener('readystatechange', function() {
                                                                            if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider211) {
                                                                                once_revslider211 = true;
                                                                                revinit_revslider211();
                                                                            }
                                                                        });
                                                                    } else {
                                                                        once_revslider211 = true;
                                                                        revinit_revslider211();
                                                                    }
                                                                </script>
                                                                <script>
                                                                    var htmlDivCss = ' #rev_slider_21_1_wrapper rs-loader.spinner2{ background-color: #34aadc !important; } ';
                                                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                                    if (htmlDiv) {
                                                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                    } else {
                                                                        var htmlDiv = document.createElement('div');
                                                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                                    }
                                                                </script>
                                                                <script>
                                                                    var htmlDivCss = unescape("%23rev_slider_21_1_wrapper%20.zeus.tparrows%20%7B%0A%20%20cursor%3Apointer%3B%0A%20%20min-width%3A70px%3B%0A%20%20min-height%3A70px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20display%3Ablock%3B%0A%20%20z-index%3A1000%3B%0A%20%20border-radius%3A50%25%3B%20%20%20%0A%20%20overflow%3Ahidden%3B%0A%20%20background%3Argba%280%2C0%2C0%2C0.1%29%3B%0A%7D%0A%0A%23rev_slider_21_1_wrapper%20.zeus.tparrows%3Abefore%20%7B%0A%20%20font-family%3A%20%27revicons%27%3B%0A%20%20font-size%3A20px%3B%0A%20%20color%3A%23ffffff%3B%0A%20%20display%3Ablock%3B%0A%20%20line-height%3A%2070px%3B%0A%20%20text-align%3A%20center%3B%20%20%20%20%0A%20%20z-index%3A2%3B%0A%20%20position%3Arelative%3B%0A%7D%0A%23rev_slider_21_1_wrapper%20.zeus.tparrows.tp-leftarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_21_1_wrapper%20.zeus.tparrows.tp-rightarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce825%27%3B%0A%7D%0A%0A%23rev_slider_21_1_wrapper%20.zeus%20.tp-title-wrap%20%7B%0A%20%20background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20opacity%3A0%3B%0A%20%20transform%3Ascale%280%29%3B%0A%20%20-webkit-transform%3Ascale%280%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%20%20%20border-radius%3A50%25%3B%0A%20%7D%0A%23rev_slider_21_1_wrapper%20.zeus%20.tp-arr-imgholder%20%7B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20position%3Aabsolute%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%20background-size%3Acover%3B%0A%20%20border-radius%3A50%25%3B%0A%20%20transform%3Atranslatex%28-100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28-100%25%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%0A%20%7D%0A%23rev_slider_21_1_wrapper%20.zeus.tp-rightarrow%20.tp-arr-imgholder%20%7B%0A%20%20%20%20transform%3Atranslatex%28100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28100%25%29%3B%0A%20%20%20%20%20%20%7D%0A%23rev_slider_21_1_wrapper%20.zeus.tparrows%3Ahover%20.tp-arr-imgholder%20%7B%0A%20%20transform%3Atranslatex%280%29%3B%0A%20%20-webkit-transform%3Atranslatex%280%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%20%20%20%20%20%0A%23rev_slider_21_1_wrapper%20.zeus.tparrows%3Ahover%20.tp-title-wrap%20%7B%0A%20%20transform%3Ascale%281%29%3B%0A%20%20-webkit-transform%3Ascale%281%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%0A");
                                                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                                    if (htmlDiv) {
                                                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                    } else {
                                                                        var htmlDiv = document.createElement('div');
                                                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                                    }
                                                                </script>
                                                                <script>
                                                                    var htmlDivCss = unescape("%0A%0A");
                                                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                                    if (htmlDiv) {
                                                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                    } else {
                                                                        var htmlDiv = document.createElement('div');
                                                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                                    }
                                                                </script>
                                                            </rs-module-wrap>
                                                            <!-- END REVOLUTION SLIDER -->


			<!-- ABOUT US SECTION -->
</div></div></div></div></div></div><div  class = "yolo-full-width "><div class="vc_row wpb_row vc_row-fluid vc_custom_1594286674035 vc_row-has-fill"><div class="shape_effect effect-shape1"><div class="shape1">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape1.png" alt="image">
            </div><div class="shape2">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape2.png" alt="image">
            </div><div class="shape3">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape3.png" alt="image">
            </div><div class="shape4">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape4.png" alt="image">
            </div><div class="shape6">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape6.png" alt="image">
            </div></div><div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12 wpb_animate_when_almost_visible yolo-css-animation wpb_fadeInUp" style="-webkit-animation-duration: 1000ms;-moz-animation-duration: 1000ms;-ms-animation-duration: 1000ms;-o-animation-duration: 1000ms;animation-duration: 1000ms"><div class="vc_column-inner "><div class="wpb_wrapper">			<div class="yolo-sc-title sc-title-wrap  style1 align-center  vc_custom_1594284845791">
									<p class="sc-sub-title"  >
						Education For Everyone					</p>
				
									<h2 class="sc-title" style= "font-size:48px;">
						Learn about  <mark>Us</mark> at Skudriod					</h2>
								
			</div>
			<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">        <div class="yolo-sc-text-info sc-text-info-wrap    style3">
                            <h3 class="sc-title" style="font-size:32px ">
                    About Us                </h3>
                                                    <div class="description" >
                    <p>We Help Students Learn STEM As Well As Help
						Teachers Manage Their Class Activities Seamlessly
						Issues A Business May Face.
						</p>
<p>We Developed A Special Curriculum Called C-STEAM
	We Use Deep And Smart Technologies
	For Solve And Bring Out The Best.</p>
                </div>
                                            <div class="item-content-inner clearfix">
                                                                                    <div class="item-content-wrap" >
                                      
                                        <div class="icon-wrap">
                                            <span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
                                        </div>    
                                                                        <span class="icon-content" >Robotics</span>
                                </div>
                                                                                                                <div class="item-content-wrap" >
                                      
                                        <div class="icon-wrap">
                                            <span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
                                        </div>    
                                                                        <span class="icon-content" >Virtual Reality</span>
                                </div>
                                                                                                                <div class="item-content-wrap" >
                                      
                                        <div class="icon-wrap">
                                            <span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
                                        </div>    
                                                                        <span class="icon-content" >STEM</span>
                                </div>

								<div class="item-content-wrap" >
                                      
									<div class="icon-wrap">
										<span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
									</div>    
																	<span class="icon-content" >Engineering</span>
							</div>

							<div class="item-content-wrap" >
                                      
								<div class="icon-wrap">
									<span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
								</div>    
																<span class="icon-content" >Smart Edu-devices</span>
						</div>

						<div class="item-content-wrap" >
                                      
							<div class="icon-wrap">
								<span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
							</div>    
															<span class="icon-content" >Smart class room</span>
					</div>

					<div class="item-content-wrap" >
                                      
						<div class="icon-wrap">
							<span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
						</div>    
														<span class="icon-content" >Web3</span>
				</div>

				<!-- <div class="item-content-wrap" >
                                      
					<div class="icon-wrap">
						<span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
					</div>    
													<span class="icon-content" >Engineering</span>
			</div> -->

								<!-- <div class="item-content-wrap" >
                                      
									<div class="icon-wrap">
										<span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
									</div>    
																	<span class="icon-content" >IOT</span>
							</div> -->
                                                                                                                <div class="item-content-wrap" >
                                      
                                        <div class="icon-wrap">
                                            <span class="icon fas fa-check-circle" style="color: #f05c5c" ></span>
                                        </div>    

                                                                        <span class="icon-content" >IOT</span>
                                </div>
                                                                        </div>














                                        <div class='yolo-button-wrap' data-text='Contact Us'><a class='button' href="../contact/index.php">Contact Us</a></div>            
        </div>
        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">                <div class="sc-video-player-wrap">
            <div id="yolo-video-639af406807a7" class="yolo-sc-video-player " style="height: 363px; background-image: url('../wp-content/uploads/2020/04/stem.png');" >
               
                <div class="play-button-wrap">
                    <p  class="play-button" 
                        data-height="363"
                        data-video="https://www.youtube.com/watch?v=fH5iLx_jCUk"
                        data-id ="7e90gBu4pas"
                        data-width="full_width"
                    >
                        <i  style="color:#1fc0ff" class="fa fa-play"></i>
                    </p>
                </div>
                <div class="iframe-video-player">
                    <p class="video-close">X</p>
                </div>
            </div>
        </div>
        </div></div></div></div></div></div></div></div></div></div><div  class = "yolo-full-width  has_parallax"><div data-overlay-color="rgba(255,255,255,0.85)" class="vc_row wpb_row vc_row-fluid vc_custom_1594286698965 vc_row-has-fill yolo_parallax_effect overlay-bg-vc-wapper"><div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12 wpb_animate_when_almost_visible yolo-css-animation wpb_fadeInUp" style="-webkit-animation-duration: 1000ms;-moz-animation-duration: 1000ms;-ms-animation-duration: 1000ms;-o-animation-duration: 1000ms;animation-duration: 1000ms"><div class="vc_column-inner "><div class="wpb_wrapper">			<div class="yolo-sc-title sc-title-wrap  style1 align-center  vc_custom_1594286447139">
									<p class="sc-sub-title"  >
						Star Learning Everything					</p>
				
									<h2 class="sc-title" style= "font-size:48px;">
						Build Your Kids Dream <mark>Today On</mark>					</h2>
								
			</div>
			            <div class="yolo-sc-icon-box row ">
                <div class="sc-icon-box-wrap box_style_1 ">
                                        
                    
<div class=" icon-box-wrap style_1  col-6 col-sm-6 col-md-3" style= "background-color: #f05c5c">
    <div class="icon-box-container">
            <a href="#__" title="Start Here" target="_self">
                        <div class="icon-inner">
                <div class="icon-wrap">
                    <img src="../wp-content/uploads/robot.png"  class="img-responsive" alt="First School (1+ years)" />
                </div>  
            </div>  
         
            </a>
            <div class="icon-content">
            <h3 class="icon-title" >
                                    <a href="#__" title="Start Here" target="_self">
										Robotics                                   </a>
                            </h3>
                            <p class="icon-description"> Our courses are designed for professionals looking to enter the field of robotics or expand their knowledge and skills in this exciting and rapidly-growing area.</p>
                                        <a class="icon-btn btn-readmore-wrap" href="#__"
                   title="Start Here"
                   target="_self">
                    <h6 class="m0 text btn-readmore">
                        Start Here                    </h6>
                </a>
                    </div>
    </div>
</div>
<div class=" icon-box-wrap style_1  col-6 col-sm-6 col-md-3" style= "background-color: #ffd338">
    <div class="icon-box-container">
            <a href="#__" title="Start Here" target="_self">
                        <div class="icon-inner">
                <div class="icon-wrap">
                    <img src="../wp-content/uploads/software.png"  class="img-responsive" alt="Pre School (2+ years)" />
                </div>  
            </div>  
         
            </a>
            <div class="icon-content">
            <h3 class="icon-title" >
                                    <a href="#__" title="Start Here" target="_self">
										Software                                    </a>
                            </h3>
                            <p class="icon-description">Our experienced instructors will guide participants through the entire software development process, including design, implementation, testing, and maintenance. </p>
                                        <a class="icon-btn btn-readmore-wrap" href="#__"
                   title="Start Here"
                   target="_self">
                    <h6 class="m0 text btn-readmore">
                        Start Here                    </h6>
                </a>
                    </div>
    </div>
</div>
<div class=" icon-box-wrap style_1  col-6 col-sm-6 col-md-3" style= "background-color: #56d47e">
    <div class="icon-box-container">
            <a href="#__" title="Start Here" target="_self">
                        <div class="icon-inner">
                <div class="icon-wrap">
                    <img src="../wp-content/uploads/development.png"  class="img-responsive" alt="Kindergarten (3+ years)" />
                </div>  
            </div>  
         
            </a>
            <div class="icon-content">
            <h3 class="icon-title" >
                                    <a href="#__" title="Start Here" target="_self">
										Mobile App                                    </a>
                            </h3>
                            <p class="icon-description">Our experienced instructors will guide participants through the entire mobile app development process, from idea generation to deployment. </p>
                                        <a class="icon-btn btn-readmore-wrap" href="#__"
                   title="Start Here"
                   target="_self">
                    <h6 class="m0 text btn-readmore">
                        Start Here                    </h6>
                </a>
                    </div>
    </div>
</div>
<div class=" icon-box-wrap style_1  col-6 col-sm-6 col-md-3" style= "background-color: #1ec0ff">
    <div class="icon-box-container">
            <a href="#__" title="Start Here" target="_self">
                        <div class="icon-inner">
                <div class="icon-wrap">
                    <img src="../wp-content/uploads/virtual-reality.png"  class="img-responsive" alt="Pre-K For All (6 years)" />
                </div>  
            </div>  
         
            </a>
            <div class="icon-content">
            <h3 class="icon-title" >
                                    <a href="#__" title="Start Here" target="_self">
                                Virtual Reality                                    </a>
                            </h3>
                            <p class="icon-description"> Our experienced instructors will guide participants through the principles of VR technology and design, as well as the tools and techniques used to create immersive VR experiences.</p>
                                        <a class="icon-btn btn-readmore-wrap" href="#__"
                   title="Start Here"
                   target="_self">
                    <h6 class="m0 text btn-readmore">
                        Start Here                    </h6>
                </a>
                    </div>
    </div>
</div>                </div>
                                            <script>
                            jQuery(document).ready(function($){
                                "use strict";
                                function postsCarousel() {
                                    var checkWidth = jQuery(window).width();
                                    var owlPost = jQuery(".yolo-sc-icon-box .sc-icon-box-wrap");
                                    if (checkWidth > 900) {
                                        if(typeof owlPost.data('owl.carousel') != 'undefined'){
                                            owlPost.data('owl.carousel').destroy(); 
                                        }
                                        owlPost.removeClass('owl-carousel');
                                    } else if (checkWidth <= 900) {
                                        owlPost.addClass('owl-carousel');
                                        owlPost.owlCarousel({
                                            margin: 0,
                                            items : 2,
                                            autoHeight:true,
                                            slideSpeed : 5000,
                                            autoplay: false,
                                            autoplaySpeed: 1000,
                                            autoplayTimeout: 5000,
                                            dots: true,
                                            loop: false,
                                            responsive : {
                                                0 : {
                                                    items : 1
                                                },
                                                // breakpoint from 480 up
                                                600 : {
                                                    items : 2,
                                                },

                                                800 : {
                                                    items : 3,
                                                },
                                            }
                                        });
                                    }
                                }

                              postsCarousel();
                              jQuery(window).resize(postsCarousel); 
                              
                            });
                        </script>
                                    </div>
            </div></div></div></div></div></div><div  class = "yolo-full-width "><div class="vc_row wpb_row vc_row-fluid vc_custom_1594349008847 vc_row-has-fill"><div class="shape_effect effect-shape2"><div class="sun2">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/sun2.png" alt="image">
            </div><div class="shape1">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape1.png" alt="image">
            </div><div class="shape2">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape2.png" alt="image">
            </div><div class="shape4">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape4.png" alt="image">
            </div><div class="shape5">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape5.png" alt="image">
            </div></div><div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12 wpb_animate_when_almost_visible yolo-css-animation wpb_fadeInUp" style="-webkit-animation-duration: 1000ms;-moz-animation-duration: 1000ms;-ms-animation-duration: 1000ms;-o-animation-duration: 1000ms;animation-duration: 1000ms"><div class="vc_column-inner "><div class="wpb_wrapper">			<div class="yolo-sc-title sc-title-wrap  style1 align-center  vc_custom_1594285767656">
									<p class="sc-sub-title"  >
						Together We Can Create					</p>
				
									<h2 class="sc-title" style= "font-size:48px;">
						Who stand by <mark>Your Kids</mark> Always					</h2>
								
			</div>
			        <div id= 639af40683609 class="yolo-teacher-sc yolo-teacher-masonry yolo-sc-teacher loadmore-wrap">
            <!-- Section content -->
                            <div class="grid-mansory clearfix">
                    <div class="posts-loop-content row">

                        <div class="masonry-container">
                                                        
                                                        <article class="teacher-item-wrap loadmore-item masonry-item layout-1 col-6 col-sm-6 col-md-6 teacher-arc-wrap post-2081 yolo_teacher type-yolo_teacher status-publish has-post-thumbnail hentry">
                                <div class="yolo-flex -row teacher-item"  >
                                    <div class="teacher-avatar-wrap yolo-flex -col -center fb-5">
                                            <div class="entry-teacher-bg" style="background-image: url('../wp-content/uploads/2018/10/teacher-07.jpg')"></div>
                                            <a class="teacher-avatar" href="../teachers/alice-bohm/index.php">
                                            </a>
                                                                                                                            <div class="teacher-social">
                                                <ul>
                                                    <li><a href="#__" class="fab fa-facebook-f"></a></li>                                                    <li><a href="#__" class="fab fa-google-plus-g"></a></li>                                                    <li><a href="#__" class="fab fa-twitter"></a></li>                                                    <li><a href="#__" class="fab fa-pinterest-p"></a></li>                                                </ul>
                                            </div>
                                                                            </div>
                                    
                                    <div class="teacher-info fb-7">
                                        <h3 class="teacher-title">
                                            <a title="Post by Alice Bohm" href="../teachers/alice-bohm/index.php" rel="author">
                                                Alice Bohm                                            </a>
                                        </h3>
                                        <div class="teacher-category">
                                             <a href="../class-category/health/index.php" rel="tag">Health</a>, <a href="../class-category/life-skills/index.php" rel="tag">Life Skills</a>                                        </div>
                                        <div class="teacher-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>                                        </div>
                                        
                                        <div class="btn-call-me">
                                            <a class="btn call-me" title="Post by Alice Bohm" href="tel:+23432234654" rel="author">
                                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                                +23 432 234 654                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            
                                                        
                                                        <article class="teacher-item-wrap loadmore-item masonry-item layout-1 col-6 col-sm-6 col-md-6 teacher-arc-wrap post-61 yolo_teacher type-yolo_teacher status-publish has-post-thumbnail hentry">
                                <div class="yolo-flex -row teacher-item"  >
                                    <div class="teacher-avatar-wrap yolo-flex -col -center fb-5">
                                            <div class="entry-teacher-bg" style="background-image: url('../wp-content/uploads/2018/10/teacher-02.jpg')"></div>
                                            <a class="teacher-avatar" href="../teachers/grom-frog/index.php">
                                            </a>
                                                                                                                            <div class="teacher-social">
                                                <ul>
                                                    <li><a href="#__" class="fab fa-facebook-f"></a></li>                                                    <li><a href="#__" class="fab fa-google-plus-g"></a></li>                                                    <li><a href="#__" class="fab fa-twitter"></a></li>                                                    <li><a href="#__" class="fab fa-pinterest-p"></a></li>                                                </ul>
                                            </div>
                                                                            </div>
                                    
                                    <div class="teacher-info fb-7">
                                        <h3 class="teacher-title">
                                            <a title="Post by Grom Frog" href="../teachers/grom-frog/index.php" rel="author">
                                                Grom Frog                                            </a>
                                        </h3>
                                        <div class="teacher-category">
                                             <a href="../class-category/computer-skills/index.php" rel="tag">Computer Skills</a>, <a href="../class-category/health/index.php" rel="tag">Health</a>                                        </div>
                                        <div class="teacher-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>                                        </div>
                                        
                                        <div class="btn-call-me">
                                            <a class="btn call-me" title="Post by Grom Frog" href="tel:+23423543234" rel="author">
                                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                                +23 423 543 234                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            
                                                        
                                                        <article class="teacher-item-wrap loadmore-item masonry-item layout-1 col-6 col-sm-6 col-md-6 teacher-arc-wrap post-59 yolo_teacher type-yolo_teacher status-publish has-post-thumbnail hentry">
                                <div class="yolo-flex -row teacher-item"  >
                                    <div class="teacher-avatar-wrap yolo-flex -col -center fb-5">
                                            <div class="entry-teacher-bg" style="background-image: url('../wp-content/uploads/2018/10/teacher-01.jpg')"></div>
                                            <a class="teacher-avatar" href="../teachers/emily-backham/index.php">
                                            </a>
                                                                                                                            <div class="teacher-social">
                                                <ul>
                                                    <li><a href="#__" class="fab fa-facebook-f"></a></li>                                                    <li><a href="#__" class="fab fa-google-plus-g"></a></li>                                                    <li><a href="#__" class="fab fa-twitter"></a></li>                                                    <li><a href="#__" class="fab fa-pinterest-p"></a></li>                                                </ul>
                                            </div>
                                                                            </div>
                                    
                                    <div class="teacher-info fb-7">
                                        <h3 class="teacher-title">
                                            <a title="Post by Emily Backham" href="../teachers/emily-backham/index.php" rel="author">
                                                Emily Backham                                            </a>
                                        </h3>
                                        <div class="teacher-category">
                                             <a href="../class-category/math/index.php" rel="tag">Math</a>, <a href="../class-category/science/index.php" rel="tag">Science</a>                                        </div>
                                        <div class="teacher-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>                                        </div>
                                        
                                        <div class="btn-call-me">
                                            <a class="btn call-me" title="Post by Emily Backham" href="tel:+43234234543" rel="author">
                                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                                +43 234 234 543                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            
                                                        
                                                        <article class="teacher-item-wrap loadmore-item masonry-item layout-1 col-6 col-sm-6 col-md-6 teacher-arc-wrap post-58 yolo_teacher type-yolo_teacher status-publish has-post-thumbnail hentry">
                                <div class="yolo-flex -row teacher-item"  >
                                    <div class="teacher-avatar-wrap yolo-flex -col -center fb-5">
                                            <div class="entry-teacher-bg" style="background-image: url('../wp-content/uploads/2018/10/teacher-05.jpg')"></div>
                                            <a class="teacher-avatar" href="../teachers/jenny-hilton/index.php">
                                            </a>
                                                                                                                            <div class="teacher-social">
                                                <ul>
                                                    <li><a href="#__" class="fab fa-facebook-f"></a></li>                                                    <li><a href="#__" class="fab fa-google-plus-g"></a></li>                                                    <li><a href="#__" class="fab fa-twitter"></a></li>                                                    <li><a href="#__" class="fab fa-pinterest-p"></a></li>                                                </ul>
                                            </div>
                                                                            </div>
                                    
                                    <div class="teacher-info fb-7">
                                        <h3 class="teacher-title">
                                            <a title="Post by Jenny Hilton" href="../teachers/jenny-hilton/index.php" rel="author">
                                                Jenny Hilton                                            </a>
                                        </h3>
                                        <div class="teacher-category">
                                             <a href="../class-category/computer-skills/index.php" rel="tag">Computer Skills</a>, <a href="../class-category/life-skills/index.php" rel="tag">Life Skills</a>                                        </div>
                                        <div class="teacher-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>                                        </div>
                                        
                                        <div class="btn-call-me">
                                            <a class="btn call-me" title="Post by Jenny Hilton" href="tel:+53346234653" rel="author">
                                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                                +53 346 234 653                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            
                                                    </div>

                    </div> <!-- /.posts-loop-content -->
                </div>
            
            <!-- Pagination and loadmore -->
            
                        <script>
                jQuery(document).ready(function($){
                    "use strict";
                    function postsMasonry() {
                        var checkWidth = $(window).width();
                        var $container = $('#639af40683609 .grid-mansory .masonry-container');
                        if ( $('#639af40683609 .grid-mansory').length > 0) {
                            $container.imagesLoaded(function() {
                                $container.isotope({
                                    layoutMode : 'fitRows',
                                    itemSelector : 'article',
                                    transitionDuration : '0.8s',
                                    masonry : {
                                        'gutter' : 0
                                    }
                                });

                                if (checkWidth <= 900) {
                                    $container.isotope('destroy');
                                }

                            });

                        }
                    }

                    postsMasonry();
                    $(window).resize(postsMasonry); 

                    function postsCarousel() {
                        var checkWidth = $(window).width();
                        var owlPost = $(".yolo-teacher-sc .masonry-container");

                        var mobile_item_1 = 1;
                        var mobile_item_2 = 2;
                        if (checkWidth > 900) {
                            if(typeof owlPost.data('owl.carousel') != 'undefined'){
                                owlPost.data('owl.carousel').destroy(); 
                            }
                            owlPost.removeClass('owl-carousel');
                        } else if (checkWidth <= 900) {
                            owlPost.addClass('owl-carousel');
                            owlPost.owlCarousel({
                                margin: 0,
                                items : 2,
                                autoplay: false,
                                autoHeight: true,
                                dots: true,
                                loop: false,
                                responsive : {
                                    0 : {
                                        items : 1
                                    },
                                    // breakpoint from 480 up
                                    520 : {
                                        items : mobile_item_1,
                                    },

                                    768 : {
                                        items : mobile_item_2,
                                    },
                                }
                            });
                        }
                    }

                  postsCarousel();
                  $(window).resize(postsCarousel); 
                  
                });
            </script>

        </div> <!-- /.yolo-teacher-shortcode -->

        			<div class="yolo-sc-button sc-button-wrap  hover-heading align-center ">
									<div class="yolo-button-wrap">
		                <a class="sc-button giraffe-btn size-normal hover-heading" href="#__"
		                   title="All Our Teachers"
		                   target="_self" style= "color: #ffffff; ; background-color: #f05c5c;">
		                        All Our Teachers		                </a>
		            </div>
	            			</div>
			</div></div></div></div></div></div><div  class = "yolo-full-width  has_parallax"><div data-overlay-color="rgba(40,0,80,0.85)" class="vc_row wpb_row vc_row-fluid vc_custom_1594286725554 vc_row-has-fill yolo_parallax_effect overlay-bg-vc-wapper"><div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12 wpb_animate_when_almost_visible yolo-css-animation wpb_fadeInUp" style="-webkit-animation-duration: 1000ms;-moz-animation-duration: 1000ms;-ms-animation-duration: 1000ms;-o-animation-duration: 1000ms;animation-duration: 1000ms"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner vc_custom_1587356582486"><div class="wpb_wrapper">			<div class="yolo-sc-title sc-title-wrap  style1 align-left  vc_custom_1595495286453">
									<p class="sc-sub-title" style= "color: rgba(255,255,255,0.9)" >
						Call Us Now					</p>
				
									<h2 class="sc-title" style= "font-size:48px; color: #ffffff;">
						Let's Help Build  <mark>Your Child's Future	</mark>				</h2>
								
			</div>
			        <div class="yolo-sc-text-info sc-text-info-wrap    style2">
                                                    <div class="description" style= "color: #ffffff">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                </div>
                                            <div class="item-content-inner clearfix">
                                                                                    <div class="item-content-wrap" style="background-color:#f05c5c">
                                      
                                        <div class="icon-wrap">
                                            <span class="icon fas fa-user-tie" style="color: #f05c5c" ></span>
                                        </div>    
                                                                        <span class="icon-content" style= "color: #ffffff">Well Trained Professionals</span>
                                </div>
                                                                                                                <div class="item-content-wrap" style="background-color:#ffd338">
                                      
                                        <div class="icon-wrap">
                                            <span class="icon fas fa-hotel" style="color: #ffd338" ></span>
                                        </div>    
                                                                        <span class="icon-content" style= "color: #ffffff">Awesome Infra-Structure</span>
                                </div>
                                                                                                                <div class="item-content-wrap" style="background-color:#1ec0ff">
                                      
                                        <div class="icon-wrap">
                                            <span class="icon fas fa-book-open" style="color: #1ec0ff" ></span>
                                        </div>    
                                                                        <span class="icon-content" style= "color: #ffffff">International Lesson Patterns</span>
                                </div>
                                                                        </div>

                                                    
        </div>
        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">                <div class="yolo-3d-gallery yolo-3d-gallery-wrap">
                    <div class="yolo-3d-gallery-content">
                        <ul id="elasticstack-639af406870e0" class="elasticstack">
                            <li><div class="image-elastickstack" style="background-image: url(../newimg/stem.jpg)"></div></li><li><div class="image-elastickstack" style="background-image: url(../wp-content/uploads/2018/10/event-13.jpg)"></div></li><li><div class="image-elastickstack" style="background-image: url(../wp-content/uploads/2018/10/event-06.jpg)"></div></li><li><div class="image-elastickstack" style="background-image: url(../wp-content/uploads/2018/10/event-12.jpg)"></div></li><li><div class="image-elastickstack" style="background-image: url(../wp-content/uploads/2018/10/event-11.jpg)"></div></li><li><div class="image-elastickstack" style="background-image: url(../wp-content/uploads/2018/10/event-09.jpg)"></div></li>                        </ul>

                    </div>
                </div>
            <script>
                jQuery(document).ready(function(){
                    new ElastiStack( document.getElementById( 'elasticstack-639af406870e0' ) );
                })
            </script>
            </div></div></div></div></div></div></div></div></div></div><div  class = "yolo-full-width "><div class="vc_row wpb_row vc_row-fluid vc_custom_1594349025621 vc_row-has-fill"><div class="shape_effect effect-shape3"><div class="plane">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/plane.png" alt="image">
            </div><div class="shape2">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape2.png" alt="image">
            </div><div class="shape3">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape3.png" alt="image">
            </div></div><div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12 wpb_animate_when_almost_visible yolo-css-animation wpb_fadeInUp" style="-webkit-animation-duration: 1000ms;-moz-animation-duration: 1000ms;-ms-animation-duration: 1000ms;-o-animation-duration: 1000ms;animation-duration: 1000ms"><div class="vc_column-inner "><div class="wpb_wrapper">			<div class="yolo-sc-title sc-title-wrap  style1 align-center  vc_custom_1594285758645">
									<p class="sc-sub-title"  >
						Begin Your Journey At Skudroid			</p>
				
									<h2 class="sc-title" style= "font-size:40px;">
						Featured <mark>Courses</mark> We Are Offering					</h2>
								
			</div>
			
		<div id= 639af40689a89 class="yolo-sc-class-feature loadmore-wrap">
							<div class="grid-mansory clearfix">
	                <div class="posts-loop-content row">
	                    <div class="masonry-container">
	                        														
	                        <article class="class-item-wrap loadmore-item masonry-item col-sm-6 col-md-4 class_category_56d47e post-116 yolo_class type-yolo_class status-publish has-post-thumbnail hentry class_category-environment class_level-basic">
							    <div class="loop-item-wrap">
					                <div class="content-meta">
					                    					                        <span class="meta-time">
					                        	<span class="meta-time-first">8:00 am</span>
					                        	<span class="meta-time-last">10:00 am</span>
					                        </span>
					                    					                    					                        <div class="thumbnail ">
					                            <img width="25" height="22" src="../wp-content/uploads/2018/10/icon1.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" />					                        </div>
					                        					                </div>
						            
							        							            <a class="featured-link" href="../classes/swimming-lesson-class/index.php" aria-hidden="true" >
							                <div class="loop-item-featured">
								                <div class="item-featured-bg" style="background-image: url('../wp-content/uploads/2018/10/class-15.jpg')">
								                </div>
								            </div>
							            </a>
							        							        <div class="loop-item-content">
							        	 <div class="loop-item-price">
						                    <span>
						                        						                            $92</span>
						                        						                </div>
							            <div class="loop-item-content-summary">
							                <span class="category-meta">
							                    <a href="../class-category/environment/index.php" rel="tag">Environment</a>							                </span>
							                <h3 class="title">
							                    <a href="../classes/swimming-lesson-class/index.php" title="Permanent link to: &quot;Swimming Lesson Class&quot;">Swimming Lesson Class</a>
							                </h3>
							            	
							                <div class="entry-meta meta">
							                    							                        <span class="class-lesson"><i class="far fa-file-alt"></i>15 Lessons</span>
							                    							                    							                        <span class="class-size"><i class="far fa-user"></i>25 Students</span>
							                    							                </div>

							                <div class="course-meta meta">
							                    <i class="fas fa-user-tie"></i>							                            <a href="../teachers/amy-adams/index.php">Amy Adams</a>
							                            ,							                        							                            <a href="../teachers/linda-glendell/index.php">Linda Glendell</a>
							                            							                        							                </div>

							                <div class="entry-meta-more">
							                    <div class="nbi__readmore">
							                        <a class="icon-btn btn-readmore-wrap" href="../classes/swimming-lesson-class/index.php">
							                            <h6 class="m0 text btn-readmore btn-readmore-heading">
							                                Enroll Now							                            </h6>
							                        </a>

							                    </div>
							                </div>

							            </div>
							        </div>
							    </div>
							</article>

	                        														
	                        <article class="class-item-wrap loadmore-item masonry-item col-sm-6 col-md-4 class_category_1ec0ff post-115 yolo_class type-yolo_class status-publish has-post-thumbnail hentry class_category-science class_level-basic">
							    <div class="loop-item-wrap">
					                <div class="content-meta">
					                    					                        <span class="meta-time">
					                        	<span class="meta-time-first">10:00 am</span>
					                        	<span class="meta-time-last">12:00 pm</span>
					                        </span>
					                    					                    					                        <div class="thumbnail ">
					                            <img width="25" height="22" src="../wp-content/uploads/2018/10/icon1.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" />					                        </div>
					                        					                </div>
						            
							        							            <a class="featured-link" href="../classes/color-match-class/index.php" aria-hidden="true" >
							                <div class="loop-item-featured">
								                <div class="item-featured-bg" style="background-image: url('../wp-content/uploads/2018/10/class-22.jpg')">
								                </div>
								            </div>
							            </a>
							        							        <div class="loop-item-content">
							        	 <div class="loop-item-price">
						                    <span>
						                        						                            $59</span>
						                        						                </div>
							            <div class="loop-item-content-summary">
							                <span class="category-meta">
							                    <a href="../class-category/science/index.php" rel="tag">Science</a>							                </span>
							                <h3 class="title">
							                    <a href="../classes/color-match-class/index.php" title="Permanent link to: &quot;Color Match Class&quot;">Color Match Class</a>
							                </h3>
							            	
							                <div class="entry-meta meta">
							                    							                        <span class="class-lesson"><i class="far fa-file-alt"></i>30 Lessons</span>
							                    							                    							                        <span class="class-size"><i class="far fa-user"></i>15 Students</span>
							                    							                </div>

							                <div class="course-meta meta">
							                    <i class="fas fa-user-tie"></i>							                            <a href="../teachers/jenny-hilton/index.php">Jenny Hilton</a>
							                            ,							                        							                            <a href="../teachers/phill-rose/index.php">Phill Rose</a>
							                            							                        							                </div>

							                <div class="entry-meta-more">
							                    <div class="nbi__readmore">
							                        <a class="icon-btn btn-readmore-wrap" href="../classes/color-match-class/index.php">
							                            <h6 class="m0 text btn-readmore btn-readmore-heading">
							                                Enroll Now							                            </h6>
							                        </a>

							                    </div>
							                </div>

							            </div>
							        </div>
							    </div>
							</article>

	                        														
	                        <article class="class-item-wrap loadmore-item masonry-item col-sm-6 col-md-4 class_category_56d47e post-100 yolo_class type-yolo_class status-publish has-post-thumbnail hentry class_category-math class_level-basic">
							    <div class="loop-item-wrap">
					                <div class="content-meta">
					                    					                        <span class="meta-time">
					                        	<span class="meta-time-first">10:50 am</span>
					                        	<span class="meta-time-last">12:55 pm</span>
					                        </span>
					                    					                    					                        <div class="thumbnail ">
					                            <img width="22" height="22" src="../wp-content/uploads/2018/10/icon2.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" />					                        </div>
					                        					                </div>
						            
							        							            <a class="featured-link" href="../classes/shapes-match-class/index.php" aria-hidden="true" >
							                <div class="loop-item-featured">
								                <div class="item-featured-bg" style="background-image: url('../wp-content/uploads/2018/10/class-09.jpg')">
								                </div>
								            </div>
							            </a>
							        							        <div class="loop-item-content">
							        	 <div class="loop-item-price">
						                    <span>
						                        						                            $85</span>
						                        						                </div>
							            <div class="loop-item-content-summary">
							                <span class="category-meta">
							                    <a href="../class-category/math/index.php" rel="tag">Math</a>							                </span>
							                <h3 class="title">
							                    <a href="../classes/shapes-match-class/index.php" title="Permanent link to: &quot;Shapes Match Class&quot;">Shapes Match Class</a>
							                </h3>
							            	
							                <div class="entry-meta meta">
							                    							                        <span class="class-lesson"><i class="far fa-file-alt"></i>10 Lessons</span>
							                    							                    							                        <span class="class-size"><i class="far fa-user"></i>20 Students</span>
							                    							                </div>

							                <div class="course-meta meta">
							                    <i class="fas fa-user-tie"></i>							                            <a href="../teachers/grom-frog/index.php">Grom Frog</a>
							                            ,							                        							                            <a href="../teachers/emily-backham/index.php">Emily Backham</a>
							                            							                        							                </div>

							                <div class="entry-meta-more">
							                    <div class="nbi__readmore">
							                        <a class="icon-btn btn-readmore-wrap" href="../classes/shapes-match-class/index.php">
							                            <h6 class="m0 text btn-readmore btn-readmore-heading">
							                                Enroll Now							                            </h6>
							                        </a>

							                    </div>
							                </div>

							            </div>
							        </div>
							    </div>
							</article>

	                        	                        	                    </div>
	                </div> <!-- /.posts-loop-content -->
	            </div>
					                        <div class="loadmore-action">           
	                            <a href="#" id="load-more-639af4068ce50" data-start="3" data-cat="18,20,19,22,23,17" data-show_pagination="loadmore" data-order="DESC" data-orderby="default" data-columns="3" data-paged="1" data-limit="3" class="btn-loadmore load-more" title="Load More"></a>
	                        </div>
	                    	            <!-- JS LoadMore -->
	            <script>
	            	jQuery(document).ready(function($){

	            		if ( jQuery('#639af40689a89 .grid-mansory').length > 0 ) {
                            var $container = jQuery('.grid-mansory .masonry-container');
                            $container.imagesLoaded(function(){
                                $container.isotope({
                                	layoutMode : 'fitRows',
                                    itemSelector : '.masonry-item',
                                    transitionDuration : '0.8s',
                                    masonry : {
                                        'gutter' : 0
                                    }
                                });

                            });
                        }
	            		$('#load-more-639af4068ce50').on('click',function(e){
	            			e.preventDefault();
                        	var _this       = $(this);
                        	var data        = {};

                        	data.pagination = _this.attr('data-show_pagination');
                        	data.order      = _this.attr('data-order');
                        	data.orderby  	= _this.attr('data-orderby');
                        	data.columns  	= _this.attr('data-columns');
                        	data.paged  	= _this.attr('data-paged');
                        	data.offset     = _this.attr('data-start');
                        	data.action     = 'load_more_class_feature';
                        	data.cat    	= _this.attr('data-cat');
                        	data.limit 		= _this.attr('data-limit');

                        	$.ajax({
                        		url: 'https://demo.yolotheme.com/giraffe/wp-admin/admin-ajax.php',
	                            method: "POST",
	                            data: data,
	                            beforeSend: function(){
	                               var posts_loop_content = _this.parents('.loadmore-wrap').find('.posts-loop-content');
	                               var loader = '<div class="loader-wrap"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>';
	                               posts_loop_content.prepend(loader);
	                            },
	                            success: function(data) {
	                            	 var posts_loop_content = _this.parents('.loadmore-wrap').find('.posts-loop-content');
		                            var masonry_container = _this.parents('.loadmore-wrap').find('.masonry-container');
		                            posts_loop_content.find('.loader-wrap').remove();
		                             _this.attr('data-start', data.offset);
	                                    var items = $(data.php.toString());

		                             // masony
                                    var $container = jQuery('.grid-mansory .posts-loop-content');
                                    if ( jQuery('.grid-mansory').length > 0 && items) {
                                        masonry_container.isotope({
                                        	layoutMode : 'fitRows',
                                            itemSelector : '.masonry-item'
                                        }).append(items).isotope('appended',items);
                                        setTimeout(function(){
                                            masonry_container.isotope('layout');
                                        },500);
                                    }

                                    if((parseInt(data.offset) + parseInt(data.limit)) > _this.parents('.yolo-sc-class-feature').find('.masonry-item').size()){
                                    	_this.remove();
                                    }
	                            },
	                             error: function() {},

                        	}).done(function(data){
	                            
                        	});
	            		});
	            	});
	            </script>
					</div>

		</div></div></div></div></div></div><div  class = "yolo-full-width  has_parallax"><div data-overlay-color="rgba(0,0,0,0.65)" class="vc_row wpb_row vc_row-fluid vc_custom_1594286802009 vc_row-has-fill yolo_parallax_effect overlay-bg-vc-wapper"><div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12 wpb_animate_when_almost_visible yolo-css-animation wpb_fadeInUp" style="-webkit-animation-duration: 1000ms;-moz-animation-duration: 1000ms;-ms-animation-duration: 1000ms;-o-animation-duration: 1000ms;animation-duration: 1000ms"><div class="vc_column-inner "><div class="wpb_wrapper">            <div class="yolo-sc-counter row  style_1" >
                <div class="sc-counter-wrap">
                                            <div class="content-inner  col-6 col-sm-6 col-md-3">
                                                        <div class="content-meta">
                                <span data-from="0" data-to="4794" class="gr-number-counter" style="color: #ffffff">
                                  4794                                </span>
                                
                                                                                                            <img class= "counter-icon" src="../wp-content/uploads/2018/11/counter1.png" alt="" />
                                                                    
                                                                    <div class="desc" style="color: #ffffff">
                                        Teaching Hour                                    </div>
                                                            </div>
                        </div>
                                            <div class="content-inner  col-6 col-sm-6 col-md-3">
                                                        <div class="content-meta">
                                <span data-from="0" data-to="15" class="gr-number-counter" style="color: #ffffff">
                                  15                                </span>
                                
                                                                                                            <img class= "counter-icon" src="../wp-content/uploads/2018/11/counter2.png" alt="" />
                                                                    
                                                                    <div class="desc" style="color: #ffffff">
                                        Meals Per Years                                    </div>
                                                            </div>
                        </div>
                                            <div class="content-inner  col-6 col-sm-6 col-md-3">
                                                        <div class="content-meta">
                                <span data-from="0" data-to="1468" class="gr-number-counter" style="color: #ffffff">
                                  1468                                </span>
                                
                                                                                                            <img class= "counter-icon" src="../wp-content/uploads/2018/11/counter3.png" alt="" />
                                                                    
                                                                    <div class="desc" style="color: #ffffff">
                                        Lessons                                    </div>
                                                            </div>
                        </div>
                                            <div class="content-inner  col-6 col-sm-6 col-md-3">
                                                        <div class="content-meta">
                                <span data-from="0" data-to="38" class="gr-number-counter" style="color: #ffffff">
                                  38                                </span>
                                
                                                                                                            <img class= "counter-icon" src="../wp-content/uploads/2018/11/counter4.png" alt="" />
                                                                    
                                                                    <div class="desc" style="color: #ffffff">
                                        Awards                                    </div>
                                                            </div>
                        </div>
                                    </div>
                <script>
                    jQuery(document).ready(function($){
                        "use strict";
                        function postsCarousel() {
                            var checkWidth = jQuery(window).width();
                            var owlPost = jQuery(".yolo-sc-counter .sc-counter-wrap");
                            if (checkWidth > 900) {
                                if(typeof owlPost.data('owl.carousel') != 'undefined'){
                                    owlPost.data('owl.carousel').destroy(); 
                                }
                                owlPost.removeClass('owl-carousel');
                            } else if (checkWidth <= 900) {
                                owlPost.addClass('owl-carousel');
                                owlPost.owlCarousel({
                                    margin: 0,
                                    items : 2,
                                    autoHeight:true,
                                    slideSpeed : 5000,
                                    autoplay: false,
                                    autoplaySpeed: 1000,
                                    autoplayTimeout: 5000,
                                    dots: true,
                                    loop: false,
                                    responsive : {
                                        0 : {
                                            items : 1
                                        },

                                        480 : {
                                            items : 2,
                                        },

                                        600 : {
                                            items : 3,
                                        },
                                    }
                                });
                            }
                        }

                      postsCarousel();
                      jQuery(window).resize(postsCarousel); 
                      
                    });
                </script>
            </div>
        </div></div></div></div></div></div><div  class = "yolo-full-width "><div class="vc_row wpb_row vc_row-fluid vc_custom_1594286921835 wpb_animate_when_almost_visible yolo-css-animation wpb_fadeInUp" style="-webkit-animation-duration: 1500ms;-moz-animation-duration: 1500ms;-ms-animation-duration: 1500ms;-o-animation-duration: 1500ms;animation-duration: 1500ms"><div class="shape_effect effect-shape4"><div class="star">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/star.png" alt="image">
            </div><div class="shape8">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape8.png" alt="image">
            </div><div class="shape4">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape4.png" alt="image">
            </div><div class="shape6">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape6.png" alt="image">
            </div></div><div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner"><div class="wpb_wrapper">			<div class="yolo-sc-title sc-title-wrap  style1 align-left  vc_custom_1594285618269">
				
									<h2 class="sc-title" style= "font-size:40px;">
						Recent Posts					</h2>
								
			</div>
			         
            <div class="yolo-sc-blog   hide_author hide_comment"
                 >
                <div class="sc-blog-wrap">
                    <div class="blog-wrap slider  blog-v4">
                        <div id="blog_639af40690b33" class="blog-inner row clearfix blog-style-slider blog-paging-all owl-carousel owl-theme" >
                            
<article class="yolo-blog-item blog-v4 col-sm-6 col-md-6 col-lg-6">
    <div class="blog-item-wrap yolo-flex -col">
        <div class="nbi__thumbnail">
            <div class="entry-thumbnail-bg" style="background-image: url('../wp-content/uploads/2018/10/blog-07.jpg')"></div>
            <a class="entry-link" href="../full-day-session-with-new-activities/index.php" title="Full-Day Session with New Activities"></a>
        </div>

        <div class="nbi__content">
                            <div class="entry-meta-category">
                    <a href="../category/communication/index.php" rel="category tag">Communication</a>                </div>
                        <h4 class="entry-title">
                <a  href="../full-day-session-with-new-activities/index.php" rel="bookmark"
                   title="Full-Day Session with New Activities">Full-Day Session with New Activities</a>
            </h4>

            <div class="entry-meta">
                <span>
                    Apr 7, 2020                </span>

                <span>
                    <i class="far fa-user"></i>
                    John Smith                </span>

                <span>
                    <i class="far fa-comments"></i>
                    1                </span>
            </div>
        </div>
    </div>
</article>
<article class="yolo-blog-item blog-v4 col-sm-6 col-md-6 col-lg-6">
    <div class="blog-item-wrap yolo-flex -col">
        <div class="nbi__thumbnail">
            <div class="entry-thumbnail-bg" style="background-image: url('../wp-content/uploads/2018/10/blog-12.jpg')"></div>
            <a class="entry-link" href="../how-to-draw-a-school-step-by-step/index.php" title="How to draw a school step by step?"></a>
        </div>

        <div class="nbi__content">
                            <div class="entry-meta-category">
                    <a href="../category/creativity/index.php" rel="category tag">Creativity</a>                </div>
                        <h4 class="entry-title">
                <a  href="../how-to-draw-a-school-step-by-step/index.php" rel="bookmark"
                   title="How to draw a school step by step?">How to draw a school step by step?</a>
            </h4>

            <div class="entry-meta">
                <span>
                    Apr 7, 2020                </span>

                <span>
                    <i class="far fa-user"></i>
                    John Smith                </span>

                <span>
                    <i class="far fa-comments"></i>
                    1                </span>
            </div>
        </div>
    </div>
</article>
<article class="yolo-blog-item blog-v4 col-sm-6 col-md-6 col-lg-6">
    <div class="blog-item-wrap yolo-flex -col">
        <div class="nbi__thumbnail">
            <div class="entry-thumbnail-bg" style="background-image: url('../wp-content/uploads/2018/10/blog-08.jpg')"></div>
            <a class="entry-link" href="../helping-your-child-with-socialization/index.php" title="Helping Your Child with Socialization"></a>
        </div>

        <div class="nbi__content">
                            <div class="entry-meta-category">
                    <a href="../category/psychology/index.php" rel="category tag">Psychology</a>                </div>
                        <h4 class="entry-title">
                <a  href="../helping-your-child-with-socialization/index.php" rel="bookmark"
                   title="Helping Your Child with Socialization">Helping Your Child with Socialization</a>
            </h4>

            <div class="entry-meta">
                <span>
                    Apr 7, 2020                </span>

                <span>
                    <i class="far fa-user"></i>
                    John Smith                </span>

                <span>
                    <i class="far fa-comments"></i>
                    0                </span>
            </div>
        </div>
    </div>
</article>
<article class="yolo-blog-item blog-v4 col-sm-6 col-md-6 col-lg-6">
    <div class="blog-item-wrap yolo-flex -col">
        <div class="nbi__thumbnail">
            <div class="entry-thumbnail-bg" style="background-image: url('../wp-content/uploads/2018/10/blog-10.jpg')"></div>
            <a class="entry-link" href="../20-fun-activities-to-do-with-your-kids/index.php" title="20 Fun Activities to Do With Your Kids"></a>
        </div>

        <div class="nbi__content">
                            <div class="entry-meta-category">
                    <a href="../category/activity/index.php" rel="category tag">Activity</a>                </div>
                        <h4 class="entry-title">
                <a  href="../20-fun-activities-to-do-with-your-kids/index.php" rel="bookmark"
                   title="20 Fun Activities to Do With Your Kids">20 Fun Activities to Do With Your Kids</a>
            </h4>

            <div class="entry-meta">
                <span>
                    Apr 7, 2020                </span>

                <span>
                    <i class="far fa-user"></i>
                    John Smith                </span>

                <span>
                    <i class="far fa-comments"></i>
                    0                </span>
            </div>
        </div>
    </div>
</article>                        </div>
                        <script type="text/javascript">
                            jQuery('document').ready(function ($) {
                                let blog = $('#blog_639af40690b33');
                                let slider = 'slider';
                                if (slider == 'slider') {
                                    blog.owlCarousel({
                                        items: 2,
                                        loop: true,
                                        autoplay: false,
                                        duration: 4000,
                                        autoplaySpeed: 600,
                                        margin: 0,
                                        nav: true,
                                        navText: ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
                                        rtl: false,
                                        responsive: {
                                            0: {
                                                items: 1,
                                            },
                                            600: {
                                                items: 2,
                                            },
                                            1000: {
                                                items: 2,
                                            }
                                        }
                                    });
                                }
                            })
                        </script>
                        
                    </div>
                </div>
            </div>
            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">			<div class="yolo-sc-title sc-title-wrap  style1 align-left  vc_custom_1594285612959">
				
									<h2 class="sc-title" style= "font-size:40px;">
						Event Timeline					</h2>
								
			</div>
			        <div class="yolo-event-shortcode yolo-event-shortcode timeline">
            <!-- Section content -->
                                                <div class="yolo-timeline" id="evs__639af4069496c">
                        <div class="timeline__container -vertical">
                                                            <div class="timeline__item">
    <div class="item__date animated  yolo-flex -col -center" style="background-color: #FFCE54">
        <span class="date">29</span>
        <span class="time">May</span>
    </div>
    <div class="item__detail yolo-flex -col -center">
        <a href="../events/summer-camp/index.php" title="Summer Camp">
            <h4 class="mt0 mb0 title-item__timeline">Summer Camp</h4>
        </a>
        <p class="schedule mb0"><i class="fa fa-clock-o "></i>
            <span>9:35 am - 2:35 pm</span>
        </p>
        <div class="mt0 excerpt">
            <div>
                <a class="c-sunflower-b " href="../events/summer-camp/index.php" title="Summer Camp">
                    REGISTER NOW!                </a>
            </div>
        </div>
    </div>
</div>                                                            <div class="timeline__item">
    <div class="item__date animated  yolo-flex -col -center" style="background-color: #fb9130">
        <span class="date">23</span>
        <span class="time">Jul</span>
    </div>
    <div class="item__detail yolo-flex -col -center">
        <a href="../events/music-for-toddlers/index.php" title="Music for Toddlers">
            <h4 class="mt0 mb0 title-item__timeline">Music for Toddlers</h4>
        </a>
        <p class="schedule mb0"><i class="fa fa-clock-o "></i>
            <span>3:30 pm - 7:30 pm</span>
        </p>
        <div class="mt0 excerpt">
            <div>
                <a class="c-sunflower-b " href="../events/music-for-toddlers/index.php" title="Music for Toddlers">
                    REGISTER NOW!                </a>
            </div>
        </div>
    </div>
</div>                                                            <div class="timeline__item">
    <div class="item__date animated  yolo-flex -col -center" style="background-color: #ffd338">
        <span class="date">29</span>
        <span class="time">Apr</span>
    </div>
    <div class="item__detail yolo-flex -col -center">
        <a href="../events/science-class-for-toddlers/index.php" title="Science Class for Toddlers">
            <h4 class="mt0 mb0 title-item__timeline">Science Class for Toddlers</h4>
        </a>
        <p class="schedule mb0"><i class="fa fa-clock-o "></i>
            <span>2:45 pm - 6:45 pm</span>
        </p>
        <div class="mt0 excerpt">
            <div>
                <a class="c-sunflower-b " href="../events/science-class-for-toddlers/index.php" title="Science Class for Toddlers">
                    REGISTER NOW!                </a>
            </div>
        </div>
    </div>
</div>                                                            <div class="timeline__item">
    <div class="item__date animated  yolo-flex -col -center" style="background-color: #2ECC71">
        <span class="date">22</span>
        <span class="time">May</span>
    </div>
    <div class="item__detail yolo-flex -col -center">
        <a href="../events/family-field-day/index.php" title="Family Field Day">
            <h4 class="mt0 mb0 title-item__timeline">Family Field Day</h4>
        </a>
        <p class="schedule mb0"><i class="fa fa-clock-o "></i>
            <span>2:30 pm - 7:30 pm</span>
        </p>
        <div class="mt0 excerpt">
            <div>
                <a class="c-sunflower-b " href="../events/family-field-day/index.php" title="Family Field Day">
                    REGISTER NOW!                </a>
            </div>
        </div>
    </div>
</div>                                                    </div>
                    </div>
                
                                                    </div> <!-- /.yolo-event-shortcode -->

        </div></div></div></div></div></div></div></div></div></div><div  class = "yolo-full-width "><div class="vc_row wpb_row vc_row-fluid vc_custom_1594092115261 vc_row-has-fill"><div class="shape_effect effect-shape5"><div class="plane">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/plane.png" alt="image">
            </div><div class="sun">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/sun.png" alt="image">
            </div><div class="shape6">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape6.png" alt="image">
            </div><div class="shape1">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape1.png" alt="image">
            </div><div class="shape2">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape2.png" alt="image">
            </div><div class="shape5">
                <img src="../wp-content/themes/yolo-giraffe/assets/images/shape/shape5.png" alt="image">
            </div></div><div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12 wpb_animate_when_almost_visible yolo-css-animation wpb_fadeIn" style="-webkit-animation-duration: 1000ms;-moz-animation-duration: 1000ms;-ms-animation-duration: 1000ms;-o-animation-duration: 1000ms;animation-duration: 1000ms"><div class="vc_column-inner "><div class="wpb_wrapper">			<div class="yolo-sc-title sc-title-wrap  style1 align-center  vc_custom_1595495325684">
				
									<h2 class="sc-title" style= "font-size:48px;">
						Subscribe To Our <mark>Newsletter</mark>					</h2>
													<p class="sc-desc-title"  >
						Enter your email address to register to our newsletter subscription delivered on a regular basis!					</p>
				
			</div>
			
	<div class="wpb_raw_code wpb_content_element wpb_raw_html align-center" >
		<div class="wpb_wrapper">
			<script>(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><!-- Mailchimp for WordPress v4.8.1 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-4620" method="post" data-id="4620" data-name="Newsletter" ><div class="mc4wp-form-fields"><input type="email" name="EMAIL" placeholder="Enter your email" required />
<input type="submit" value="Subscribe" />

</div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1671099398" /><input type="hidden" name="_mc4wp_form_id" value="4620" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin -->
		</div>
	</div>
</div></div></div></div></div></div><div  class = "yolo-full-width "><div class="vc_row wpb_row vc_row-fluid vc_custom_1594092797238">
	<div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner ">
		<div class="wpb_wrapper">			
			
			
			
			<!-- <div class="yolo-sc-clients sc-clients-wrap   "> -->
				<!-- <div class="client-item-inner">
															            <div class="client-item">
					             
					            <a href="#__">
					            
					            				                    				                    <img src="../wp-content/uploads/2020/07/client-1.png" alt="aquiire">
					              

					             
					            </a>
					            				            </div>
				        			        										            <div class="client-item">
					             
					            <a href="#__">
					            
					            				                    				                    <img src="../wp-content/uploads/2020/07/client-2.png" alt="smartrics">
					              

					             
					            </a>
					            				            </div>
				        			        										            <div class="client-item">
					             
					            <a href="#__">
					            
					            				                    				                    <img src="../wp-content/uploads/2020/07/client-3.png" alt="techbrand">
					              

					             
					            </a>
					            				            </div>
				        			        										            <div class="client-item">
					             
					            <a href="#__">
					            
					            				                    				                    <img src="../wp-content/uploads/2020/07/client-4.png" alt="evolved">
					              

					             
					            </a>
					            				            </div>
				        			        										            <div class="client-item">
					             
					            <a href="#__">
					            
					            				                    				                    <img src="../wp-content/uploads/2020/07/client-6.png" alt="sauter">
					              

					             
					            </a>
					            				            </div>
				        			        										            <div class="client-item">
					             
					            <a href="#__">
					            
					            				                    				                    <img src="../wp-content/uploads/2020/07/client-5.png" alt="burflex">
					              

					             
					            </a>
					            				            </div>
				        			        			    </div> -->
				<script>
                    jQuery(document).ready(function($){
                    	"use strict";
                        function postsCarousel() {
                            var checkWidth = jQuery(window).width();
                            var owlPost = jQuery(".yolo-sc-clients .client-item-inner");
                                owlPost.addClass('owl-carousel');
                                owlPost.owlCarousel({
                                    margin: 0,
                                    items : 6,
                                    autoHeight:false,
                                    slideSpeed : 5000,
                                    loop: true,
                                    autoplay: true,
                                    autoplaySpeed: 1000,
                                    autoplayTimeout: 5000,
                                    dots: true,
                                    responsive : {
                                        0 : {
                                            items : 2
                                        },

                                        480 : {
                                            items : 3,
                                        },

                                        568 : {
                                            items : 4,
                                        },
                                        // breakpoint from 480 up
                                        
                                        900 : {
                                            items : 6,
                                        },


                                    }
                                });
                        }

                      postsCarousel();
                      jQuery(window).resize(postsCarousel); 
                      
                    });
                </script>
			<!-- </div> -->
			</div></div></div></div></div></div>
			</div>

</div>				</div>
                			</div>

			
						</main>				</div>
			</div>
			<!-- Close wrapper content -->
			



			<!-- FOOTER STARTS -->

			<footer id="yolo-footer-wrapper" class="clearfix">
				<div class="yolo-footer-wrapper footer-1">
	<div  class = "yolo-full-width  has_parallax"><div data-overlay-color="rgba(0,0,0,0.85)" class="vc_row wpb_row vc_row-fluid vc_custom_1594786041912 vc_row-has-fill yolo_parallax_effect overlay-bg-vc-wapper"><div class="container clearfix" ><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1594972724859"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><h2 style="font-size: 28px;color: #ffffff;text-align: left; letter-spacing:  normal" class="vc_custom_heading title-footer vc_custom_1593502281735" >Contact Us</h2>                        <div class="yolo-footer-icon clearfix  " >
<div class="icon-text-shortcode-wrap clearfix">
<ul class="icon-text-footer-list left">
	<li class="icon-text-footer-item">
					<span class="icon-wrap"   style="color:rgba(255,255,255,0.8);" >
		<i class="fas fa-phone-volume"  style="font-size:15px;" ></i>
	</span> 
 
					<span class="icon-text"  style="color:rgba(255,255,255,0.8);" >Phone: +234 706 235 0036</span>
			</li>
	<li class="icon-text-footer-item">
					<span class="icon-wrap"   style="color:rgba(255,255,255,0.8);" >
		<i class="far fa-envelope"  style="font-size:15px;" ></i>
	</span> 
 
					<span class="icon-text"  style="color:rgba(255,255,255,0.8);" >Mail: <a href="#" >skudroid@consultant.com</a></span>
			</li>
	<li class="icon-text-footer-item">
					<span class="icon-wrap"   style="color:rgba(255,255,255,0.8);" >
		<i class="far fa-map"  style="font-size:15px;" ></i>
	</span> 
 
					<span class="icon-text"  style="color:rgba(255,255,255,0.8);" >33 New Nkisi GRA Onitsha, Anambra</span>
			</li>
	<li class="icon-text-footer-item">
					<span class="icon-wrap"   style="color:rgba(255,255,255,0.8);" >
		<i class="far fa-clock"  style="font-size:15px;" ></i>
	</span> 
 
					<span class="icon-text"  style="color:rgba(255,255,255,0.8);" >Working day: 9am - 5pm EST, Monday - Friday</span>
			</li>
</ul>
</div>            </div>
	<div class="vc_empty_space"   style="height: 15px"><span class="vc_empty_space_inner"></span></div>                        <div class="yolo-footer-icon clearfix  " >
<div class="style_1 icon-social-shortcode-wrap">
<ul class="icon-footer-list left">
	<li class="icon-footer-item">

<a href="https://www.facebook.com/weareskudroid" target="_blank">
							<div class="icon-wrap"  style="color:rgba(255,255,255,0.6);" >
		<i class="fab fa-facebook-square"  style="font-size:32px;" ></i>
	</div> 


</a>
		</li>
	<li class="icon-footer-item">

<a href="https://www.twitter.com/weareskudroid" target="_blank">
							<div class="icon-wrap"  style="color:rgba(255,255,255,0.6);" >
		<i class="fab fa-twitter-square"  style="font-size:32px;" ></i>
	</div> 


</a>
		</li>
	<li class="icon-footer-item">

<a href="#" target="_blank">
							<div class="icon-wrap"  style="color:rgba(255,255,255,0.6);" >
		<i class="fab fa-square-instagram"  style="font-size:32px;" ></i>

	</div> 


</a>
		</li>
	<li class="icon-footer-item">

<a href="#" target="_blank">
							<div class="icon-wrap"  style="color:rgba(255,255,255,0.6);" >
		<!-- <i class="fab fa-square-whatsapp"  ></i> -->
        <i class="fab fa-square-whatsapp"  style="font-size:32px;"></i>
	</div> 


</a>
		</li>
</ul>
</div>            </div>
	</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><h2 style="font-size: 28px;color: #ffffff;text-align: left; letter-spacing:  normal" class="vc_custom_heading title-footer vc_custom_1594969876977" >Information</h2><div  class="vc_wp_custommenu wpb_content_element menu_columns_2 c-white-80"><div class="widget widget_nav_menu"><div class="menu-menu-information-container"><ul id="menu-menu-information" class="menu"><li id="menu-item-4846" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4846"><a href="../index.php">Home</a></li>
<li id="menu-item-4434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4434"><a href="../blog/index.php">Blog</a></li>
<li id="menu-item-4435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4435"><a href="../about-us/index.php">About us</a></li>
<li id="menu-item-4436" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4436"><a href="../contact/index.php">Contact</a></li>
<li id="menu-item-4440" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4440"><a href="../our-program/index.php">Our Program</a></li>
<li id="menu-item-4441" class="menu-item menu-item-type-post_type_archive menu-item-object-yolo_class menu-item-4441"><a href="../classes/index.php">Classes</a></li>
<li id="menu-item-4442" class="menu-item menu-item-type-post_type_archive menu-item-object-yolo_teacher menu-item-4442"><a href="../teachers/index.php">Teachers</a></li>
<li id="menu-item-4443" class="menu-item menu-item-type-post_type_archive menu-item-object-yolo_event menu-item-4443"><a href="../events/index.php">Events</a></li>
<li id="menu-item-4844" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4844"><a href="#__">Privacy policy</a></li>
<li id="menu-item-4845" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4845"><a href="#__">Terms of services</a></li>
</ul></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><h2 style="font-size: 28px;color: #ffffff;text-align: left; letter-spacing:  normal" class="vc_custom_heading title-footer vc_custom_1594974710294" >Our Gallery</h2><div class="wpb_gallery wpb_content_element vc_clearfix  gallery_columns_4" ><div class="wpb_wrapper"><div class="wpb_gallery_slides wpb_image_grid" data-interval="3"><ul class="wpb_image_grid_ul"><li class="isotope-item"><a class="prettyphoto" href="../wp-content/uploads/2018/10/event-06.jpg" data-rel="prettyPhoto[rel-678-1959759203]"><img width="150" height="150" src="../wp-content/uploads/2018/10/event-06-150x150.jpg" class="attachment-thumbnail" alt="" loading="lazy" srcset="https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/event-06-150x150.jpg 150w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/event-06-300x300.jpg 300w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/event-06-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /></a></li><li class="isotope-item"><a class="prettyphoto" href="../wp-content/uploads/2018/10/event-01.jpg" data-rel="prettyPhoto[rel-678-1959759203]"><img width="150" height="150" src="../wp-content/uploads/2018/10/event-01-150x150.jpg" class="attachment-thumbnail" alt="" loading="lazy" srcset="https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/event-01-150x150.jpg 150w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/event-01-300x300.jpg 300w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/event-01-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /></a></li><li class="isotope-item"><a class="prettyphoto" href="../wp-content/uploads/2018/10/class-29.jpg" data-rel="prettyPhoto[rel-678-1959759203]"><img width="150" height="150" src="../wp-content/uploads/2018/10/class-29-150x150.jpg" class="attachment-thumbnail" alt="" loading="lazy" srcset="https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-29-150x150.jpg 150w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-29-300x300.jpg 300w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-29-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /></a></li><li class="isotope-item"><a class="prettyphoto" href="../wp-content/uploads/2018/10/class-26.jpg" data-rel="prettyPhoto[rel-678-1959759203]"><img width="150" height="150" src="../wp-content/uploads/2018/10/class-26-150x150.jpg" class="attachment-thumbnail" alt="" loading="lazy" srcset="https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-26-150x150.jpg 150w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-26-300x300.jpg 300w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-26-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /></a></li><li class="isotope-item"><a class="prettyphoto" href="../wp-content/uploads/2018/10/class-25.jpg" data-rel="prettyPhoto[rel-678-1959759203]"><img width="150" height="150" src="../wp-content/uploads/2018/10/class-25-150x150.jpg" class="attachment-thumbnail" alt="" loading="lazy" srcset="https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-25-150x150.jpg 150w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-25-300x300.jpg 300w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-25-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /></a></li><li class="isotope-item"><a class="prettyphoto" href="../wp-content/uploads/2018/10/class-24.jpg" data-rel="prettyPhoto[rel-678-1959759203]"><img width="150" height="150" src="../wp-content/uploads/2018/10/class-24-150x150.jpg" class="attachment-thumbnail" alt="" loading="lazy" srcset="https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-24-150x150.jpg 150w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-24-300x300.jpg 300w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-24-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /></a></li><li class="isotope-item"><a class="prettyphoto" href="../wp-content/uploads/2018/10/class-21.jpg" data-rel="prettyPhoto[rel-678-1959759203]"><img width="150" height="150" src="../wp-content/uploads/2018/10/class-21-150x150.jpg" class="attachment-thumbnail" alt="" loading="lazy" srcset="https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-21-150x150.jpg 150w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-21-300x300.jpg 300w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-21-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /></a></li><li class="isotope-item"><a class="prettyphoto" href="../wp-content/uploads/2018/10/class-28.jpg" data-rel="prettyPhoto[rel-678-1959759203]"><img width="150" height="150" src="../wp-content/uploads/2018/10/class-28-150x150.jpg" class="attachment-thumbnail" alt="" loading="lazy" srcset="https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-28-150x150.jpg 150w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-28-300x300.jpg 300w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2018/10/class-28-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /></a></li></ul></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1594780069426"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1594780146725"><div class="wpb_wrapper"><h2 style="font-size: 16px;color: rgba(255,255,255,0.9);line-height: 1;text-align: center; letter-spacing:  normal" class="vc_custom_heading vc_custom_1650593824269" >@ 2023 Copyrights by skudriod All Rights Reserved</mark></h2></div></div></div></div></div></div></div></div></div></div>
</div>
			</footer>

			<!-- footer ends -->

			
		</div>
		<!-- Close wrapper -->
		<a  class="back-to-top" href="javascript:;"></a>		<nav class="yolo-canvas-menu-wrapper" id = "off-canvas">
			<a href="#" class="yolo-canvas-menu-close"><i class="fa fa-close"></i></a>
			<div class="yolo-canvas-menu-inner sidebar">
				<aside id="text-2" class="widget widget_text">			<div class="textwidget"><p><img loading="lazy" class="alignnone size-medium wp-image-4825" src="../wp-content/uploads/2020/07/4-300x300.png" alt="giraffe" width="300" height="300" srcset="https://demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/4-300x300.png 300w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/4-150x150.png 150w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/4-100x100.png 100w, https://demo.yolotheme.com/giraffe/wp-content/uploads/2020/07/4.png 501w" sizes="(max-width: 300px) 100vw, 300px" /></p>
<!-- <p>Hi, I am John Doe &#8211; web designer &amp; blogger. I love the design and travel a lot. Explore new places and meet friends. Enjoy my themes!</p> -->
</div>
		</aside><aside id="yolo-social-profile-4" class="widget widget-social-profile"><ul class="clearfix social-profile social-icon-no-border"></ul></aside>			</div>
		</nav>
			<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();</script>            <nav class="yolo-canvas-menu-wrapper" id="mini-cart-canvas">

                <a href="#" class="yolo-canvas-menu-close"><i class="fa fa-close"></i></a>
                <h4 class="mini-cart-title">Shopping Cart</h4>
                <div class="widget_shopping_cart_content">
                </div>

            </nav>
            <script type="text/html" id="wpb-modifications"></script><link href="https://fonts.googleapis.com/css?family=Roboto:400%7CFredoka+One:400%7CMontserrat:400%2C500" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})()
	</script>
			<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
			}
		}
		</script>
<link rel='stylesheet' id='owl-carousel-css'  href='../wp-content/themes/yolo-giraffe/assets/plugins/owl-carousel/owl.carousel.css' type='text/css' media='all' />
<link rel='stylesheet' id='isotope-css-css'  href='../wp-content/plugins/js_composer/assets/css/lib/isotope.mine6df.css?ver=6.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='prettyphoto-css'  href='../wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.mine6df.css?ver=6.5.0' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/ui/core35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/mouse35d0.js?ver=1.12.1' id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/slider35d0.js?ver=1.12.1' id='jquery-ui-slider-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch287d.js?ver=4.8.0' id='wc-jquery-ui-touchpunch-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/accounting/accountingaffb.js?ver=0.4.2' id='accounting-js'></script>
<script type='text/javascript' id='wc-price-slider-js-extra'>
/* <![CDATA[ */
var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/price-slider287d.js?ver=4.8.0' id='wc-price-slider-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/demo.yolotheme.com\/giraffe\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts9dff.js?ver=5.3.2' id='contact-form-7-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie6b25.js?ver=2.1.4' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/giraffe\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/giraffe\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce287d.js?ver=4.8.0' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/giraffe\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/giraffe\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_466f5ddc2f9ad06eb61e8c1b0a331580","fragment_name":"wc_fragments_466f5ddc2f9ad06eb61e8c1b0a331580","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments287d.js?ver=4.8.0' id='wc-cart-fragments-js'></script>
<script type='text/javascript' id='yolo-framework-js-js-extra'>
/* <![CDATA[ */
var sc_countdown = {"days":"Days","hours":"Hours","minutes":"Minutes","seconds":"Seconds"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/yolo-giraffe-framework/assets/js/yolo-shortcode.js' id='yolo-framework-js-js'></script>
<script type='text/javascript' src='../wp-content/plugins/yolo-giraffe-framework/assets/js/imagesloaded.pkgd.min.js' id='vendor-imagesloaded-js'></script>
<script type='text/javascript' id='yolo-timetable-script-js-extra'>
/* <![CDATA[ */
var yoloL10n = {"ajax_url":"\/giraffe\/wp-admin\/admin-ajax.php","home_url":"https:\/\/demo.yolotheme.com\/giraffe\/"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/yolo-timetable/assets/js/yolo-timetable.js' id='yolo-timetable-script-js'></script>
<script type='text/javascript' src='../wp-content/plugins/yolo-timetable/assets/vendor/readmore.js' id='yolo-readmore-js'></script>
<script type='text/javascript' id='yith-woocompare-main-js-extra'>
/* <![CDATA[ */
var yith_woocompare = {"ajaxurl":"\/giraffe\/?wc-ajax=%%endpoint%%","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","actionreload":"yith-woocompare-reload-product","added_label":"Added","table_title":"Product Comparison","auto_open":"yes","loader":"https:\/\/demo.yolotheme.com\/giraffe\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif","button_text":"compare","cookie_name":"yith_woocompare_list","close_label":"Close"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/yith-woocommerce-compare/assets/js/woocompareb2da.js?ver=2.4.3' id='yith-woocompare-main-js'></script>
<script type='text/javascript' src='../wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min13ac.js?ver=1.4.21' id='jquery-colorbox-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/framework/core/megamenu/assets/js/megamenu.js' id='megamenu-js-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/particles/particles.js' id='particlesJS-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/js/yolo-add-to-cart-variation.js' id='yolo_add_to_cart_variation-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/customscroll/jquery.mCustomScrollbar.min.js' id='custom-scrollbar-js'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.mine6df.js?ver=6.5.0' id='isotope-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/modernizr/modernizr.min.js' id='modernizr-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/dialog-effects/js/classie.js' id='classie-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/dialog-effects/js/dialogFx.js' id='dialogFx-js'></script>
<script type='text/javascript' id='yolo_framework_app-js-extra'>
/* <![CDATA[ */
var yolo_framework_app = {"ajax_url":"https:\/\/demo.yolotheme.com\/giraffe\/wp-admin\/admin-ajax.php","image_load":"https:\/\/demo.yolotheme.com\/giraffe\/wp-admin\/images\/spinner.gif"};
var yolo_framework_constant = {"product_compare":"Compare","product_wishList":"WishList","product_wishList_added":"Browse WishList","product_quickview":"Quick View","product_addtocart":"Add To Cart","enter_keyword":"Please enter keyword to search","yolo_all_products":"All products loaded","get_search_url":"https:\/\/demo.yolotheme.com\/giraffe\/?s="};
var yolo_framework_ajax_url = "index.php\/\/demo.yolotheme.com\/giraffe\/wp-admin\/admin-ajax.php?activate-multi=true";
var yolo_framework_theme_url = "index.php\/\/demo.yolotheme.com\/giraffe\/wp-content\/themes\/yolo-giraffe";
var yolo_framework_site_url = "index.php\/\/demo.yolotheme.com\/giraffe";
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/js/yolo-main.js' id='yolo_framework_app-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/bootstrap/js/popper.min.js' id='popper-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/bootstrap/js/bootstrap.min.js' id='bootstrap-js'></script>
<script type='text/javascript' src='../wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/bootstrap-select/js/bootstrap-select.min.js' id='bs-select-js'></script>
<script type='text/javascript' id='yolo_login-js-extra'>
/* <![CDATA[ */
var Yolo_Login = {"ajax_url":"\/giraffe\/wp-admin\/admin-ajax.php","security":"a565d49480","label_register":"Register Account","label_login":"Login Account"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/js/yolo-login.js' id='yolo_login-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/starlight/starlight.js' id='starlight-js'></script>
<script type='text/javascript' src='../wp-content/plugins/mystickysidebar/js/detectmobilebrowser9632.js?ver=1.2.3' id='detectmobilebrowser-js'></script>
<script type='text/javascript' id='mystickysidebar-js-extra'>
/* <![CDATA[ */
var mystickyside_name = {"mystickyside_string":".sidebar.col-lg-4","mystickyside_content_string":"","mystickyside_margin_top_string":"120","mystickyside_margin_bot_string":"50","mystickyside_update_sidebar_height_string":"false","mystickyside_min_width_string":"991","device_desktop":"1","device_mobile":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/mystickysidebar/js/theia-sticky-sidebar9632.js?ver=1.2.3' id='mystickysidebar-js'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embeddac3.js?ver=5.6.10' id='wp-embed-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/stickyHeader/sticky-custom.js' id='sticky-header-js'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.mine6df.js?ver=6.5.0' id='wpb_composer_front_js-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/waypoints/jquery.waypoints.min.js' id='waypoints-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/owl-carousel/owl.carousel.min.js' id='owl-carousel-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/elastiStack/modernizr.custom.js' id='modernizr-custom-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/elastiStack/draggabilly.pkgd.min.js' id='draggabilly-js'></script>
<script type='text/javascript' src='../wp-content/themes/yolo-giraffe/assets/plugins/elastiStack/elastiStack.js' id='elastiStack-js'></script>
<script type='text/javascript' src='../wp-content/plugins/yolo-giraffe-framework/assets/plugins/counter/jquery.appear.js' id='jquery-appear-js'></script>
<script type='text/javascript' src='../wp-content/plugins/yolo-giraffe-framework/assets/plugins/counter/jquery.countTo.js' id='jquery-countto-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto005e.js?ver=3.1.6' id='prettyPhoto-js'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/lib/bower/imagesloaded/imagesloaded.pkgd.mine6df.js?ver=6.5.0' id='vc_grid-js-imagesloaded-js'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.mine6df.js?ver=6.5.0' id='prettyphoto-js'></script>
<script type='text/javascript' src='../wp-content/plugins/mailchimp-for-wp/assets/js/formsa288.js?ver=4.8.1' id='mc4wp-forms-api-js'></script>
	</body>

</html>