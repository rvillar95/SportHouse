<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SportHouse - Login</title>
  <link href="<?php echo base_url() ?>lib/css/style.css" rel="stylesheet" type="text/css"/>
  
</head>

<body id="fondoLogin"  style="background-color: #93C54B;">

  <div class="page">
  <div class="container">
    <div class="left">
      <div class="login">
        <img src="<?php echo base_url() ?>lib/img/logo.png" alt="">
      </div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#01559B;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#8AA143;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
        <label for="email">Correo</label>
        <input type="email" id="email">
        <label for="password">Contraseña</label>
        <input type="password" id="password">
        <input type="submit" id="submit" value="ENTRAR">
      </div>
    </div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>

  <script src="<?php echo base_url() ?>lib/js/index.js" type="text/javascript"></script>

    




</body>

</html>
