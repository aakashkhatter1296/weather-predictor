<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <title>Weather Predictor</title>

    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  </head>

  <style type="text/css">
	html,body{
    height:100%;
  }
  .container{
		background-image: url("images/plain2.jpg");
		background-size: cover;
    height:100%;
    width:100%;
		background-position: center;
    padding-top: 30px;
	}
	.heading{
    color:white;
    font-size: 500%;
    text-align: center;
    margin-top: 40px;
    font-family: myFont;
  }
  @font-face{
    font-family: myFont;
    src: url(Jaapokkienchance-Regular.otf);
  }
  .lead{
    text-align: center;
    color: white;
    padding-top:15px;
    padding-bottom: 15px;
  }
  .center{
    text-align: center;
  }
  button{
    margin-top: 20px;
  }
  .alert{
    margin-top: 20px;
    display: none;
  }
  </style>
  <body>
	<div class="container">
		<div class="row">
      <div class="col-md-6 col-md-offset-3 center">
        <h1 class="heading">Weather Predictor</h1>
        <p class="lead">Enter your city below to get a forecast for the weather</p>

        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="city" id="city" placeholder= "Eg: London, Paris, San Francisco..."/>
          </div>
          <button id="findMyWeather"class="btn btn-success btn-lg">Find My Weather</button>
        </form>

        <div id="success" class="alert alert-success"></div>
        <div id="fail" class="alert alert-danger">Could not find weather data for that city. Please try again.</div>
        <div id="noCity" class="alert alert-danger">Please enter a city !</div>

      </div>
    </div>
	</div>
	
  </body>

  <script type="text/javascript">
    

    $("#findMyWeather").click(function(event){

      event.preventDefault();
      $(".alert").hide();

      if($("#city").val()!="")
      {
        $.get("scraper.php?city="+$("#city").val(), function( data ){

          if(data == "")
          {
            $("#fail").fadeIn();
          }
          else
          {
            $("#success").html(data).fadeIn();
          }
        });
      }
      else
      {
        $("#noCity").fadeIn();
      }

   });
      



  </script>

 
</html>