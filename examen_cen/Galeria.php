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
    
    

    <footer><p>CEN © CENTRO EDUCATIVO NONOGASTA</p></footer>
</body>
</html>