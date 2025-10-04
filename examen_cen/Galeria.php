<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../examen_cen/css/galeria.css">
    <title>Document</title>


</head>
<body>
      <nav>
         <div class="logo">
      <img onclick="window.location.href='Index.php'" src="media/LOGO1.png" alt="Logo">
      
      
    </div>
        <button onclick="window.location.href='Contacto.php'">Contacto</button>
        <button onclick="window.location.href='Oferta.php'">Ofertas</button>
      <div class="jiji"> <button onclick="window.location.href='https://aula.cen.edu.ar/?redirect=0'">Campus Virtual</button></div> 
        <button onclick="window.location.href='https://instagram.com/'">Instagram</button>
        <button onclick="window.location.href='https://facebook.com/'">Facebook</button>
       <div class="jojo"> <button onclick="window.location.href='cen.edu.ar/infocen'">Infocen</button></div>
    </nav>
    
        <div class="carrusel">
     <img class="slide" src="../examen_cen/media/DSC03215.JPG" alt="Imagen 1">
     <img class="slide" src="../examen_cen/media/DSC03218.JPG" alt="Imagen 2">
     <img class="slide" src="../examen_cen/media/DSC03220.JPG" alt="Imagen 3">
     <img class="slide" src="../examen_cen/media/DSC03245.JPG" alt="Imagen 4">
     <img class="slide" src="../examen_cen/media/DSC03246.JPG" alt="Imagen 5">
     <button class="boton" onclick="anterior()">⟨</button>
     <button class="boton" onclick="siguiente()">⟩</button>
   </div>
    
   <script>
  let index = 0;
  const slides = document.querySelectorAll(".slide");

  function mostrarSlide(i) {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[i].classList.add("active");
  }

  function siguiente() {
    index = (index + 1) % slides.length;
    mostrarSlide(index);
  }

  function anterior() {
    index = (index - 1 + slides.length) % slides.length;
    mostrarSlide(index);
  }
</script>
    <footer><p>CEN © CENTRO EDUCATIVO NONOGASTA</p></footer>
</body>
</html>