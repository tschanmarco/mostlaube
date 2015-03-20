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
    $openstatus = $closed;
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
      <?php if($showinfo) { ?>
      <div id="infoframe">
        <!-- <div class="info_title"><?=$infotitle?></div> -->
        <div class="info_text"><?=$infotext?></div>
      </div>
      <?php } ?>
      <div id="address">
        Fam. Peter und Monika Laube<br/>
        Vogelsang 256<br/>
        5426 Lengnau<br/>
        Tel. 056 241 25 44<br/>
        <br/>
        <br/>
        Öffnungszeiten:<br/>
        <table cellpadding="0" cellspacing="0" border="0" style="color:#fff">
          <tr><td colspan="2">Freitag für Gruppen auf Anfrage&nbsp;</td>
          <tr><td>Samstag&nbsp;</td><td>17.00 &ndash; 24.00 Uhr</td></tr>
          <tr><td>Sonntag&nbsp;</td><td>10.00 &ndash; 20.00 Uhr</td></tr>
        </table>
      </div>
      <br clear="all"/>
      <div id="links">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="color:#fff">
          <tr><td width="95%"></td><td style="color:yellow">&rsaquo;&nbsp;</td><td><nobr><a href="fotos.php">Fotos</a></nobr></td></tr>
          <tr><td></td><td style="color:yellow">&rsaquo;&nbsp;</td><td><nobr><a href="http://maps.google.ch/maps/ms?hl=de&ie=UTF8&view=map&ctz=-120&t=h&msa=0&msid=208049102265911784621.0004a40bb47049a790a98&ll=47.540274,8.322487&spn=0.003817,0.010546&z=17" target="_blank">So finden Sie uns</a></nobr></td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td></td><td style="color:yellow">&rsaquo;&nbsp;</td><td><nobr><a href="docs/mostlaube_karte.pdf" target="_blank">Unsere Karte</a></nobr></td></tr>
          <tr><td></td><td style="color:yellow">&rsaquo;&nbsp;<br/>&nbsp;</td><td><nobr><a href="docs/mostlaube_menues.pdf" target="_blank">Menüvorschläge für Anlässe<br/>(ab 15 Personen)</a></nobr></td></tr>
          <tr><td></td><td style="color:yellow">&rsaquo;&nbsp;</td><td><nobr><a href="docs/geschaeftsbedingungen_mostlaube.pdf" target="_blank">Geschäftsbedingungen</a></nobr></td></tr>
          <tr><td>&nbsp;</td></tr>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Gallery Images -->
<a href="img/fotos/img_1656.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE"></a>
<a href="img/fotos/img_1653.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE"></a>
<a href="img/fotos/img_1655.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE"></a>
<a href="img/fotos/img_1652.jpg" rel="lytebox[MOSTLAUBE]" title="MOSTLAUBE"></a>

<a href="img/fotos/trottinett2.jpg" rel="lytebox[trottinett]" title="Trottinettplausch"></a>
<a href="img/fotos/trottinett.jpg" rel="lytebox[trottinett]" title="Trottinettplausch"></a>

</body>
</html>