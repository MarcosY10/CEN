<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEN - Cursos</title>
  <link rel="stylesheet" href="css/ofer.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    nav {
      background-color: rgba(114, 23, 7, 0.85);
      display: flex;
      align-items: center;
      padding: 10px 20px;
      flex-wrap: wrap;
    }

    nav .logo {
      display: flex;
      align-items: center;
      color: white;
      font-size: 20px;
      font-weight: bold;
      margin-right: 20px;
    }

    nav .logo img {
      width: 50px;
      margin-right: 10px;
      cursor: pointer;
    }

    nav .menu {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    nav .menu button{
        background: cadetblue;
      color: white;
      border: none;
      padding: 10px 10px;
      border-radius: 6px;

    }

    
    nav .menu button:hover{
      background: darkred;
    }

    nav button, 
    nav a {
      background: brown;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 6px;
      cursor: pointer;
      text-decoration: none;
      font-size: 14px;
    }

    .main {
      display: flex;
      flex-wrap: wrap;
      padding: 20px;
      gap: 20px;
      justify-content: center;
    }

    .intro {
      flex: 1 1 300px;
      max-width: 400px;
    }

    .container {
      display: none; /* Ocultamos por defecto */
      background: #f4f4f4;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      flex: 1 1 500px;
      max-width: 800px;
    }

    .recorrer {
      margin-bottom: 10px;
      background: white;
      padding: 10px;
      border-radius: 6px;
      box-shadow: 0 0 3px rgba(0,0,0,0.1);
    }

    .recorrer h1 {
      margin: 0;
      font-size: 16px;
      color: brown;
    }

    .recorrer p {
      margin: 5px 0 0;
      font-size: 14px;
    }

    .imagen {
      flex: 1 1 300px;
      text-align: center;
    }

    .imagen img {
      max-width: 100%;
      border-radius: 10px;
    }

     footer {
        background-color: brown; 
        text-align: center;
        color: white;
        padding: 20px;
        margin-top: 40px;
    }
  </style>
</head>
<body>

  <nav>
    <div class="logo">
      <img onclick="window.location.href='Index.php'" src="media/LOGO1.png" alt="Logo">
    </div>

   
    <div class>
      <button onclick="window.location.href='Galeria.php'">Galeria</button>
      <button onclick="window.location.href='Contacto.php'">Contacto</button>
      <button onclick="window.location.href='Oferta.php'">Ofertas</button>
      <a href="https://aula.cen.edu.ar/?redirect=0" target="_blank">Campus Virtual</a>
      <a href="https://instagram.com/" target="_blank">Instagram</a>
      <a href="https://facebook.com/" target="_blank">Facebook</a>
    </div>

     <div class="menu">
      <button onclick="mostrar(0)">Curso 1</button>
      <button onclick="mostrar(1)">Curso 2</button>
      <button onclick="mostrar(2)">Curso 3</button>
      <button onclick="mostrar(3)">Curso 4</button>
      <button onclick="mostrar(4)">Curso 5</button>
      <button onclick="mostrar(5)">Curso 6</button>
    </div>
    
  </nav>

  <div class="main">
    <div class="intro">
      <h1>Materias:</h1>
      <p></p>
    </div>

    <!-- Contenedores de cursos -->
    <div class="container">
      <div class="recorrer"><h1>Lengua y Literatura I</h1><p>Profesora:´Sandra Avalos</p></div>
      <div class="recorrer"><h1>Matemática I</h1><p>Profesora:</p></div>
      <div class="recorrer"><h1>Tecnología de Gestión</h1><p>Profesor:</p></div>
    </div>

    <div class="container">
      <div class="recorrer"><h1>Autogestión del Mercado</h1><p>Descripción de la materia</p></div>
      <div class="recorrer"><h1>Prácticas Arduino I</h1><p>Descripción de la materia</p></div>
    </div>

    <div class="container">
      <div class="recorrer"><h1>Programación II</h1><p>Descripción de la materia</p></div>
      <div class="recorrer"><h1>Redes de Datos</h1><p>Descripción de la materia</p></div>
    </div>

    <div class="container">
      <div class="recorrer"><h1>Inglés V</h1><p>Descripción de la materia</p></div>
      <div class="recorrer"><h1>Educación Física</h1><p>Descripción de la materia</p></div>
    </div>

    <div class="container">
      <div class="recorrer"><h1>Matemática V</h1><p>Profesora: Benitez</p></div>
      <div class="recorrer"><h1>Tecnología</h1><p>Profesor: Guardia</p></div>
      <div class="recorrer"><h1>AutoGestion del Mercado Informatico</h1><p>Profesor: Soria</p></div>
      <div class="recorrer"><h1>Practicas I</h1><p>Profesor: Peña</p></div>
      <div class="recorrer"><h1>Programación</h1><p>Profesor: Perea</p></div>
      <div class="recorrer"><h1>Lengua Extranjera</h1><p>Profesora: Soto</p></div>
        <div class="recorrer"><h1>Lengua y Literatura V</h1><p>Profesora: Aballay</p></div>
          <div class="recorrer"><h1>Instalaciones y Mantenimientos V</h1><p>Profesora: Peña</p></div>
           <div class="recorrer"><h1>Metodología de la Investigación</h1><p>Profesora: </p></div>
            <div class="recorrer"><h1>Electronica</h1><p>Profesor: Guidet</p></div>
             <div class="recorrer"><h1>Redes de Datos</h1><p>Profesora: </p></div>
              <div class="recorrer"><h1>Practicas </h1><p>Profesor: Guardia</p></div>
    </div>

    <div class="container">
      <div class="recorrer"><h1>Base de datos</h1><p>Profesor: Perea</p></div>
      <div class="recorrer"><h1>Instalación de Mantenimiento</h1><p>Profesor: H y Silva</p></div>
      <div class="recorrer"><h1>Marco Juridico</h1><p>Profesora: Carla</p></div>
      <div class="recorrer"><h1>Economia</h1><p>Profesora: Oliva</p></div>
      <div class="recorrer"><h1>Matemática Aplicada</h1><p>Profesor: Mercado</p></div>
      <div class="recorrer"><h1>Ingles Tecnico</h1><p>Profesora: Loreley</p></div>
      <div class="recorrer"><h1>Redes Profesionales</h1><p>Profesor: Robador</p></div>
      <div class="recorrer"><h1>Expresion Oral y Escrita</h1><p>Profesor: Espinosa</p></div>
      <div class="recorrer"><h1>Prácticas I</h1><p></p></div>
      <div class="recorrer"><h1>Proyecto II</h1><p></p></div>
    </div>

    <div class="imagen">
      <img src="media/WhatsApp Image 2025-07-22 at 15.39.07.jpeg" alt="Imagen del curso">
    </div>
  </div>
<footer>
        <p>CEN © CENTRO EDUCATIVO NONOGASTA</p>
    </footer>
  <script>
    const contenedores = document.querySelectorAll(".container");

    // Ocultamos todos al inicio
    contenedores.forEach(c => c.style.display = "none");

    function mostrar(num) {
      contenedores.forEach((c, i) => {
        c.style.display = (i === num) ? "block" : "none";
      });
    }
  </script>
    
</body>
</html>
