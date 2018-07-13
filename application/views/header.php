<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png')?>"/>
    <title>Educare</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href= "<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>"/>

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" type="text/css" href= "<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" />
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'>
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href= "<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css')?>" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href= "<?php echo base_url('assets/css/creative.min.css')?>" />
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href=" <?php echo base_url(); ?>">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="color:#DC143C;">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('loginaluno'); ?>">Login do Aluno</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('loginprofessor'); ?>">Login ADM</a>
            </li>
		<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('#services'); ?>"> Curiosidades</a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('#portfolio'); ?>">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('#contact'); ?>">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php echo base_url('cadastraraluno'); ?>">Cadastro de Aluno</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading"> Educare</h1>
          <hr>
          <p>Investigando a efetividade do uso de objetos de aprendizagem em cursos preparatórios para processos seletivos</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="<?php echo base_url('#about'); ?>">Sobre nós...</a>
        </div>
      </div>
    </header>