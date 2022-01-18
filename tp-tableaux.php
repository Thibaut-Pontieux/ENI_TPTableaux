<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majhong</title>
    <style>
body{
	margin:0;
	background-image: url("bg.png");
}
.rouge{
		border-color: tomato!important; 
}
.green{
		border-color: green!important; 
		opacity: 0.60;
}
.container{
	padding: 1px;
	margin-top: 60px;
	margin-left: auto;
	margin-right: auto;
	width:672px;
	height:480px;
	background-color:  rgba(200,200,200,0.6);
	/* ombres */
	-webkit-box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75);
	-moz-box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75);
	box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75); 
}
.container div {
	cursor: pointer;
	float: left;
	width: 80px;
	height: 116px;
	border-color: #ccc; 
	border-style: solid;
    border-width: 2px;
}
.container div:hover {
	opacity: 0.60;
}
#demo{
	width:100px;
    margin-left: auto;
	margin-right: auto;

}
</style>

</head>
<body>
    <div class="container">
        <?php
            session_start();
			// Étape 1
            $tab = range(0,41);

			// Étape 2
            shuffle($tab);

			// Étape 3
            array_splice($tab, 16);

			// Étape 4
            $tab2 = array_merge($tab, $tab);

			// Étape 5
            shuffle($tab2);
            
			// Étape 6
            $_SESSION["tab"] = $tab2;
            foreach($_SESSION["tab"] as $x)
            {
                echo("<div><img src='./images/".$x.".jpg' width='80' data-id=".$x."></div>");
            }
        ?>
    </div>
</body>
</html>