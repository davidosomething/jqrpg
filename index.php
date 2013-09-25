<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head><title>jQRPG - An Old-School Style RPG in jQuery</title>
<link rel="Stylesheet" type="text/css" href="style.css" />
<!--
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("jquery", "1"); /* google.load("jqueryui", "1"); */</script>
-->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.hotkeys-0.7.9.min.js"></script>
<script type="text/javascript" src="scripts/jqrpg.js"></script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12807339-1']);
    _gaq.push(['_trackPageview']);
</script>
</head>
<body>
<div id="everything">

<div id="jqrpg_wrapper">
	<div id="jqrpg_preloader">
		<span class="sprites face_u">@</span>		
		<span class="sprites face_d">@</span>
		<span class="sprites face_l">@</span>
		<span class="sprites face_r">@</span>
	</div>
	<div id="jqrpg_screen">
		<span id="jqrpg_player">@</span>
		<div id="jqrpg_map">
		<span>This should be replaced by jQuery.</span>
		</div><!-- end #jqrpg_map -->
	</div><!-- end #jqrpg_screen -->
	<div id="jqrpg_menu">
		<h1>jQRPG</h1>
	</div>
</div><!-- end #jqrpg_wrapper -->

<div id="information">
<h1>jQRPG &mdash; An Old-School Style RPG in jQuery</h1>
<p>Well, JavaScript and jQuery.</p>
<p>
This is just a demo. You can move around and random "battles" occur randomly
every 1 of 6 steps. The battles don't involve anything.
</p>

<h2>Instructions</h2>
<p>
Use the arrow keys to move, space bar to continue when prompted.
</p>

<h2>For More Information</h2>
<p>
Check out <a href="http://hokuten.net/2010/jqrpg-%e2%80%94-an-old-school-style-rpg-in-jquery/">the original article</a> on
hokuten.net for details on the creation of this. E-mail
<a href="mailto:me@davidosomething.com">me@davidosomething.com</a>
</p>

</div><!-- #information -->

</div><!-- end #everything -->

  <script type="text/javascript">  (function() {
    var ga = document.createElement('script');     ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:'   == document.location.protocol ? 'https://ssl'   : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
   </script>
</body>
</html>
