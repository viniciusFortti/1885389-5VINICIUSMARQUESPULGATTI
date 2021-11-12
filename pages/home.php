<h1 id="titulo">Pulgatti I.T</h1>

<h3 id="titulo">Serviços Prestados pela empresa :</h3>

<?php
  include ("./data/data.php");

    foreach ($servicos as $value) { 
    ?>
    <div id="servicos">
        <h4><?=$value['title'];?></h4>      
        <p>
        	<a href="index.php?pagina=servico.php&id=<?=$value['id'];?>">     
        		<img src=<?=$value['img'];?>>
        	</a>
        </p>
    </div>
<?php
} 
