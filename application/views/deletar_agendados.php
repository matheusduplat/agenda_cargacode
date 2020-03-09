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


<body>
<div class="container" style="text-align: center;">
<h1>Deseja deletar o agendamento?</h1>
<br>



<br>
<?= anchor("/agenda/agendados?", "voltar", array("class"=> "btn btn-dark"));?>

<!--<a href="<?= base_url("agenda/delete?id=".$agenda['id_agend'])   ?>" class="btn btn-danger">Cancelar Consulta</a>-->
<a href="<?= site_url("agenda/delete?id=".$agenda['id_agend'])   ?>" class="btn btn-danger">Deletar</a>
</div>
</body>
</html>