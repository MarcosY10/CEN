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
            background: linear-gradient(to bottom right, #f0f0f0, #d9e4f5); /* Fondo degradado */
        }

        nav {
            background-color: rgba(0, 0, 0, 0.85);
            height: 140px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            position: relative; /* ✅ ya no se queda fijo */
        }

        nav img {
            width: 7%;
        }

        .upt {
            font-size: 30px;
            margin-left: 15px;
            color: white;
            font-weight: bold;
        }

        nav button, nav a {
            margin-left: 20px;
            background: brown;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }

        nav button:hover, nav a:hover {
            background: darkred;
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
        }

        .centr h2 {
            color: brown;
            margin-top: 20px;
        }

        footer {
            background-color: brown; /* ✅ solo franja */
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
        <button onclick="window.location.href='https://aula.cen.edu.ar/?redirect=0'">Campus Virtual</button>
        <a href="https://instagram.com/" target="_blank">Instagram</a>
        <a href="https://facebook.com/" target="_blank">Facebook</a>
    </nav>
    
    <main id="colo">
        <div class="vid">
            <img class="mar" src="media/LOGO1.png" alt="Logo CEN">
        </div>
        <div class="centr">
            <h2>Visión</h2>
            <p>El Centro Educativo Rosario Ocampo Iribarren se proyecta como un referente en educación técnica en la región de Nonogasta, La Rioja, promoviendo la formación de jóvenes competentes y comprometidos con la sociedad. Aspiramos a brindar una educación de calidad, actualizada y orientada a la informática, que permita a los estudiantes desarrollar habilidades tecnológicas, pensamiento crítico y creatividad, preparándolos para enfrentar los desafíos del mundo digital y contribuir al desarrollo local y global.</p>

            <h2>Misión</h2>
            <p>Nuestro objetivo principal es formar profesionales técnicos en informática capaces de aplicar conocimientos teóricos y prácticos en distintos ámbitos de la tecnología, fomentando la innovación, la ética profesional y la responsabilidad social. Buscamos que nuestros estudiantes no solo dominen herramientas y lenguajes informáticos, sino que también desarrollen competencias de resolución de problemas, trabajo en equipo y liderazgo, convirtiéndose en agentes de cambio positivo en su comunidad y en el sector tecnológico.</p>
        </div>
    </main>

    <footer>
        <p>CEN © CENTRO EDUCATIVO NONOGASTA</p>
    </footer>

</body>
</html>
