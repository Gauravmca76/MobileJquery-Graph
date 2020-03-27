﻿<!DOCTYPE html>
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
	<!-- <div id="page1" data-role="page">
		<section data-role="content">
			<ul data-role="listview" data-inset="true" data-shadow="true">
				<li data-role="list-divider" style="text-align: center;">Choose Your Chart</li>
				<li><a href="#pageBarChart">Bar Chart</a></li>
				<li><a href="#pagePieChart">Pie Chart</a></li>
				<li><a href="#pagePlotChart">Plot Chart</a></li>
			</ul>
		</section>
	</div> -->
	<!-- <div id="pageBarChart" data-role="page" data-rockncoder-jspage="manageBarChart">
		<header data-role="header" data-position="fixed">
			<h1>Bar Chart</h1>
		</header>
		<section data-role="content">
			<div id="barChart" class="myChart"></div>
			<button id="refreshBarChart" value="Refresh Chart" data-mini="true"></button>
			<input type="range" id="pageBarSliderA" value="25" min="0" max="50" data-mini="true"/>
			<input type="range" id="pageBarSliderB" value="25" min="0" max="50" data-mini="true"/>
			<input type="range" id="pageBarSliderC" value="25" min="0" max="50" data-mini="true"/>
		</section>
	</div> -->
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
		<a href="demo.php">Next</a>
	</div>
	<!-- <div id="pagePlotChart" data-role="page" data-rockncoder-jspage="managePlotChart">
		<header data-role="header" data-position="fixed">
			<h1>Plot Chart</h1>
		</header>
		<section data-role="content">
			<div id="plotChart" class="myChart"></div>
			<button id="refreshPlotChart" value="Refresh Chart" data-mini="true"></button>
			<input type="range" id="plot1" value="0" min="-250" max="250" data-mini="true"/>
			<input type="range" id="plot2" value="0" min="-250" max="250" data-mini="true"/>
			<input type="range" id="plot3" value="0" min="-250" max="250" data-mini="true"/>
			<input type="range" id="plot4" value="0" min="-250" max="250" data-mini="true"/>
			<input type="range" id="plot5" value="0" min="-250" max="250" data-mini="true"/>
			<input type="range" id="plot6" value="0" min="-250" max="250" data-mini="true"/>
		</section>
	</div> -->
	<script src="scripts/jquery.jqplot.min.js" type="text/javascript"></script>
	<script src="scripts/jqplot.pieRenderer.min.js" type="text/javascript"></script>
	<script src="scripts/jqplot.barRenderer.min.js" type="text/javascript"></script>
	<script src="scripts/jqplot.categoryAxisRenderer.min.js" type="text/javascript"></script>
	<script src="scripts/underscore-min.js" type="text/javascript"></script>
	<script src="scripts/hideAddressBar.js" type="text/javascript"></script>
	<script src="scripts/app.js" type="text/javascript"></script>
</body>
</html>