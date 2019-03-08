<!doctype html>
<html>

<head>
<title>WelcomePage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<style>
.carouesl {
   max-height:100%;
   max-width:100%;
   overflow: hidden;

   position:absolute;
top:0;

}
 .carousel-inner img {
		 width: 100%;
		 height: 100%;

 }
</style>
</head>

<body>
  <?php include_once "newnav.php";?>
<div class="carousel slide" id="demo" data-ride="carousel">
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1" ></li>
  <li data-target="#demo" data-slide-to="2" ></li>
</ul>

<div class="carousel-inner">
  <div class="carousel-item active"><img src="images/Duster.jpg"></div>
  <div class="carousel-item" ><img src="images/bmw x3.jpg"></div>
  <div class="carousel-item"><img src="images/Swift.jpg"></div>
</div>

<a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
<a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>

</div>



</body>


</html>
