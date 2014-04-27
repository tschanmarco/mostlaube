<?php
	$config = file_get_contents('config.php');
	$config = unserialize($config);

	$weekday = date('w');
	$closed = '<span class="closed">geschlossen</span>';

	// Montag
	if($weekday == 1) {
		$day = 'Montag';
		$openstatus = $closed;
	// Dienstag
	} else if($weekday == 2) {
		$day = 'Dienstag';
		$openstatus = $closed;
	// Mittwoch
	} else if($weekday == 3) {
		$day = 'Mittwoch';
		$openstatus = $closed;
	// Donnerstag
	} else if($weekday == 4) {
		$day = 'Donnerstag';
		$openstatus = $closed;
	// Freitag
	} else if($weekday == 5) {
		$day = 'Freitag';
		$openstatus = '<span class="open">offen von 17:00 &ndash; 24.00 Uhr</span>';
	// Samstag
	} else if($weekday == 6) {
		$day = 'Samstag';
		$openstatus = '<span class="open">offen von 17:00 &ndash; 24.00 Uhr</span>';
	// Sonntag
	} else if($weekday == 0) {
		$day = 'Sonntag';
		$openstatus = '<span class="open">offen von 10:00 &ndash; 20.00 Uhr</span>';
	}

	// Anderer Hinweis
	if(trim($config['statustext']) != "") {
		$color = $config['color'] == 'green' ? 'open' : 'closed';
		$openstatus = '<span class="'.$color.'">'.$config['statustext'].'</span>';
	} else if(isset($config['closed'])) {
		$openstatus = $closed;
	}

	// Informationsbox
	$infotitle = trim($config['infotitle']);
	$infotext = trim($config['infotext']);
	$showinfo = isset($config['showinfo']) && ($infotitle != "" OR $infotext != "") ? true : false;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>MOSTLAUBE - Besensbeiz im Vogelsang</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="content-language" content="de"/>
	<meta NAME="description" content="Website der Besenbeiz MOSTLAUBE im Vogelsang bei Lengnau">
	<meta NAME="keywords" content="Mostlaube,Besenbeiz,Laube,Most,Apfelsaft,Bauernhof,Restaurant">
	<meta name="author" content="j-m-f.ch"/>
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<script type="text/javascript" language="javascript" src="js/lytebox/lytebox.js"></script>
	<link rel="stylesheet" href="js/lytebox/lytebox.css" type="text/css" media="screen" />

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-23746294-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body>

<div id="bodyframe" align="center">
	<div id="headerframe">
		<div id="headercontent">
			<img id="logo" src="img/logo_500.gif" width="500" height="107">
			<div id="daystatus">Heute <?=$day?><br/> <?=$openstatus?></div>
		</div>
	</div>
	<div id="mainframe">
		<div id="contentframe">
			<div id="address">
				<b>Fotogalerien:</b><br/>
				<br/>
				<span style="color:yellow;">&rsaquo;&nbsp;</span><a href="img/fotos/img_1654.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE">So sieht es bei uns aus</a><br/>
				<span style="color:yellow;">&rsaquo;&nbsp;</span><a href="img/fotos/anlaesse/anlaesse04.jpg" rel="lytebox[anlaesse]" title="Anlässe in der MOSTLAUBE">Anlässe in der MOSTLAUBE</a><br/>
				<span style="color:yellow;">&rsaquo;&nbsp;</span><a href="img/fotos/umbau/2010-05-21_IMG_3486.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE">Vom Stall zur MOSTLAUBE</a><br/>
				<span style="color:yellow;">&rsaquo;&nbsp;</span><a href="img/fotos/eroeffnung/152.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE">Eröffnung der MOSTLAUBE</a><br/>
				<br/>
				<br/>
				<span style="color:yellow;">&rsaquo;&nbsp;</span><a href="index.php">Zurück zur Hauptseite</a><br/>
			</div>
		</div>
	</div>
</div>

<!-- Gallery Images - Mostlaube -->
<a href="img/fotos/img_1656.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE"></a>
<a href="img/fotos/img_1653.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE"></a>
<a href="img/fotos/img_1655.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE"></a>
<a href="img/fotos/img_1652.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE"></a>
<a href="img/fotos/img_2679.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE"></a>

<!-- Gallery Images - Anlaesse -->
<a href="img/fotos/anlaesse/anlaesse01.jpg" rel="lytebox[anlaesse]" title="Anlässe in der MOSTLAUBE"></a>
<a href="img/fotos/anlaesse/anlaesse02.jpg" rel="lytebox[anlaesse]" title="Anlässe in der MOSTLAUBE"></a>
<a href="img/fotos/anlaesse/anlaesse03.jpg" rel="lytebox[anlaesse]" title="Anlässe in der MOSTLAUBE"></a>
<a href="img/fotos/anlaesse/anlaesse05.jpg" rel="lytebox[anlaesse]" title="Anlässe in der MOSTLAUBE"></a>
<a href="img/fotos/anlaesse/anlaesse06.jpg" rel="lytebox[anlaesse]" title="Anlässe in der MOSTLAUBE"></a>

<!-- Gallery Images - Umbau -->
<a href="img/fotos/umbau/2010-05-21_IMG_3516.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-06-01_CIMG2156.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-06-16_CIMG2213.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-06-22_CIMG2252.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-06-25_CIMG2287.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-06-29_CIMG2290.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-07-12_CIMG2334.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-07-12_CIMG2339.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-07-29_CIMG2372.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-08-13_CIMG2408.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-09-01_CIMG2470.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-09-01_CIMG2478.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-09-02_CIMG2496.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-09-02_CIMG2510.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-09-03_CIMG2521.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-09-21_CIMG2578.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-10-25_CIMG2636.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-11-09_IMG_3895.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-11-16_CIMG2802.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-11-18_CIMG2810.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-11-19_CIMG2817.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>
<a href="img/fotos/umbau/2010-12-09_CIMG2953.jpg" rel="lytebox[umbau]" title="Vom Stall zur MOSTLAUBE"></a>

<!-- Gallery Images - Eroeffung -->
<a href="img/fotos/eroeffnung/025.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/026.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/028.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/030.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/033.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/035.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/037.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/039.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/042.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/049.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/051.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/053.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/054.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/055.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/057.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/058.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/059.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/061.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/062.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/063.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/064.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/067.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/076.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/078.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/082.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/085.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/088.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/090.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/091.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/095.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/098.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/116.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/119.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/122.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/125.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/126.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/129.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/136.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/147.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/156.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/167.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/170.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>
<a href="img/fotos/eroeffnung/024.jpg" rel="lytebox[eroeffnung]" title="Eröffnung der MOSTLAUBE"></a>

</body>
</html>