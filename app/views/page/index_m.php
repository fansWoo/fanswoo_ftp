﻿<!doctype html>
<html>
<head>
<meta charset="utf-8" />
	<title>fansWoo 商業合作 - 瘋沃科技有限公司</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
	<meta name="keywords" content="網頁設計、fansWoo design,網頁設計,網站設計,網頁設計公司,台北網頁設計,瘋沃網頁設計" />
	<meta name="keywords" content="中小型企業形象網站網頁設計瘋沃科技網頁設計公司提供最優質的網頁設計、網站架設、多媒體網頁設計等多項服務. 我們的客戶來自於各行各業，以最全面性的服務來滿足您對於網頁設計的需求。" />
	<base href="<?=base_url()?>" />
	<script src="app/js/jquery-1.7.1.min.js"></script>
	<script src="app/js/jquery-ui-1.8.23.custom.min.js"></script>
	<script src="app/js/fanScript-1.3.0.js"></script>
	<script src="app/js/script_common.js"></script>
	<?if(isset($global['js'])):?>
	<?foreach($global['js'] as $value):?>
	<script src="app/js/<?=$value?>.js"></script>
	<?endforeach?>
	<?endif?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-52790599-3', 'auto');
	  ga('send', 'pageview');
	</script>	<link rel="stylesheet" type="text/css" href="app/css/style.css"></link>
	<?if(isset($global['style'])):?>
	<?foreach($global['style'] as $value):?>
	<link rel="stylesheet" type="text/css" href="app/css/<?=$value?>.css"></link>
	<?endforeach?>
	<?endif?>
	<script>(function() {
	var _fbq = window._fbq || (window._fbq = []);
	if (!_fbq.loaded) {
	var fbds = document.createElement('script');
	fbds.async = true;
	fbds.src = '//connect.facebook.net/en_US/fbds.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(fbds, s);
	_fbq.loaded = true;
	}
	_fbq.push(['addPixelId', '694153537333853']);
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(['track', 'PixelInitialized', {}]);
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=694153537333853&amp;ev=PixelInitialized" /></noscript>
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 1037100439;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1037100439/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
</head>
<body>
	<div class="wrap">
		<div class="nav">
			<img src="app/img/logoBig.png" class="logo">
			<div class="ul">
				<a href="page/about"><div>About</div></a>
				<a href="news"><div>News</div></a>
				<a href="page/portfolio"><div>Portfolio</div></a>
				<a href="contact"><div>Contact</div></a>
			</div>
			<div class="footer">
				<p>© 2014 fansWoo All Rights </p>
				<p>Reserved.</p>
			</div>
		</div>
	</div>
<?=$temp['footer']?>