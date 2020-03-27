<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","mobilej");
if(!$conn)
{
	die('Could not connect'.mysqli_error());
}
$sql="SELECT * FROM sample";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
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
			<input type="hidden" id="pagePieSliderA" value="<?php echo $row['y1'];?>" min="0" max="100"/>
			<input type="hidden" id="pagePieSliderB" value="<?php echo $row['y2'];?>" min="0" max="100"/>
			<input type="hidden" id="pagePieSliderC" value="<?php echo $row['y3'];?>" min="0" max="100"/>
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