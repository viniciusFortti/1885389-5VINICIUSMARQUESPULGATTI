<h1 id="titulo">Pulgatti I.T</h1>

<h3 id="titulo">Serviço:</h3>

<?php
  include ("./data/data.php");

  if (isset($_GET["id"]) && !empty($_GET["id"])) {
      $id = $_GET["id"];
  } else {
  return 0;
  }

  foreach ($servicos as $value) { 
    if ($value["id"] == $id) {
  	 ?>		
    <div id="servicos">
        <h4>Servico:  <?=$value['title'];?></h4>  
        <p>Descrição: <?=$value['description'];?></p>
        <p>Linguagem: <?=$value['linguagem'];?></p>
        <p>Linguagem: <?=$value['arquitetura'];?></p>
        <p>Linguagem: <?=$value['metodologia'];?></p>
        <img src=<?=$value['img'];?>>
    </div>
<?php
    }
  }       
?>
