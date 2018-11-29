<html>
<head>
<title> panatrip</title>
    <meta charset="utf-8">
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/pie.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>

<body>
  <div class= "portada">
	<img class="mySlides" src="imagenes/port2.jpg" width="100%" >
	<img class="mySlides" src="imagenes/port3.jpg" width="100%" >
    </div>
    <script type="text/javascript">
   var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); // Change image every 2 seconds
} 
  </script>
<div id="navegador">
<nav>
        <!-- Listado de Navegación -->
        <ul class="menu">  
            <li><a href="index.php">INICIO</a></li>  
            
            <li><a href="perfil2.html">PERFIL</a></li>			
          
            <li><a href="contacto2.html">CONTACTO</a></li>
        </ul>    
</nav>
</div>
<div class="icon">
	<a href="https://www.tripadvisor.com.mx/Attractions-g294479-Activities-c61-t87-Panama.html"><img class="nature" src="imagenes/hoja.png" width="180px"></a>
	 <a href="https://www.joebrownadventures.com/es/mejores-playas-cerca-de-la-ciudad-de-panama/"><img class="playa" src="imagenes/playa.png"width="180px"></a>
	<a href="https://www.tripadvisor.com.mx/Hotels-g294480-Panama_City_Panama_Province-Hotels.html"><img class="hotel" src="imagenes/hotel.png"width="180px"></a>
	<hr>
	
</div>
<h1>A DONDE DESEAS IR ?</h1>
  <div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></span>
        <input type="text" class="form-control" id="search" placeholder="Search video">
      </div>
    </div>
    <div class="col-md-3 col-md-offset-3" id="result">
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script type="text/javascript" src="js/index.js"></script>
	<div>
		<h1>Las mejores playas</h1>
		<img src="imagenes/fotos/contadora2.jpg"width="350px" height="200px">
		<img src="imagenes/fotos/bocas.jpg"width="350px" height="200px">
		<img src="imagenes/fotos/venao.jpg"width="350px" height="200px">
	</div>
	<div>
		<h1>Los mejores hoteles</h1>
		<img src="imagenes/fotos/hardrock.jpg"width="350px" height="200px">
		<img src="imagenes/fotos/panama.jpg"width="350px" height="200px">}
		<img src="imagenes/fotos/hotel.jpg"width="350px" height="200px">
	</div>
	<br>
	<br>
	<br>
<img src="imagenes/port4.jpg" width="100%">
</body>
<footer>  © 2018 PANATRIP | proyecto final de PHP | </footer>
</html>