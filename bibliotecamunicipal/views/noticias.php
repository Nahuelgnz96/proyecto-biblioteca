
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca Popular Coronda</title>
  <link rel="stylesheet" href="../css/noticias.css?v=1.2">
  <link rel="stylesheet" href="../css/whatsapp.css">
  <script src="https://kit.fontawesome.com/8697250bf3.js" crossorigin="anonymous"></script>
</head>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=3466400909&text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n!." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
  <header class="header" id="Inicio">
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
    <div class="header-content container">

      <h1>Biblioteca Popular <hr> "Coronel José Rodríguez" Coronda</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Doloremque nulla debitis adipisci quaerat inventore omnis velit aspernatur possimus molestias?
          Vero, eius. Recusandae dignissimos nobis repellendus, quae rem voluptate! Vel, placeat.
      </p>
      <a href="#actividades" class="btn-1">Informacion</a>
    </div>
</header>
<section class="coffee" id="actividades">
    <div class="coffee-content container">
      <h2>NOTICIAS Y ACTIVIDADES</h2>
      <p class="txt-p">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Consequatur voluptate officia rerum nemo qui quia nostrum vero ullam sunt,
          perferendis omnis nam minima facilis neque accusamus obcaecati fugit provident incidunt.
      </p>

      <div class="coffee-group">

        <?php include "../controller/todasNoticias.php";?>
      
      </div>

    </div>
  </section>
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>