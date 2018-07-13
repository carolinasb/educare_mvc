<html>
    <head>
        <title>Novo simulado</title>
        <meta charset="UTF-8"/>
<!--        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style4.css') ?>" />-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>"/>
        <meta charset="utf-8">
    </head>

    <body>
      <header class="header">
        <img id="logo" src="<?php echo base_url('assets/img/logo.png') ?>" title="Logo educare" alt="Logo educare"/>
        <h2> Olá,<br> para melhor acessibilidade, pedimos que preencha todos os campos corretamente.</h2>
      </header>
      
        
      <main>
        <form action="salvarsimulado" method="POST">
          <div id="simulado">
              <label>Selecione quais perguntas você deseja para montar o seu simulado: <br></label>
                      <?php echo $options_questoes;?>
                    
             
              <input class="botao" type="submit" value="Enviar" name="Enviar" title="Enviar"/>
          </div>
        </form>
        </main> 
   </body>
</html>
