<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
     <?php 
        $numero = $_REQUEST["num"]??0;
        $sucessor =   $numero + 1;
        $antecessor = $numero - 1 ;

        echo(" O número que vc escolheu foi $numero");
        echo(" <br>O Sucessor de $numero é $sucessor");
        echo(" <br>O Antecessor de $numero é $antecessor");
     
     
     ?>
     <button onclick="javascript:history.go(-1)"> VOltar
    </main>
</body>
</html>