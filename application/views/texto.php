<html>
    <head>
        <title>Texto</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style4.css') ?>" />
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>"/>
        <meta charset="utf-8">
    </head>
    
    <body>
        <header>
              <?php if(isset($mensagem)){
                  echo "<h2>$mensagem</h2>";
                  echo "<br>";
              }?>
        </header>
        
        <main>
            <form action="salvartexto" method="POST">
              <div id="texto">
                <h3> Novo texto: </h3>
                  <label>(*) Título:  </label>
                    <input type="text" name="titulo" required>
                  <label>(*) Autor:  </label>
                    <input type="text" name="autor" required>
                  <label>(*) Texto:  </label>
                    <textarea name="texto" required style="width:300px; height:300px;"></textarea>
                    
                   <input class="botao" type="submit" value="Enviar" name="Enviar" title="Enviar"/>
              </div>
            </form>
        </main>
    </body>
</html>


