<html>
  <head>
    <title>Login</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>"/>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href= "<?php echo base_url('assets/css/style3.css') ?>" />
  </head>
  <body>
      
    <form class="formulario" style="margin-left:400px; height: 500px;" 
          action="entraraluno" method="POST">
        
      <img id="login" src=" <?php echo base_url('assets/img/logo.png') ?>" 
           alt="logo" title="logo"/>
      <?php
      
        if(isset($mensagem)){
          echo "<h3>$mensagem</h3>";
          echo "<br>";
        }
        
        if(isset($sucesso)){
          echo "<h4> $sucesso </h4>";
          echo "<br><br>";
        }
      ?>
      <h1 style="margin-top:-50px; margin-left: 150px;"> Login</h1>
      <div id="campos" style="margin-left:80px;">
        <label>Email: </label>
        <input type="email" name="email"/>
        <br>
        <br>
        <label>Senha: </label>
        <input type="password" name="senha"/>
        <input type="submit" value="Enviar" name="Enviar" title="Login"/>
      </div>
    </form>
  </body>
</html>
