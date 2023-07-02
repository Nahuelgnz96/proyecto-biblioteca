<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca Popular Coronda</title>
  <link rel="stylesheet" href="../css/noticiaindividual.css">
  <link rel="stylesheet" href="../css/whatsapp.css">
  <script src="https://kit.fontawesome.com/8697250bf3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="menu container">
      <a href="#" class="logo">logo</a>
      <input type="checkbox" id="menu">
      <label for="menu">
        <img src="img/menu.png" class="menu-icono" alt="">
      </label>
      <nav class="navbar">
        <ul>
          <li><a href="../index/#inicio">Inicio</a></li>
          <li><a href="../index/#actividades">actividades</a></li>
          <li><a href="../index/#services">Servicios</a></li>
          <li><a href="../index/#blog">sobre nosotros</a></li>
          <li><a href="../index/#pie-pagina">Contacto</a></li>
          <button class="btnlogin-popup" onclick="location.href='../views/v_login.php'">Login</button>
        </ul>
      </nav>


    </div>

    <?php include "../controller/c_noticiasunicas.php";?> 

</body>