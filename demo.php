<!DOCTYPE html>
<html>
<head>
	<title>JQM Charts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<link href="content/jquery.mobile-1.1.0.min.css" rel="stylesheet" type="text/css" />
	<link href="content/jquery.jqplot.css" rel="stylesheet" type="text/css" />
	<script src="scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery.mobile-1.1.0.min.js" type="text/javascript"></script>
	<style type="text/css">
		.myChart {
			width: 300px;
			height: 200px;
		}
	</style>
</head>
<body>
<div id="pagePieChart" data-role="page" data-rockncoder-jspage="managePieChart">
		<header data-role="header" data-position="fixed">
			<h1>Pie Chart</h1>
		</header>
		<section data-role="content">
			<div id="pieChart" class="myChart"></div>
			<button id="refreshPieChart" value="Refresh Chart" data-mini="true"></button>
			<input type="range" id="pagePieSliderB" value="<?php $a=50; echo $a;?>" min="0" max="100"/>
			<input type="range" id="pagePieSliderC" value="<?php $b=40; echo $b;?>" min="0" max="100"/>
			<input type="range" id="pagePieSliderA" value="<?php $c=10; echo $c;?>" min="0" max="100"/>
		</section>
		<h1><a href="index.php">Back To Home</a></h1>
	</div>
	<script src="scripts/jquery.jqplot.min.js" type="text/javascript"></script>
	<script src="scripts/jqplot.pieRenderer.min.js" type="text/javascript"></script>
	<script src="scripts/jqplot.barRenderer.min.js" type="text/javascript"></script>
	<script src="scripts/jqplot.categoryAxisRenderer.min.js" type="text/javascript"></script>
	<script src="scripts/underscore-min.js" type="text/javascript"></script>
	<script src="scripts/hideAddressBar.js" type="text/javascript"></script>
	<script src="scripts/app.js" type="text/javascript"></script>
	</body>
</html>