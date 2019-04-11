<!doctype html>

<?php
$url = $_GET['url']; 
?>

<?php
$domain = 'https://aanwhs.github.io/sl';
$title = 'SafeLink Aan Wasi';
$description = 'SafeLink Aan Wasi adalah web pengalihan (redirection)';
$keywords = 'SafeLink Aan Wasi, SafeLink Triafa.com, go to, redirect, url pengalihan, safelink, shortlink';
$aanwhs = 'Kang Aan Wasi';
$aanwhs_github_io = '//aanwhs.github.io';
?>

<html>

	<!-- /*-----------------------------------------------
	<?php echo $title ?> (V 1.1) developed by aanwhs.github.com
	----------------------------------------------- */ -->
	
	<!--[start time]-->
	<!-- rendered at UTC: <?php date_default_timezone_set('UTC'); echo date('l, M d, Y h:i A'); ?> -->
	<!-- Time at your place now: <?php echo date('l, M d, Y h:i A'); ?> -->
	<!-- Time at GMT+12 now: <?php echo gmdate('l, M d, Y h:i A', time()+60*60*12); ?> -->
	<!-- Time at GMT-12 now: <?php $GMTminus12 = -5; echo gmdate('l, M d, Y h:i A', time() + 3600*($GMTminus12+date("I"))); ?> -->
	<!--[end time]-->

<head>

	<title><?php echo $title ?></title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $description ?>" />
	<meta name="keywords" content="<?php echo $keywords ?>" />
	<meta http-equiv="Refresh" content="10; url=<?php echo $url;?>" />
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="sl.css">
	
	<script language="javascript">
		var time_left = 10;
		var cinterval;
		function time_dec(){
			time_left--;
			document.getElementById('countdown').innerHTML = time_left;
			if(time_left == 0){
				clearInterval(cinterval);
			}
		}
		cinterval = setInterval('time_dec()', 1000);
	</script>
	<script type="text/javascript"><!--
		$(function(){
			var count = 7;
			countdown = setInterval(function(){
				$("p.countdown").html("<img src='images/loading.gif' />");
				if (count == 0) { $("p.countdown") .remove();}
				count--;
			}, 1000);
		});
	--></script>

</head>

<body>

	<div id="loader-wrapper">
		<h1>Please Wait</h1>
		<h2>The Redirection Should Start Automatically In</h2>
		<h3><span id="countdown">10</span> Seconds</h3>
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>

</body>

</html>