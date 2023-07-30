<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade = 14;
        $peso = 55;
    ?>

    <h1>Verificação para doar sangue (estatico)</h1>
    <h2>
        Confirmar requisitos <br>
    </h2>
        <?php
        if($idade >= 16 && $peso >= 50){
            echo "Segundo as confimações feitas você tem {$idade}  anos, e pesa {$peso} kg <br> Parabéns, atende os requisitos.";
        }else{
            echo "Segundo as confimações feitas você tem {$idade}  anos, e pesa {$peso} kg <br> Desculpe, não atende os requisitos."; 
        }
        ?>
   
    
</body>
</html>