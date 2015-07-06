<!doctype html>

<head>

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/iconmenu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/gela.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/gela.min.css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/iconmenu.js">


</script>
<script>

ddiconmenu.docinit({ // initialize an Icon Menu
	menuid:'myiconmenu', //main menu ID
	easing:"easeInOutCirc",
	dur:500 //<--no comma after last setting
})


</script>
</head>

<body>


<!-- Main Icon Menu -->

<ul id="myiconmenu" class="iconmenu">
  <li><a href="#" rel="csslibrary"><img src="<?php echo get_bloginfo('template_directory');?>/img/phone-32.ico"></a></li>
  <li><a href="#" rel="ddcontentarea"><img src="<?php echo get_bloginfo('template_directory');?>/img/email-32.ico"></a></a></li>
  <li id="last_left_menu"><a href="#" rel="webtools" title="Web Tools"><img src="<?php echo get_bloginfo('template_directory');?>/img/info-32.ico"></a></li>
</ul>

<!- CSS Library sub menu -->

<div id="csslibrary" class="iconsubmenu dropdownmenu">
  +995 32 2 051 051
</div>

<!- General Content sub menu -->

<div id="ddcontentarea" class="iconsubmenu mixedcontent">
  info@kapi.ge
</div>

<!- Web Tools sub menu -->

<div id="webtools" class="iconsubmenu dropdownmenu">
  Kapi Microlending
</div>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '168301';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<script type='text/javascript'>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>