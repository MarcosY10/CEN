<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Centro Educativo Nonogasta</title>
    <link rel="stylesheet" href="css/cont.css">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(to bottom right, #f0f0f0, #d9e4f5);
    }

    nav {
        background-color: rgba(0, 0, 0, 0.85);
        height: 140px;
        display: flex;
        align-items: center;
        padding: 0 20px;
        position: relative; 
    }

    nav img {
        width: 7%;
        cursor: pointer;
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


    .formulario-card button {
        background: brown;
        color: white;
        border: none;
        cursor: pointer;
    }

    .formulario-card button:hover {
        background: darkred;
    }

    /* 🔹 Bloques de información alineados en fila */
    .info-contacto {
        display: flex;
        justify-content: space-around; /* reparte espacio */
        align-items: flex-start;       /* alinea arriba */
        margin: 40px auto;
        max-width: 900px;
        text-align: left;              /* letras alineadas a la izquierda */
    }

    .info-contacto div {
        flex: 1; 
        margin: 0 15px;
    }

    .info-contacto h2 {
        color: brown;
        margin-bottom: 10px;
    }

    footer {
        background-color: brown; 
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
    

    <div class="contacto-container">

        <!-- Formulario en recuadro centrado -->
        <div class="formulario-card">
            <form action="">
                <strong><label for="">Consultas</label></strong>
                <input type="text" required placeholder="Nombre y apellido">
                <input type="email" required placeholder="Tu Gmail">
                <textarea required placeholder="Ingrese tu consulta o duda"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <!-- 🔹 Info en columnas -->
        <div class="info-contacto">
            <div>
                <h2>DIRECCIÓN:</h2>
                <p>B° HIPODROMO CALLE 9 DE SEPTIEMBRE NONOGASTA - LA RIOJA</p>
            </div>
            <div>
                <h2>E-MAIL:</h2>
                <p>infosecundario@cen.edu.ar <br>infocensecundario@gmail.com</p>
            </div>
            <div>
                <h2>WHATSAPP:</h2>
                <p>3825551959</p>
            </div>
        </div>

    </div>

    <footer><p>CEN © CENTRO EDUCATIVO NONOGASTA</p></footer>
</body>
</html>
