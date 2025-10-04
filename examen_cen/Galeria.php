<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

 <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #f0f0f0, #d9e4f5); /* Fondo degradado */
        }
nav {
            background-color: #2b1718;
            height: 140px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            position: relative; 
        }

        nav img {
            width: 14%;
        }

 

        nav button {
            margin-left: 20px;
            background-color: #4d292bff ;
            color: white;
            border: none; 
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            height: 50px;
        }

        
        .jiji button{
            margin-left: 20px;
            background-color: #0b45afff ;
            color: white;
            border: none; 
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            height: 50px;
        animation: cambiarColor 10s ease-in-out infinite;

}

@keyframes cambiarColor {
  0%   { background-color: #3b075b; }
  25%  { background-color: #6812cb; }
  50%  { background-color: #f52525; }
  75%  { background-color: #b01212; }
  100% { background-color: #3b075b; }
}

    .jojo button{
           
            
            color: white;
            border: none; 
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            height: 50px;
        animation: cambiar 10s ease-in-out infinite;

}

@keyframes cambiar {
  0%   { background-color: #5b2907; }
  25%  { background-color: #cb5c12; }
  50%  { background-color: #f5cf25; }
  75%  { background-color: #b0ad12; }
  100% { background-color: #555b07; }
}
 
        nav button:hover{
            background-color: brown;
        }

       



        .vid img, .slide img {
            width: 200px;
            display: block;
            margin: 0 auto 20px;
        }

    .carrusel {
  position: relative;
  width: 600px;
  height: 600px;
  overflow: hidden;
}
.slide {
  text-align: center;
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: none;
}

.slide.active {
  display: block;
}
.boton {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  font-size: 20px;
  padding: 10px;
  cursor: pointer;
}
button:nth-of-type(1) { left: 10px; }
button:nth-of-type(2) { right: 10px; }

        footer {
            background-color: #4d292bff; 
            text-align: center;
            color: white;
            padding: 15px;
            margin-top: 70vh;
        }
    </style>
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
     <img class="slide" src="DSC03197.JPG" alt="Imagen 1">
     <img class="slide" src="DSC03201.JPG" alt="Imagen 2">
     <img class="slide" src="img/hola-mundo.png" alt="Imagen 3">
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