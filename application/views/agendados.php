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

    
    <div class="container">
        <br><br>
 <form class="form-inline my-2 my-lg-0" method="post" action="<?= site_url("agenda/pesquisar")?>">
       <input class="form-control mr-sm-2" type="search" name="pesquisar" placeholder="Filtrar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
        </form>

<br>

 <table class="table">
  <thead class="thead-dark">
    <tr >
      <th scope="col">Fornecedor</th>
      <th scope="col">Data</th>
      <th scope="col">Volume Da carga</th>
      <th scope="col">Área</th>
      
      <th></th>
        </tr>
  </thead>
  <tbody>
  <?php foreach($agenda as $agendados):?>
    <tr>
      <td ><?= $agendados['nome_agend']?></td>
      <td><?= $agendados['data_agend']?></td>
      <td><?= $agendados['volume']?></td>
      <td><?= $agendados['nome_area']?></td>
      
      <td >        
        <?= anchor("agenda/editar?id={$agendados['id_agend']}", "Alterar", array("class"=> "btn btn-primary ",))?> 
         
             
        <?= anchor("agenda/detalhe?id={$agendados['id_agend']}", "Deletar", array("class"=> "btn btn-danger"))?> 
        </td>          
    </tr>    
    <?php endforeach ?> 
  </tbody>
</table>
<br><br><br>
    </div>
  
    

    

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<?php include('footer/footer.php'); ?>

</html>