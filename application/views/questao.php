<?php echo sources(true); ?>
<html>
    <head>
        <title>Questão</title>
        <meta charset="UTF-8"/>
<!--        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style4.css') ?>" />-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>"/>
        <meta charset="utf-8">
    </head>
    
    <body>
        <main>
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
            
            <div id="richbox">
              <?php generate_rich_box("Testando"); ?>
            </div>
            <div id="questao">
              <form action="salvarquestao" method="POST">
                <h3>Nova questão:</h3>
                  <label>(*) Questão:</label><br>
                    <textarea name="questao" style="width:300px; height:300px;"></textarea><br>
                  <label>(*) Resposta correta:</label>
                    <input type="text" name="resposta" required><br>
                  <label>(*)Assunto: <br></label>
                    <select id="assuntos" name="assunto">
                      <?php echo $options_assuntos;?>
                    </select>
                  <input class="botao" type="submit" value="Enviar" name="Enviar" title="Enviar"/>
              </form>
            </div>
           
        </main>
    </body>
</html>