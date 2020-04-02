<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/agenda_carga/bootstrap/css/style.css">

    <title>Agendamento Carga</title>



    
  </head>
 

  <header>
        <div class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: darkblue;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li  class="nav-item">
                            <a class="navbar-brand" href="<?= site_url("welcome/home")?>">Home</a>
                        </li>
    
                        <li  class="nav-item">
                            <a class="navbar-brand"   href="<?= site_url("welcome/agenda")?>">Agendar</a>
                        </li>
    
                        <li  class="nav-item">
                        <a class="navbar-brand" href="<?= site_url("agenda/agendados")?>">Lista de Agendados</a> 
                        </li>
                        </ul>    
            </div>
        </div>        
</header>
<body>
     
        <div class="container" style="text-align: center;" >
   <form class="form-signin" action="<?= site_url("agenda/novo")?>" method="post">                
                 
        
        <br>
        <p>codigo fornecedor:</p>     
         <input type="text" name="cod_forne" class="form-control" placeholder="" required="">
                 <br>  
        <p>FORNECEDOR:</p>
        <input type="text" name="nome" class="form-control" placeholder="" required="">
               <br>    
          
         <p>Data:</p>     
         <input type="date" name="data" class="form-control" placeholder="" required="">
                 <br>

        <p>Volume da Carga:</p> 
        <input type="text" name="volume" class="form-control" placeholder="" required="">
         <p>         
         Digite: 1-Area Seca  ||||  2-Frios/Congelados
         </p>
         
         <input type="text" name="area" class="form-control" placeholder="" required="">
                   <br>
        
         <button class="btn btn-lg btn-primary" type="submit">Agendar</button>       
                 <br><br><br>
         </form>
         <br><br><br>
         
    </div>
   

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
<br><br><br>
  
<?php include('footer/footer.php'); ?>

</html>