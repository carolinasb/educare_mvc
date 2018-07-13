<?php

if($this->session->userdata('login') == null){
  $this->load->helper('url');
  redirect('pagina/login_aluno');
}
//  usuario estao salvos nela. caso sim, nao faz nada
// do contrario, redirect pra pagina de login

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Educare</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style1.css') ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="logo.png">


        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/creative.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        
    </head>
    
    <body>

        <header class="header">
            <h1>Aluno</h1>

            <nav class="navegacao">
                <a href="<?php echo base_url('gerarsimulado'); ?>"> <i class="fa fa-plus"></i> Realizar Simulado</a>
                <a href="#adicionar"> <i class="fa fa-plus"></i> exemplo </a>
                <a href="#portfolio"> <i class="fa fa-folder"></i> exemplo</a>
                <a href="pdfs/1.pdf" target="_blank"> <i class="fa fa-folder-open"></i>  exemplo </a>
                <a href="<?php echo base_url('logoutaluno'); ?>"> Sair </a>
                
            </nav>

        </header>
        
        <br><br>
        <main>    
            <form style="margin-left:45%;"  name="procurar" action="processa_valor.php">
                <div class="submit-line">
                    <input style="width: 200px;" type="text" placeholder="Procure aqui os usuários..." value="" onkeyup="Envia(this.value)">
                    <button  class="submit-lente" type="submit" 
                             style="border-radius: 10px; color:rgba(220,20,60,.7); width:40px;">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
            
            <div style="display:none;">
              
            </div>
        </main>
         <script src="js/envia_valor.js" type="text/javascript" ></script>
        
    </body>
</html>
