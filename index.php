<!doctype html>
<html>
<head>
<title>Weather Predictor</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap-theme.min.css">

	<style>
		
		html, body {
			height:100%;
		}
		
		
		.container {
			background-image:url("weather.jpg");
			width:100%;
			height:100%;
			background-size:cover;
			background-position:center;
			padding-top:150px;
		}
		
		.center {
			text-align:center;
		}
		
		.white {
			color:white;
		}
		
		p {
			padding-top:15px;
			padding-bottom:15px;
		}
		
		button {
			margin-top:20px;
		
		}
		
	
	
	</style>
	
</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 center">

				<h1 class="center white">Weather Predictor</h1>
				
				<p class="lead center white">Enter your city below to get a forecast for tahe weather</p>
				
				<form>
							
					<div class="form-group">	
				
						<input type="text" class="form-control" name="city" id="city" placeholder="Eg. Warsaw, London, Paris.."/>
					</div>
					
					<button class="btn btn-success btn-lg">Find my weather</button>
					
					
				</form>
	
				</div>
			</div>
		</div>



<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script>

		$("#findMyWeather").click(function(event) {

			 event.preventDefault();

			 $(".alert").hide();

			 if ($("#city").val()!="") {

				 $.get("scraper.php?city="+$("#city").val(),
				function( data ) {




				 if (data=="") {


				 $("#fail").fadeIn();

				 } else {


				 $("#success").html(data).fadeIn();

				 }


				 });

				 } else {

					$("#noCity").fadeIn();

				}



		 });
</script>

	</body>
</html>