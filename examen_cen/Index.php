<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Educativo Nonogasta</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url(principal4.png);
        background-repeat: no-repeat;

background-size: cover; 

background-position: center; 
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

        nav button:hover{
            background-color: brown;
        }

        #colo {
            padding: 40px;
            text-align: center;
        }

        .vid img {
            width: 200px;
            display: block;
            margin: 0 auto 20px;
        }

        .centr {
            max-width: 800px;
            margin: auto;
            text-align: justify;
            background-color: #2b1718;
            color: aliceblue;
            border-radius: 15px;
            
        }

        .centr h2 {
            color: whitesmoke;
            margin-top: 20px;

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

        footer {
            background-color: #2b1718; 
            text-align: center;
            color: white;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <nav>
         <div class="logo">
      <img onclick="window.location.href='Index.php'" src="media/LOGO1.png" alt="Logo">
    </div>
        <button onclick="window.location.href='Galeria.php'">Galeria</button>
        <button onclick="window.location.href='Contacto.php'">Contacto</button>
        <button onclick="window.location.href='Oferta.php'">Ofertas</button>
        <div class="jiji"> <button  onclick="window.location.href='https://aula.cen.edu.ar/?redirect=0'">Campus Virtual</button></div>
       
        <button onclick="window.location.href='https://instagram.com/'">Instagram</button>
        <button onclick="window.location.href='https://facebook.com/'">Facebook</button>
        <div class="jojo"> <button onclick="window.location.href='cen.edu.ar/infocen'">Infocen</button></div>
    </nav>
    
    <main id="colo">
        <div class="vid">
            <img src="media/LOGO1.png" alt="Logo CEN">
        </div>
        <div class="centr">
            <h2>Visión</h2>
            <p>El Centro Educativo Rosario Ocampo Iribarren se proyecta como un referente en educación técnica en la región de Nonogasta, La Rioja, promoviendo la formación de jóvenes competentes y comprometidos con la sociedad. Aspiramos a brindar una educación de calidad, actualizada y orientada a la informática, que permita a los estudiantes desarrollar habilidades tecnológicas, pensamiento crítico y creatividad, preparándolos para enfrentar los desafíos del mundo digital y contribuir al desarrollo local y global.</p>
        </div>
        <div class="centr">
            <h2>Misión</h2>
            <p>Nuestro objetivo principal es formar profesionales técnicos en informática capaces de aplicar conocimientos teóricos y prácticos en distintos ámbitos de la tecnología, fomentando la innovación, la ética profesional y la responsabilidad social. Buscamos que nuestros estudiantes no solo dominen herramientas y lenguajes informáticos, sino que también desarrollen competencias de resolución de problemas, trabajo en equipo y liderazgo, convirtiéndose en agentes de cambio positivo en su comunidad y en el sector tecnológico.</p>
        </div>
        <div class="centr">
           <h1>Información sobre la institución: </h1>
        <p>La institución cuenta con los dispositivos suficientes para trbajar en la misma institución</p>
        <p>El correcto ingreso se da gracias a los requisitos requeridos por la introducción</p>
         <p>Horario: 14:00 a 21:20</p>
         <p>Duración Academica: Seis Años con Dos Visiones</p>
        </div>
    </main>
  
    <footer>
        <p>CEN © CENTRO EDUCATIVO NONOGASTA</p>
    </footer>

</body>
</html>
