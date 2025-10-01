<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEN - Cursos</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }
    .topbar {
      display: flex;
      align-items: center;
      gap: 15px;
      background-color: rgba(0, 0, 0, 0.8);
      padding: 10px 20px;
    }

    .topbar .logo {
      display: flex;
      align-items: center;
      gap: 8px;
      color: white;
      font-weight: bold;
      font-size: 18px;
    }

    .menu {
      display: flex;
      gap: 5px;
      margin-left: 1%;
    }
    
    .buton{
      padding: 2% 10%;
      background-color: aquamarine;
      border-radius: 40px;
    }

    .container{
      background: lightblue;
  width: 94%;          /* ancho con margen de 3% a los costados */
  margin: 3% auto;     /* centra y agrega margen arriba/abajo */
  border-radius: 10px;
  display: flex;
  flex-wrap: wrap;     /* para que los hijos no se salgan */
  justify-content: center;
  align-items: center;
  box-sizing: border-box;
    }

    .recorrer {
  flex: 1 1 250px;     /* cada bloque se adapta, mínimo 250px */
  margin: 10px;
  padding: 15px;
  background: white;
  border-radius: 8px;
}

  </style>
</head>
<body>
  <nav>
    <div class="topbar">
    <div class="logo">
      <img src="media/LOGO1.png" alt="Logo" style="width:7%;">
      CEN
    </div>
    <div class="menu">
      <button class="buton" onclick="mostrar(0)">Curso 1</button>
      <button class="buton" onclick="mostrar(1)">Curso 2</button>
      <button class="buton" onclick="mostrar(2)">Curso 3</button>
      <button class="buton" onclick="mostrar(3)">Curso 4</button>
      <button class="buton" onclick="mostrar(4)">Curso 5</button>
      <button class="buton" onclick="mostrar(5)">Curso 6</button>
    </div>
  </div>
  </nav>


  <div class="main">
    <div class="intro" div class="content" >
      <h1>Información del curso</h1>
      <p>Aquí se mostrará la información detallada de cada curso seleccionado.</p>
      <div class="container">
        <div class="recorrer"><h1>"Lengua y Literatura v",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Matemática v",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Tecnologia De Gesgion",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Autogestión del mercado",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Practicas I Arduino",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Programación II",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Instalaciones y Mantenimiento III",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Inglés V",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Educación Física",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Educación Emocional",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Electronica",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Redes de Datos",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Metodologia de la Investigación",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Practicas I Front-Back"</h1><p>Descricción de la materia</p></div>
      </div>

      <div class="container">
        <div class="recorrer"><h1>"Lengua y Literatura v",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Matemática v",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Tecnologia De Gesgion",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Autogestión del mercado",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Practicas I Arduino",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Programación II",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Instalaciones y Mantenimiento III",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Inglés V",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Educación Física",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Educación Emocional",</h1><p>Descricción de la materia</p></div>
      </div>

      <div class="container">
        <div class="recorrer"><h1>"Practicas I Arduino",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Programación II",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Instalaciones y Mantenimiento III",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Inglés V",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Educación Física",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Educación Emocional",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Electronica",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Redes de Datos",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Metodologia de la Investigación",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Practicas I Front-Back"</h1><p>Descricción de la materia</p></div>
      </div>

      <div class="container">
        <div class="recorrer"><h1>"Lengua y Literatura v",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Matemática v",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Tecnologia De Gesgion",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Electronica",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Redes de Datos",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Metodologia de la Investigación",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Practicas I Front-Back"</h1><p>Descricción de la materia</p></div>
      </div>

      <div class="container">
        <div class="recorrer"><h1>"Metodologia de la Investigación",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Practicas I Front-Back"</h1><p>Descricción de la materia</p></div>
      </div>

      <div class="container">
        <div class="recorrer"><h1>"Lengua y Literatura v",</h1><p>Descricción de la materia</p></div>
        <div class="recorrer"><h1>"Matemática v",</h1><p>Descricción de la materia</p></div>
      </div>
    </div>

    <div>
      <img src="media/WhatsApp Image 2025-07-22 at 15.39.07.jpeg" alt="" style="width: 50%;">
    </div>

    <script>
      let container = document.querySelectorAll(".container");
      let recorrer = document.querySelectorAll(".recorrer");
      let ocultar;
      for (let i = 0; i < container.length; i++) {
        container[i].style.display= "none"
      }


      function mostrar(num){
        for (let i = 0; i <= container.length; i++) {
          let con = document.style = container;
          let reco = document.style = recorrer;
          container[i].style.display= "none"
          container[num].style= container + recorrer;
        }
      }

      mostrar()

    </script>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>CEN - Cursos</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }
    
    /* Barra superior */
    .topbar {
      display: flex;
      align-items: center;
      gap: 15px;
      background-color: rgba(0, 0, 0, 0.8);
      padding: 10px 20px;
    }
    
    .topbar .logo {
      display: flex;
      align-items: center;
      gap: 8px;
      color: white;
      font-weight: bold;
      font-size: 18px;
    }
    
    .topbar .logo img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: white;
    }
    
    .menu {
      display: flex;
      gap: 10px;
      margin-left: auto;
    }
    
    .menu button {
      background: rgba(255, 255, 255, 0.2);
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      color: white;
      cursor: pointer;
      transition: 0.3s;
    }
    
    .menu button:hover {
      background: rgba(255, 255, 255, 0.4);
    }
    
    /* Contenedor principal debajo de la barra */
    .main {
      flex: 1;
      display: flex;
    }
    
    /* Panel izquierdo con mensaje intro */
    .intro {
      width: 250px;
      background: rgba(0, 0, 0, 0.1);
      padding: 20px;
      font-size: 14px;
    }
    
    /* Panel derecho con el contenido */
    .content {
      flex: 1;
      padding: 20px;
      background: #f4f4f4;
      overflow-y: auto;
      display: flex;
      justify-content: space-between;
    }
    
    .content h1 {
      margin-top: 0;
    }
    
    .content ul {
      list-style-type: square;
      padding-left: 20px;
    }
  </style>
</head>
<body>
  
  <!-- Barra superior 
  <div class="topbar">
    <div class="logo">
      <img src="https://via.placeholder.com/40" alt="Logo">
      CEN
    </div>
    <div class="menu">
      <button onclick="mostrarCurso(1)">Curso 1</button>
      <button onclick="mostrarCurso(2)">Curso 2</button>
      <button onclick="mostrarCurso(3)">Curso 3</button>
      <button onclick="mostrarCurso(4)">Curso 4</button>
      <button onclick="mostrarCurso(5)">Curso 5</button>
      <button onclick="mostrarCurso(6)">Curso 6</button>
    </div>
  </div>
  
   Contenido principal 
  <div class="main">
    Panel izquierdo 
    <div class="intro" div class="content" >
      <h1>Información del curso</h1>
      <p>Aquí se mostrará la información detallada de cada curso seleccionado.</p>
      
    </div>
    
     Panel derecho -
    <div class="main">
      <div class="container"  div class="content" id="contenido">
        <p>Bienvenido al Campus Virtual.<br>Selecciona un curso en la parte superior para ver las materias correspondientes.</p>
        
        <div id="map" style="width:100%;height:300px;"></div>
        
      </div>
    </div>
    
  </div>
  
  <script>
    const cursos = {
      1: {
        titulo: "Curso 1°",
        materias: [
        "Lengua y Literatura",
        "Matemática",
        "Ciencias Sociales",
        "Ciencias Naturales",
        "Inglés",
        "Educación Física",
        "Educación Artística",
        "Educación Tecnológica",
        "Formación Ética y Ciudadana"
        ]
      },
      2: {
        titulo: "Curso 2°",
        materias: [
        "Lengua y Literatura",
        "Matemática",
        "Historia",
        "Geografía",
        "Biología",
        "Físico-Química",
        "Inglés",
        "Educación Física",
        "Educación Tecnológica",
        "Educación Artística",
        "Formación Ética y Ciudadana"
        ]
      },
      3: {
        titulo: "Curso 3°",
        materias: [
        "Lengua y Literatura",
        "Matemática",
        "Historia",
        "Geografía",
        "Biología",
        "Física",
        "Química",
        "Inglés",
        "Educación Física",
        "Educación Tecnológica",
        "Educación Artística",
        "Formación Ética y Ciudadana"
        ]
      },
      4: {
        titulo: "Curso 4°",
        materias: [
        "Lengua y Literatura",
        "Matemática",
        "Historia",
        "Geografía",
        "Física",
        "Química",
        "Inglés",
        "Educación Física",
        "Educación Tecnológica",
        "Educación Artística",
        "Formación Ética y Ciudadana"
        ]
      },
      5: {
        titulo: "Curso 5 °",
        materias: [
        "Lengua y Literatura v",
        "Matemática v",
        "Tecnologia De Gesgion",
        "Autogestión del mercado",
        "Practicas I Arduino",
        "Programación II",
        "Instalaciones y Mantenimiento III",
        "Inglés V",
        "Educación Física",
        "Educación Emocional",
        "Electronica",
        "Redes de Datos",
        "Metodologia de la Investigación",
        "Practicas I Front-Back"
        ]
      },
      6: {
        titulo: "Curso 6°",
        materias: [
        "Lengua y Literatura",
        "Matemática",
        "Historia",
        "Geografía",
        "Física",
        "Química",
        "Biología",
        "Filosofía",
        "Inglés",
        "Educación Física",
        "Educación Tecnológica",
        "Educación Artística",
        "Formación Ética y Ciudadana"
        ]
      }
    };
    
    function mostrarCurso(num) {
      const contenido = document.getElementById("contenido");
      let html = `<h1>${cursos[num].titulo}</h1>`;
      cursos[num].materias.forEach(m => {
        html += `<div>${m}</div>`;
      });
      contenido.innerHTML = html;
    }
  </script>
  
</body>
</html> 
