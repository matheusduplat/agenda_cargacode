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




<div class="container">

    <form action="salvar/<?=$agenda['id_agend']?>" method="post">
   
    <input type="text" class="hidden" name="id_agend" value="<?=$agenda['id_agend']?>">
    
    <p>codigo fornecedor:</p>     
         <input type="text" name="cod_forne" class="form-control" value="<?= $agenda['id_forn']?>" placeholder="" required="">
                 <br>  
        <p>FORNECEDOR:</p>
        <input type="text" name="nome" class="form-control" value="<?= $agenda['nome_agend']?>"placeholder="" required="">
               <br>    
          
         <p>Data:</p>     
         <input type="date" name="data" class="form-control" value="<?= $agenda['data_agend']?>" placeholder="" required="">
                 <br>
         <p>
         
        
         <button class="btn btn-primary" type="submit">Salvar</button>     
         <?= anchor("/agenda/agendados?", "voltar", array("class"=> "btn btn-dark"));?>
    
    
    
    </form>


</div>



</html>