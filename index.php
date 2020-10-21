<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Projeto 01 </title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="<?php echo INCLUDE_PATH; ?>estilo/all.css" rel="stylesheet"/>
  <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet"/>
  <meta name="viewport" content=width=device-width, initial-scale=1.0>
  <meta charset="utf-8" />
  <meta name="description" content="Descrição do web Site">
  <meta name="keywords" content="palavras-chave,do,site">
</head>
<body>
  <header>
    <div class="logo">
      <img class="left" src="<?php echo INCLUDE_PATH; ?>imagens/Mary-Logo.png"></div><!--Logo-->
    </div><!-- Logo -->
    <div class="center">
      <nav class="desktop right">
        <ul>
          <li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
        </ul>
      </nav>
      
        <nav class="mobile right">
          <div class="botao-menu-mobile">
            <i class="fas fa-align-justify"></i>    
          </div>
          <ul>
            <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li> 
          </ul>
        </nav>
    </div><!--center-->
    <div class="clear"></div> 
  </header>
<?php

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
            
		}else{
			//Podemos fazer o que quiser, pois a página não existe.
			if($url != 'depoimentos' && $url != 'servicos'){
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}

	?>
  <footer>
    <div class="center">
      <img class="" src="<?php echo INCLUDE_PATH; ?>imagens/Mary-Logo.png"></div><!--Logo-->
      <p> Todos os Direitos Reservados</p>
    </div><!--center-->
  </footer>
  <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
  <script src="<?php echo INCLUDE_PATH; ?>js/sripts.js"></script>
  <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

</body>
</html>




    
