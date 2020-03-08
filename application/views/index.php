<html lang="pt-br"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
    
        <title>Agendamento Carga</title>
    
        <!-- Principal CSS do Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        <link rel="stylesheet" href="http://localhost/agenda_carga/bootstrap/css/style.css">
       
      </head>
    
     
     
      <body>

      <!-- login -->     

        <div class="container" style="text-align: center;">
        <?php if($this->session->flashdata("danger")):?>
 
          <p class="alert alert-danger"><?= $this->session->flashdata("danger")?> </p>      
        
              <?php endif ?>

        <form class="form-signin" action="<?= site_url("logar/autenticar")?>" method="post">
          
          <img class="mb-4" src="http://localhost/agenda_carga/bootstrap/img/logo.png" alt="" width="72%" height="30%">
          <h1 class="h3 mb-3 font-weight-normal"></h1>
          <input type="text"  class="form-control" placeholder="Login" required="" name="login">
          <br>
          
          <input type="password"  class="form-control" name="senha" placeholder="Senha" required="">
          <br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
         
        </form>
    </div>
    <br>
    
    </body>
    
<?php include('footer/footer.php'); ?>

    </html>