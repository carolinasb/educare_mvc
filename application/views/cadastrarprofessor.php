<html>
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style2.css') ?>" />
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>"/>
        <meta charset="utf-8">
    </head>

    <body>
      <header class="header">
        <img id="logo" src="<?php echo base_url('assets/img/logo.png') ?>" title="Logo educare" alt="Logo educare"/>
        <div>
          <h1> Olá, </h1>
          <p> Para melhor acessibilidade, pedimos que preencha todos os campos do formulário abaixo. </p>
        </div>

      </header>
        
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
      <main>
          <div id="campos" class="col-6">
              <form action="salvarprofessor" method="POST">
                  <label>(*) Nome: </label>
                      <input type="text" name="nome" required>
                      <br>
                  <label>(*) CPF: </label>
                      <input type="text" name="cpf" required>
                      <br>
                  <label>(*) Email:</label>
                      <input type="email" name="email" required>
                      <br>
                  <label>(*) Senha:</label>
                      <input type="password" name="senha" required>
                      <br>
                  <label>(*) Telefone:</label>
                    <input type="text" name="telefone" required>
                    <br>
                    <label>(*) ID da Disciplina <br>
                            1. Administrador 2. Português 3. Matemática 4. HIstória 5. Geografia
                    </label>
                    <input type="text" name="disciplina" required>
                    <br>
                  <input type="submit" value="Enviar" name="Enviar" title="Login"/>
                </form>
            </div>                           
        </main> 
   </body>
</html>