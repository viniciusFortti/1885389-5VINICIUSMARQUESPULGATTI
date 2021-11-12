<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <title>Pulgatti I.T</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include 'pages/header.php';    
    
    if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
        $pagina = "pages/".$_GET["pagina"];
        include ($pagina);
    } else {
        include ("pages/home.php");
    }
?>

    <?php include 'pages/footer.php';?>
</body>

</html>