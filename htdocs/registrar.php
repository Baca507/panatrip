<!DOCTYPE html>
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
  <h1> Resgistrate</h1>
    <div>
     <h3>Usuario</h3>			
  <input type="text" name="usuario"placeholder="user">
  <h3>Contraseña</h3>
  <input type="text" name="password" placeholder="password">
    <h3>Correo Electronico</h3>      
  <input type="text" name="Email"placeholder="Email">
   </div>
   <div>
  <input type="submit" value="Registrar">
   </div>	
   <br>
  <br>
  <br>
</body>
<footer>  © 2018 PANATRIP | proyecto final de PHP | </footer>
</html>