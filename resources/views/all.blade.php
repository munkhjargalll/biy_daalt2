<!DOCTYPE html>
<html>
<head>
	<title>COVID Tracker</title>

	
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="app.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body>

<div class="container-fluid bg-light p-3 text-center my-3">
	<h1>COVID-19 мэдээлэл</h1>
    </div>
	<div class="data-container">
		<div class="stats-container">
			<h4>Нийт тохиолдол</h4>
			<h1> <?php echo $list['TotalConfirmed'];?> </h1>
			<h4>Нас баралт</h4>
			<h1> <?php echo $list['NewDeaths'];?> </h1>
		</div>
		<div class="location-container">
			<h4>Шинэ тохиолдол</h4>
			<h1> <?php echo $list['NewConfirmed'];?> </h1>
			<h4>Нийт эдгэрэлт</h4>
			<h1> <?php echo $list['TotalRecovered'];?> </h1>
		</div>
	</div>

<a href="other_country" class="container-fluid bg-light p-3 text-center my-3">
  <p>
  бусад улс орнуудын мэдээлэл харах
  </p>
</a>






<style>
* {
	margin: 0;
	padding: 0;
}

html {
	height: 100%;
	width: 100%;
}
h1, h2 {
	font-family: 'Roboto', sans-serif;
	font-weight: 300;
	text-align: center;
	padding-bottom: 20px;
	font-size: 250%;
}

.title {
    padding: 20px;
}

.subtitle {
	padding: 20px;
	font-size: 150%;
}

div {
	padding: 20px;
}

.stats-container {
	text-align: center;
	float: right;
	display: inline-block;
}
.location-container {
	display: inline-block;
}
.data-container {
	border: 2px solid #feb47b;
	margin-right: 30%;
	margin-left: 30%;

}
h4 {
	font-size: 85%;
 	color: gray;
 	font-family: 'Roboto', sans-serif;
 	font-weight: 300;
 	text-align: center;
 	padding-top: 20px;
 	padding-left: 20px;
 	padding-right: 20px;
 	padding-bottom: 5px;
}
.footer {
	font-family: 'Roboto', sans-serif;
	bottom: 0;
	font-size: 75%;
	padding: 5px;
}
</style>

</body>
</html>